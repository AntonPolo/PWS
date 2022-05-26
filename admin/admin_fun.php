<?php
include('../DB.php');
//Функции для добавления файла
function can_upload_slide($file)
{
    if ($file['name'] == '')
        return 'Вы не выбрали файл.';

    if ($file['size'] == 0)
        return 'Файл слишком большой.';

    $getMime = explode('.', $file['name']);
    $mime = strtolower(end($getMime));
    $types = array('jpg', 'png', 'jpeg');

    if (!in_array($mime, $types))
        return 'Недопустимый тип файла.';

    return true;
}

function make_upload_slide($file, $teg, $works_title)
{
    $getMime = explode('.', $file['name']);

    $mime = strtolower(end($getMime));
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $unick = substr(str_shuffle($permitted_chars), 0, 40);

    $name = $unick . "." . $mime;
    if ($teg == "slider") {
        copy($file['tmp_name'], '../img/slider_img/' . $name);
        $result = add_new_slide_url_on_DB('../img/slider_img/' . $name);
        if ($result > 0) {
            return "Изображение успешно добавленно";
        } else {
            return "Ошибка при занесении в БД";
        }
    } elseif($teg == "work"){
        copy($file['tmp_name'], '../img/works_img/' . $name);
        $result = add_new_photo("../img/works_img/$name", $works_title);
        if ($result > 0) {
            return "Изображение успешно добавленно";
        } else {
            return "Ошибка при занесении в БД";
        }
    }
}

//Удаление файла страницы
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
        delete_slide_db($file_url);
        echo "Слайд успешно удален.";
    }
}
function W_delete($file_url)
{
    if (!(@unlink($file_url))) {
        echo "Error delete file: " . $file_url;
    } else {
        delete_work($file_url);
        echo "Слайд успешно удален.";
    }
}

//Условия при которых будет исполняться та или иная функция
if (isset($_POST['action']) && $_POST['action'] == "deletePage") {
    $file_url = "." . $_POST['file_url'];
    deletePage($file_url);
} elseif (isset($_POST['action']) && $_POST['action'] == "add_new_page") {

    if ($_POST['page_title'] == "" || $_POST['page_content'] == "") {
        echo "Вы заполнили не все поля! Попробуйте снова";
    } else {

        $page_title = $_POST['page_title'];
        $page_content = $_POST['page_content'];
        add_new_page($page_title, $page_content);
    }
} elseif (isset($_POST['action']) && $_POST['action'] == "saving_page") {

    if ($_POST['page_title_saving'] == "" || $_POST['page_content_saving'] == "") {

        echo "Вы заполнили не все поля! Попробуйте снова";
    } else {

        $page_title = $_POST['page_title_saving'];
        $page_content = $_POST['page_content_saving'];
        $file_url = $_POST['file_url'];
        saving_page($page_title, $page_content, $file_url);
    }
} elseif (isset($_POST['action']) && $_POST['action'] == "deleteSlide") {

    $file_name = $_POST['file_name'];
    deleteSlide($file_name);
} elseif (isset($_POST['action']) && $_POST['action'] == "add_new_work") {
    $works_title = $_POST['works_title'];
    $check = can_upload_slide($_FILES['file']);
    if ($check === true) {
        // загружаем изображение на сервер
        $teg = "work";
        $result = make_upload_slide($_FILES['file'], $teg, $works_title);
        echo $result;
    } else {
        // выводим сообщение об ошибке
        echo "*$check";
        $_FILES = array();
    }
} elseif (isset($_POST['action']) && $_POST['action'] == "add_new_slider_file") {
    $check = can_upload_slide($_FILES['file']);
    if ($check === true) {
        // загружаем изображение на сервер
        $teg = "slider";
        $result = make_upload_slide($_FILES['file'], $teg, "");
        echo $result;
    } else {
        // выводим сообщение об ошибке
        echo "*$check";
        $_FILES = array();
    }
} elseif (isset($_POST['action']) && $_POST['action'] == "W_delete") {
    W_delete($_POST['file_url']);
}
