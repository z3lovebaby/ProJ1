<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){   
        
        $adverts = Slider::all();
        return view('home.home', compact( var_name: "adverts"));
    }
}
