<?php


namespace App\Http\Controllers;


class ProductController extends Controller
{
    public function listProduct()
    {
        return view('product-details');
    }

    public function product($id)
    {
        return view('product-list',['id' => $id]);
    }
}


