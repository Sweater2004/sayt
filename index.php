<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->

<head>
    <!-- Заголовок страницы в браузере -->
    <title>мой сайт с фотками</title>
    <!-- Подключаем CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Кодировка страницы -->
    <meta charset="UTF-8">
    <!-- Адаптив -->
    <meta name="viewport" content="width=device-width">
</head>
<!-- Отображаемое тело страницы -->

<body>
    <!-- Оболочка (grid-контейнер) -->
    <div class="wrapper">
        <!-- Шапка (grid - элемент) -->
        <header class="header">
            <a href="" class="header__logo"><img src="img/silk/me.jpg" alt=""></a>
            <div class="header__burger"><span></span></div>
            <nav class="header__menu">
                <ul class="header__list">
                    <li><a href="index.php" class="header__link">Гланая страница</a></li>
                    <li><a href="html/vhod.php" class="header__link">Вход</a></li>
                    <li><a href="html/registration.php" class="header__link">Регистрация</a></li>
                    <li><a href="html/foto.php" class="header__link">Все фото</a></li>
                </ul>
            </nav>
        </header>
        <!-- Контент (grid-элемент + grid-контейнер) -->
        <main class="main">

            <!-- Контент (grid-элемент) -->
            <section class="content">
                <h1 class="content__title">Гланая страница</h1>
                <section class="content__gallery gallery">
                    <h2 class="gallery__title">Галерея</h2>
                    <div class="gallery__items">
                        <div class="gallery__item gallery__item_big">
                            <img src="img/calash/big/DSC_1161.jpg" alt="">
                        </div>
                        <div class="gallery__item">
                            <img src="img/calash/standart/banditi.jpeg" alt="">
                        </div>
                        <div class="gallery__item">
                            <img src="img/calash/standart/buh.jpg" alt="">
                        </div>
                        <div class="gallery__item">
                            <img src="img/calash/standart/hz.jpeg" alt="">
                        </div>
                        <div class="gallery__item">
                            <img src="img/calash/standart/i.jpg" alt="">
                        </div>
                        <div class="gallery__item">
                            <img src="img/calash/standart/i_3584.jpeg" alt="">
                        </div>
                        <div class="gallery__item">
                            <img src="img/calash/standart/milioner.jpg" alt="">
                        </div>
                        <div class="gallery__item gallery__item_big">
                            <img src="img/calash/big/frg.jpg" alt="">
                        </div>
                        <div class="gallery__item">
                            <img src="img/calash/standart/milioner2.jpg" alt="">
                        </div>
                        <div class="gallery__item">
                            <img src="img/calash/standart/DSC_1918.jpg" alt="">
                        </div>
                    </div>
                </section>
                <section class="content__products products">
                    <h2 class="products__title">ссылки на нас фотка</h2>
                    <div class="products__items">
                        <div class="products__item">
                            <div class="products__image">
                                <img src="img/silk/dga.jpg" alt="">
                            </div>
                            <div class="products__name">Никита "у меня записан как джа"</div>
                            <a href="https://vk.com/id665174548" class="products__button">перейти вк</a>
                        </div>
                        <div class="products__item">
                            <div class="products__image">
                                <img src="img/silk/ilucha.jpg" alt="">
                            </div>
                            <div class="products__name">это я "я просто ахуенный"</div>
                            <a href="https://vk.com/id704967443" class="products__button">перейти вк</a>
                        </div>
                        <div class="products__item">
                            <div class="products__image">
                                <img src="img/silk/lesha.jpg" alt="">
                            </div>
                            <div class="products__name">Лёха"у меня записан как трухлявый пень"</div>
                            <a href="https://vk.com/zovite_meny_leshyi" class="products__button">перейти вк</a>
                        </div>
                        <div class="products__item">
                            <div class="products__image">
                                <img src="img/silk/micha.jpg" alt="">
                            </div>
                            <div class="products__name">Миша "у меня записан как 3585"</div>
                            <a href="https://vk.com/nigggadyu" class="products__button">перейти вк</a>
                        </div>
                        <div class="products__item">
                            <div class="products__image">
                                <a href=""><img src="img/silk/sasha.jpg" alt=""></a>
                            </div>
                            <div class="products__name">Саня "у меня записан как кыргыз"</div>
                            <a href="https://vk.com/id519180024" class="products__button">перейти вк</a>
                        </div>
                        <div class="products__item">
                            <div class="products__image">
                                <img src="img/silk/me.jpg" alt="">
                            </div>
                            <div class="products__name">FRG "сылки нету поэто она пустая)"</div>
                            <a href="" class="products__button">перейти вк</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>