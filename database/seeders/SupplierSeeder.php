<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
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
                'name'=> 'Herman Abadi',
                'company_name'=> 'CV. Abadi Jaya',
                'address'=> 'Jl. Tenggilis Mejoyo Selatan II No.14, Tenggilis Mejoyo, Kec. Tenggilis Mejoyo',
                'districts'=> 'Kota Surabaya',
                'province'=> 'Jawa Timur',
                'postal_code'=> '60292',
                'phone_number'=> '083765421099',
                'bank'=> 'BRI',
                'no_rek'=> '3162-01-012057-53-9',
            ],
            [
                'name'=> 'Rahman Adiwijaya',
                'company_name'=> 'PT. Wijaya Sentosa',
                'address'=> 'Jl. Kh. Wachid Hasyim No.24, Bangilan, Panggungrejo',
                'districts'=> 'Kota Pasuruan',
                'province'=> 'Jawa Timur',
                'postal_code'=> '67116',
                'phone_number'=> '083822197112',
                'bank'=> 'Mandiri',
                'no_rek'=> '006-00-1710201-7',
            ],
            [
                'name'=> 'Abdul Mahjid',
                'company_name'=> 'CV. Abdullah',
                'address'=> 'Jl. Dr.Sutomo, Tisnonegaran, Kec. Kanigaran',
                'districts'=> 'Kota Probolinggo',
                'province'=> 'Jawa Timur',
                'postal_code'=> '67211',
                'phone_number'=> '083937192801',
                'bank'=> 'BCA',
                'no_rek'=> '5220304312',
            ],
            [
                'name'=> 'Abdul Mahjid',
                'company_name'=> 'CV. Abdullah',
                'address'=> 'Jl. Raya Lumbang No.KM.01, Krajan, Tongaswetan, Kec. Tongas',
                'districts'=> 'Kabupaten Probolinggo',
                'province'=> 'Jawa Timur',
                'postal_code'=> '67252 ',
                'phone_number'=> '083937192801',
                'bank'=> 'BCA',
                'no_rek'=> '5220304312',
            ],
            [
                'name'=> 'Hj Darusalam Mahbub',
                'company_name'=> 'PT. Jaya Darusalam',
                'address'=> 'Jl. Mandara Kuno No.03 ',
                'districts'=> 'Kab. Blitar',
                'province'=> 'Jawa Timur',
                'postal_code'=> '61111',
                'phone_number'=> '083088210221',
                'bank'=> 'Mandiri',
                'no_rek'=> '006-00-1710201-7',
            ],
            [
                'name'=> 'Muh Kariono',
                'company_name'=> 'PT. Sepatu Bandung Jaya',
                'address'=> 'Jl. A. Yani No.87, Kb. Pisang, Kec. Sumur Bandung',
                'districts'=> 'Kota Bandung',
                'province'=> 'Jawa Barat',
                'postal_code'=> '40262',
                'phone_number'=> '083002981662',
                'bank'=> 'BRI',
                'no_rek'=> '5468-01-023682-53-3',
            ],
            [
                'name'=> 'Hadibah Mutiara',
                'company_name'=> 'Toko Mutiara Shoes',
                'address'=> 'Jl. Karang Rejo Raya No.17, Karangrejo, Kec. Gajahmungkur',
                'districts'=> 'Kota Semarang',
                'province'=> ' Jawa Tengah',
                'postal_code'=> '50234',
                'phone_number'=> '083029177201',
                'bank'=> 'BRI',
                'no_rek'=> '5468-01-023321-52-1',
            ],
            [
                'name'=> 'Mandra Alim',
                'company_name'=> 'Toko Sinar Baru',
                'address'=> 'Jl. Trunojoyo No.12, Bojonegoro, Kadipaten, Kec. Bojonegoro',
                'districts'=> 'Kabupaten Bojonegoro',
                'province'=> 'Jawa Timur',
                'postal_code'=> '62111',
                'phone_number'=> '083822109219',
                'bank'=> 'Mandiri',
                'no_rek'=> '006-00-1921001-7',
            ],
            [
                'name'=> 'Rohmatul Jannah',
                'company_name'=> 'Toko Venty Shoes',
                'address'=> 'Jl. Kyai H. Hasyim Ashari No.15, Tumenggungan, Kec. Lamongan',
                'districts'=> 'Kabupaten Lamongan',
                'province'=> 'Jawa Timur',
                'postal_code'=> '62214',
                'phone_number'=> '083210811023',
                'bank'=> 'BCA',
                'no_rek'=> '5220301023',
            ],
            [
                'name'=> 'Hj. Faisal',
                'company_name'=> 'Toko. Abdullah',
                'address'=> 'Jl. Tukad Ijo Gading No.8, Dauh Puri Klod, Denpasar Selatan',
                'districts'=> 'Kota Denpasar',
                'province'=> 'Bali',
                'postal_code'=> '80234',
                'phone_number'=> '083054921732',
                'bank'=> 'BCA',
                'no_rek'=> '5220305621',
            ],
        ];
        DB::table('suppliers')->insert($data);
    }
}
