<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slider>
 */
class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->text(15);
        return [
            'users_id'=>1,
            'title'=>$title,
            'slug'=>Str::slug($title),
            'short_description'=>$this->faker->text(50),
            'image'=>'images/default.jpg',
            'btn_name'=>'Read More...'
        ];
    }
}
