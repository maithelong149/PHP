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
<form method = "POST">
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
<div id="heroContent">
    <h1 style="color: white;">TÌM KIẾM THÔNG TIN KHÁCH HÀNG</h1>
            <div class="example">     
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Họ Và Tên</label>
                    <input name="HoVaTen" type="text"class="form-control" placeholder=" Nhập Họ Tên" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Mã Khách Hàng</label>
                    <input name="MaKhachHang" type="text" class="form-control" placeholder="Nhập Mã Khách Hàng" />
                </div>
            </div>
        </div>
    <button type="submit" class="btn btn-outline-primary btn-lg" >Tìm Kiếm </button>
</body>
</html>
<?php
if (isset($_POST['MaKhachHang'])==true){
require "ex1.php";
$db = mysqli_select_db($conn, 'xe');
if ($db =null){
    echo '<br> NO DATA';
}
$HoVaTen = $_POST["HoVaTen"];
$MaKhachHang = $_POST["MaKhachHang"];
$sql = "SELECT * FROM KhachHang WHERE (HoVaTen = '$HoVaTen' or MaKhachHang = '$MaKhachHang')";
$result = $conn->query($sql);
if($result->num_rows==0){
    echo"Không Tồn Tại";
}
else {
    echo "<table class='table table-striped table-dark'><th scope='col'>Chọn</th><th scope='col'>Mã Khách Hàng</th><th scope='col'>Họ Và Tên</th><th scope='col'Email</th><th scope='col'>Điện Thoại</th><th scope='col'>Địa Chỉ</th><th scope='col'>Trạng Thái</th>";
    while($row = $result->fetch_assoc())    {
        echo "<tr><td> <input type = checkbox name='checkbox[]' value='".$row['MaKhachHang']."' >"."</td>".
        "<td> ".$row['MaKhachHang']."</td>".
            "<td> ".$row['HoVaTen']."</td>".
            "<td> ".$row['Email']."</td>".
            "<td> ".$row['DienThoai']."</td>".
            "<td> ".$row['DiaChi']."</td>".
            "<td> <input type= submit class='btn btn-outline-primary btn-lg' name='delete' id='delete' value ='Xóa'/></td>".
            "</tr>";
    }

}
}
if (isset($_POST['delete']))
{
    if (isset($_POST['checkbox']))
    {
        $chkarr= $_POST['checkbox'];
        foreach ($chkarr as $id)
        {
            // echo "Lựa chọn: $id<br>";
            $sql =" DELETE FROM KhachHang WHERE MaKhachHang ='$id'";
            if ($conn->query($sql) === TRUE) {
                echo "<h2>Xóa Thành Công</h2>";
            } else {
                echo "Error creating table: " . $conn->error;
            }
        }
    }
}
?>