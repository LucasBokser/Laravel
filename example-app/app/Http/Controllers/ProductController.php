<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function listProduct()
    {
        $products = DB::select('select * from products');
        //  dd($products);
        return view('product-list', ['product' => $products]);
    }



    public function product($id)
    {
        $product = DB::select('select * from products where id = :id', ['id' => $id]);
        //dd($product[0]->name);

        return view('bières.product-detail', ['produit' => $product[0]]);


    }
}


