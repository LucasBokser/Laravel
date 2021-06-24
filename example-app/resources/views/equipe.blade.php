@extends('layout')
@section('cssOptionnal')
    <link rel="stylesheet" href="/equipe.css" />
@endsection
@section('contenu')
    <!-- description équipe -->
    <div class="container-fluid">
        <div class="row">
            <h1>La brasserie Noé !</h1>


        </div>
        <div class="row">
            <div class="col-sm">
                <h2>Hubert:</h2>
                <span class="T">
                    <p>Commercial & responsable relation hors territoire français</p>
                </span>




                <a class="lienh" href="cv/cv-hubert.blade.php"><img src="{{asset('photos\Photo Hubert.jpg')}}" alt="oss"></a>

            </div>

            <div class="col-sm">
                <h2>Aurélien:</h2>
                <span class="T">
                    <p>Concepteur de goût &préparateur de mixture</p>
                </span>





                <a class="liena" href="cv-aurel.html"><img src="{{asset('photos\Photo Aurélien.jpg')}}" alt="orel"></a>

            </div>


            <div class="col-sm">
                <h2>Lucie:</h2>
                <span class="T">
                    <p>Chercheuse de saveur & responsable mousse</p>
                </span>



                <a class="lienL" href="cv/cv-lucie.blade.php"> <img src="{{asset('photos\Photo Lucie.jpg')}}" alt="lulu"></a>

            </div>
            <div class="col-sm">
                <h2>Hercule:</h2>
                <span class="T">
                    <p>Technicien de surface & responsable équipement</p>
                </span>




                <a class="lienH" href="cv-hercule.html"><img src="{{asset('photos\Photo Hercules.jpg')}}" alt="herc"></a>


            </div>
        </div>
    </div>



    <!--javascript  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
        crossorigin="anonymous"></script>
@endsection
