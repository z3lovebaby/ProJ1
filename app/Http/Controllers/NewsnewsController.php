<?php

namespace App\Http\Controllers;

use App\Models\Tintuc;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Components\NewsnewsRecusive;
use App\Components\NewsRecusive;
use App\Models\Nhomtin;

class NewsnewsController extends Controller
{
    private $tintuc;
    private $nhomtin;
    public function __construct(Nhomtin $nhomtin, Tintuc $tintuc)
    {
        $this->nhomtin = $nhomtin;
        $this->tintuc = $tintuc;
    }

    public function create(){
        $htmOption = $this->getNhomtin($NT_ViTri = '');
        $data = $this->tintuc->all();
        $recusive = new NewsnewsRecusive($data);
        $html1Option = $recusive->tintucRecusive();
        return view('admin.news.addnews', compact('htmOption')); 
    }
    public function getNhomtin($NT_ViTri){
        $data = $this->nhomtin->all();
        $recusive = new NewsRecusive($data);
        $htmlOption = $recusive->nhomtinRecusive($NT_ViTri);
        return $htmlOption;
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
