@extends('layout')
@section('contenu')
<!-- fin nav bar -->

  <main>

    <!-- debut presentation cv -->

    <div id="aurel" class="container">
      <div class="row justify-content-md-center">
        <div class="col-sm-auto">
          <img src="photos\Photo Aurélien.jpg" class="rounded-pill" alt="Aurelien" />
        </div>
        <div class="col justify-content-center align-item-center">
          <h2>Aurelien</h2>
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
                <td> 2021</td>
              </tr>
              <tr>
                <td>Licence en Droit</td>
                <td>Upmf</td>
                <td>2008</td>
              </tr>
              <tr>
                <td>Bac Scientifique</td>
                <td>Lgm</td>
                <td>2004
                </td>
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
                <td>Marie-Blachère</td>
                <td>Manager de magasin</td>
                <td>2018-2019</td>
              </tr>
              <tr>
                <td>Hyppopothamus</td>
                <td>Directeur adjoint</td>
                <td>2017-2018</td>
              </tr>
              <tr>
                <td>Lidl</td>
                <td>Responsable adjoint</td>
                <td>2015-2017</td>
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
          <li>Football</li>
          <li> Jeux-vidéo</li>
          <li>Cuisine</li>
        </div>
        <div class="col-lg-4 col-md-0 col offset-lg-4 offset-md-2 gy-5">
          <h1><u>Competences</u></h1>
          <ol>
            <li>developpement</li>
            <li>management</li>
            <li>gestion</li>
            <li> recrutement</li>
          </ol>

        </div>
      </div>
    </div>

    <!-- fin liste -->


  </main>

@endsection
