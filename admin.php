<?php
session_start();
if (isset($_SESSION["kullanici_adi"])) {

}
else {
    header("location: yetkisizerisim.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <title>Admin Panel</title>
</head>

<body>

    <div>
        <header>
            <div>
                <!-- <h5>Admin Paneli</h5> -->
            </div>
        </header>
        <section>
        <div class="admin-bg">
            <div class="bar-frame">
                <nav>
                <div class="d-flex align-items-start">
                    
                        <ul class="nav">
                            <li class="nav-link"><a href="./admin.php">Anasayfa</a></li>
                            <li class="nav-link"><a href="./profile.php">Profil</a></li>
                            <li class="nav-link"><a href="./upload.php">Resimler</a></li>
                            <li class="nav-link"><a href="./resimDuzenle.php">Resim Düzenle</a></li>
                            <li class="nav-link"><a href="./register.php">Üye Ekle</a></li>
                            <li class="nav-link"><a href="./uyeDuzenle.php">Üye Düzenle</a></li>
                        </ul>
                    </div>
                </nav>
                </div>
                <div class="panel-admin">
                   <h1 class="panel-title">Admin Paneline Hoşgeldiniz!</h1>
                    <p class="panel-text">Kullanıcılarınızı  İçeriğinizi ve her şeyi yönetin!</p>

                </div> 
        
    </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>

<?php

    include("baglanti.php");

    

?>