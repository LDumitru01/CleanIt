<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap -->
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" />

  <!-- Icons -->
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />

  <!-- Project styles -->
  <link rel="stylesheet" href="../styles.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../styleprice.css" />

  <title>Мойка окон в Кишинёве — без разводов | CleanIt</title>
  <meta name="description"
        content="Профессиональная мойка окон в Кишинёве: внутри и снаружи, витрины, балконы, фасады и коммерческие помещения. Без разводов, современное оборудование, быстрый результат.">

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
          <span class="service-badge">Идеальная прозрачность</span>

          <h1 class="service-hero-title">
            Мойка окон в Кишинёве
          </h1>

          <p class="service-hero-subtitle">
            Профессиональная мойка окон, витрин и стеклянных поверхностей
            для квартир, домов, офисов и бизнеса. Чисто, безопасно и без разводов.
          </p>

          <ul class="service-hero-list">
            <li>Мойка окон внутри и снаружи</li>
            <li>Без разводов, пятен и следов воды</li>
            <li>Доступ к высоким этажам</li>
            <li>Профессиональные и безопасные средства</li>
          </ul>

          <button
            type="button"
            class="btn service-cta-btn mt-3"
            data-toggle="modal"
            data-target="#consultModal">
            Заказать мойку окон
          </button>
        </div>

        <!-- IMAGE -->
        <div class="col-lg-5 offset-lg-1">
          <img src="img/c460b78c20411a0b7e75fbf8129de1fa.jpg"
               alt="Профессиональная мойка окон в Кишинёве"
               class="img-fluid service-hero-image" />
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
            Что входит в услугу?
          </h2>

          <ul class="service-info-list">
            <li>Мойка окон с внутренней и внешней стороны</li>
            <li>Удаление пыли, известкового налёта и следов насекомых</li>
            <li>Очистка рам, подоконников и откосов</li>
            <li>Полировка стекла для максимальной прозрачности</li>
            <li>Мойка витрин и фасадного остекления</li>
            <li>Очистка стеклянных балконов и перегородок</li>
          </ul>

          <h2 class="service-section-title mt-4">
            Где мы работаем?
          </h2>

          <ul class="service-info-list">
            <li>Квартиры, дома и виллы</li>
            <li>Офисы и бизнес-центры</li>
            <li>Магазины, рестораны и шоурумы</li>
            <li>Административные и коммерческие здания</li>
          </ul>

          <p class="mt-3">
            Используем очищенную воду, профессиональные инструменты
            и технологии, которые гарантируют идеальный результат без разводов.
          </p>
        </div>

        <!-- RIGHT -->
        <div class="col-lg-5">
          <div class="service-info-card">
            <h3 class="service-info-title">Ориентировочная стоимость</h3>

            <p class="service-note mt-2">
              Цена зависит от площади, доступа, этажа,
              степени загрязнения и типа стекла.
            </p>

            <button
              type="button"
              class="btn btn-block service-cta-btn mt-3"
              data-toggle="modal"
              data-target="#consultModal">
              Получить индивидуальное предложение
            </button>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- WHY -->
  <section class="service-why py-5">
    <div class="container text-center">
      <h2 class="service-section-title mb-4">
        Почему выбирают CleanIt?
      </h2>

      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Без разводов</h3>
            <p>Профессиональные методы и идеальная чистота стекла.</p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Быстро и безопасно</h3>
            <p>Работаем аккуратно, без риска и лишней грязи.</p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Опытная команда</h3>
            <p>Обученный персонал для любых условий и высот.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'servicii-section.php'; ?>

  <!-- CTA -->
  <section class="service-cta-banner py-4">
    <div class="container d-flex flex-column flex-lg-row justify-content-between align-items-center">
      <div class="text-center text-lg-left mb-3 mb-lg-0">
        <h2 class="service-cta-banner-title">
          Хотите чистые и светлые окна?
        </h2>
        <p class="service-cta-banner-text">
          Оставьте заявку — консультация и оценка бесплатно.
        </p>
      </div>

      <button
        type="button"
        class="btn service-cta-btn"
        data-toggle="modal"
        data-target="#consultModal">
        Оставить заявку
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
