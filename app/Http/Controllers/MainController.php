<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return "Головна сторінка інтернет-магазину";
    }

    public function about()
    {
        return "Сторінка про інтернет-магазин";
    }
}
