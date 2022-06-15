<?
session_start();
require('../../DB.php');

$login = $_POST['login'];
$password = md5($_POST['password']);

$result = get_admin_data($login,$password);


if(isset($result)){

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


