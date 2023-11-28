<?php

namespace App\Http\Controllers;

use Faker\Guesser\Name;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        return view('welcome');

    }
    public function aboutus(){
        return view('aboutus');

    }
}
