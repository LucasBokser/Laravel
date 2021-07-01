@extends('layout')
@section('cssOptionnal')
    <link rel="stylesheet" href="{{ asset('catalogue.css') }}"/>
@section('contenu')

<?php/*
if($product->id){
    $options=['method'=>'put','url'=>action('BackOfficeController@update',$product)];
}else{
    $options=['method'=>'post','url'=>action('BackOfficeController@store')];
}
*/?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title" style="color:white;">Formulaire de modification d'un produit</h2>
        </div>
        <div class="panel-body">
            <form class="" action="{{route('product.update',$product->id)}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name" style="color:white;">name</label>
                    <input type="hidden"  name="_method" value="PUT" >
                    <input type="text" class="form-control" name="name" value="{{$product->name}}" >
                </div>
                <div class="form-group">
                    <label for="price" style="color:white;">price</label>
                    <input type="int" class="form-control" name="price" value="{{$product->price}}">
                </div>
                <div class="form-group">
                    <label for="weight" style="color:white;">weight</label>
                    <input type="int" class="form-control" name="weight" value="{{$product->weight}}" width="65%">

                </div>
                <div class="form-group">
                    <label for="quantity" style="color:white;">quantity</label>
                    <input type="int" class="form-control" name="quantity" value="{{$product->quantity}}">

                </div>
                <div class="form-group">
                    <label for="available" style="color:white;">available</label>
                    <input type="int" class="form-control" name="available" value="{{$product->available}}">

                </div>

                <div class="form-group">
                    <label for="category_id" style="color:white;">category-id</label>
                    <input type="int" class="form-control" name="category_id" value="{{$product->category_id}}">

                </div>


                <button type="submit" class="btn btn-primary" />Submit</button>


            </form>
        </div>
    </div>
@endsection


