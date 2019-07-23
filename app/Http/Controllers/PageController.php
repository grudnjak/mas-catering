<?php

namespace App\Http\Controllers;
use App\Post;
use App\Galerija;
use Illuminate\Http\Request;

class PageController extends Controller
{ 
    public function index(){
      $posts = Post::orderBy('created_at','desc')->limit(5)->get();
      
     return view('index')->with('posts',$posts);
  }
  public function about(){
     
     return view('pages.about');
  }

  public function catering(){
     
    return view('pages.catering');
 }
 public function gallery(){
     
   $slike = Galerija::orderBy('created_at','desc')->limit(12)->get();
      
    return view('pages.gallery')->with('slike',$slike);
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

