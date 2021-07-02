<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="StyleSheet" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

</head>
<style>
h1{
    margin-top: 13%;
    color:white;
}
#hero #heroContent {
  padding-top: 10%;
}
        .example{
            margin-left: 35%;           
        }

        label{
            color: white;
        }
        h1{
            text-align: center;
        }
        button{
            margin-left: 45%;
        }
</style>
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
require "ex1.php";
$db = mysqli_select_db($conn, 'xe');
if ($db =null){
    echo '<br> NO DATA';
}
if (isset($_POST['TenDangNhap'])== true){
$TenDangNhap = $_POST["TenDangNhap"];
$MatKhau = $_POST["MatKhau"];
$sql = "SELECT * FROM KhachHang WHERE TenDangNhap = '$TenDangNhap'";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
    echo "Tên Đăng Nhập không tồn tại, vui lòng kiểm tra lại.";
    exit;
}
$row = $result->fetch_assoc();
if ($MatKhau != $row['MatKhau']) {
    echo "Mật Khẩu không đúng, vui lòng nhập lại.";
    exit;
}
session_start();
$_SESSION['TenDangNhap'] = $TenDangNhap;
echo "<h1>Xin Chào $TenDangNhap. Bạn Đã Đăng Nhập Thành Công</h1>";
die();
}
?>