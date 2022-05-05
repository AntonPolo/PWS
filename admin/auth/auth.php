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
    <div id="id01" class="modal" style="display: flex;justify-content: center;font: 16px Roboto, sans-serif;">

        <form class="modal-content animate" action="singin.php" method="post" style="margin: auto;">

            <div class="containerlk" style="display: flex;flex-direction: column;">

                <label for="uname" style="margin-top: 15px;padding-bottom: 5px;"><b>Логин</b></label>
                <input class="inputlk" type="text" placeholder="Введите Логин" name="login" style="height: 40px;" required>

                <label for="psw" style="margin-top: 15px;padding-bottom: 5px;"><b>Пароль</b></label>
                <input class="inputlk" type="password" placeholder="Введите пароль" name="password" style="height: 40px;" required>

                <button class="lk" type="submit" style="    margin-top: 15px;height: 35px;background: #50a0ff;color: white;text-transform: uppercase;border: 0;font-size: 16px;font-weight: 600;cursor: pointer;">Войти</button>

                <a href="../../index.php" style="margin-top: 15px; color:#50a0ff">Выйти на главную страницу.</a>

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