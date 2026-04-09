<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    $products = [
        ['id' => 1, 'name' => 'Laptop', 'price' => 5000],
        ['id' => 2, 'name' => 'Phone', 'price' => 2000],
        ['id' => 3, 'name' => 'Headphones', 'price' => 300],
    ];

    return view('products', compact('products'));
});