<?php 
    include("baglanti.php");


    $username_err = $parola_err = '';

    if (isset($_POST["giris"])) {

        //Username Validation

        if (empty($_POST["kullaniciAdi"])) {
            $username_err = "Kullanıcı Adı boş geçilemez";
        }
        else {
            $username = $_POST["kullaniciAdi"];
        }


        //Password Validation

        if (empty($_POST["parola"])) {
            $parola_err = "Parola boş geçilemez";
        }
        else {
            $parola = $_POST["parola"];
        }
        
        if (isset($username) && isset($parola)) {

            $secim = "SELECT * FROM kullanicilar WHERE kullanici_adi = '$username'";
            $run = mysqli_query($baglanti, $secim);
            $kayitSayi = mysqli_num_rows($run);

            if ($kayitSayi > 0) {
                $kayit = mysqli_fetch_assoc($run);
                $sifre = $kayit["parola"];

                if (password_verify($parola,$sifre)) {
                    session_start();
                    $_SESSION["profilePic"]=$kayit["profilePic"];
                    $_SESSION["ad"]=$kayit["ad"];
                    $_SESSION["soyad"]=$kayit["soyad"];
                    $_SESSION["kullanici_adi"]=$kayit["kullanici_adi"];
                    $_SESSION["email"]=$kayit["email"];
                    $_SESSION["kayit_tarihi"]=$kayit["kayit_tarihi"];
                    $_SESSION["yetki_adi"]=$kayit["yetki_adi"];
                    header("location: admin.php");
                }
                else {
                    echo '  <div class="alert alert-danger" role="alert">
                    Parola Yanlış, Lütfen Tekrar Deneyiniz.
                    </div>';
                }
            }
            else {
                echo '  <div class="alert alert-danger" role="alert">
                    Kullanıcı Adı Yanlış. Lütfen Tekrar Deneyiniz.
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

    <title>Giriş Yap</title>
</head>

<body style="background-color:#42506B" >
    <div style="background-color:#42506B" >
    <div class="container p-5">
   
        <h1 style="color:white " align="center">Giriş Yap</h1>
        <h4 style="color:white " align="center">Admin Paneline Giriş Yapın!</h4>
        <div class="card p-5"style="background-color:#42506B" >
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label style="color:white " for="exampleInputEmail1" class="form-label">Kullanıcı Adı</label>
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
                
                <div class="mb-3">
                    <label style="color:white " for="exampleInputPassword1" class="form-label">Parola</label>
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

                <button type="submit" class="btn btn-primary" name="giris">Giriş Yap</button>
                
            </form>
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

</html>