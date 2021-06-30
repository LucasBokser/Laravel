@extends('layout')
@section('cssOptionnal')
    <link rel="stylesheet" href="{{ asset('catalogue.css') }}" />
@section('contenu')

    <h3 class="card-title">Liste produits</h3>

    @foreach ($products as $product)

    <div class="card" style="width: 18rem;">

        <div class="card-body">

            <p class="card-text" style="color: white">Description produit</p>
        </div>
        <ul class="list-group list-group-flush">

            <a href="/product/{{$product-> id}}">
            <li class="list-group-item">Nom: {{$product->name}}</li>
            <li class="list-group-item">Prix en euros: {{$product->price}}</li>
            <li class="list-group-item">Poids en kg: {{$product->weight}}</li>
            <li class="list-group-item">Quantité: {{$product->quantity}}</li>
            <li class="list-group-item">Disponibilité: {{$product->available}}</li>
            <li class="list-group-item">Catégorie: {{$product->category_id}}</li>

        </ul>
        <form class="form-inline my-3 my-lg-0 width:65%" id="ajouter" method="get" action="{{route('product.create')}}">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btn-ajouter">
                Ajouter
            </button>

            <form class="form-inline my-3 my-lg-0 width:65%" id="modifier">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btn-modifier">
                    Modifier
                </button>

                <form class="form-inline my-3 my-lg-0 width:65%" id="supprimer" >
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btn-supprimer">
                        Supprimer
                    </button>
    </div>

    @endforeach

@endsection




