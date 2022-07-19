<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cur_type_name = Auth::user()->Usertype->name;
        if(strpos($cur_type_name, 'Admin') !== false){
            return redirect()->route('admin.dashboard');
        }
        else if(strpos($cur_type_name, 'Customer') !== false){
            return redirect()->route('customer.dashboard');
        }
        else if(strpos($cur_type_name, 'Technicain') !== false){
            return view('technician');
        }

       //return Auth::user()->Usertype->name;
       // return view('home');
    }
}
