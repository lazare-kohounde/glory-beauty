<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>A propos ENC (École Nationale de Cuisine)</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="formation culinaire et hôtelière au Bénin, cuisine brassière, libanaise, italienne, indienne, chinoise, fast-food, Anglais gastronomique" name="keywords">
    <meta content="École Nationale de Cuisine" name="description">

    <!-- Google Web Fonts -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700&family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        .sticky-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1050;
            /* Ajuste selon tes besoins */
        }

        body {
            /* Ajuste selon la hauteur de ton header */
        }
    </style>



</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    @include('client.partial.header')
    <div class="container-fluid border-bottom bg-light wow fadeIn " data-wow-delay="0.1s">
        <div class="container topbar bg-primary d-none d-lg-block py-2" style="border-radius: 0px 0px 20px 20px">
            <div class="d-flex justify-content-between">
                <div class="top-info ps-2">
                    <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">Bénin, Cotonou Agontikon en face de l'université PIGIE.</a></small>
                    <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">infoplus@enc.com</a></small>
                </div>
                <div class="top-link pe-2">
                    <a href="" class="btn btn-light btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-secondary"></i></a>
                    <a href="" class="btn btn-light btn-sm-square rounded-circle"><i class="fab fa-twitter text-secondary"></i></a>
                    <a href="" class="btn btn-light btn-sm-square rounded-circle"><i class="fab fa-instagram text-secondary"></i></a>
                    <a href="" class="btn btn-light btn-sm-square rounded-circle me-0"><i class="fab fa-linkedin-in text-secondary"></i></a>
                </div>
            </div>
        </div>
        <div class="container px-0 ">
            <nav class="navbar navbar-light navbar-expand-xl py-3 ">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary display-6"><span class="text-secondary">E</span><span style="background-color: #ff4880; color: #ffffff">N</span><span class="text-secondary">C</span></h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="{{ route('accueil') }}" class="nav-item nav-link {{ request()->routeIs('accueil') ? 'active' : '' }}">Accueil</a>
                        <a href="{{ route('a-propos') }}" class="nav-item nav-link {{ request()->routeIs('a-propos') ? 'active' : '' }}">A propos</a>
                        <a href="{{ route('services') }}" class="nav-item nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                        <a href="{{ route('formations') }}" class="nav-item nav-link {{ request()->routeIs('formations') ? 'active' : '' }}">Formations</a>
                        <a href="{{ route('evenement') }}" class="nav-item nav-link {{ request()->routeIs('evenement') ? 'active' : '' }}">Evénements</a>
                        <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                    </div>
                    <div class="d-flex me-4">
                        <div id="phone-tada" class="d-flex align-items-center justify-content-center">
                            <a href="" class="position-relative wow tada" data-wow-delay=".9s">
                                <i class="fa fa-phone-alt text-primary fa-2x me-4"></i>
                                <div class="position-absolute" style="top: -7px; left: 20px;">
                                    <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="d-flex flex-column pe-3 border-end border-primary">
                            <span class="text-primary">Pour toutes questions ?</span>
                            <a href="tel:+22964374858"><span class="text-secondary">Tel: +229 64374858</span></a>
                        </div>
                    </div>
                    <button class="btn-search btn btn-primary btn-md-square rounded-circle" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-white"></i></button>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Réchercher</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="Mots clés" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4">A propos de nous</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a style="color: #000000" href="{{ route('accueil') }}">Accueil</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">A propos</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5 about bg-light" id="about">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="video border">
                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/LsuuAJGhoXg" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">A propos</h4>
                    <h1 class="text-dark mb-4 display-5">École Nationale de Cuisine (ENC)</h1>
                    <p class="text-dark mb-4">Fondée en 2019, l'École Nationale de Cuisine (ENC) s'est imposée comme une référence incontournable en matière de formation culinaire et hôtelière au Bénin. Son siège social est stratégiquement situé à Cotonou, dans le quartier d'Agontinkon, facilitant l'accès à ses services de formation.
                        <br> L'ENC s'étend à travers le pays avec des annexes situées dans les grandes villes de Cotonou, Calavi, Porto-Novo et Parakou. Cette présence régionale permet à l'institution d’offrir une formation de proximité à une large population d’apprenants et de professionnels.
                        <br> Afin de répondre à une diversité de besoins et de profils, l'ENC propose plusieurs formats de formation.
                    </p>

                    <a href="" class="btn btn-primary px-5 py-3 btn-border-radius">Inscription</a>

                </div>
            </div>
            <br>
            <h1 class="text-dark mb-4 display-5">Spécialisations</h1>

            Cuisine brassière, cuisine libanaise, cuisine italienne, cuisine indienne, cuisine chinoise, pâtisserie, service bar, hôtellerie, leadership entrepreneurial, anglais gastronomique, formation longue durée, formation courte durée et ateliers pour professionnels
        </div>

    </div>
    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Footer Start -->
    @include('client.partial.footer-sction')
    <!-- Footer End -->


    <!-- Copyright Start -->
    @include('client.partial.footer')
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Libraries JavaScript -->
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template JavaScript -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>