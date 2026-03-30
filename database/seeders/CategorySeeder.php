<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'blue'
        ]);
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            'color' => 'red'
        ]);
        Category::create([
            'name' => 'Data Mining',
            'slug' => 'data-mining',
            'color' => 'green'
        ]);
        Category::create([
            'name' => 'Hardware',
            'slug' => 'hardware',
            'color' => 'yellow'
        ]);
        Category::create([
            'name' => 'Mobile Programming',
            'slug' => 'mobile-programming',
            'color' => 'purple'
        ]);
    }
}
