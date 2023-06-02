<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        DB::table("users")->insert([
            "name" => "admin",
            "email" => "admin@admin.com",
            "role" => "admin",
            "password" => "$2y$10$/TyqrYFLwTZ10ev8Q6e.oevJzcJC/JbUAchFHr/ZpFKkLmz/Zz/3m"
        ]);
        DB::table("users")->insert([
            "name" => "siswa",
            "email" => "siswa@siswa.com",
            "role" => "siswa",
            "password" => '$2y$10$j66uCi6qJPRbDPT1xGqTXeTrZ4NhHkWgGS1UP9/U93aq0oUaNnxcS'
        ]);
    }
}
