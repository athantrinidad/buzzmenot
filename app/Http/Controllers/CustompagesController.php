<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustompagesController extends Controller
{
    //HOME PAGE
    public function index(){
        return view('pages.home');
    }
    //ABOUT PAGE
    public function about(){
        return view('pages.about');
    }
    //ABOUT PAGE
    public function partners(){
        return view('pages.partners');
    }
}
