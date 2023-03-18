<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>kong marketing - website</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/bb.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
        .modal-header {
            background: #013289;
            color: #fff;
        }
        
        .required:after {
            content: "*";
            color: red;
        }
    </style>
</head>

<body>
<?php 
    session_start();
                        
    if(isset($_SESSION['status']))
        {
            ?>
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <strong>Votre candidature a été envoyée avec succés</strong> <?= $_SESSION['status']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <?php 
                            unset($_SESSION['status']);
                     }

            ?>
      
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center">
               
                <img src="assets/img/bbb.png" alt="">
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
                    <li><a class="nav-link scrollto" href="#about">Qui sommes-nous</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#galerie">Galerie</a></li>
                    <li><a class="nav-link scrollto" href="#team">L'équipe</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="nav-link scrollto" href="#myModal"  data-bs-toggle="modal" style ="color:#bb0852">POSTULER</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->
    <div class="container mt-5">
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Postulez-vous</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                   
                    <div class="modal-body" id="formu">
                        <form method="post" action="candidat2.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label required">Nom</label>
                                <input type="text" name = "nom" id="nom" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Prénom</label>
                                <input type="text" name = "prenom" id="prenom" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Email</label>
                                <input type="mail" class="form-control" name="mail"  required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">Motivation</label>
                                 <textarea class="form-control" name="motiv" id="motiv" ></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="file" id="file" name="file"/>
                                <label for="actual-btn" class=" required" required>Importez le CV</label>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="submit" class="btn " style="background-color: #013289; color:#fff ; text-align: center">POSTULER</button> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= Hero Section ======= -->
    
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Nous offrons des solutions modernes pour l'économie d'énergie</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Nous sommes un acteur majeur dans le marché des Centres d'appel Marocains</h2>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/vv.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>Qui sommes nous</h3>
                            <h2>Kong Marketing Center est une filiale de Leadsinfinycall, acteur majeur dans le marché des Callcenter Marocain , présent sur plusieurs plateaux à Casablanca.</h2>
                            <p >
                                En partenariat avec les leaders du marché Français en Formation professionnelle et en Énergies renouvelables , notre famille s’agrandit et donne naissance au génie Marketer <span style="font-weight: bold; color: #013289"> Kong Marketing</span>.
                                <br> <span class ="mb-5" style="font-weight: bold; font-size: 30px"> <br> La créativité est notre métier,<br>la perfection est votre avenir.</span>
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="#galerie" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Savoir Plus</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/about1.jpg" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section>
        <!-- End About Section -->

        <!-- ======= Values Section ======= -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1500" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Clients satisfaits</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Projets</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-headset" style="color: #15be56;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="7500" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Heures de Support</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-people" style="color: #bb0852;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Employers acharnés</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2 >Services</h2>
                    <p>La créativité notre métier,le Perfection votre avenir</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue" id="pv">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Panneaux photovoltaiques</h3>
                            <p>L'énergie solaire photovoltaïque est une énergie électrique produite à partir du rayonnement solaire grâce à des panneaux ou des centrales solaires photovoltaïques.</p>
                            <a href="https://fr.wikipedia.org/wiki/Panneau_solaire" target="_blank" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange" id="pac">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Pompe à chaleur</h3>
                            <p>
                                Une pompe à chaleur, aussi appelée thermopompe en français canadien, est un dispositif permettant de transférer de l'énergie thermique d'un milieu à basse température vers un milieu à haute température.</p>
                            <a href="https://fr.wikipedia.org/wiki/Pompe_%C3%A0_chaleur" target="_blank" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box green" id="pg">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Poêles à granulés</h3>
                            <p>Les poêles à granulés sont conçus pour chauffer rapidement et efficacement à partir d'une énergie renouvelable, les granulés de bois (ou « pellets »).</p>
                            <a href="https://fr.wikipedia.org/wiki/Po%C3%AAle_(chauffage)" target="_blank" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-box red" id="ces">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Chauffe-eau solaire</h3>
                            <p>Un chauffe-eau solaire est un dispositif de captage de l'énergie solaire destiné à fournir partiellement ou totalement de l'eau chaude sanitaire (ECS).
                            </p>
                            <a href="https://fr.wikipedia.org/wiki/Chauffe-eau_solaire" target="_blank" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-box purple" id="vmc">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Ventillation mécanique contrôlée(Double flux)</h3>
                            <p>La ventilation mécanique contrôlée (VMC) est, dans le bâtiment, un dispositif mécanique destiné à assurer le renouvellement permanent de l'air à l'intérieur des pièce.</p>
                            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="service-box pink" id="cag">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Chaudiére à granulés</h3>
                            <p>La chaudière à granulés est une technologie utilisant les granulés de bois (ou pellets) dans un dispositif de chauffage automatique.</p>
                            <a href="http://www.corbelet.com/chaudiere_a_granules.php" target="_blank" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- End Services Section -->


        <!-- ======= galerie Section ======= -->
        <section id="galerie" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>GALERIE</h2>
                    <p>Consultez nos dernières réalisations</p>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Tous</li>
                            <li data-filter=".filter-app">Plateau</li>
                            <li data-filter=".filter-card">Direction</li>
                            <li data-filter=".filter-web">Salle formation</li>
                            <li data-filter=".filter-food">Salle à manger</li>
                        </ul>
                    </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/plateau1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Notre plateau</h4>
                                <p>Kong Marketing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/plateau1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Notre plateau"><i class="bi bi-plus"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>La Direction</h4>
                                <p>Kong Marketing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Notre plateau"><i class="bi bi-plus"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/plateau.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Notre plateau</h4>
                                <p>Kong Marketing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/plateau.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Notre plateau"><i class="bi bi-plus"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                   

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>La direction</h4>
                                <p>Kong Marketing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>La direction</h4>
                                <p>Kong Marketing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Notre plateau"><i class="bi bi-plus"></i></a>                                </div>
                            </div>
                        </div>
                    </div>
                   

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/plateau2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Notre plateau</h4>
                                <p>Kong Marketing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/plateau2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Notre plateau"><i class="bi bi-plus"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/form1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Salle de formation</h4>
                                <p>Kong Marketing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/form1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Notre plateau"><i class="bi bi-plus"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/form3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Salle de formation</h4>
                                <p>Kong Marketing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/form3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Notre plateau"><i class="bi bi-plus"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Salle de formation</h4>
                                <p>Kong Marketing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Notre plateau"><i class="bi bi-plus"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-food">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/salle3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Salle à manger</h4>
                                <p>Kong Marketing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/salle3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-food">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/salle2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Salle à manger</h4>
                                <p>Kong Marketing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/salle2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-food">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/salle1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Salle à manger</h4>
                                <p>Kong Marketing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/salle1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- End Portfolio Section -->

      <!-- ======= Testimonials Section ======= --
        <section id="testimonials" class="testimonials">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Temoignages</h2>
                    <p>Ce qu'ils disent de nous</p>
                </header>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Je vois déjà des premiers effets positifs sur ma facture et je suis convaincu que l’autoconsommation est un réel avantage pour les foyers. Chez nous, il y a pas mal d’appareils électriques : l’électroménager habituel (lave-vaisselle, machine à laver,
                                    etc) et nous sommes également équipés de chauffages électriques et d’une climatisation réversible.</p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/team/team.jpg" class="testimonial-img" alt="">
                                    <h3>Khalipha GUEYE</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                </div>
                            </div>
                        </div>
                       

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Je vois déjà des premiers effets positifs sur ma facture et je suis convaincu que l’autoconsommation est un réel avantage pour les foyers. Chez nous, il y a pas mal d’appareils électriques : l’électroménager habituel (lave-vaisselle, machine à laver,
                                    etc) et nous sommes également équipés de chauffages électriques et d’une climatisation réversible. </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/team/team.jpg" class="testimonial-img" alt="">
                                    <h3>Khalipah GUEYE</h3>
                                    <h4>Designer</h4>
                                </div>
                            </div>
                        </div>
                        

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Je vois déjà des premiers effets positifs sur ma facture et je suis convaincu que l’autoconsommation est un réel avantage pour les foyers. Chez nous, il y a pas mal d’appareils électriques : l’électroménager habituel (lave-vaisselle, machine à laver,
                                    etc) et nous sommes également équipés de chauffages électriques et d’une climatisation réversible. </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/team/team.jpg" class="testimonial-img" alt="">
                                    <h3>Khalipha GUEYE</h3>
                                    <h4>Store Owner</h4>
                                </div>
                            </div>
                        </div>
                       

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Je vois déjà des premiers effets positifs sur ma facture et je suis convaincu que l’autoconsommation est un réel avantage pour les foyers. Chez nous, il y a pas mal d’appareils électriques : l’électroménager habituel (lave-vaisselle, machine à laver,
                                    etc) et nous sommes également équipés de chauffages électriques et d’une climatisation réversible. </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/team/team.jpg" class="testimonial-img" alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                </div>
                            </div>
                        </div>
                       

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Je vois déjà des premiers effets positifs sur ma facture et je suis convaincu que l’autoconsommation est un réel avantage pour les foyers. Chez nous, il y a pas mal d’appareils électriques : l’électroménager habituel (lave-vaisselle, machine à laver,
                                    etc) et nous sommes également équipés de chauffages électriques et d’une climatisation réversible. </p>

                                <div class="profile mt-auto">
                                    <img src="assets/img/team/team.jpg" class="testimonial-img" alt="">
                                    <h3>Khalipha GUEYE</h3>
                                    <h4>Entrepreneur</h4>
                                </div>
                            </div>
                        </div>
                       

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section>
        End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Direction</h2>
                    <p>Notre équipe travaille dur</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/houda.jpg" class="img-fluid" alt="">

                            </div>
                            <div class="member-info">
                                <h4>Houda ITRO</h4>
                                <span>Directrice générale</span>
                                <p>« Le succès n'est pas final, l'échec n'est pas fatal. C'est le courage de continuer qui compte ».</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/siham.jpg" class="img-fluid" alt="">

                            </div>
                            <div class="member-info">
                                <h4>Siham JASSIMI</h4>
                                <span>Responsable administrative et financiére</span>
                                <p>« La seule limite à notre épanouissement de demain sera nos doutes d'aujourd'hui. »</p>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/faycal.jpg" class="img-fluid" alt="">

                            </div>
                            <div class="member-info">
                                <h4>Fadil FAYÇAL</h4>
                                <span>Formateur</span>
                                <p>Un voyage des milliers de kilomètres commence par un seul pas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/khaf.jpg" class="img-fluid" alt="">

                            </div>
                            <div class="member-info">
                                <h4>Khalipha GUEYE</h4>
                                <span>Developpeur Web</span>
                                <p>« J'ai appris il y a longtemps qu'il y a quelque chose de pire que de rater l'objectif : ne pas passer à l'action. »</p>
                            </div>
                        </div>
                    </div>

                  


                </div>
                <br><br>
                <div class="row gy-4">
                <header class="section-header">
                    <h2>Le Secrétariat</h2>
                   
                </header>   
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/zineb.jpg" class="img-fluid" alt="">

                            </div>
                            <div class="member-info">
                                <h4>Zineb ATTAR</h4>
                                <span>Responsable Service Secrétariat</span>
                                <p>« Un jour, tu te réveilleras et tu n'auras plus le temps de faire ce que tu voulais faire. Fais-le donc maintenant. »</p>
                            </div>
                        </div>
                    </div>
         <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                                    <div class="member-img">
                                        <img src="assets/img/team/wijdane.jpg" class="img-fluid" alt="">

                                    </div>

                
                <div class="member-info">
            <h4>Wijdane SAADI</h4>
            <span>Secrétaire Confirmatrice</span>
            <p>« Prends le temps de réfléchir, mais lorsque c'est le moment de passer à l'action, cesse de penser et vas-y. »</p>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
    <div class="member">
        <div class="member-img">
            <img src="assets/img/team/sofia.jpg" class="img-fluid" alt="">

        </div>
        <div class="member-info">
            <h4>Sofia KHOUCHAF</h4>
            <span>Secrétaire Confirmatrice</span>
            <p>« Le succès, c'est vous aimer vous-même, c'est aimer ce que vous faites et c'est aimer comment vous le faites. »</p>
        </div>
    </div>
</div>



<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
    <div class="member">
        <div class="member-img">
            <img src="assets/img/team/mehdi.jpg" class="img-fluid" alt="">

        </div>
        <div class="member-info">
            <h4>Mehdi NASSIR</h4>
            <span>Secretaire/Confirmateur</span>
            <p>« Il y a au fond de vous de multiples petites étincelles de potentialités ; elles ne demandent qu'un souffle pour s'enflammer en de magnifiques réussites. »</p>
        </div>
    </div>
</div>

</div>

            </div>

        </section>
        <!-- End Team Section -->
        <!--
         ======= Clients Section ======= 
        <section id="clients" class="clients">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Nos Partenaires</h2>
                    <p>On travaille avec plusieurs partenaires </p>
                </header>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
         End Clients Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Contact</h2>
                    <p>Contactez Nous</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-7">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Addresse</h3>
                                    <p>54 Rue Jean Jaures, Quartier Gauthier, Casablanca</p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Appelez-nous </h3>
                                    <p>+212 712-164553<br>+212 712-164553</p>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email </h3> <br>
                                    <p>recrutement.kongmarketing@gmail.com</p>
                                    <p>recrutement.leadsinfiny@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>

                                    <h3>Heures d'ouverture</h3>
                                    <p>Lundi - Vendredi<br>9:00AM - 19:00PM</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php
    
                    if(isset($_SESSION['status']))
                        {
                            ?>
                            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                                <strong>Votre candidature a été envoyée avec succés</strong> <?= $_SESSION['status']; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <?php 
                                            unset($_SESSION['status']);
                                    }

                            ?>  
                    <div class="col-lg-6">
                    <form method="post" action="candidat1.php">
                        <div class="form-group">
                            <label for="nom">Nom:</label>
                            <input type="text" class="form-control" id="nom" name = "nom">
                        </div>
                        <div class="form-group">
                        <label for="prenom">Prenom:</label>
                            <input type="text" class="form-control" id="prenom" name = "prenom">
                        </div>
                        <div class="form-group">
                        <label for="mail">Email:</label>
                            <input type="email" class="form-control" id="mail" name = "mail">
                        </div>
                        <div class="form-group">
                        <label for="motivation">Message:</label>
                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                        </div>
    </br>               <button type="submit" name = "submit" class="btn " style="background-color: #013289; color:#fff">Envoyer</button> <br>
                    </form>
        <!-- End Contact Section
        <section class="fb">
        <div class="fb-page" data-href="https://www.facebook.com/kongmarketingofficiel/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/kongmarketingofficiel/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/kongmarketingofficiel/">Kong Marketing</a></blockquote></div>
        </section>  -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="assets/img/bbb.png" alt="">
                            <span>Kong Marketing</span>
                        </a>
                        <p>Kong Marketing Center est une filiale de Leadsinfinycall, acteur majeur dans le marché des Callcenter Marocain , présents sur plusieurs plateaux à Casablanca.</p>
                        <div class="social-links mt-3">

                            <a href="https://www.facebook.com/kongmarketingofficiel" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/kongmarketingcall" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/kong-marketing5" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Liens utiles</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="index.php">Accueil</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#about">Qui sommes-nous</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#service">Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#galerie">Galerie</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#equipe">Equipe</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Nos Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#pv">Installation PV</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#vmc">Changement VMC</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#pac">Installation de PAC</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#pag">Poiles à granulés</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#ces">Chauffe-eau solaire</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#cag">Chaudiére à granulés</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contactez Nous</h4>
                        <p>
                            54 Rue Jean Jaures <br> Quartier Guatier, <br>Casablanca,<br> Maroc <br>
                            <strong>Téléphone:</strong> +212 712-164553<br>
                            <strong>Email:</strong>recrutement.kongmarketing@gmail.com<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Kong Marketing</span></strong>. Tous les droits sont réservés
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                Développé par <a href="https://khaliphagueye.github.io/Portfolio/" target="_blank">khalipha Gueye</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v13.0&appId=259679695116957&autoLogAppEvents=1" nonce="yroCaHGT"></script>
</body>

</html>