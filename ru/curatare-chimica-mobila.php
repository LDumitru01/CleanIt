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

  <!-- Глобальные стили -->
  <link rel="stylesheet" href="../styles.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../styleprice.css" />


  <title>Химчистка мягкой и кожаной мебели – CleanIt</title>
  <meta name="description"
        content="Профессиональная химчистка диванов, кресел, стульев и кожаной мебели в Кишинёве. Удаляем пятна, запахи и глубокую грязь с помощью профессионального оборудования.">
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
          <span class="service-badge">Чистка мебели</span>
          <h1 class="service-hero-title">
            Химчистка мягкой и кожаной мебели
          </h1>
          <p class="service-hero-subtitle">
            Чистые диваны, кресла и стулья — без пятен и запахов. Возвращаем мебели свежесть,
            используя профессиональное оборудование и безопасные растворы.
          </p>

          <ul class="service-hero-list">
            <li>Удаление пятен (кофе, вино, жир, моча и др.)</li>
            <li>Глубокая очистка и дезинфекция</li>
            <li>Обслуживание на дому или в офисе</li>
            <li>Подходит для ткани, велюра, кожи и экокожи</li>
          </ul>

          <button
            type="button"
            class="btn service-cta-btn mt-3"
            data-toggle="modal"
            data-target="#consultModal">
            Заказать химчистку
          </button>
        </div>

        <!-- ИЗОБРАЖЕНИЕ -->
        <div class="col-lg-5 offset-lg-1">
          <img src="img/5f4ade04c96b492a0e745c7f6fcca5ae.jpeg"
               alt="Химчистка мягкой и кожаной мебели"
               class="img-fluid service-hero-image" />
        </div>

      </div>
    </div>
  </section>

  <!-- ДЕТАЛИ УСЛУГИ -->
  <section class="service-details py-5">
    <div class="container">
      <div class="row">

        <!-- LEFT -->
        <div class="col-lg-7 mb-4 mb-lg-0">
          <h2 class="service-section-title">Что мы чистим?</h2>

          <ul class="service-info-list">
            <li>Диваны (угловые, раскладные, модульные)</li>
            <li>Кресла, пуфы, офисные стулья</li>
            <li>Тканевые стулья (кухня, гостиная, конференц-залы)</li>
            <li>Кожаную мебель (диваны, кресла, стулья)</li>
            <li>Мебель в бизнес-пространствах, рецепциях, лобби, офисах</li>
          </ul>

          <h2 class="service-section-title mt-4">Как мы работаем?</h2>

          <ul class="service-info-list">
            <li>Оцениваем материал и тип загрязнений</li>
            <li>Глубокая сухая очистка пылесосом</li>
            <li>Наносим профессиональные растворы по типу ткани</li>
            <li>Экстракционная стирка (инжектор–экстрактор)</li>
            <li>Устранение запахов и дезинфекция</li>
            <li>Время сушки 4–8 часов, в зависимости от материала</li>
          </ul>

          <p class="mt-3">
            Для кожаной мебели используем специализированные средства для чистки,
            восстановления, увлажнения и защиты поверхности,
            сохраняя мягкость и естественный вид кожи.
          </p>
        </div>

        <!-- RIGHT CARD -->
        <div class="col-lg-5">
          <div class="service-info-card">
            <h3 class="service-info-title">Ориентировочные цены</h3>

            <ul class="service-price-list">
              <li>
                <span>Диван</span>
                <span>от 450 лей / шт.</span>
              </li>
              <li>
                <span>Кресло</span>
                <span>от 350 лей / шт.</span>
              </li>
              <li>
                <span>Тканевый стул</span>
                <span>от 70 лей / шт.</span>
              </li>
              <li>
                <span>Кожаная мебель</span>
                <span>от 650 лей / диван</span>
              </li>
            </ul>

            <p class="service-note mt-2">
              Итоговая цена зависит от состояния, размера, материала и количества предметов мебели.
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
      <h2 class="service-section-title mb-4">Преимущества профессиональной химчистки мебели</h2>

      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Гигиена и здоровье</h3>
            <p>Удаляем аллергены, пыль, клещей и бактерии, накапливающиеся в ткани.</p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Продление срока службы</h3>
            <p>Правильная чистка защищает ткань и кожу, предотвращая износ.</p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="service-why-card">
            <h3>Эстетика и имидж</h3>
            <p>Идеально для квартир, офисов, отелей, ресторанов и коммерческих помещений.</p>
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
          Мебель в пятнах или с неприятным запахом?
        </h2>
        <p class="service-cta-banner-text">
          Пришлите фото в WhatsApp или через форму — сразу скажем точную стоимость.
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
   <!-- ОТПРАВКА В GOOGLE SHEETS (для всех форм .js-lead-form, включая модалку) -->
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const scriptURL =
      "https://script.google.com/macros/s/AKfycbyle2esnFu5zlrheowxM4ZSBqAHu-LI4xBR7vceFlpFCgBU7W4CMe38O1WPa8glTf3o/exec";

    // Делегирование: ловим submit на всём документе
    document.addEventListener("submit", function (e) {
      const form = e.target;

      // Интересуют только формы с классом js-lead-form
      if (!form.classList.contains("js-lead-form")) return;

      e.preventDefault();

      const formData = new FormData(form);
      formData.append("page", window.location.href);

      fetch(scriptURL, {
        method: "POST",
        mode: "no-cors",   // важно для Google Apps Script
        body: formData
      })
        .then(() => {
          form.reset();

          // Если форма в модалке — закрываем модалку
          if (window.$ && $("#consultModal").modal) {
            $("#consultModal").modal("hide");
          }
        })
        .catch((err) => {
          console.error("Error!", err);
          alert("Ошибка при отправке. Попробуйте позже ❌");
        });
    });
  });
  </script>
<!-- Load menu & footer -->


<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
	<!-- Общий обработчик всех форм (страница + модалка) -->
<script src="../leads.js"></script>
</body>
</html>
