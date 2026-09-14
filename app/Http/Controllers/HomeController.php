<?php

namespace App\Http\Controllers;

use App\Models\DataPengunjung;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | TOTAL PENGUNJUNG
        |--------------------------------------------------------------------------
        | Menjumlahkan jumlah orang dari seluruh data kunjungan.
        */
        $totalPengunjung = DataPengunjung::sum('jumlah_pengunjung');


        /*
        |--------------------------------------------------------------------------
        | KUNJUNGAN HARI INI
        |--------------------------------------------------------------------------
        */
        $kunjunganHariIni = DataPengunjung::whereDate(
            'tanggal_kunjungan',
            Carbon::today()
        )->sum('jumlah_pengunjung');


        /*
        |--------------------------------------------------------------------------
        | KUNJUNGAN BULAN INI
        |--------------------------------------------------------------------------
        */
        $kunjunganBulanIni = DataPengunjung::whereYear(
            'tanggal_kunjungan',
            Carbon::now()->year
        )
            ->whereMonth(
                'tanggal_kunjungan',
                Carbon::now()->month
            )
            ->sum('jumlah_pengunjung');


        /*
        |--------------------------------------------------------------------------
        | KATEGORI PENGUNJUNG TERBANYAK
        |--------------------------------------------------------------------------
        */
        $kategoriTerbanyak = DataPengunjung::select(
            'kategori_pengunjung'
        )
            ->selectRaw('SUM(jumlah_pengunjung) as total')
            ->groupBy('kategori_pengunjung')
            ->orderByDesc('total')
            ->first();


        /*
        |--------------------------------------------------------------------------
        | TOTAL DATA KUNJUNGAN
        |--------------------------------------------------------------------------
        | Berbeda dengan Total Pengunjung.
        |
        | Contoh:
        | 10 data kunjungan bisa berisi 50 orang.
        */
        $totalDataKunjungan = DataPengunjung::count();


        /*
        |--------------------------------------------------------------------------
        | RATA-RATA JUMLAH PENGUNJUNG PER KUNJUNGAN
        |--------------------------------------------------------------------------
        */
        $rataRataPengunjung = DataPengunjung::avg(
            'jumlah_pengunjung'
        );


        /*
        |--------------------------------------------------------------------------
        | KATEGORI TERBANYAK UNTUK RINGKASAN
        |--------------------------------------------------------------------------
        */
        $namaKategoriTerbanyak = $kategoriTerbanyak
            ? $kategoriTerbanyak->kategori_pengunjung
            : 'Belum Ada';


        /*
        |--------------------------------------------------------------------------
        | JUMLAH PENGUNJUNG KATEGORI TERBANYAK
        |--------------------------------------------------------------------------
        */
        $jumlahKategoriTerbanyak = $kategoriTerbanyak
            ? $kategoriTerbanyak->total
            : 0;


        return view('home', compact(
            'totalPengunjung',
            'kunjunganHariIni',
            'kunjunganBulanIni',
            'namaKategoriTerbanyak',
            'jumlahKategoriTerbanyak',
            'totalDataKunjungan',
            'rataRataPengunjung'
        ));
    }
}