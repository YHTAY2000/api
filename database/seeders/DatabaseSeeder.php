<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Model\Product;
use App\Models\Model\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Creating 50 products
        Product::factory()->count(50)->create();

        // Creating 300 reviews
        Review::factory()->count(300)->create();
    }
}
