<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
        	'id' => 0,
            'status' => 'Awaiting Approval',
        ]);
        DB::table('statuses')->insert([
        	'id' => 1,
            'status' => 'Live',
        ]);
        DB::table('statuses')->insert([
        	'id' => 3,        	
            'status' => 'Archived',
        ]);
        DB::table('statuses')->insert([
        	'id' => 99,
            'status' => 'Rejected',
        ]);
    }
}
