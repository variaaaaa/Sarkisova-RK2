<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap" rel="stylesheet">
  <?php require "name.php"; ?>
</head>

<body>
  <header class="header" id="top">
    <div class="wrapper">
      <div class="header__wrapper">
        <div class="logo">Cosmy way</div>
        <nav class="nav">
          <ul class="menu">
            <li class="menu__item"><a href="">Главная</a></li>
            <li class="menu__item"><a href="about.php">О компании</a></li>
            <li class="menu__item"><a href="login.php">Вход</a></li>
            <li class="menu__item"><a href="products.php">Товары</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <main>
    <section class="preview">
      <div class="wrapper">
        <div class="preview__wrapper">
          <div class="preview__image">
            <img src="skincare.png" alt="cat" width="500" height="500" />
          </div>
          <div class="preview-info">
            <h1 style="font-size: px">Cosmy way</h1>
            <p class="preview__text">
              Мы - магазин косметики и парфюмерии. По состоянию на май 2021 года занимаем второе место по товарообороту в своём сегменте.
              Наши оффлайн магазины расположены в Москве и Екатерингбурге.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="gallery">
      <div class="wrapper">
        <div class="gallery-wrapper">
          <h1 class="gallery__title" id="gallery">Что мы можем предложить?</h1>
        </div>
        <div class="gallery-images__wrapper">
          <div class="gallery__item">
            <img class="gallery__image" src="makeup.png" alt="makeup_img" width="250" height="250" />
            <p class="gallery__name">Бальзамы для губ</p>
          </div>
          <div class="gallery__item">
            <img class="gallery__image" src="perfume.jpg" alt="perfume_img" width="250" height="250" />
            <p class="gallery__name">Парфюмерия</p>
          </div>
          <div class="gallery__item">
            <img class="gallery__image" src="box.jpg" alt="gift_img" width="250" height="250" />
            <p class="gallery__name">Подарочные наборы</p>
          </div>
          <div class="gallery__item">
            <img class="gallery__image" src="lipstick.jpg" alt="lipstick_img" width="250" height="250" />
            <p class="gallery__name">Помады</p>
          </div>
          <div class="gallery__item">
            <img class="gallery__image" src="shampoo.jpg" alt="shampoo_img" width="250" height="250" />
            <p class="gallery__name">Шампуни</p>
          </div>
          <div class="gallery__item">
            <img class="gallery__image" src="candle.jpg" alt="candle_img" width="250" height="250" />
            <p class="gallery__name">Свечи</p>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- Footer -->
  <footer class="footer" id="footer">
    <div class="wrapper">
      <div class="footer__wrapper">
        <div class="footer-info">
          <ul>
            <li class="footer-info__item">@Компания Cosmy way</li>
            <li class="footer-info__item"> Copyright
            </li>
            <li class="footer-info__item" style="color: black">
              + 7 (915) 000-00-00
            </li>
          </ul>
        </div>
        <div class="footer-links">
          <ul>
            <li class="footer-info__item">
              <a href="#top" style="color: black"> Вернуться наверх</a>
            </li>
            <li class="footer-info__item">
              <a href="" style="color: black">@cosmy_way</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>