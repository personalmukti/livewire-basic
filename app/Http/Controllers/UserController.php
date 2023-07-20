<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Validasi data dari request jika diperlukan
        // Simpan data pengguna ke dalam database
        User::create($request->all());

        // Redirect ke halaman daftar pengguna
        return redirect()->route('users.index')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Validasi data dari request jika diperlukan
        // Update data pengguna di dalam database
        $user->update($request->all());

        // Redirect ke halaman daftar pengguna
        return redirect()->route('users.index')->with('success', 'Pengguna berhasil diperbarui.');
    }

    public function destroy(User $user)
    {
        // Hapus data pengguna dari database
        $user->delete();

        // Redirect ke halaman daftar pengguna
        return redirect()->route('users.index')->with('success', 'Pengguna berhasil dihapus.');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
}
