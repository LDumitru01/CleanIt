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

  <!-- Стили проекта -->
  <link rel="stylesheet" href="../styles.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../styleprice.css" />

  <title>Профессиональная уборка учебных заведений – CleanIt</title>
  <meta name="description"
        content="Профессиональная уборка детских садов, школ, лицеев и университетов в Кишинёве. Дезинфекция, санитарная обработка, регулярное обслуживание. Безопасно для детей. Бесплатная оценка.">

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
          <span class="service-badge">Юридическим лицам</span>

          <h1 class="service-hero-title">
            Профессиональная уборка учебных заведений
          </h1>

          <p class="service-hero-subtitle">
            Комплексные услуги по уборке и дезинфекции для детских садов,
            школ, лицеев, университетов и образовательных центров —
            безопасная и здоровая среда для детей и преподавателей.
          </p>

          <ul class="service-hero-list">
            <li>Регулярная и генеральная уборка учебных классов и лабораторий</li>
            <li>Санитарная обработка санузлов, раздевалок и коридоров</li>
            <li>Дезинфекция парт, мебели и часто используемых поверхностей</li>
            <li>Уборка столовых и пищевых зон</li>
            <li>Обслуживание спортивных залов и территорий</li>
          </ul>

          <div class="mt-4 d-flex flex-wrap align-items-center">
            <button
              type="button"
              class="btn service-cta-btn mr-3 mb-3"
              data-toggle="modal"
              data-target="#consultModal">
              Запросить коммерческое предложение
            </button>

            <div class="service-price-short mb-3">
              От <strong>22–40 лей / м²</strong><br />
              <span>в зависимости от площади и графика</span>
            </div>
          </div>
        </div>

        <!-- ИЗОБРАЖЕНИЕ -->
        <div class="col-lg-5 offset-lg-1">
          <div class="service-hero-image-wrap">
            <img src="img/eko-klining-elit-1-770x560.jpg"
                 alt="Уборка учебных заведений в Кишинёве"
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

        <!-- ЛЕВАЯ ЧАСТЬ -->
        <div class="col-lg-7 mb-4 mb-lg-0">
          <h2 class="service-section-title">
            Для кого предназначена услуга?
          </h2>

          <p>
            Услуга предназначена для государственных и частных учреждений:
            детских садов, школ, лицеев, университетов, after-school центров,
            спортивных школ, библиотек и учебных комплексов.
          </p>

          <p>
            Мы используем только сертифицированные, безопасные для детей и окружающей среды
            моющие и дезинфицирующие средства, полностью соответствующие санитарным нормам.
          </p>

          <p>
            Работаем в удобное для вас время — рано утром, вечером,
            в выходные дни или в период каникул, без вмешательства в учебный процесс.
          </p>
        </div>

        <!-- ПРАВАЯ ЧАСТЬ -->
        <div class="col-lg-5">
          <div class="service-info-card">
            <h3 class="service-info-title">Что входит в услугу:</h3>

            <ul class="service-info-list">
              <li>Подметание, пылесос и мытьё полов</li>
              <li>Протирка парт, стульев, шкафов, окон и перил</li>
              <li>Уборка и дезинфекция санузлов</li>
              <li>Обработка зон с высокой проходимостью</li>
              <li>Сбор и вывоз мусора</li>
              <li>Уборка входных зон и прилегающей территории</li>
            </ul>

            <div class="service-info-price">
              Ориентировочная цена: <strong>22–40 лей / м²</strong><br />
              <span>окончательная стоимость — после оценки</span>
            </div>

            <button
              type="button"
              class="btn btn-block service-cta-btn mt-3"
              data-toggle="modal"
              data-target="#consultModal">
              Заказать бесплатную оценку
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
        Почему учебные заведения выбирают CleanIt?
      </h2>

      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Безопасно для детей</h3>
            <p>
              Экологичные и сертифицированные средства без токсинов.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Проверенный персонал</h3>
            <p>
              Сотрудники обучены работе именно в образовательных учреждениях.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Гибкий график</h3>
            <p>
              Полная адаптация под расписание учебного заведения.
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
            Нужна уборка для учебного заведения?
          </h2>
          <p class="mb-0 service-cta-banner-text">
            Свяжитесь с нами для бесплатной оценки и персонального предложения.
          </p>
        </div>

        <a href="https://wa.me/37362199439" class="btn service-cta-btn">
          Получить консультацию
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
