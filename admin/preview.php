<?php include('../php/DB.php');


$page_content_preview = $_POST['page_content_preview'];
$page_content_preview = str_replace('"',"'",$page_content_preview);
$page_title_preview = $_POST['page_title_preview'];

if(isset($_POST['file_url'])):
$file_url = $_POST['file_url'];
?>
<button id="back" onclick="window.history.back();" style="background: #fff;border: 1px solid #50a0ff; background: #50a0ff; color: white; height: 40px;">Назад</button>
<button id="saving_page" onclick="saving_page(`<? echo $page_title_preview; ?>`,`<? echo $page_content_preview; ?>`,`<? echo $file_url; ?>`)">Сохранить</button>


<?php 


elseif(isset($_POST['page_id_preview'])):

?>
<button id="back" onclick="window.history.back();" style="background: #fff;border: 1px solid #50a0ff; background: #50a0ff; color: white; height: 40px;">Назад</button>
<?php 
else: 

$menu_point_id = $_POST['menu_point_id'];

?>


<button id="back" onclick="window.history.back();" style="background: #fff;border: 1px solid #50a0ff; background: #50a0ff; color: white; height: 40px;">Назад</button>
<button id="saving_page" onclick="add_new_page(<?php echo $menu_point_id; ?>,'<?php echo $page_title_preview; ?>',`<?php echo $page_content_preview; ?>`)">Добавить страницу</button>

<?php endif; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/pages-style.css">
    <title>

        <?

        echo $page_title_preview;

        ?>



    </title>
    
</head>

<body>

    <div id="header" style="background-color: #F4F4F4;">
        <!--Сетка Лого-->

        <div class="container up-head">
            <div class="row row-cols-auto head">
                <div class="shapka">
                    <div class="col-sm logo">
                        <div class="headerlogo">
                            <a href="#"><img src="../img/LOGO.png" class="img" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col-sm rehau-logo">
                        <a href="#"><img src="../img/reh-shapka.png" class="img" alt="RehauLogo"></a>
                    </div>
                    <div class="col-sm shapka-item d-none d-xl-block">
                        <div class="discrip">
                            Установка и ремонт пластиковых окон, москитные сетки, остекление балконов в Москве и области.
                        </div>
                    </div>
                    <div class="col-sm shapka-item">
                        <div class="buttom-shapka">
                            <span>Оставте заявку на бесплатный ↓замер↓</span>
                            <button type="button" class="btn btn-dark" style="background-color: #50A0FF; border:none;">Заказать БЕСПЛАТНЫЙ замер</button>
                            <span>Вам перезвонят в течении часа.</span>
                        </div>
                    </div>
                    <div class="col-sm shapka-item">
                        <div class="contacts">
                            <ul class="list-unstyled">
                                <li class="cl3"><img src="../img/tel.svg" alt="telefone"> +7 (123) 456-78-90 </li>
                                <li class="cl3"><img src="../img/mail.svg" alt="mail"> paiXXXXX@XXX.ru</li>
                                <li class="cl3"><img src="../img/whatsapp.svg" alt="whatsapp"> +7 (123) 456-78-90</li>
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
                            <p class="cl3"><img src="../img/whatsapp.svg" alt="whatsapp"> +7 (123) 456-78-90</p>
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
                                        <a class="nav-link active" aria-current="page" href="#">Главная</a>
                                    </li>
                                    <img src="../img/Line.svg" class="d-none d-lg-block" alt="line">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Товары и Услуги
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                            <?php $pages_data = get_pages_by_menu_id(1); ?>
                                            <?php foreach ($pages_data as $page_data) : ?>
                                                <li><a class="dropdown-item" onclick="" href="#"><?php echo $page_data['Page_title']; ?></a></li>
                                            <?php endforeach; ?>

                                        </ul>
                                    </li>
                                    <img src="../img/Line.svg" class="d-none d-lg-block" alt="line">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Цены
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                            <?php $pages_data = get_pages_by_menu_id(2); ?>
                                            <?php foreach ($pages_data as $page_data) : ?>
                                                <li><a class="dropdown-item" href="#"><?php echo $page_data['Page_title']; ?></a></li>
                                            <?php endforeach; ?>

                                            <li><a class="dropdown-item" href="#">Калькулятор маскитных сеток</a></li>
                                            <li><a class="dropdown-item" href="#">Калькулятор стеклопакетов</a></li>
                                        </ul>
                                    </li>
                                    <img src="../img/Line.svg" class="d-none d-lg-block" alt="line">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            О нас
                                        </a>
                                    </li>
                                    <img src="../img/Line.svg" class="d-none d-lg-block" alt="line">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="#">Наши работы</a>
                                    </li>
                                    <img src="../img/Line.svg" class="d-none d-lg-block" alt="line">
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
    </div>

<div class="content">
    <?

    echo $page_content_preview;

    ?>
</div>

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
                <a href="#!">Конструктор заказа</a>
              </p>
              <p>
                <a href="#!">Наши работы</a>
              </p>
              <p>
                <a href="#!">О нас</a>
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

    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/jQuery.js"></script>
    <script src="./admin_fun.js"></script>
    <script src="../js/functions.js"></script>
    <script src="../Calculators/get.js"></script>
    <script src="../Constructor/Constructor_func.js"></script>
</body>

</html>