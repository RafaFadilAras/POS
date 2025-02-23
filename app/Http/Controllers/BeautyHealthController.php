<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeautyHealthController extends Controller
{
    public function product() {
        return view('products.beauty-health')
        ->with('ada','Tersedia berbagai produk Kecantikan dan Kesehatan');
    }
}
