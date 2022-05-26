<?php
$dbhost = "192.168.0.148";
$dbname = "pws_db";
$username = "admin";
$password = "";


$mysql = new PDO("mysql:host=$dbhost;dbname=$dbname", $username, $password);

//Цены для калькуляторов
$PRICE_ARR = $mysql->query("SELECT * FROM `price_rate`");
foreach($PRICE_ARR as $Prise){

$Price_MosquitoNet_Ordinary = (int)$Prise['Price_MosquitoNet_Ordinary'];  //Цена на обычную Москитную сетку
$Price_MosquitoNet_Antikoshka = (int)$Prise['Price_MosquitoNet_Antikoshka'];  //Цена на Москитную сетку "Антокошка"

$Price_Double_glazed_Single_chamber_24mm = (int)$Prise['Price_Double-glazed_Single-chamber_24mm'];  //Цена на Однокамерный стеклопакет 24мм
$Price_Double_glazed_Two_chamber_32mm = (int)$Prise['Price_Double-glazed_Two-chamber_32mm'];  //Цена на Двухкамерный стеклопакет 32мм

$Rate_MosquitoNet_Color = (float)$Prise['Rate_MosquitoNet_Color']; //Коэффициент для цветной маскитной сетки
$Rate_Sunscreens_Glass = (float)$Prise['Rate_Sunscreens_Glass']; ///Коэффициент для Солнцезащитного стекла
$Rate_Energy_saving_Glass = (float)$Prise['Rate_Energy-saving_Glass'];  //Коэффициент для Энергосберегающего стекла
}
//Получение данных для входа в Админ-Панель
function get_admin_data($log,$pas){
    global $mysql;
    $admin_data = $mysql->query("SELECT * FROM `admin` WHERE `login` = '$log' AND `password` = '$pas'");
    if (is_array($admin_data) || is_object($admin_data)){
        foreach ($admin_data as $admin) {
            return $admin;
        }
    }
}
//Получение списка страниц из БД
function get_all_pages(){
    global $mysql;
    $pages = $mysql -> query("SELECT * FROM `pages`");
    return $pages;
}
//Получение списка пунктов меню из БД
function get_all_menu(){
    global $mysql;
    $menu_points = $mysql -> query("SELECT * FROM `menu` ORDER BY `id` DESC");
    return $menu_points;
}
//Получение страниц по id пункта меню
function get_pages_by_menu_id($id){
    global $mysql;
    $pages_data = $mysql -> query("SELECT * FROM `pages` WHERE `menu_id` = '$id'");
    return $pages_data;
}
//Получение страниц по GET параметрам
function get_all_titles_by_menu_show_url($show_url){
    global $mysql;
    $pages = $mysql -> query("SELECT * FROM `pages` WHERE `show_url` = '$show_url'");
    return $pages;
}
//Удаление данных о странице из БД по ссылке
function deletePage_on_DB($file_url){
    global $mysql;
    $mysql -> query("DELETE FROM `pages` WHERE `file_url` = '$file_url'");
}
//Добавление данных о новой странице в БД
function add_new_page_on_DB($page_title,$file_url,$show_url,$menu_id){
    global $mysql;
    $mysql -> query("INSERT INTO `pages` (`id`, `Page_title`, `file_url`, `show_url`, `menu_id`) VALUES (NULL, '$page_title', '$file_url', '$show_url', '$menu_id')");
}
//Изменение заголовка страницы в БД
function edit_page_title_on_DB($page_title,$file_url){
    global $mysql;
    $mysql -> query("UPDATE `pages` SET `Page_title` = '$page_title' WHERE `file_url` = '$file_url';");
}
//Добавление ссылки на изображение для слайдера в БД
function add_new_slide_url_on_DB($slide_url){
    global $mysql;
    $mysql -> query("INSERT INTO `slider` (`id`, `slider_img_url`) VALUES (NULL, '$slide_url')");
    $result = $mysql -> query("SELECT count(*) FROM `slider` WHERE `slider_img_url` = '$slide_url'");
    if (is_array($result) || is_object($result)){
        foreach ($result as $result) {
            return $result[0];
        }
    }
}
//Получение ссылок на изображения для слайдера из БД
function get_all_slide_url($limit){
    global $mysql;
    if($limit != ""){
        $slide_urls = $mysql -> query("SELECT * FROM `slider` ORDER BY `id` DESC LIMIT ".$limit);
    }else{
        $slide_urls = $mysql -> query("SELECT * FROM `slider` ORDER BY `id` DESC");
    }
    return $slide_urls;
}
//Получение кол-ва изображений для слайдера
function get_count_all_slide_url(){
    global $mysql;
    $result = $mysql -> query("SELECT count(*) FROM `slider`");
    if (is_array($result) || is_object($result)){
        foreach ($result as $result) {
            return $result[0];
        }
    }
}
//Удаление слайда из БД
function delete_slide_db($file_url){
    global $mysql;
    $mysql -> query("DELETE FROM `slider` WHERE `slider_img_url` = '$file_url'");
}
//Удаление work из БД
function delete_work($file_url){
    global $mysql;
    $mysql -> query("DELETE FROM `my_works` WHERE `photo_url` = '$file_url'");
}
//Добавления фото для Наши работы в БД
function add_new_photo($photo_url,$photo_title){
    global $mysql;
    $mysql -> query("INSERT INTO `my_works` (`id`, `photo_url`, `photo_title`) VALUES (NULL, '$photo_url', '$photo_title')");
    $result = $mysql -> query("SELECT count(*) FROM `my_works` WHERE `photo_title` = '$photo_title'");
    if (is_array($result) || is_object($result)){
        foreach ($result as $result) {
            return $result[0];
        }
    }
}
//Получение фото для Наши работы из БД
function get_all_photo($limit){
    global $mysql;
    if($limit != ""){
        $photo = $mysql -> query("SELECT * FROM `my_works` ORDER BY `id` DESC LIMIT ".$limit);
    }else{
        $photo = $mysql -> query("SELECT * FROM `my_works` ORDER BY `id` DESC");
    }
    return $photo;
}
//Получение колличества фото для Наши работы из БД
function get_count_photos(){
    global $mysql;

    $count_photos = $mysql -> query("SELECT count(*) FROM `my_works`");
    if (is_array($count_photos) || is_object($count_photos)){
        foreach ($count_photos as $count) {
            return $count;
        }
    }
}
?>