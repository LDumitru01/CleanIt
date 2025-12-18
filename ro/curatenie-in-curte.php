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

  <!-- Stilurile proiectului -->
  <link rel="stylesheet" href="../styles.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../styleprice.css" />

  <title>Curățenie profesională în curte – CleanIt</title>
  <meta name="description"
        content="Curățenie profesională în curte, alei, terase și spații exterioare în Chișinău. Spălare cu presiune, colectare frunze, noroi și murdărie. Evaluare gratuită.">

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
          <span class="service-badge">Spații exterioare curate</span>

          <h1 class="service-hero-title">
            Curățenie profesională în curte
          </h1>

          <p class="service-hero-subtitle">
            Întreținere completă a curților și zonelor exterioare — rapid, eficient
            și fără efort din partea ta. Ideal pentru locuințe private, afaceri
            și spații comerciale.
          </p>

          <ul class="service-hero-list">
            <li>Colectare frunze, crengi și resturi vegetale</li>
            <li>Măturare, spălare și degresare suprafețe exterioare</li>
            <li>Spălare cu jet de presiune (pavaj, beton, terase)</li>
            <li>Igienizare zone comune și containere de gunoi</li>
          </ul>

          <button
            type="button"
            class="btn service-cta-btn mt-3"
            data-toggle="modal"
            data-target="#consultModal">
            Solicitați curățenie în curte
          </button>
        </div>

        <!-- IMAGINE -->
        <div class="col-lg-5 offset-lg-1">
          <img src="img/eko-klining-elit-1-770x560.jpg"
               alt="Servicii profesionale de curățenie în curte Chișinău"
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
          <h2 class="service-section-title">
            Ce include serviciul de curățenie în curte?
          </h2>

          <ul class="service-info-list">
            <li>Curățare trotuare, alei, pavaj, terase și rampe</li>
            <li>Aspirare profesională și suflare frunze/praf</li>
            <li>Îndepărtare noroi, nisip, gunoi și depuneri</li>
            <li>Spălare cu presiune pentru suprafețe dure</li>
            <li>Curățarea mobilierului și accesoriilor de exterior</li>
            <li>Întreținere periodică prin abonament</li>
          </ul>

          <h2 class="service-section-title mt-4">
            Cui se adresează acest serviciu?
          </h2>

          <ul class="service-info-list">
            <li>Case private, vile și curți individuale</li>
            <li>Blocuri locative și asociații de proprietari</li>
            <li>Terase, restaurante, spații comerciale</li>
            <li>Imobile pregătite pentru vânzare sau închiriere</li>
          </ul>

          <p class="mt-3">
            Lucrăm cu echipamente profesionale și soluții sigure,
            fără risc pentru plante, animale sau mediul înconjurător.
          </p>
        </div>

        <!-- DREAPTA -->
        <div class="col-lg-5">
          <div class="service-info-card">
            <h3 class="service-info-title">Prețuri orientative</h3>

            <p class="service-note mt-2">
              Costul final este stabilit în funcție de suprafață, acces,
              nivelul de murdărie și tipul intervenției.
            </p>

            <button
              type="button"
              class="btn btn-block service-cta-btn mt-3"
              data-toggle="modal"
              data-target="#consultModal">
              Solicitați ofertă personalizată
            </button>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- BENEFICII -->
  <section class="service-why py-5">
    <div class="container text-center">
      <h2 class="service-section-title mb-4">
        De ce CleanIt?
      </h2>

      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Intervenție rapidă</h3>
            <p>
              Echipă organizată, utilaje complete, rezultate vizibile imediat.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Zero efort pentru tine</h3>
            <p>
              Ne ocupăm de tot — tu doar aprobi rezultatul.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Aspect îngrijit pe termen lung</h3>
            <p>
              Curte curată și ordonată după fiecare intervenție.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'servicii-section.php' ?>

  <!-- CTA FINAL -->
  <section class="service-cta-banner py-4">
    <div class="container d-flex flex-column flex-lg-row justify-content-between align-items-center">
      <div class="text-center text-lg-left mb-3 mb-lg-0">
        <h2 class="service-cta-banner-title">
          Curtea ta poate arăta impecabil
        </h2>
        <p class="service-cta-banner-text">
          Trimite o cerere și primești consultanță și evaluare gratuită.
        </p>
      </div>

      <button
        type="button"
        class="btn service-cta-btn"
        data-toggle="modal"
        data-target="#consultModal">
        Trimite cererea
      </button>
    </div>
  </section>

</main>

<!-- FOOTER -->
<div id="footer-container"><?php
include 'footer.php';
?></div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>

<script src="../leads.js"></script>

</body>
</html>
