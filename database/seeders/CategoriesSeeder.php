<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Technical',
            'Health & Wellness',
            'Social',
            'Sports',
            'Business & Finance',
            'Education',
            'Travel',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }

}
