<?php

namespace Database\Seeders;

use App\Models\Recipe;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test2 User',
            'email' => 'test2@example.com',
        ]);*/

        DB::table('recipes')->insert([
            'title' => "Le gros pain de viande",
            'description' => "Le bon vieux pain de viande de mamie, toujours aussi efficace !"
        ]);
    }
}
