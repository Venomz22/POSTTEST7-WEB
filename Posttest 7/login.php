<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page VenomZ Games</title>
    <link rel="stylesheet" href="css/loginstyle.css">


</head>
<body>
    <form action="" method="post">
        <h3>Sign in</h3>
        
        <input type="text" name="user" placeholder="email atau username" class="input">
        <input type="password" name="password" placeholder="password" class="input">

        <input type="submit" name="login" value="Login" class="submit"><br><br>
        <div class="social">
          <div class="go"><a href="register.php">Register</a></div>
        </div>
    </form>
</body>
</html>

<?php
    session_start();
    require'config.php';

    if(isset($_POST['login'])){
        $user = $_POST['user'];
        $password = $_POST['password'];

        echo $user;

        $sql = "SELECT * FROM akun WHERE username='$user' OR email='$user'";
        $result = $db->query($sql);


        //cek akun ada atau tidak ada
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $username = $row['username'];
            echo $row['psw'];

            //cek password apakah valid atau tidak
            if(password_verify($password, $row['psw'])){

                $_SESSION['login'] = true;
                
                echo "<script> 
                        alert('Selamat Datang $username');   
                        document.location.href = 'index.php';  
                </script>";
            }else {
                echo "<script> 
                    alert('Username dan Password anda salah');     
                </script>";
            }
        }else {
            echo "<script> 
                 alert('Username dan password anda belum teregistrasi');   
             </script>";
        }
    }
?>