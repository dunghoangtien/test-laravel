<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            ['name'=>'Xanh'],
            ['name'=>'Đỏ'],
            ['name'=>'Vàng'],
            ['name'=>'Trắng'],
            ['name'=>'Hồng']
            
        ]);
    }
}
