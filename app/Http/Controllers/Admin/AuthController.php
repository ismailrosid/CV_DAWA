<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;


use App\Models\TmstUserModel;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.login.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function auth(Request $request)
    {

        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Username harus diisi.',
            'password.required' => 'Password harus diisi.',
        ]);


        // Cari pengguna berdasarkan username
        $user = TmstUserModel::where('username', $request->username)->first();

        // Cek jika user ditemukan dan password cocok
        if ($user && Hash::check($request->password, $user->password)) {
            // Jika berhasil login, melakukan login
            Auth::login($user);

            return redirect()->route('admin.dashboard')->with('welcome', 'Selamat datang di dashboard!');
        }

        // Jika gagal login, kembalikan ke halaman login dengan pesan error
        return redirect()->route('admin.login')->with('error', 'Username atau password salah.');
    }

    public function logout(Request $request)
    {
        Auth::logout();  // Mengeluarkan pengguna yang sedang login

        // Hapus sesi dan redirect ke halaman login
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
