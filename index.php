<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <!--<link rel="stylesheet" href="./Constructor/Constructor_style.css">-->
  <link rel="stylesheet" href="Constructor/cons_style.css">
</head>

<body>

  <div id="header" class="" style="background-color: #F4F4F4;">
    <!--Сетка Лого-->
    <div class="container-xxl" style="background-color: #F4F4F4;">
      <div class="row align-items-center arr">

        <div class="col-md-4 logo">
          <div class="custom">
            <img src="img/logo.svg" class="img-fluid" alt="Logo">
          </div>
        </div>

        <div class="col-md-3 d-none d-md-block header1">
          <div class="custom">
            <p class="cl1">Установка и ремонт пластиковых окон, москитные сетки, остекление балконов в Москве и области.</p>
          </div>
        </div>

        <div class="col-md-3 header2">
          <div class="custom d-grid mx-auto">
            <p class="pcent">Оставте заявку на бесплатный <br> ↓замер↓</p>
            <button type="button" class="btn btn-dark" style="background-color: #50A0FF; border:none;">Заказать БЕСПЛАТНЫЙ замер</button>
            <p class="pcent down">Вам перезвонять в течении часа.</p>
          </div>
        </div>

        <div class="col-md-2 header3">
          <div class="custom kont">
            <ul class="list-unstyled">
              <li class="cl3"><img src="img/tel.svg" alt="telefone"> +7 (123) 456-78-90 </li>
              <li class="cl3"><img src="img/mail.svg" alt="mail"> paiXXXXX@XXX.ru</li>
              <li class="cl3"><img src="img/whatsapp.svg" alt="whatsapp"> +7 (123) 456-78-90</li>
            </ul>
          </div>
        </div>

      </div>
    </div>
    <!---->

    <div class="menu">
      <hr>
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;">
        <div class="container-xxl">
          <a class="navbar-brand d-lg-none" href="#">Панель навигации</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Меню</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-center flex-grow-1 pe-4 menu">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Главная</a>
                </li>
                <img src="img/Line.svg" class="d-none d-lg-block" alt="line">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Товары и Услуги
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" onclick="" href="./?page=1s&menu=services">Москитные сетки</a></li>
                    <li><a class="dropdown-item" onclick="" href="./?page=2s&menu=services">Пластиковые окна</a></li>
                    <li><a class="dropdown-item" onclick="" href="./?page=3s&menu=services">Остекление балконов</a></li>
                    <li><a class="dropdown-item" href="./?page=4s&menu=services">Регулеровка и ремонт окон пвх</a></li>
                    <li><a class="dropdown-item" href="./?page=5s&menu=services">Замена стеклопактов</a></li>
                  </ul>
                </li>
                <img src="img/Line.svg" class="d-none d-lg-block" alt="line">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Цены
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item"  href="#">Цены на пластиковые окна</a></li>
                    <li><a class="dropdown-item" href="#">Цены на остекление балконов</a></li>
                    <li><a class="dropdown-item" href="#">Цены на регулеровку и ремонт</a></li>
                    <li><a class="dropdown-item" href="#">Калькулятор маскитных сеток</a></li>
                    <li><a class="dropdown-item" href="#">Калькулятор стеклопакетов</a></li>
                  </ul>
                </li>
                <img src="img/Line.svg" class="d-none d-lg-block" alt="line">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    О нас
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Действие</a></li>
                    <li><a class="dropdown-item" href="#">Другое действие</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                  </ul>
                </li>
                <img src="img/Line.svg" class="d-none d-lg-block" alt="line">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#">Наши работы</a>
                </li>
                <img src="img/Line.svg" class="d-none d-lg-block" alt="line">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#">Конструктор заказа</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <hr>
  </div>
<br><br><br><br><br><br><br>
  <main class="container-xxl">
<div id="pp">
  <?
  require './menu_page/content.php';
  ?>
</div>
  </main>
<br><br><br><br><br><br><br>
  <div id="footer" class="d-none d-md-block" style="background-color: #363636;">
    <hr>
    <nav class="navbar navbar-dark" style="background-color: #363636;">
      <div class="container-xxl">

        <table class="table footer">
          <thead>
            <tr>
              <th class="thead">Контакты</th>
              <th class="thead">Услуги</th>
              <th class="thead">Цены</th>
              <th class="thead">Прочее</th>
            </tr>
          </thead>
          <tbody>
            <tr class="tbodyf">
              <td><img src="img/tel.svg" alt=""> +7 (123) 456-78-90</td>
              <td><a href="#">Москитные сетки</a></td>
              <td><a href="#">Цены на пластиковые окна</a></td>
              <td><a href="#">Конструктор заказа</a></td>
            </tr>
            <tr class="tbodyf">
              <td><img src="img/mail.svg" alt=""> paiXXXXXXX@XXX.ru</td>
              <td><a href="#">Пластиковые окна</a></td>
              <td><a href="#">Цены на остекление балконов</a></td>
              <td><a href="#">Наши работы</a></td>
            </tr>
            <tr class="tbodyf">
              <td><img src="img/whatsapp.svg" alt=""> WhatsApp +7 (123) 456-78-90</td>
              <td><a href="#">Остекление балконов</a></td>
              <td><a href="#">Цены на регулеровку и ремонт</a></td>
              <td><a href="#">О нас</a></td>
              
            </tr>
            <tr class="tbodyf">
              <td></td>
              <td><a href="#">Регулеровка и ремонт окон пвх</a></td>
              <td><a href="#">Калькулятор москитных сеток</a></td>
              <td><a href="admin/auth/auth.php">Администратор</a></td>
              <td></td>
            </tr>
            <tr class="tbodyf">
              <td></td>
              <td><a href="#">Замена стеклопакетов</a></td>
              <td><a href="#">Калькулятор стеклопакетов</a></td>
              
              <td></td>
            </tr>
          </tbody>
        </table>

      </div>
    </nav>
  </div>

  <script src="js/bootstrap.bundle.js"></script>
  <script src="./js/jQuery.js"></script>
  <script src="./js/functions.js"></script>
  <script src="./Calculators/get.js"></script>
  <script src="./Constructor/Constructor_func.js"></script>
</body>

</html>