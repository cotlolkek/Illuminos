<?php
    session_start();

    if(!isset($_SESSION['login'])){
        header("Location: /index.php");
        exit;
    }
    include("function/function.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/addorder.css">
    <link rel="stylesheet" href="assets/css/headfoot.css">
    <title>Illuminos</title>
</head>
<header>
        <div class="logo">
            <a href="index.php"><img src="assets/img/logo.png" alt="logo"></a>
        </div>
        <div class="menu">
            <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
            <label for="burger-checkbox" class="burger"></label>
            <ul class="menu-list">
                <li><a href="search.html" class="menu-item">Поиск</a><li>
                <li><a href="help.html" class="menu-item">Помощь</a><li>
                <li><a href="about.html" class="menu-item">О нас</a><li>
                <li><a href="media.html" class="menu-item">Медиа</a><li>
                    <li><a href="profile.php" class="menu-item">Профиль</a><li></li>
            </ul>
        </div>
        <nav class="navdesk">
            <div class="navigation">
                <a href="search.html">Поиск</a>
                <a href="help.html">Помощь</a>
                <a href="about.html">О нас</a>
                <a href="media.html">Медиа</a>
            </div>
            <div class="login">
                <a href="profile.php">Профиль</a>
            </div>
        </nav>
    </header>
<section class="order">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between flex-wrap">
            <h4 class="display-6">Добавить заказ</h4>
        </div>
        
        <form action="admin/controllers/add-order.php" method="post">
        <?=fnOutCardsProduct()?>
            <div class="mb-3">
                <label class="form-label">Способ оплаты</label>
                <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Сбп
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Картой
  </label>
</div>
            </div>
            <button type="submit" class="btn btn-primary w-100 my-3">Добавить</button>
        </form>
        <a href="order.php" class="btn btn-primary my-3">Назад</a>
    </div>
</section>
<footer style="margin-top:12%">
        <hr>
        <div class="soc">
    <a href=""><img src="assets/img/vk.png" alt="vk"></a>
    <a href=""><img src="assets/img/telegram.png" alt="telegram"></a>
    <a href=""><img src="assets/img/youtube.png" alt="youtube"></a>
    <a href=""><img src="assets/img/tiktok.png" alt="ticktok"></a>
        </div>
        <div class="foottext">
        <p>© 2003–2024 Illuminos. 18+</p>
            <p>Федеральные каналы доступны для бесплатного просмотра круглосуточно</p>
                <p>HBO ® and related service marks are the property of Home Box Office, Inc</p>
            <p>ООО «Illuminos», адрес местонахождения: 115035, Россия, г. Стерлитамак ул. Николаева, 124, Стерлитамак, Респ. Башкортостан, 453103</p>
            <p>Адрес для обращений пользователей: Illuminos@handsnotfromass.ru</p>  
        </div>
    </footer>
</body>

</html>