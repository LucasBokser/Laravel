@extends('layout')
@section('cssOptionnal')
    <link rel="stylesheet" href="{{ asset('catalogue.css') }}"/>
@endsection

@section('contenu')

    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br/>
        @endif
        <h2 class="card-title" color="white">customers</h2>
        <a class="btn btn-info" href="{{ route('order.index') }}">Liste produits</a>
        @foreach($customer as $customers)
            <div class="card-body">
                <p class="card-text" style="color: white">{{$customers->description}}</p><br>
                <strong>Les produits de la commande:{{$customers->id}}</strong>
                @foreach($customer->commande as $commande)
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> id: {{$commande->id}}  </li>
                    </ul>
                @endforeach
                <a class="btn btn-info" href="{{ route('customer.show',$customer->id) }}">Description
                    commande
                </a><br>
    @endforeach

@stop
