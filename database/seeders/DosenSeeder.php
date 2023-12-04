<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'nip' => '9999999999999999',
                'nama' => 'Admin',
                'is_admin' => true,
                'gender' => 1,
                'usia' => 0,
                'asal' => '',
            ],
            [
                'user_id' => 2,
                'nip' => '1998091220151001',
                'nama' => 'Joko Prambodo',
                'is_admin' => false,
                'gender' => 1,
                'usia' => 35,
                'asal' => 'Surabaya',
            ],
        ];

        Dosen::insert($data);
    }
}
