<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::with('education')->first();
        // dd($user);
        $skills = ['Web Development', 'laravel', 'PHP', 'Databases (MySql)', 'RESTfull API'];
        return view('welcome', compact('user', 'skills'));
    }
}
