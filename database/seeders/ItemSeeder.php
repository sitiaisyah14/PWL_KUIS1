<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataitem = [
            [
                'id_supplier' => 1,
                'gambar_sepatu' => 'https://www.adidas.co.id/media/catalog/product/f/z/fz2246_sl_ecom.jpg',
                'merk_sepatu' => 'Adidas NY 90 SHOES',
                'jenis_sepatu' => 'Sneakers',
                'no_sepatu' => '38',
                'stok' => 20,
                'harga' => 1500000
            ],
            [
                'id_supplier' => 1,
                'gambar_sepatu' => 'https://www.adidas.co.id/media/catalog/product/f/z/fz2246_sl_ecom.jpg',
                'merk_sepatu' => 'Adidas NY 90 SHOES',
                'jenis_sepatu' => 'Sneakers',
                'no_sepatu' => '39',
                'stok' => 20,
                'harga' => 1500000
            ],
            [
                'id_supplier' => 1,
                'gambar_sepatu' => 'https://www.adidas.co.id/media/catalog/product/f/z/fz2246_sl_ecom.jpg',
                'merk_sepatu' => 'Adidas NY 90 SHOES',
                'jenis_sepatu' => 'Sneakers',
                'no_sepatu' => '40',
                'stok' => 20,
                'harga' => 1500000
            ],
            [
                'id_supplier' => 2,
                'gambar_sepatu' => 'https://www.adidas.co.id/media/catalog/product/F/X/FX7616_SL_eCom.jpg',
                'merk_sepatu' => 'SUPERSTAR RUN-DMC SHOES',
                'jenis_sepatu' => 'Sneakers',
                'no_sepatu' => '39',
                'stok' => 20,
                'harga' => 2000000
            ],
            [
                'id_supplier' => 2,
                'gambar_sepatu' => 'https://www.adidas.co.id/media/catalog/product/h/0/h05783_sl_ecom.jpg',
                'merk_sepatu' => 'ZX 10000 KRUSTY BURGER SHOES',
                'jenis_sepatu' => 'Sneakers',
                'no_sepatu' => '38',
                'stok' => 20,
                'harga' => 2200000
            ],
            [
                'id_supplier' => 2,
                'gambar_sepatu' => 'https://www.adidas.co.id/media/catalog/product/h/0/h05783_sl_ecom.jpg',
                'merk_sepatu' => 'ZX 10000 KRUSTY BURGER SHOES',
                'jenis_sepatu' => 'Sneakers',
                'no_sepatu' => '39',
                'stok' => 20,
                'harga' => 2200000
            ],
            [
                'id_supplier' => 2,
                'gambar_sepatu' => 'https://www.adidas.co.id/media/catalog/product/h/0/h05783_sl_ecom.jpg',
                'merk_sepatu' => 'ZX 10000 KRUSTY BURGER SHOES',
                'jenis_sepatu' => 'Sneakers',
                'no_sepatu' => '40',
                'stok' => 20,
                'harga' => 2200000
            ],
            [
                'id_supplier' => 3,
                'gambar_sepatu' => 'https://www.adidas.co.id/media/catalog/product/F/V/FV2928_SL_eCom.jpg',
                'merk_sepatu' => 'SEPATU ZX 2K BOOST',
                'jenis_sepatu' => 'Sepatu Olahraga',
                'no_sepatu' => '37',
                'stok' => 20,
                'harga' => 2500000
            ],
            [
                'id_supplier' => 3,
                'gambar_sepatu' => 'https://www.adidas.co.id/media/catalog/product/F/V/FV2928_SL_eCom.jpg',
                'merk_sepatu' => 'SEPATU ZX 2K BOOST',
                'jenis_sepatu' => 'Sepatu Olahraga',
                'no_sepatu' => '38',
                'stok' => 20,
                'harga' => 2500000
            ],
            [
                'id_supplier' => 3,
                'gambar_sepatu' => 'https://www.adidas.co.id/media/catalog/product/F/V/FV2928_SL_eCom.jpg',
                'merk_sepatu' => 'SEPATU ZX 2K BOOST',
                'jenis_sepatu' => 'Sepatu Olahraga',
                'no_sepatu' => '39',
                'stok' => 20,
                'harga' => 2500000
            ],

        ];
        DB::table('items')->insert($dataitem);
    }
}
