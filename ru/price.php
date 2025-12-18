<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap 4 -->
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        crossorigin="anonymous">

  <!-- Bootstrap icons -->
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <!-- Твои стили -->
  <link rel="stylesheet" href="../styles.css">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../styleprice.css">

  <title>CLEANIT – Цены</title>
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

  <!-- ОБЩЕЕ МЕНЮ -->
  <?php require_once __DIR__ . '/menu.php'; ?>
<!-- MENIU GLOBAL -->


  <main class="prices-page py-5">
        <div class="container">

          <!-- Хлебные крошки -->
          <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb prices-breadcrumb">
              <li class="breadcrumb-item"><a href="./">Главная</a></li>
              <li class="breadcrumb-item active" aria-current="page">Цены</li>
            </ol>
          </nav>

          <!-- HERO: ОБЩЕЕ ОПИСАНИЕ ПРАЙСА -->
          <section class="price-hero mb-5">
            <div class="col-lg-7 px-0 pr-lg-4 mb-3 mb-lg-0">
              <h1 class="price-hero-title">Цены на услуги клининга в Кишинёве</h1>
              <p class="price-hero-subtitle">
                CleanIt предлагает профессиональные решения по уборке квартир, домов, офисов и коммерческих помещений.
                Стоимость зависит от площади, степени загрязнения и особенностей объекта.
              </p>
              <ul class="price-hero-list">
                <li><i class="bi bi-check-circle-fill"></i>Бесплатная предварительная оценка по телефону или на объекте</li>
                <li><i class="bi bi-check-circle-fill"></i>Обученная команда и профессиональное оборудование</li>
                <li><i class="bi bi-check-circle-fill"></i>Безопасные и эффективные моющие средства</li>
              </ul>
            </div>

            <div class="col-lg-5 px-0 pl-lg-4">
              <div class="price-block mb-0">
                <strong>Важно:</strong>
                <p class="price-text-block mt-2">
                  Указанные цены являются ориентировочными. Для точного расчёта свяжитесь с нами — мы посчитаем стоимость,
                  исходя из площади, сложности и частоты уборки.
                </p>
              </div>
            </div>
          </section>

          <!-- ОСНОВНЫЕ КАРТОЧКИ КАК У BRUTAL, НО ДРУГИЕ -->
          <section class="price-cards-section">
            <h2 class="price-cards-title">Основные пакеты услуг</h2>

            <div class="row">

              <!-- Curățenie generală -->
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="price-card">
                  <div>
                    <div class="price-card-icon">
                      <i class="bi bi-house-door-fill"></i>
                    </div>
                    <div class="price-card-title">Генеральная уборка</div>
                    <div class="price-card-desc">
                      Глубокая уборка квартир и домов — идеально перед заездом или время от времени.
                    </div>
                  </div>
                  <div>
                    <div class="price-card-value">от 40 леев/м²</div>
                    <div class="price-card-unit">генеральная уборка жилых помещений</div>
                    <span class="price-card-tag">Жильё</span>
                  </div>
                </div>
              </div>

              <!-- După reparații -->
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="price-card">
                  <div>
                    <div class="price-card-icon">
                      <i class="bi bi-tools"></i>
                    </div>
                    <div class="price-card-title">Уборка после ремонта</div>
                    <div class="price-card-desc">
                      Удаление строительной пыли, остатков материалов и следов отделки.
                    </div>
                  </div>
                  <div>
                    <div class="price-card-value">50–80 леев/м²</div>
                    <div class="price-card-unit">в зависимости от степени загрязнения</div>
                    <span class="price-card-tag">После ремонта</span>
                  </div>
                </div>
              </div>

              <!-- Întreținere / menaj -->
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="price-card">
                  <div>
                    <div class="price-card-icon">
                      <i class="bi bi-calendar-week"></i>
                    </div>
                    <div class="price-card-title">Поддерживающая уборка</div>
                    <div class="price-card-desc">
                      Регулярная уборка для поддержания порядка в квартирах и офисах.
                    </div>
                  </div>
                  <div>
                    <div class="price-card-value">25–40 леев/м²</div>
                    <div class="price-card-unit">в зависимости от частоты и объёма</div>
                    <span class="price-card-tag">Абонементы</span>
                  </div>
                </div>
              </div>

              <!-- Spălare geamuri -->
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="price-card">
                  <div>
                    <div class="price-card-icon">
                      <i class="bi bi-window"></i>
                    </div>
                    <div class="price-card-title">Мойка окон</div>
                    <div class="price-card-desc">
                      Профессиональная мойка окон, витрин и стеклянных фасадов.
                    </div>
                  </div>
                  <div>
                    <div class="price-card-value">20–55 леев/м²</div>
                    <div class="price-card-unit">интерьер &amp; экстерьер, витрины, фасады</div>
                    <span class="price-card-tag">Окна</span>
                  </div>
                </div>
              </div>

              <!-- Mobilier textil -->
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="price-card">
                  <div>
                    <div class="price-card-icon">
                      <i class="bi bi-sofa"></i>
                    </div>
                    <div class="price-card-title">Чистка мягкой мебели</div>
                    <div class="price-card-desc">
                      Химчистка диванов, кресел, матрасов, стульев и ковров.
                    </div>
                  </div>
                  <div>
                    <div class="price-card-value">70–850 леев</div>
                    <div class="price-card-unit">за единицу / м² (в зависимости от типа)</div>
                    <span class="price-card-tag">Текстиль</span>
                  </div>
                </div>
              </div>

              <!-- Mobilier din piele -->
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="price-card">
                  <div>
                    <div class="price-card-icon">
                      <i class="bi bi-droplet-half"></i>
                    </div>
                    <div class="price-card-title">Чистка кожаной мебели</div>
                    <div class="price-card-desc">
                      Бережная чистка и уход за кожаными диванами, креслами и стульями.
                    </div>
                  </div>
                  <div>
                    <div class="price-card-value">80–650 леев</div>
                    <div class="price-card-unit">за единицу</div>
                    <span class="price-card-tag">Кожа</span>
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

        <section class="price-details container">

      <h2 class="price-details-title">УБОРКА</h2>
      <div class="row">

        <div class="col-md-4 mb-4">
          <div class="price-card">
            <div class="price-card-icon bg-blue"><i class="bi bi-brush"></i></div>
            <h3 class="price-card-title">После ремонта</h3>
            <p class="price-card-desc">Удаление пыли и остатков после строительных работ.Работу выполняют 3+ клинера до 8 часов</p>
            <div class="price-tag">50–80 леев/м²</div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="price-card">
            <div class="price-card-icon bg-orange"><i class="bi bi-lightning-charge"></i></div>
            <h3 class="price-card-title">Срочная</h3>
            <p class="price-card-desc">Быстрая запись в этот же день.</p>
            <div class="price-tag">+20%</div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="price-card">
            <div class="price-card-icon bg-green"><i class="bi bi-house-door"></i></div>
            <h3 class="price-card-title">Генеральная</h3>
            <p class="price-card-desc">Глубокая уборка жилых помещений.Работу выполняют 3+ клинера до 8 часов</p>
            <div class="price-tag">50+ леев/м²</div>
          </div>
        </div>

      </div>


      <h2 class="price-details-title mt-5">ЧИСТКА МЕБЕЛИ</h2>
      <div class="row">

        <div class="col-md-4 mb-4">
          <div class="price-card">
            <div class="price-card-icon bg-purple"><i class="bi bi-sofa"></i></div>
            <h3 class="price-card-title">Диван</h3>
            <p class="price-card-desc">Профессиональная химчистка.</p>
            <div class="price-tag">от 450 леев/шт.</div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="price-card">
            <div class="price-card-icon bg-purple"><i class="bi bi-sofa"></i></div>
            <h3 class="price-card-title">Матрас</h3>
            <p class="price-card-desc">Профессиональная химчистка.</p>
            <div class="price-tag">от 450 леев/шт.</div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="price-card">
            <div class="price-card-icon bg-purple"><i class="bi bi-sofa"></i></div>
            <h3 class="price-card-title">Стирка и глажка штор/драпировок</h3>
            <p class="price-card-desc"></p>
            <div class="price-tag">от 25 леев/м²</div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="price-card">
            <div class="price-card-icon bg-yellow"><i class="bi bi-person-seat"></i></div>
            <h3 class="price-card-title">Кресло</h3>
            <p class="price-card-desc">Удаление пятен и запахов.</p>
            <div class="price-tag">от 350 леев/шт.</div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="price-card">
            <div class="price-card-icon bg-yellow"><i class="bi bi-person-seat"></i></div>
            <h3 class="price-card-title">Стул</h3>
            <p class="price-card-desc">Удаление пятен и запахов.</p>
            <div class="price-tag">от 70 леев/шт.</div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="price-card">
            <div class="price-card-icon bg-yellow"><i class="bi bi-g"></i></div>
            <h3 class="price-card-title">Ковры</h3>
            <p class="price-card-desc">Чистка методом экстракции.</p>
            <div class="price-tag">от 45 леев/м²</div>
          </div>
        </div>

      </div>

    </section>

        <section class="steps-section py-5">
          <div class="container">
            <div class="row align-items-center mb-5">
              <div class="col-lg-6">
                <p class="steps-kicker">С CLEANIT всё становится проще</p>
                <h2 class="steps-title">
                  Уборка — легко<br>всего в 3 шага
                </h2>
              </div>
              <div class="col-lg-6">
                <p class="steps-intro">
                  Наш процесс быстрый и удобный, чтобы вы могли наслаждаться чистым пространством
                  без лишних хлопот. Мы берём на себя все детали — от планирования
                  до идеальной чистоты.
                </p>
              </div>
            </div>

            <div class="row text-center">
              <!-- Pas 1 -->
              <div class="col-md-4 mb-4">
                <div class="step-card">
                  <div class="step-icon-wrap">
                    <div class="step-circle">
                      <i class="bi bi-search"></i>
                    </div>
                  </div>
                  <h3 class="step-title">Выберите нужную услугу</h3>
                  <div class="step-line"></div>
                  <p class="step-text">
                    Ознакомьтесь со списком наших услуг и выберите то, что вам нужно:
                    жильё, офис или коммерческое помещение.
                  </p>
                </div>
              </div>

              <!-- Pas 2 -->
              <div class="col-md-4 mb-4">
                <div class="step-card step-card-main">
                  <div class="step-icon-wrap">
                    <div class="step-circle">
                      <i class="bi bi-calendar-check"></i>
                    </div>
                  </div>
                  <h3 class="step-title">Назначьте визит</h3>
                  <div class="step-line"></div>
                  <p class="step-text">
                    Свяжитесь с нами по телефону или онлайн — мы согласуем удобные
                    дату и время для уборки.
                  </p>
                  <a href="#consultModal"
                    data-toggle="modal"
                    class="btn btn-step-cta">
                    Позвонить нам
                  </a>
                </div>
              </div>

              <!-- Pas 3 -->
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
                    Команда CLEANIT обо всём позаботится. Вы возвращаетесь в чистое,
                    проветренное и приятное пространство.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
    </div>
  </main>
  
  <?php include 'footer.php';?>


  <div id="footer-container"></div>


  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
          crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
          crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
          crossorigin="anonymous"></script>
			<!-- Общий обработчик всех форм (страница + модалка) -->
<script src="../leads.js"></script>


</body>
</html>
