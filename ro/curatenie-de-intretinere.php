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

  <title>Curățenie de întreținere (menaj) în Chișinău – CleanIt</title>
  <meta name="description"
        content="Curățenie de întreținere în Chișinău. Menaj regulat pentru apartamente și birouri: zilnic, săptămânal sau lunar. Personal instruit, prețuri transparente, abonamente avantajoase.">

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

<?php require_once __DIR__ . '/menu.php'; ?>
<!-- MENIU GLOBAL -->


<main class="service-page">

  <!-- HERO -->
  <section class="service-hero py-5">
    <div class="container">
      <div class="row align-items-center">

        <!-- TEXT -->
        <div class="col-lg-6 mb-4 mb-lg-0">
          <span class="service-badge">Serviciu periodic</span>

          <h1 class="service-hero-title">
            Curățenie de întreținere (menaj regulat)
          </h1>

          <p class="service-hero-subtitle">
            Curățenie constantă pentru apartamente, case și birouri,
            realizată regulat de personal instruit.
            Ideală pentru cei care vor ordine permanentă, fără griji.
          </p>

          <ul class="service-hero-list">
            <li>Ștergere praf și curățare suprafețe</li>
            <li>Aspirare și spălare podele</li>
            <li>Întreținere baie și bucătărie</li>
            <li>Dezinfectarea zonelor frecvent atinse</li>
            <li>Gestionare gunoi și menținere ordine generală</li>
          </ul>

          <div class="mt-4 d-flex flex-wrap align-items-center">
            <button
              type="button"
              class="btn service-cta-btn mr-3 mb-3"
              data-toggle="modal"
              data-target="#consultModal">
              Programează menajul
            </button>

            <div class="service-price-short mb-3">
              <span>abonamente flexibile, adaptate nevoilor tale</span>
            </div>
          </div>
        </div>

        <!-- IMAGINE -->
        <div class="col-lg-5 offset-lg-1">
          <div class="service-hero-image-wrap">
            <img src="img/eko-klining-elit-1-770x560.jpg"
                 alt="Curățenie de întreținere menaj regulat"
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

        <!-- STÂNGA -->
        <div class="col-lg-7 mb-4 mb-lg-0">
          <h2 class="service-section-title">
            Pentru cine este curățenia de întreținere?
          </h2>

          <p>
            Acest serviciu este ideal pentru persoane ocupate, familii,
            proprietari de apartamente, birouri, gazde Airbnb sau
            oricine dorește un spațiu curat în mod constant,
            fără a pierde timp cu curățenia.
          </p>

          <p>
            Programul este complet flexibil: zilnic, săptămânal sau lunar.
            Stabilim împreună frecvența, intervalul orar și lista exactă
            de activități, în funcție de stilul tău de viață.
          </p>
        </div>

        <!-- CARD -->
        <div class="col-lg-5">
          <div class="service-info-card">
            <h3 class="service-info-title">Serviciul include:</h3>

            <ul class="service-info-list">
              <li>Curățare podele, covoare și mochete</li>
              <li>Ordine generală și aranjare suprafețe</li>
              <li>Curățare mobilier la exterior</li>
              <li>Curățare electrocasnice la exterior</li>
              <li>Schimbare saci de gunoi și aerisire încăperi</li>
            </ul>

            <div class="service-info-price">
              Preț orientativ: <strong>25–40 lei / m²</strong><br />
              <span>tarife reduse pentru abonamente săptămânale sau lunare</span>
            </div>

            <button
              type="button"
              class="btn btn-block service-cta-btn mt-3"
              data-toggle="modal"
              data-target="#consultModal">
              Calculează oferta ta
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
        De ce să alegi menajul regulat CleanIt?
      </h2>

      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Personal de încredere</h3>
            <p>
              Menajere instruite, verificate și atente la detalii.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Prețuri clare</h3>
            <p>
              Fără costuri ascunse, fără surprize — totul este stabilit din start.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Abonamente avantajoase</h3>
            <p>
              Reduceri pentru colaborări pe termen lung și program stabil.
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
            Vrei un spațiu curat zi de zi?
          </h2>
          <p class="mb-0 service-cta-banner-text">
            Scrie-ne pe WhatsApp și stabilim împreună frecvența ideală.
          </p>
        </div>

        <a href="https://wa.me/37362199439" class="btn service-cta-btn">
          Scrie pe WhatsApp
        </a>
      </div>
    </div>
  </section>

</main>

<!-- FOOTER -->
<div id="footer-container"><?php
include 'footer.php';
?></div>



<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="../leads.js"></script>

</body>
</html>
