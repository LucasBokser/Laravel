@extends('layout')
@section('contenu')
  <!-- fin nav bar -->

  <main>
    <!-- debut presentation cv -->

    <div id="hubert" class="container">
      <div class="row justify-content-md-center">
        <div class="col-sm-auto">
          <img src="./photos/Photo Hubert.jpg" class="rounded-pill" alt="Hubert" />
        </div>
        <div class="col justify-content-center align-item-center">
          <h2>Hubert Bo<span class="color1">nniseur De</span><span class="color2">La Bath</span></h2>
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
                <td>Formation Developpeur web et appli</td>
                <td>Le campus Numérique</td>
                <td>2021</td>
              </tr>
              <tr>
                <td>Diplome d’agent secret</td>
                <td>Upmf</td>
                <td>1962</td>
              </tr>
              <tr>
                <td>Bac Scientifique</td>
                <td>Lycée aimé césaire</td>
                <td>1938</td>
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
                <td>CIA</td>
                <td>Spécialiste cyber-sécurité</td>
                <td>2012-2019</td>
              </tr>
              <tr>
                <td>SIDI poulet.corp</td>
                <td>Directeur</td>
                <td>1984-2012</td>
              </tr>
              <tr>
                <td>DGSE</td>
                <td>Agent secret</td>
                <td>1962-1984</td>
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
          <li>Se battre</li>
          <li>Se beurer la biscotte</li>
          <li>Rene Cotty</li>
        </div>
        <div class="col-lg-4 col-md-0 col offset-lg-4 offset-md-2 gy-5">
          <h1><u>Competences</u></h1>
          <ol>
            <li>Developpement web</li>
            <li>Tir a l'arme a feu</li>
            <li>Elevage de poulet</li>
          </ol>

        </div>
      </div>
    </div>

    <!-- fin liste -->



  </main>

@endsection
