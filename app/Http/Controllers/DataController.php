<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        return response()->json([
            'products' => Product::all(),
            'categories' => Category::all(),
        ]);
    }
}
