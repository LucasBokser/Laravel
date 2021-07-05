@extends('layout')
@section('cssOptionnal')
    <link rel="stylesheet" href="{{ asset('catalogue.css') }}" />
@section('contenu')

    <h3 class="card-title" style="color: white" >Mon Produit</h3>




            <div class="card" style="width: 18rem;">

                <div class="card-body">

                    <p class="card-text" style="color: white">Description produit</p>
                </div>
                <ul class="list-group list-group-flush">

                        <li class="list-group-item">Nom: {{$product->name}}</li>
                        <li class="list-group-item">Prix en euros: {{$product->price}}</li>
                        <li class="list-group-item">Poids en kg: {{$product->weight}}</li>
                        <li class="list-group-item">Quantité: {{$product->quantity}}</li>
                        <li class="list-group-item">Disponibilité: {{$product->available}}</li>
                        <li class="list-group-item">Catégorie: {{$product->category->name}}</li>

                </ul>
            </div>




@endsection




