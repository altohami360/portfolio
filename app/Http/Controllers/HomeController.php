<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $skills = ['Web Development', 'DataBase', 'PHP', 'SQL', 'RESTfull API', 'laravel'];
        $about = 'A talented software developer with experience in developing backend using Html, CSS, PHP, MySql,
            Laravel, and other. for strong problem-solving skills, Self-study, and time management. graduated from the
            Faculty of Computer Science Department of Information and Communications Technology (ICT) with a very good
            grad';
        $education = [
            'school' => 'University of Science and Technology',
            'college' => 'College of Computer Science - Information and Communication Technology'
        ];
        return view('welcome', compact('skills', 'about', 'education'));
    }
}
