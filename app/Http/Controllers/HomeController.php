<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

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
        $min = min($numbers);
        $max = max($numbers);
        $odd = array_values(array_filter($numbers, fn($num) => $num % 2 !== 0));

        return compact('numbers', 'min', 'max', 'odd');
    }

    // Resource methods below can be removed if not used
    public function create() {}
    public function store(Request $request) {}
    public function show(string $id) {}
    public function edit(string $id) {}
    public function update(Request $request, string $id) {}
    public function destroy(string $id) {}
}