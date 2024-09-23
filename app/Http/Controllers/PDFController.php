<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF; // Memanggil alias

class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Laporan Penjualan',
            'date' => date('m/d/Y')
        ];

        // Load view dan convert menjadi PDF
        $pdf = PDF::loadView('pdf_template', $data);

        // Mengunduh file PDF
        return $pdf->download('laporan-penjualan.pdf');
    }
}
