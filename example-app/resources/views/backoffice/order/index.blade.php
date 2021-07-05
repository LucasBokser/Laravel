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
        <h2 class="card-title" color="white">Orders</h2>
        <a class="btn btn-info" href="{{ route('product.index') }}">Liste produits</a>
        @foreach($commande as $order)
            <div class="card-body">
                <p class="card-text" style="color: white">{{$order->description}}</p><br>
                <strong>Les produits de la commande:{{$order->id}}</strong>
                    @foreach($order->products as $product)
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> id: {{$product->id}} <br> nom:{{$product->name}} <br> quantité:{{$product->pivot->quantity}}</li>
                    </ul>
                    @endforeach
                    <a class="btn btn-info" href="{{ route('order.show',$order->id) }}">Description
                    commande
                    </a><br>
        @endforeach

@stop
