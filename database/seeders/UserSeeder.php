<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'rizky',
                'email' => 'rizky@gmail.com',
                'password' => Hash::make('1234'),
                'username' => 'rizky',
                'level' => '1'
            ],
            [
                'name' => 'tito',
                'email' => 'tito@gmail.com',
                'password' => Hash::make('1234'),
                'username' => 'tito',
                'level' => '2'
            ]
        ]);
    }
}
