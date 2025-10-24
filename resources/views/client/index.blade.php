<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Glory Beauty Center (Institut de beauté)</title>
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
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="container-fluid py-5 hero-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5 mt-2">
                <div class="col-lg-10 col-md-12">
                    <h1 class="mb-3 mt-5" style="color: #ffffff; font-weight: semi-bold;">Vous aimez la pâtisserie et la cuisine ?</h1>
                    <h1 class="mb-5 display-1 text-white"> Notre école est un centre de référence !</h1>
                    <a href="#contact" class="btn btn-primary py-3 px-md-5 me-4 btn-border-radius">Inscription</a>
                    <a href="#programs" class="btn btn-outline-primary py-3 px-md-5 btn-border-radius">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

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
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Ateliers Pratiques Quotidiens</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Chefs formateurs expérimentés</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-secondary"></i>Cuisine moderne et bien équipée</h6>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Sorties pédagogiques</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Stages en Entreprise</h6>
                            <h6><i class="fas fa-check-circle me-2 text-secondary"></i>Ambiance Conviviale et Créative</h6>
                        </div>
                    </div>
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


    <!-- Service Start -->
    <div class="container-fluid testimonial py-5" style="background: linear-gradient(rgba(255, 72, 128, 0.05), rgba(255, 72, 128, 0.2))" id="services">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Services</h4>
                <h1 class="mb-5 display-3">Les services que nous offrons</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.3s">


                <div class="testimonial-item img-border-radius bg-white border border-primary p-4">
                    <div class="p-4 position-relative">
                        <i class=" fa-2x text-primary position-absolute" style="top: 15px; right: 15px;"></i>
                        <div class=" align-items-center">
                            <div class="">
                                <div class="p-4"><i class="fas fa-utensils fa-2x text-primary"></i></div>
                            </div>
                            <div class="ms-4">
                                <h4 class="text-dark">Cuisine professionnelle</h4>

                            </div>
                        </div>
                        <div class="border-top border-primary mt-4 pt-3">
                            <p class="mb-0">Techniques de cuisine brassière, libanaise, italienne, indienne, chinoise, fast-food, et bien d'autres.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item img-border-radius bg-white border border-primary p-4">
                    <div class="p-4 position-relative">
                        <i class=" fa-2x text-primary position-absolute" style="top: 15px; right: 15px;"></i>
                        <div class=" align-items-center">
                            <div class="">
                                <div class="p-4"><i class="fas fa-birthday-cake fa-2x text-primary"></i></div>
                            </div>
                            <div class="ms-4">
                                <h4 class="text-dark">Pâtisserie</h4>

                            </div>
                        </div>
                        <div class="border-top border-primary mt-4 pt-3">
                            <p class="mb-0">Formation approfondie dans toutes ses spécialités
                            </p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item img-border-radius bg-white border border-primary p-4">
                    <div class="p-4 position-relative">
                        <i class=" fa-2x text-primary position-absolute" style="top: 15px; right: 15px;"></i>
                        <div class=" align-items-center">
                            <div class="">
                                <div class="p-4"><i class="fas fa-concierge-bell fa-2x text-primary"></i></div>
                            </div>
                            <div class="ms-4">
                                <h4 class="text-dark">Service Bar et Hôtellerie</h4>

                            </div>
                        </div>
                        <div class="border-top border-primary mt-4 pt-3">
                            <p class="mb-0">Axée sur les métiers de l’accueil et de la restauration.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item img-border-radius bg-white border border-primary p-4">
                    <div class="p-4 position-relative">
                        <i class=" fa-2x text-primary position-absolute" style="top: 15px; right: 15px;"></i>
                        <div class=" align-items-center">
                            <div class="">
                                <div class="p-4"><i class="fas fa-briefcase fa-2x text-primary"></i></div>
                            </div>
                            <div class="ms-4">
                                <h4 class="text-dark">Leadership entrepreneurial</h4>

                            </div>
                        </div>
                        <div class="border-top border-primary mt-4 pt-3">
                            <p class="mb-0">Développement des compétences en gestion et création d’entreprise.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item img-border-radius bg-white border border-primary p-4">
                    <div class="p-4 position-relative">
                        <i class=" fa-2x text-primary position-absolute" style="top: 15px; right: 15px;"></i>
                        <div class=" align-items-center">
                            <div class="">
                                <div class="p-4"><i class="fas fa-language fa-2x text-primary"></i></div>
                            </div>
                            <div class="ms-4">
                                <h4 class="text-dark">Anglais gastronomique</h4>

                            </div>
                        </div>
                        <div class="border-top border-primary mt-4 pt-3">
                            <p class="mb-0">Apprentissage des termes techniques pour s’aligner sur les standards internationaux.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Team Start-->
    <div class="container-fluid team py-5" id="team">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Nos experts formateurs</h4>
                <h1 class="mb-5 display-3">Le Club des Super Chefs</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item border border-primary img-border-radius overflow-hidden">
                        <img src="img/chef1.jpg" class="img-fluid w-100" alt="">
                        <div class="team-icon d-flex align-items-center justify-content-center">
                            <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="team-content text-center py-3">
                            <h4 class="text-primary">Ginnette ViGNON</h4>
                            <p class="text-muted mb-2">Cheffe Pâtissière</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="team-item border border-primary img-border-radius overflow-hidden">
                        <img src="img/chef2.jpg" class="img-fluid w-100" alt="">
                        <div class="team-icon d-flex align-items-center justify-content-center">
                            <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="team-content text-center py-3">
                            <h4 class="text-primary">Karlos BALLO</h4>
                            <p class="text-muted mb-2">Chef Cusinier</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="team-item border border-primary img-border-radius overflow-hidden">
                        <img src="img/chef3.jpg" class="img-fluid w-100" alt="">
                        <div class="team-icon d-flex align-items-center justify-content-center">
                            <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="team-content text-center py-3">
                            <h4 class="text-primary">Orphée DOVONON</h4>
                            <p class="text-muted mb-2">Cheffe Cusinière</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="team-item border border-primary img-border-radius overflow-hidden">
                        <img src="img/chef4.jpg" class="img-fluid w-100" alt="">
                        <div class="team-icon d-flex align-items-center justify-content-center">
                            <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="team-content text-center py-3">
                            <h4 class="text-primary">Patric AKAKPO</h4>
                            <p class="text-muted mb-2">Chef Pâtissier</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End-->

    <!-- Programs Start -->
    <div class="container-fluid program  py-5" id="programs">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Nos Programmes</h4>
                <h1 class="mb-5 display-3">Catalogue des formations disponibles</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="program-item rounded">
                        <div class="program-img position-relative">
                            <div class="overflow-hidden img-border-radius">
                                <img src="img/form1.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="px-8 py-2 bg-primary text-white program-rate">200.000 fcfa</div>
                        </div>
                        <div class="program-text bg-white px-4 pb-3">
                            <div class="program-text-inner">
                                <a href="#" class="h4">Formations longue durée</a>
                                <p class="mt-3 mb-0">Des parcours professionnels complets, structurés sur 1, 2 ou 3 ans, pour une maîtrise progressive des métiers de la cuisine.</p>
                            </div>
                        </div>
                        <div class="program-teacher d-flex align-items-center border-top border-primary bg-white px-4 py-3">
                            <img src="img/logo.jpg" class="img-fluid rounded-circle p-2 border border-primary bg-white" alt="Image" style="width: 70px; height: 70px;">
                            <div class="ms-3">
                                <h6 class="mb-0 text-primary">ENC Bénin</h6>
                                <small>Ecole Nationnale de Cuisine</small>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between px-4 py-2 bg-primary rounded-bottom">
                            <small class="text-white"><i class="fas fa-wheelchair me-1"></i> Présentiel</small>
                            <small class="text-white"><i class="fas fa-book me-1"></i> 11 Modules</small>
                            <small class="text-white"><i class="fas fa-clock me-1"></i> 3 ans</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="program-item rounded">
                        <div class="program-img position-relative">
                            <div class="overflow-hidden img-border-radius">
                                <img src="img/form2.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="px-8 py-2 bg-primary text-white program-rate">90.000 fcfa</div>
                        </div>
                        <div class="program-text bg-white px-4 pb-3">
                            <div class="program-text-inner">
                                <a href="#" class="h4">Formations courte durée</a>
                                <p class="mt-3 mb-0"> Des sessions intensives de 1, 2 ou 3 mois, conçues pour acquérir des compétences pratiques et favoriser une insertion professionnelle rapide.</p>
                            </div>
                        </div>
                        <div class="program-teacher d-flex align-items-center border-top border-primary bg-white px-4 py-3">
                            <img src="img/logo.jpg" class="img-fluid rounded-circle p-2 border border-primary bg-white" alt="Image" style="width: 70px; height: 70px;">
                            <div class="ms-3">
                                <h6 class="mb-0 text-primary">ENC Bénin</h6>
                                <small>Ecole Nationnale de Cuisine</small>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between px-4 py-2 bg-primary rounded-bottom">
                            <small class="text-white"><i class="fas fa-wheelchair me-1"></i> Présentiel</small>
                            <small class="text-white"><i class="fas fa-book me-1"></i> 8 Modules</small>
                            <small class="text-white"><i class="fas fa-clock me-1"></i> 3 mois</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="program-item rounded">
                        <div class="program-img position-relative">
                            <div class="overflow-hidden img-border-radius">
                                <img src="img/form3.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="px-8 py-2 bg-primary text-white program-rate">50.000 fcfa</div>
                        </div>
                        <div class="program-text bg-white px-4 pb-3">
                            <div class="program-text-inner">
                                <a href="#" class="h4">Ateliers trimestriels pour professionnels</a>
                                <p class="mt-3 mb-0">Des formations pratiques de 2 à 3 jours, idéales pour les professionnels souhaitant se perfectionner ou acquérir de nouvelles compétences.</p>
                            </div>
                        </div>
                        <div class="program-teacher d-flex align-items-center border-top border-primary bg-white px-4 py-3">
                            <img src="img/logo.jpg" class="img-fluid rounded-circle p-2 border border-primary bg-white" alt="Image" style="width: 70px; height: 70px;">
                            <div class="ms-3">
                                <h6 class="mb-0 text-primary">ENC Bénin</h6>
                                <small>Ecole Nationnale de Cuisine</small>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between px-4 py-2 bg-primary rounded-bottom">
                            <small class="text-white"><i class="fas fa-wheelchair me-1"></i> Présentiel</small>
                            <small class="text-white"><i class="fas fa-book me-1"></i> 5 Modules</small>
                            <small class="text-white"><i class="fas fa-clock me-1"></i> 3 jour</small>
                        </div>
                    </div>
                </div>

                <div class="d-inline-block text-center wow fadeIn" data-wow-delay="0.1s">
                    <a href="https://wa.me/2290164374858" class="btn btn-primary px-5 py-3 text-white btn-border-radius">Autres propositions</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Program End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5" id="contact">
        <div class="container py-5">
            <div class="p-5 bg-light rounded">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Contactez nous</h4>
                    <h1 class="display-3">Laissez un message</h1>
                    <p class="mb-5">Pour les inscriptions ou toutes autres informations, remplissez le formulaire ci-dessous ou rejoignez-nous sur <a href="https://wa.me/2290164374858">WhatsApp Maintenant</a>.</p>
                </div>
                <div class="row g-5 mb-5">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="w-100 border border-primary p-4 rounded bg-white">
                            <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                            <div class="">
                                <h4>Adresse</h4>
                                <p class="mb-2">Bénin, Cotonou Agontikon en face de l'université PIGIE.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class=" w-100 border border-primary p-4 rounded bg-white">
                            <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                            <div class="">
                                <h4>Email</h4>
                                <p class="mb-2">infoplus@enc.com</p><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class=" w-100 border border-primary p-4 rounded bg-white">
                            <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                            <div class="">
                                <h4>Téléphone</h4>
                                <p class="mb-2">Tel: (+229) 0164374858</p><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                        <form action="https://formspree.io/f/manjpzdn" method="POST">
                            <input type="text" class="w-100 form-control py-3 mb-5 border-primary" name="Nom" placeholder="Votre Nom et Prénoms">
                            <input type="email" class="w-100 form-control py-3 mb-5 border-primary" name="Email" placeholder="Votre Email">
                            <textarea class="w-100 form-control mb-5 border-primary" rows="8" cols="10" name="Message" placeholder="Votre Message"></textarea>
                            <button class="w-100 btn btn-primary form-control py-3 border-primary text-white bg-primary" type="submit">Envoyer</button>
                        </form>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="border border-primary h-100 rounded">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.2851983594569!2d2.4024478695899694!3d6.375819132411038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102355bf2c355c85%3A0x2c20fc4c24985e05!2sPIGIER%20BENIN!5e0!3m2!1sfr!2sbj!4v1750755571698!5m2!1sfr!2sbj"
                                class="w-100 h-100 rounded" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    @include('client.partial.footer-sction')
    <!-- Footer End -->


    @include("client.partial.footer")


    <!-- Back to Top -->
    <a href="#" id="backToTop" data-wow-delay="0.1s"class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    <script>
        const backToTop = document.getElementById('backToTop');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTop.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-4');
                backToTop.classList.add('opacity-100', 'pointer-events-auto', 'translate-y-0');
            } else {
                backToTop.classList.add('opacity-0', 'pointer-events-none', 'translate-y-4');
                backToTop.classList.remove('opacity-100', 'pointer-events-auto', 'translate-y-0');
            }
        });

        backToTop.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
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

    <script>
        // Quand le modal s'ouvre
        $('#videoModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var videoSrc = button.data("src")
            $("#video").attr('src', videoSrc + "?autoplay=1")
        })

        // Quand le modal se ferme
        $('#videoModal').on('hide.bs.modal', function(event) {
            $("#video").attr('src', "")
        })
    </script>


</body>

</html>