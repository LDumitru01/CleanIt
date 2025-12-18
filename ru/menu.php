<!-- ===================== TOP BAR ===================== -->
<nav class="topbar">
  <div class="container d-flex justify-content-between align-items-center py-2">
    <div class="d-flex align-items-center">
      <a href="tel:+37362199439" class="top-icon-btn">
        <i class="bi bi-telephone-fill"></i>
      </a>

      <a href="tel:+37362199439" class="top-icon-btn secondary">
        <i class="bi bi-whatsapp"></i>
      </a>

      <div class="phone-text ml-3">
        <span>БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ</span><br>
        <a href="tel:+37362199439" class="phone-number">+373 621 994 39</a>
      </div>
    </div>
  </div>
</nav>

<!-- ===================== MAIN MENU ===================== -->
<nav class="navbar navbar-expand-lg main-menu">
  <div class="container">

    <!-- LOGO (identic RO) -->
    <a href="./" class="top-logo">
      <img src="../img/logoclean.png" alt="CLEANIT">
    </a>

    <!-- HAMBURGER -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu">
      <span class="navbar-toggler-icon">
        <i class="bi bi-list"></i>
      </span>
    </button>

    <div class="collapse navbar-collapse" id="mainMenu">
      <ul class="navbar-nav mx-auto">

        <!-- ФИЗИЧЕСКИЕ ЛИЦА -->
        <li class="nav-item dropdown megamenu">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
            ФИЗИЧЕСКИМ ЛИЦАМ
          </a>
          <div class="dropdown-menu megamenu-content">
            <div class="container">
              <ul class="mega-list">
                <li><a href="curatenie-generala-apartament">Генеральная уборка квартиры</a></li>
                <li><a href="curatenie-case-vile">Уборка домов и вилл</a></li>
                <li><a href="spalare-calcare-perdele-draperii">Стирка штор и тюля</a></li>
                <li><a href="curatare-profunda-bucatarie">Уборка кухни</a></li>
                <li><a href="curatenie-profesionala-baie-bloc-sanitar">Уборка санузла</a></li>
                <li><a href="curatenie-dupa-reparatie">Уборка после ремонта</a></li>
                <li><a href="curatenie-de-intretinere">Поддерживающая уборка</a></li>
              </ul>
            </div>
          </div>
        </li>

        <!-- КОМПАНИЯМ -->
        <li class="nav-item dropdown megamenu">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
            КОМПАНИЯМ
          </a>
          <div class="dropdown-menu megamenu-content">
            <div class="container">
              <ul class="mega-list">
                <li><a href="curatenie-generala-birouri">Уборка офисов</a></li>
                <li><a href="curatenie-spatii-hotiliere">Уборка гостиниц</a></li>
                <li><a href="curatenie-profesionala-restaurante">Уборка ресторанов</a></li>
                <li><a href="curatenie-institutii-de-invatamant">Уборка школ</a></li>
                <li><a href="curatenie-spatii-comerciale-industriale">Коммерческая уборка</a></li>
                <li><a href="curatenie-fabrici-depozite-parcari">Склады и фабрики</a></li>
              </ul>
            </div>
          </div>
        </li>

        <!-- ДРУГИЕ УСЛУГИ -->
        <li class="nav-item dropdown megamenu">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
            ДРУГИЕ УСЛУГИ
          </a>
          <div class="dropdown-menu megamenu-content">
            <div class="container">
              <ul class="mega-list">
                <li><a href="curatenie-scari-bloc-chisinau">Уборка подъездов</a></li>
                <li><a href="curatare-chimica-mobila">Химчистка мебели</a></li>
                <li><a href="spalare-fatade-stcila-etalbond">Мойка фасадов</a></li>
                <li><a href="curatare-chimica-saltele">Химчистка матрасов</a></li>
                <li><a href="curatenie-in-curte">Уборка дворов</a></li>
                <li><a href="spalare-geamuri">Мойка окон</a></li>
              </ul>
            </div>
          </div>
        </li>

        <!-- ЦЕНЫ -->
        <li class="nav-item">
          <a class="nav-link" href="price">ЦЕНЫ</a>
        </li>

        <!-- LANG MOBILE -->
        <li class="nav-item d-lg-none">
          <div class="lang-toggle d-flex">
            <a href="../ro/" class="lang-switch">RO</a>
            <a href="./" class="lang-switch active">RU</a>
          </div>
        </li>

      </ul>

      <!-- CTA DESKTOP -->
      <div class="d-none d-lg-block">
        <button class="btn btn-consult inner" data-toggle="modal" data-target="#consultModal">
          Бесплатная консультация
        </button>
      </div>

      <!-- LANG DESKTOP -->
      <div class="d-none d-lg-block ml-3">
        <div class="lang-toggle d-flex">
          <a href="../ro/" class="lang-switch">RO</a>
          <a href="./" class="lang-switch active">RU</a>
        </div>
      </div>

    </div>
  </div>
</nav>
<style>
/* =========================================================
   RESET AGRESIV PENTRU LOGO (ANULEAZĂ TOT CE EXISTĂ)
========================================================= */

@media (max-width: 991.98px) {

  /* =========================
     BARA ALBASTRĂ – FIXĂ
  ========================= */

  .navbar.main-menu {
    height: 100px !important;
    min-height: 100px !important;
    background: #1F6FA5 !important;
    padding: 0 !important;
  }

  .navbar.main-menu > .container {
    position: relative !important;
    height: 100% !important;
    min-height: 100% !important;
    display: flex !important;
    align-items: center !important;
    padding-left: 15px !important;
    padding-right: 15px !important;
  }

  /* =========================
     LOGO – RESET TOTAL
  ========================= */

  a.top-logo {
    position: absolute !important;
    left: 80% !important;
    top: 50% !important;
    transform: translate(-50%, -50%) !important;

    display: flex !important;
    align-items: center !important;
    justify-content: center !important;

    height: auto !important;
    max-height: none !important;
    min-height: 0 !important;

    margin: 0 !important;
    padding: 0 !important;

    line-height: 0 !important;
    font-size: 0 !important;

    z-index: 9999 !important;
  }

  /* =========================
     IMAGINE LOGO – DIMENSIUNE REALĂ
     (ANULEAZĂ height:165px)
  ========================= */

  a.top-logo img {
    min-height: 0 !important;
    height: 300px !important;
    width: auto !important;
    max-width: 200% !important;

    object-fit: contain !important;
    display: block !important;
  }

  /* =========================
     BUTON HAMBURGER
  ========================= */

  .navbar-toggler {
    position: relative !important;
    z-index: 10000 !important;
    border: 1px solid #ffffff !important;
    padding: 6px 10px !important;
  }

  .navbar-toggler-icon {
    filter: invert(1) !important;
  }

  /* =========================
     MENIU COLLAPSE – CADE SUB BARĂ
     (NU MAI MIȘCĂ LOGO-UL)
  ========================= */

  .navbar-collapse {
    position: absolute !important;
    top: 70px !important;
    left: 0 !important;
    right: 0 !important;

    background: #1F6FA5 !important;
    padding: 10px 15px !important;

    z-index: 9000 !important;
  }
}

/* =========================================================
   TELEFOANE MICI
========================================================= */

@media (max-width: 576px) {

  .navbar.main-menu {
    height: 100px !important;
    min-height: 100px !important;
  }

  .navbar-collapse {
    top: 64px !important;
  }

  a.top-logo img {
    height: 300px !important;
  }
}

</style>


