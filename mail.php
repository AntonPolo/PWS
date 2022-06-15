<?php
require './libs/PHPMailer/PHPMailer.php';
require './libs/PHPMailer/SMTP.php';
require './libs/PHPMailer/Exception.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function ($str, $level) {
        $GLOBALS['status'][] = $str;
    };

    // Настройки вашей почты
    $mail->Host       = 'smtp.yandex.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'cool.55652014@yandex.ru'; // Логин на почте
    $mail->Password   = '713232x5X'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('cool.55652014@yandex.ru', 'PWS-заявка'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('pai1963@yandex.ru');
    $mail->addAddress('pws.orders@yandex.ru');

    //Тело письма
    if (isset($_POST['Profile'])) {

        //параметры конструкции
        $width_const = $_POST['width_const'];
        if ($width_const == 0) {
            $width_const = "нет";
        }else{
            $width_const = "$width_const мм.";
        }
        $hiegth_win = $_POST['hiegth_win'];
        if ($hiegth_win == 0) {
            $hiegth_win = "нет";
        }else{
            $hiegth_win = "$hiegth_win мм.";
        }
        $width_win = $_POST['width_win'];
        if ($width_win == 0) {
            $width_win = "нет";
        }else{
            $width_win = "$width_win мм.";
        }
        $width_door = $_POST['width_door'];
        if ($width_door == 0) {
            $width_door = "нет";
        }else{
            $width_door = "$width_door мм.";
        }
        $hiegth_door = $_POST['hiegth_door'];
        if ($hiegth_door == 0) {
            $hiegth_door = "нет";
        }else{
            $hiegth_door = "$hiegth_door мм.";
        }

       //другие параметры
        $Profile = $_POST['Profile'];
        $Double_glazed_windows = $_POST['Double_glazed_windows'];
        $glassOption_1 = $_POST['glassOption_1'];
        $glassOption_2 = $_POST['glassOption_2'];
        $Profile_color = $_POST['Profile_color'];
        $Otliv_Size = $_POST['Otliv_Size'];
        $Windowsill_Size = $_POST['Windowsill_Size'];
        $addOption_text = $_POST['addOption_text'];
        $user_phone = $_POST['user_phone'];
        $user_name = $_POST['user_name'];
        $images = $_POST['lastImg'];
        $images = explode(",", $images);
        for ($i = 0; $i < count($images); $i++) {
            $image = explode("/", $images[$i]);
            $image_name = end($image);
            $mail->AddEmbeddedImage("img/changed_win/$image_name", $i);
        }
        for ($i = 0; $i < count($images); $i++) {

            $lastImg_print .= "<td style='vertical-align: top'><img src='" . "cid:$i" . "'></td>";
        }

       $title = "Консультация PWS";
        $body = "
        <h1>Конструкция и данные клиента</h1>
<b>Номер телефона: </b>
<h2>$user_phone</h2><br>
<b>Имя: </b>
<h2>$user_name</h2><br>
<h1>Параметры констукции</h1>
<table>
    <tr>
        $lastImg_print
    </tr>
</table>
<p>Ширина констукции - $width_const</p>
<p>Высота окна - $hiegth_win</p>
<p>Ширина окна - $width_win</p>
<p>Ширина двери - $width_door</p>
<p>Высота двери - $hiegth_door</p>
<b>Профиль:</b> $Profile<br>
<b>Стеклопакет:</b> $Double_glazed_windows<br>
<b>Стекло Энергосберегающее:</b> $glassOption_1<br>
<b>Стекло Солнцезащитное:</b> $glassOption_2<br>
<b>Цвета сторон:</b> $Profile_color<br>
<b>Отлив:</b> $Otliv_Size<br>
<b>Подоконник:</b> $Windowsill_Size<br>
<b>Другие функции:</b> $addOption_text<br>
        ";
    } elseif (isset($_POST['measuring_form_name']) && isset($_POST['measuring_form_phone'])) {
        $measuring_form_name = $_POST['measuring_form_name'];
        $measuring_form_phone = $_POST['measuring_form_phone'];

        $title = "Заявка на замер";
        $body = "
<p>Клиента завут $measuring_form_name</p><br>
<p>Его номер телефона: $measuring_form_phone</p><br>
";
    }

    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;



    // Проверяем отравленность сообщения
    if ($mail->send()) {
        $result = "success";
        echo $result;
    } else {
        $result = "error";
    }
} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
// Отображение результата
//echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);
