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
            'name' => 'physics'
        ]);
        Category::create([
            'name' => 'programming'
        ]);
        Category::create([
            'name' => 'Health'
        ]);
        Category::create([
            'name' => 'Detective'
        ]);
        Category::create([
            'name' => 'Romance'
        ]);
        Category::create([
            'name' => 'sports'
        ]);
        Category::create([
            'name' => 'Chemistry'
        ]);
        Category::create([
            'name' => 'software'
        ]);
    }
}
