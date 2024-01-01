<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('index', [
            "title"     => "Home",
            "banner"    => Banner::all('order', 'image', 'redirect')
        ]);
    }
}
