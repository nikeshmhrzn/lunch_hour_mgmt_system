<?php

namespace App\Http\Controllers;
use App\Food;
use App\Category;

use Illuminate\Http\Request;

class OrderviewController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        $categories = Category::all();
        return view('orders.orderview',compact('foods','categories'));
    }
}
