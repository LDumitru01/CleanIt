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

  <title>Curățenie profesională birouri în Chișinău – CleanIt</title>
  <meta name="description"
        content="Curățenie profesională pentru birouri în Chișinău. Servicii B2B cu contract, factură fiscală, program flexibil și abonamente lunare. Soluții curate pentru companii.">

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
          <span class="service-badge">Servicii pentru companii</span>

          <h1 class="service-hero-title">
            Curățenie profesională pentru birouri
          </h1>

          <p class="service-hero-subtitle">
            Un birou curat înseamnă productivitate mai mare, angajați mulțumiți
            și o imagine profesională impecabilă în fața clienților și partenerilor.
            CleanIt oferă servicii de curățenie dedicate exclusiv mediului corporate.
          </p>

          <ul class="service-hero-list">
            <li>Întreținere zilnică, săptămânală sau pe bază de abonament</li>
            <li>Curățare spații de lucru, zone comune și recepții</li>
            <li>Igienizare completă a grupurilor sanitare</li>
            <li>Curățare bucătării, zone coffee & dining</li>
            <li>Gestionare responsabilă a deșeurilor</li>
          </ul>

          <div class="mt-4 d-flex flex-wrap align-items-center">
            <button
              type="button"
              class="btn service-cta-btn mr-3 mb-3"
              data-toggle="modal"
              data-target="#consultModal">
              Cere ofertă pentru biroul tău
            </button>

            <div class="service-price-short mb-3">
              De la <strong>18–35 lei / m²</strong><br />
              <span>prețuri preferențiale pentru abonamente</span>
            </div>
          </div>
        </div>

        <!-- IMAGINE -->
        <div class="col-lg-5 offset-lg-1">
          <div class="service-hero-image-wrap">
            <img src="img/woman-vacuuming-carpet-in-living-room.jpg"
                 alt="Curățenie profesională birouri Chișinău"
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

        <div class="col-lg-7 mb-4 mb-lg-0">
          <h2 class="service-section-title">
            Soluții de curățenie adaptate fiecărei companii
          </h2>

          <p>
            Serviciile noastre sunt concepute pentru birouri active, cu trafic zilnic,
            unde curățenia trebuie să fie constantă, discretă și eficientă.
          </p>

          <p>
            Deservim companii din multiple domenii: IT, call-centere, agenții,
            sedii administrative, clinici private, coworking spaces, showroom-uri
            și centre de training.
          </p>

          <p>
            Stabilim programul în funcție de fluxul companiei tale — dimineața,
            seara sau în afara orelor de lucru, fără a afecta activitatea echipei.
          </p>
        </div>

        <!-- CARD -->
        <div class="col-lg-5">
          <div class="service-info-card">
            <h3 class="service-info-title">Ce include serviciul:</h3>

            <ul class="service-info-list">
              <li>Curățare birouri, săli de ședință & recepții</li>
              <li>Ștergere și dezinfectare suprafețe frecvent atinse</li>
              <li>Curățare monitoare și echipamente (cu atenție specială)</li>
              <li>Igienizare bucătării & spații comune</li>
              <li>Reumplere consumabile (la cerere)</li>
            </ul>

            <div class="service-info-price">
              Tarif orientativ: <strong>18–35 lei / m²</strong><br />
              <span>ofertă personalizată în funcție de frecvență</span>
            </div>

            <button
              type="button"
              class="btn btn-block service-cta-btn mt-3"
              data-toggle="modal"
              data-target="#consultModal">
              Primește ofertă personalizată
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
            <h3>Contract & factură fiscală</h3>
            <p>
              Servicii B2B 100% legale, transparente și conforme.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Echipă verificată</h3>
            <p>
              Personal instruit, responsabil și monitorizat constant.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Flexibilitate totală</h3>
            <p>
              Program adaptat nevoilor companiei tale.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'servicii-section.php' ?>
  <!-- CTA FINAL -->
  <section class="service-cta-banner py-4">
    <div class="container">
      <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
        <div class="mb-3 mb-lg-0">
          <h2 class="service-cta-banner-title mb-1">
            Cauți un partener stabil pentru curățenia biroului?
          </h2>
          <p class="mb-0 service-cta-banner-text">
            Trimite planul biroului sau numărul de încăperi și revenim rapid cu ofertă.
          </p>
        </div>

        <a href="https://wa.me/37362199439" class="btn service-cta-btn">
          Contact WhatsApp
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
