<?php

use Illuminate\Database\Seeder;

class HangsxableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
            DB::table('hangsx')->insert([
            ['name'=>'Apple'],
            ['name'=>'Samsung']
            
       
        ]);
    }
}
