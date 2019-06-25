<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{ 
    public function index(){
   
      
     return view('index');
  }
  public function about(){
     
     return view('pages.about');
  }

  public function catering(){
     
    return view('pages.catering');
 }
 public function gallery(){
     
    return view('pages.gallery');
 }
 public function shop(){
     
    return view('pages.shop');
 }
 public function offer(){
     
    return view('pages.offer');
 }
 public function contact(){
     
   return view('pages.contact');
}
}

