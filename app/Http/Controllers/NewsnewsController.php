<?php

namespace App\Http\Controllers;

use App\Models\Tintuc;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Components\NewsnewsRecusive;

class NewsnewsController extends Controller
{
    private $tintuc;
    public function __construct(Tintuc $tintuc)
    {
        $this->tintuc = $tintuc;
    }
    public function create(){
        $data = $this->tintuc->all();
        $recusive = new NewsnewsRecusive($data);
        $htmlOption = $recusive->tintucRecusive();
        return view('admin.news.addnews', compact('htmlOption')); 
    }
    public function store(Request $request){
        $this->tintuc->create([
            'TT_TieuDe' => $request->TT_TieuDe,
            'TT_TacGia' => $request->TT_TacGia,
            'TT_Ngay' => $request->TT_Ngay,
            'TT_MoTa' => $request->TT_MoTa,
            'TT_NoiDung' => $request->TT_NoiDung,
            'TT_Anh' => $request->TT_Anh,
            'TT_HienThi' => $request->TT_HienThi,
            'TT_NhomTin' => $request->TT_NhomTin
        ]);
        return redirect()->route('news.index');
    }
}
