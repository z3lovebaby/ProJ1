<?php

namespace App\Http\Controllers;

use App\Components\Recusive;
use App\Http\Controllers\Controller;
use App\Models\Danhmucsach;
use App\Models\Sach;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SachController extends Controller
{   
    use StorageImageTrait;
    private $category;
    private $sp;
    public function __construct(Danhmucsach $category,Sach $sp)
    {
       
        $this->category=$category;
        $this->sp=$sp;
    }
    
        public function index(){
            // $categories =$this->getCategory($parentId='');
            return view ('admin.sachs.index');
        }
        
    public function create()
        {

            $htmlOption=$this->getCategory($parentId='');
                        
            return view ('admin.sachs.add',compact('htmlOption'));
        }

        public function getCategory($parentId){
            $data=$this->category->all();
            $recusive=new Recusive($data);
            $htmlOption=$recusive->danhmucsachRecusive($parentId);
            return $htmlOption;
        }
        public function store(Request $request){
            $dataSach=[
                'S_Ten'=>$request->S_Ten,
                'S_GiaBan'=>$request->S_GiaBan,
                'S_DanhmucId'=>$request->S_DanhmucId,
                'S_Mota'=>$request->S_Mota,
                'S_Chitiet'=>$request->S_Chitiet,
                'S_TuKhoa'=>$request->S_TuKhoa,
                'S_NXBId'=>$request->S_NXBId,
                'S_TacGiaId'=>$request->S_TacGiaId
            ];
            $dataUp=$this->storageTraitUploat($request,'S_Anh','sachs');
            if(!empty($dataUp)){
                $dataSach['S_Anh']=$dataUp['file_name'];
                $dataSach['S_ViTri']=$dataUp['file_path'];
            }
            $sp=$this->sp->create($dataSach);
            return redirect()->route('sachs.index');
        }
}
