<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun_pengguna extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'nomor_telephone',
        'email_akun',
        'username_akun',
        'password_akun',
    ];
}
