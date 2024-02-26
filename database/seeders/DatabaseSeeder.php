<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Education;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class
        ]);



        Education::create([
            'user_id' => 1,
            'degree' => 'Bachelor\'s degree',
            'school' => 'University of Science and Technology',
            'collage' => 'Computer Science',
            'department' => 'Information and Communications Technology (ICT)',
            'start_at' => '10/2016',
            'end_at' => '03/2021',
        ]);
    }
}
