<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="assets/js/bootstrap.min.js">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Spline+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Nathy's Flavors</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-white shadow py-3 sticky-top ">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img/nathy.jpg" alt="Logo" width="100px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#About">À propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#menu">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Features">Événements</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Team">Avis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Reservation">Galerie</a>
          </li>
        </ul>
        <a href="http://wa.me/22890584937" class="btn btn-brand border rounded-5">Commande</a>
      </div>
    </div>
  </nav>


  <!-- heros slide carouse -->

  <div id="heroSlider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item text-center bg-cover vh-100 active slide-1">
        <div class="container h-100 d-flex align-items-center justify-content-center">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <h6 class="text-white">BIENVENUE CHEZ NATHY'S FLAVORS</h6>
              <h1 class="display-1 fw-bold text-white">Votre satisfation notre priorité</h1>
              <a href="https://wa.me/22890584937?text=Bonjour%20Nathy's%20flavors%20j'aimerais%20commander" class="btn btn-brand rounded-5">Commander maintenant</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item  text-center bg-cover vh-100 slide-2">
        <div class="container h-100 d-flex align-items-center justify-content-center">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <h6 class="text-white">BIENVENUE CHEZ NATHY'S FLAVORS</h6>
              <h1 class="display-1 fw-bold text-white">Délices sucrés et salés</h1>
              <a href="http://wa.me/22890584937" class="btn btn-brand rounded-5">Commander maintenant</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- ============================ Fin A propos ==================== -->

  <section id="About">
    <div class="container">
      <div class="row gy-4 align-items-center">
        <div class="col-lg-5">
          <img src="img/nata.jpg" alt="" height="500px">
        </div>
        <div class="col-lg-5">
          <h1>À propos de nous</h1>
          <div class="divider my-4"></div>
          <p style="font-size: 18px; text-align: justify;"> Bienvenue chez <span style="color: orange;">Nathy's Flavors</span> ! Dirigé par <span style="color: orange;">AMONY Nathanaëlle</span>, une entrepreneure passionnée et talentueuse chef, <span style="color: orange;">Nathy's Flavors</span> est un lieu où la passion culinaire et la créativité se rencontrent.</p>
          <p style="font-size: 18px; text-align: justify;">Nous croyons en la qualité, la fraîcheur et l'innovation, tout en valorisant les talents féminins dans l'industrie culinaire. Venez nous rejoindre pour une expérience gustative inoubliable !</p>
          <a href="#menu" class="btn btn-brand rounded-5">Explorer le menu</a>
        </div>
      </div>
    </div>

  </section>

  <!-- ============================ Fin A propos ==================== -->

  <!-- ======= Pourquoi choisir nathy's Flavors ======= -->

  <div class="container">
    <div class="row">
      <div class="col-12 intro-text">
        <div class="">
          <h2 class="">Pourquoi choisir <span class="text-danger"> <em> Nathy's Flavors </em> </span></h2>
          <p>Chaque repas chez nous est une expérience à savourer pleinement, offrant une cuisine authentique et passionnée.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-lg-4 d-flex">
        <div class="card border border-2 text-center shadow-lg p-3 mb-5 bg-body-tertiary rounded card-hover">
          <span class="text-danger fs-3 ">01</span>
          <h4>Qualité et Fraîcheur</h4>
          <p> Des ingrédients sélectionnés avec soin pour une expérience gustative exceptionnelle.</p>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0 d-flex">
        <div class="card border border-2 text-center shadow-lg p-3 mb-5 bg-body-tertiary rounded card-hover">
          <span class="text-danger fs-3">02</span>
          <h4>Créativité Culinaire </h4>
          <p>Des plats uniques alliant tradition et innovation pour éveiller vos papilles.</p>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0 d-flex">
        <div class="card border border-2 text-center shadow-lg p-3 mb-5 bg-body-tertiary rounded card-hover">
          <span class="text-danger fs-3">03</span>
          <h4> Valorisation des Talents Féminins </h4>
          <p> Notre restaurant célèbre les talents féminins en cuisine, offrant une perspective distinctive à notre gastronomie.</p>
        </div>
      </div>


    </div>

  </div>

  <!-- ======= Fin Pourquoi choisir nathy's Flavors ======= -->


  <!-- =================== Menu ====================== -->

  <section id="menu" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-12 intro-text">
          <h1>Explorez notre menu</h1>
          <p>Découvrez notre menu varié, allant des pâtisseries artisanales aux plats salés. Des spaghettis crémeux aux burgers savoureux, en passant par nos tartes délicieuses et nos yaourts rafraîchissants, il y en a pour tous les goûts. Explorez notre sélection pour une expérience culinaire inoubliable</p>
        </div>
      </div>
    </div>
    <div class="container">
      <!-- Nav bar Menu -->
      <div class="d-flex justify-content-center">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Plats Chauds</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Petit fours</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Boissons Rafraîchissantes</button>
          </li>
        </ul>
      </div>
      <div class="tab-content" id="pills-tabContent">
        <!-- Plat chaud -->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Spaghetti rouge -->
            <div class="col">
              <div class="card h-100">
                <div class="card-img">
                  <img src="img/menu_spago_rouge1.jpg" class="card-img-top img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title text-center">Spaghetti rouge</h5>
                  <p class="card-text text-center"> Des pâtes al dente accompagnées d'une sauce tomate maison savoureuse et relevée d'herbes fraîches</p>
                  <div class="text-center">
                    <a href="https://wa.me/22890584937?text=Bonjour%20Nathy's%20flavors%20j'aimerais%20commander%20du%20Spaghetti%20rouge" class="btn btn-orange border rounded-pill" id="Commander">Commander</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Spaghetti blanc -->
            <div class="col">
              <div class="card h-100">
                <div class="card-img">
                  <img src="img/menu_spago_blanc1.jpg" class="card-img-top " alt="..." height="240px">
                </div>
                <div class="card-body">
                  <h5 class="card-title text-center">Spaghetti blanc</h5>
                  <p class="card-text text-center">Des spaghettis crémeux à l'ail et au parmesan, un plaisir simple et délicieux</p>
                  <div class="text-center">
                    <a href="https://wa.me/22890584937?text=Bonjour%20Nathy's%20flavors%20j'aimerais%20commander%20Spaghetti%20blanc" class="btn btn-orange border rounded-pill" id="Commander">Commander</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Riz cantoné -->
            <div class="col">
              <div class="card h-100">
                <div class="card-img">
                  <img src="img/menu_riz.jpg" class="card-img-top img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title text-center">Riz cantoné</h5>
                  <p class="card-text text-center">Un riz tendre sauté avec des œufs, des petits pois et du jambon, un classique de la cuisine africaine</p>
                  <div class="text-center">
                    <a href="https://wa.me/22890584937?text=Bonjour%20Nathy's%20flavors%20j'aimerais%20commander%20Riz%20cantoné" class="btn btn-orange border rounded-pill" id="Commander">Commander</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Frite poulet-->
            <div class="col">
              <div class="card h-100">
                <div class="card-img">
                  <img src="img/menu_frite1.jpg" class="card-img-top  " alt="..." height="240px">
                </div>
                <div class="card-body">
                  <h5 class="card-title text-center">Frite poulet</h5>
                  <p class="card-text text-center">Frites croustillantes accompagnées de tendres morceaux de poulet dorés à souhait</p>
                  <div class="text-center">
                    <a href="https://wa.me/22890584937?text=Bonjour%20Nathy's%20flavors%20j'aimerais%20commander%20Frite%20poulet" class="btn btn-orange border rounded-pill" id="Commander">Commander</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Mini burger -->
            <div class="col">
              <div class="card h-100">
                <div class="card-img">
                  <img src="img/menu_burger2.jpg" class="card-img-top img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title text-center">Mini-Burger</h5>
                  <p class="card-text text-center">Un burger juteux avec du bœuf grillé, du fromage fondant et des crudités fraîches, un régal pour les amateurs de burgers</p>
                  <div class="text-center">
                    <a href="https://wa.me/22890584937?text=Bonjour%20Nathy's%20flavors%20j'aimerais%20commander%20du%20Mini%20Burger" class="btn btn-orange border rounded-pill" id="Commander">Commander</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Mini-pizza -->
            <div class="col">
              <div class="card h-100">
                <div class="card-img">
                  <img src="img/menu_pizza2.jpg" class="card-img-top img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title text-center">Mini-Pizza</h5>
                  <p class="card-text text-center">Une croûte croustillante, une sauce tomate, de la mozzarella et des ingrédients frais, la quintessence de l'Italie</p>
                  <div class="text-center">
                    <a href="https://wa.me/22890584937?text=Bonjour%20Nathy's%20flavors%20j'aimerais%20commander%20du%20Mini-Pizza" class="btn btn-orange border rounded-pill" id="Commander">Commander</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
          <!-- Petits fours -->
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Gâteau -->
            <div class="col">
              <div class="card h-100">
                <img src="img/menu_gateau1.jpg" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Gâteau</h5>
                  <p class="card-text text-center">Des créations sucrées et moelleuses, une explosion de saveurs à chaque bouchée</p>
                  <div class="text-center">
                    <a href="https://wa.me/22890584937?text=Bonjour%20Nathy's%20flavors%20j'aimerais%20commander%20Gâteau" class="btn btn-orange border rounded-pill" id="Commander">Commander</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Cupcake -->
            <div class="col">
              <div class="card h-100">
                <img src="img/menu_cupcak3.jpg" class="card-img-top " alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Cupcake</h5>
                  <p class="card-text text-center">Des petites douceurs délicieusement décorées, un plaisir sucré à savourer</p>
                  <div class="text-center">
                    <a href="https://wa.me/22890584937?text=Bonjour%20Nathy's%20flavors%20j'aimerais%20commander%20Cupcake" class="btn btn-orange border rounded-pill" id="Commander">Commander</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tarte -->
            <div class="col">
              <div class="card h-100">
                <img src="img/menu_tarte1.jpg" class="card-img-top " alt="..." height="240px">
                <div class="card-body">
                  <h5 class="card-title text-center">Tarte</h5>
                  <p class="card-text text-center">Des croûtes dorées et des garnitures savoureuses, un délice sucré pour tous les moments</p>
                  <div class="text-center">
                    <a href="https://wa.me/22890584937?text=Bonjour%20Nathy's%20flavors%20j'aimerais%20commander%20Tarte" class="btn btn-orange border rounded-pill" id="Commander">Commander</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Samoussa -->
            <div class="col">
              <div class="card h-100">
                <img src="img/menu_samoussa2.jpg" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Samoussa</h5>
                  <p class="card-text text-center">Des triangles croustillants, garnis d'un mélange savoureux de légumes ou de viande, une bouchée exotique à découvrir</p>
                  <div class="text-center">
                    <a href="https://wa.me/22890584937?text=Bonjour%20Nathy's%20flavors%20j'aimerais%20commander%20Samoussa" class="btn btn-orange border rounded-pill" id="Commander">Commander</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Rouleau de saucisse -->
            <div class="col">
              <div class="card h-100">
                <img src="img/menu_saucisse2.jpg" class="card-img-top " alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Rouleau de saucisse</h5>
                  <p class="card-text text-center">Des saucisses enroulées dans une pâte dorée et croustillante, un encas réconfortant à déguster à tout moment</p>
                  <div class="text-center">
                    <a href="https://wa.me/22890584937?text=Bonjour%20Nathy's%20flavors%20j'aimerais%20commander%20Rouleau%20de%20saucisse" class="btn btn-orange border rounded-pill" id="Commander">Commander</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Nems -->
            <div class="col">
              <div class="card h-100">
                <img src="img/menu_nems1.jpg" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Nems</h5>
                  <p class="card-text text-center">Des rouleaux de printemps croustillants, remplis d'une délicieuse farce de légumes ou de viande</p>
                  <div class="text-center">
                    <a href="https://wa.me/22890584937?text=Bonjour%20Nathy's%20flavors%20j'aimerais%20commander%20Nems" class="btn btn-orange border rounded-pill" id="Commander">Commander</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
          <!-- Boissons rafraîchissantes -->
          <div class="row row-cols-1 row-cols-md-3 g-4">

            <!-- Cocktail -->
            <div class="col">
              <div class="card h-100">
                <img src="img/menu_cocktail1.jpg" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Cocktail</h5>
                  <p class="card-text text-center">Des mélanges rafraîchissants et savoureux, préparés avec soin pour éveiller vos papilles et vous rafraîchir lors de vos moments de détente</p>
                  <div class="text-center">
                    <a href="https://wa.me/22890584937?text=Bonjour%20Nathy's%20flavors%20j'aimerais%20commander%20du%20Cocktail" class="btn btn-orange border rounded-pill" id="Commander">Commander</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Yaourt -->
            <div class="col">
              <div class="card h-100">
                <img src="img/menu_yaourt1.jpg" class="card-img-top " alt="..." height="240px">
                <div class="card-body">
                  <h5 class="card-title text-center">Yaourt</h5>
                  <p class="card-text text-center">Des desserts crémeux et rafraîchissants, parfaits pour une pause douceur à tout moment de la journée</p>
                  <div class="text-center">
                    <a href="https://wa.me/22890584937?text=Bonjour%20Nathy's%20flavors%20j'aimerais%20commander%20du%20Yaourt" class="btn btn-orange border rounded-pill" id="Commander">Commander</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- =================== Fin Menu ====================== -->



  <section>
    <!-- ======= Gallery Section ======= -->

    <div class="container">

      <div class="section-title intro-text ">
        <h2>Quelques video de notre restaurant</h2>
        <p>Explorez notre atmosphère chaleureuse et notre cuisine délicieuse à travers quelques clichés captivants de notre restaurant.</p>
      </div>

      <div class="row ">
        <div class="col-md-2 m-3">
          <video controls style="height: 345px;  border-radius: 5px;">
            <source src="video/video1.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>

        </div>

        <div class="col-md-2 m-3 ">
          <video controls style="height: 345px;  border-radius: 5px;">
            <source src="video/video2.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>

        </div>

        <div class="col-md-2 m-3 ">
          <video controls style="height: 345px;  border-radius: 5px;">
            <source src="video/video3.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>

        </div>

        <div class="col-md-2 m-3 ">
          <video controls style="height: 345px;  border-radius: 5px;">
            <source src="video/video4.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>

        </div>

        <div class="col-md-2 m-3 ">
          <video controls style="height: 345px;  border-radius: 5px;">
            <source src="video/video5.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>

        </div>


      </div>



    </div>

    <!-- ======= Fin  Gallery Section ======= -->

    <!-- ============================= Contact ========================== -->


    <div class="section-title intro-text mt-5">
      <h2>Nos contacts</h2>
      <p>Besoin de nous contacter ? Retrouvez toutes nos coordonnées ici pour Commander, poser une question ou simplement dire bonjour. Nous sommes impatients de vous entendre !</p>
    </div>

    <div class="text-center">
      <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3966.5206922556927!2d1.2461400744974227!3d6.194816993792853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMTEnNDEuMyJOIDHCsDE0JzU1LjQiRQ!5e0!3m2!1sfr!2stg!4v1712269972293!5m2!1sfr!2stg" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class=" m    mx-auto rounded-3 shadow-lg bg-body-tertiary d-none d-md-block"></iframe>
    </div>



    <!-- ============================ Fin contact ======================================== -->
  </section>




  <footer style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(img/slide3.jpg);" class="footer text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5 class="mt-4">Coordonnées</h5>
          <p> Rue 166 Hdn<br> Lomé, Togo<br> Téléphone: +228 90 58 49 37<br> Email: info@nathysflavors.com</p>
        </div>
        <div class="col-md-4">
          <h5 class="mt-4">Horaires d'ouverture</h5>
          <p>Lundi - Vendredi: 10h00 - 22h00<br> Samedi - Dimanche: 12h00 - 22h00</p>
        </div>
        <div class="col-md-4">
          <h5 class="mt-4">Suivez-nous</h5>
          <p>
            <a href="https://wa.me/22890584937" class="text-white mx-2 "><i class="bi bi-whatsapp"></i></a>
            <a href="https://www.instagram.com/nathysflavor/" class="text-white mx-2"><i class="bi bi-instagram"></i></a>
            <a href="https://www.tiktok.com/@nathy_flavors" class="text-white"><i class="bi bi-tiktok"></i></a>
          </p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <p class="text-center">&copy; 2024 Nathy's Flavors. Tous droits réservés.</p>
        </div>
      </div>
    </div>
  </footer>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>