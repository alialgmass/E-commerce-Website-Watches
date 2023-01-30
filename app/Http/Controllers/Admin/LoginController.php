<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    //
    function index(){
    
       return view('admin.admin_login_page');
    }
    function login(Request $request){
        $remember_me=$request->has('remember_me')? true:false;
        $email=$request->input('email');
        $password=$request->input('password');
     if(Auth::guard('admin')->attempt(['email' => $email, 'password' => $password], $remember_me)){
        
        return redirect('/admin');
     }
       return "false"; 
    }
}
