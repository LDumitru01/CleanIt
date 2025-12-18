<!doctype html>
<html lang="ru">
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

  <!-- Global styles -->
  <link rel="stylesheet" href="../styles.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../styleprice.css" />

  <title>Промышленная уборка заводов, складов, ангаров и парковок – CleanIt</title>
  <meta name="description"
        content="Профессиональная промышленная уборка для заводов, складов, ангаров и парковок в Кишинёве. B2B-услуги, промышленное оборудование, обученный персонал, гибкий график 24/7.">

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

<!-- MENU -->
<?php require_once __DIR__ . '/menu.php'; ?>
<!-- MENIU GLOBAL -->


<main class="service-page">

  <!-- HERO -->
  <section class="service-hero py-5">
    <div class="container">
      <div class="row align-items-center">

        <!-- TEXT -->
        <div class="col-lg-6 mb-4 mb-lg-0">
          <span class="service-badge">B2B услуги · Промышленная уборка</span>

          <h1 class="service-hero-title">
            Профессиональная уборка заводов, складов, ангаров и парковок
          </h1>

          <p class="service-hero-subtitle">
            Комплексные решения по промышленной уборке для компаний,
            которым важны безопасность, бесперебойная работа
            и соблюдение стандартов охраны труда.
          </p>

          <ul class="service-hero-list">
            <li>Механизированная уборка промышленных полов</li>
            <li>Удаление технической пыли, загрязнений и масел</li>
            <li>Санитарная обработка раздевалок, офисов и санузлов</li>
            <li>Уборка подземных и открытых парковок</li>
            <li>Работа по графику клиента — 24/7</li>
          </ul>

          <div class="mt-4 d-flex flex-wrap align-items-center">
            <button
              type="button"
              class="btn service-cta-btn mr-3 mb-3"
              data-toggle="modal"
              data-target="#consultModal">
              Запросить корпоративное предложение
            </button>

            <div class="service-price-short mb-3">
              От <strong>20–40 лей / м²</strong><br />
              <span>персональный расчет после оценки</span>
            </div>
          </div>
        </div>

        <!-- IMAGE -->
        <div class="col-lg-5 offset-lg-1">
          <div class="service-hero-image-wrap">
            <img src="img/eko-klining-elit-1-770x560.jpg"
                 alt="Промышленная уборка складов и ангаров"
                 class="img-fluid service-hero-image" />
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- DETAILS -->
  <section class="service-details py-5">
    <div class="container">
      <div class="row">

        <!-- LEFT -->
        <div class="col-lg-7 mb-4 mb-lg-0">
          <h2 class="service-section-title">
            Промышленная уборка, ориентированная на эффективность бизнеса
          </h2>

          <p>
            Промышленные и логистические объекты требуют высокого уровня чистоты
            для обеспечения безопасности сотрудников, защиты оборудования
            и стабильной работы процессов.
          </p>

          <p>
            CleanIt предоставляет услуги промышленной уборки с учетом
            специфики каждого объекта: заводы, производственные ангары,
            логистические склады, коммерческие зоны и парковки.
          </p>

          <p>
            Мы подстраиваемся под ваш рабочий график — днем, ночью
            или в выходные, без остановки деятельности предприятия.
          </p>
        </div>

        <!-- CARD -->
        <div class="col-lg-5">
          <div class="service-info-card">
            <h3 class="service-info-title">В услугу входит:</h3>

            <ul class="service-info-list">
              <li>Промышленная пылеуборка и мойка больших площадей</li>
              <li>Удаление технических загрязнений и пыли</li>
              <li>Механическая и химическая обезжирка</li>
              <li>Уборка рамп, доков и логистических коридоров</li>
              <li>Санитарная обработка раздевалок, душевых и туалетов</li>
              <li>Сбор и вывоз отходов</li>
            </ul>

            <div class="service-info-price">
              Ориентировочная цена: <strong>20–40 лей / м²</strong><br />
              <span>точный расчет после бесплатной оценки</span>
            </div>

            <button
              type="button"
              class="btn btn-block service-cta-btn mt-3"
              data-toggle="modal"
              data-target="#consultModal">
              Запланировать бесплатную оценку
            </button>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- BENEFITS -->
  <section class="service-why py-5">
    <div class="container">
      <h2 class="service-section-title text-center mb-4">
        Почему компании выбирают CleanIt
      </h2>

      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Промышленное оборудование</h3>
            <p>
              Автоматические машины, промышленные пылесосы,
              профессиональные чистящие средства.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Квалифицированный персонал</h3>
            <p>
              Обученные сотрудники, строгие нормы безопасности,
              опыт работы в промышленных зонах.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Максимальная гибкость</h3>
            <p>
              Работаем тогда, когда вам удобно — 24/7.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'servicii-section.php'; ?>

  <!-- CTA -->
  <section class="service-cta-banner py-4">
    <div class="container">
      <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
        <div class="mb-3 mb-lg-0">
          <h2 class="service-cta-banner-title mb-1">
            Управляете складом, ангаром или заводом?
          </h2>
          <p class="mb-0 service-cta-banner-text">
            Свяжитесь с нами для бесплатной оценки и персонального предложения.
          </p>
        </div>

        <a href="https://wa.me/37362199439" class="btn service-cta-btn">
          Быстрый контакт WhatsApp
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
