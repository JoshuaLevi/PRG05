<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MijnController extends Controller
{
    public function mijnActie(): view
    {
        return view('hello');
    }
}

