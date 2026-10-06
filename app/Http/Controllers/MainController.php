<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public $array = [
            ['id' => 1, 'title' => 'продукт 1', 'price' => 1800, 'path' => '001.gif'],
            ['id' => 2, 'title' => 'продукт 2', 'price' => 4700, 'path' => '2.jpg'],
            ['id' => 3, 'title' => 'продукт 3', 'price' => 600, 'path' => '3.jpg'],
            ['id' => 4, 'title' => 'продукт 4', 'price' => 500, 'path' => '4.jpg'],
            ['id' => 5, 'title' => 'продукт 5', 'price' => 3400, 'path' => '5.jpg'],
            ['id' => 6, 'title' => 'продукт 6', 'price' => 300, 'path' => '6.jpg'],
            ['id' => 7, 'title' => 'продукт 7', 'price' => 200, 'path' => '7.jpg'],
            ['id' => 8, 'title' => 'продукт 8', 'price' => 2100, 'path' => '8.gif'],
        ];
    public function showIndex(){
        return view('home');
    }
    public function showArray(){
        $array = $this->array;
        return view('array', compact('array'));
    }

    public function shuffleArray()
    {
        $array = $this->array;
        shuffle($array);
        return view('array', compact('array'));
    }

    public function sortArray() {
        $array = $this->array;
        for ($i = 0; $i < count($array); $i++)
        {
            for ($j = 0; $j < count($array) - 1; $j++)
            {
                if ($array[$j]['price'] > $array[$j + 1]['price'])
                {
                    $b = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $b;
                }
            }
        }
        return view('array', ['array' => $array]);
    }

    public function filterArray()
    {
        $array = $this->array;
        $array = array_filter($array, function($a)
        {
            if($a['price']>1000)
            {
                return $a;
            }
        });
        return view('array', compact('array'));
    }
}
