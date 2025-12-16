<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomUser extends Model
{
    use HasFactory;

    // Nama tabel di database yang digunakan
    protected $table = 'custom_users';
}
