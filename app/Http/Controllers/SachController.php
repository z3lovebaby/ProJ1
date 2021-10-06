<?php

namespace App\Http\Controllers;

use App\Components\Recusive;
use App\Http\Controllers\Controller;
use App\Models\Danhmucsach;
use App\Models\Sach;
use Illuminate\Http\Request;

class SachController extends Controller
{   
    private $category;
    public function __construct(Danhmucsach $category)
    {
       
        $this->category=$category;
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
}
