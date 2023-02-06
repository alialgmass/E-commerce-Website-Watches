<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function index(){
        $data=Cart::with('product')->get();
        $x=0;
        foreach($data as $d){
$x=$d['quantity'] * $d->product->sale_price+$x;
        }
        $data->total=$x;
        session()->put('total', $x);
        return \view('user.cart.index',['data'=>$data]);
    }
    public function create($id)
    {
        //
        $data=Product::find($id);
        return view('user.cart.create',\compact('data'));
    }
    public function store(Request $request){
       
Cart::create(
    [
        'product_id'=>$request->id,
        'quantity'=>$request->quantity
    ]
);
return \redirect('/cart');
    }
}
