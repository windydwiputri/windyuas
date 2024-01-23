<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Hash;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "Windy Dwi Putri",
            'email' => "windydwiputri21@gmail.com",
            'password' => Hash::make("12345678"),
            // 'level' => 'admin',
			]);

    }
}
