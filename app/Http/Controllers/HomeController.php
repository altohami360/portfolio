<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::with('education')->first();
        $skills = ['Web Development', 'DataBase', 'PHP', 'SQL', 'RESTfull API', 'laravel'];
        $education = User::with('education')->first();
        $skills = ['Web Development', 'laravel', 'PHP', 'Databases (MySql)', 'RESTfull API'];
        return view('welcome');
    }
}
