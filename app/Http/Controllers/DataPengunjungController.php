<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPengunjung;

class DataPengunjungController extends Controller
{
    // Menampilkan form data kunjungan
    public function create()
    {
        return view('pengunjung.create');
    }

    // Menyimpan data pengunjung
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'asal_daerah' => 'required|string|max:255',
            'kategori_pengunjung' => 'required|string|max:50',
            'jumlah_pengunjung' => 'required|integer|min:1',
            'tanggal_kunjungan' => 'required|date',
        ]);

        DataPengunjung::create($validated);

        // Setelah berhasil disimpan, pindah ke halaman konfirmasi
        return redirect()->route('pengunjung.konfirmasi');
    }

    // Menampilkan halaman konfirmasi
    public function konfirmasi()
    {
        return view('pengunjung.konfirmasi');
    }
}