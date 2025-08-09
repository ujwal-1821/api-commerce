<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
   public function index()
{
    $response = Http::withoutVerifying()->get('https://api.slingacademy.com/v1/sample-data/photos?limit=6');

    if ($response->successful()) {
        $items = $response->json()['photos'] ?? []; // ✅ Fix here
    } else {
        dd("API failed", $response->status(), $response->body());
    }

    return view('layouts.welcome', compact('items'));
}
}
