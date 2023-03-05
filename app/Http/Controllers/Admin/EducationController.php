<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEducationRequest;
use App\Models\Education;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $education = ($user->load('education'))->education;
        
        return view('admin.education', compact('education'));
    }

    public function store(StoreEducationRequest $request)
    {
        $user = Auth::user();

        $user->education()->create($request->validated());

        return to_route('education');
    }

    public function destroy(Education $education)
    {
        $education->delete();

        return to_route('education');
    }
}
