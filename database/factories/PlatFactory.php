<?php

namespace Database\Factories;

use App\Models\Plat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plat>
 */
class PlatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Plat::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence,
            'image_plats' => $this->faker->imageUrl(680,640),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'category_id' => function () {
                return \App\Models\Category::factory()->create()->id;
            },
        ];
    }
}