<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="StyleSheet" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
            margin-left: 47%;
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
    <form method = "POST" action="DbKhachHang.php">
    <div id="heroContent">
            <h1 style="color: white;">ĐĂNG KÍ THÔNG TIN</h1>
            <div class="example">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Mã Khách Hàng(*)</label>
                    <input name="MaKhachHang" type="text"class="form-control" placeholder=" Nhập Mã Khách Hàng" />
                </div>
            </div>            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Tên đăng nhập(*)</label>
                    <input name="TenDangNhap" type="text"class="form-control" placeholder=" Nhập Tên Đăng Nhập" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Mật khẩu(*)</label>
                    <input name="MatKhau"type="password" class="form-control"placeholder="Nhập Mật Khẩu" />
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label>Họ và tên(*)</label>
                <input name="HoVaTen"type="text" class="form-control" placeholder="Nhập họ và tên" />
            </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label>Số Điện thoại(*)</label>
                <input name="DienThoai"type="text" class="form-control" >
            </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label>Email</label>
                <input name ="Email"type="email" class="form-control" placeholder="Example@gmail.com">
            </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label >Địa Chỉ</label>
                <input name ="DiaChi" class="form-control" placeholder="Example@gmail.com">
            </div>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary btn-lg">Đăng Kí</button>
        <center><p>*Nếu đã có tài khoản thì hãy<a href="DangNhap.php"> Đăng Nhập*</a></p></center>
</body>
</html>