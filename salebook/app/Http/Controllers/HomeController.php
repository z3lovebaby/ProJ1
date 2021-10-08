<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;
use PHPUnit\Framework\ComparisonMethodDoesNotAcceptParameterTypeException;

class HomeController extends Controller
{
    public function index(){   
        
        $adverts = Slider::all();
        $danhmucsaches = Category::where('DMS_parentId', 0)->get();
        return view('home.home',compact('adverts', 'danhmucsaches'));
    }
}
