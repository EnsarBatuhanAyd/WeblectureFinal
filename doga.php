<?php
    require_once 'baglanti.php'
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Doğa</title>
</head>

<body style="background-color:black;">
<div class="mainpage-navbar-area">
    <div >
        <ul class="mainpage-navbar">
        <li class="navbar-item">
                <a class="nav-link" href="sehirler.php">Şehirler</a>
            </li>
            <li class="navbar-item">
                <a class="nav-link" href="doga.php">Doğa</a>
            </li>
            <li class="navbar-item"> <a class="nav-link" href="index.php"> <h1 class="bar-title">GALERİ</h1></a></li>
            <li class="navbar-item">
                <a class="nav-link" href="ilginc.php">İlginç</a>
            </li>
            <li class="navbar-item">
                <a class="nav-link" href="tarih.php">Tarih</a>
            </li>
            
            
        </ul>
    </div>
</div>
<div class="doga-bg">
<h1 class="greeting-title">Nefes Kesen Doğa</h1>
<p class="greeting-bottom-title">Doğal güzelliklerin nefes kesen görüntüleri</p>
</div>
<div class="gallery-design">
        <?php
            
            $show = $conn->prepare("SELECT * FROM resimler WHERE kategoriName = 'doga'");
            $show->execute();

            while ($row = $show->fetch(PDO::FETCH_ASSOC)) {
                ?>
        <div class="gallery-images" id="gallery">
            <ul>
                <li>
                    <img src=" <?php echo "uploads/".$row['resim_konum']; ?> " />
                </li>
            </ul>
        </div>
        <?php
            }

            ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

<footer class="container-fluid bg-grey py-5">
<div class="container">
   <div class="row">
      <div class="col-md-9">
         <div class="row">
            <div class="col-md-6 ">
               <div class="logo-part">
                  <h1 class="logo-footer">Galeri</h1>
                  <p>Konya.Türkiye</p>
                  <p>Özgün bir tasarım galeri sitesi..</p>
               </div>
            </div>
            <div class="col-md-6 px-4">
               <h6>Hakkımızda</h6>
               <p>Mükkemel kalitedeki görüntüler ile..</p>
               <a href="#" class="btn-footer"> Daha Fazla Bilgi </a><br>
               <a href="admin.php" class="btn-footer"> Admin Girişi</a>
            </div>
         </div>
      </div>
      <div class="col-md-3">
         <div class="row">
            <div class="col-md-6 px-4">
               <h6> Help us</h6>
               <div class="row ">
                  <div class="col-md-6">
                     <ul>
                        <li> <a href="#"> Şehirler</a> </li>
                        <li> <a href="#"> Doğa</a> </li>
                        <li> <a href="#"> İlginç</a> </li>
                        <li> <a href="#"> Tarih</a> </li>
                       
                     </ul>
                  </div>
                  
               </div>
            </div>
           
         </div>
      </div>
   </div>
</div>
</div></footer>
</html>