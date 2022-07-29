<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="jquery-1.9.1.js"></script>
	<script src="jquery.bxslider.js"></script>
	<link href="jquery.bxslider.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
	
</head>
<script>

$(function(){
  $('.bxslider').bxSlider({
  	responsive:true,
    mode: 'fade',
    captions: true,
    slideWidth: 600
  });
});
</script>
<body>
<nav>
        <div class="nav-logo">Rota Gebze</div>
        <ul class="nav-links">
            <li><a href="index.php"><i class="fas fa-home ikon"></i>Anasayfa</a></li>
            <li><a href="kurumsal.php">Tarihi Camiiler</a></li>
            <li><a href="gebze.php">Çeşmeler</a></li>
            <li><a href="haberler.php">Kaleler Ve Kuleler</a></li>
            <li> <a href="hamam.php">Han Ve Hamamlar</a></li>
            <li><a href="doga.php">Doğa Turizmi</a></li>
            <li><a href="yemekler.php">Yöresel Yemekler</a></li>
            <li><a href="sehitlik.php">Gebze Şehitliği</a></li>
            <li><a href="iletisim.php">İletişim</a></li>
            <li><a href="panelgiris.php">Yönetici Girişi</a></li> 
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
  <h1 style="text-align:center;">Tarihi Kale ve Kuleler</h1>
<div class="bxslider">
  
  <div><img src="img/esk.jpg" title="Eskihisar Kalesi"></div>
  <p id="psag">Deniz kıyısında yer alan Eskihisar'ın kuzeydoğu kesiminde, dik yamaçlı bir tepe üzerinde, Eskihisar'daki limana ve İzmit Körfezi'nin kıyı şeridini savunmak amacıyla, Bizanslıların Komnenoslar (Komneus) döneminde yaklaşık 800 yıl önce Bizans İmparatoru 1. Manuel Komnenos tarafından inşaa ettirildiği çeşitli kaynaklarda ifade edilmektedir.Orijinal halini koruyarak bugüne kadar ayakta kalan kale, dikdörtgen planlı olup, toplam 10 burcu ve kaleye giriş çıkışı sağlayan 4 kapısı bulunmaktadır.</p>
                  

</div>
<script src="main.js" charset="utf-8"></script>
</body>
</html>
<?php
include("baglanti.php");
?>