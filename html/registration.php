<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>регистрация</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/reg_style.css">
</head>

<body>
    <div class="wrapper">
        <!-- Шапка (grid - элемент) -->
        <header class="header">
            <div class="container">
                <nav class="header__menu">
                    <ul class="header__list">
                        <tr>
                            <td><a href="../index.php" class="header__link">Гланая страница</a></td>
                        </tr>
                        <tr>
                            <td><a href="vhod.php" class="header__link">Вход</a>
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
            <section class="reg">
                <h1 class="reg__title">регистрация</h1>
                <section class="reg__input input">
                    <div class="reg__items">
                        <div class="reg__item">
                            <h2 class="reg__item__title">Имя</h2>
                            <input type="text" class="reg__item__input">
                        </div>
                        <div class="reg__item">
                            <h2 class="reg__item__title">Фамилия</h2>
                            <input type="text" class="reg__item__input">
                        </div>
                        <div class="reg__item">
                            <h2 class="reg__item__title">nickname</h2>
                            <input type="text" class="reg__item__input">
                        </div>
                        <div class="reg__item">
                            <h2 class="reg__item__title">Почта</h2>
                            <input type="email" class="reg__item__input">
                        </div>
                        <div class="reg__item">
                            <h2 class="reg__item__title">Пароль</h2>
                            <input type="password" class="reg__item__input">
                        </div>
                        <div class="reg__item">
                            <h2 class="reg__item__title">Повторный пароль</h2>
                            <input type="password" class="reg__item__input">
                        </div>
                        <div class="reg__item__btn">
                            <button class="reg__btn">нажми</button>
                        </div>
                    </div>
                </section>
            </section>
        </main>
        <footer class="footer">
            <div class="footer__copy">сделано-04.08.2022</div>
            <div class="footer__text">тут должна быть тех поддержка</div>
        </footer>
    </div>
    <script src="" async defer></script>
</body>

</html>