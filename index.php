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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Square+Peg&display=swap" rel="stylesheet"> 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ana Sayfa</title>
</head>

<body style="background-color:black;">
<div class="photo-gallery">

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
<div class="mainpage-bg">
  <h1 class="greeting-title">Ne Görmek İstersiniz?</h1>

  <ul class="buttons-area">  
    
    <a href="tarih.php"><li class="buttons">Tarih</li></a>
    <a href="doga.php"><li class="buttons">Doğa</li></a>
    <a href="sehirler.php"><li class="buttons">Şehirler</li></a>

</ul>
    <h3 class="greeting-title">Ya Da</h3>
    <a  href="ilginc.php"><li class="buttons">İlginç</li></a>
</div>

<div class="gallery-design">
        <?php
            
            $show = $conn->prepare("SELECT * FROM resimler ");
          
            $show->execute();

            while ($row = $show->fetch(PDO::FETCH_ASSOC)) {
                ?>
        <div class="gallery-images" id="gallery">
            <ul>
                <li>
                    <img alt="<?php echo $row['resim_aciklama']; ?>" src=" <?php echo "uploads/".$row['resim_konum']; ?> " />
                </li>
            </ul>
        </div>
        <?php
            }

            ?>
    </div>
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
<footer style="display:flex; justify-content:center; color:white; background-color:black;">
  <p>Galeri 2022</p>
 
</footer>
</html>