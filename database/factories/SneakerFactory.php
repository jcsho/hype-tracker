<?php

namespace Database\Factories;

use App\Models\Sneaker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SneakerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sneaker::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(100),
            'price' => $this->faker->randomFloat(2, 29.99, 10000.00),
            'brand' => $this->faker->text(40),
        ];
    }
}
