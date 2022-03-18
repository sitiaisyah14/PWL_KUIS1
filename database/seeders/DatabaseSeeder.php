<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ItemSeeder::class,
        ]);

        $this->call([
            SupplierSeeder::class,
        ]);

        $this->call([
            EmployeeSeeder::class,
        ]);

        $this->call([
            CustomerSeeder::class,
        ]);
    }
}
