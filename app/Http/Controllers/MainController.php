<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex(){
        return view('home');
    }
    public function showArray(){
        $array = [
            ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => '001.gif'],
            ['id' => 2, 'title' => 'продукт 2', 'price' => 500, 'path' => '2.jpg'],
            ['id' => 3, 'title' => 'продукт 3', 'price' => 500, 'path' => '3.jpg'],
            ['id' => 4, 'title' => 'продукт 4', 'price' => 500, 'path' => '4.jpg'],
            ['id' => 5, 'title' => 'продукт 5', 'price' => 500, 'path' => '5.jpg'],
            ['id' => 5, 'title' => 'продукт 5', 'price' => 500, 'path' => '6.jpg'],
            ['id' => 5, 'title' => 'продукт 5', 'price' => 500, 'path' => '7.jpg'],
            ['id' => 5, 'title' => 'продукт 5', 'price' => 500, 'path' => '8.jpg'],
        ];
        return view('array', compact('array'));
    }
}
