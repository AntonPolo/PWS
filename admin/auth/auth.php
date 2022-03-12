<?
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
  
  
</head>
<body>
    <div id="id01" class="modal">
            
        <form class="modal-content animate" action="singin.php" method="post">
            
            <div class="containerlk">
            <label for="uname"><b>Логин</b></label>
            <input class="inputlk" type="text" placeholder="Введите Логин" name="login" required>
        
            <label for="psw"><b>Пароль</b></label>
            <input class="inputlk" type="password" placeholder="Введите пароль" name="password" required>
                
            <button class="lk" type="submit">Войти</button>

            <a href="../../index.php">Выйти на главную страницу.</a>
            
            </div>
        
            <?
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
            }
            unset($_SESSION['message']);
            
            ?>
        
        </form>
        </div>
</body>
</html>