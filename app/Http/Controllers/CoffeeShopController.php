<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoffeeShopController extends Controller
{
    public function index(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function products(){
        return view('products');
    }
    public function store(){
        return view('store');
    }
    public function contact(){
        return view('contact');
    }
    public function contactForm(Request $request){
        return view('contact', ['data' => $request]);
    }
}
