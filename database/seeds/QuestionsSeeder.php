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
            'right_answer' => 'r1',
            'wrong_answer_1' => 'w1',
            'wrong_answer_2' => 'w2',
            'wrong_answer_3' => 'w3',
            'category_id' => '1'
        ]);

        DB::table('questions')->insert([
            'question' => 'Which historical individual has the most descendents alive today?',
            'right_answer' => 'Genghis Khan',
            'wrong_answer_1' => 'Jesus Christ',
            'wrong_answer_2' => 'Julius Caesar',
            'wrong_answer_3' => 'Charlemagne',
            'category_id' => '5'
        ]);

        DB::table('questions')->insert([
            'question' => 'Who was the first Emperor of Rome?',
            'right_answer' => 'Augustus Caesar',
            'wrong_answer_1' => 'Nero”',
            'wrong_answer_2' => 'Julius Caesar',
            'wrong_answer_3' => 'Hadrian',
            'category_id' => '5'
        ]);

        DB::table('questions')->insert([
            'question' => 'Which of the following were not living in Vienna in 1913?',
            'right_answer' => 'Einstein',
            'wrong_answer_1' => 'Hitler',
            'wrong_answer_2' => 'Freud',
            'wrong_answer_3' => 'Trotsky',
            'category_id' => '5'
        ]);

        DB::table('questions')->insert([
            'question' => 'What year was Golden Years by David Bowie released',
            'right_answer' => '1976',
            'wrong_answer_1' => '1978',
            'wrong_answer_2' => '1990',
            'wrong_answer_3' => '1954',
            'category_id' => '4'
        ]);

        DB::table('questions')->insert([
            'question' => 'Who is the lead singer of The Cure?',
            'right_answer' => 'Robert Smith',
            'wrong_answer_1' => 'John Smith',
            'wrong_answer_2' => 'Robert Jones',
            'wrong_answer_3' => 'John Jones',
            'category_id' => '4'
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name of Eric Clapton’s guitar?',
            'right_answer' => 'Brownie',
            'wrong_answer_1' => 'Blackie',
            'wrong_answer_2' => 'Whitie',
            'wrong_answer_3' => 'Blueie',
            'category_id' => '4'
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


