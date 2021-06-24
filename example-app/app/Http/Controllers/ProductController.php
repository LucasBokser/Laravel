<?php


namespace App\Http\Controllers;


class ProductController extends Controller
{
    public function listProduct()
    {
        return view('product-list');
    }

    public function product($id)
    {
        return view('bières.product-detail',['identification' => $id]);
    }
}


