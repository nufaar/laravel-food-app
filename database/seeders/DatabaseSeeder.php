<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Food;
use DateTime;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Category::create([
            'category' => 'Lauk'
        ]);

        Category::create([
            'category' => 'Nasi'
        ]);
    }
}
