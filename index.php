<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Freshy</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>
 <?php get_header(); ?>
<main>
  <div class="info" id="onas">
  <div class="info-left">
    <h2>O NAS</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi molestie egestas massa, et sollicitudin urna mattis faucibus.
  Praesent sagittis laoreet est, et efficitur enim lacinia id. Aenean imperdiet diam nec efficitur commodo. Morbi at purus tempus tellus tempus placerat.
   Sed faucibus sed elit at lacinia. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent posuere orci justo,
   eu fermentum quam cursus quis. Proin consequat molestie magna accumsan placerat. Nulla quis consectetur tortor. Nam viverra consectetur risus iaculis ultrices.</p>
   <h3>TEL. 500 110 110</h3>
   <img src="<?php bloginfo('template_url'); ?>/images/button-info.png" alt="History button">
  </div>
 <div class="info-right">
<img src="<?php bloginfo('template_url'); ?>/images/info.png" alt="Sklad">
 </div>
  </div>
  <!-- 2 -->
<div class="offers" id="assorty">
  <div class="offers-head">
    <h2>ASORTYMENT</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      Morbi molestie egestas massa, et sollicitudin urna mattis faucibus. Praesent sagittis laoreet est, et efficitur enim lacinia id.
      Aenean imperdiet diam nec efficitur commodo. Morbi at purus tempus tellus tempus placerat. Sed faucibus sed elit at lacinia.</p>
  </div>
  <div class="slider">
<img src="<?php bloginfo('template_url'); ?>/images/left-arrow.png" alt="Arrow" id="arrow1">
<!-- Первое предложение -->
<div class="offer-images">
<img src="<?php bloginfo('template_url'); ?>/images/off1.png" alt="First offer">
<h3>DORADA ŚWIEŻA</h3>
<p class="cost-of">14,99 ZŁ/KG</p>
<a href="#"  class="activ hide"> <span class="marker"></span></a>
</div>
<!-- Второе предложение -->
<div class="offer-images">
<img src="<?php bloginfo('template_url'); ?>/images/off2.png" alt="Second offer">
<h3>PSTRĄG PATROSZONY</h3>
<p class="cost-of">20,99 ZŁ/KG</p>
<a href="#" class="activ hide"> <span class="marker"></span></a>
</div>
<!-- Третье предложение -->
<div class="offer-images">
<img src="<?php bloginfo('template_url'); ?>/images/off3.png" alt="Third offer">
<h3>KREWETKI TYGRYSIE</h3>
<p class="cost-of">39,99 ZŁ/KG</p>
<a href="#" class="activ hide"> <span class="marker"></span></a>
</div>
<!-- Четвертое предложение -->
<div class="offer-images">
<img src="<?php bloginfo('template_url'); ?>/images/off4.png" alt="First offer">
<h3>MAKRELA WĘDZONA</h3>
<p class="cost-of">5,99ZŁ/SZT</p>
<a href="#" class="activ hide"> <span class="marker"></span></a>
</div>
<!-- 5 предложение -->
<div class="offer-images hide">
<img src="<?php bloginfo('template_url'); ?>/images/off3.png" alt="Third offer">
<h3>One</h3>
<p class="cost-of">39,99 ZŁ/KG</p>
<a href="#" class="activ hide"> <span class="marker"></span></a>
</div>
<!-- 6 предложение -->
<div class="offer-images hide">
<img src="<?php bloginfo('template_url'); ?>/images/off1.png" alt="Third offer">
<h3>Two</h3>
<p class="cost-of">39,99 ZŁ/KG</p>
<a href="#" class="activ hide"> <span class="marker"></span></a>
</div>
<!-- 7 предложение -->
<div class="offer-images hide">
<img src="<?php bloginfo('template_url'); ?>/images/off4.png" alt="Third offer">
<h3>Three</h3>
<p class="cost-of">39,99 ZŁ/KG</p>
<a href="#" class="activ hide"> <span class="marker"></span></a>
</div>
<img src="<?php bloginfo('template_url'); ?>/images/right-arrow.png" alt="Arrow" id="arrow2">
  </div>
  <img src="<?php bloginfo('template_url'); ?>/images/button-offers.png" alt="button" class="off-button">
</div>
<!-- 3 -->
<div class="capabicity" id="cooperation">
<div class="servise">
<div class="capa">
    <img src="<?php bloginfo('template_url'); ?>/images/catering1.png" alt="Catering" class="first">
    <img src="<?php bloginfo('template_url'); ?>/images/catering2.png" alt="Catering" class="second">
  <h3>CATERING</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi molestie egestas massa,
    et sollicitudin urna mattis faucibus.
     Praesent sagittis laoreet est, et efficitur enim lacinia id.</p>
</div>
<div class="capa">
    <img src="<?php bloginfo('template_url'); ?>/images/fish1.png" alt="sell" class="first">
    <img src="<?php bloginfo('template_url'); ?>/images/fish2.png" alt="sell" class="second">
  <h3>SPRZEDAŻ</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Morbi molestie egestas massa, et sollicitudin urna mattis faucibus. Praesent sagittis laoreet est,
    et efficitur enim lacinia id.</p>
</div>
<div class="capa">
    <img src="<?php bloginfo('template_url'); ?>/images/dostav1.png" alt="delivery" class="first">
    <img src="<?php bloginfo('template_url'); ?>/images/dostav2.png" alt="delivery" class="second">
    <h3>DOSTAWY</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Morbi molestie egestas massa, et sollicitudin urna mattis faucibus. Praesent sagittis laoreet est,
    et efficitur enim lacinia id</p>
</div>
</div>
<img src="<?php bloginfo('template_url'); ?>/images/button-cap.png" alt="button" class="off-button button-capabicity">
</div>
<!-- 4 -->
<div class="kontakt" id="kont">
  <div class="map">
    <img src="<?php bloginfo('template_url'); ?>/images/map2.png" alt="map" class="first">
    <img src="<?php bloginfo('template_url'); ?>/images/map.png" alt="map" class="second">
  </div>
  <div class="kont-info">
    <h3>KONTAKT</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi molestie egestas massa, et sollicitudin urna mattis faucibus.
       Praesent sagittis laoreet est, et efficitur enim lacinia id. Aenean imperdiet diam nec efficitur commodo. Morbi at purus tempus tellus tempus placerat.
       Sed faucibus sed elit at lacinia.</p>
       <img src="<?php bloginfo('template_url'); ?>/images/button-kontakt.png" alt="button">
  </div>
</div>
<nav class="lower-nav">
  <ul class="first-list">
    <li><h3 class="hed">O NAS</h3></li>
    <li><a href="#onas">O nas</a></li>
    <li><a href="#assorty">Asortyment</a></li>
    <li><a href="#cooperation">Współpraca</a></li>
    <li><a href="#kont">Kontakt</a></li>
  </ul>
  <ul>
    <li><h3 class="hed">WSPÓŁPRACA</h3></li>
    <li><a href="">Warunki współpracy</a></li>
    <li><a href="">Cennik</a></li>
    <li><a href="">Umowy</a></li>
    <li><a href="">Dostawy</a></li>
  </ul>
  <ul>
    <li><h3 class="hed">GODZINY OTWARCIA</h3></li>
    <li>Pon. - Wt. 6:00 - 19:00</li>
    <li>Śr. - Pt. 6:00 - 18:00</li>
    <li>Sobota 6:00 - 16:00</li>
    <li>Niedziela i święta 7:00 - 14:00</li>
  </ul>
  <ul>
    <li><h3 class="hed">KONTAKT</h3></li>
    <li>ul. Upalna 99</li>
    <li>15-600 Białystok</li>
    <li>tel. 500 110 110</li>
    <li>Niedziela i święta 7:00 - 14:00</li>
  </ul>
</nav>
</main>
 <?php get_footer(); ?>
<?php wp_footer(); ?> 
  </body>
</html>
