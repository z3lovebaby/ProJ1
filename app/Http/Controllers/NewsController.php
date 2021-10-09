<?php

namespace App\Http\Controllers;

use App\Models\Nhomtin;
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
        $htmlOption = $this->getNhomtin($NT_ViTri = '');
        return view('admin.news.add', compact('htmlOption')); 
    }
    public function index(){
        $nhomtins = $this->nhomtin->latest()->paginate(5);
        return view('admin.news.index', compact('nhomtins')); 
    }
    public function store(Request $request){
        $this->nhomtin->create([
            'NT_Ten' => $request->NT_Ten,
            'NT_MoTa' => $request->NT_MoTa,
            'NT_ViTri' => $request->NT_ViTri,
        ]);
        return redirect()->route('news.index');
    }

    public function getNhomtin($NT_ViTri){
        $data = $this->nhomtin->all();
        $recusive = new NewsRecusive($data);
        $htmlOption = $recusive->nhomtinRecusive($NT_ViTri);
        return $htmlOption;
    }

    public function edit($id){
        $nhomtin = $this->nhomtin->find($id);
        $htmlOption = $this->getNhomtin($nhomtin->NT_ViTri);
        return view('admin.news.edit', compact('nhomtin', 'htmlOption'));
    }
    public function update($id, Request $request){
        $this->nhomtin->find($id)->update([
            'NT_Ten' => $request->NT_Ten,
            'NT_MoTa' => $request->NT_MoTa,
            'NT_ViTri' => $request->NT_ViTri,
        ]);
        return redirect()->route('news.index');
    }
    public function delete($id){
        
    }
}
