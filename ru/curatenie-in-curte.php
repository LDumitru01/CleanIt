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

  <!-- Стили проекта -->
  <link rel="stylesheet" href="../styles.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../styleprice.css" />

  <title>Профессиональная уборка во дворе – CleanIt</title>
  <meta name="description"
        content="Профессиональная уборка дворов, террас, дорожек и наружных территорий в Кишинёве. Мойка под давлением, сбор листвы, грязи и мусора. Бесплатная оценка.">

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
          <span class="service-badge">Чистота на улице</span>

          <h1 class="service-hero-title">
            Профессиональная уборка во дворе
          </h1>

          <p class="service-hero-subtitle">
            Комплексная уборка дворов и наружных территорий — быстро,
            эффективно и без лишних хлопот для вас. Подходит для частных домов,
            бизнеса и коммерческих объектов.
          </p>

          <ul class="service-hero-list">
            <li>Сбор листьев, веток и растительных отходов</li>
            <li>Подметание, мойка и обезжиривание поверхностей</li>
            <li>Мойка под высоким давлением (плитка, бетон, террасы)</li>
            <li>Санитарная обработка общих зон и контейнеров</li>
          </ul>

          <button
            type="button"
            class="btn service-cta-btn mt-3"
            data-toggle="modal"
            data-target="#consultModal">
            Заказать уборку во дворе
          </button>
        </div>

        <!-- ИЗОБРАЖЕНИЕ -->
        <div class="col-lg-5 offset-lg-1">
          <img src="img/eko-klining-elit-1-770x560.jpg"
               alt="Профессиональная уборка двора в Кишинёве"
               class="img-fluid service-hero-image" />
        </div>

      </div>
    </div>
  </section>

  <!-- ДЕТАЛИ УСЛУГИ -->
  <section class="service-details py-5">
    <div class="container">
      <div class="row">

        <!-- ЛЕВАЯ КОЛОНКА -->
        <div class="col-lg-7 mb-4 mb-lg-0">
          <h2 class="service-section-title">
            Что входит в услугу уборки двора?
          </h2>

          <ul class="service-info-list">
            <li>Очистка тротуаров, дорожек, брусчатки и террас</li>
            <li>Профессиональное выдувание и сбор пыли и листвы</li>
            <li>Удаление грязи, песка, ила и мусора</li>
            <li>Мойка твердых поверхностей под давлением</li>
            <li>Очистка уличной мебели и аксессуаров</li>
            <li>Регулярное обслуживание по абонементу</li>
          </ul>

          <h2 class="service-section-title mt-4">
            Для кого подходит услуга?
          </h2>

          <ul class="service-info-list">
            <li>Частные дома, виллы и дворы</li>
            <li>Жилые комплексы и ТСЖ</li>
            <li>Террасы, рестораны и коммерческие пространства</li>
            <li>Объекты перед продажей или сдачей в аренду</li>
          </ul>

          <p class="mt-3">
            Используем профессиональное оборудование и безопасные,
            экологичные средства — без вреда для растений,
            животных и окружающей среды.
          </p>
        </div>

        <!-- ПРАВАЯ КОЛОНКА -->
        <div class="col-lg-5">
          <div class="service-info-card">
            <h3 class="service-info-title">Ориентировочные цены</h3>

            <p class="service-note mt-2">
              Итоговая стоимость зависит от площади, доступа,
              уровня загрязнения и объема работ.
            </p>

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
    <div class="container text-center">
      <h2 class="service-section-title mb-4">
        Почему выбирают CleanIt?
      </h2>

      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Быстро и организованно</h3>
            <p>
              Подготовленная команда и полный комплект оборудования.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Без лишних забот</h3>
            <p>
              Мы делаем всю работу — вы просто принимаете результат.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Чистота надолго</h3>
            <p>
              Ухоженный двор сразу после первой уборки.
            </p>
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
          Ваш двор может выглядеть идеально
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
        Отправить заявку
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
