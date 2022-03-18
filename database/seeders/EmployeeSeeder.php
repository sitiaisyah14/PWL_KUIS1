<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Handika Pratama',
                'gender' => 'Laki-laki',
                'place_of_birth' => 'Malang',
                'date_of_birth' => '1995-11-11',
                'phone_number' => '083865091921',
                'status' => 'Sudah Kawin',
                'position' => 'Owner',
                'wages' => '10000000',
            ],
            [
                'name' => 'Halifan Izmi Oktavian',
                'gender' => 'Laki-laki',
                'place_of_birth' => 'Probolinggo',
                'date_of_birth' => '2001-10-18',
                'phone_number' => '083865091921',
                'status' => 'Belum Kawin',
                'position' => 'Chief Executive Officer (CEO)',
                'wages' => '8500000',
            ],
            [
                'name' => 'Siti Aisyah',
                'gender' => 'Perempuan',
                'place_of_birth' => 'Pasuruan',
                'date_of_birth' => '2002-01-14',
                'phone_number' => '083857129219',
                'status' => 'Belum Kawin',
                'position' => 'Chief Financial Officer (CFO) ',
                'wages' => '8000000',
            ],
            [
                'name' => 'Aprilia Faranisa Azni',
                'gender' => 'Perempuan',
                'place_of_birth' => 'Pasuruan',
                'date_of_birth' => '2001-04-17',
                'phone_number' => '085677818991',
                'status' => 'Belum Kawin',
                'position' => 'Chief Technology Officer (CTO)',
                'wages' => '7500000',
            ],
            [
                'name' => 'Handra Rahmano',
                'gender' => 'Laki-laki',
                'place_of_birth' => 'Surabaya',
                'date_of_birth' => '1999-03-20',
                'phone_number' => '085692345771',
                'status' => 'Belum Kawin',
                'position' => 'Head of Production',
                'wages' => '7000000',
            ],
            [
                'name' => 'Alvina Khoiriyah',
                'gender' => 'Perempuan',
                'place_of_birth' => 'Bojonegoro',
                'date_of_birth' => '1997-04-30',
                'phone_number' => '083991723541',
                'status' => 'Belum Kawin',
                'position' => 'Head of Marketing',
                'wages' => '7000000',
            ],
            [
                'name' => 'Rina Sania',
                'gender' => 'Perempuan',
                'place_of_birth' => 'Kediri',
                'date_of_birth' => '1998-08-12',
                'phone_number' => '083821733902',
                'status' => 'Belum Kawin',
                'position' => 'Head of Warehouse',
                'wages' => '7000000',
            ],
            [
                'name' => 'Arwin Santosa',
                'gender' => 'Laki-laki',
                'place_of_birth' => 'Surabaya',
                'date_of_birth' => '2001-05-28',
                'phone_number' => '083855231522',
                'status' => 'Belum Kawin',
                'position' => 'Quality Control',
                'wages' => '7250000',
            ],
            [
                'name' => 'Rohimah Dahlia',
                'gender' => 'Perempuan',
                'place_of_birth' => 'Blitar',
                'date_of_birth' => '1999-09-11',
                'phone_number' => '083852863321',
                'status' => 'Belum Kawin',
                'position' => 'Quality Control',
                'wages' => '7250000',
            ],
            [
                'name' => 'Agustian Winarto',
                'gender' => 'Laki-laki',
                'place_of_birth' => 'Malang',
                'date_of_birth' => '2001-03-21',
                'phone_number' => '083855231522',
                'status' => 'Belum Kawin',
                'position' => 'Production Employee',
                'wages' => '6000000',
            ],
            [
                'name' => 'Hadi Wijaya',
                'gender' => 'Laki-laki',
                'place_of_birth' => 'Surabaya',
                'date_of_birth' => '2001-05-05',
                'phone_number' => '082890741882',
                'status' => 'Belum Kawin',
                'position' => 'Production Employee',
                'wages' => '6000000',
            ],
            [
                'name' => 'Renaldi Fajar',
                'gender' => 'Laki-laki',
                'place_of_birth' => 'Malang',
                'date_of_birth' => '2001-07-02',
                'phone_number' => '083900218654',
                'status' => 'Belum Kawin',
                'position' => 'Warehouse employee',
                'wages' => '6000000',
            ],
            [
                'name' => 'Dody Sudrajat',
                'gender' => 'Laki-laki',
                'place_of_birth' => 'Blitar',
                'date_of_birth' => '2000-07-19',
                'phone_number' => '083872109775',
                'status' => 'Belum Kawin',
                'position' => 'Warehouse employee',
                'wages' => '6000000',
            ],
            [
                'name' => 'Mayang Putri Wanita',
                'gender' => 'Perempuan',
                'place_of_birth' => 'Surabaya',
                'date_of_birth' => '2000-03-24',
                'phone_number' => '083211786233',
                'status' => 'Belum Kawin',
                'position' => 'Marketing Employee',
                'wages' => '6000000',
            ],
            [
                'name' => 'Chika Hastuti',
                'gender' => 'Perempuan',
                'place_of_birth' => 'Banyuwangi',
                'date_of_birth' => '2001-11-23',
                'phone_number' => '083061118219',
                'status' => 'Belum Kawin',
                'position' => 'Marketing Employee',
                'wages' => '6000000',
            ],
        ];
        DB::table('employees')->insert($data);
    }
}
