<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registerstyle.css">
    <title>Register</title>
</head>
<body>
    <div class="container regis">
        
        <div class="form">
            <form action="" method="post">
                <h1>Registrasi</h1>

                <label for="email"><b>Email</b></label><br>
                <input type="email" name="email" class="input" placeholder="Masukkan email"><br>

                <label for="username"><b>Username</b></label><br>
                <input type="text" name="username" class="input" placeholder="Masukkan username"><br>

                <label for="password"><b>Password</b></label><br>
                <input type="password" name="password" class="input" placeholder="Password"><br>

                <label for="konfirmasi"><b>Konfirmasi Password</b></label><br>
                <input type="password" name="konfirmasi" class="input" placeholder="Konfirmasi password"><br><br><br><br>

                <p class="back">Sudah punya akun?
                <a href="login.php">Login</a>
                </p>

                <input type="submit" name="regis" class="submit" value="Registrasi"><br><br>
            </form>


        
        </div>
    </div>
</body>
</html>

<?php 
    require 'config.php';

    if((isset($_POST['regis']))){
        $email = $_POST['email'];
        $username = $_POST ['username'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];

        //cek username udah digunakan atau belum
        $sql = "SELECT * FROM akun WHERE username = '$username'";
        $user = $db->query($sql);

        if(mysqli_num_rows($user) > 0 ){
            echo "<script>
                    alert('username telah digunakan, silahkan gunakan username yang lain')
                <script>";
        }else{
            //cek konfirmasi password 
            if($password == $konfirmasi){
                
                $password = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT INTO akun (email, username, psw)
                    VALUES ('$email', '$username', '$password')";
                $result = $db->query($query);

                if($result){
                    echo "<script>
                            alert('Registrasi Berhasil')
                        </script>";
                }else {
                    echo "<script>
                            alert('Registrasi Gagal coba lagi')
                        </script>";
                }
            }else {
                echo "<script>
                        alert('konfirmasi password salah')
                    </script>";
            }
        }
    }