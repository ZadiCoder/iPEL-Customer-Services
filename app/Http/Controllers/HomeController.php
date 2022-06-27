<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cur_type_name = Auth::user()->Usertype->name;
        if(strpos($cur_type_name, 'Admin') !== false){
            return view('admin.dashboard');
        }
        else if(strpos($cur_type_name, 'Customer') !== false){
            return view('customer');
        }
        else if(strpos($cur_type_name, 'Technicain') !== false){
            return view('technician');
        }

       //return Auth::user()->Usertype->name;
       // return view('home');
    }
}
