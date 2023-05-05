<!DOCTYPE html>
<html>

<head>
    <title>Tp1</title>
    <!-- Chargement des fichiers CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <!-- Chargement des fichiers JavaScript de Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512"></script>

</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Header de la navbar -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/tp_home">S A B Y O U D</a>
            </div>

            <!-- Contenu de la navbar -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav active">
                    <li><a href="/tp_home">Accueil</a></li>
                    <li><a href="/RegisterP">Login</a></li>
                    <li><a href="/tp_Registrement">Sing up</a></li>
                    <li><a href="/select1">À propos</a></li>
                    {{-- href="/conR3" --}}
                    <li><a href="/contactR2">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Bienvenue sur mon site</h1>
        <p>Le contenu de la page va ici.</p>
    </div>

    <body>

        {{-- <div class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="animate__animated animate__fadeInLeft">Bienvenue chez Location de voitures</h1>
                        <p class="animate__animated animate__fadeInLeft">Nous sommes spécialisés dans la location de
                            voitures de qualité à des prix abordables.</p>
                        <a href="#" class="btn btn-primary animate__animated animate__fadeInLeft">En savoir
                            plus</a>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- la page de formulaire --}}

        {{-- @yield('registrement') -------------- --}}
        <div class="container mt-5">
            @yield('registrement')
        </div>

        {{-- la page affichage --------------- --}}
        <div class="container mt-5">
            @yield('affiche')
        </div>

        {{-- la page Contact --------------- --}}

        <div class="container mt-5">
            @yield('contact')
        </div>

        {{-- la page de registrement numero  deux  --}}
        <div class="container mt-5">
            @yield('registre2t')
        </div>
        {{-- --------------------------- --}}
        <div class="container mt-5">
            @yield('contactR')
        </div>

        <div class="container mt-5">
            @yield('modifierr')
        </div>
        {{-- modifierr --}}
        {{-- modifie le  --}}
        {{-- confiremerSupprission --}}

        <div class="container mt-5">
            @yield('confiremerSupprission')
        </div>

        <div>
            @yield("confiremerSupprission1")
        </div>

        <div class="container mt-5">
            @yield('adimnP')
        </div>

        {{-- fin  de la page  --}}
        <footer class="footer bg-dark mt-3">
            <div class="container">
                <p class="text-muted text-center">&copy; 2023 - Mon entreprise</p>
            </div>
        </footer>
    </body>

</html>
