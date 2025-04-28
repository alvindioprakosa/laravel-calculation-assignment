<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $numbers = [1, 5, 3, 2, 5, 2, 1, 1];
        $result = $this->calculate($numbers);

        return view('home', $result);
    }

    protected function calculate(array $numbers): array
    {
        return [
            'numbers' => $numbers,
            'min' => min($numbers),
            'max' => max($numbers),
            'odd' => array_values(array_filter($numbers, fn($num) => $num % 2 !== 0)),
        ];
    }
}
