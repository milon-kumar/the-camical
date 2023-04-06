<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Answer;
use App\Models\Category;
use App\Models\Product;
use App\Models\Question;
use App\Models\Slider;
use App\Models\SubCategory;
use App\Models\Traning;
use App\Models\TraningCategory;
use Database\Factories\CategoryFactory;
use Database\Factories\CategoryTypeFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
//        $this->call(BusinessSettingSeeder::class);
        $this->call(UserSeeder::class);
//        $this->call(AnswerSeeder::class);
//        TraningCategory::factory(5)->create();
//        Traning::factory(5)->create();
        //Category::factory(1)->create();
        //SubCategory::factory(1)->create();
//        Answer::factory(5)->create();
//        Question::factory(5)->create();
       // Product::factory(1)->create();
        //Slider::factory(1)->create();
    }
}
