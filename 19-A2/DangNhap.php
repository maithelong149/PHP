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
    <form method = "POST" action="DangNhapok.php">
    <div id="heroContent">
    <h1 style="color: white;">ĐĂNG NHẬP</h1>
            <div class="example">     
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Tên đăng nhập(*)</label>
                    <input name="TenDangNhap" type="text"class="form-control" placeholder=" Nhập username" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Mật khẩu(*)</label>
                    <input name="MatKhau"type="password" class="form-control" placeholder="Nhập password" />
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary btn-lg">Đăng Nhập</button>
        <center><p>*Nếu chưa có tài khoản thì hãy<a href="DangKi.php"> Đăng Kí*</a></p></center>
        <center><p><a href="admin.php">Đăng Nhập</a> Dành cho admin</p></center>
</body>
</html>
