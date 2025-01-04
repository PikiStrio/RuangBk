<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassEnglishController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('class.class-english');
    }
}
