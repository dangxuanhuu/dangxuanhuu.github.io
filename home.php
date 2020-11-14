<?php 
  include("dbconnect.php");
 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Xe Đạp Style</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="dautrang">
        <div class="left">
            <div class="fa fa-facebook"></div>
            <div class="fa fa-twitter"></div>
            <div class="fa fa-google-plus"></div>
            <div class="fa fa-tumblr"></div>
            <span>Call for reservation: +011 29 345 678</span>
        </div>
        <div class="right">
            <span>Opening Hours : 7:00am - 10:00pm</span>
            <div class="fa fa-shopping-bag" ></div>
        </div>
    </div>
    <!-- end dautrang -->
    <nav class="navbar navbar-expand-sm" style="color: chocolate;">
        <a class="navbar-brand" href="https://www.google.com/search?q=ong&sxsrf=ALeKk01wWwa2ocjtdPaqTkWKXKYCDNqvOw:1599649026082&source=lnms&tbm=isch&sa=X&ved=2ahUKEwj-2Nv_9NvrAhUOA4gKHf2jBoYQ_AUoAXoECBwQAw&biw=1366&bih=625"><img src="images/img9.jfif" alt=""></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <img src="img/logo.png" alt="" style="width: 100px;height: 100px;">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Trang Chủ<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nổi Bật</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="banchaynhat.php">Bán Chạy Nhất</a>
                        <a class="dropdown-item" href="giathapnhat.php">Giá Thấp Nhất</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nam.php">Dành Cho Nam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nu.php">Dành Cho Nữ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lienhe.php">Liên Hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gioithieu.php">Giới Thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dangky.php">Đăng ký</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- end navbar -->
    <div id="huu" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#huu" data-slide-to="0" class="active"></li>
            <li data-target="#huu" data-slide-to="1"></li>
            <li data-target="#huu" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="img/11.png" alt="" class="img-fluid" style="width: 100%; height: 400px;">
            </div>
            <div class="carousel-item">
                <img src="img/12.png" alt="" class="img-fluid" style="width: 100%; height: 400px;">
            </div>
            <div class="carousel-item">
                <img src="img/13.png" alt="" class="img-fluid" style="width: 100%; height: 400px;"> 
            </div>
        </div>
        <a class="carousel-control-prev" href="#huu" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#huu" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<!-- end slider -->
    <div class="container">
        <div class="row">
          <div class="col-md-3">
            <img src="img/logovc.png" alt="" class="img-fluid" style="width: 80px; height: 80px;">
            <h3 style="font-weight: bold;">Miễn Phí vận chuyển</h3>
            <p>
              Nội Thành Hà Nội
            </p>
          </div>
          <div class="col-md-3">
            <img src="img/logotv.png" alt="" class="img-fluid" style="width: 80px; height: 80px;">
              <h3 style="font-weight: bold;">Miễn Phí Tư Vấn</h3>
              <p>Gọi điện-zalo-messenger-SMS</p>
  
          </div>
          <div class="col-md-3">
            <img src="img/logobt.jfif" alt="" class="img-fluid" style="width: 80px; height: 80px;">
              <h3 style="font-weight: bold;">Bảo trì miễn phí</h3>
              <p>Áp dụng 15 ngày đầu</p>
  
          </div>
          <div class="col-md-3">
            <img src="img/logobh.jfif" alt="" class="img-fluid" style="width: 80px; height: 80px;">
            <h3 style="font-weight: bold;">Bảo hành</h3>
            <p>Áp dụng với khung sườn</p>
  
        </div>
        </div>
      </div>
      <!-- end container -->
      <h2 style="color: chocolate; text-align:center"> Xe Đạp Dành Cho Trẻ </h2>
      <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="img/x1.webp" alt="" class="img-fluid">
                    <a href="">Xe đạp thể thao trẻ em GH Bike, 20 inch, màu Cam</a>
                    <p>Giá: 2.100.000</p>
                </div>
                <div class="col-md-3">
                    <img src="img/x2.webp" alt="" class="img-fluid">
                    <a href="">Xe đạp thể thao trẻ em GH Bike, 20 inch, màu đỏ</a>
                    <p>Giá: 3.400.000</p>
                </div>
                <div class="col-md-3">
                    <img src="img/x3.webp" alt="" class="img-fluid">
                    <a href="">Xe đạp thể thao trẻ em GH BIKE, 20 inch, màu xanh dương</a>
                    <p>Giá: 2.000.000</p>
                </div>
                <div class="col-md-3">
                    <img src="img/x4.webp" alt="" class="img-fluid">
                    <a href="">Xe đạp thể thao trẻ em Keith Bike 16inch, màu đỏ</a>
                    <p>Giá: 2.800.000</p>
                </div>
                <div class="col-md-3">
                    <img src="img/b4.png" alt="" class="img-fluid">
                    <a href="">Xe đạp trẻ em hồng nhạt </a>
                    <p>Giá: 2.200.000</p>
                </div>
                <div class="col-md-3">
                    <img src="img/b3.jpg" alt="" class="img-fluid"><br>
                    <a href="">Xe đạp trẻ em đỏ thắm</a>
                    <p> Giá: 1.800.000</p>
                </div>
                <div class="col-md-3">
                    <img src="img/b5.jpg" alt="" class="img-fluid"><br>
                    <a href="">Xe đạp trẻ em đỏ tươi</a>
                    <p>Giá: 1.00.000</p>
                </div>
                <div class="col-md-3">
                    <img src="img/b1.jpg" alt="" class="img-fluid"><br>
                    <a href="">Xe đạp trẻ em hồng đậm</a>
                    <p>Giá: 4.200.000</p>
                </div>
            </div>
        </div>
      </div>
<!-- end xe dap -->
      <div class="container1" style="background-color: #555; padding: 30px; color: cornsilk;">
        <div class="row">
            <div class="col-md-4">
                <div class="left">
                    <span style="color: coral; font-size: 34px;"> THÔNG TIN LIÊN HỆ</span>
                </div>
                <div class="right">
                    <span>Địa chỉ: Số 62, Quốc Lộ 13 Cũ, Khu Phố 3, Phường Hiệp Bình Phước, Quận Thủ Đức<br>
                        Hotline đặt hàng:   093 2729 488<br>
                        Email: pat@patcycle.com.vn</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="left">
                    <span style="color: coral; font-size: 34px;"> HỖ TRỢ</span>
                </div>
                <div class="right">
                    <span>Hướng dẫn mua hàng<br>
                        Chính sách bảo hành<br>
                        Chính sách bảo mật và chia sẻ<br>
                        Thanh toán và giao nhận</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="left">
                    <span style="color: coral; font-size: 34px;"> THÔNG TIN KHÁC</span>
                </div>
                <div class="right">
                    <span>Giới thiệu<br>
                        Tìm kiếm<br>
                        Sản phẩm nổi bật</span>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>