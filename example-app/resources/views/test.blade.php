@extends('layout')

@section('contenu')

    @foreach($product as $produit)
    <p>{{$produit->name}}</p>
    <p>{{$produit->price}}</p>
    @endforeach

@endsection
