<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class DataTableHelper
{
    public static function getTablesQuery($query, $searchableColumns, $whereConditions = [], $isWhere = null)
    {
        // Ambil data yang di ketik user pada textbox pencarian
        $search = request()->input('search.value', '');
        // Ambil data limit per page
        $limit = (int)request()->input('length', 10);
        // Ambil data start
        $start = (int)request()->input('start', 0);

        // Membuat query dasar
        $baseQuery = DB::table(DB::raw("($query) as base")); // menggunakan subquery jika diperlukan

        // Menambahkan kondisi WHERE
        if (!empty($whereConditions)) {
            foreach ($whereConditions as $key => $value) {
                // MENAMBAHKAN KONDISI NOT IN
                if (strpos($key, 'NOT IN') !== false) {
                    $baseQuery->whereNotIn(DB::raw($key), (array)$value);
                } else {
                    $baseQuery->where($key, '=', $value);
                }
            }
        }

        // Pencarian
        if (!empty($search)) {
            $baseQuery->where(function ($query) use ($searchableColumns, $search) {
                foreach ($searchableColumns as $column) {
                    $query->orWhere($column, 'LIKE', "%$search%");
                }
            });
        }

        // Menghitung total record
        $totalRecords = $baseQuery->count();

        // Mengurutkan hasil
        if (request()->has('order')) {
            $orderColumnIndex = request()->input('order.0.column');
            $orderDirection = request()->input('order.0.dir');
            $orderColumn = request()->input("columns.$orderColumnIndex.data");
            $baseQuery->orderBy($orderColumn, $orderDirection);
        }

        // Paginasi
        $data = $baseQuery->offset($start)->limit($limit)->get();

        // Menghitung jumlah record setelah filtering
        $filteredRecords = $baseQuery->count();

        // Siapkan respon
        return response()->json([
            'draw' => request()->input('draw', 1), // Draw dari DataTables
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $filteredRecords,
            'data' => $data
        ]);
    }
}
