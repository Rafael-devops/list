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
            'title' => $this->faker->sentence,
            'assignment' => $this->faker->text,
            'status' => $this->faker->randomElement(StatusEnum::cases()),
        ];
    }
}
