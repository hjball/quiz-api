<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        DB::table('categories')->insert([
        	'id' => 1,        	
            'category' => 'Football',
            'status_id' => 1,
            'attempted' => 0,
            'image_url' => 'testurlnull',
        ]);

        DB::table('categories')->insert([
        	'id' => 2,        	
            'category' => 'Jelly Fish',
            'status_id' => 1,
            'attempted' => 0,
            'image_url' => 'testurlnull',
        ]);        

        DB::table('categories')->insert([
        	'id' => 3,        	
            'category' => 'Harry Potter',
            'status_id' => 1,
            'attempted' => 0,
            'image_url' => 'testurlnull',
        ]);        
    }
}
