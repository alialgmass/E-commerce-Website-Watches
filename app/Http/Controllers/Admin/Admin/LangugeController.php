<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Languge;
use Illuminate\Http\Request;
use App\Http\Requests\LangRequest;
class LangugeController extends Controller
{
    //
    function index(){
        $data=Languge::selectdata();
     
        return view('admin\languges\index',compact('data'));
    }
    function create(){
        return view('admin.languges.create');
    }
    function store(LangRequest $request){
  
        Languge::create($request->except(['_token']));
        return redirect('admin/lang/show');
    }
    function edit($id){
        $data=Languge::find($id);
       if($data)
        return view('admin.languges.edit',compact('data'));
       
        return redirect('admin/lang/show');
    }
    function update(LangRequest $request,$id){
        try{ if($data=Languge::find($id)){
            $data->update($request->except(['__token']));
            return redirect('admin/lang/show');
                   }}
     catch(Execption $ex)   {
        return redirect('admin/lang/show')->withErrors($ex);
     }           
       
    }
    function delete($id){

       if($data=Languge::find($id)){
$data->delete();
return "done";
       }
          
    
     
       
       
    }
}
