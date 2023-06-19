<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plat;
use Database\Factories\PlatFactory;
use App\Models\Category;

class PlatSeeder extends Seeder
{
    public function run()
    {
        $categories = Category::all();

        foreach ($categories as $category) {
            PlatFactory::new(['category_id' => $category->id])->count(5)->create();
        }
    }
}
