<?php

namespace Database\Factories;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vote>
 */
class VoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $target = fake()->randomElement(['question','answer']);
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'question_id' => $target === 'question' ? Question::inRandomOrder()->first()->id : null,
            'answer_id' => $target === 'answer' ? Answer::inRandomOrder()->first()->id : null,
            'value' => fake()->randomElement([1,-1]),
        ];
    }
}
