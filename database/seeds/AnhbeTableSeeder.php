<?php

use Illuminate\Database\Seeder;

class AnhbeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('anhbe')->insert([
         	['name' => 'ab1.jpg','image_id' =>1],
         	['name' => 'ab2.jpg','image_id' =>1],
         	['name' => 'ab3.jpg','image_id' =>1],
         	['name' => 'ab4.jpg','image_id' =>1],
        ]);
    }
}
