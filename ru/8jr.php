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

  <!-- Глобальные стили -->
  <link rel="stylesheet" href="../styles.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../styleprice.css" />

  <title>Поддерживающая уборка для юридических лиц – CleanIt</title>
  <meta name="description"
        content="Поддерживающая уборка для офисов, коммерческих помещений и компаний в Кишинёве. Гибкие помесячные абонементы, удобное расписание, стабильная и ответственная команда.">
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
          <span class="service-badge">Юридические лица</span>
          <h1 class="service-hero-title">
            Поддерживающая уборка<br>для юридических лиц
          </h1>
          <p class="service-hero-subtitle">
            Офис, салон, клиника, магазин или промышленное помещение — мы
            поддерживаем чистоту на регулярной основе, чтобы ваша команда
            могла сосредоточиться на бизнесе, а не на уборке.
          </p>

          <ul class="service-hero-list">
            <li>Ежедневная, еженедельная уборка или индивидуальный график</li>
            <li>Стабильная, обученная и проверенная команда</li>
            <li>Профессиональная химия, безопасная для сотрудников и клиентов</li>
            <li>Долгосрочный контракт с прозрачными условиями</li>
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
              <span>в зависимости от частоты и специфики помещения</span>
            </div>
          </div>
        </div>

        <!-- ИЗОБРАЖЕНИЕ -->
        <div class="col-lg-5 offset-lg-1">
          <div class="service-hero-image-wrap">
            <img src="img/professional-naa-uborsica-s-pomos-u-pylesosa-v-ofise-1.jpg"
                 alt="Поддерживающая уборка для компаний"
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

        <!-- ТЕКСТ СЛЕВА -->
        <div class="col-lg-7 mb-4 mb-lg-0">
          <h2 class="service-section-title">Постоянная уборка для профессиональной рабочей среды</h2>
          <p>
            Первое впечатление важно — и для клиентов, и для сотрудников.
            Чистое пространство показывает заботу, порядок и профессионализм.
            Мы берём на себя регулярную уборку по графику, который согласуем вместе с вами.
          </p>
          <p>
            Оказываем услуги поддерживающей уборки для:
          </p>
          <ul class="service-info-list">
            <li>Офисов и административных помещений</li>
            <li>Магазинов и коммерческих пространств</li>
            <li>Клиник, салонов, медицинских центров</li>
            <li>Шоурумов и презентационных залов</li>
            <li>Производственных площадей, складов (административные и социальные зоны)</li>
          </ul>
          <p>
            Мы можем работать рано утром, поздно вечером или в выходные,
            чтобы не мешать рабочему процессу.
          </p>
        </div>

        <!-- КАРТОЧКА СПРАВА -->
        <div class="col-lg-5">
          <div class="service-info-card">
            <h3 class="service-info-title">Что обычно входит:</h3>
            <ul class="service-info-list">
              <li>Вытирание пыли с мебели и оборудования</li>
              <li>Пылесос и влажная уборка полов</li>
              <li>Уборка и дезинфекция санузлов</li>
              <li>Уборка кухни / зоны отдыха</li>
              <li>Протирка дверей, ручек, выключателей</li>
              <li>Опорожнение урн и замена мусорных пакетов</li>
              <li>Мойка внутренних стекол (по запросу)</li>
            </ul>

            <div class="service-info-price">
              <strong>Формат сотрудничества:</strong><br />
              Месячный абонемент с фиксированной ценой или оплата за визит —
              в зависимости от частоты (ежедневно, 2–3 раза в неделю, еженедельно).
            </div>

            <button
              type="button"
              class="btn btn-block service-cta-btn mt-3"
              data-toggle="modal"
              data-target="#consultModal">
              Назначить выезд для оценки
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
        Преимущества сотрудничества с CleanIt
      </h2>

      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Гибкий контракт</h3>
            <p>
              Подстраиваем график и объём работ под сезонность
              и реальные потребности без лишней бюрократии.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Стабильная команда</h3>
            <p>
              За вашим объектом закрепляется постоянная команда,
              чтобы качество и формат уборки оставались одинаковыми.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Профхимия и оборудование</h3>
            <p>
              Используем профессиональные средства с техническими картами
              и соблюдением норм гигиены и безопасности.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ФИНАЛЬНЫЙ CTA -->
  <section class="service-cta-banner py-4">
    <div class="container">
      <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
        <div class="mb-3 mb-lg-0">
          <h2 class="service-cta-banner-title mb-1">
            Нужен надёжный партнёр по уборке?
          </h2>
          <p class="mb-0 service-cta-banner-text">
            Отправьте нам данные компании — договоримся о бесплатном выезде для оценки.
          </p>
        </div>

        <button
          type="button"
          class="btn service-cta-btn"
          data-toggle="modal"
          data-target="#consultModal">
          Оставить контакты
        </button>
      </div>
    </div>
  </section>

</main>

<!-- ФУТЕР -->
<div id="footer-container"><?php
include 'footer.php';
?></div>

<!-- Загрузка меню и футера -->
<script>
  // меню
  fetch("menu.php")
    .then(r => r.text())
    .then(html => (document.getElementById("menu-container").innerHTML = html));

  // футер
  fetch("footer.php")
    .then(r => r.text())
    .then(html => (document.getElementById("footer-container").innerHTML = html));
</script>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
		<!-- Общий обработчик всех форм (страница + модалка) -->
<script src="../leads.js"></script>


</body>
</html>
