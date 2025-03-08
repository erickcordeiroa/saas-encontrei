<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'views' => $this->faker->numberBetween(0, 1000),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}