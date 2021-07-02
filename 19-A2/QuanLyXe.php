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
    margin-top: 15%;
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
            margin-left: 44%;
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
    <form method = "POST" action="DbXe.php">
    <div id="heroContent">
            <h1 style="color: white;">ĐĂNG KÍ THÔNG TIN</h1>
            <div class="example">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Mã Xe(*)</label>
                    <input name="MaXe" type="text"class="form-control" placeholder=" Nhập Mã Xe" />
                </div>
            </div>            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Dòng Sản Phẩm(*)</label>
                    <input name="TenDangNhap" type="text"class="form-control" placeholder=" Nhập Dòng Sản Phẩm" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Số Thứ Tự Sản Xuất(*)</label>
                    <input name="STT"type="password" class="form-control"placeholder="Số Thứ Tự" />
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label>Năm Sản Xuất(*)</label>
                <input name="HoVaTen"type="text" class="form-control" placeholder="Năm Sản Xuất" />
            </div>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary btn-lg">Cập Nhập Dữ Liệu</button>
</body>
</html>