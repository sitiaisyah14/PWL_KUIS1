<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeeBaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'remember_token' => null,
            'email' => 'admin@gmail.com',
            'gender' => 'L',
            'place_of_birth' => 'Pasuruan',
            'date_of_birth' => '2001-12-18',
            'phone_number' => '081321123321',
            'status' => 'Belum Kawin',
            'position' => 'CEO',
            'wages' => 1000000,
        ]);
    }
}
