<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Mohammed Altohami',
            'email' => 'altohami360@gmail.com',
            'about' => 'A talented software developer with experience in developing backend using Html, CSS, PHP, MySql, Laravel, and other. recognized for strong problem-solving skills, Self-study, and time management. graduated from the Faculty of Computer Science Department of Information and Communications Technology (ICT) with a very good grad',
            'password' => Hash::make('mdaltohami889')
        ]);
    }
}
