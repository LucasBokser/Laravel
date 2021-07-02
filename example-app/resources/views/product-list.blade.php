@extends('layout')

@section('cssOptionnal')
    <link rel="stylesheet" href="{{ asset('catalogue.css') }}"/>
@endsection

@section('contenu')

    <!-- carrousel -->
    <div class="container-md">
        <div class="row">
            <div class="col-lg-4 sm-12 text">
                <p>
                    Envie d'une bonne bière brassée selon les anciennes traditions remontant à l'époque lointaine du
                    déluge?
                    <br/>
                    N'hésitez plus et faites votre choix parmis notre collection !
                </p>
            </div>

            <div class="col-lg-4 sm-12">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">

                        @foreach ($products as $product)


                            <button type="button" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide-to="{{ $loop->index }}" class="active" aria-current="true"
                                    aria-label="Slide {{ $loop->iteration }}"></button>

                        @endforeach


                    </div>
                    <div class="carousel-inner">


                        @foreach ($products as $product)

                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                                <a href="/product/{{ $product->id }}">
                                    <img src="{{ $product->picture }}" class="d-block w-100" alt="..."/></a>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{ $product->name }}</h5>
                                    <div id="name">
                                        <p>{{ $product->price / 1000 }} €/kg</p>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                        <ul>
                            <li>{{$product->name}}</li>
                            @if ($product->price >= 500)
                                <li>Prix réduit: {{$product->price * 0.5 + 1}} €</li>
                            @else
                                <li>{{$product->price}} €</li>
                            @endif
                            <li>{{$product->description}}</li>
                        </ul>


                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="prev">
                            <div class="span-carousel">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </div>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="next">
                            <div class="span-carousel">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </div>
                        </button>


                    </div>
                </div>
                <div class="col-lg-4 sm-12 text">
                    <p>
                        Que ce soit de la brune de caractère ou alors une douce blanche nous somme sur que vous
                        trouverez
                        votre bonheur choissisez celle-qui vous plaira et bonne dégustation!!
                    </p>
                </div>
            </div>
            <!-- javascript -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
                    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
                    crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
                    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
                    crossorigin="anonymous"></script>
        </div>
@endsection
