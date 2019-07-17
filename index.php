<!-- skrip login -->
<?php
// include konektor
include "koneksi/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIAKAD UIM</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- card -->
    <div class="container d-flex justify-content-center" style="margin-top:50px;">
        <div class="row cards">
            <div class="col corner1">
                <!-- layout karakter -->
                <img id="bola" class="float-right" src="img/bola.png" alt="">
                <div class="tagline">
                    <p class="tag">HEBAT</p>
                    <p class="tag">BERKARAKTER</p>
                    <p class="tag">QUR'ANI</p>
                </div>
                <img src="img/student.png" id="student" alt="">
                <p id="puim"><strong>UIM</strong></p>
                <div class="controller">
                    <img src="img/forward.png" alt="">
                    <img src="img/next.png" alt="">
                </div>
            </div>
            <div class="col corner2">
                <!-- form login -->
                <div class="container">
                    <p class="pwelcome">Welcom To</p>
                    <p style="font-size:25px;margin:0;"><strong>SIAKAD UIM</strong></p>
                    <img id="uim"src="img/uim.png" alt="">
                        <form class="form" method="post">
                        <div class="form-group">
                            <label for="usernameinput">Username</label>
                            <input type="text" name="username" id="usernameinput" aria-describedby="emailHelp" placeholder="Masukan NIM Anda">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="text-center">
                        <button type="submit" class="tombol" name="submit"><strong>Masuk</strong></button>
                        <a href=""><p>Lupa Akun?</p></a>
                        
                        <?php
                        if(isset($_POST['submit'])){

                            $username = $_POST['username'];
                            $password = $_POST['password'];

                            // ambil data admin
                            $ambil = mysqli_query($koneksi,"SELECT * FROM admin WHERE un_admin ='$username' AND pw_admin='$password'" );
                            $validasi = $ambil->num_rows;

                            if($validasi > 0 ){
                                echo "<p>Login Berhasil</p>";
                            }else{
                                echo "<p>Login Gagal</p>";
                            }

                        }
                        
                        ?>


                        </div>
                        </form>
                    <div class="sosmed">
                        <div class="browser text-center">
                            <img src="img/browser.png" alt="">
                        </div>
                        <div class="instagram">
                            <img src="img/instagram.png" alt="">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>