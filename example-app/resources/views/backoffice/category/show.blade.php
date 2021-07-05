@extends('layout')
@section('cssOptionnal')
    <link rel="stylesheet" href="{{ asset('catalogue.css') }}"/>
@endsection
@section('contenu')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="color: white">Catégorie {{$categorie->id}}</h2>
            </div>

        </div>
    </div>

    <div class="card" style="width: 18rem;">

        <div class="card-body">

            <p class="card-text" style="color: white">Description </p>
        </div>
        <ul class="list-group list-group-flush">


            <li class="list-group-item">ID: {{$categorie->id}} </li>
            <li class="list-group-item">Nom: {{$categorie->name}}</li>
            <li class="list-group-item">Description: {{$categorie->description}}</li>

        </ul>
    </div>
    <br>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('category.index') }}"> Back</a>
    </div>

@endsection
