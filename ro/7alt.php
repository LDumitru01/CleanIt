<!doctype html>
<html lang="ro">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap -->
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" />

  <!-- Icons -->
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />

  <!-- Stiluri proiect -->
  <link rel="stylesheet" href="../styles.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../styleprice.css" />

  <title>Curățenie la piscină – CleanIt</title>
  <meta name="description"
        content="Curățenie și întreținere profesională a piscinelor în Chișinău – curățare bazin, margini, filtrare, dezinfectare, pregătire pentru sezon.">
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EYJPRQZXNV">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EYJPRQZXNV');
</script>
</head>
<body>

<!-- MENIU GLOBAL -->
<?php require_once __DIR__ . '/menu.php'; ?>
<!-- MENIU GLOBAL -->


<main class="service-page">

  <!-- HERO -->
  <section class="service-hero py-5">
    <div class="container">
      <div class="row align-items-center">

        <!-- TEXT -->
        <div class="col-lg-6 mb-4 mb-lg-0">
          <span class="service-badge">Piscină curată și sigură</span>
          <h1 class="service-hero-title">Curățenie la piscină</h1>
          <p class="service-hero-subtitle">
            Îngrijire completă pentru piscina ta: curățarea bazinului, margini, apă,
            filtre și tratamente dezinfectante – pentru un mediu sigur și plăcut.
          </p>

          <ul class="service-hero-list">
            <li>Curățare mecanică și chimică</li>
            <li>Îndepărtare depuneri, alge și mizerie</li>
            <li>Întreținere regulată sau ocazională</li>
            <li>Consultanță privind îngrijirea apei</li>
          </ul>

          <button
            type="button"
            class="btn service-cta-btn mt-3"
            data-toggle="modal"
            data-target="#consultModal">
            Comandă curățenia piscinei
          </button>
        </div>

        <!-- IMAGINE -->
        <div class="col-lg-5 offset-lg-1">
          <img src="img/piscina-clean.jpg"
               alt="Curățenie piscină Chișinău"
               class="img-fluid service-hero-image" />
        </div>

      </div>
    </div>
  </section>

  <!-- DETALII SERVICIU -->
  <section class="service-details py-5">
    <div class="container">
      <div class="row">

        <!-- STÂNGA -->
        <div class="col-lg-7 mb-4 mb-lg-0">
          <h2 class="service-section-title">Ce facem la curățenia piscinei?</h2>

          <ul class="service-info-list">
            <li>Aspirarea și curățarea fundului piscinei</li>
            <li>Curățarea pereților și a liniei apei</li>
            <li>Îndepărtarea frunzelor, insectelor și reziduurilor din apă</li>
            <li>Curățarea skimmerelor și a coșurilor de colectare</li>
            <li>Clătirea și întreținerea filtrului (acolo unde este accesibil)</li>
            <li>Aplicarea produselor pentru dezinfectare (clor / alte soluții, la cerere)</li>
          </ul>

          <h2 class="service-section-title mt-4">Pentru cine este acest serviciu?</h2>

          <ul class="service-info-list">
            <li>Case și vile cu piscină privată</li>
            <li>Piscine închiriate pentru evenimente</li>
            <li>Pensiuni, mini-hoteluri, spa-uri</li>
            <li>Piscine de curte sezoniere</li>
          </ul>

          <p class="mt-3">
            Curățenia regulată a piscinei nu este doar estetică — este importantă pentru
            sănătate, siguranță și pentru durata de viață a echipamentului.
          </p>
        </div>

        <!-- DREAPTA — PREȚURI -->
        <div class="col-lg-5">
          <div class="service-info-card">
            <h3 class="service-info-title">Prețuri orientative</h3>

            <p class="service-note mt-2">
              Prețul final depinde de suprafață, gradul de murdărie, acces la piscină
              și tipul sistemului de filtrare.
            </p>

            <button
              type="button"
              class="btn btn-block service-cta-btn mt-3"
              data-toggle="modal"
              data-target="#consultModal">
              Solicitați calcul pentru piscina dvs.
            </button>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- BENEFICII -->
  <section class="service-why py-5">
    <div class="container text-center">
      <h2 class="service-section-title mb-4">De ce să nu faceți singuri?</h2>

      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Economie de timp</h3>
            <p>Noi ne ocupăm de curățenie, tu doar te bucuri de piscină.</p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Rezultat profesionist</h3>
            <p>Fără depuneri, fără apă tulbure – doar claritate și igienă.</p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Mai multă siguranță</h3>
            <p>Reducem riscul bacteriilor, algelor și alunecărilor pe margini.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA FINAL -->
  <section class="service-cta-banner py-4">
    <div class="container d-flex flex-column flex-lg-row justify-content-between align-items-center">
      <div class="text-center text-lg-left mb-3 mb-lg-0">
        <h2 class="service-cta-banner-title">
          Piscina ta are nevoie de curățenie profesionistă?
        </h2>
        <p class="service-cta-banner-text">
          Lasă-ne un număr de telefon – revenim cu detalii și ofertă.
        </p>
      </div>

      <button
        type="button"
        class="btn service-cta-btn"
        data-toggle="modal"
        data-target="#consultModal">
        Trimiteți cererea
      </button>
    </div>
  </section>

</main>

<!-- FOOTER -->
<div id="footer-container"><?php
include 'footer.php';
?></div>

<!-- LOAD MENU & FOOTER -->


<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
		<!-- Общий обработчик всех форм (страница + модалка) -->
<script src="../leads.js"></script>


</body>
</html>
