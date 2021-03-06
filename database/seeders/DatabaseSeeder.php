<?php

namespace Database\Seeders;

use App\Models\Post;
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
        User::factory()->create([
            'name' => 'Carlos Villatoro',
            'email' => 'carlos@villatoro.dev',
            'password' => bcrypt('admin123.'),
        ]);
        User::factory(1)->create();
        Post::factory(80)->create();
    }
}
