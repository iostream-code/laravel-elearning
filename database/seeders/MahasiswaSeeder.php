<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::insert([
            'user_id' => 3,
            'nim' => '3120600012',
            'nama' => 'Andre Kurniawan',
            'gender' => 1,
            'tgl_lahir' => '2001-09-12',
            'asal' => 'Surabaya',
        ]);
    }
}
