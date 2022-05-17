<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Kasir</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style-login-kasir-2.css">
</head>
<body>
    <div class="limiter">
        <div class="container">
            <div class="wrap">
                <form class="form-login-kasir"action="" method="post">
                    <span class="login-kasir-title">Login Kasir</span>

                    <div class="wrap-idpass validate-input" data-validate="Valid username is required">
                        <input class="wrap-login-kasir" type="text" name="username" placeholder="Username">

                    </div>

                    <div class="wrap-idpass validate-input" data-validate="Password is required">
                        <input class="wrap-login-kasir" type="password" name="password" placeholder="Password">

                    </div>

                    <div class="container-login-kasir-button">
                        <button type="submit" name="login" class="login-kasir-btn">
                            Login
                        </button>
                    </div>



                </form>

                <?php
                session_start();
                include "connection.php";

                if (isset($_POST["login"])) {
                    $username = $_POST["username"];
                    $password = sha1($_POST["password"]);

                    $sql = "select * from user where username='$username' and password='$password'";
                    $hasil = mysqli_query($connect, $sql);

                if (mysqli_num_rows($hasil) > 0) {
                    $user = mysqli_fetch_array($hasil);
                    $_SESSION["user"] = $user;
                    header('location:list-user.php');
                }else {
                    echo"<script>alert('Username atau Password Belum Terdaftar');</script>";
        
                    }
                }
                ?>

            </div>
        </div>
    </div>
</body>
</html>