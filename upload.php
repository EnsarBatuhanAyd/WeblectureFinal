<?php
    // require 'admin.php';
    require_once 'baglanti.php';
    session_start();
    if (isset($_SESSION["kullanici_adi"])) {

    }
    else {
    header("location: yetkisizerisim.php");
    }

    if (isset($_POST['submit'])) {

        move_uploaded_file($_FILES["resim"]["tmp_name"],"uploads/" . $_FILES["resim"]["name"]);			
        $dosya=$_FILES["resim"]["name"];
        $secim=$_POST['kategoriler'];
        $resimAdi = $_POST['baslik'];
        $resimAciklama = $_POST['aciklama'];
        $yazar = $_SESSION['kullanici_adi'];

        if (empty($_POST["baslik"])) {
            echo '  <div class="alert alert-danger" role="alert">
                    Başlık Boş Geçilemez.
                    </div>';
        }
        elseif (empty($_POST["aciklama"])) {
            echo '  <div class="alert alert-danger" role="alert">
            Açıklama Boş Geçilemez.
                    </div>';
        }
        elseif (empty($_FILES["resim"]["name"])) {
            echo '  <div class="alert alert-danger" role="alert">
                    Bir Resim Eklemek Zorunludur.
                    </div>';
        }
        elseif (empty($_POST["kategoriler"])) {
            echo '  <div class="alert alert-danger" role="alert">
            Kategori Boş Geçilemez.
                    </div>';
        }
        else {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO resimler (resim_adi, resim_aciklama, resim_konum, kategoriName, yazar)
        VALUES ('$resimAdi', '$resimAciklama', '$dosya', '$secim', '$yazar')";
 
        $conn->exec($sql);
        echo '  <div class="alert alert-success" role="alert">
                    Başarılı bir şekilde resim eklendi.
                    </div>';
        }
 
        
    }

?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
<div class="admin-bg">
     <div class="bar-frame">
    <div >
        <nav >
       
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

    <form action="" method="POST" enctype="multipart/form-data" class="upload-forms">
        <div class="upload-panel">
            <h4 class="panel-title">Resim yükleme ekranına hoşgeldiniz!</h4>
            <label for="" class="m-2">Başlık</label>
            <input type="text" name="baslik" id="baslik" class="m-2">

            <label for="" class="m-2">Açıklama</label>
            <textarea name="aciklama" id="aciklama" cols="30" rows="1" class="m-2"></textarea>

            <label for="resim" class="m-2">Bir resim seçiniz:</label>
            <input type="file" name="resim" id="resim" value="test" class="m-2"
                accept="image/png, image/jpeg, image/jpg">

            <label for="kategoriler" class="m-2">Kategori Seçiniz:</label>
            <select name="kategoriler" id="category" class="m-2">
                <option value="0">Lütfen Seçim Yapınız</option>
                <option value="tarih">Tarih</option>
                <option value="doga">Doğa</option>
                <option value="sehirler">Şehirler</option>
                <option value="ilginc">İlginç</option>
            </select><br>
            <hr>
            <label class="m-2" for="yazar" name="yazar">Yazar : <?php echo $_SESSION['kullanici_adi'] ?></label><br>

            <button class="m-2 upload-btn" name="submit">Resim Ekle</button>


     
    </form>
    
    </div>
</div></div>
</body>

</html>