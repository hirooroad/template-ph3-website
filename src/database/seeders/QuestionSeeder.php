<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Quiz::create([
            'name' => 'ITクイズ']);

        \App\Models\Quiz::create([
            'name' => '紹介クイズ']);
        
        // \App\Models\Question::create([
        //     'image' => 'sample.jpg',
        //     'text' => '日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？',
        //     'supplement' => null,
        //     'quiz_id' => 1]);
        
        // \App\Models\Question::create([
        //     'image' => 'sample.jpg',
        //     'text' => '僕が住んでるところはどこでしょうか',
        //     'supplement' => null,
        //     'quiz_id' => 2]);

        // \App\Models\Choice::create([
        //     'question_id' => 1,
        //     'text' => '約79万人',
        //     'is_correct' => true]);

        // \App\Models\Choice::create([
        //     'question_id' => 1,
        //     'text' => '約7.9万人',
        //     'is_correct' => false]);

        // \App\Models\Choice::create([
        //     'question_id' => 1,
        //     'text' => '約7900人',
        //     'is_correct' => false]);

        // \App\Models\Choice::create([
        //     'question_id' => 2,
        //     'text' => '東京',
        //     'is_correct' => false]);

        // \App\Models\Choice::create([
        //     'question_id' => 2,
        //     'text' => '千葉',
        //     'is_correct' => false]);
        

        // \App\Models\Choice::create([
        //     'question_id' => 2,
        //     'text' => '神奈川',
        //     'is_correct' => true]);

        \App\Models\Question::factory(100)->create();
        // \App\Models\Choice::factory(300)->create();
    }
}
