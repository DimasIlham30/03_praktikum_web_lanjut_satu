<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product($id){
        $data = array( 'nama' => $id);
            return view('product', $data);
            
    }
}