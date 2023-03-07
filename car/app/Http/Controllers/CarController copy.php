<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function sayHello()
    {
        return view('hello');
    }

    public function index()
    {
        // dd('hello index');
        // return view('car.index');

    }
}
