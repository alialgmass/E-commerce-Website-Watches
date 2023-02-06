<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        try {
            $data = Product::limit(4)->get();

            return \view('user.index', ['data' => $data]);
        } catch (Exception $ex) {
            return \view('user.index');
        }

    }
    public function show($id)
    {
        $data = Product::find($id);
        return \view('user.product.show', ['data' => $data]);
    }
    public function all_prouduct()
    {
        $data = Product::all();
        return \view('user.product.index', ['data' => $data]);
    }
}
