<?php
$pages = get_all_pages();
$menu_points = get_all_menu();
?>

<h3>ОСНОВНОЕ</h3>

<table>
    <tr>

        <th>Заголовок</th>
        <th>URL</th>

    </tr>

    <?php foreach ($pages as $page) :

        if ($page['Page_title'] == "Главная страница - Профессиональные оконные решения") : ?>
            <tr>

                <td><?php echo $page['Page_title']; ?></td>
                <td><?php echo $page['file_url']; ?></td>
                <td><button class="edit_main_page" onclick="document.location='./adminPanel.php?admin_page=admin_slider'">Редактировать слайдер</button></td>

            </tr>
        <?php elseif ($page['Page_title'] == "Конструктор заказа - Профессиональные оконные решения") :
            continue;
        ?>
        <?php elseif ($page['Page_title'] == "Наши работы - Профессиональные оконные решения") : ?>
            <tr>
                <td><?php echo $page['Page_title']; ?></td>
                <td><?php echo $page['file_url']; ?></td>
                <td>
                    <button class="edit_works_page" onclick="document.location='./adminPanel.php?admin_page=works_page&go=0&page_num=1'">Добавить фото</button>
                </td>
            </tr>

</table>

<h3>РЕДАКТИРОВАНИЕ И УДАЛЕНИЕ</h3>
<table>
    <tr>
        <th> </th>
        <th>Заголовок</th>
        <th>URL</th>
        <th> </th>
        <th> </th>
    </tr>
<?php else : 
  if ($page['file_url'] == "./about-us/aboutus.php" || $page['file_url'] == "./rules.php") { ?>
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
                <input type="submit" class="prew" value="Показать страницу">
            </form>

        </td>
        <td><?php echo $page['Page_title']; ?></td>
        <td><?php echo $page['file_url']; ?></td>
        <td>
            <button class="edit openModal<?php echo $page['id']; ?>">Редактировать</button>
            <!-- МОДАЛЬНОЕ ОКНО -->
            <dialog class="Modal Modal<?php echo $page['id']; ?>" style="width: 60%;">
                <div class="Modal-inner">

                    <?
                    $Page_title = $page['Page_title'];
                    $pathToFile = $page['file_url'];
                    $GetContentFile = file_get_contents("." . $page['file_url']);
                    ?>
                    <form action="./preview.php" method="post">
                        <div class="add-title" style="display: grid; flex-direction: row; margin-top: 25px;">
                            <label>Заголовок</label><input type="text" name="page_title_preview" value="<?php echo $Page_title; ?>">
                            <input type="text" name="file_url" style="display: none;" value="<?php echo $pathToFile; ?>">
                        </div>
                        <div class="add-title" style="display: grid; flex-direction: row; margin-top: 25px;">
                            <label>Содержимое страницы (HTML)</label>
                            <textarea name="page_content_preview" style="width: 100%; min-height: 70vh;"><?php echo $GetContentFile; ?></textarea>
                            <input type="submit" value="Предпоказ" style="margin-top: 20px; margin-bottom: 5px;">
                        </div>
                    </form>
                    <div style="display: flex;justify-content: center;">
                        <button class="btn closeModal closeModal<?php echo $page['id']; ?>">Закрыть</button>
                    </div>
            </dialog>

            <script>
                const openModal<?php echo $page['id']; ?> = document.querySelector('.openModal<?php echo $page['id']; ?>');
                const closeModal<?php echo $page['id']; ?> = document.querySelector('.closeModal<?php echo $page['id']; ?>');
                const Modal<?php echo $page['id']; ?> = document.querySelector('.Modal<?php echo $page['id']; ?>');

                openModal<?php echo $page['id']; ?>.addEventListener('click', () => {
                    Modal<?php echo $page['id']; ?>.showModal()
                })

                closeModal<?php echo $page['id']; ?>.addEventListener('click', () => {
                    Modal<?php echo $page['id']; ?>.close()
                })

                Modal<?php echo $page['id']; ?>.addEventListener('click', (e) => {
                    if (e.target === Modal<?php echo $page['id']; ?>) Modal<?php echo $page['id']; ?>.close()
                })
            </script>
            <!-- /МОДАЛЬНОЕ ОКНО -->
        </td>
    </tr>
  <? }else{ ?>
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
                <input type="submit" class="prew" value="Показать страницу">
            </form>

        </td>
        <td><?php echo $page['Page_title']; ?></td>
        <td><?php echo $page['file_url']; ?></td>
        <td>
            <button class="edit openModal<?php echo $page['id']; ?>">Редактировать</button>
            <!-- МОДАЛЬНОЕ ОКНО -->
            <dialog class="Modal Modal<?php echo $page['id']; ?>" style="width: 60%;">
                <div class="Modal-inner">

                    <?
                    $Page_title = $page['Page_title'];
                    $pathToFile = $page['file_url'];
                    $GetContentFile = file_get_contents("." . $page['file_url']);
                    ?>
                    <form action="./preview.php" method="post">
                        <div class="add-title" style="display: grid; flex-direction: row; margin-top: 25px;">
                            <label>Заголовок</label><input type="text" name="page_title_preview" value="<?php echo $Page_title; ?>">
                            <input type="text" name="file_url" style="display: none;" value="<?php echo $pathToFile; ?>">
                        </div>
                        <div class="add-title" style="display: grid; flex-direction: row; margin-top: 25px;">
                            <label>Содержимое страницы (HTML)</label>
                            <textarea name="page_content_preview" style="width: 100%; min-height: 70vh;"><?php echo $GetContentFile; ?></textarea>
                            <input type="submit" value="Предпоказ" style="margin-top: 20px; margin-bottom: 5px;">
                        </div>
                    </form>
                    <div style="display: flex;justify-content: center;">
                        <button class="btn closeModal closeModal<?php echo $page['id']; ?>">Закрыть</button>
                    </div>
            </dialog>

            <script>
                const openModal<?php echo $page['id']; ?> = document.querySelector('.openModal<?php echo $page['id']; ?>');
                const closeModal<?php echo $page['id']; ?> = document.querySelector('.closeModal<?php echo $page['id']; ?>');
                const Modal<?php echo $page['id']; ?> = document.querySelector('.Modal<?php echo $page['id']; ?>');

                openModal<?php echo $page['id']; ?>.addEventListener('click', () => {
                    Modal<?php echo $page['id']; ?>.showModal()
                })

                closeModal<?php echo $page['id']; ?>.addEventListener('click', () => {
                    Modal<?php echo $page['id']; ?>.close()
                })

                Modal<?php echo $page['id']; ?>.addEventListener('click', (e) => {
                    if (e.target === Modal<?php echo $page['id']; ?>) Modal<?php echo $page['id']; ?>.close()
                })
            </script>
            <!-- /МОДАЛЬНОЕ ОКНО -->
        </td>

        <td><button class="delete" onclick="deletePage('<?php echo $page['file_url']; ?>','<?php echo $page['Page_title']; ?>')">Удалить</button></td>
    </tr>

<?php } endif; ?>

<?php endforeach; ?>
</table>


<h3>ДОБАВЛЕНИЕ</h3>

<table>
    <tr>

        <th>Пункт меню</th>
    </tr>

    <?php foreach ($menu_points as $menu_point) :
        if ($menu_point['drop-down'] == 1) :
            if ($menu_point['menu_title'] == "Товары и Услуги") {
                $menu_point_id = 1;
            } else {
                $menu_point_id = 2;
            }
    ?>
            <tr>
                <td><?php echo $menu_point['menu_title'] . " (drop down)"; ?></td>
                <td>
                    <button class="edit openModalAdd<?php echo $menu_point['id']; ?>">Добавить страницу</button>
                    <!-- МОДАЛЬНОЕ ОКНО -->
                    <dialog class="ModalAdd ModalAdd<?php echo $menu_point['id']; ?>" style="width: 60%; height:60%;">
                        <div class="Modal-inner">

                            <form action="./preview.php" method="post">
                                <div class="add-title" style="display: grid; flex-direction: row; margin-top: 25px;">
                                    <label>Заголовок</label><input type="text" name="page_title_preview" id="page_title">
                                    <input type="text" name="menu_point_id" style="display: none;" value="<?php echo $menu_point_id; ?>">
                                </div>
                                <div class="add-text" style="display: grid; flex-direction: row; margin-top: 25px;">
                                    <label>Содержимое страницы (HTML)</label>
                                    <textarea name="page_content_preview" style="width: 100%; min-height: 30vh;"></textarea>
                                    <input type="submit" value="Предпоказ" style="margin-top: 20px; margin-bottom: 5px;">
                                </div>
                            </form>
                            <div style="display: flex;justify-content: center;">
                                <button class="btn closeModalAdd closeModalAdd<?php echo $menu_point['id']; ?>">Закрыть</button>
                            </div>
                    </dialog>

                    <script>
                        const openModalAdd<?php echo $menu_point['id']; ?> = document.querySelector('.openModalAdd<?php echo $menu_point['id']; ?>');
                        const closeModalAdd<?php echo $menu_point['id']; ?> = document.querySelector('.closeModalAdd<?php echo $menu_point['id']; ?>');
                        const ModalAdd<?php echo $menu_point['id']; ?> = document.querySelector('.ModalAdd<?php echo $menu_point['id']; ?>');

                        openModalAdd<?php echo $menu_point['id']; ?>.addEventListener('click', () => {
                            ModalAdd<?php echo $menu_point['id']; ?>.showModal()
                        })

                        closeModalAdd<?php echo $menu_point['id']; ?>.addEventListener('click', () => {
                            ModalAdd<?php echo $menu_point['id']; ?>.close()
                        })

                        ModalAdd<?php echo $menu_point['id']; ?>.addEventListener('click', (e) => {
                            if (e.target === ModalAdd<?php echo $menu_point['id']; ?>) ModalAdd<?php echo $menu_point['id']; ?>.close()
                        })
                    </script>
                    <!-- /МОДАЛЬНОЕ ОКНО -->
                </td>
            </tr>

        <?php endif; ?>
    <?php endforeach; ?>
</table>