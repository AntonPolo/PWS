<?
include('../DB.php');
session_start();
if (isset($_SESSION['admin'])) :
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin-панель</title>
        <link rel="stylesheet" href="../libs/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="./adminStyle.css">
    </head>

    <body>
        <div class="nav-btn">
            <? if(isset($_GET['admin_page'])){ ?>
            <a href="./adminPanel.php"><button class="edit_main_page">Назад</button></a>
            <? } ?>
            <a href="./auth/exit.php"><button class="admin_exit">Выход</button></a>
        </div>

        <div class="container admin">


            <?
            if (isset($_GET['admin_page']) && $_GET['admin_page'] == "admin_slider") {
                require_once "./adminSlider.php";
            } elseif (isset($_GET['admin_page']) && $_GET['admin_page'] == "works_page") {
                require_once "./admin_works.php";
            } else {
                require_once "./adminMain.php";
            }

            ?>



        </div>

        <script src="../libs/jQuery.js"></script>
        <script src="../libs/bootstrap.bundle.js"></script>
        <script src="./admin_fun.js"></script>

        <!-- Скрипт который делает адаптацию textarea под содержимое -->
        <script>
            $(document).on("input", "textarea", function() {
                $(this).outerHeight(38).outerHeight(this.scrollHeight);
            });
        </script>
    </body>

    </html>

<? else : ?>

    <? header('Location: auth/singin.php'); ?>

<? endif; ?>