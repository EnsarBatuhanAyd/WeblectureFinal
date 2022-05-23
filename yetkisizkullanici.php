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
        <div class="menu">
            <nav class="menuNav">
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
        <div>
            <?php
            
            echo '  <div class="alert alert-danger" role="alert">
                    Yetkileriniz dahilinde bu işlemi yapamazsınız..
                    </div>';
                    header("Refresh: 2; url=admin.php");

            ?>
        </div>
    </div>
</body>

</html>