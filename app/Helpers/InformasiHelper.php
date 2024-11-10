<?php

namespace App\Helpers;

use App\Models\TmstHdrArtikelModel;
use App\Models\TmstTipsHerbalModel;
use Illuminate\Pagination\LengthAwarePaginator;

class InformasiHelper
{
    public static function filterInformasi($request)
    {
        // Query untuk artikel
        $artikelQuery = TmstHdrArtikelModel::with('kategori:id,nama')
            ->select(['id', 'nama', 'kesimpulan', 'id_kategori']); // Menambahkan 'id' di sini

        // Query untuk tips herbal
        $tipsQuery = TmstTipsHerbalModel::with('kategori:id,nama')
            ->select(['id', 'judul as nama', 'tips', 'manfaat', 'id_kategori']); // Menambahkan 'id' di sini

        // Filter berdasarkan nama atau judul
        if ($request->has('name') && !empty($request->name)) {
            $artikelQuery->where('nama', 'like', '%' . $request->name . '%');
            $tipsQuery->where('judul', 'like', '%' . $request->name . '%');
        }

        // Filter berdasarkan kategori
        if ($request->has('id_kategori') && !empty($request->id_kategori)) {
            $artikelQuery->where('id_kategori', $request->id_kategori);
            $tipsQuery->where('id_kategori', $request->id_kategori);
        }

        // Mendapatkan hasil query dan memetakan data
        $artikels = $artikelQuery->get()->map(function ($artikel) {
            return [
                'id' => $artikel->id, // Menambahkan ID artikel
                'nama' => $artikel->nama,
                'deskripsi' => $artikel->kesimpulan,
                'kategori' => $artikel->kategori->nama ?? 'Tanpa Kategori'
            ];
        });

        $tips = $tipsQuery->get()->map(function ($tip) {
            return [
                'id' => $tip->id, // Menambahkan ID tip herbal
                'nama' => $tip->nama,
                'deskripsi' => $tip->tips . ' - ' . $tip->manfaat,
                'kategori' => $tip->kategori->nama ?? 'Tanpa Kategori'
            ];
        });

        // Menggabungkan artikel dan tips dalam satu collection
        if ($artikels->isEmpty() && !$tips->isEmpty()) {
            $informasi = $tips;
        } elseif (!$artikels->isEmpty() && $tips->isEmpty()) {
            $informasi = $artikels;
        } else {
            $informasi = $artikels->merge($tips);
        }

        // Sorting data setelah digabungkan
        if ($request->has('sort_by')) {
            $order = $request->sort_by === 'az' ? 'asc' : 'desc';
            $informasi = $informasi->sortBy('nama', SORT_REGULAR, $order === 'desc');
        }

        // Pagination manual
        $perPage = 10;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = $informasi->slice(($currentPage - 1) * $perPage, $perPage)->values();

        return new LengthAwarePaginator(
            $currentItems,
            $informasi->count(),
            $perPage,
            $currentPage,
            ['path' => $request->url(), 'query' => $request->query()]
        );
    }
}
