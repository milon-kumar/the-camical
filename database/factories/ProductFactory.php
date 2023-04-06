<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->text(15);
        return [
            'users_id'=>1,
            'categories_id'=>rand(1,5),
            'sub_categories_id'=>rand(1,5),
            'title'=>$title,
            'slug'=>Str::slug($title),
            'image'=>'images/default.jpg',
            'description'=>$this->faker->text(200),
            'is_featured'=>true,
            'is_popular'=>true,
        ];
    }
}
