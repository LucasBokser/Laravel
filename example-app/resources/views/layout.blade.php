<!DOCTYPE html>
<html>

<head>
    <title>CV HERCULE NOE BRASSERIE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" href="Styles/style-cv.css" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
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
                <a class="nav-link" href="">Accueil</a>
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
                            <a class="dropdown-item" href="/bières/biquette">La Biquette</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="bières/lion">La Lion</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="bières/rakoon">La Rakoon</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="bières/grizzly">La Grizzly</a>
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
                            <a class="dropdown-item" href="equipe.blade.php">Membres</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="cv/cv-hubert">Hubert</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="cv-aurel">Aurélien</a>
                        </li>
                        <li><a class="dropdown-item" href="cv/cv-lucie">Lucie</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="cv/cv-hercule">Hercule</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
            </li>
        </ul>

        <!-- Boutton-panier -->
        <form class="form-inline my-3 my-lg-0" id="panier">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btn-panier">
                Panier
            </button>
        </form>
    </div>
</nav>



@yield('contenu')


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"
></script>
</body>
</html>
