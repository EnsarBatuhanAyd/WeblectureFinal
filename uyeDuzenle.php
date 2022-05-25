<?php
    require_once 'baglanti.php';
    session_start();
    if (isset($_SESSION["kullanici_adi"])) {
        $yetki = $_SESSION["yetki_adi"];
        if ($yetki == 'Admin') {
            
        }
        else {
            header("location: yetkisizkullanici.php");
        }
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
<div class="admin-bg">
     <div class="bar-frame">
  
        <nav >
        <ul class="nav">
                            <li class="nav-link"><a href="./admin.php">Anasayfa</a></li>
                            <li class="nav-link"><a href="./profile.php">Profil</a></li>
                            <li class="nav-link"><a href="./upload.php">Resim Ekle</a></li>
                            <li class="nav-link"><a href="./resimDuzenle.php">Resim Düzenle</a></li>
                            <li class="nav-link"><a href="./register.php">Üye Ekle</a></li>
                            <li class="nav-link"><a href="./uyeDuzenle.php">Üye Düzenle</a></li>
                            <li class="nav-link"><a href="./index.php">Siteye Dön</a></li>
                            <li class="nav-link"><a href="./login.php">Çıkış Yap</a></li>
                        </ul>
        
        </nav>
    </div>
    <div class="panel-admin">
    <div class="col-md-7 container mt-4">
        <table class="table">

            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kullanıcı Adı</th>
                    <th scope="col">Email</th>
                    <th scope="col">Yetki</th>
                    <th scope="col">Kayıt Tarihi</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <?php 

$sorgu = $conn->query("SELECT * FROM kullanicilar ORDER BY yetki_adi ASC");
$sorgu->execute();

while ($row = $sorgu->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
    $kullanici_adi = $row['kullanici_adi'];
    $email = $row['email'];
    $yetki_adi = $row['yetki_adi'];
    $kayit_tarihi = $row['kayit_tarihi'];

?>
            <tbody>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $kullanici_adi; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $yetki_adi; ?></td>
                    <td><?php echo $kayit_tarihi; ?></td>
                    <td><a href="duzenle.php?id=<?php echo $id; ?>" class="btn btn-primary">Düzenle</a></td>
                    <td><a href="uyeSil.php?id=<?php echo $id; ?>" class="btn btn-danger">Sil</a></td>
                </tr>
               
            </tbody>

            <?php 
}

?>

        </table>
    </div>
</div>
</div>
</body>

</html>