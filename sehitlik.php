<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">

    <title>Rota Gebze</title>
</head>
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


    <section id="tyerler">
        <div id="container">
            <h3>Gebze Şehitliği</h3>
            <div class="owl-carousel owl-theme">
                <div class="card item" data-merge="1.5">
                    <img src="img/sehitlik.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">Gebze Şehitliği</h5>
                    <p class="cardp">Gebze Şehitliği, 1992-2008 yılları arasında İç Güvenlik Harekâtı’nda şehit olan ,</p>
                </div>

                <div class="card item" data-merge="1.5">
                    <img src="img/sehitlik2.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">Gebze Şehitliği</h5>
                    <p class="cardp">2 subay, 1 astsubay, 16 erbaş/er anısına yapılmış olup içerisinde toplam 19 şehit mezarı bulunan ve Gazi Mahallesi’nde 1997 yılında yapılan şehitliktir.</p>
                </div>

            
               
                
            </div>
            <?php require "static/footer.php";?>
        </div>

    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/script.js"></script>
    <script src="main.js" charset="utf-8"></script>
    </body>
</html>

<?php
include("baglanti.php");
?>