<?
session_start();
require('../../php/connection_DB.php');

$login = $_POST['login'];
$password = md5($_POST['password']);


$result = $mysql->query("SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");

if(mysqli_num_rows($result) > 0){
    
    $admin = mysqli_fetch_assoc($result);

    $_SESSION['admin'] = [
        'id' => $admin['id'],
        'login' => $admin['login']
    ];
    header('Location: ../adminPanel.php');
exit;


}else {
    $_SESSION['message'] = 'Неверный логин или пароль.';
    header('Location: auth.php');
    
}


?>


