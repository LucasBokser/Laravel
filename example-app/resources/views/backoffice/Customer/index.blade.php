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
        <h2 class="card-title" style="color:white">Customers</h2>
        <a class="btn btn-info" href="{{ route('order.index') }}">Liste commandes</a>
        @foreach($customer as $customers)
            <div class="card-body">
                <p class="card-text" style="color: white">{{$customers->description}}</p><br>
                <strong style="color:white">Les produits de la commande:{{$customers->id}}</strong>
                @foreach($customers->orders as $commande)
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> id: {{$commande->id}}  </li>
                    </ul>
                @endforeach
                <a class="btn btn-info" href="{{ route('customer.show',$customers->id) }}">Détails des clients
                </a><br>
    @endforeach

@stop
