<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(HangsxableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(AnhbeTableSeeder::class);
        $this->call(ProductcolorTableSeeder::class);
    }
}
