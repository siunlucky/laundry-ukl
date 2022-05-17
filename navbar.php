<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style-navigasi.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo">
                <a href=''>
                    Laundry
                </a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="list-paket.php">Paket</a></li>
                    <li><a href="list-transaksi.php">Transaksi</a></li>
                    <li><a href="list-member.php">Member</a></li>
                    <li><a href="list-user.php">User</a></li>
                    <li style="text-decoration: underline;"><?=($_SESSION["user"]["username"])?></li>
                    <li><a class="text-danger" href="login.php">Logout</a></li>

                </ul>
            </div>
        </div>
    </nav>
</body>
</html>