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
  <h1 style="text-align:center;">Tarihi Çeşmeler</h1>
<div class="bxslider">
  
  <div><img src="img/ipç.jpg" title="İbrahim Paşa Çeşmesi"></div>
  <p id="psag">Sadrazam Köprülü Mehmet Paşa'nın Kethüdası Ve Veziri İbrahim Paşa Tarafından 1664 Yılında Yaptırılmış Olup, Eni Boyu Yaklaşık 6 Metre Ve Kare Planlıdır. Suyunun Akışı Terazi Sistemiyle Sağlanmıştır. Kitabesinde İbrahim Paşa'nın Ismi Ve Ebcet Hesabıyla Düşürülen Tarihi Okunmaktadır. Çeşme 1933 Yılında Tamir Ettirilmiştir. Kent Merkezinin Hemen Ortasında, Çoban Mustafa Paşa Hamamı'nın Yanı Başındadır.</p>
            

  <div><img src="img/eç.jpg" title="Eskihisar Çeşmesi"></div>
  <p id="psag">1772 Tarihinde Yaptırılan Bu Tarihi Çeşme Adını Eskihisar Köyünden Almıştır. Üzeri Piramit Şeklinde Bir Çatı Ile Örtülü Olan Çeşme, Kare Planlıdır. Ön Ve Arka Yüzleri 270cm., Yan Kısımları Ise 315 Cm'dir. Yüksekliği De 2 Metreye Yakındır. Tarihi Değeri Büyük Olan Bu Çeşme 1850 Yılında Esaslı Bir Onarım Görmüştür.</p>
           
 

</div>
<script src="main.js" charset="utf-8"></script>
</body>
</html>
<?php
include("baglanti.php");
?>