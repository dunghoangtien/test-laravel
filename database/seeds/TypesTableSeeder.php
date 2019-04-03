<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('types')->insert([
            ['name'=>'Iphone','desprssion'=>'lorem'],
            ['name'=>'Samsung','desprssion'=>'lorem']
            
        ]);
    }
}
