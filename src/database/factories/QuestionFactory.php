<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Question;
use App\Models\Choice;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->imageUrl,
            'text' => $this->faker->sentence,
            'quiz_id' => $this->faker->randomElement([1, 2]),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Question $question) {
            $correctChoice = rand(0, 2);
            for ($i = 0; $i < 3; $i++) {
                Choice::factory()->create([
                    'question_id' => $question->id,
                    'is_correct' => $i === $correctChoice,
                ]);
            }
        })->count(3);
    }
}
