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


        <section id="iletisim">
            <div class="container">
                <h3 id="h3iletisim">İletişim Ve Öneri</h3>
                <form action="iletisim.php" method="post">
                <div id="iletisimopak">
                    <div id="formgroup">
                        <div id="solform">
                            <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                            <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                        </div>
                        <div id="sagform">
                            <input type="email" name="mail" placeholder="Email Adresiniz" required class="form-control">
                            <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                        </div>

                        <textarea name="mesaj" id="" placeholder="Mesaj Giriniz" cols="30" rows="10" required class="form-control"></textarea>
                        <input type="submit" value="Gönder">
                    </div>

                   
                </div>
                </form>
<?php require "static/footer.php";?>
             

            </div>
        </section>
        <script src="main.js" charset="utf-8"></script>
        </body>
        </html>

        <?php
        include("baglanti.php");

        if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]))
        {
            $adsoyad=$_POST["isim"];
            $telefon=$_POST["tel"];
            $email=$_POST["mail"];
            $konu=$_POST["konu"];
            $mesaj=$_POST["mesaj"];

            $ekle="INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";

            if($baglan->query($ekle)===TRUE)
            {
                echo "<script>alert('Mesajınız Başarıyla İletilmiştir.')</script>";
            }

            else
            {
                echo "<script>alert('Mesajınız Gönderilirken Bir Hata Oluştu !')</script>";
            }
        }
        ?> 

        