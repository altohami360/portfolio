<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();
        return view('admin.about', compact('user'));
    }
}
