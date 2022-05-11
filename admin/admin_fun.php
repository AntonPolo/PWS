<?php include('../DB.php'); ?>
<?php

//Удаление файла
function deletePage($file_url)
{
    if (!(@unlink($file_url))) {
        echo "Error delete file.";
    } else {
        echo "Страница успешно удалена.";
        $file_url = $_POST['file_url'];
        deletePage_on_DB($file_url);
    }
}
//Создание файла и страницы + БД
function add_new_page($page_title, $page_content)
{
    if ($_POST['menu_point_id'] == 1) {

        for ($i = 1;; $i++) {
            if (file_exists("../menu_page/services/$i.php")) {
                continue;
            } else {
                file_put_contents("../menu_page/services/$i.php", "$page_content");
                $file_url = "./menu_page/services/$i.php";
                $show_url = "./?page=$i&menu=services";
                $menu_id = 1;
                add_new_page_on_DB($page_title, $file_url, $show_url, $menu_id);
                echo "Страница успешно добавлена";
                break;
            }
        }
    } elseif ($_POST['menu_point_id'] == 2) {

        for ($i = 1;; $i++) {
            if (file_exists("../menu_page/prices/$i.php")) {
                continue;
            } else {
                file_put_contents("../menu_page/prices/$i.php", "$page_content");
                $file_url = "./menu_page/prices/$i.php";
                $show_url = "./?page=$i&menu=prices";
                $menu_id = 2;
                add_new_page_on_DB($page_title, $file_url, $show_url, $menu_id);
                echo "Страница успешно добавлена";
                break;
            }
        }
    } elseif ($_POST['menu_point_id'] == 3) {

        for ($i = 1;; $i++) {
            if (file_exists("../menu_page/info/$i.php")) {
                continue;
            } else {
                file_put_contents("../menu_page/info/$i.php", "$page_content");
                $file_url = "./menu_page/info/$i.php";
                $show_url = "./?page=$i&menu=info";
                $menu_id = 3;
                add_new_page_on_DB($page_title, $file_url, $show_url, $menu_id);
                echo "Страница успешно добавлена";
                break;
            }
        }
    }
}
//Сохранение  страницы
function saving_page($page_title, $page_content, $file_url)
{
    file_put_contents("." . $file_url, $page_content);
    edit_page_title_on_DB($page_title, $file_url);
    echo "Страница успешно изменена";
}




//Удаление слайда
function deleteSlide($file_name)
{
    $file_url = $file_name;
    if (!(@unlink($file_url))) {
        echo "Error delete file.";
    } else {
        delete_slide($file_url);
        echo "Слайд успешно удален.";
    }
}



//Условия при которых будет исполняться та или иная функция
if (isset($_POST['file_url']) && empty($_POST['page_title_saving']) && empty($_POST['page_content_saving'])) {
    $file_url = "." . $_POST['file_url'];
    deletePage($file_url);
} elseif (isset($_POST['menu_point_id'])) {

    if ($_POST['page_title'] == "" || $_POST['page_content'] == "") {
        echo "Вы заполнили не все поля! Попробуйте снова";
    } else {

        $page_title = $_POST['page_title'];
        $page_content = $_POST['page_content'];
        add_new_page($page_title, $page_content);
    }
} elseif (isset($_POST['page_title_saving']) && isset($_POST['page_content_saving']) && isset($_POST['file_url'])) {

    if ($_POST['page_title_saving'] == "" || $_POST['page_content_saving'] == "") {

        echo "Вы заполнили не все поля! Попробуйте снова";

    } else {

        $page_title = $_POST['page_title_saving'];
        $page_content = $_POST['page_content_saving'];
        $file_url = $_POST['file_url'];
        saving_page($page_title, $page_content, $file_url);
    }
} elseif (isset($_POST['file_name'])) {

    $file_name = $_POST['file_name'];
    deleteSlide($file_name);

} elseif (isset($_POST['photo_url']) && isset($_POST['photo_title'])) {

    $photo_url = $_POST['photo_url'];
    $photo_title = $_POST['photo_title'];
    add_new_photo($photo_url,$photo_title);
    echo "Фото успешно добавлено";

}





























?>