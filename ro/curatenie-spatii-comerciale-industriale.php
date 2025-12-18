<!doctype html>
<html lang="ro">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Bootstrap -->
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        crossorigin="anonymous" />

  <!-- Icons -->
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />

  <!-- Stiluri globale -->
  <link rel="stylesheet" href="../styles.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../styleprice.css" />

  <title>Curățenie spații comerciale și industriale în Chișinău – CleanIt</title>
  <meta name="description"
        content="Curățenie profesională pentru spații comerciale și industriale în Chișinău. Magazine, depozite, hale, fabrici și birouri open-space. Servicii B2B cu contract, echipă instruită și program flexibil.">

  <!-- Google tag -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-EYJPRQZXNV"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-EYJPRQZXNV');
  </script>
</head>
<body>

<!-- MENIU -->
<?php require_once __DIR__ . '/menu.php'; ?>
<!-- MENIU GLOBAL -->


<main class="service-page">

  <!-- HERO -->
  <section class="service-hero py-5">
    <div class="container">
      <div class="row align-items-center">

        <!-- TEXT -->
        <div class="col-lg-6 mb-4 mb-lg-0">
          <span class="service-badge">Persoane juridice · B2B</span>

          <h1 class="service-hero-title">
            Curățenie profesională pentru spații comerciale și industriale
          </h1>

          <p class="service-hero-subtitle">
            Oferim servicii complete de curățenie pentru spații comerciale,
            industriale și logistice — soluții eficiente pentru un mediu de lucru
            sigur, organizat și conform standardelor profesionale.
          </p>

          <ul class="service-hero-list">
            <li>Magazine, supermarketuri, showroom-uri</li>
            <li>Depozite logistice, hale industriale, fabrici</li>
            <li>Birouri open-space, recepții și centre business</li>
            <li>Igienizare și dezinfectare profesională</li>
            <li>Curățenie zilnică, periodică sau contractuală</li>
          </ul>

          <div class="mt-4 d-flex flex-wrap align-items-center">
            <button
              type="button"
              class="btn service-cta-btn mr-3 mb-3"
              data-toggle="modal"
              data-target="#consultModal">
              Solicitați ofertă personalizată
            </button>
            <div class="service-price-short mb-3">
              <span>tarif adaptat suprafeței și programului</span>
            </div>
          </div>
        </div>

        <!-- IMAGINE -->
        <div class="col-lg-5 offset-lg-1">
          <div class="service-hero-image-wrap">
            <img src="img/spatii-industriale-cleaning.jpg"
                 alt="Curățenie spații comerciale și industriale Chișinău"
                 class="img-fluid service-hero-image" />
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- DETALII -->
  <section class="service-details py-5">
    <div class="container">
      <div class="row">

        <!-- TEXT -->
        <div class="col-lg-7 mb-4 mb-lg-0">
          <h2 class="service-section-title">
            Servicii de curățenie adaptate activităților comerciale și industriale
          </h2>

          <p>
            Fiecare spațiu comercial sau industrial are cerințe diferite.
            De aceea, adaptăm procesul de curățenie în funcție de
            domeniul de activitate, tipul suprafețelor și fluxul de lucru.
          </p>

          <p>
            Personalul nostru este instruit pentru zone cu trafic intens,
            echipamente industriale și suprafețe sensibile. Respectăm
            normele de siguranță și folosim detergenți profesionali,
            adecvați mediului industrial.
          </p>

          <p>
            Lucrăm flexibil — înainte sau după program, noaptea sau
            în weekend — fără a perturba activitatea companiei.
          </p>
        </div>

        <!-- CARD -->
        <div class="col-lg-5">
          <div class="service-info-card">
            <h3 class="service-info-title">Serviciul include:</h3>

            <ul class="service-info-list">
              <li>Măturare, aspirare și spălare pardoseli mari</li>
              <li>Curățare rafturi, vitrine, birouri și tejghele</li>
              <li>Igienizare vestiare și camere tehnice</li>
              <li>Curățarea grupurilor sanitare</li>
              <li>Dezinfectare zone cu risc ridicat</li>
              <li>Colectare și evacuare deșeuri</li>
            </ul>

            <div class="service-info-price">
              Preț orientativ: <strong>18–35 lei / m²</strong><br />
              <span>Oferta finală se stabilește după evaluare.</span>
            </div>

            <button
              type="button"
              class="btn btn-block service-cta-btn mt-3"
              data-toggle="modal"
              data-target="#consultModal">
              Solicitați evaluare gratuită
            </button>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- BENEFICII -->
  <section class="service-why py-5">
    <div class="container">
      <h2 class="service-section-title text-center mb-4">
        De ce companiile aleg CleanIt
      </h2>

      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Echipamente industriale</h3>
            <p>
              Utilaje profesionale pentru suprafețe mari și zone tehnice.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Eficiență și predictibilitate</h3>
            <p>
              Program clar, echipă stabilă și rezultate constante.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Contract & facturare legală</h3>
            <p>
              Servicii B2B cu responsabilitate juridică completă.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'servicii-section.php' ?>

  <!-- CTA -->
  <section class="service-cta-banner py-4">
    <div class="container">
      <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
        <div class="mb-3 mb-lg-0">
          <h2 class="service-cta-banner-title mb-1">
            Aveți nevoie de curățenie profesională pentru afacerea dvs.?
          </h2>
          <p class="mb-0 service-cta-banner-text">
            Contactați-ne pentru ofertă personalizată și vizită gratuită.
          </p>
        </div>

        <a href="https://wa.me/37362199439" class="btn service-cta-btn">
          Solicitați consultanță
        </a>
      </div>
    </div>
  </section>

</main>

<!-- FOOTER -->
<div id="footer-container"><?php
include 'footer.php';
?></div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

<script src="../leads.js"></script>

</body>
</html>
