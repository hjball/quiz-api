<?php

use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
        	       	
            'question' => 'how many Footballs are there',
            'right_answer' => '1',
            'wrong_answer_1' => '23',
            'wrong_answer_2' => '32',
            'wrong_answer_3' => '76',
            'category_id' => '1'
        ]);

        DB::table('questions')->insert([
            'question' => 'how many Footballs are there',
            'right_answer' => '1',
            'wrong_answer_1' => '23',
            'wrong_answer_2' => '32',
            'wrong_answer_3' => '76',
            'category_id' => '3'
        ]);

        DB::table('questions')->insert([
            'question' => 'how many Footballs are there',
            'right_answer' => '1',
            'wrong_answer_1' => '23',
            'wrong_answer_2' => '32',
            'wrong_answer_3' => '76',
            'category_id' => '2'
        ]);

        DB::table('questions')->insert([
            'question' => 'how many Footballs are there',
            'right_answer' => '1',
            'wrong_answer_1' => '23',
            'wrong_answer_2' => '32',
            'wrong_answer_3' => '76',
            'category_id' => '2'
        ]);

        DB::table('questions')->insert([
            'question' => 'how many Footballs are there',
            'right_answer' => '1',
            'wrong_answer_1' => '23',
            'wrong_answer_2' => '32',
            'wrong_answer_3' => '76',
            'category_id' => '1'
        ]);

        DB::table('questions')->insert([
            'question' => 'how many Footballs are there',
            'right_answer' => '1',
            'wrong_answer_1' => '23',
            'wrong_answer_2' => '32',
            'wrong_answer_3' => '76',
            'category_id' => '3'
        ]);

        DB::table('questions')->insert([
            'question' => 'how many Footballs are there',
            'right_answer' => '1',
            'wrong_answer_1' => '23',
            'wrong_answer_2' => '32',
            'wrong_answer_3' => '76',
            'category_id' => '3'
        ]);

        DB::table('questions')->insert([
            'question' => 'how many Footballs are there',
            'right_answer' => '1',
            'wrong_answer_1' => '23',
            'wrong_answer_2' => '32',
            'wrong_answer_3' => '76',
            'category_id' => '2'
        ]);

        DB::table('questions')->insert([
            'question' => 'how many Footballs are there',
            'right_answer' => '1',
            'wrong_answer_1' => '23',
            'wrong_answer_2' => '32',
            'wrong_answer_3' => '76',
            'category_id' => '1'
        ]);

        DB::table('questions')->insert([
            'question' => 'how many Footballs are there',
            'right_answer' => '1',
            'wrong_answer_1' => '23',
            'wrong_answer_2' => '32',
            'wrong_answer_3' => '76',
            'category_id' => '2'
        ]);

        DB::table('questions')->insert([
            'question' => 'how many Footballs are there',
            'right_answer' => '1',
            'wrong_answer_1' => '23',
            'wrong_answer_2' => '32',
            'wrong_answer_3' => '76',
            'category_id' => '3'
        ]);
    }
}


