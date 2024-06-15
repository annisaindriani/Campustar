<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CareerAptitudeTestQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [];
        for ($i = 0; $i < 50; $i++) {
            $questions[] = [
                'question' => Str::random(100), // Generates a random string of 100 characters
            ];
        }

        DB::table('career_aptitude_test_questions')->insert($questions);
    }
}
