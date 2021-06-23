@extends('layout')
@section('contenu')
    <!--titre-->
    <div class="d-flex  align-items-center flex-column flex-wrap"> <h1>CONTACT</h1></div>
    <!--adresse-->
    <div class="container">
      <div class="row row-cols-2">
        <div class="col align-self-start">
          <h2>Noé Brasserie</h2>
      <img src="photos/logo.jpg" alt="logo" style="width: 50px; height: 50px; border-radius: 50%;">
<h3>69 rue du houblon <br>38000 Grenoble</h3>

        </div>
        <!--formulaire-->
        <div   class="col ">
          <form  id="questionnaire" action="https://httpbin.org/get" method="get" class=>
            <div class="form-group">
              <label for="formulairenput1">Adresse email</label>
              <input
                type="email"
                class="form-control"
                id="formulairenput1"
                placeholder="nom@mail.com" required
              />
            </div>
            <div class="form-group">
              <label for="formulaireSelect1">Sujet</label>
              <select class="form-control" id="formulaireSelect1">
                <option>Question sur la brasserie Noé</option>
                <option>Questions sur les produits</option>
                <option>Questions sur la livraison</option>
                <option>Questions sur l'équipe</option>
                <option>Remarques sur le site</option>
              </select>
            </div>
            <div class="form-group">
              <label for="formulaireTextarea1">Texte</label>
              <textarea
                class="form-control"
                id="formulaireTextarea1"
                rows="3"
              ></textarea>
            </div>
            <button id="bouton" type="submit" class="btn btn-warning mb-2">Envoyer</button>
          </form>
        </div>
         <!--resaux sociaux-->
        <div  id="resaux" class="col-10 align-self-end">
          <h4>Restons en contact</h4>
          <img src="photos/mail.jpg" alt="mail" style="width: 50px; height: 50px; border-radius: 50%">
          <img src="photos/facebook.jpg" alt="facebook" style="width: 50px; height: 50px; border-radius: 50%;">
          <img src="photos/instagram.jpg" alt="instagram" style="width: 50px; height: 50px; border-radius: 50%;">
          <img src="photos/twitter.jpg" alt="twitter" style="width: 50px; height: 50px; border-radius: 50%;">
        </div>
      </div>
    </div>














    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
      integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
      crossorigin="anonymous"
    ></script>
@endsection
