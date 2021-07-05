@extends('layout')

@section('contenu')

    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br/>
        @endif
        <h2 class="card-title">Catégories</h2>
        <a class="btn btn-info" href="{{ route('product.index') }}">Liste produits</a>
        @foreach($categorie as $category)
            <div class="card-body">
                <p class="card-text" style="color: white">{{$category->description}}</p><br>
                <strong>Les produits de la catégorie:{{$category->id}}</strong>
                @foreach($category->products as $product)
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> id: {{$product->id}} <br> nom:{{$product->name}} </li>
                    </ul>
                @endforeach
                <a class="btn btn-info" href="{{ route('category.show',$category->id) }}">Description
                    catégorie</a><br>
    @endforeach

@stop
