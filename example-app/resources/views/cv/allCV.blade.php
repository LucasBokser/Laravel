@extends('layout')
@section('contenu')
    <!-- fin nav bar -->

    <main>

        <!-- debut presentation cv -->

        <div id="hercule" class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-auto">
                    <img src="{{asset(".\photos\Photo Hercules.jpg")}}" class="rounded-circle" alt="hercule" />
                </div>
                <div class="col justify-content-center align-item-center">
                    <h2>Hercule fils de zeus</h2>
                </div>
                <div class="col col-sm-0"></div>
            </div>
        </div>
        <!-- fin presentation cv  -->

        <!-- tableau formation -->
        <div class="container" id="tableaux">
            <div id="tableau" class="row justify-content-center">
                <div class="col-8 gy-5">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th colspan="1">Formation</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>official God</td>
                            <td>God Academy</td>
                            <td>-672</td>
                        </tr>
                        <tr>
                            <td>Demi-dieu</td>
                            <td>Le campus divin</td>
                            <td>-724</td>
                        </tr>
                        <tr>
                            <td>Heros</td>
                            <td>Ecole des Heros</td>
                            <td>-800</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <!-- fin tableau formation -->


                <!-- tableux experiences -->
                <div class="col-8 gy-5">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th colspan="1">Experiences</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Sluggies</td>
                            <td>Mannequin pour slip</td>
                            <td>1978-2008</td>
                        </tr>
                        <tr>
                            <td>Auto-entrepreneur</td>
                            <td>Mercenaire</td>
                            <td>-649-1977</td>
                        </tr>
                        <tr>
                            <td>Olympe</td>
                            <td>Demi-dieu</td>
                            <td>???--649</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--  fin tableau experiences -->

        <!-- liste hob et comp -->
        <div class="container-fluid">
            <div class="row row-md-cent">
                <div class="col-lg-4 col-md-2 gy-5">
                    <h1><u>Hobbies</u></h1>
                    <li>Cultirisme</li>
                    <li>castagne</li>
                    <li>Le crochet</li>
                </div>
                <div class="col-lg-4 col-md-0 col offset-lg-4 offset-md-2 gy-5">
                    <h1><u>Competences</u></h1>
                    <ol>
                        <li>tir a l'arc</li>
                        <li>Combats a main nue</li>
                        <li>Sauvetage de demoisselle en detresse</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- fin liste -->

    </main>
@endsection
