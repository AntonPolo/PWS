<?php
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

$Profile = $_POST['Profile'];
$Double_glazed_windows = $_POST['Double_glazed_windows'];
$glassOption_1 = $_POST['glassOption_1'];
$glassOption_2 = $_POST['glassOption_2'];
$Profile_color = $_POST['Profile_color'];
$Otliv_Size = $_POST['Otliv_Size'];
$Windowsill_Size = $_POST['Windowsill_Size'];
$addOption_text = $_POST['addOption_text'];
$lastImg = "";
    




$title = "Заявка на консультацию";
$body = '
<h2>Новое письмо</h2>
<b>Всё:</b> <img src=""><br>
<b>Профиль:</b> $Profile<br>
<b>Стеклопакет:</b> $Double_glazed_windows<br>
<b>Энергосберегающее:</b> $glassOption_1<br>
<b>Солнцезащитное:</b> $glassOption_2<br>
<b>Цвета сторон:</b> $Profile_color<br>
<b>Отлив:</b> $Otliv_Size<br>
<b>Подоконник:</b> $Windowsill_Size<br>
<b>Другие функции:</b> $addOption_text<br>
';



$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.yandex.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'cool.55652014@yandex.ru'; // Логин на почте
    $mail->Password   = '713232x5'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('cool.55652014@yandex.ru', 'PWS-заявка'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('pai1963@yandex.ru');  



// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;  
$mailer->AddEmbeddedImage($path . DIRECTORY_SEPARATOR . '', './img/win_gluh.png', './img/win_gluh.png', 'base64', 'image/png');


// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);
echo $lastImg;
?>