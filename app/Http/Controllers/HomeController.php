<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = [
            'name' => 'Mohammed Altohami',
            'email' => 'altohami360@gmail.com',
            'about' => 'A talented software developer with experience in developing backend using PHP, MySql, Laravel, and other. recognized for strong problem-solving skills, Self-study, and time management. graduated from the Faculty of Computer Science Department of Information and Communications Technology (ICT). And I like making software ❤️.',
            'education' => [
                'user_id' => 1,
                'degree' => 'Bachelor\'s degree',
                'school' => 'University of Science and Technology',
                'collage' => 'Computer Science',
                'department' => 'Information and Communications Technology (ICT)',
                'start_at' => '10/2016',
                'end_at' => '03/2021',
            ]
        ];

        $skills = ['Web Development', 'DataBase', 'PHP', 'SQL', 'RESTfull API', 'laravel'];

        $degree = 'Bachelor\'s degree';
        $school = 'University of Science and Technology';
        $collage = 'Computer Science';
        $department = 'Information and Communications Technology (ICT)';
        $start_at = '10/2016';
        $end_at = '03/2021';

        $skills = ['Web Development', 'laravel', 'PHP', 'Databases (MySql)', 'RESTfull API'];

        return view('welcome', compact(
            'user',
            'skills',
            'degree',
            'school',
            'collage',
            'department',
            'start_at',
            'end_at'
        ));
    }
}
