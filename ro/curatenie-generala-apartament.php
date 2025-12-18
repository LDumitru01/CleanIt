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

  <!-- Stiluri site -->
  <link rel="stylesheet" href="../styles.css">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../styleprice.css">

  <title>Curățenie generală în apartament – CleanIt</title>
  <meta name="description"
        content="Curățenie generală profesională în apartamente din Chișinău. Serviciu complet înainte de mutare, după chiriași sau pentru reîmprospătarea locuinței. Echipă instruită, preț corect.">

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
<!-- MENIU -->



<main class="service-page">

  <!-- HERO -->
  <section class="service-hero py-5">
    <div class="container">
      <div class="row align-items-center">

        <!-- TEXT -->
        <div class="col-lg-6 mb-4 mb-lg-0">
          <span class="service-badge">Persoane fizice</span>

          <h1 class="service-hero-title">
            Curățenie generală în apartament
          </h1>

          <p class="service-hero-subtitle">
            Curățenie generală completă și profundă pentru apartamente –
            ideală înainte de mutare, după chiriași sau atunci când
            locuința are nevoie de o reîmprospătare totală.
          </p>

          <ul class="service-hero-list">
            <li>Curățarea generală și dezinfectarea băii și bucătăriei</li>
            <li>Ștergerea prafului de pe toate suprafețele și mobilierul</li>
            <li>Aspirarea și spălarea podelelor, inclusiv colțuri greu accesibile</li>
            <li>Curățarea ușilor, prizelor, plintelor și geamurilor la interior</li>
          </ul>

          <div class="mt-4 d-flex flex-wrap align-items-center">
            <button
              type="button"
              class="btn service-cta-btn mr-3 mb-3"
              data-toggle="modal"
              data-target="#consultModal">
              Comandă curățenia
            </button>

            <div class="service-price-short mb-3">
              De la <strong>50–80 lei / m²</strong><br>
              <span>în funcție de nivelul de murdărie</span>
            </div>
          </div>
        </div>

        <!-- IMAGINE -->
        <div class="col-lg-5 offset-lg-1">
          <div class="service-hero-image-wrap">
            <img src="img/woman-vacuuming-carpet-in-living-room.jpg"
                 alt="Curățenie generală în apartament"
                 class="img-fluid service-hero-image">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- DETALII SERVICIU -->
  <section class="service-details py-5">
    <div class="container">
      <div class="row">

        <div class="col-lg-7 mb-4 mb-lg-0">
          <h2 class="service-section-title">
            Ce include curățenia generală în apartament?
          </h2>

          <p>
            Curățenia generală este un serviciu complex, orientat spre
            fiecare detaliu al locuinței tale. Folosim echipamente
            profesionale și soluții eficiente pentru a elimina murdăria,
            praful și bacteriile acumulate în timp.
          </p>

          <p>
            Începem cu zonele cele mai solicitante – bucătăria și baia –
            apoi continuăm cu camerele, holurile și alte spații.
            Acordăm atenție inclusiv zonelor greu accesibile.
          </p>

          <p class="mb-0">
            Lista de lucrări poate fi adaptată în funcție de nevoile tale
            și de starea apartamentului.
          </p>
        </div>

        <!-- CARD INFO -->
        <div class="col-lg-5">
          <div class="service-info-card">
            <h3 class="service-info-title">Informații rapide</h3>

            <ul class="service-info-list">
              <li><strong>Durată:</strong> 4–8 ore (în funcție de suprafață)</li>
              <li><strong>Echipă:</strong> 2–4 persoane</li>
              <li><strong>Produse:</strong> profesionale, sigure pentru copii și animale</li>
              <li><strong>Program:</strong> zile lucrătoare și weekend</li>
            </ul>

            <div class="service-info-price">
              Preț orientativ: <strong>50–80 lei / m²</strong><br>
              <span>ofertă exactă după evaluare</span>
            </div>

            <button
              type="button"
              class="btn btn-block service-cta-btn mt-3"
              data-toggle="modal"
              data-target="#consultModal">
              Solicită ofertă personalizată
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
            <h3>Proceduri clare</h3>
            <p>
              Lucrăm după checklist-uri bine stabilite, astfel încât
              nimic important să nu fie omis.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Echipă instruită</h3>
            <p>
              Personal verificat, cu experiență în curățenie rezidențială.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Program flexibil</h3>
            <p>
              Ne adaptăm programului tău – dimineața, seara sau în weekend.
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
            Vrei un apartament curat fără stres?
          </h2>
          <p class="mb-0 service-cta-banner-text">
            Lasă-ne un număr de telefon și revenim rapid cu o ofertă.
          </p>
        </div>

        <button
          type="button"
          class="btn service-cta-btn"
          data-toggle="modal"
          data-target="#consultModal">
          Comandă consultație gratuită
        </button>
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
