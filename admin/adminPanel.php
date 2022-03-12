<?
session_start();
if (isset($_SESSION['admin'])):
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-панель</title>
</head>
<body>
    <h1>eto vona</h1>
    <a href="auth/exit.php">Выход</a>

</body>
</html>

<? else: ?>
    
   <? header('Location: auth/singin.php'); ?>

<? endif; ?>