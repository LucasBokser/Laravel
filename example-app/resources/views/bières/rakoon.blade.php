@extends('layout')
@section('contenu')
    <!-- Container-bière -->
    <div class="container-fluid">
      <h1 class="titre-biere">La Rakoon</h1>
      <div class="row" id="biere">

    <!-- Col1-image-bière -->
        <div class="col-12 col-lg-4 d-flex justify-content-center" id="col1">
          <img
            class="photo-bieres"
            src="photos/photo-rakoon.png"
            alt="photo-rakoon"
            id="photo-rakoon"
          />
        </div>

    <!-- Col2-description-bière -->
        <div class="col-12 col-lg-8" id="col2">
          <span class="description">
            <p>
              Bière I.P.A avec une touche d’amertune. Des arômes d’agrumes et
              beaucoup de houblons , car comme on dit chez nous: tout est bon
              dans le houblon.
            </p>
          </span>
          <span class="specificites">
            <b>BIERE IPA | 6.5% ALC. VOL. | 20 EBC – 40 IBU</b>
          </span>

    <!-- Table-prix-bière -->
          <table class="table-prix">
            <thead>
              <tr>
                <th scope="col" class="except">La Rakoon</th>
                <th scope="col">
                  Bouteille <br />
                  (33 cL)
                </th>
                <th scope="col">
                  Bouteille <br />
                  (75 cL)
                </th>
                <th scope="col">
                  PerfectDraft <br />
                  (6L)
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="except">Prix</th>
                <td>3.50 €</td>
                <td>9.00 €</td>
                <td>40.0 €</td>
              </tr>
              <tr>
                <th scope="row" class="except">Quantité</th>
                <td>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Choisir"
                  />
                </td>
                <td>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Choisir"
                  />
                </td>
                <td>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Choisir"
                  />
                </td>
              </tr>
              <tr>
                <th scope="row" class="except">Montant total</th>
                <td><input
                  type="text"
                  class="form-control"
                  placeholder="Afficher"
                />
                </td>
                <td><input
                  type="text"
                  class="form-control"
                  placeholder="Afficher"
                />
                </td>
                <td><input
                  type="text"
                  class="form-control"
                  placeholder="Afficher"
                />
              </td>
              </tr>
              <tr>
                <th scope="row" class="except"></th>
                <td>
                  <button type="submit" class="btn btn-outline-dark">Ajouter au panier</button>
                </td>
                <td>
                  <button type="submit" class="btn btn-outline-dark">Ajouter au panier</button>
                </td>
                <td>
                  <button type="submit" class="btn btn-outline-dark">Ajouter au panier</button>
                </td>
              </tr>
            </tbody>
          </table>

    <!-- Boutton-commander -->
          <a
            class="btn btn-dark"
            id="commander"
            href="panier.html"
            role="button"
            >Passer la commande</a
          >

    <!-- Boutton-retour-catalogue -->
          <a
            class="btn btn-dark"
            id="retour"
            href="catalogue.html"
            role="button"
            >Retour au catalogue</a
          >
        </div>
      </div>
    </div>
@endsection
