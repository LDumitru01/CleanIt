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

  <!-- Ваши стили -->
  <link rel="stylesheet" href="../styles.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../styleprice.css" />

  <title>Профессиональная химчистка матрасов в Кишинёве – CleanIt</title>
  <meta name="description"
        content="Профессиональная химчистка матрасов в Кишинёве. Удаляем пятна, запахи, бактерии и аллергены. Чистка на дому, безопасно и эффективно.">

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
          <span class="service-badge">Здоровый сон и полная гигиена</span>

          <h1 class="service-hero-title">
            Профессиональная химчистка матрасов в Кишинёве
          </h1>

          <p class="service-hero-subtitle">
            Матрасы накапливают пыль, бактерии и аллергены, которые невозможно
            удалить обычной уборкой. Мы проводим глубокую профессиональную
            чистку матрасов на дому — быстро, безопасно и эффективно.
          </p>

          <ul class="service-hero-list">
            <li>Удаление пятен от пота, жидкостей, мочи и загрязнений</li>
            <li>Нейтрализация неприятных запахов</li>
            <li>Глубокая гигиеническая обработка от бактерий и клещей</li>
            <li>Чистка на дому — без демонтажа и транспортировки</li>
          </ul>

          <button
            type="button"
            class="btn service-cta-btn mt-3"
            data-toggle="modal"
            data-target="#consultModal">
            Заказать чистку матраса
          </button>
        </div>

        <!-- ИЗОБРАЖЕНИЕ -->
        <div class="col-lg-5 offset-lg-1">
          <img src="img/5f4ade04c96b492a0e745c7f6fcca5ae.jpeg"
               alt="Профессиональная химчистка матрасов"
               class="img-fluid service-hero-image" />
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
            Что входит в химчистку матраса
          </h2>

          <ul class="service-info-list">
            <li>Профессиональная глубокая пылеочистка</li>
            <li>Обработка сложных пятен специальными средствами</li>
            <li>Химчистка методом инжекции–экстракции</li>
            <li>Устранение неприятных запахов</li>
            <li>Гигиеническая обработка и снижение аллергенов</li>
          </ul>

          <h2 class="service-section-title mt-4">
            Когда рекомендуется чистка матраса
          </h2>

          <ul class="service-info-list">
            <li>При появлении пятен или стойкого запаха</li>
            <li>Если в доме есть дети или аллергики</li>
            <li>При наличии домашних животных</li>
            <li>1 раз в 6–12 месяцев для профилактики</li>
            <li>Перед продажей или сдачей жилья</li>
          </ul>

          <p class="mt-3">
            Мы используем только профессиональные средства,
            безопасные для детей и животных, которые эффективно очищают
            матрас, не повреждая его структуру.
          </p>
        </div>

        <!-- ПРАВАЯ КАРТОЧКА -->
        <div class="col-lg-5">
          <div class="service-info-card">
            <h3 class="service-info-title">Ориентировочные цены</h3>

            <p class="service-note mt-2">
              Итоговая стоимость зависит от размера матраса,
              степени загрязнения и типа пятен.
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
        Преимущества профессиональной чистки матрасов
      </h2>

      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Здоровый сон</h3>
            <p>Меньше аллергенов, пыли и бактерий — комфортный и спокойный сон.</p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Продление срока службы</h3>
            <p>Правильный уход помогает сохранить матрас в хорошем состоянии.</p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Свежесть в спальне</h3>
            <p>Устраняем неприятные запахи и создаём ощущение чистоты.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'servicii-section.php'; ?>

  <!-- ФИНАЛЬНЫЙ CTA -->
  <section class="service-cta-banner py-4">
    <div class="container d-flex flex-column flex-lg-row justify-content-between align-items-center">
      <div class="text-center text-lg-left mb-3 mb-lg-0">
        <h2 class="service-cta-banner-title">
          Хотите, чтобы матрас снова был чистым и гигиеничным?
        </h2>
        <p class="service-cta-banner-text">
          Оставьте заявку или позвоните нам — мы быстро рассчитаем точную стоимость.
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

<!-- LOAD MENU & FOOTER -->


<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>

<!-- Обработчик лидов -->
<script src="../leads.js"></script>

</body>
</html>
