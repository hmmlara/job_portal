<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Company;
use App\Models\JobPost;
use App\Models\JobType;
use App\Models\Location;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Category::factory()->count(10)->create();
        Company::factory()->count(10)->create();
        // User::factory()->count(10)->create();
        // JobPost::factory()->count(10)->create();
        JobType::factory()->count(10)->create();
        Location::factory()->count(10)->create();


        User::factory()->create([
            "name" => "Alice",
            "email" => "alice@gmail.com",
            ]);
            User::factory()->create([
            "name" => "Bob",
            "email" => "bob@gmail.com",
            ]);
    }
}
