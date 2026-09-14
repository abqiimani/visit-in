<?php

namespace App\Http\Controllers;

use App\Models\DataPengunjung;
use Illuminate\Http\Request;

class RekapKunjunganController extends Controller
{
    public function index(Request $request)
    {
        // Query dasar data pengunjung
        $query = DataPengunjung::query();

        // Filter berdasarkan periode awal
        if ($request->filled('tanggal_awal')) {
            $query->whereDate(
                'tanggal_kunjungan',
                '>=',
                $request->tanggal_awal
            );
        }

        // Filter berdasarkan periode akhir
        if ($request->filled('tanggal_akhir')) {
            $query->whereDate(
                'tanggal_kunjungan',
                '<=',
                $request->tanggal_akhir
            );
        }

        // Filter berdasarkan kategori pengunjung
        if ($request->filled('kategori_pengunjung')) {
            $query->where(
                'kategori_pengunjung',
                $request->kategori_pengunjung
            );
        }

        // Ambil data sesuai filter
        $pengunjungs = $query
            ->orderBy('tanggal_kunjungan', 'desc')
            ->get();

        // Total data kunjungan
        $totalKunjungan = $pengunjungs->count();

        // Total jumlah individu pengunjung
        $jumlahPengunjung = $pengunjungs->sum(
            'jumlah_pengunjung'
        );

        // Cari kategori dengan jumlah pengunjung terbanyak
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