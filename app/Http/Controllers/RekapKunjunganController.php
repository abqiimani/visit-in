<?php

namespace App\Http\Controllers;

use App\Models\DataPengunjung;
use Illuminate\Http\Request;

class RekapKunjunganController extends Controller
{
    public function index()
    {
        $pengunjungs = DataPengunjung::orderBy(
            'tanggal_kunjungan',
            'desc'
        )->get();

        $totalKunjungan = $pengunjungs->count();

        $jumlahPengunjung = $pengunjungs->sum(
            'jumlah_pengunjung'
        );

        $kategoriTerbanyak = $pengunjungs
            ->groupBy('kategori_pengunjung')
            ->map(function ($data) {
                return $data->sum('jumlah_pengunjung');
            })
            ->sortDesc()
            ->keys()
            ->first();

        return view(
            'pages.rekap-kunjungan.index',
            compact(
                'pengunjungs',
                'totalKunjungan',
                'jumlahPengunjung',
                'kategoriTerbanyak'
            )
        );
    }
}