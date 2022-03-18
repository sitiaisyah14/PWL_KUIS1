<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datacustomer =[
            [
                'foto_customer' => 'https://randomuser.me/api/portraits/women/3.jpg',
                'nama_customer' => 'Britnie Aprilia',
                'gender' => 'P',
                'tempat_lahir' => 'Nganjuk',
                'tgl_lahir' => '2001-01-18',
                'alamat' => 'Jl.Nganjuk 1, Kecamatan Sukorejo, Kabupaten Pasuruan',
                'no_hp' => '081234567667'
            ],
            [
                'foto_customer' => 'https://randomuser.me/api/portraits/women/62.jpg',
                'nama_customer' => 'Mega Bintang Suratmi',
                'gender' => 'P',
                'tempat_lahir' => 'Semarang',
                'tgl_lahir' => '1999-12-19',
                'alamat' => 'Jl.Semarang 5, Kecamatan Pandaan, Kabupaten Pasuruan',
                'no_hp' => '081456789123'
            ],
            [
                'foto_customer' => 'https://randomuser.me/api/portraits/men/64.jpg',
                'nama_customer' => 'Abdul Joseph',
                'gender' => 'L',
                'tempat_lahir' => 'Bojonegoro',
                'tgl_lahir' => '1999-01-07',
                'alamat' => 'Jl.Bojonegoro , Kecamatan Sukun, Kabupaten Malang',
                'no_hp' => '081674876543'
            ],
            [
                'foto_customer' => 'https://randomuser.me/api/portraits/men/26.jpg',
                'nama_customer' => 'Boy Supratno',
                'gender' => 'L',
                'tempat_lahir' => 'Magelang',
                'tgl_lahir' => '1998-12-18',
                'alamat' => 'Jl.Magelang, Kecamatan Bedung Adem, Kabupaten Bojonegoro',
                'no_hp' => '081233212222'
            ],
            [
                'foto_customer' => 'https://randomuser.me/api/portraits/women/52.jpg',
                'nama_customer' => 'William Ellie',
                'gender' => 'P',
                'tempat_lahir' => 'Surabaya',
                'tgl_lahir' => '2001-12-19',
                'alamat' => 'Dusun Lecaksari,Kecamatan Purwodadi, Kabupaten Pasuruan',
                'no_hp' => '081456345234'
            ],
            [
                'foto_customer' => 'https://randomuser.me/api/portraits/women/44.jpg',
                'nama_customer' => 'Billie Elish',
                'gender' => 'P',
                'tempat_lahir' => 'Nganjuk',
                'tgl_lahir' => '2001-11-01',
                'alamat' => 'Jl. Semangat 45,Kecamatan Sidodadi, Kabupaten Magelang',
                'no_hp' => '087654345678'
            ],
            [
                'foto_customer' => 'https://randomuser.me/api/portraits/men/47.jpg',
                'nama_customer' => 'Bobi Saputra',
                'gender' => 'L',
                'tempat_lahir' => 'Sidogiri',
                'tgl_lahir' => '1999-02-13',
                'alamat' => 'Jl. Sidogiri 3, Kecamatan Sidogiri, Kabupaten Malang',
                'no_hp' => '082456785213'
            ],
            [
                'foto_customer' => 'https://randomuser.me/api/portraits/men/9.jpg',
                'nama_customer' => 'Doddy Sudrajat',
                'gender' => 'L',
                'tempat_lahir' => 'Mojokerto',
                'tgl_lahir' => '2001-10-15',
                'alamat' => 'JL. Mojokerto, Kecamatan Sengon, Kabupaten Pasuruan',
                'no_hp' => '081567453281'
            ],
            [
                'foto_customer' => 'https://randomuser.me/api/portraits/women/94.jpg',
                'nama_customer' => 'Syarafa Putri',
                'gender' => 'P',
                'tempat_lahir' => 'Surabaya',
                'tgl_lahir' => '2001-03-01',
                'alamat' => 'Jl.Niaga Surabaya,Kecamatan Lecaksari,Kota Surabaya',
                'no_hp' => '083567435123'
            ],
            [
                'foto_customer' => 'https://randomuser.me/api/portraits/men/28.jpg',
                'nama_customer' => 'Fuzra Abidzar',
                'gender' => 'L',
                'tempat_lahir' => 'Malang',
                'tgl_lahir' => '2001-06-21',
                'alamat' => 'Jl.Malang 2, Kecamatan Wonokromo, Kota Surabaya',
                'no_hp' => '081332223332'
            ]
        ];
        DB::table('customers')->insert($datacustomer);
    }
}
