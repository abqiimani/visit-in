<?php

namespace App\Http\Controllers;

use App\Models\DataPengunjung;
use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengunjungs = DataPengunjung::paginate(10);

        return view('pages.pengunjung.index', compact('pengunjungs'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id = decrypt($id);

        $pengunjung = DataPengunjung::findOrFail($id);

        return view('pages.pengunjung.show', compact('pengunjung'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = decrypt($id);

        $pengunjung = DataPengunjung::findOrFail($id);

        $pengunjung->delete();

        return redirect()->route('admin.pengunjung.index')
            ->with('success', 'Data pengunjung berhasil dihapus.');
    }
}