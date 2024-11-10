<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Ubah ini dari Model ke Authenticatable
use Illuminate\Support\Facades\Hash;

class TmstUserModel extends Authenticatable
{
    use HasFactory;

    // Menentukan nama tabel
    protected $table = 'tmst_user';

    // Menentukan field yang bisa diisi
    protected $fillable = [
        'username',
        'password',
    ];
}
