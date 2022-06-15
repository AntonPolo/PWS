<?php $pages = get_all_pages(); ?>
<?php $menu_points = get_all_menu(); ?>

<div class="container admin">
    <div style="display: flex;align-items: center;justify-content: space-between;">
        <form enctype="multipart/form-data" method="post" style="margin-bottom: 20px;">
            <p>Загрузка нового изображения для <strong>«Наши работы»</strong> (.webp)</p>

            <div class="inner_form_works" style="display: flex;gap: 20px;align-content: center;align-items: center; flex-wrap: wrap;">
                <!--<input type="file" name="works_img" id="works-img" accept="image/jpg" style="display: none;">
                        <label for="works-img" class="file" style="background: #50a0ff; border: 1px solid #50a0ff;height: 40px;color: #ffffff;padding: 5px 10px;display: flex;align-items: center; gap: 10px;cursor: pointer;" title="Выбрать изображение"><img src="/img/download.png" title="Выбрать изображение" width="24px" height="24px">
                            Выберите изображение
                        </label>-->

                <span style="background: #50a0ff; padding: 5px 10px; height: 40px; color: #fff; display: flex; align-items: center; cursor: pointer; max-width: 1107px;">
                    <img src="/img/download.png" alt="Выберите файл" style="height: 30px;">
                    <!--<label for="slide-img" style="cursor: pointer;">Выберите файл</label>-->
                    <input type="file" name="works_img" id="works-img" accept="image/webp">
                </span>
                <label for="works_img" id="works_img_message"></label>
                <input type="text" id="works_text" placeholder="Введите описание работы" style="height: 40px; border: 1px solid #50a0ff;">
                <label for="works_text" id="works_text_message"></label>
                <input type="submit" id="add_new_work" value="Добавить">
                <label for="add_new_work" id="add_new_work_message"></label>
            </div>
        </form>


    </div>
    <p>Удаление изображения из <strong>«Наши работы»</strong></p>

    <div class="row row-cols-1 row-cols-md-3 g-5">
        <?php

        $limit_start = 0;
        $limit_end = 10;
        if (isset($_GET['go'])) {
            $limit_start += $_GET['go'];
        }
        $photos = get_all_photo("$limit_start,$limit_end");
        foreach ($photos as $photo) :

        ?>

            <div class="col">
                <div class="card">
                    <div class="w-image">
                        <span class="close-image-icon">
                            <button type="button" style="background: 0;border: 0;margin: 10px" onclick="W_delete(`<?php echo $photo['photo_url']; ?>`)" class="delete_work close" aria-label="Close" title="Удалить">
                                <span aria-hidden="true" style="color: red;font-size: 30px">&times;</span>
                            </button>
                        </span>
                        <img src="<?php echo $photo['photo_url']; ?>" class="card-img-top" alt="...">
                    </div>

                    
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $photo['photo_title']; ?></h5>
                    </div>
                </div>
            </div>

        <?php
        endforeach;
        ?>



    </div>

    <?php
    $count_arr = get_count_photos();
    $count_1 = $count_arr[0];
    $count = $count_arr[0];
    $go = 10;
    $page_count = 0;
    for ($i = 1;; $i++) {
        if ($count > 0) {
            $page_count++;
        } else {
            break;
        }
        $count -= 10;
    }
    $page_num = $_GET['page_num'];
    ?>
    <nav aria-label="Page navigation" class="navigation">
        <ul class="pagination justify-content-center">
            <?
            if ($page_count > 2) {
            ?>




                <? if ($_GET['go'] > 0) : ?>
                    <li class="page-item">
                        <a class="page-link" href="./adminPanel.php?admin_page=works_page&go=<? print($_GET['go'] - 10); ?>&page_num=<? echo $_GET['page_num'] - 1; ?>">Прошлая</a>
                    </li>

                <? endif; ?>


                <?
                if ($page_num <= 4 || $page_count < 8) {
                ?>
                    <li class="page-item"><a class="page-link<?php if ($page_num == 1) {
                                                                    echo " active-num";
                                                                } ?>" href="./adminPanel.php?admin_page=works_page&go=0&page_num=1">1</a></li>
                <?
                } else {
                ?>
                    <li class="page-item"><a class="page-link<?php if ($page_num == 1) {
                                                                    echo " active-num";
                                                                } ?>" href="./adminPanel.php?admin_page=works_page&go=0&page_num=1">1</a></li>
                    <p style="margin: 10px 5px 0  5px;color: #0a58ca;">...</p>
                <?
                }
                ?>

                <?php

                for ($i = 2; $i <= $page_count - 1; $i++) {



                    if ($page_num > 4 && $page_num < ($page_count - 2)) {
                        if ($i <= ($page_num + 2) && $i >= ($page_num - 2)) {
                            echo "<li class='page-item'><a class='page-link";
                            if ($page_num == $i) {
                                echo " active-num";
                            }
                            echo "' href='./adminPanel.php?admin_page=works_page&go=$go&page_num=$i'>$i</a></li>";
                        }
                    } elseif ($page_num <= 4) {

                        if ($i >= 2 && $i <= 6) {
                            echo "<li class='page-item'><a class='page-link";
                            if ($page_num == $i) {
                                echo " active-num";
                            }
                            echo "' href='./adminPanel.php?admin_page=works_page&go=$go&page_num=$i'>$i</a></li>";
                        }
                    } elseif ($page_num > ($page_count - 3)) {

                        if ($i >= ($page_count - 5) && $i <= $page_count) {
                            echo "<li class='page-item'><a class='page-link";
                            if ($page_num == $i) {
                                echo " active-num";
                            }
                            echo "' href='./adminPanel.php?admin_page=works_page&go=$go&page_num=$i'>$i</a></li>";
                        }
                    }



                    $go += 10;
                }

                ?>



                <?
                if ($page_num > ($page_count - 4) || $page_count < 8) {
                ?>
                    <li class="page-item"><a class="page-link<?php if ($page_num == $page_count) {
                                                                    echo " active-num";
                                                                } ?>" href="./adminPanel.php?admin_page=works_page&go=<? echo $go; ?>&page_num=<? echo $page_count; ?>"><? echo $page_count; ?></a></li>
                <?
                } else {
                ?>
                    <p style="margin: 10px 5px 0 5px; color: #0068ff; align-self: self-end;">...</p>
                    <li class="page-item"><a class="page-link<?php if ($page_num == $page_count) {
                                                                    echo " active-num";
                                                                } ?>" href="./adminPanel.php?admin_page=works_page&go=<? echo $go; ?>&page_num=<? echo $page_count; ?>"><? echo $page_count; ?></a></li>

                <?
                }

                ?>




                <? if (($_GET['go'] + 10) < $count_1) : ?>
                    <li class="page-item">
                        <a class="page-link" href="./?admin_page=works_page&go=<? print($_GET['go'] + 10); ?>&page_num=<? echo $_GET['page_num'] + 1; ?>">Следующая</a>
                    </li>

                <? endif;
            } else {
                if ($_GET['go'] > 0) :
                ?>
                    <li class="page-item">
                        <a class="page-link" href="./adminPanel.php?admin_page=works_page&go=<? print($_GET['go'] - 10); ?>&page_num=<? echo $_GET['page_num'] - 1; ?>">Прошлая</a>
                    </li>
                <?
                endif;
                $go = 0;
                for ($i = 1; $i <= $page_count; $i++) {

                    echo "<li class='page-item'><a class='page-link";
                    if ($page_num == $i) {
                        echo " active-num";
                    }
                    echo "' href='./adminPanel.php?admin_page=works_page&go=$go&page_num=$i'>$i</a></li>";

                    $go += 10;
                }
                //Шаг вперёд
                if (($_GET['go'] + 10) < $count_1) :
                ?>
                    <li class="page-item">
                        <a class="page-link" href="./adminPanel.php?admin_page=works_page&go=<? print($_GET['go'] + 10); ?>&page_num=<? echo $_GET['page_num'] + 1; ?>">Следующая</a>
                    </li>
            <?
                endif;
            }
            ?>



        </ul>
    </nav>


</div>