<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
session_start();

class AdminController extends Controller
{
    public function AuthLogin(){
        $id=session()->get('id');
        if($id){
            return redirect()->to('home');
        }
        else{
            return redirect()->to('admin');
        }
    }
    public function LoginAdmin()
    {
        // if (auth()->check()) {
        //     return redirect()->to('home');
        // }
        return view('login');
        // dd(bcrypt('123456789'));
    }
    
    public function postLoginAdmin(Request $request)
    {
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication was successful..
            
            session()->put('email',$request->email);
            session()->put('id',$request->id);
            return redirect()->to('home');
           
        }
        else{
            session()->put('message','Email hoặc mật khẩu không đúng !');
            return redirect()->to('admin');
          
        }
        
    }
    public function logoutAdmin(){
        $this->AuthLogin();
        session()->put('email',null);
        session()->put('id',null);
        return redirect()->to('admin');
    }
}
