@extends('layout')
@section('contenu')
    <!-- Container-bière -->
    <div class="container-fluid">
      <h1 class="titre-biere">La Grizzly</h1>
      <div class="row" id="biere">

    <!-- Col1-image-bière -->
        <div class="col-12 col-lg-4 d-flex justify-content-center" id="col1">
          <img
            class="photo-bieres"
            src="photos/photo-grizzly.png"
            alt="photo-rakoon"
          />
        </div>

    <!-- Col2-description-bière -->
        <div class="col-12 col-lg-8" id="col2">
          <span class="description">
            <p>
              Une attaque caramel, épicée et légèrement houblonnée au nez. La
              levure typiquement belge est, bien entendu, de la partie. La
              bouche est assez ronde avec des arômes maltés et une amertume
              moyenne. Une belle longueur de bouche avec une finale assez sèche.
              Une bière bien équilibrée et relativement douce.
            </p>
          </span>
          <span class="specificites">
            <b>BIERE BRUNE | 8.5% ALC. VOL. | 40 EBC – 80 IBU</b>
          </span>

    <!-- Table-prix-bière -->
          <table class="table-prix">
            <thead>
              <tr>
                <th scope="col" class="except">La Grizzly</th>
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
                <td>5.00 €</td>
                <td>12.00 €</td>
                <td>50.0 €</td>
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
