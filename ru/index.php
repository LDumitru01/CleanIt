<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>CLEANIT — Клининговая компания в Кишинёве</title>
  <meta name="description"
        content="Профессиональная клининговая компания в Кишинёве. Уборка квартир, домов, офисов, химчистка мебели и мойка окон. Быстро, безопасно и с гарантией.">

  <!-- Bootstrap 4 -->
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <!-- Styles -->
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../styles.css">
  <link rel="stylesheet" href="../styleprice.css">

  <!-- Google Analytics (GA4) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-EYJPRQZXNV"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-EYJPRQZXNV');
  </script>

  <!-- Google Tag Manager -->
  <script>
    (function(w,d,s,l,i){
      w[l]=w[l]||[];
      w[l].push({'gtm.start': new Date().getTime(), event:'gtm.js'});
      var f=d.getElementsByTagName(s)[0],
          j=d.createElement(s), dl=l!='dataLayer'?'&l='+l:'';
      j.async=true;
      j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
      f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NVKJMSR6');
  </script>
  <!-- End Google Tag Manager -->

</head>
<body>
  
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.php?id=GTM-NVKJMSR6"
            height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
  </noscript>

  <?php require_once __DIR__ . '/menu.php'; ?>

  <!-- HERO SECTION -->
  <section class="hero-section">
    <div class="container py-5">
      <div class="row align-items-center">

        <!-- ЛЕВЫЙ ТЕКСТ -->
        <div class="col-lg-6 mb-4 mb-lg-0">
          <h1 class="hero-title">УСЛУГИ ПО УБОРКЕ</h1>
          <p class="hero-subtitle">
            Профессиональная клининговая компания в Кишинёве — уборка быстро, безопасно и с гарантией качества.
          </p>
          <a href="tel:+37362199439" class="btn btn-hero mt-4 hero-call">
            +373 621 994 39
          </a>
        </div>

        <!-- ПРАВАЯ ФОРМА -->
        <div class="col-lg-5 offset-lg-1">
          <div class="hero-form-card p-4 p-md-5">
            <h3 class="hero-form-title mb-4">Бесплатная консультация</h3>

            <form class="js-lead-form" id="leadForm">
              <div class="form-group">
                <label for="nume">Ваше имя</label>
                <input type="text" class="form-control" id="nume" name="name" required>
              </div>

              <div class="form-group">
                <label for="telefon">Номер телефона</label>
                <input type="tel" class="form-control" id="telefon" name="phone" required>
              </div>

              <button type="submit" class="btn hero-submit-btn mt-3">
                Отправить заявку
              </button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- 3 ШАГА -->
  <section class="steps-section py-5">
    <div class="container">
      <div class="row align-items-center mb-5">
        <div class="col-lg-6">
          <p class="steps-kicker">С CLEANIT всё становится проще</p>
          <h2 class="steps-title">
            Чистота всего<br>в 3 простых шага
          </h2>
        </div>
        <div class="col-lg-6">
          <p class="steps-intro">
            Мы делаем процесс уборки максимально удобным: вы оставляете заявку, мы планируем выезд
            и наводим идеальный порядок. Без лишних забот, переписок и стресса.
          </p>
        </div>
      </div>

      <div class="row text-center">
        <!-- Шаг 1 -->
        <div class="col-md-4 mb-4">
          <div class="step-card">
            <div class="step-icon-wrap">
              <div class="step-circle">
                <i class="bi bi-search"></i>
              </div>
            </div>
            <h3 class="step-title">Выберите услугу</h3>
            <div class="step-line"></div>
            <p class="step-text">
              Посмотрите список услуг и выберите то, что нужно именно вам: квартира, дом, офис или коммерческое помещение.
            </p>
          </div>
        </div>

        <!-- Шаг 2 -->
        <div class="col-md-4 mb-4">
          <div class="step-card step-card-main">
            <div class="step-icon-wrap">
              <div class="step-circle">
                <i class="bi bi-calendar-check"></i>
              </div>
            </div>
            <h3 class="step-title">Назначьте удобное время</h3>
            <div class="step-line"></div>
            <p class="step-text">
              Свяжитесь с нами по телефону или оставьте заявку онлайн — согласуем дату и время уборки.
            </p>
            <a href="#consultModal"
               data-toggle="modal"
               class="btn btn-step-cta">
              Позвонить нам
            </a>
          </div>
        </div>

        <!-- Шаг 3 -->
        <div class="col-md-4 mb-4">
          <div class="step-card">
            <div class="step-icon-wrap">
              <div class="step-circle">
                <i class="bi bi-stars"></i>
              </div>
            </div>
            <h3 class="step-title">Наслаждайтесь чистотой</h3>
            <div class="step-line"></div>
            <p class="step-text">
              Команда CLEANIT всё сделает сама. Вы возвращаетесь в идеально чистое,
              свежее и аккуратное пространство.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- УСЛУГИ -->
  <section class="servicii-section py-5" id="servicii">
    <div class="container">
      <h2 class="servicii-title text-center mb-3">УСЛУГИ</h2>
      <p class="servicii-subtitle text-center mb-5">
        Профессиональная уборка квартир, домов, офисов и коммерческих помещений в Кишинёве.
      </p>

      <div class="row">

        <!-- Генеральная уборка квартиры -->
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="serviciu-card">
            <div class="serviciu-img-wrap">
              <img src="../img/96464869.jpg.webp" class="serviciu-img" alt="Генеральная уборка квартиры">
            </div>
            <a href="curatenie-generala-apartament" class="serviciu-card-link">
            <div class="serviciu-content">
              <h3 class="serviciu-title">Генеральная уборка квартиры</h3>
              <p class="serviciu-text">
                Глубокая уборка всех помещений — перед заселением, после гостей или просто «для идеальной чистоты».
              </p>
              <span class="serviciu-tag">ЖИЛЬЁ</span>
            </div>
            </a>
          </div>
        </div>

        <!-- Коммерческие помещения -->
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="serviciu-card">
            <div class="serviciu-img-wrap">
              <img src="../img/professional-naa-uborsica-s-pomos-u-pylesosa-v-ofise-1.jpg"
                   class="serviciu-img"
                   alt="Уборка коммерческих и производственных помещений">
            </div>
            <a href="curatenie-spatii-comerciale-industriale" class="serviciu-card-link">
              <div class="serviciu-content">
                <h3 class="serviciu-title">Коммерческие помещения</h3>
                <p class="serviciu-text">
                  Офисы, магазины, салоны, склады, производственные площади — поддерживающая и генеральная уборка.
                </p>
                <span class="serviciu-tag serviciu-tag-business">BUSINESS</span>
              </div>
            </a>
          </div>
        </div>

        <!-- Химчистка мягкой мебели -->
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="serviciu-card">
            <div class="serviciu-img-wrap">
              <img src="../img/5f4ade04c96b492a0e745c7f6fcca5ae.jpeg"
                   class="serviciu-img"
                   alt="Химчистка мягкой мебели">
            </div>
            <a href="curatare-chimica-mobila" class="serviciu-card-link">
              <div class="serviciu-content">
                <h3 class="serviciu-title">Химчистка мягкой мебели</h3>
                <p class="serviciu-text">
                  Диваны, кресла, стулья, матрасы — удаляем сложные пятна и неприятные запахи.
                </p>
                <span class="serviciu-tag serviciu-tag-textil">ТЕКСТИЛЬ</span>
              </div>
            </a>
          </div>
        </div>

        <!-- Мойка фасадов и окон -->
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="serviciu-card">
            <div class="serviciu-img-wrap">
              <img src="../img/c460b78c20411a0b7e75fbf8129de1fa.jpg"
                   class="serviciu-img"
                   alt="Мойка фасадов и стеклянных поверхностей">
            </div>
            <a href="spalare-fatade-stcila-etalbond" class="serviciu-card-link">
              <div class="serviciu-content">
                <h3 class="serviciu-title">Мойка фасадов и окон</h3>
                <p class="serviciu-text">
                  Профессиональная мойка окон, витрин и стеклянных фасадов, включая высотные работы.
                </p>
                <span class="serviciu-tag serviciu-tag-inaltime">EXTERIOR</span>
              </div>
            </a>
          </div>
        </div>

        <!-- Уборка после ремонта -->
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="serviciu-card">
            <div class="serviciu-img-wrap">
              <img src="../img/a63336a11dbb1da840593dbe799afe9f.jpg"
                   class="serviciu-img"
                   alt="Уборка после ремонта">
            </div>
            <a href="curatenie-dupa-reparatie" class="serviciu-card-link">
              <div class="serviciu-content">
                <h3 class="serviciu-title">Уборка после ремонта</h3>
                <p class="serviciu-text">
                  Удаляем строительную пыль, следы материалов и мусор — помещение готово к комфортной жизни.
                </p>
                <span class="serviciu-tag serviciu-tag-post">ПОСЛЕ РЕМОНТА</span>
              </div>
            </a>
          </div>
        </div>

        <!-- Уборка офисов -->
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="serviciu-card">
            <div class="serviciu-img-wrap">
              <img src="../img/sekret-podderzhivayushchej-uborki.jpg"
                   class="serviciu-img"
                   alt="Уборка офисов">
            </div>
            <a href="curatenie-generala-birouri" class="serviciu-card-link">
              <div class="serviciu-content">
                <h3 class="serviciu-title">Уборка офисов</h3>
                <p class="serviciu-text">
                  Ежедневная или регулярная уборка офисов — чистое рабочее пространство для команды и клиентов.
                </p>
                <span class="serviciu-tag serviciu-tag-office">ОФИСЫ</span>
              </div>
            </a>
          </div>
        </div>

        <!-- Уборка домов / вилл -->
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="serviciu-card">
            <div class="serviciu-img-wrap">
              <img src="../img/woman-vacuuming-carpet-in-living-room.jpg"
                   class="serviciu-img"
                   alt="Уборка домов и вилл">
            </div>
            <a href="curatenie-case-vile" class="serviciu-card-link">
              <div class="serviciu-content">
                <h3 class="serviciu-title">Уборка домов / вилл</h3>
                <p class="serviciu-text">
                  Премиальная уборка больших домов и вилл с учётом ваших пожеланий.
                </p>
                <span class="serviciu-tag serviciu-tag-home">PREMIUM HOME</span>
              </div>
            </a>
          </div>
        </div>

        <!-- Озонирование -->
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="serviciu-card">
            <div class="serviciu-img-wrap">
              <img src="../img/Ozonirovanie_vozduha.jpg"
                   class="serviciu-img"
                   alt="Дезинфекция озоном">
            </div>
            <a href="curatare-chimica-mobila" class="serviciu-card-link">
              <div class="serviciu-content">
                <h3 class="serviciu-title">Дезинфекция озоном O₃</h3>
                <p class="serviciu-text">
                  Удаление бактерий, вирусов, плесени и устойчивых запахов в помещениях и автомобиле.
                </p>
                <span class="serviciu-tag serviciu-tag-ozon">ДЕЗИНФЕКЦИЯ</span>
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ПОДДЕРЖИВАЮЩАЯ УБОРКА / МЕНАЖ -->
  <section class="menaj-section">
  <div class="container">
    <h2 class="menaj-title">Поддерживающая уборка / Менаж</h2>
    <p class="menaj-subtitle">
      Чтобы в доме или офисе всегда было чисто, вы можете выбрать удобный формат регулярной уборки —
      ежедневный, еженедельный или ежемесячный.
    </p>

    <div class="row">

      <!-- ЕЖЕДНЕВНАЯ -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="menaj-card">
          <h3 class="menaj-card-title">Ежедневная</h3>
          <p class="menaj-card-desc">Выполняется чаще одного раза в неделю</p>

          <div class="menaj-item">
            <div>
              <strong>Квартира 1–2 комнаты</strong>
              <span>до 3 часов · 1 клинер</span>
            </div>
            <div class="menaj-price">от 750 lei</div>
          </div>

          <div class="menaj-item">
            <div>
              <strong>Квартира 3+ комнаты</strong>
              <span>до 4 часов · 1 клинер</span>
            </div>
            <div class="menaj-price">от 850 lei</div>
          </div>
        </div>
      </div>

      <!-- ЕЖЕНЕДЕЛЬНАЯ -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="menaj-card">
          <h3 class="menaj-card-title">Еженедельная</h3>
          <p class="menaj-card-desc">Один раз в неделю</p>

          <div class="menaj-item">
            <div>
              <strong>Квартира 1–2 комнаты</strong>
              <span>до 5 часов · 1 клинер</span>
            </div>
            <div class="menaj-price">от 800 lei</div>
          </div>

          <div class="menaj-item">
            <div>
              <strong>Квартира 3+ комнаты</strong>
              <span>до 5 часов · 1 клинер</span>
            </div>
            <div class="menaj-price">от 1000 lei</div>
          </div>
        </div>
      </div>

      <!-- ЕЖЕМЕСЯЧНАЯ -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="menaj-card">
          <h3 class="menaj-card-title">Ежемесячная</h3>
          <p class="menaj-card-desc">Глубокая регулярная уборка</p>

          <div class="menaj-item">
            <div>
              <strong>Квартира 1–2 комнаты</strong>
              <span>до 3 часов · 2 клинера</span>
            </div>
            <div class="menaj-price">от 1200 lei</div>
          </div>

          <div class="menaj-item">
            <div>
              <strong>Квартира 3+ комнаты</strong>
              <span>до 4 часов · 2 клинера</span>
            </div>
            <div class="menaj-price">от 1750 lei</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

  <!-- О КОМПАНИИ -->
  <section class="about-company-section py-5">
    <div class="container">
      <div class="row align-items-center">

        <!-- ТЕКСТ -->
        <div class="col-lg-7 mb-4 mb-lg-0">
          <h2 class="about-title">Профессиональная клининговая компания</h2>
          <p class="about-text">
            CLEANIT — это команда профессионалов по уборке в Кишинёве, которая работает как с частными клиентами,
            так и с бизнесом. Мы используем современное оборудование и безопасную химию, чтобы создавать чистое
            и здоровое пространство для жизни и работы.
          </p>
          <p class="about-text">
            Мы берём на себя как разовые уборки после ремонта или переезда, так и регулярное обслуживание квартир,
            домов, офисов и коммерческих объектов. Наши клинеры проходят обучение и работают по стандартам качества,
            чтобы каждый раз результат был предсказуемо отличным.
          </p>

          <div class="about-buttons mt-4">
            <a href="#servicii" class="btn btn-about-primary">Услуги</a>
            <a href="#despre-noi" class="btn btn-about-secondary ml-2">О нас</a>
          </div>
        </div>

        <!-- КОЛЛАЖ -->
        <div class="col-lg-5">
          <div class="about-gallery">
            <div class="about-photo about-photo-large">
              <img src="../img/osobennosti-ezhednevnoj-uborki.jpg" alt="">
            </div>
            <div class="about-photo about-photo-small top">
              <img src="../img/96464869.jpg.webp" alt="">
            </div>
            <div class="about-photo about-photo-small bottom">
              <img src="../img/eko-klining-elit-1-770x560.jpg" alt="">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ПОЧЕМУ МЫ -->
  <section class="whyus-section py-5" id="despre-noi">
    <div class="container">
      <h2 class="whyus-title text-center mb-5">ПОЧЕМУ КЛИЕНТЫ ВЫБИРАЮТ CLEANIT</h2>

      <div class="row">

        <div class="col-md-4 mb-4">
          <div class="whyus-card">
            <div class="whyus-number">1</div>
            <h3 class="whyus-card-title">Ответственный подход</h3>
            <p class="whyus-text">
              Мы аккуратно относимся к вашей собственности и всегда работаем по чек-листам,
              чтобы ничего не упустить.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="whyus-card">
            <div class="whyus-number">2</div>
            <h3 class="whyus-card-title">Надёжная команда</h3>
            <p class="whyus-text">
              Сотрудники проходят обучение, инструктаж и контроль качества. Уборка выполняется быстро и аккуратно.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="whyus-card">
            <div class="whyus-number">3</div>
            <h3 class="whyus-card-title">Удобный график</h3>
            <p class="whyus-text">
              Подстраиваемся под ваш режим: работаем утром, днём и вечером,
              в будни и по выходным — по предварительной записи.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ОТЗЫВЫ -->
  <section class="feedback-section py-5">
    <div class="container">
      <h2 class="feedback-title text-center mb-5">ОТЗЫВЫ НАШИХ КЛИЕНТОВ</h2>

      <div id="feedbackCarousel" class="carousel slide" data-ride="carousel">

        <!-- индикаторы -->
        <ol class="carousel-indicators">
          <li data-target="#feedbackCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#feedbackCarousel" data-slide-to="1"></li>
        </ol>

        <div class="carousel-inner">

          <!-- СЛАЙД 1 -->
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-4 mb-4">
                <div class="feedback-card">
                  <div class="feedback-logo"><img src="../img/logoclean.png" alt="CleanIt"></div>
                  <p class="feedback-text">
                    После каждой вечеринки у меня дома вызываю CleanIt. Приезжают быстро и приводят всё в порядок.
                  </p>
                  <div class="feedback-name">Alexei Epur</div>
                </div>
              </div>

              <div class="col-md-4 mb-4">
                <div class="feedback-card">
                  <div class="feedback-logo"><img src="../img/logoclean.png" alt="CleanIt"></div>
                  <p class="feedback-text">
                    Быстро и профессионально реагируют на все запросы. Команда CleanIt — надёжные ребята,
                    дом всегда блестит.
                  </p>
                  <div class="feedback-name">Sanda Axinte</div>
                </div>
              </div>

              <div class="col-md-4 mb-4">
                <div class="feedback-card">
                  <div class="feedback-logo"><img src="../img/logoclean.png" alt="CleanIt"></div>
                  <p class="feedback-text">
                    Заказывали уборку офиса, остались очень довольны профессионализмом команды. Рекомендуем!
                  </p>
                  <div class="feedback-name">Dragomir Iancu</div>
                </div>
              </div>
            </div>
          </div>

          <!-- СЛАЙД 2 -->
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-4 mb-4">
                <div class="feedback-card">
                  <div class="feedback-logo"><img src="../img/logoclean.png" alt="CleanIt"></div>
                  <p class="feedback-text">
                    Уже три месяца пользуюсь CleanIt для уборки квартиры. Очень рада результатам —
                    всё аккуратно и чисто.
                  </p>
                  <div class="feedback-name">Olea Iastrebova</div>
                </div>
              </div>

              <div class="col-md-4 mb-4">
                <div class="feedback-card">
                  <div class="feedback-logo"><img src="../img/logoclean.png" alt="CleanIt"></div>
                  <p class="feedback-text">
                    Пунктуальны, внимательны к деталям и очень вежливы. Если нужна идеальная уборка — советую CleanIt.
                  </p>
                  <div class="feedback-name">Doina Rebreanu</div>
                </div>
              </div>

              <div class="col-md-4 mb-4">
                <div class="feedback-card">
                  <div class="feedback-logo"><img src="../img/logoclean.png" alt="CleanIt"></div>
                  <p class="feedback-text">
                    Делали уборку после ремонта — дом не узнать. Всё чисто, без пыли и следов стройки. Очень довольна.
                  </p>
                  <div class="feedback-name">Elena Morari</div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- БАННЕР: БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ -->
  <section class="banner-consultatie">
    <div class="banner-overlay">
      <div class="container">
        <div class="row justify-content-center">
          
          <div class="col-lg-6">
            <h2 class="banner-title text-center mb-4">Бесплатная консультация</h2>

            <form class="banner-form p-4 js-lead-form" id="leadFormBanner">
              <div class="form-group">
                <label for="nume-banner">Ваше имя</label>
                <input type="text" class="form-control" id="nume-banner" name="name" required>
              </div>

              <div class="form-group">
                <label for="telefon-banner">Номер телефона</label>
                <input type="tel" class="form-control" id="telefon-banner" name="phone" required>
              </div>

              <button type="submit" class="btn btn-hero-submit mt-3">
                Отправить заявку
              </button>
            </form>

          </div>

        </div>
      </div>
    </div>
  </section>
 
  <?php include 'footer.php'; ?>

  <!-- FOOTER -->
  <div id="footer-container"></div>

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

  <!-- ЗАГРУЗКА МЕНЮ И ФУТЕРА (русские версии) -->

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
          crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
          crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
          crossorigin="anonymous"></script>

  <script src="../leads.js"></script>

</body>
</html>

