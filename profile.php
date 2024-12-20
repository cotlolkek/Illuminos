<?php
    session_start();

    if(!isset($_SESSION['login'])){
        header("Location: /login.php");
        exit;
    }
    ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Illuminos</title>
    <link rel="preload, stylesheet" href="assets/css/profile.css">
    <link rel="preload, stylesheet" href="assets/css/headfoot.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
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
        <section class="profcont">
            <h2>Мой аккаунт</h2>
            <div class="profile">
            <img src="assets/img/joper.png" alt="joper">
<form class="profform">
    <h3>Личные данные</h3>
    <input type="email" placeholder="E-mail">
    <input type="password" placeholder="Пароль">
    <input type="tel" placeholder="Телефон">
    <h3>Рассылка</h3>
    <div class="mini--block">
        <p>E-mail</p>
        <div class="slide">
          <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
          </label>
        </div>
      </div>
      <div class="mini--block">
        <p>SMS</p>
        <div class="slide">
          <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
          </label>
        </div>
      </div>
    <h3>Подписка</h3>
    <div class="sub"><p>Активна</p><a>Подробности</a></div>
</form>
<img src="assets/img/cap.png" alt="cap">
</div>
        </section>
        <footer>
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
                <p>Адрес для обращений пользователей: Illuminos@handsfromass.ru</p>  
            </div>
        </footer>
</body>
</html>