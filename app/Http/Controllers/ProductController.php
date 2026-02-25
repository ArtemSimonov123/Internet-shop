<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
{
    $products = [
        1 => "Ноутбук",
        2 => "Навушники",
        3 => "Клавіатура"
    ];

    $output = "";
    foreach ($products as $id => $name) {
        $output .= $id . ". " . $name . "\n";
    }

    return nl2br($output); 
}


    public function show($id)
    {
        return "Сторінка товару з ID: " . $id;
    }
}
