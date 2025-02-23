<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BabyKidController extends Controller
{
    public function babyKid() {
        return view('products.baby-kid')
        ->with('ada','Tersedia berbagai produk Bayi dan Anak');
    }
}
