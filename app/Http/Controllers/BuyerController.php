<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BuyerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $categories = Category::all();
        return view('buyer.home',compact('categories'));
    }
}
