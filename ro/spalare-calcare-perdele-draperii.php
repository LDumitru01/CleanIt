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

  <!-- Stiluri -->
  <link rel="stylesheet" href="../styles.css">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../styleprice.css">

  <title>Spălare și călcare perdele și draperii în Chișinău – CleanIt</title>
  <meta name="description"
        content="Spălare și călcare profesională perdele și draperii în Chișinău. Demontare, spălare delicată, călcare cu abur și montare. Pentru apartamente, case, birouri, restaurante și hoteluri.">

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
          <span class="service-badge">Persoane fizice & juridice</span>

          <h1 class="service-hero-title">
            Spălare și călcare perdele & draperii
          </h1>

          <p class="service-hero-subtitle">
            Serviciu profesionist de spălare, călcare și recondiționare
            a perdelelor și draperiilor — fără deformări, fără decolorare,
            cu igienizare completă.
          </p>

          <ul class="service-hero-list">
            <li>Demontare și montare perdele</li>
            <li>Spălare profesională inclusiv pentru materiale delicate</li>
            <li>Călcare cu abur & finisare antibacteriană</li>
            <li>Eliminare praf, mirosuri și alergeni</li>
            <li>Ridicare și livrare la domiciliu – opțional</li>
          </ul>

          <div class="mt-4 d-flex flex-wrap align-items-center">
            <button
              type="button"
              class="btn service-cta-btn mr-3 mb-3"
              data-toggle="modal"
              data-target="#consultModal">
              Comandă serviciul
            </button>

            <div class="service-price-short mb-3">
              De la <strong>25–45 lei / m²</strong><br>
              <span>în funcție de material și complexitate</span>
            </div>
          </div>
        </div>

        <!-- IMAGINE -->
        <div class="col-lg-5 offset-lg-1">
          <div class="service-hero-image-wrap">
            <img src="img/eko-klining-elit-1-770x560.jpg"
                 alt="Spălare și călcare perdele și draperii"
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

        <div class="col-lg-7 mb-4 mb-lg-0">
          <h2 class="service-section-title">Cum lucrăm?</h2>

          <p>
            Perdelele și draperiile acumulează praf, fum, alergeni și bacterii,
            însă sunt textile sensibile care necesită tratament special.
            Folosim programe de spălare dedicate, temperatură controlată,
            uscare corectă și călcare profesională cu abur.
          </p>

          <p>
            La cerere, echipa CleanIt se ocupă de tot procesul:
            demontare, spălare, călcare și montare la loc —
            fără efort din partea dvs.
          </p>

          <p class="mb-0">
            Serviciul este potrivit pentru apartamente, case, hoteluri,
            birouri, restaurante și spații comerciale.
          </p>
        </div>

        <div class="col-lg-5">
          <div class="service-info-card">
            <h3 class="service-info-title">Informații rapide</h3>

            <ul class="service-info-list">
              <li><strong>Durată:</strong> 24–72 ore</li>
              <li><strong>Ridicare & livrare:</strong> opțional</li>
              <li><strong>Metodă:</strong> spălare profesională + călcare cu abur</li>
              <li><strong>Materiale:</strong> voal, bumbac, catifea, blackout, in, satin</li>
            </ul>

            <div class="service-info-price">
              Preț orientativ: <strong>25–45 lei / m²</strong><br>
              <span>calcul exact după poze sau măsurători</span>
            </div>

            <button
              type="button"
              class="btn btn-block service-cta-btn mt-3"
              data-toggle="modal"
              data-target="#consultModal">
              Solicită ofertă exactă
            </button>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- DE CE CLEANIT -->
  <section class="service-why py-5">
    <div class="container">
      <h2 class="service-section-title text-center mb-4">
        De ce să alegi CleanIt?
      </h2>

      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Protejăm textilele</h3>
            <p>
              Proceduri sigure pentru materiale delicate —
              fără micșorare, decolorare sau deteriorare.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Igienizare completă</h3>
            <p>
              Eliminăm praf, acarieni, alergeni și mirosuri —
              ideal pentru copii și persoane sensibile.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Zero griji</h3>
            <p>
              Demontăm, spălăm, călcăm și montăm —
              tu te bucuri de rezultat.
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
            Perdelele tale au nevoie de reîmprospătare?
          </h2>
          <p class="mb-0 service-cta-banner-text">
            Trimite o poză pe WhatsApp și primești preț rapid și corect.
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



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

<script src="../leads.js"></script>

</body>
</html>
