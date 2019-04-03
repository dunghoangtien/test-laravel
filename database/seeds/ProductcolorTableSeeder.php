<?php

use Illuminate\Database\Seeder;

class ProductcolorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('product_colors')->insert([
            ['name'=>'ipb1.jpg','product_id'=>1,'color_id'=>1],
            ['name'=>'ipb2.jpg','product_id'=>1,'color_id'=>2],
            ['name'=>'ipb3.jpg','product_id'=>1,'color_id'=>3],
            ['name'=>'ipb4.jpg','product_id'=>1,'color_id'=>4],
            
        ]);
    }
}
