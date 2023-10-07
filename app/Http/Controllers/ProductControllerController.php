<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductControllerController extends Controller
{
    public function index(){
        return view('product.index');
    }
}
