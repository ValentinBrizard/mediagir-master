<!DOCTYPE html>
<html lang="fr">


<head>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="./css/caroussel.css">

  <meta charset="UTF-8">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
  <script defer src="caroussel.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./css/modale.css">
  <link rel="stylesheet" href="./css/contact.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mediagir</title>
  <style>

  </style>
</head>


<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.html">Le centre</a></li>
        <li><a href="index.html">Accueil</a></li>
        <li><a href="#">À propos</a></li>


        <li>
          <!--  premier sous menu  -->
          <a href="#">La médiation</a>
          <ul>
            <li><a href="particuliers.html" target="_blank">particuliers</a></li>
            <hr>
            <li><a href="professionnel.html" target="_blank">Professionnels</a></li>
            <hr>
            <li><a href="institutionnel.html" target="_blank">Institutionnel</a></li>
          </ul>
          <!--  fin du premier  sous menu -->
          <!-- deuxième sous menu  -->
        <li>
          <a href="#">Tarifs</a>
          <ul>
            <li><a href="mediation.html" target="_blank">Médiation</a></li>
            <hr>
            <li><a href="formations.html" target="_blank">Formations</a></li>
            <!--  fin du deuxième sous menu -->

          </ul>
        </li>
      </ul>
      <a href="/mediagir-master/connexion.php"> connexion </a>
      <a href="/mediagir-master/inscription.php"> inscription</a>

    </nav>
    <!--  fin de la navbar -->
    <header>


      <h1>Ensemble, évitons les conflits</h1>



      <main>
        <section>
          <img src="./img/hero.png">

          <p>Ils nous font confiance:</p>
          <!-- CAROUSSEL -->

          <div class="swiper mySwiper" id="parentcaroussel">


            <div class="swiper-wrapper">
              <div class="swiper-slide" id="childcaroussel">
                <img id="image" src="./img/image1.png" />
              </div>
              <div class="swiper-slide" id="childcaroussel">
                <img id="image" src="./img/image2.png" />
              </div>
              <div class="swiper-slide" id="childcaroussel">
                <img id="image" src="./img/image3.png" />
              </div>
              <div class="swiper-slide" id="childcaroussel">
                <img id="image" src="./img/image4.png" />
              </div>
              <div class="swiper-slide" id="childcaroussel">
                <img id="image" src="./img/image5.png" />
              </div>
              <div class="swiper-slide" id="childcaroussel">
                <img id="image" src="./img/image6.png" />
              </div>
              <div class="swiper-slide" id="childcaroussel">
                <img id="image" src="./img/image7.png" />
              </div>
              <div class="swiper-slide" id="childcaroussel">
                <img id="image" src="./img/image8.png" />
              </div>
              <div class="swiper-slide" id="childcaroussel">
                <img id="image" src="./img/image9.png" />
              </div>
              <div class="swiper-slide" id="childcaroussel">
                <img id="image" src="./img/image10.png" />
              </div>
              <div class="swiper-slide" id="childcaroussel">
                <img id="image" src="./img/image11.png" />
              </div>
              <div class="swiper-slide" id="childcaroussel">
                <img id="image" src="./img/image12.png" />
              </div>
            </div>

            <div class="swiper-pagination"></div>


          </div>

          <section>
            <div class="confiance ">

              <img src="./img/ESTRADE.png" alt="ESTRADE" id="bg-estrade">
              <div class="row">

                <div class="card">
                  <div class="card-body">
                    <h2> Présentation:</h2>
                    <div>

                    </div>
                    <div>
                      <p><span class="p2">Médi'Agir est une association visant à régler rapidement votre conflit judiciaire de A à Z
                          grâce aux professionnels de notre médiation.</p>
                      </span>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </section>

      </main>

      <div id="cookie-banner" style="display:none;">
        <p>Ce site utilise des cookies pour améliorer votre expérience de navigation. <a href="#">En savoir plus</a></p>
        <button id="cookie-banner-agree">J'accepte</button>
      </div>


      <section id="avis">
        <h2>95 % d'accord en 3 séances</h2>
        <img src="./img/rating.png" alt="Les avis clients"></img>


      </section>


      <section class="recherche">
        <h2>Où nous trouver ?</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam suscipit fugit a ut laboriosam qui optio vel exercitationem saepe enim sunt nemo
          delectus aliquam cupiditate minus officia, labore vero maiores?</p>



      </section>
      <footer>
 
          <ul>
            <li><a href="./contact.php">Nous contacter</a></li>
            <li><a href="#">Mentions Légales</a></li>
            <li><a href="#">Plan du site</a></li>
          </ul> </footer>
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
          let swiper = new Swiper(".mySwiper", {
            slidesPerView: "auto",
            centeredSlides: true,
            spaceBetween: 30,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
          });
        </script>



</body>


</html>