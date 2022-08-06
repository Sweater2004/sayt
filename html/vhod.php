<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/vhod.css">
    <?php
    include("../db/db.php");

    ?>
</head>

<body>
    <div class="wraper">
        <header class="header">
            <div class="container">
                <nav class="header__menu">
                    <ul class="header__list">
                        <tr>
                            <td><a href="../index.php" class="header__link">Гланая страница</a></td>
                        </tr>
                        <tr>
                            <td><a href="vhod.php" class="header__link">Вход в аккаунт</a>
                        </tr>
                        </td>
                        <tr>
                            <td><a href="registration.php" class="header__link">Регистрация</a>
                        </tr>
                        </td>
                        <tr>
                            <td></td><a href="foto.php" class="header__link">Все фото</a>
                        </tr>
                        </td>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="main">
            <div class="container">
                <div class="vhod">
                    <h2 class="vhod__title">Вход в аккаунт</h2>
                    <form class="vhod__inputs" method="GET" action="../php/vhod_passworld.php">
                        <div class="vhod__input">
                            <h2 class="vhod__item">Логин</h2>
                            <input type="text" class="vhod__dan" name="login">
                        </div>
                        <div class="vhod__input">
                            <h2 class="vhod__item">Пароль</h2>
                            <input type="password" class="vhod__dan" name="passworld">
                        </div>
                        <div class="vhod__button">
                            <button class="vhod__perehod">войти</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="container">
                <div class="footer__content">
                    <div class="footer__copy">сделано-04.08.2022</div>
                    <div class="footer__text">тут должна быть тех поддержка</div>
                </div>
            </div>
        </footer>
    </div>
    <script src="" async defer></script>
</body>

</html>