<?php


namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

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

        return view('bieres.product-detail', ['product' => $productData[0]]);
    }


/*
    public function productsByName()
    {
        $productsOrderByName = Product::all()
            ->sortBy('name');
        return view('product-list', ['products' => $productsOrderByName]);
    }

*/
    public function productsByPrice()
    {
        $productsOrderByPrice = Product::all()
            ->sortBy('price');

        return view('product-list', ['products' => $productsOrderByPrice]);
    }

/* pour prix decroissant

    public function productsByPrice()
    {
        $productsOrderByPrice = Product::all()
            ->sortByDesc('price');
        return view('product-list', ['products' => $productsOrderByPrice]);
    }
*/


    public function showProduct($id)
    {
        $showProduct = Product::find($id);
        //dd($showProduct);
        return view('test', ['product' => $showProduct]);
    }
}
