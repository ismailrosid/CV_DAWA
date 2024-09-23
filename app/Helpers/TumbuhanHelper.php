<?php

namespace App\Helpers;

use App\Models\Tumbuhan;

class TumbuhanHelper
{
    public static function filterTumbuhan($request)
    {
        // Mulai query ke model Tumbuhan
        $query = Tumbuhan::query();

        // Filter berdasarkan nama tumbuhan (jika ada input 'name' di request)
        if ($request->has('name') && !empty($request->name)) {
            $query->where('nama_tumbuhan', 'like', '%' . $request->name . '%');
        }

        // Filter berdasarkan huruf pertama dari nama tumbuhan (jika ada input 'letter' di request)
        if ($request->has('letter') && !empty($request->letter)) {
            $query->where(
                'nama_tumbuhan',
                'like',
                $request->letter . '%'
            );
        }

        // Sorting berdasarkan pilihan pengguna
        if ($request->has('sort_by')) {
            if ($request->sort_by == 'az') {
                $query->orderBy('nama_tumbuhan', 'asc');
            } elseif ($request->sort_by == 'za') {
                $query->orderBy('nama_tumbuhan', 'desc');
            }
        }

        // Kembalikan hasil query dengan pagination
        return $query->paginate(10); // Ubah jumlah item per halaman jika diperlukan
    }
}
