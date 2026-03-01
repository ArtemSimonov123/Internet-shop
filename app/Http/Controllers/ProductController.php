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

        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $products = [
            1 => "Ноутбук",
            2 => "Навушники",
            3 => "Клавіатура"
        ];

        $name = $products[$id] ?? "Невідомий товар";

        return view('products.show', compact('id', 'name'));
    }
}