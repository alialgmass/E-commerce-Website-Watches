<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Main_categrories;
use Illuminate\Http\Request;
use DB;
use Storage;
use  App\Http\Requests\MaincategoriesRequest;

class MaincategoriesController extends Controller
{
    //add_id_function
    function add_id($arr,$id){
$arr['translate_of']=$id;
return $arr;
    }
    //Main_categrories
    function index(){

        $data=Main_categrories::getdufcualt();
       
       
        return view('admin.main_categories.index',compact('data'));
    }
    function create(){
        $data=get_active_lang();
        return view('admin.main_categories.create',compact('data'));
    }


    //store 
    function store(MaincategoriesRequest $request){
        $path= uploud_file("maincatigory", $request->img->hashName(),$request->img);
           
           

       try{
        DB::beginTransaction();

        $catigrios=\collect($request->Maincategories);
       
        $defuiltlang  =   $catigrios->filter(function ($value,$key) {
           return $value['translate_lang']  ==   "ar";
       });
       $defuilt =   array_values($defuiltlang->all())[0];
   
            
       $defuilt  =   get_active($defuilt);
     
      $id  =   Main_categrories::insertGetId([
          'name'=>$defuilt['name'],
          'translate_lang'=>$defuilt['translate_lang'],
          'translate_of'=>0,
          'photo'=> $path,
          'active'=>$defuilt['active'],
      ]);
      $other=   $catigrios->filter(function ($value,$key) {
       return $value['translate_lang']!="ar";
   });
   
   $newarr=[];
   foreach($other as $i=>$n){
       array_push($newarr
       ,$this
       ->add_id(get_active(array_values($other->all())[$i-1])
       ,$id));
      
   }
  
  
    Main_categrories::insert($newarr);
        DB::commit();

       }
       catch(Exception $ex){
DB::rollback();
       }
       return \redirect('/admin/main_categories/show');
  

}
function edit($id){
  $data= Main_categrories::find($id);
  

return view('admin.main_categories.edit',\compact('data'));

}
function update(MaincategoriesRequest $request,$id){
    $data= Main_categrories::find($id);
    $Maincategories=get_active($request->Maincategories[0]);
    if(!$data){
        return \redirect('/admin/main_categories/show',['error'=>'لايوجد قسم بهذا الرقم']);
    }
    else{
        if(isset($Maincategories['photo'])){
           
           
      
             $data->update(
                $Maincategories
              );
        }
        else{
          
            
            $data->update(
                $Maincategories
              );
        }
        
    }
   // $data->update( );
    return \redirect('/admin/main_categories/show');
}
}