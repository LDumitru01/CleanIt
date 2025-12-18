<!doctype html>
<html lang="ru">
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

  <!-- Общие стили -->
  <link rel="stylesheet" href="../styles.css">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../styleprice.css">

  <title>Генеральная уборка домов и вилл в Кишинёве – CleanIt</title>
  <meta name="description"
        content="Профессиональная генеральная уборка домов и вилл в Кишинёве. Полная очистка всех помещений, ванные комнаты, кухни, лестницы и большие площади.">

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

<!-- ГЛОБАЛЬНОЕ МЕНЮ -->
<?php require_once __DIR__ . '/menu.php'; ?>
<!-- MENIU GLOBAL -->


<main class="service-page">

  <!-- HERO -->
  <section class="service-hero py-5">
    <div class="container">
      <div class="row align-items-center">

        <!-- ТЕКСТ -->
        <div class="col-lg-6 mb-4 mb-lg-0">
          <span class="service-badge">Частным клиентам</span>

          <h1 class="service-hero-title">
            Генеральная уборка домов и вилл
          </h1>

          <p class="service-hero-subtitle">
            Профессиональная уборка домов и вилл любой площади — идеально
            после переезда, перед приездом гостей или для полного обновления
            вашего жилого пространства.
          </p>

          <ul class="service-hero-list">
            <li>Тщательная уборка всех комнат, холлов и лестниц</li>
            <li>Мойка и дезинфекция ванных комнат и кухни</li>
            <li>Пылесос и влажная уборка полов, включая труднодоступные зоны</li>
            <li>Удаление пыли с мебели, осветительных приборов, плинтусов и дверей</li>
            <li>По запросу: уборка балкона, террасы, гаража</li>
          </ul>

          <div class="mt-4 d-flex flex-wrap align-items-center">
            <button
              type="button"
              class="btn service-cta-btn mr-3 mb-3"
              data-toggle="modal"
              data-target="#consultModal">
              Заказать уборку
            </button>

            <div class="service-price-short mb-3">
              От <strong>55–85 леев / м²</strong><br>
              <span>в зависимости от площади и степени загрязнения</span>
            </div>
          </div>
        </div>

        <!-- ИЗОБРАЖЕНИЕ -->
        <div class="col-lg-5 offset-lg-1">
          <div class="service-hero-image-wrap">
            <img src="img/woman-vacuuming-carpet-in-living-room.jpg"
                 alt="Генеральная уборка домов и вилл"
                 class="img-fluid service-hero-image">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ДЕТАЛИ УСЛУГИ -->
  <section class="service-details py-5">
    <div class="container">
      <div class="row">

        <!-- ЛЕВАЯ ЧАСТЬ -->
        <div class="col-lg-7 mb-4 mb-lg-0">
          <h2 class="service-section-title">
            Что включает уборка домов и вилл?
          </h2>

          <p>
            Уборка домов и вилл требует особого подхода из-за большой площади,
            нескольких уровней и разнообразия поверхностей.
            Мы работаем расширенной командой и используем профессиональное оборудование
            и специализированные средства для разных материалов:
            паркет, плитка, натуральный камень, дерево, нержавеющая сталь, стекло.
          </p>

          <p>
            Мы начинаем с ванных комнат и кухни, затем переходим к гостиной,
            спальням, кабинету, лестницам и холлам, чтобы весь дом стал чистым,
            свежим и комфортным для проживания.
          </p>

          <p class="mb-0">
            Вы можете присутствовать во время уборки или доверить нам ключ —
            и вернуться уже в полностью убранный дом.
          </p>
        </div>

        <!-- ПРАВАЯ КАРТОЧКА -->
        <div class="col-lg-5">
          <div class="service-info-card">
            <h3 class="service-info-title">Краткая информация</h3>

            <ul class="service-info-list">
              <li><strong>Продолжительность:</strong> 1 день или более</li>
              <li><strong>Команда:</strong> 3–6 специалистов</li>
              <li><strong>Химия:</strong> профессиональная, безопасная для поверхностей</li>
              <li><strong>Зоны:</strong> комнаты, холлы, лестницы, ванные, кухня, подсобные помещения</li>
            </ul>

            <div class="service-info-price">
              Ориентировочная цена: <strong>55–85 леев / м²</strong><br>
              <span>точная стоимость после короткой консультации или осмотра</span>
            </div>

            <button
              type="button"
              class="btn btn-block service-cta-btn mt-3"
              data-toggle="modal"
              data-target="#consultModal">
              Получить точную цену
            </button>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ПОЧЕМУ CLEANIT -->
  <section class="service-why py-5">
    <div class="container">
      <h2 class="service-section-title text-center mb-4">
        Почему стоит доверить уборку дома CleanIt?
      </h2>

      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Надёжная команда</h3>
            <p>
              Обученный и проверенный персонал с опытом работы
              в домах, виллах и таунхаусах.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Бережное отношение</h3>
            <p>
              Защищаем мебель и деликатные поверхности,
              используем подходящие материалы и средства.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Индивидуальный план</h3>
            <p>
              Уборка всего дома или отдельных зон —
              адаптируем список работ под ваши задачи.
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
            Хотите, чтобы ваш дом или вилла выглядели как новые?
          </h2>
          <p class="mb-0 service-cta-banner-text">
            Оставьте номер телефона — мы быстро свяжемся и предложим оптимальное решение.
          </p>
        </div>

        <button
          type="button"
          class="btn service-cta-btn"
          data-toggle="modal"
          data-target="#consultModal">
          Бесплатная консультация
        </button>
      </div>
    </div>
  </section>

</main>

<!-- FOOTER -->
<div id="footer-container"><?php
include 'footer.php';
?></div>

<!-- Загрузка меню и футера -->


<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>

<!-- Leads -->
<script src="../leads.js"></script>

</body>
</html>
