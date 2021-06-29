@extends('layout')
@section('cssOptionnal')
    <link rel="stylesheet" href="{{ asset('catalogue.css') }}" />
@section('contenu')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Formulaire de création d'un produit</h2>
        </div>
        <div class="panel-body">
            <form class="" action="/user" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" class="form-control" name="name" placeholder="name">
                </div>
                <div class="form-group">
                    <label for="name">weight</label>
                    <input type="text" class="form-control" name="weight" placeholder="weight">
                </div>
                <div class="form-group">
                    <label for="price">price</label>
                    <input type="text" class="form-control" name="weight" placeholder="weight">

                </div>
                <div class="form-group">
                    <label for="quantity">quantity</label>
                    <input type="text" class="form-control" name="quantity" placeholder="quantity">

                </div>
                <div class="form-group">
                    <label for="available">available</label>
                    <input type="text" class="form-control" name="available" placeholder="available">

                </div>

                <div class="form-group">
                    <label for="category-id">category-id</label>
                    <input type="text" class="form-control" name="category-id" placeholder="category-id">

                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection


