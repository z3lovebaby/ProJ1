<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // public function index(){
    //     return view('login');
    // }
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
            return redirect()->to('home');
        }
    }
}
