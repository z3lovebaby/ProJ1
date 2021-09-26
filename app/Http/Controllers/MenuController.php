<?php

namespace App\Http\Controllers;
use App\Components\MenuRecusive;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\support\str;

class MenuController extends Controller
{   private $menuRecusive;
    private $menu;
    public function __construct(MenuRecusive $menuRecusive, Menu $menu)
    {
        $this->menuRecusive=$menuRecusive;
        $this->menu=$menu;
    }

    public function index(){
        $menus=$this->menu->latest()->paginate(10);
        return view ('menus.index',compact('menus'));
    }

    public function create()
    {

        // $htmlOption=$this->getCategory($parentId='');
        $optionSelect=$this->menuRecusive->menuRecusiveAdd();         
        return view ('menus.add',compact('optionSelect'));
    }


    public function store(Request $request){
        $this->menu->create([
            'name'=>$request->name,
            'parent_id'=>$request->parent_id,
            'slug'=> str::slug($request->name)
        ]);
           return redirect()->route('menus.index');
    }


   
    public function edit($id,Request $request){
        $menuEdit=$this->menu->find($id);
        $optionSelect=$this->menuRecusive->menuRecusiveEdit($menuEdit->parent_id); 
      return view ('menus.edit',compact('optionSelect','menuEdit'));
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
}
