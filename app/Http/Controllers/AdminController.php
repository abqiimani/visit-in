<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Menampilkan semua data admin.
     */
    public function index()
    {
        $user = User::all();

        return view('pages.admin.index', compact('user'));
    }

    /**
     * Menampilkan halaman tambah admin.
     */
    public function create()
    {
        return view('pages.admin.create');
    }

    /**
     * Menyimpan data admin baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:225',
            'email' => 'required|string|email|max:225|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()
            ->route('admin.admin.index')
            ->with('success', 'Data admin berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail admin.
     */
    public function show(string $id)
    {
        $user = User::findOrFail(decrypt($id));

        return view('pages.admin.show', compact('user'));
    }

    /**
     * Menampilkan halaman edit admin.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail(decrypt($id));

        return view('pages.admin.edit', compact('user'));
    }

    /**
     * Memperbarui data admin.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail(decrypt($id));

        $request->validate([
            'name' => 'required|string|max:225',
            'email' => 'required|string|email|max:225|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()
            ->route('admin.admin.index')
            ->with('success', 'Data admin berhasil diubah.');
    }

    /**
     * Menghapus data admin.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail(decrypt($id));

        $user->delete();

        return redirect()
            ->route('admin.admin.index')
            ->with('success', 'Data admin berhasil dihapus.');
    }
}