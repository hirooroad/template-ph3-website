<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Choice;
use App\Models\Question;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Choice>
 */
class ChoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // public function definition(): array
    // {
    //     $questionId = ceil(($this->faker->unique()->numberBetween(1, 100) + 1) / 3);

    //     return [
    //         'text' => $this->faker->sentence,
    //         'question_id' => $questionId,
    //         'is_correct' => $this->faker->randomElement([true, false])
    //     ];
    // }

    public function definition()
    {
        return [
            'text' => $this->faker->text(10),
            'question_id' => $this->faker->randomElement([1, 2]),
            'is_correct' => $this->faker->boolean(),
        ];
    }
    
    // public function configure()
    // {
    //     return $this->afterCreating(function (Question $question) {
    //         $correctChoice = rand(0, 2);
    //         $questionId = $question->id;
    //         for ($i = 0; $i < 3; $i++) {
    //             Choice::factory()->create([
    //                 'question_id' => $questionId,
    //                 'is_correct' => $i === $correctChoice,
    //             ]);
    //             if (($i + 1) % 3 === 0) {
    //                 $questionId += 3;
    //                 $correctChoice = rand($i + 1, $i + 3);
    //             }
    //         }
    //     });
    // }
}
