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

  <!-- Общие стили -->
  <link rel="stylesheet" href="../styles.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../styleprice.css" />

  <title>Профессиональная уборка офисов в Кишинёве – CleanIt</title>
  <meta name="description"
        content="Профессиональная уборка офисов в Кишинёве. B2B-сервис с договором, фискальным счётом, гибким графиком и абонементами для компаний.">

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

<!-- МЕНЮ -->
<?php require_once __DIR__ . '/menu.php'; ?>
<!-- MENIU GLOBAL -->


<main class="service-page">

  <!-- HERO -->
  <section class="service-hero py-5">
    <div class="container">
      <div class="row align-items-center">

        <!-- ТЕКСТ -->
        <div class="col-lg-6 mb-4 mb-lg-0">
          <span class="service-badge">Для юридических лиц</span>

          <h1 class="service-hero-title">
            Профессиональная уборка офисов
          </h1>

          <p class="service-hero-subtitle">
            Чистый офис — это высокая продуктивность, комфорт сотрудников
            и профессиональный имидж компании. CleanIt предлагает
            специализированные клининговые решения для бизнеса.
          </p>

          <ul class="service-hero-list">
            <li>Ежедневная, еженедельная или абонентская уборка</li>
            <li>Очистка рабочих зон, общих пространств и ресепшн</li>
            <li>Полная санитарная обработка санузлов</li>
            <li>Уборка кухонь и coffee-зон</li>
            <li>Организованный вывоз мусора</li>
          </ul>

          <div class="mt-4 d-flex flex-wrap align-items-center">
            <button
              type="button"
              class="btn service-cta-btn mr-3 mb-3"
              data-toggle="modal"
              data-target="#consultModal">
              Получить предложение для офиса
            </button>

            <div class="service-price-short mb-3">
              От <strong>18–35 лей / м²</strong><br />
              <span>специальные условия для абонентов</span>
            </div>
          </div>
        </div>

        <!-- ИЗОБРАЖЕНИЕ -->
        <div class="col-lg-5 offset-lg-1">
          <div class="service-hero-image-wrap">
            <img src="img/woman-vacuuming-carpet-in-living-room.jpg"
                 alt="Профессиональная уборка офисов Кишинёв"
                 class="img-fluid service-hero-image" />
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ДЕТАЛИ -->
  <section class="service-details py-5">
    <div class="container">
      <div class="row">

        <div class="col-lg-7 mb-4 mb-lg-0">
          <h2 class="service-section-title">
            Клининговые решения для бизнеса
          </h2>

          <p>
            Наши услуги рассчитаны на офисы с активным рабочим процессом,
            где уборка должна быть регулярной, незаметной и эффективной.
          </p>

          <p>
            Мы обслуживаем компании из разных сфер: IT, call-центры,
            агентства, административные здания, частные клиники,
            coworking-пространства, шоурумы и учебные центры.
          </p>

          <p>
            График подбирается индивидуально — утром, вечером или вне
            рабочего времени, без вмешательства в деятельность команды.
          </p>
        </div>

        <!-- КАРТОЧКА -->
        <div class="col-lg-5">
          <div class="service-info-card">
            <h3 class="service-info-title">В услугу входит:</h3>

            <ul class="service-info-list">
              <li>Уборка рабочих мест, переговорных и ресепшн</li>
              <li>Дезинфекция часто используемых поверхностей</li>
              <li>Аккуратная очистка мониторов и оборудования</li>
              <li>Уборка кухонь и общих зон</li>
              <li>Пополнение расходных материалов (по запросу)</li>
            </ul>

            <div class="service-info-price">
              Ориентировочная цена: <strong>18–35 лей / м²</strong><br />
              <span>индивидуальный расчёт по частоте уборки</span>
            </div>

            <button
              type="button"
              class="btn btn-block service-cta-btn mt-3"
              data-toggle="modal"
              data-target="#consultModal">
              Получить персональное предложение
            </button>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ПРЕИМУЩЕСТВА -->
  <section class="service-why py-5">
    <div class="container">
      <h2 class="service-section-title text-center mb-4">
        Почему компании выбирают CleanIt
      </h2>

      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Договор и фискальный счёт</h3>
            <p>
              Полностью официальные B2B-услуги.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Проверенный персонал</h3>
            <p>
              Обученные и ответственные сотрудники.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Гибкий график</h3>
            <p>
              Работаем в удобное для вас время.
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
            Нужен надёжный партнёр по уборке офиса?
          </h2>
          <p class="mb-0 service-cta-banner-text">
            Отправьте план офиса или количество помещений — мы быстро подготовим расчёт.
          </p>
        </div>

        <a href="https://wa.me/37362199439" class="btn service-cta-btn">
          Связаться через WhatsApp
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
