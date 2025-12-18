<!doctype html>
<html lang="ro">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        crossorigin="anonymous">

  <!-- Icons -->
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <!-- Stiluri generale -->
  <link rel="stylesheet" href="../styles.css">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../styleprice.css">

  <title>Curățenie profesională baie și bloc sanitar – CleanIt</title>
  <meta name="description"
        content="Curățenie profesională în baie și bloc sanitar în Chișinău. Detartrare, dezinfectare, eliminare mucegai și calcar. Produse sigure, rezultate vizibile imediat.">

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
          <span class="service-badge">Persoane fizice</span>

          <h1 class="service-hero-title">
            Curățenie profesională în baie și bloc sanitar
          </h1>

          <p class="service-hero-subtitle">
            Igienizare completă, detartrare și dezinfectare profesională
            pentru băi și blocuri sanitare — fără calcar, mucegai și mirosuri neplăcute.
          </p>

          <ul class="service-hero-list">
            <li>Detartrare robinete, baterii și obiecte sanitare</li>
            <li>Curățare gresie, faianță, pereți și uși</li>
            <li>Spălare cadă, cabină de duș, WC și chiuvetă</li>
            <li>Îndepărtarea calcarului și a depunerilor persistente</li>
            <li>Dezinfectare antibacteriană profesională</li>
          </ul>

          <div class="mt-4 d-flex flex-wrap align-items-center">
            <button
              type="button"
              class="btn service-cta-btn mr-3 mb-3"
              data-toggle="modal"
              data-target="#consultModal">
              Programează curățenia
            </button>
            <div class="service-price-short mb-3">
              <span>preț calculat în funcție de dimensiune și gradul de murdărie</span>
            </div>
          </div>
        </div>

        <!-- IMAGINE -->
        <div class="col-lg-5 offset-lg-1">
          <div class="service-hero-image-wrap">
            <img src="img/eko-klining-elit-1-770x560.jpg"
                 alt="Curățenie profesională bloc sanitar"
                 class="img-fluid service-hero-image">
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
            Ce presupune curățenia profesională a băii?
          </h2>

          <p>
            Baia este una dintre cele mai sensibile zone ale locuinței, expusă constant
            umezelii, calcarului și bacteriilor. Curățenia obișnuită nu elimină complet
            aceste probleme.
          </p>

          <p>
            Echipa CleanIt utilizează soluții profesionale de detartrare și dezinfectare,
            sigure pentru suprafețe și sănătate, pentru a reda igiena, strălucirea și
            un mediu sănătos în baia ta.
          </p>

          <p>
            Serviciul poate fi comandat separat sau inclus în curățenia generală,
            de întreținere sau după reparație.
          </p>
        </div>

        <!-- DREAPTA -->
        <div class="col-lg-5">
          <div class="service-info-card">
            <h3 class="service-info-title">Serviciul include:</h3>

            <ul class="service-info-list">
              <li>Igienizare WC, chiuvetă, cadă și duș</li>
              <li>Curățare cabine de duș și suprafețe din sticlă</li>
              <li>Îndepărtare mucegai (în zonele accesibile)</li>
              <li>Degresare baterii, inox și accesorii</li>
              <li>Curățare plinte, rafturi și oglinzi</li>
            </ul>

            <div class="service-info-price">
              Preț orientativ: <strong>200–450 lei / baie</strong><br>
              <span>pentru băi mari sau mai multe grupuri sanitare – ofertă personalizată</span>
            </div>

            <button
              type="button"
              class="btn btn-block service-cta-btn mt-3"
              data-toggle="modal"
              data-target="#consultModal">
              Solicită oferta exactă
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
        De ce CleanIt pentru curățenia sanitară?
      </h2>

      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Dezinfectare completă</h3>
            <p>
              Eliminăm bacteriile, mirosurile neplăcute și depunerile ascunse.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Fără calcar și pete</h3>
            <p>
              Soluții profesionale care curăță eficient fără a zgâria suprafețele.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Sigure pentru familie</h3>
            <p>
              Produse ecologice, aprobate, potrivite pentru copii și animale.
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
            Vrei o baie curată, fără calcar și bacterii?
          </h2>
          <p class="mb-0 service-cta-banner-text">
            Trimite poze pe WhatsApp și îți oferim rapid un preț exact.
          </p>
        </div>

        <a href="https://wa.me/37362199439" class="btn service-cta-btn">
          Trimite poze pe WhatsApp
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
