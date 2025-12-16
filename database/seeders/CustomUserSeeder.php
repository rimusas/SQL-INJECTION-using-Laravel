<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('custom_users')->insert([
            [
                'username' => 'admin',
                'password' => 'rahasia123',
            ],
            [
                'username' => 'dosen',
                'password' => 'dosen123',
            ],
            [
                'username' => 'mahasiswa',
                'password' => 'mhs123',
            ]
        ]);
    }
}
