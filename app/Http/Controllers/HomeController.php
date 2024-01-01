<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('index', [
            "title"     => "Home",
            "banner"    => Banner::all('order', 'image', 'redirect'),
            "product"   => Product::with('categories')->get()
        ]);
    }
}
