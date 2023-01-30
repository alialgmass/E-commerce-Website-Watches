<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    //
    function index(){
return view('admin.dashboard');
    }
    function logout(){
        Auth::guard('admin')->logout();
        return  redirect('/admin/login');
    }
}
