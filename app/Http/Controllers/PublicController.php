<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {
        $title = 'LaserLab X Art Design';
        return view('homepage', ['titolo' => $title]);
    }
}
