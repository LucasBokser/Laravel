<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function listProduct()
    {
        $productData = DB::select('select * from products');
          //dd($productData);
        return view('product-list', ['products' => $productData]);
    }



    public function product($id)
    {
        $productData = DB::select('select * from products where id = :id', ['id' => $id]);
        //dd($product[0]->name);

        return view('bières.product-detail', ['product' => $productData[0]]);


    }
}


