<?php

if(isset($_SESSION['MaTaiKhoan']) && isset($_SESSION['TenNguoiDung']))
{
    $maTK = $_SESSION['MaTaiKhoan'];
    $taiKhoanBUS = new TaiKhoanBUS();
    $taiKhoan = new TaiKhoan();
    $row = $taiKhoanBUS->GetInfoByID($maTK);
    $taiKhoan->TenDangNhap = $row[1];
    $taiKhoan->HoTen = $row[3];
    $taiKhoan->NgaySinh = $row[4];
    $taiKhoan->DiaChi = $row[5];

    $donDatHangBUS = new DonDatHangBUS();
    $lstDonDatHang = $donDatHangBUS->GetAllById($maTK);
} ?>

<div width="100%">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="GUI/img/slide_1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="GUI/img/slide_2.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="GUI/img/slide_3.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="GUI/img/slide_4.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="GUI/img/slide_5.jpg" alt="First slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="header-top"></div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <nav style="margin-top: 40px;">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fa fa-user" style="color: #333; font-weight: 500;"></i> Thông tin tài khoản</a>
                    <a class="nav-item nav-link" id="nav-cart-tab" data-toggle="tab" href="#nav-cart" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fa fa-shopping-cart" style="color: #333; font-weight: 500;"></i>   Quản lý đơn hàng</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <form method="post" action="?a=113">
                        <div class="form-group row" style="margin-top: 30px;">
                            <label for="" class="col-sm-4 col-md-2 col-form-label">Tên đăng nhập</label>
                            <div class="col-sm-8 col-md-6">
                                <input type="text" readonly class="form-control thongtin" value="<?php echo $taiKhoan->TenDangNhap ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hoTen" class="col-sm-4 col-md-2 col-form-label">Họ tên</label>
                            <div class="col-sm-8 col-md-6">
                                <input type="text" class="form-control thongtin" id="hoTen" name="hoTen" value="<?php echo $taiKhoan->HoTen ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ngaySinh" class="col-sm-4 col-md-2 col-form-label">Ngày sinh</label>
                            <div class="col-sm-8 col-md-6">
                                <input type="text" class="form-control thongtin" id="ngaySinh" name="ngaySinh" value="<?php echo ($taiKhoan->NgaySinh); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="diaChiCuaTui" class="col-sm-4 col-md-2 col-form-label">Bạn sống tại</label>
                            <div class="col-sm-8 col-md-6">
                                <?php
                                $diaChi = array('An Giang', 'Bà Rịa - Vũng Tàu', 'Bạc Liêu', 'Bắc Kạn', 'Bắc Giang', 'Bắc Ninh', 'Bến Tre', 'Bình Dương', 'Bình Định', 'Bình Phước', 'Bình Thuận', 'Cà Mau', 'Cao Bằng', 'Cần Thơ', 'Đà Nẵng', 'Đắk Lắk', 'Đắk Nông', 'Đồng Nai', 'Đồng Tháp', 'Điện Biên', 'Gia Lai', 'Hà Giang', 'Hà Nam', 'Hà Nội', 'Hà Tĩnh', 'Hải Dương', 'Hải Phòng', 'Hòa Bình', 'Hậu Giang', 
                                    'Hưng Yên', 'Thành Phố Hồ Chí Minh', 'Khánh Hòa', 'Kiên Giang', 'Kon Tum', 'Lai Châu', 'Lào Cai', 'Lạng Sơn', 'Lâm Đồng', 'Long An', 'Nam Định', 'Nghệ An', 'Ninh Bình', 'Ninh Thuận', 'Phú Thọ', 'Phú Yên', 'Quảng Bình', 'Quảng Nam', 'Quảng Ngãi', 'Quảng Ninh', 'Quảng Trị', 'Sóc Trăng', 'Sơn La', 'Tây Ninh', 'Thái Bình', 'Thái Nguyên', 'Thanh Hóa', 'Thừa Thiên - Huế', 'Tiền Giang', 'Trà Vinh', 'Tuyên Quang', 'Vĩnh Long', 'Vĩnh Phúc', 'Yên Bái');
                                ?>
                                <select class="custom-select" name="diaChiCuaTui" id="diaChiCuaTui" required>
                                    <?php foreach($diaChi as $value) { ?>
                                        <option value="<?php echo $value; ?>" <?php echo ($value ==  $taiKhoan->DiaChi) ? 'selected' : ''; ?>> <?php echo $value; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="passwordInputOld" class="col-sm-4 col-md-2 col-form-label">Mật khẩu cũ</label>
                            <div class="col-sm-8 col-md-6">
                                <input type="password" class="form-control thongtin" id="passwordInputOld" name="passwordInputOld" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="passwordInput" class="col-sm-4 col-md-2 col-form-label">Mật khẩu mới</label>
                            <div class="col-sm-8 col-md-6">
                                <input type="password" class="form-control thongtin" id="passwordInput" name="passwordInput" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-6">
                                <button type="submit" id="btnSubmit" class="btn">Cập Nhật Thông Tin</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="nav-cart" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="shopping-cart" style="margin-top: 20px;">
                        <div class="column-labels">
                            <label class="product-images">Mã đơn hàng</label>
                            <label class="product-detailss">Ngày mua</label>
                            <label class="product-prices">Sản phẩm</label>
                            <label class="product-quantitys">Tổng tiền</label>
                            <label class="product-line-prices">Trạng thái đơn hàng</label>
                        </div>
                        <?php foreach ($lstDonDatHang as $donDatHang) { ?>
                            <div class="product">
                                <div class="product-images">
                                    <?php echo $donDatHang['MaDonHang']; ?>
                                </div>
                                <div class="product-detailss">
                                    <?php echo $donDatHang['NgayMua']; ?>
                                </div>
                                <div class="product-prices">
                                    <?php echo $donDatHang['TenHienThi']; ?>
                                </div>
                                <div class="product-quantitys">
                                    <?php echo number_format($donDatHang['TongTien'], 0, ",", ","); ?> VNĐ
                                </div>
                                <div class="product-line-prices">
                                    <?php echo $donDatHang['TinhTrang']; ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>