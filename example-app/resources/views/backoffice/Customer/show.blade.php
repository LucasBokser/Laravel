@extends('layout')
@section('cssOptionnal')
    <link rel="stylesheet" href="{{ asset('catalogue.css') }}"/>
@endsection
@section('contenu')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Clients {{$customer->id}}</h2>
            </div>

        </div>
    </div>

    <div class="card" style="width: 18rem;">

        <div class="card-body">

            <p class="card-text" style="color: white">Description </p>
        </div>
        <ul class="list-group list-group-flush">


            <li class="list-group-item">Nom: {{$customer->last_name}} </li>
            <li class="list-group-item">Prenom: {{$customer->first_name}}</li>
            <li class="list-group-item">Email: {{$customer->email}}</li>
            <li class="list-group-item">Adresse: {{$customer->address}}</li>
            <li class="list-group-item">Code Postal: {{$customer->postcode}}</li>
            <li class="list-group-item">Ville: {{$customer->city}}</li>

        </ul>
    </div>
    <br>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('customer.index') }}"> Back</a>
    </div>

@endsection
