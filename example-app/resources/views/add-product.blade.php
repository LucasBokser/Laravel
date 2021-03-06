@extends('layout')
@section('cssOptionnal')
    <link rel="stylesheet" href="{{ asset('catalogue.css') }}"/>
@section('contenu')


    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title" style="color:white;">Formulaire de création d'un produit</h2>
        </div>
        <div class="panel-body">
            <form class="" action="/backoffice/product" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name" style="color:white;">name</label>
                    <input type="text" class="form-control" name="name" placeholder="name">
                </div>
                <div class="form-group">
                    <label for="price" style="color:white;">price</label>
                    <input type="int" class="form-control" name="price" placeholder="price">
                </div>
                <div class="form-group">
                    <label for="weight" style="color:white;">weight</label>
                    <input type="int" class="form-control" name="weight" placeholder="weight" width="65%">

                </div>
                <div class="form-group">
                    <label for="quantity" style="color:white;">quantity</label>
                    <input type="int" class="form-control" name="quantity" placeholder="quantity">

                </div>
                <div class="form-group">
                    <label for="available" style="color:white;">available</label>
                    <input type="int" class="form-control" name="available" placeholder="available">

                </div>

                <div class="form-group">
                    <label for="category_id" style="color:white;">category-id</label>
                    <input type="int" class="form-control" name="category_id" placeholder="category_id">

                </div>


                <button type="submit" class="btn btn-primary" method="get" action="{{route('product.store')}}">Submit</button>


            </form>
        </div>
    </div>
@endsection


