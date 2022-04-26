<?php

namespace Database\Factories;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'details' => $this->faker->text($maxNbChars = 200),
            'description' => $this->faker->text($maxNbChars = 200),
            'brand' => $this->faker->randomElement([
                'Samsung',
                'Apple',
                'Microsoft',
            ]),
            'price' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'shipping_cost' => $this->faker->randomDigit(),
            'image_path' => $this->faker->image($dir = 'storage', $width = 640, $height = 480),
        ];
    }
}
