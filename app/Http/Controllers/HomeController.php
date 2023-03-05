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
        $skills = ['Web Development', 'DataBase', 'PHP', 'SQL', 'RESTfull API', 'laravel'];
        // $education = User::with('education')->first();
        return view('welcome', compact('user', 'skills'));
    }
}
