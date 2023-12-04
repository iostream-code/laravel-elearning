<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'username' => 'jokoprambodo',
                'email' => 'joko@gmail.com',
                'password' => Hash::make('user123'),
                'status' => 'dosen',
            ],
            [
                'username' => 'andrekurniawan',
                'email' => 'andre@gmail.com',
                'password' => Hash::make('user123'),
                'status' => 'mahasiswa',
            ]
        ];

        User::insert($data);
    }
}
