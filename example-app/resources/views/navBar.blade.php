<!-- nav bar -->

<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand">
        <img src="photos/photo-logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="logo" />
        Noé Brasserie</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">Accueil</a>
            </li>

            <!-- Dropdown-menu-bière -->
            <li class="nav-item dropdown">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdown-menu-btn1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        Nos bières
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item" href="catalogue">Catalogue</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/product/5">La Biquette</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/product/7">La Lion</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/product/8">La Rakoon</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/product/6">La Grizzly</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Dropdown-menu-équipe -->
            <li class="nav-item dropdown">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdown-menu-btn2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        Équipe
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item" href="membres">Membres</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="cv.cv-hubert">Hubert</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="cv-aurel">Aurélien</a>
                        </li>
                        <li><a class="dropdown-item" href="cv-lucie">Lucie</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="cv-hercule">Hercule</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact">Contact</a>
            </li>
        </ul>


        <a href="{{route('product.index')}}" > Cliquez  </a>


        <!-- Boutton-panier -->
        <form class="form-inline my-3 my-lg-0" id="panier">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btn-panier">
                Panier
            </button>
        </form>
    </div>
</nav>
