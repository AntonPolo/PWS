<div class="container">
    <div class="content-pages">
        <h1>Контакты офиса</h1>
        <div class="info-content">
            <table class="t-info">
                <tbody>
                    <tr>
                        <td>
                            <strong>Название компании</strong>
                        </td>
                        <td>
                            «<a href="/">Профессиональные Оконные Решения</a>»
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Адрес</strong>
                        </td>
                        <td>
                            <span>Россия, Москва, Тыры-пыры, 11 , этаж 11, офис 11</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>График работы</strong>
                        </td>
                        <td>
                            <span>ежедневно: 10:00-20:00</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Телефон</strong>
                        </td>
                        <td>
                            <a href="tel:+71234567890"><span>+7 (123) 456-78-90</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>E-mail</strong>
                        </td>
                        <td>
                            <a href="mailto:paiXXXXX@XXX.ru"><span>paiXXXXX@XXX.ru</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>WhatsApp</strong>
                        </td>
                        <td>
                            <a href="tel:+71234567890"><span>+7 (123) 456-78-90</span></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h1>Реквизиты компании</h1>
        <div class="info-content">
            <table class="t-info">
                <tbody>
                    <tr>
                        <td>
                            <strong>Полное наименование</strong>
                        </td>
                        <td>
                            <span>Общество с ограниченной ответственностью (ИЛИ КАКОЕ ТАМ) «Профессиональные Оконные Решения»</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Сокращенное наименование</strong>
                        </td>
                        <td>
                            <span>ООО «Профессиональные Оконные Решения»</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Местонахождение</strong>
                        </td>
                        <td>
                            <span>111111, город Москва, улица Тыры-пыры, дом 11, кв.11</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Почтовый адрес</strong>
                        </td>
                        <td>
                            <span>111111, город Москва, улица Тыры-пыры, дом 11, кв.11</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>ИНН</strong>
                        </td>
                        <td>
                            <span>1111111111</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>КПП</strong>
                        </td>
                        <td>
                            <span>1111111111</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>ОГРН</strong>
                        </td>
                        <td>
                            <span>1111111111</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Расчетный счет</strong>
                        </td>
                        <td>
                            <span>11111111111111111111</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Банк получателя</strong>
                        </td>
                        <td>
                            <span>ПАО АКБ "БАНК", г. Москва</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>БИК</strong>
                        </td>
                        <td>
                            <span>111111111</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>К/с</strong>
                        </td>
                        <td>
                            <span>1111111111111111111111</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="info-content">
            <h1>Наши работы</h1>

            <!--Big Carousel-->
            <div id="carouselExampleControls" class="carousel slide big-carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
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


                            <?php endforeach; ?>

                        </div>
                    </div>
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


                            <?php endforeach; ?>

                        </div>
                    </div>
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


                            <?php endforeach; ?>

                        </div>
                    </div>
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
            <div id="carouselExampleControls" class="carousel slide smart-carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
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

                    <?php endforeach; ?>

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
        </div>
    </div>
</div>