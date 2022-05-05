<?php include('./php/DB.php'); ?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./css/works.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./Calculators/calc_style.css">
  <link rel="stylesheet" href="./Constructor/cons_style.css">
  <link rel="stylesheet" href="./css/pages-style.css">
  <link rel="stylesheet" href="./admin/adminStyle.css">
  <title>

    <?
    if (isset($_GET['menu'])) {
      $show_url = "./?page=" . $_GET['page'] . "&menu=" . $_GET['menu'];
    } else {
      $show_url = "./?page=" . $_GET['page'];
    }

    if ($show_url == "./?page=") {
      echo "Главная страница";
    } else {
      $titles = get_all_titles_by_menu_show_url($show_url);
      foreach ($titles as $title) {
        echo $title['Page_title'];
      }
    }
    ?>

  </title>

</head>

<body>

  <div id="header" class="" style="background-color: #F4F4F4;">
    <!--Сетка Лого-->

    <div class="container up-head">
      <div class="row row-cols-auto head">
        <div class="shapka">
          <div class="col-sm logo">
            <div class="headerlogo">
              <a href="#"><img src="/img/LOGO/logo.png" class="img" alt="Logo"></a>
            </div>
          </div>
          <div class="col-sm rehau-logo">
            <a href="#"><img src="img/LOGO/reh-shapka.png" class="img" alt="RehauLogo"></a>
          </div>
          <div class="col-sm shapka-item d-none d-xl-block">
            <div class="discrip">
              Установка и ремонт пластиковых окон, москитные сетки, остекление балконов в Москве и области.
            </div>
          </div>
          <div class="col-sm shapka-item">
            <div class="buttom-shapka">
              <span>Оставте заявку на бесплатный ↓замер↓</span>
              <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#Modal" style="background-color: #0075FF; border:none;">Заказать БЕСПЛАТНЫЙ замер</button>
              <span>Вам перезвонят в течении часа.</span>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content" style="background: url(img/form-bg-modal.jpg); background-size: cover; background-position-y: center;">
                  <div class="modal-header" style="border-bottom: 0;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="cont">
                      <div>
                        <div class="form-title">Вызвать замерщика бесплатно</div>
                        <div>
                          <div class="col form-subtitle">Оставьте свой номер телефона, и мы вам перезвоним</div>

                          <div class="row">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Имя*" name="measuring_form_name" aria-label="Имя">
                            </div>
                            <div class="col">
                              <input type="tel" class="form-control" placeholder="Телефон*" aria-label="Телефон" name="measuring_form_phone" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" required>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-9">Нажимая кнопку, вы соглашаетесь с условиями Политики конфиденциальности</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary" id="measuring" data-title="Нажимая кнопку, вы соглашаетесь с условиями Политики конфиденциальности"><img src="img/pen.svg" alt="Кнопка записаться на замер"> Записаться на замер</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Modal -->

          </div>
          <div class="col-sm shapka-item">
            <div class="contacts">
              <ul class="list-unstyled">
                <li class="cl3"><img src="img/tel.svg" alt="telefone"> +7 (123) 456-78-90 </li>
                <li class="cl3"><img src="img/mail.svg" alt="mail"> paiXXXXX@XXX.ru</li>
                <li class="cl3"><img src="img/whatsapp.svg" alt="whatsapp"> +7 (123) 456-78-90</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="menu">
      <!---->

      <div class="menu">
        <hr>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;">
          <div class="container-xxl">
            <a class="navbar-brand d-lg-none" href="#" style="padding: 0 10px;">
              <p class="cl3"><img src="img/whatsapp.svg" alt="whatsapp"> +7 (123) 456-78-90</p>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Меню</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-4 menu">
                  <li class="nav-item">
                    <a class="nav-link<?php if ($_GET['page'] == "main_page") {
                                        echo " active";
                                      } ?>" aria-current="page" href="./?page=main_page">Главная</a>
                  </li>
                  <img src="img/Line.svg" class="d-none d-lg-block" alt="line">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle<?php if ($_GET['menu'] == "services") {
                                                        echo " active";
                                                      } ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Товары и Услуги
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                      <?php $pages_data = get_pages_by_menu_id(1); ?>
                      <?php foreach ($pages_data as $page_data) :
                        $page_num = substr($page_data['show_url'], -15, 1);

                      ?>
                        <li><a class="dropdown-item<?php if ($_GET['page'] == $page_num && $_GET['menu'] == "services") {
                                                      echo " active_page";
                                                    } ?>" onclick="" href="<?php echo $page_data['show_url']; ?>"><?php echo $page_data['Page_title']; ?></a></li>
                      <?php endforeach; ?>

                    </ul>
                  </li>
                  <img src="img/Line.svg" class="d-none d-lg-block" alt="line">
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle<?php if ($_GET['menu'] == "prices") {
                                                                                    echo " active";
                                                                                  } ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Цены</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                      <?php $pages_data = get_pages_by_menu_id(2); ?>
                      <?php foreach ($pages_data as $page_data) :
                        $page_num = substr($page_data['show_url'], -13, 1);

                      ?>
                        <li><a class="dropdown-item<?php if ($_GET['page'] == $page_num && $_GET['menu'] == "prices") {
                                                      echo " active_page";
                                                    } ?>" href="<?php echo $page_data['show_url']; ?>"><?php echo $page_data['Page_title']; ?></a></li>
                      <?php endforeach; ?>

                      <li><a class="dropdown-item" href="./?page=constructor#calc_mn_id">Калькулятор маскитных сеток</a></li>
                      <li><a class="dropdown-item" href="./?page=constructor#calc_dgw_id">Калькулятор стеклопакетов</a></li>
                    </ul>
                  </li>
                  <img src="img/Line.svg" class="d-none d-lg-block" alt="line">
                  <li class="nav-item dropdown">
                    <a class="nav-link<?php if ($_GET['page'] == "about_us") {
                                        echo " active";
                                      } ?>" aria-current="page" href="./?page=about_us">О нас</a>
                  </li>
                  <img src="img/Line.svg" class="d-none d-lg-block" alt="line">
                  <li class="nav-item">
                    <a class="nav-link<?php if ($_GET['page'] == "my_works") {
                                        echo " active";
                                      } ?>" aria-current="page" href="./?page=my_works&go=0&page_num=1">Наши работы</a>
                  </li>
                  <img src="img/Line.svg" class="d-none d-lg-block" alt="line">
                  <li class="nav-item">
                    <a class="nav-link<?php if ($_GET['page'] == "constructor") {
                                        echo " active";
                                      } ?>" aria-current="page" href="./?page=constructor">Конструктор заказа</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <hr>
    </div>
  </div>


  <?
  if (isset($_GET['page']) && $_GET['page'] == 'main_page') {
    require './main_page.php';
  } else if (isset($_GET['menu']) && $_GET['menu'] == 'services') {
    require "./menu_page/services/" . $_GET['page'] . ".php";
  } else if (isset($_GET['menu']) && $_GET['menu'] == 'prices') {
    require "./menu_page/prices/" . $_GET['page'] . ".php";
  } else if (isset($_GET['menu']) && $_GET['menu'] == 'info') {
    require "./menu_page/info/" . $_GET['page'] . ".php";
  } else if (isset($_GET['page']) && $_GET['page'] == 'constructor') {
    require './constructor.php';
  } else if (isset($_GET['page']) && $_GET['page'] == 'my_works') {
    require './works.php';
  } else if (isset($_GET['page']) && $_GET['page'] == 'about_us') {
    require './about-us/aboutus.php';
  } else {
  ?>
    <script>
      url = "./?page=main_page";
      setTimeout('location.href=url', 100);
      this.href = 'javascript:void(0)';
    </script>
  <?
  }
  ?>



  <div id="footer" class="d-none d-md-block" style="background-color: #363636;">
    <hr>
    <nav class="navbar navbar-dark" style="background-color: #363636;">
      <div class="container-xxl">

        <!--<table class="table footer">
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
        </table>-->


        <section class="foott">
          <!-- Grid row -->
          <div class="row">
            <div class="col">
              <h2 class="footer-title">
                Контакты
              </h2>
              <p>
                <img src="img/tel.svg" alt=""> +7 (123) 456-78-90
              </p>
              <p>
                <img src="img/mail.svg" alt=""> paiXXXXXXX@XXX.ru
              </p>
              <p>
                <img src="img/whatsapp.svg" alt=""> WhatsApp +7 (123) 456-78-90
              </p>
            </div>
            <div class="col">
              <h2 class="footer-title">
                Услуги
              </h2>

              <?php $pages_data = get_pages_by_menu_id(1); ?>
              <?php foreach ($pages_data as $page_data) : ?>
                <p><a href="<?php echo $page_data['show_url']; ?>"><?php echo $page_data['Page_title']; ?></a></p>
              <?php endforeach; ?>

            </div>
            <div class="col">
              <h2 class="footer-title">
                Цены
              </h2>
              <?php $pages_data = get_pages_by_menu_id(2); ?>
              <?php foreach ($pages_data as $page_data) : ?>
                <p><a href="<?php echo $page_data['show_url']; ?>"><?php echo $page_data['Page_title']; ?></a></p>
              <?php endforeach; ?>
              <p>
                <a href="./?page=constructor#calc_mn_id">Калькулятор москитных сеток</a>
              </p>
              <p>
                <a href="./?page=constructor#calc_dgw_id">Калькулятор стеклопакетов</a>
              </p>
            </div>
            <div class="col">
              <h2 class="footer-title">
                Прочее
              </h2>
              <p>
                <a href="./?page=constructor">Конструктор заказа</a>
              </p>
              <p>
                <a href="./?page=my_works&go=0&page_num=1">Наши работы</a>
              </p>
              <p>
                <a href="./?page=about_us">О нас</a>
              </p>
              <p>
                <a href="admin/auth/auth.php">Администратор</a>
              </p>
            </div>
            <!-- Grid column -->
        </section>
      </div>
    </nav>
  </div>

  <div id="footer-smart" class="container-fluid" style="background-color: #363636;">
    <nav class="foot">
      <footer class="py-3">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="#" class="nav-link px-2" style="color: #ffffff;">Контакты</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2" style="color: #ffffff;">Услуги</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2" style="color: #ffffff;">Цены</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2" style="color: #ffffff;">Прочее</a></li>
        </ul>
        <p class="text-center" style="color: #ffffff;">&copy; 2022 Пофессиональные Оконные Решения</p>
      </footer>
    </nav>
  </div>

  <script src="js/bootstrap.bundle.js"></script>
  <script src="./js/jQuery.js"></script>
  <script src="./js/functions.js"></script>
  <script src="./Calculators/get.js"></script>
  <script src="./Constructor/Constructor_func.js"></script>
</body>

</html>