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

  <title>Уборка бассейна – CleanIt</title>
  <meta name="description"
        content="Профессиональная уборка и обслуживание бассейнов в Кишинёве – чистка чаши, бортов, воды, фильтрация, дезинфекция и подготовка к сезону.">
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EYJPRQZXNV">
</script>
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
          <span class="service-badge">Чистый и безопасный бассейн</span>
          <h1 class="service-hero-title">Уборка бассейна</h1>
          <p class="service-hero-subtitle">
            Полный уход за вашим бассейном: чистка чаши, бортов, воды,
            фильтров и дезинфицирующая обработка — для безопасного и комфортного отдыха.
          </p>

          <ul class="service-hero-list">
            <li>Механическая и химическая очистка</li>
            <li>Удаление налёта, водорослей и загрязнений</li>
            <li>Регулярное или разовое обслуживание</li>
            <li>Консультация по уходу за водой</li>
          </ul>

          <button
            type="button"
            class="btn service-cta-btn mt-3"
            data-toggle="modal"
            data-target="#consultModal">
            Заказать уборку бассейна
          </button>
        </div>

        <!-- ИЗОБРАЖЕНИЕ -->
        <div class="col-lg-5 offset-lg-1">
          <img src="img/piscina-clean.jpg"
               alt="Уборка бассейна в Кишинёве"
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
          <h2 class="service-section-title">Что мы делаем при уборке бассейна?</h2>

          <ul class="service-info-list">
            <li>Пылесос и чистка дна бассейна</li>
            <li>Чистка стен и линии воды</li>
            <li>Удаление листьев, насекомых и мусора с поверхности воды</li>
            <li>Чистка скиммеров и корзин для сбора мусора</li>
            <li>Промывка и обслуживание фильтра (где есть доступ)</li>
            <li>Нанесение дезинфицирующих средств (хлор / другие растворы по запросу)</li>
          </ul>

          <h2 class="service-section-title mt-4">Для кого эта услуга?</h2>

          <ul class="service-info-list">
            <li>Частные дома и виллы с собственным бассейном</li>
            <li>Бассейны, сдаваемые в аренду для мероприятий</li>
            <li>Пансионы, мини-отели, SPA-центры</li>
            <li>Сезонные уличные бассейны во дворе</li>
          </ul>

          <p class="mt-3">
            Регулярная уборка бассейна — это не только эстетика, но и здоровье,
            безопасность и продление срока службы оборудования.
          </p>
        </div>

        <!-- ПРАВАЯ КОЛОНКА — ЦЕНЫ -->
        <div class="col-lg-5">
          <div class="service-info-card">
            <h3 class="service-info-title">Ориентировочные цены</h3>

            <p class="service-note mt-2">
              Итоговая стоимость зависит от площади, степени загрязнения, доступа к бассейну
              и типа системы фильтрации.
            </p>

            <button
              type="button"
              class="btn btn-block service-cta-btn mt-3"
              data-toggle="modal"
              data-target="#consultModal">
              Запросить расчёт для вашего бассейна
            </button>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ПРЕИМУЩЕСТВА -->
  <section class="service-why py-5">
    <div class="container text-center">
      <h2 class="service-section-title mb-4">Почему не стоит делать всё самим?</h2>

      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Экономия времени</h3>
            <p>Мы занимаемся уборкой, а вы просто наслаждаетесь бассейном.</p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Профессиональный результат</h3>
            <p>Без налёта и мутной воды — только чистота и прозрачность.</p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Больше безопасности</h3>
            <p>Снижаем риск развития бактерий, водорослей и скользких бортиков.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ФИНАЛЬНЫЙ CTA -->
  <section class="service-cta-banner py-4">
    <div class="container d-flex flex-column flex-lg-row justify-content-between align-items-center">
      <div class="text-center text-lg-left mb-3 mb-lg-0">
        <h2 class="service-cta-banner-title">
          Ваш бассейн нуждается в профессиональной уборке?
        </h2>
        <p class="service-cta-banner-text">
          Оставьте номер телефона — мы свяжемся с вами и предложим варианты.
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

<!-- ЗАГРУЗКА МЕНЮ И ФУТЕРА -->


<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
	<!-- Общий обработчик всех форм (страница + модалка) -->
<script src="../leads.js"></script>

</body>
</html>
