<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('mentor');
    }
}
