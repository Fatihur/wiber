<?php

namespace Database\Factories;

use App\Models\Himpunan;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class HimpunanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Himpunan::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'himpunan' => $this->faker->text(255),
            'wa' => $this->faker->text(255),
        ];
    }
}
