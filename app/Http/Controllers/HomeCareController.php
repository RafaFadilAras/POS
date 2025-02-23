<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCareController extends Controller
{
    public function homeCare() {
        return view('products.home-care')
        ->with('ada','Tersedia berbagai produk Perawatan Rumah');
    }
}
