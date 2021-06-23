@extends('layout')
@section('contenu')
    <!-- Container-bière -->
    <div class="container-fluid">
      <h1 class="titre-biere">La Lion</h1>
      <div class="row" id="biere">

    <!-- Col1-image-bière -->
        <div class="col-12 col-lg-4 d-flex justify-content-center" id="col1">
          <img
            class="photo-bieres"
            src="photos/photo-lion.png"
            alt="photo-lion"
          />
        </div>

    <!-- Col2-description-bière -->
        <div class="col-12 col-lg-8" id="col2">
          <span class="description">
            <p>
              La Lion a été brassée à partir d’ingrédients absolument français
              et elle révèle quelques surprises qui lui offre un petit goût de…
              mandarine. La Lion LBF, peu forte, dévale les contours de votre
              palais en y laissant des notes d’agrumes.
            </p>
          </span>
          <span class="specificites">
            <b>BIERE BLONDE | 5.5% ALC. VOL. | 15 EBC – 20 IBU</b>
          </span>

    <!-- Table-prix-bière -->
          <table class="table-prix">
            <thead>
              <tr>
                <th scope="col" class="except">La Lion</th>
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
                <td>3.00 €</td>
                <td>8.00 €</td>
                <td>37.5 €</td>
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
