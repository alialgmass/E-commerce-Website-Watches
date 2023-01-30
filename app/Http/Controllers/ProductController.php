<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    public function index(){
        try{
             $data=Product::limit(4)->get();

            return \view('prouduct',['data'=>$data]);
        }catch(Exception $ex){
            return \view('prouduct');
        }
       
    }
    public function show($id){
        $data=Product::find($id);
        return \view('singleproduct',['data'=>$data]);
    }
    public function all_prouduct(){
        $data=Product::all();
        return \view('all_products',['data'=>$data]);
    }
}
