@extends('layout')
@section('cssOptionnal')
    <link rel="stylesheet" href="{{ asset('catalogue.css') }}" />
@section('contenu')

    <h3 class="card-title" style="color: white">Liste produits</h3>

    <form class="form-inline my-3 my-lg-0 width:65%" id="ajouter" method="get" action="{{route('product.create')}}">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btn-ajouter">
            Ajouter
        </button>

    @foreach ($products as $product)

    <div class="card" style="width: 18rem;">

        <div class="card-body">

            <p class="card-text" style="color: white">Description produit</p>
        </div>
        <ul class="list-group list-group-flush">


            <li class="list-group-item">Nom: {{$product->name}}</li>

        </ul>


        <a href="{{route('product.show',$product->id)}}" /> Voir  </a>

        <a href="{{route('product.edit',$product->id)}}" /> Modifier  </a>

                <form class="form-inline my-3 my-lg-0 width:65%" id="supprimer" >
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btn-supprimer">
                        Supprimer
                    </button>
                </form>
    </div>

    @endforeach



@endsection




