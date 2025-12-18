<!doctype html>
<html lang="ro">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap 4 -->
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        crossorigin="anonymous">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <!-- Стили сайта (БЕЗ ../ если файл лежит рядом) -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="styles.css">
  <title>Curățenie generală în apartament | CLEANIT</title>
</head>
<body>

  <!-- МЕНЮ (подтягиваем menu.php) -->
  <?php require_once __DIR__ . '/menu.php'; ?>
<!-- MENIU GLOBAL -->


  <main class="service-page py-5">
    <div class="container">

      <!-- Хлебные крошки -->
      <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb bg-transparent px-0 mb-0">
          <li class="breadcrumb-item"><a href="../">Servicii</a></li>
          <li class="breadcrumb-item"><a href="../#persoane-fizice">Persoane fizice</a></li>
          <li class="breadcrumb-item active" aria-current="page">
            Curățenie generală în apartament
          </li>
        </ol>
      </nav>

      <div class="row">
        <!-- ТЕКСТ СЛЕВА -->
        <div class="col-lg-7 mb-4 mb-lg-0">
          <h1 class="hero-title mb-3">
            Curățenie generală în apartament
          </h1>

          <p class="lead font-weight-bold">
            Curățenia generală în locuința Dvs. este necesară pentru o viață confortabilă și sănătoasă.
            Echipa profesionistă și calificată de la CLEANIT are un plan clar al etapelor de curățenie,
            știind exact de unde să înceapă și cum să finalizeze tot procesul, asumându-și toată responsabilitatea
            pentru rezultatul final.
          </p>

          <p>
            Echipa noastră utilizează o gamă variată de produse profesionale și echipamente moderne,
            care îndepărtează eficient praful, murdăria persistentă și urmele de uzură de pe toate suprafețele.
            Scopul nostru este să economisim timpul dumneavoastră și să vă oferim o atmosferă proaspătă și plăcută
            acasă sau în apartamentul închiriat.
          </p>

          <h5 class="mt-4 mb-3 font-weight-bold">
            Serviciile de curățenie generală pentru apartament includ:
          </h5>

          <ul class="list-unstyled service-list">
            <li> Aerisirea spațiilor interioare</li>
            <li> Ștergerea prafului de pe mobilă, rafturi, pervazuri, electrocasnice</li>
            <li> Aspirarea covoarelor și a mochetelor</li>
            <li> Spălarea și curățarea pardoselilor (gresie, marmură, parchet, linoleum)</li>
            <li> Curățarea și dezinfectarea grupurilor sanitare</li>
            <li> Degresarea și curățarea bucătăriei (blaturi, chiuvetă, plită, faianță)</li>
            <li> Curățarea ușilor, tocurilor și plintelor</li>
            <li> Spălarea geamurilor (interior) și ștergerea glafurilor</li>
            <li> Ștergerea corpurilor de iluminat și a întrerupătoarelor</li>
            <li>Ventilația și odorizarea încăperilor</li>
          </ul>

          <p class="mt-3">
            La cerere, putem include și servicii suplimentare precum curățarea canapelei, scaunelor,
            saltelelor sau curățenie pe balcon / terasă.
          </p>
        </div>
<div id="faq-container"></div>
      </div>
    </div>

  <!-- ФУТЕР (подтягиваем footer.php) -->
  <div id="footer-container"><?php
include 'footer.php';
?></div>

  <!-- Подгружаем меню и футер через fetch -->
  <script>
    fetch("menu.php")
      .then(response => response.text())
      .then(html => {
        document.getElementById("menu-container").innerHTML = html;
      });

    fetch("faq.php")
      .then(response => response.text())  
      .then(html => {
        document.getElementById("faq-container").innerHTML = html;
      }); 
fetch("alteservicii.php")
      .then(response => response.text())
      .then(html => {
        document.getElementById("alteservicii-container").innerHTML = html;
      });
    fetch("footer.php")
      .then(response => response.text())
      .then(html => {
        document.getElementById("footer-container").innerHTML = html;
      });
  </script>

  <!-- Скрипты Bootstrap 4 -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
          crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
          crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
          crossorigin="anonymous"></script>
</body>
</html>