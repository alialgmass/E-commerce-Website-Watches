<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    public function index(){
        try{
             $data=Product::get();

            return \view('admin.product.index',['data'=>$data]);
        }catch(Exception $ex){
            return \view('admin.product.index');
        }
       
    }
    public function show($id){

       if($data=Product::find($id)) 
        return \view('singleproduct',['data'=>$data]);
        else
        return \view('singleproduct',['data'=>['']]);
    }
   
    function create(){
        return view('admin.product.create');
    }
    function store(Request $request){
  
        Product::create($request->all());
        return redirect('admin/product');
    }
    function edit($id){

        $data=Product::find($id);
       if($data)
        return view('admin.product.edit',compact('data'));
       
    
    }
    function update(Request $request,$id){
        try{ if($data=Product::find($id)){
            $data->update($request->except(['__token']));
            return redirect('admin/product');
                   }}
     catch(Execption $ex)   {
        return redirect('admin/product')->withErrors($ex);
     }           
       
    }
    function delete($id){

       if($data=Product::find($id)){
$data->delete();
return "done";
       }
          
    
     
       
       
    }
}
