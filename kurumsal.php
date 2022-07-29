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
  <h1 style="text-align:center;">Tarihi Camiler</h1>
<div class="bxslider">
  
  <div><img src="img/camii.jpg" title="Çoban Mustafa Paşa Cami"></div>
  <p id="psag">Camii, yapılar topluluğunun merkezinde ve Gebze'ye hakim bir mevkide yer alır. 1510 yılında Çoban Mustafa Paşa tarafından yaptırılmıştır. Külliyenin yapımının çok önceden planlandığı ve anonim bir çalışmayla ortaya çıkarıldığı anlaşılmaktadır.<br>Mustafa Paşa Mısır'a vali olarak atandığında yapımın sürdüğü bilinmektedir. Paşa Mısır bezemelerinden etkilenerek, camisi için taşınabilir parçaları Kahire'de yaptırmıştır. Darıca iskelesinden Gebze'ye ulaştırılan süsleme öğeleri Mısırlı ustalar tarafından yerlerine yerleştirilmiştir.</p>
            

  <div><img src="img/ibc2.jpg" title="İlyas Bey Cami"></div>
  <p id="psag">İlyas Bey tarafından yaptırılan caminin inşa tarihi kesin olarak bilinmemektedir. Ancak Gebze'nin ilk fethedildiği yıllarda, 1326'da yapılmaya başlandığı tahmin edilmektedir. İlyas Bey Camii , Osmanlılardan kalma en eski cami sayılmaktadır</p>
           
  <div><img src="img/soc.jpg" title="Sultan Orhan Cami"></div>
  <p id="psag">Gebze'nin batısında yer alan cami, tahmini olarak 1323-1331 yılları arasında inşa edilmiştir. Osmanlı mimarisinin ilk örneklerinden olan camiyi, Gebze'nin kurucusu olan Sultan Orhan yaptırmıştır. Sultan Orhan Camii, erken Osmanlı döneminin en basit ve sade örneklerinden biri olarak kabul edilir. Selçuklu etkisinde, fakat kendine özgü bir mimari yaratma isteği yapıda göze çarpar. Caminin planı, 14.50 mt.x 14.50 mt. ebadında olup kare şeklindedir.</p>
      
  <div><img src="img/kbc.jpg" title="Merdivenli Cami (Karabakal Mescidi)"></div>
  <p id="psag">15. yüzyıl başlarında inşa edilen cami üç katlı olup, üzeri kiremitle kaplı bir çatı ile örtülüdür. Tek minareli ve tek şerefelidir</p>
    
  <div><img src="img/pe.jpg" title="Pertev Paşa Camii"></div>
  <p id="psag">Yerli Cami olarak da tanınan bu cami 1785 tarihinde, Darıca'da doğan Osmanlı devlet adamı Seyyit Mehmet Pertev Paşa tarafından yaptırılmıştır. Rumlar zamanında Darıca'nın Müslüman yerli halkı tarafından inşa edilmiştir.</p>
   
  <div><img src="img/car.jpg" title="Çarşı  Camii"></div>
  <p id="psag">Tavşancıl'ın  Merkez  Camii  niteliğindeki  bu  cami  çarşı  içinde yeralmaktadır. Minberi bulunmadığı için sadece vakit namazlarının eda  edilmesinde kullanılmıştır.İnşa  tarihi  ve  kimin  tarafından  yaptırıldığı  bilinmemektedir.Cami  kare planlı, kâgirolarak yapılmış olupüzeri çatı ile örtülmüştür. Caminin temel malzemesi taştır. 1818 tarihindeki onarım sırasında binaya çeşitli ağaç işlemeler ve asma katı destekleyen  ağaç  sütunlar  ilave  edilmiştir.  Caminin minaresi  sağ  taraftadır  ve  tek şerefelidir.</p>
 

</div>
<script src="main.js" charset="utf-8"></script>
</body>
</html>
<?php
include("baglanti.php");
?>