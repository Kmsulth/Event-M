<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SultanUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'pengguna',
                'email'=>'pengguna@gmail.com',
                'role'=>'pengguna',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'penyelenggara',
                'email'=>'penyelenggara@gmail.com',
                'role'=>'penyelenggara',
                'password'=>bcrypt('123456')
            ]
            ];
        
            foreach ($userData as $key => $val){
                User::create($val);
            }
    }
}
