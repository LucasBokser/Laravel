@extends('layout')
@section('cssOptionnal')
    <link rel="stylesheet" href="{{ asset('catalogue.css') }}"/>
@endsection
@section('contenu')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="color:white">Commandes {{$commande->id}}</h2>
            </div>

        </div>
    </div>

    <div class="card" style="width: 18rem;">

        <div class="card-body">

            <p class="card-text" style="color: white">Description </p>
        </div>
        <ul class="list-group list-group-flush">


            <li class="list-group-item">ID: {{$commande->id}} </li>
            <li class="list-group-item">Date: {{$commande->date}}</li>
            <li class="list-group-item">Nombre: {{$commande->number}}</li>

        </ul>
    </div>
    <br>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('order.index') }}"> Back</a>
    </div>

@endsection
