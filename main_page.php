<div class="container-fluid slider">
  <?
  $slide_count = get_count_all_slide_url();
  if ($slide_count != 0) {
  ?>
    <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">


        <?php
        $i = 0;
        $slide_urls = get_all_slide_url("0,1");
        foreach ($slide_urls as $slide_url) :
        ?>

          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i; ?>" class="active" aria-current="true" aria-label="Slide <?php echo $i + 1; ?>"></button>

        <?php
          $i++;
        endforeach;
        ?>

        <?php
        $i = 1;
        $slide_urls = get_all_slide_url("1,9999999");
        foreach ($slide_urls as $slide_url) :
        ?>

          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i; ?>" aria-label="Slide <?php echo $i + 1; ?>"></button>

        <?php
          $i++;
        endforeach;
        ?>

      </div>
      <div class="carousel-inner">


        <?php
        $slide_urls = get_all_slide_url("0,1");
        foreach ($slide_urls as $slide_url) :
        ?>



          <div class="carousel-item active" data-bs-interval="5000">
            <img src="<?php echo $slide_url['slider_img_url']; ?>" class="d-block w-100" alt="...">
          </div>

        <?php endforeach; ?>


        <?php
        $slide_urls = get_all_slide_url("1,9999999");
        foreach ($slide_urls as $slide_url) :
        ?>


          <div class="carousel-item" data-bs-interval="5000">
            <img src="<?php echo $slide_url['slider_img_url']; ?>" class="d-block w-100" alt="...">
          </div>

      <?php
        endforeach;
      }
      ?>


      <!--<div class="carousel-item" data-bs-interval="5000">
        <img src="img/slide6.jfif" class="d-block w-100" alt="...">
      </div>
    </div>-->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Предыдущий</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Следующий</span>
      </button>
      </div>
    </div>
    <!--******************************************-->


    <main class="container-fluid" style="padding: 0;">



      <div class="container">
        <div class="privilege">
          <div class="row">
            <div class="privilege_title">Наши преимущества</div>
          </div>
          <div class="row">
            <ul class="privilege_list">
              <li class="privilege_item col-auto col-md-4">
                <img src="./img/privilege/priv-img1.webp" alt="" class="privilege_img">
                <div class="privilege_info">
                  <div class="privilege_subTitle">Сертифицированный дилер REHAU</div>
                  <div class="privilege_text">Мы являемся сертифицированным дилером мирового лидера по производству профиля – концерна REHAU, что обеспечивает качество по высшим европейским стандартам.</div>
                </div>
              </li>
              <li class="privilege_item col-auto col-md-4">
                <img src="./img/privilege/priv-img2.webp" alt="" class="privilege_img">
                <div class="privilege_info">
                  <div class="privilege_subTitle">Бесплатная доставка</div>
                  <div class="privilege_text">Стоимость нашей доставки = 0₽! Потому, получая высококачественные изделия, вы в комплекте получаете неплохой финансовый бонус, которого нет у других компаний.</div>
                </div>
              </li>
              <li class="privilege_item col-auto col-md-4">
                <img src="./img/privilege/priv-img3.webp" alt="" class="privilege_img">
                <div class="privilege_info">
                  <div class="privilege_subTitle">Окна в рассрочку</div>
                  <div class="privilege_text">Для клиентов, которые хотят установить пластиковые окна отличного качества, но при этом не имеют возможности сразу оплатить их стоимость.</div>
                </div>
              </li>
              <li class="privilege_item col-auto col-md-4">
                <img src="./img/privilege/priv-img4.webp" alt="" class="privilege_img">
                <div class="privilege_info">
                  <div class="privilege_subTitle">Скидки</div>
                  <div class="privilege_text">Всем нашим заказчикам мы выдаем скидочные карты постоянного клиента</div>
                </div>
              </li>
              <li class="privilege_item col-auto col-md-4">
                <img src="./img/privilege/priv-img5.webp" alt="" class="privilege_img">
                <div class="privilege_info">
                  <div class="privilege_subTitle">Собственное производство</div>
                  <div class="privilege_text">Высокое качество производимой продукции, профессиональный монтаж и творческий подход к работе позволяют нам занимать прочные позиции на рынке.</div>
                </div>
              </li>
              <li class="privilege_item col-auto col-md-4">
                <img src="./img/privilege/priv-img6.webp" alt="" class="privilege_img">
                <div class="privilege_info">
                  <div class="privilege_subTitle">Квалифицированное обслуживание</div>
                  <div class="privilege_text">Абсолютно все наши сотрудники прошли специальное обучение, участвовали на семинарах, проводимых ведущими мировыми брендами.</div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>



      <div class="container-xxl works">


        <?
        $count_photo = get_count_photos();
        $count_photo = $count_photo[0];
        if ($count_photo >= 3) {
        ?>
          <div class="block-title">Наши работы</div>

          <!--Big Carousel-->
          <div id="carouselExampleControls" class="carousel slide big-carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
              <?
              if ($count_photo >= 3) {
              ?>
                <div class="carousel-item active">
                  <div class="card-group">

                    <?php
                    $photos = get_all_photo("0,3");

                    foreach ($photos as $photo) :

                    ?>

                      <div class="card">
                        <a href="./?page=my_works">
                          <div class="w-image">
                            <img src="<?php echo $photo['photo_url']; ?>" class="card-img-top" alt="...">
                          </div>
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $photo['photo_title']; ?></h5>
                          </div>
                        </a>
                      </div>


                    <?php
                    endforeach;
                    ?>

                  </div>
                </div>
              <?
              }
              if ($count_photo >= 6) {
              ?>
                <div class="carousel-item">
                  <div class="card-group">

                    <?php

                    $photos = get_all_photo("3,3");

                    foreach ($photos as $photo) :

                    ?>

                      <div class="card">
                        <a href="./?page=my_works">
                          <div class="w-image">
                            <img src="<?php echo $photo['photo_url']; ?>" class="card-img-top" alt="...">
                          </div>
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $photo['photo_title']; ?></h5>
                          </div>
                        </a>
                      </div>


                    <?php
                    endforeach;
                    ?>

                  </div>
                </div>
              <?
              }
              if ($count_photo >= 9) {
              ?>
                <div class="carousel-item">
                  <div class="card-group">

                    <?php

                    $photos = get_all_photo("6,3");

                    foreach ($photos as $photo) :

                    ?>

                      <div class="card">
                        <a href="./?page=my_works">
                          <div class="w-image">
                            <img src="<?php echo $photo['photo_url']; ?>" class="card-img-top" alt="...">
                          </div>
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $photo['photo_title']; ?></h5>
                          </div>
                        </a>
                      </div>


                    <?php
                    endforeach;
                    ?>

                  </div>
                </div>
              <? } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Следующий</span>
            </button>
          </div>



          <!--Smart Carousel-->
          <div id="carouselExampleControls_smart" class="carousel slide smart-carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
              <?
              if ($count_photo >= 1) {
              ?>
                <div class="carousel-item active">

                  <?php

                  $photos = get_all_photo("0,1");

                  foreach ($photos as $photo) :

                  ?>

                    <div class="card">
                      <div class="w-image">
                        <img src="<?php echo $photo['photo_url']; ?>" class="card-img-top" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $photo['photo_title']; ?></h5>
                      </div>
                    </div>


                  <?php endforeach; ?>

                </div>


                <?php
              }
              if ($count_photo > 1) {
                $photos = get_all_photo("1,8");

                foreach ($photos as $photo) :

                ?>
                  <div class="carousel-item">

                    <div class="card">
                      <div class="w-image">
                        <img src="<?php echo $photo['photo_url']; ?>" class="card-img-top" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $photo['photo_title']; ?></h5>
                      </div>
                    </div>
                  </div>

              <?php
                endforeach;
              }
              ?>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls_smart" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls_smart" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Следующий</span>
            </button>
          </div>
        <? } ?>

      </div>

      <div class="container-fluid form-bg" style="min-height: 475px;; background: url(img/form-bg.webp); background-size: cover;
    background-position-y: center;">
        <div class="cont">
          <div>
            <div class="form-title">Вызвать замерщика бесплатно</div>


            <div>
              <div class="col form-subtitle">Оставьте свой номер телефона, и мы вам перезвоним</div>

              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Имя*" name="measuring_form_name_1" aria-label="Имя" required>
                </div>
                <div class="col">
                  <input type="tel" class="form-control" placeholder="Телефон*" aria-label="Телефон" name="measuring_form_phone_1" pattern="/^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/" required>
                  <label id="measuring_form_phone_1_err" style="color: red; font-size: 11px;"></label>
                </div>
              </div>
              <div class="row row-min">
                <div class="col">Нажимая кнопку, вы соглашаетесь на обработку персональных данных и <a href="./?page=rules" style="color: #50a0ff;">с политикой конфиденциальности</a></div>
                <div class="col button">
                  <button type="submit" class="btn btn-primary" id="measuring_1"><img src="img/pen.svg" alt="Кнопка записаться на замер"> Записаться на замер</button>
                </div>
              </div>
            </div>



          </div>
        </div>
      </div>