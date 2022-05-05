<?
include('../php/DB.php');
session_start();
if (isset($_SESSION['admin'])) :
?>




    <?php $pages = get_all_pages(); ?>
    <?php $menu_points = get_all_menu(); ?>




    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin-панель</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="./adminStyle.css">
    </head>

    <body>
        <div class="container admin">
            <!-- Формы редактирования главной страницы -->
            <?php if (isset($_GET['page_url']) && $_GET['page_url'] == "./index.php") : ?>

                <form action="./img.php" id="form_slider_img" enctype="multipart/form-data" method="post" style="margin-bottom: 20px;">
                    <p>Загрузка нового изображения для слайдера</p>

                    <div style="display: flex;gap: 20px;align-content: center;align-items: center;">
                        <input type="file" name="slider_img" id="slide-img" accept="image/jpg" style="display: none;">
                        <label for="slide-img" class="file" style="background: #50a0ff; border: 1px solid #50a0ff;height: 40px;color: #ffffff;padding: 5px 10px;display: flex;align-items: center; gap: 10px;cursor: pointer;" title="Выбрать изображение"><img src="/img/download.png" title="Выбрать изображение" width="24px" height="24px">
                            Выберите файл
                        </label>

                        <input type="submit" value="Отправить">
                    </div>
                </form>

                <p>Удаление изображения из слайдера</p>
                <div class="del_img" style="display: flex;">

                    <?php
                    $slide_urls = get_all_slide_url("");
                    foreach ($slide_urls as $slide_url) :
                    ?>

                        <div class="container">
                            <div>
                                <span class="close-image-icon">
                                    <button type="button" style="background: 0;border: 0;margin: 20px" onclick="deleteSlide('<?php echo $slide_url['slider_img_url']; ?>')" class="deleteSlide close" aria-label="Close" title="Удалить">
                                        <span aria-hidden="true" style="color: red;font-size: 40px">&times;</span>
                                    </button>
                                </span>
                                <img class="img-thumbnail img-fluid w-100" src="<?php echo $slide_url['slider_img_url']; ?>">
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>

                <div style="margin-top: 20px; display: grid; gap: 10px;">
                    <a href='./adminPanel.php'><button class="but" style="background: #50a0ff; border: 1px solid #50a0ff; height: 40px; color: #ffffff; padding: 5px 10px;">Назад</button></a>
                    <a href='auth/exit.php'><button class="but" style="background: #50a0ff; border: 1px solid #50a0ff; height: 40px; color: #ffffff; padding: 5px 10px;">Главная страница</button></a>
                </div>
                <!-- ----------------------------- -->

                <!-- Форма добавления нового фото в Наши работы -->
                <?php //elseif (isset($_GET['page_url']) && $_GET['page_url'] == "./my_works.php") : 
                ?>

                <!-- <form action="./img.php" id="form_slider_img" enctype="multipart/form-data" method="post">
                <p>Загрузка нового изображения для слайдера</p>
                <p><input type="file" name="slider_img" accept="image/jpg">
                    <input type="submit" value="Отправить">
                </p>
            </form>

            <a href='./adminPanel.php'><button>Назад</button></a> <br>
            <a href='auth/exit.php'><button>Главная страница</button></a>-->
                <!-- ----------------------------- -->

                <!-- Форма добавления drop down страницы -->
            <?php elseif (isset($_GET['menu_point_id'])) : ?>


                <form action="./preview.php" method="post">
                    <div class="add-title" style="--sidebar-min-width: 264px; display: grid; flex-direction: row; grid-template-columns: max(var(--sidebar-min-width), 21%) 1fr; margin-top: 25px;">
                        <label>Заголовок</label><input type="text" name="page_title_preview" id="page_title">
                        <input type="text" name="menu_point_id" style="display: none;" value="<?php echo $_GET['menu_point_id']; ?>">
                    </div>
                    <div class="add-text" style="--sidebar-min-width: 264px; display: grid; flex-direction: row; grid-template-columns: max(var(--sidebar-min-width), 21%) 1fr; margin-top: 25px;">
                        <label>Содержимое страницы (HTML)
                        <input type="submit" value="Предпоказ" style="margin-top: 20px;">
                        </label><textarea name="page_content_preview" style="width: 100%;"></textarea>
                        
                    </div>
                </form>
                <div style="margin-top: 40px; display: grid; gap: 10px;">
                    <a href='./adminPanel.php'><button class="but" style="background: #50a0ff; border: 1px solid #50a0ff; height: 40px; color: #ffffff; padding: 5px 10px; ">Назад</button></a>
                    <a href='./auth/exit.php'><button class="but" style="background: #50a0ff; border: 1px solid #50a0ff; height: 40px; color: #ffffff; padding: 5px 10px; ">Главная страница</button></a>
                </div>
                <!-- ----------------------------- -->

                <!-- Форма редактирования drop down страницы -->
            <?php elseif (isset($_GET['file_url']) && isset($_GET['Page_title'])) :
                $Page_title = $_GET['Page_title'];
                $pathToFile = $_GET['file_url'];
                $GetContentFile = file_get_contents("." . $_GET['file_url']);
            ?>

                <form action="./preview.php" method="post">
                    <div class="add-title" style="--sidebar-min-width: 264px; display: grid; flex-direction: row; grid-template-columns: max(var(--sidebar-min-width), 21%) 1fr; margin-top: 25px;">
                        <label>Заголовок</label><input type="text" name="page_title_preview" value="<?php echo $Page_title; ?>">
                        <input type="text" name="file_url" style="display: none;" value="<?php echo $pathToFile; ?>">
                    </div>
                    <div class="add-title" style="--sidebar-min-width: 264px; display: grid; flex-direction: row; grid-template-columns: max(var(--sidebar-min-width), 21%) 1fr; margin-top: 25px;">
                        <label>Содержимое страницы (HTML)
                        <input type="submit" value="Предпоказ" style="margin-top: 20px;">
                        </label><textarea name="page_content_preview" style="width: 100%; min-height: 75vh;"><?php echo $GetContentFile; ?></textarea>
                    </div>
                </form>
                <div style="margin-top: 20px; display: grid; gap: 10px;">
                    <a href='./adminPanel.php'><button class="but" style="background: #50a0ff; border: 1px solid #50a0ff; height: 40px; color: #ffffff; padding: 5px 10px;">Назад</button></a>
                    <a href='./auth/exit.php'><button class="but" style="background: #50a0ff; border: 1px solid #50a0ff; height: 40px; color: #ffffff; padding: 5px 10px;">Главная страница</button></a>
                </div>
                <!-- ----------------------------- -->

                <!-- Главная страница Админ-панели -->
            <?php else : ?>

                <h2>Таблица функционала основных страниц</h2>

                <table>
                    <tr>

                        <th>Заголовок</th>
                        <th>URL</th>

                    </tr>

                    <?php foreach ($pages as $page) :

                        if ($page['Page_title'] == "Главная страница") : ?>
                            <tr>

                                <td><?php echo $page['Page_title']; ?></td>
                                <td><?php echo $page['file_url']; ?></td>
                                <td><button class="edit_main_page" onclick="document.location='./adminPanel.php?page_url=<?php echo $page['file_url']; ?>'">Редактировать слайдер</button></td>

                            </tr>

                        <?php elseif ($page['Page_title'] == "Конструктор заказа") :

                            continue;

                        ?>

                        <?php /*document.location='./adminPanel.php?page_url=<?php echo $page['file_url']; ?>' */ elseif ($page['Page_title'] == "Наши работы") : ?>
                            <tr>

                                <td><?php echo $page['Page_title']; ?></td>
                                <td><?php echo $page['file_url']; ?></td>
                                <td><button class="edit_works_page">Добавить фото</button><button class="close_edit_works_page" style="display: none;">Закрыть форму</button></td>
                                <td>
                                    <div id="Photo_url" style="display: none;margin-bottom: 5px;"><label for="Photo_url" style="margin-right: 5px;">Ссылка на изображение</label><input type="text" name="Photo_url" placeholder="https://i.yapx.ru/RXyn5.jpg"></div>
                                    <div id="Photo_title" style="display: none;margin-bottom: 5px;"><label for="Photo_title" style="margin-right: 5px;">Описание изображения</label><input type="text" name="Photo_title" placeholder="Балконный блок"></div>
                                    <button class="add_new_photo" style="display: none;">Добавить</button>
                                </td>
                            </tr>

                </table>

                <h2>Таблица редактирования и удаления страниц из выпадающих списков меню</h2>
                <table>
                    <tr>
                        <th> </th>
                        <th>Заголовок</th>
                        <th>URL</th>
                        <th> </th>
                        <th> </th>
                    </tr>

                <?php else : ?>
                    <tr>
                        <td>

                            <form action="./preview.php" method="post">
                                <input type="text" name="page_id_preview" style="display: none;" value="<?php echo $page['id']; ?>">
                                <input type="text" name="page_title_preview" style="display: none;" value="<?php echo $page['Page_title']; ?>">
                                <?php

                                $GetContentFile = file_get_contents("." . $page['file_url']);
                                $GetContentFile = str_replace('"', "'", $GetContentFile);

                                ?>
                                <input type="text" name="page_content_preview" style="display: none;" value="<?php echo $GetContentFile; ?>">
                                <input type="submit" value="Показать страницу">
                            </form>

                        </td>
                        <td><?php echo $page['Page_title']; ?></td>
                        <td><?php echo $page['file_url']; ?></td>
                        <td><button class="edit" onclick="document.location='./adminPanel.php?file_url=<?php echo $page['file_url']; ?>&Page_title=<?php echo $page['Page_title']; ?>'">Редактировать</button></td>
                        <td><button class="delete" onclick="deletePage('<?php echo $page['file_url']; ?>','<?php echo $page['Page_title']; ?>')">Удалить</button></td>
                    </tr>

                <?php endif; ?>

            <?php endforeach; ?>
                </table>


                <h2>Таблица добавления страниц в выпадающие списки меню</h2>

                <table>
                    <tr>

                        <th>Пункт меню</th>
                    </tr>

                    <?php foreach ($menu_points as $menu_point) :
                        if ($menu_point['drop-down'] == 1) :
                    ?>
                            <tr>
                                <td><?php echo $menu_point['menu_title'] . " (drop down)"; ?></td>
                                <td><button class="add_page" onclick="document.location='./adminPanel.php?menu_point_id=<?php echo $menu_point['id']; ?>'">Добавить страницу</button></td>
                            </tr>

                        <?php endif; ?>
                    <?php endforeach; ?>
                </table>

                <a href="./auth/exit.php" style="display: flex;justify-content: center;"><button class="admin_exit">Выход</button></a>

            <?php endif; ?>

            <!-- ----------------------------- -->

            <script src="../js/jQuery.js"></script>
            <script src="../js/bootstrap.bundle.js"></script>
            <script src="./admin_fun.js"></script>

            <!-- Скрипт который делает адаптацию textarea под содержимое -->
            <script>
                $(document).on("input", "textarea", function() {
                    $(this).outerHeight(38).outerHeight(this.scrollHeight);
                });
            </script>
            <!-- ----------------------------- -->
        </div>
    </body>

    </html>

<? else : ?>

    <? header('Location: auth/singin.php'); ?>

<? endif; ?>