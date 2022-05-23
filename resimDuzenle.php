<?php
    require_once 'baglanti.php';
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

<body style="background-color:#42506B">
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
  


    <!--Tarih Kategorisine ait veriler-->

    </div>
    <div style="margin-top:20em" class="panel-admin">
    <br/><br/>
    <h3 align="center">Resim Düzenleme İşlemleri</h3> 
    <div class="col-md-7 container mt-4">
        <caption>Tarih Kategorisi</caption>
        <table class="table">

            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Adı</th>
                    <th>Açıklama</th>
                    <th>Konum</th>
                    <th>Kategori</th>
                    <th>Yazar</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <?php 

$sorgu = $conn->query("SELECT * FROM resimler WHERE kategoriName = 'Tarih' ORDER BY id ASC");
$sorgu->execute();

while ($row = $sorgu->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
    $baslik = $row['resim_adi'];
    $aciklama = $row['resim_aciklama'];
    $konum = $row['resim_konum'];
    $kategori = $row['kategoriName'];
    $yazar = $row['yazar'];

?>
            <tbody>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $baslik; ?></td>
                    <td><?php echo $aciklama; ?></td>
                    <td><?php echo $konum; ?></td>
                    <td><?php echo $kategori; ?></td>
                    <td><?php echo $yazar; ?></td>
                    <td><a href="duzenle.php?id=<?php echo $id; ?>" class="btn btn-primary">Düzenle</a></td>
                    <td><a href="resimSil.php?id=<?php echo $id; ?>" class="btn btn-danger">Sil</a></td>
                </tr>
            </tbody>

            <?php 
}

?>

        </table>
    </div>

    <!--Doğa Kategorisine ait veriler-->

    <div class="col-md-7 container mt-4">
        <caption class="captions">Doğa Kategorisi</caption>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Adı</th>
                    <th>Açıklama</th>
                    <th>Konum</th>
                    <th>Kategori</th>
                    <th>Yazar</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <?php 

$sorgu = $conn->query("SELECT * FROM resimler WHERE kategoriName = 'Doga' ORDER BY id ASC");
$sorgu->execute();

while ($row = $sorgu->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
    $baslik = $row['resim_adi'];
    $aciklama = $row['resim_aciklama'];
    $konum = $row['resim_konum'];
    $kategori = $row['kategoriName'];
    $yazar = $row['yazar'];

?>
            <tbody>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $baslik; ?></td>
                    <td><?php echo $aciklama; ?></td>
                    <td><?php echo $konum; ?></td>
                    <td><?php echo $kategori; ?></td>
                    <td><?php echo $yazar; ?></td>
                    <td><a href="duzenle.php?id=<?php echo $id; ?>" class="btn btn-primary">Düzenle</a></td>
                    <td><a href="resimSil.php?id=<?php echo $id; ?>" class="btn btn-danger">Sil</a></td>
                </tr>
            </tbody>

            <?php 
}

?>

        </table>
    </div>

    <!--Şehirler Kategorisine ait veriler-->

    <div class="col-md-7 container mt-4">
        <caption>Şehirler Kategorisi</caption>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Adı</th>
                    <th>Açıklama</th>
                    <th>Konum</th>
                    <th>Kategori</th>
                    <th>Yazar</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <?php 

$sorgu = $conn->query("SELECT * FROM resimler WHERE kategoriName = 'Sehirler' ORDER BY id ASC");
$sorgu->execute();

while ($row = $sorgu->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
    $baslik = $row['resim_adi'];
    $aciklama = $row['resim_aciklama'];
    $konum = $row['resim_konum'];
    $kategori = $row['kategoriName'];
    $yazar = $row['yazar'];

?>
            <tbody>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $baslik; ?></td>
                    <td><?php echo $aciklama; ?></td>
                    <td><?php echo $konum; ?></td>
                    <td><?php echo $kategori; ?></td>
                    <td><?php echo $yazar; ?></td>
                    <td><a href="duzenle.php?id=<?php echo $id; ?>" class="btn btn-primary">Düzenle</a></td>
                    <td><a href="resimSil.php?id=<?php echo $id; ?>" class="btn btn-danger">Sil</a></td>
                </tr>
            </tbody>

            <?php 
}

?>

        </table>
    </div>

    <!--İlginç Kategorisine ait veriler-->

    <div class="col-md-7 container mt-4">
        <caption>İlginç Kategorisi</caption>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Adı</th>
                    <th>Açıklama</th>
                    <th>Konum</th>
                    <th>Kategori</th>
                    <th>Yazar</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <?php 

$sorgu = $conn->query("SELECT * FROM resimler WHERE kategoriName = 'ilginc' ORDER BY id ASC");
$sorgu->execute();

while ($row = $sorgu->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
    $baslik = $row['resim_adi'];
    $aciklama = $row['resim_aciklama'];
    $konum = $row['resim_konum'];
    $kategori = $row['kategoriName'];
    $yazar = $row['yazar'];

?>
            <tbody>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $baslik; ?></td>
                    <td><?php echo $aciklama; ?></td>
                    <td><?php echo $konum; ?></td>
                    <td><?php echo $kategori; ?></td>
                    <td><?php echo $yazar; ?></td>
                    <td><a href="duzenle.php?id=<?php echo $id; ?>" class="btn btn-primary">Düzenle</a></td>
                    <td><a href="resimSil.php?id=<?php echo $id; ?>" class="btn btn-danger">Sil</a></td>
                </tr>
            </tbody>

            <?php 
}

?>

        </table>
    </div>
</div>
</body>

</html>