<?php


namespace App\Http\Controllers;


class ProductController extends Controller
{
    public function listProduct()
    {
        return view('products.product-details');
    }

    public function product($id)
    {
        return view('products.product-list',['id' => $id]);
    }
}


