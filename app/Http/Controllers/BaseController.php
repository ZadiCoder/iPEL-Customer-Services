<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;
class BaseController extends Controller
{
    public function home(){
        $category = Category::all();
        return view('front.home',compact('category'));
    }
    public function show_service_details($id){
      $image = Category::find($id);
    $details = DB::table('services')
          ->join('categories', 'categories.id', '=', 'services.category_id')
          ->where('services.category_id',$id)
          ->get();
        
        return view('front.service_detail',compact('details','image'));
    }
  

}
