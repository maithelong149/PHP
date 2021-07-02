<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="StyleSheet" href="./css/style.css">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

</head>

<body>
    <header>
        <a href="Homepage.php" class="logo"><img style="height:70px" src="Silk Road.png"></a>
                 <a href="DangNhap.php"><img class="logo3" src="U1.png" alt=""></a>
                 <a href="TimKiem.php"><img class="logo2" src="S1.png" alt=""></a>

        <nav>
            <ul>
                <li><a href= "Homepage.php"> Home Page</a></li>
                <li><a href= "Store.php"> Store</a></li>
                <li><a href="" target="_blank">Contacs Us</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>
<?php
session_start();
if (isset($_SESSION['TenDangNhap']))
unset($_SESSION['TenDangNhap']);
echo"Đăng Xuất Thành Công";
echo"<a href='DangNhap.php'>Đăng Nhập</a>";
?>