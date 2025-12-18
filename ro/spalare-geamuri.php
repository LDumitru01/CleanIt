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

  <title>Spălare geamuri în Chișinău – profesional, fără urme | CleanIt</title>
  <meta name="description"
        content="Spălare profesională geamuri în Chișinău: interior și exterior, vitrine, balcoane, fațade și spații comerciale. Curățare fără urme, echipamente moderne, rezultate impecabile.">

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
          <span class="service-badge">Claritate fără urme</span>

          <h1 class="service-hero-title">
            Spălare geamuri în Chișinău
          </h1>

          <p class="service-hero-subtitle">
            Oferim servicii profesionale de spălare geamuri pentru locuințe,
            birouri și spații comerciale. Curățare rapidă, sigură și fără urme,
            indiferent de înălțime sau tipul suprafeței.
          </p>

          <ul class="service-hero-list">
            <li>Spălare geamuri interior și exterior</li>
            <li>Fără dâre, pete sau urme de apă</li>
            <li>Acces la etaje înalte și zone dificile</li>
            <li>Soluții profesionale, sigure pentru sticlă</li>
          </ul>

          <button
            type="button"
            class="btn service-cta-btn mt-3"
            data-toggle="modal"
            data-target="#consultModal">
            Comandă spălarea geamurilor
          </button>
        </div>

        <!-- IMAGINE -->
        <div class="col-lg-5 offset-lg-1">
          <img src="img/c460b78c20411a0b7e75fbf8129de1fa.jpg"
               alt="Spălare geamuri profesională în Chișinău"
               class="img-fluid service-hero-image" />
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
            Ce include serviciul de spălare geamuri?
          </h2>

          <ul class="service-info-list">
            <li>Spălare geamuri interior și exterior</li>
            <li>Îndepărtarea prafului, urmelor, calcarului și insectelor</li>
            <li>Curățarea ramelor, pervazurilor și glafurilor</li>
            <li>Polish sticlă pentru transparență maximă</li>
            <li>Spălare vitrine comerciale</li>
            <li>Curățare balcoane și parapete din sticlă</li>
          </ul>

          <h2 class="service-section-title mt-4">
            Unde prestăm serviciul?
          </h2>

          <ul class="service-info-list">
            <li>Apartamente, case și vile</li>
            <li>Birouri și centre business</li>
            <li>Magazine, restaurante și showroom-uri</li>
            <li>Clădiri administrative și comerciale</li>
          </ul>

          <p class="mt-3">
            Folosim apă filtrată, raclete profesionale și tehnici moderne
            pentru a obține geamuri perfect curate, fără urme sau pete.
          </p>
        </div>

        <!-- DREAPTA -->
        <div class="col-lg-5">
          <div class="service-info-card">
            <h3 class="service-info-title">Preț orientativ</h3>

            <p class="service-note mt-2">
              Costul final depinde de suprafață, acces, etaj,
              gradul de murdărie și tipul sticlei.
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
        De ce să alegi CleanIt?
      </h2>

      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Fără urme</h3>
            <p>Tehnici profesionale pentru sticlă impecabilă.</p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Rapid și sigur</h3>
            <p>Lucrăm eficient, fără riscuri și fără murdărie.</p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Echipă instruită</h3>
            <p>Personal calificat pentru orice tip de lucrare.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'servicii-section.php' ?>

  <!-- CTA -->
  <section class="service-cta-banner py-4">
    <div class="container d-flex flex-column flex-lg-row justify-content-between align-items-center">
      <div class="text-center text-lg-left mb-3 mb-lg-0">
        <h2 class="service-cta-banner-title">
          Vrei geamuri curate și luminoase?
        </h2>
        <p class="service-cta-banner-text">
          Trimite o cerere și primești evaluare gratuită.
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
