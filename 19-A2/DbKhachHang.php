<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="StyleSheet" href="./css/style.css">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

</head>
<style>
    h1{
        margin-top: 13%;
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
<?php
require 'ex1.php';
$db = mysqli_select_db($conn, 'Xe');
if ($db == null)
    echo '<br>NO Data';
// $sql = "CREATE TABLE KhachHang (
//     MaKhachHang INT(20),
//     TenDangNhap VARCHAR(30),
//     HoVaTen VARCHAR(31),
//     MatKhau CHAR(30),
//     Email CHAR(20),
//     DienThoai INT(11),
//     DiaChi NVARCHAR(50),
//     PRIMARY KEY (TenDangNhap)
//     )";
// $sql = "CREATE TABLE XeMoi (
//     MaXe INT(20),
//     DongSanPham VARCHAR(30),
//     NamSX VARCHAR(31),
//     STT CHAR(30),
//     PRIMARY KEY (MaXe)
//     )";
$MaKhachHang = $_POST["MaKhachHang"];
$TenDangNhap = $_POST["TenDangNhap"];
$HoVaTen = $_POST["HoVaTen"];
$MatKhau = $_POST["MatKhau"];
$Email = $_POST["Email"];
$DienThoai = $_POST["DienThoai"];
$DiaChi = $_POST["DiaChi"];
$sql = " INSERT INTO KhachHang (MaKhachHang, TenDangNhap, HoVaTen, MatKhau, Email, DienThoai, DiaChi) VALUES (N'$MaKhachHang', N'$TenDangNhap', N'$HoVaTen', N'$MatKhau', N'$Email', N'$DienThoai', N'$DiaChi');";
if ($conn->query($sql) === TRUE) {
    echo "<center><h1>Đăng Kí Thành Công</h1></center>";
} else {
    echo"Error: ". $conn->error;
}
$conn->close();
?>