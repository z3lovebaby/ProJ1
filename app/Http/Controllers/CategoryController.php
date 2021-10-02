<?php

namespace App\Http\Controllers;

use App\Models\Danhmucsach;
use Illuminate\Http\Request;
use App\Components\Recusive;

class CategoryController extends Controller
{   private $danhmucsach;
    public function __construct(Danhmucsach $danhmucsach)
    {
       
        $this->danhmucsach=$danhmucsach;
    }
    public function create()
    {

        $htmlOption=$this->getCategory($parentId='');
                    
        return view ('admin.category.add',compact('htmlOption'));
    }
    
    public function index(){
        $categories=$this->danhmucsach->latest()->paginate(5);
        return view ('admin.category.index',compact('categories'));
    }
    public function store(Request $request){
        $this->danhmucsach->create([
            'DMS_Tieude'=>$request->DMS_Tieude,
            'DMS_parentId'=>$request->DMS_parentId,
            'DMS_Mota'=>$request->DMS_Mota,
            'DMS_Vitri'=>$request->DMS_Vitri
        ]);
        return redirect()->route('categories.index');
    }

    public function getCategory($parentId){
        $data=$this->danhmucsach->all();
        $recusive=new Recusive($data);
        $htmlOption=$recusive->danhmucsachRecusive($parentId);
        return $htmlOption;
    }

    public function edit($id){
          $category=$this->danhmucsach->find($id);
        $htmlOption=$this->getCategory($category->DMS_parentId);
        return view ('admin.category.edit',compact('category','htmlOption'));
    }

    public function update($id,Request $request){
        $this->danhmucsach->find($id)->update([
            'DMS_Tieude'=>$request->DMS_Tieude,
            'DMS_parentId'=>$request->DMS_parentId,
            'DMS_Mota'=>$request->DMS_Mota,
            'DMS_Vitri'=>$request->DMS_Vitri
        ]);
          return redirect()->route('categories.index');
    }

    public function delete($id){
        $this->danhmucsach->find($id)->delete();
               return redirect()->route('categories.index');
    }

}
