<?php
    $maTaiKhoan = isset($_GET['id']) ? $_GET['id'] : null;

    $taiKhoan = new TaiKhoan();
    $taiKhoanBUS = new TaiKhoanBUS();
    $result = $taiKhoanBUS->GetInfoByID($maTaiKhoan);
    $taiKhoan->TenDangNhap = $result[1];
    $taiKhoan->MatKhau = $result[2];
    $taiKhoan->HoTen = $result[3];
    $taiKhoan->NgaySinh = $result[4];
    $taiKhoan->DiaChi = $result[5];
    $taiKhoan->LoaiTaiKhoan = $result[6];
    $taiKhoan->BiXoa = $result[7];
?>

<div id="main">
    <ol class="breadcrumb">
        <li><a href="?a=1"><i class="fa fa-home"></i> Trang quản trị</a></li>
        <li><a class="" href="?a=2"><i class="fa fa-users"></i> Quản lý tài khoản</a></li>
        <li><a class="active" href="#"><i class="fa fa-users"></i> Sửa tài khoản</a></li>
    </ol>
    <div class="col-xs-12">
        <div class="quanlytaikhoan">
            <h3>SỬA THÔNG TIN TÀI KHOẢN</h3>
        </div>

        <form id="admin-form" class="form-horizontal col-xl-9 col-lg-10 col-md-12 col-sm-12" method="post" action="?a=103" enctype="multipart/form-data" role="form">
            <input type="hidden" name="ex" value="edit" />
            <div class="form-group">
                <label for="type_product" class="col-sm-3 control-label">Mã tài khoản <span style="color: red">*</span></label>
                <div class="col-sm-9">
                    <input name="mtk" readonly type="text" class="form-control" value="<?php echo $maTaiKhoan ?>" required maxlength="30">
                </div>
            </div>
            <div class="form-group">
                <label for="masp" class="col-sm-3 control-label">Tên đăng nhập <span style="color: red">*</span></label>
                <div class="col-sm-9">
                    <input name="tdn" readonly type="text" class="form-control" value="<?php echo $taiKhoan->TenDangNhap ?>" required maxlength="40">
                </div>
            </div>
            <div class="form-group">
                <label for="keywords" class="col-sm-3 control-label">Họ Và Tên <span style="color: red">*</span></label>
                <div class="col-sm-9">
                    <input name="hoten" type="text" class="form-control" id="" value="<?php echo $taiKhoan->HoTen ?>" maxlength="64">
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Ngày Sinh <span style="color: red">*</span></label>
                <div class="col-sm-9">
                    <input name="ngaysinh" type="text" class="form-control" id="" value="<?php echo $taiKhoan->NgaySinh ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="price" class="col-sm-3 control-label">Địa Chỉ <span style="color: red">*</span></label>
                <div class="col-sm-9">
                    <?php
                    $diaChi = array('An Giang', 'Bà Rịa - Vũng Tàu', 'Bạc Liêu', 'Bắc Kạn', 'Bắc Giang', 'Bắc Ninh', 'Bến Tre', 'Bình Dương', 'Bình Định', 'Bình Phước', 'Bình Thuận', 'Cà Mau', 'Cao Bằng', 'Cần Thơ', 'Đà Nẵng', 'Đắk Lắk', 'Đắk Nông', 'Đồng Nai', 'Đồng Tháp', 'Điện Biên', 'Gia Lai', 'Hà Giang', 'Hà Nam', 'Hà Nội', 'Hà Tĩnh', 'Hải Dương', 'Hải Phòng', 'Hòa Bình', 'Hậu Giang', 
                                    'Hưng Yên', 'Thành Phố Hồ Chí Minh', 'Khánh Hòa', 'Kiên Giang', 'Kon Tum', 'Lai Châu', 'Lào Cai', 'Lạng Sơn', 'Lâm Đồng', 'Long An', 'Nam Định', 'Nghệ An', 'Ninh Bình', 'Ninh Thuận', 'Phú Thọ', 'Phú Yên', 'Quảng Bình', 'Quảng Nam', 'Quảng Ngãi', 'Quảng Ninh', 'Quảng Trị', 'Sóc Trăng', 'Sơn La', 'Tây Ninh', 'Thái Bình', 'Thái Nguyên', 'Thanh Hóa', 'Thừa Thiên - Huế', 'Tiền Giang', 'Trà Vinh', 'Tuyên Quang', 'Vĩnh Long', 'Vĩnh Phúc', 'Yên Bái');
                    ?>
                    <select class="form-control" name="diachi" required>
                        <?php foreach($diaChi as $value) { ?>
                            <option value="<?php echo $value; ?>" <?php echo ($value ==  $taiKhoan->DiaChi) ? 'selected' : ''; ?>> <?php echo $value; ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="keywords" class="col-sm-3 control-label">Loại tài khoản <span style="color: red">*</span></label>
                <div class="col-sm-9">
                    <?php $loaiTaiKhoan = array('user'=>'user', 'admin'=>'admin') ?>
                    <select class="form-control" name="loaitaikhoan" required>
                        <?php foreach($loaiTaiKhoan as $id=>$value) { ?>
                            <option value="<?php echo $id; ?>" <?php echo ($id == $taiKhoan->LoaiTaiKhoan) ? 'selected' : ''; ?>> <?php echo $value; ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="validationTooltip06" class="col-sm-3 text-right">Mật khẩu hiện tại <span style="color: red">*</span></label>
                <div class="col-sm-9">
                    <input type="text" value="<?php echo $taiKhoan->MatKhau ?>" class="form-control thongtin" id="passwordInputOld" name="oldpwd" required>
                </div>
            </div>
            <div class="form-group">
                <label for="validationTooltip07" class="col-sm-3 text-right">Mật khẩu mới <span style="color: red">*</span></label>
                <div class="col-sm-9">
                    <input type="password" class="form-control thongtin" id="passwordInput" name="newpwd">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-danger"><small><i class="fa fa-save"></i></small> Lưu mới</button>
                <a class="btn btn-warning" href="?a=2"><small><i class="fa fa-reply"></i></small> Trở về</a>
            </div>
        </div>
    </form>
</div>