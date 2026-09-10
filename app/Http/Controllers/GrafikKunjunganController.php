<?php

namespace App\Http\Controllers;

use App\Models\DataPengunjung;
use Illuminate\Http\Request;

class GrafikKunjunganController extends Controller
{
    public function index(Request $request)
    {
        // Query dasar
        $query = DataPengunjung::query();

        // Filter periode awal
        if ($request->filled('tanggal_awal')) {
            $query->whereDate(
                'tanggal_kunjungan',
                '>=',
                $request->tanggal_awal
            );
        }

        // Filter periode akhir
        if ($request->filled('tanggal_akhir')) {
            $query->whereDate(
                'tanggal_kunjungan',
                '<=',
                $request->tanggal_akhir
            );
        }

        // Filter kategori
        if ($request->filled('kategori_pengunjung')) {
            $query->where(
                'kategori_pengunjung',
                $request->kategori_pengunjung
            );
        }

        // Ambil data
        $pengunjungs = $query
            ->orderBy('tanggal_kunjungan', 'asc')
            ->get();

        /*
        |--------------------------------------------------------------------------
        | Data grafik berdasarkan tanggal
        |--------------------------------------------------------------------------
        */

        $grafik = $pengunjungs
            ->groupBy(function ($item) {
                return \Carbon\Carbon::parse(
                    $item->tanggal_kunjungan
                )->format('d/m');
            })
            ->map(function ($data) {
                return $data->sum('jumlah_pengunjung');
            });

        $labelGrafik = $grafik->keys()->values()->toArray();

        $dataGrafik = $grafik->values()->map(function ($jumlah) {
            return (int) $jumlah;
        })->values()->toArray();

        /*
        |--------------------------------------------------------------------------
        | Total pengunjung
        |--------------------------------------------------------------------------
        */

        $totalPengunjung = $pengunjungs->sum(
            'jumlah_pengunjung'
        );

        /*
        |--------------------------------------------------------------------------
        | Kategori
        |--------------------------------------------------------------------------
        */

        $kategori = DataPengunjung::query()
            ->select('kategori_pengunjung')
            ->distinct()
            ->orderBy('kategori_pengunjung')
            ->pluck('kategori_pengunjung');

        return view(
            'pages.grafik-kunjungan.index',
            compact(
                'labelGrafik',
                'dataGrafik',
                'totalPengunjung',
                'kategori'
            )
        );
    }
}