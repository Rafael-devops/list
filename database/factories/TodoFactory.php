<?php

namespace Database\Factories;

use App\Enum\StatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    public function definition()
    {
        return [
            'assignment' => $this->faker->sentence,
            'status' => $this->faker->randomElement(StatusEnum::cases()),
        ];
    }
}
