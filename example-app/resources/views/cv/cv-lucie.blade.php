@extends('layout')
@section('contenu')
  <!-- fin nav bar -->

  <main>

  <!-- debut presentation cv -->

  <div id="lucie" class="container">
    <div class="row justify-content-md-center">
      <div class="col-sm-auto">
        <img src="./photos/Photo Lucie.jpg" class="rounded-pill" alt="Lucie" />
      </div>
      <div class="col justify-content-center align-item-center">
        <h2>LUCIE</h2>
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
              <td> Formation Developpeur web et appli</td>
              <td>Le campus Numérique</td>
              <td>2021</td>
            </tr>
            <tr>
              <td>Doctorat chimie</td>
              <td>UCBL Lyon 1</td>
              <td>2018</td>
            </tr>
            <tr>
              <td>Master science des matériaux</td>
              <td>UCBL Lyon 1</td>
              <td>2014</td>
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
              <td>C2P2/CPE Lyon</td>
              <td>Doctorante en polymérisation</td>
              <td>2014-2018</td>
            </tr>
            <tr>
              <td>IMP@Lyon</td>
              <td>Stagiaire M2</td>
              <td>2014</td>
            </tr>
            <tr>
              <td>CEA Grenoble</td>
              <td>Stagiaire M1</td>
              <td>2013</td>
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
        <li>Randonée et trek</li>
        <li>Jeu de plateau</li>
        <li>Musique</li>
      </div>
      <div class="col-lg-4 col-md-0 col offset-lg-4 offset-md-2 gy-5">
        <h1><u>Competences</u></h1>
        <ol>
          <li>Développement WebApp</li>
          <li>Chimie des matériaux</li>
          <li>Brassage</li>
          <li>Juge de mousse</li>
        </ol>

      </div>
    </div>
  </div>

  <!-- fin liste -->

  </main>
@endsection
