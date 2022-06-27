<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class BaseController extends Controller
{
    public function home(){
        $category = Category::all();
        return view('front.home',compact('category'));
    }

  //  public function show_category(){
  //      return view('front.home');
  //  }
}
