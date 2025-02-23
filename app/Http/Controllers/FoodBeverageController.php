<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodBeverageController extends Controller
{
    public function product() {
        return view('products.food-beverage')
        ->with('ada','Tersedia berbagai produk Makanan dan Minuman');
    }

}
