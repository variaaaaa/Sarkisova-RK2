<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="login_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <?php require "name.php"; ?>
</head>
<header>
        <div class="header">
            <div class="container">
                <div class="header-line">
                    <div class="nav">
                        <a data-content="Cosmy way" href="<?php 
                            $name='Cosmy way'; 
                            $link='index.php'; 
                            $current_page=true; 
                            echo $link; 
                        ?>"> <?php 
                        if( $current_page )
                            echo $name;
                        ?></a>
                        <a data-content="О компании" href="about.php">О компании </a>
                        <a data-content="Вход" href=""> Вход </a>
                        <a data-content="Товары" href="<?php 
                            $name='Товары'; 
                            $link='products.php'; 
                            $current_page=true; 
                            echo $link; 
                        ?>"> <?php 
                        if( $current_page ) 
                            echo $name;
                        ?></a>                        
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="background-login">
            <div class="container-login-form">
            <form class="login_form" method="post" name="login_form">
                <h1>Log in</h1>
                <div class="elements-login">
                    <p>Логин: <input type="text" name="log-name"placeholder="Enter login" size="18"/></p>
                    <p>Пароль: <input type="password" name="pass-name"placeholder="Enter password" size="18"/></p>
                    <p>Запомнить меня <input type="checkbox"></p>
                    <p><div class="buttons"><input type="reset"><input type="submit"></div></p>
                </div>
            </form>
            </div>
        </div>
        
    </main>
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
            <a href="#top" style="color: black"> Вернуться наверх</a>            
            <a href="" style="color: black">@cosmy_way</a>
            
        </div>
      </div>
    </div>
  </footer>
</body>

</html>