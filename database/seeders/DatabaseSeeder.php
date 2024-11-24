<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
{
    $this->call([
        UserSeeder::class,
        MarketSeeder::class,
        ProductSeeder::class,
        ProductImageSeeder::class,
        CartSeeder::class,
        CartItemSeeder::class,
        OrderSeeder::class,
        CategorySeeder::class,
        SubcategorySeeder::class,
        FavoriteSeeder::class,
    ]);
}
}
