<?php

namespace Database\Factories;

use App\Models\Pull;
use Illuminate\Database\Eloquent\Factories\Factory;

class PullFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pull::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'body' => $this->faker->sentence
        ];
    }
}
