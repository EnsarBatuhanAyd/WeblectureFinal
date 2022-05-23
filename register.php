<?php 
    include("baglanti.php");


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

    $username_err = $email_err = $parola_err = $parolatkr_err = '';

    $yetki = '';

    $ad = $soyad = '';
    			
    $dosya = '';

    if (isset($_POST["kaydet"])) {

        
        //Username Validation

        if (empty($_POST["kullaniciAdi"])) {
            $username_err = "Kullanıcı Adı boş geçilemez";
        }
        else if (strlen($_POST["kullaniciAdi"])<6) {
            $username_err = "Kullanıcı adı en az 6 karakter olmalıdır.";
        }
        else if (!preg_match('/^[a-z\d_]{5,20}$/i', $_POST["kullaniciAdi"])) 
        {
            $username_err = "Kullanıcı adı büyük, küçük harf ve rakamdan oluşmalıdır.";

        }
        else {
            $username = $_POST["kullaniciAdi"];
        }

        //Email Validation
 
        if (empty($_POST["email"])) {
            $email_err = "Email boş geçilemez";
        }
        else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email_err = "Geçersiz email formatı";
        }
        else {
            $email = $_POST["email"];
        }

        //Password Validation

        if (empty($_POST["parola"])) {
            $parola_err = "Parola boş geçilemez";
        }
        else {
            $parola = password_hash($_POST["parola"], PASSWORD_DEFAULT);
        }

        //Password Again Validation

        if (empty($_POST["parolatkr"])) {
            $parolatkr_err = "Parola Tekrar kısmı boş geçilemez";
        }
        else if ($_POST["parola"] != $_POST["parolatkr"]) {
            $parolatkr_err = "Parola eşleşmiyor.";
        }
        else {
            $parolatkr = $_POST["parolatkr"];
        }

        $yetki = $_POST["yetki"];
        $ad = $_POST["name"];
        $soyad = $_POST["surname"];


        move_uploaded_file($_FILES["profilePic"]["tmp_name"],"profilePic/" . $_FILES["profilePic"]["name"]);
        $dosya=$_FILES["profilePic"]["name"];

        
        

        if (isset($ad) && isset($soyad) && isset($username) && isset($email) && isset($parola) && isset($parolatkr) && isset($yetki) && isset($dosya)) {

        $add = "INSERT INTO kullanicilar (ad, soyad, kullanici_adi, email, parola, yetki_adi, profilePic) VALUES ('$ad', '$soyad', '$username', '$email', '$parola', '$yetki', '$dosya')";
        $runAdd = mysqli_query($baglanti, $add);

        if ($runAdd) {
            echo '  <div class="alert alert-success" role="alert">
                    Başarılı bir şekilde üye olundu.
                    </div>';
            // header("Refresh: 2; url=login.php");
            
        }
        else {
            echo '  <div class="alert alert-danger" role="alert">
                    Üye olunurken bir problem oluştu, lütfen tekrar deneyiniz.
                    </div>';
        }

        mysqli_close($baglanti);


    }
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Üye Kayıt</title>
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
    </div>
    <div class="panel-admin">
    <div  class="container p-8">

        <h3 align="center">Üye Kayıt İşlemleri</h3>
        <div style="background-color:#42506B; align-items:center;"class="card ">
            <form action="register.php" method="POST" enctype="multipart/form-data">

                <div class="col-md-10 mb-2">
                    <label for="exampleInputName" class="form-label">Ad</label>
                    <input type="text" class="form-control
                    

                    
                    " id="exampleInputName" name="name">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?php
                            echo $ad;
                        ?>
                    </div>
                </div>

                <div class="col-md-10 mb-3">
                    <label for="exampleInputSurname" class="form-label">Soyad</label>
                    <input type="text" class="form-control
                    

                    
                    " id="exampleInputSurname" name="surname">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?php
                            echo $soyad;
                        ?>
                    </div>
                </div>

                <div class="col-md-10 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kullanıcı Adı</label>
                    <input type="text" class="form-control
                    
                    <?php
                        if(!empty($username_err)) {
                            echo "is-invalid";
                        }
                    ?>
                    
                    " id="exampleInputEmail1" name="kullaniciAdi">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?php
                            echo $username_err;
                        ?>
                    </div>
                </div>
                <div class="col-md-10  mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email adresi</label>
                    <input type="text" class="form-control
                    
                    <?php
                        if(!empty($email_err)) {
                            echo "is-invalid";
                        }
                    ?>
                    
                    " id="exampleInputEmail1" name="email">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?php 
                            echo $email_err;
                        ?>
                    </div>
                </div>
                <div class="col-md-10 mb-3">
                    <label for="exampleInputPassword1" class="form-label">Parola</label>
                    <input type="password" class="form-control
                    
                    <?php
                        if(!empty($parola_err)) {
                            echo "is-invalid";
                        }
                    ?>
                    
                    " id="exampleInputPassword1" name="parola">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?php
                            echo $parola_err;
                        ?>
                    </div>
                </div>

                <div class="col-md-10 mb-3">
                    <label for="exampleInputPassword1" class="form-label">Parola Tekrar</label>
                    <input type="password" class="form-control
                    
                    <?php
                        if(!empty($parolatkr_err)) {
                            echo "is-invalid";
                        }
                    ?>

                    " id="exampleInputPassword1" name="parolatkr">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?php 
                            echo $parolatkr_err;
                        ?>
                    </div>
                </div>

                <label for="profilePic" class="col-md-2 m-1">Bir resim seçiniz:</label>
                <input type="file" name="profilePic" id="profilePic" value="test" class="m-2"
                    accept="image/png, image/jpeg, image/jpg, image/jfif">

                <div class=" col-md-2 mb-3">
                    <label for="exampleInputPassword1" class="form-label">Yetki</label>
                    <select name="yetki" id="">
                        <option value="Editor">Editör</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>

                <button style="margin-left:9em;" type="submit" class="btn btn-primary" name="kaydet">Üye Ol</button>

            </form>
        </div>
    </div>
                    </div>
                    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>