<?php

namespace App\Http\Controllers;

use App\Models\Nhomtin;
use App\Models\Tintuc;
use Illuminate\Http\Request;
use App\Components\NewsRecusive;

class NewsController extends Controller
{
    private $nhomtin;
    public function __construct(Nhomtin $nhomtin)
    {
        $this->nhomtin = $nhomtin;
    }
    public function create(){
        $data = $this->nhomtin->all();
        $recusive = new NewsRecusive($data);
        $htmlOption = $recusive->nhomtinRecusive();
        return view('admin.news.add', compact('htmlOption')); 
    }
    public function index(){

        return view('admin.news.index'); 
    }
    public function store(Request $request){
        $this->nhomtin->create([
            'NT_Ten' => $request->NT_Ten,
            'NT_MoTa' => $request->NT_MoTa,
            'NT_ViTri' => $request->NT_ViTri,
        ]);
        return redirect()->route('news.index');
    }

    
}
