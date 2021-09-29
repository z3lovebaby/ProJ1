<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\Setting;
use Illuminate\Support\Facades\Log;

class SettingAdminController extends Controller
{
    private $setting;
    public function __construct(Setting $setting)
    {
        $this->setting=$setting;
    }
    public function index(){
        $settings=$this->setting->latest()->paginate(5);
        return view('settings.index',compact('settings'));
    }
    public function create(){
        return view('settings.add');
    }
    public function store(Request $request){
        $this->setting->create([
            'config_key'=>$request->config_key,
            'config_value'=>$request->config_value,
            'type'=>$request->type,
        ]);
        return redirect()->route('settings.index');
    }
    public function edit($id){
        $settings=$this->setting->find($id);
        return view('settings.edit',compact('settings'));
    }
    public function update(Request $request,$id){
        $this->setting->find($id)->update([
            'config_key'=>$request->config_key,
            'config_value'=>$request->config_value,
            'type'=>$request->type,
        ]);
        return redirect()->route('settings.index');

    }
    public function delete($id){
        try{
            $this->setting->find($id)->delete();
            return response()->json([
                'code'=>200,
                'message'=>'success',
    
            ],status:200);
    
        }
        catch (Exception $exception) {
           
            Log::error('Message:' . $exception->getMessage() . 'Line' . $exception->getLine());
            return response()->json([
                'code'=>500,
                'message'=>'fail',
    
            ],status:500);
        }
        
       }
}
