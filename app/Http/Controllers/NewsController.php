<?php

namespace App\Http\Controllers;

use App\Models\Nhomtin;
use App\Models\Tintuc;
use Illuminate\Http\Request;
use App\Components\NewsgroupRecusive;
use App\Components\NewsRecusive;
use App\Http\Controllers\Controller;
use App\Traits\AuthAdminTrait;
class NewsController extends Controller
{
    
    private $tintuc;
    private $nhomtin;
    use AuthAdminTrait;
    public function __construct(Nhomtin $nhomtin, Tintuc $tintuc)
    {
        $this->nhomtin = $nhomtin;
        $this->tintuc = $tintuc;
    }

    public function create(){
        $this->AuthLogin();
        $htmOption = $this->getNhomtin($NT_ViTri = '');
        $data = $this->tintuc->all();
        $recusive = new NewsRecusive($data);
        $html1Option = $recusive->tintucRecusive();
        return view('admin.news.add', compact('htmOption')); 
    }
    public function index(){
        $this->AuthLogin();
        $tintucs = $this->tintuc->latest()->paginate(3);
        return view('admin.news.index', compact('tintucs')); 
    }
    public function getNhomtin($NT_ViTri){
        $data = $this->nhomtin->all();
        $recusive = new NewsgroupRecusive($data);
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
    public function edit($id){
        $tintuc = $this->tintuc->find($id);
        $htmlOption = $this->getNhomtin($tintuc->TT_NhomTin);
        $data1 = $this->tintuc->all();
        $recusive = new NewsRecusive($data1);
        $html1Option = $recusive->tintucRecusive($id);
        return view('admin.news.edit', compact('tintuc', 'htmlOption'));
    }
    public function update($id, Request $request){
        $this->tintuc->find($id)->update([
            'TT_TieuDe' => $request->TT_TieuDe,
            'TT_TacGia' => $request->TT_TacGia,
            'TT_Ngay' => $request->TT_Ngay,
            'TT_MoTa' => $request->TT_MoTa,
            'TT_NoiDung' => $request->TT_NoiDung,
            'TT_Anh' => $request->TT_Anh,
            'TT_HienThi' => $request->TT_HienThi,
            'TT_NhomTin' => $request->TT_NhomTin,

        ]);
        return redirect()->route('news.index');
    }
    public function delete($id){
        $this->tintuc->find($id)->delete();
        return redirect()->route('news.index');
    }
}
