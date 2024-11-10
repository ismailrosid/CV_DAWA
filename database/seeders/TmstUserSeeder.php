<?php

namespace Database\Seeders;

use App\Models\TmstUserModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;  // Pastikan ini ditambahkan

class TmstUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan data pengguna contoh dengan Hash::make
        TmstUserModel::create([
            'username' => 'admin',
            'password' => Hash::make('admin'),  // Hash password dengan Hash::make
        ]);
    }
}
