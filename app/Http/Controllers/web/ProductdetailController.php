<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductdetailController extends Controller
{
    public function productDetail($slug){
               return view('productDetail');

    }
}
