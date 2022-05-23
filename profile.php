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
        <title>Profil</title>
</head>

<body>
    <div>
    <div class="admin-bg">
     <div class="bar-frame">
   
        <nav >
            
                <ul class="nav">
                    <li class="nav-link"><a href="./admin.php">Anasayfa</a></li>
                    <li class="nav-link"><a href="./profile.php">Profil</a></li>
                    <li class="nav-link"><a href="./upload.php">Resimler</a></li>
                    <li class="nav-link"><a href="./resimDuzenle.php">Resim Düzenle</a></li>
                    <li class="nav-link"><a href="./register.php">Üye Ekle</a></li>
                    <li class="nav-link"><a href="./uyeDuzenle.php">Üye Düzenle</a></li>
                </ul>
        
        </nav>
    </div>
    <div class="panel-admin">
     
            <div class="profil-bilgi">
                <h4 class="panel-title">Profil Ekranı</h4>
                <div class="profile-pic-div">
                    <img class="profile-pic" src=" <?php echo "profilePic/".$_SESSION['profilePic']; ?> " />
                </div>
                <div>
                    Ad : <?php echo $_SESSION["ad"] ?>
                </div>
                <div>
                    Soyad : <?php echo $_SESSION["soyad"] ?>
                </div>
                <div>
                    Kullanıcı Adı : <?php echo $_SESSION["kullanici_adi"] ?>
                </div>
                <div>
                    Email : <?php echo $_SESSION["email"] ?>
                </div>
                <div>
                    Yetki Adı : <?php echo $_SESSION["yetki_adi"] ?>
                </div>
                <div>
                    Kayıt Tarihi : <?php echo $_SESSION["kayit_tarihi"] ?>
                </div>
                <hr style="width: 55%">
                <div>
                    <a class="logout-btn" href="logout.php">Çıkış Yap</a>
                </div>
            </div>
        
    </div>
</div></div>
</body>

</html>