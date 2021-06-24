@extends('layout')
@section('contenu')
  <!-- carrousel -->
  <div class="container-md">
    <div class="row">
      <div class="col-lg-4 sm-12 text">
        <p>
          Envie d'une bonne bière brassée selon les anciennes traditions
          remontant à l'époque lointaine du déluge? <br />
          N'hésitez plus et faites votre choix parmis notre collection !
        </p>
      </div>

      <div class="col-lg-4 sm-12">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
              aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="biquette.html"><img src="photos/photo-biquette.png" class="d-block w-100" alt="..." /></a>
              <div class="carousel-caption d-none d-md-block">
                <h5>La Biquette</h5>
                <div id="biquette">
                  <p>Bière blanche</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <a href="bières/lion.blade.php"><img src="photos/photo-lion.png" class="d-block w-100" alt="..." /></a>
              <div class="carousel-caption d-none d-md-block">
                <h5>La Lion</h5>
                <div id="lion">
                  <p>Bière blonde</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <a href="bières/rakoon.blade.php"><img src="photos/photo-rakoon.png" class="d-block w-100" alt="..." /></a>
              <div class="carousel-caption d-none d-md-block">
                <h5>La Rakoon</h5>
                <div id="rakoon">
                  <p>Bière IPA</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <a href="bières/grizzly.blade.php"><img src="photos/photo-grizzly.png" class="d-block w-100" alt="..." /></a>
              <div class="carousel-caption d-none d-md-block">
                <h5>La Grizzly</h5>
                <div id="grizzly">
                  <p>Bière brune</p>
                </div>
              </div>
            </div>
          </div>
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
          Que ce soit de la brune de caractère ou alors une douce blanche nous
          somme sur que vous trouverez votre bonheur choissisez celle-qui vous
          plaira et bonne dégustation!!
        </p>
      </div>
    </div>

    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
      integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
      crossorigin="anonymous"></script>
@endsection
