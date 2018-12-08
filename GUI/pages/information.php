<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 07-Dec-18
 * Time: 9:07 PM
 */

if(isset($_SESSION['MaTaiKhoan']) && isset($_SESSION['TenNguoiDung']))
{
    $maTK = $_SESSION['MaTaiKhoan'];
    $taiKhoanBUS = new TaiKhoanBUS();
    $taiKhoan = new TaiKhoan();
    $row = $taiKhoanBUS->GetInfoByID($maTK);
    $taiKhoan->TenDangNhap = $row[0];
    $taiKhoan->HoTen = $row[1];
    $taiKhoan->NgaySinh = $row[2];
    $taiKhoan->DiaChi = $row[3];
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="header-top"></div>
        </div>
    </div>
</div>

<!-- infomation -->
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <nav style="margin-top: 40px;">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"><i class="fa fa-user" style="color: #333; font-weight: 500;"></i> Thông tin tài khoản</a>
                    <a class="nav-item nav-link" id="nav-cart-tab" data-toggle="tab" href="#nav-cart"><i class="fa fa-shopping-cart" style="color: #333; font-weight: 500;"></i>   Quản lý đơn hàng</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade" id="nav-home">
                    <form>
                        <div class="form-group row" style="margin-top: 30px;">
                            <label for="" class="col-sm-4 col-md-2 col-form-label">Tên đăng nhập</label>
                            <div class="col-sm-8 col-md-6">
                                <input type="text" disabled class="form-control thongtin" id="" value="<?php echo $taiKhoan->TenDangNhap ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-4 col-md-2 col-form-label">Họ tên</label>
                            <div class="col-sm-8 col-md-6">
                            <input type="text" class="form-control thongtin" id="" value="<?php echo $taiKhoan->HoTen ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-4 col-md-2 col-form-label">Ngày sinh</label>
                            <div class="col-sm-8 col-md-6">
                                <input type="text" class="form-control thongtin" id="" value="<?php echo ($taiKhoan->NgaySinh); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationTooltip01" class="col-sm-4 col-md-2 col-form-label">Bạn sống tại</label>
                            <div class="col-sm-8 col-md-6">
                                <?php
                                    $diaChi = array('An Giang'=>'An Giang', 'Bà Rịa - Vũng Tàu'=>'Bà Rịa - Vũng Tàu', 'Bạc Liêu'=>'Bạc Liêu', 'Bắc Kạn'=>'Bắc Kạn',
                                                    'Bắc Giang'=>'Bắc Giang', 'Bắc Ninh'=>'Bắc Ninh', 'Bến Tre'=>'Bến Tre', 'Bình Dương'=>'Bình Dương', 'Bình Định'=>'Bình Định',
                                                    'Bình Phước'=>'Bình Phước', 'Bình Thuận'=>'Bình Thuận', 'Cà Mau'=>'Cà Mau', 'Cao Bằng'=>'Cao Bằng', 'Cần Thơ'=>'Cần Thơ',
                                                    'Đà Nẵng'=>'Đà Nẵng', 'Đắk Lắk'=>'Đắk Lắk', 'Đắk Nông'=>'Đắk Nông', 'Đồng Nai'=>'Đồng Nai', 'Đồng Tháp'=>'Đồng Tháp',
                                                    'Điện Biên'=>'Điện Biên', 'Gia Lai'=>'Gia Lai', 'Hà Giang'=>'Hà Giang', 'Hà Nam'=>'Hà Nam', 'Hà Nội'=>'Hà Nội',
                                                    'Hà Tĩnh'=>'Hà Tĩnh', 'Hải Dương'=>'Hải Dương', 'Hải Phòng'=>'Hải Phòng', 'Hòa Bình'=>'Hòa Bình', 'Hậu Giang'=>'Hậu Giang',
                                                    'Hưng Yên'=>'Hưng Yên', 'Thành Phố Hồ Chí Minh'=>'Thành Phố Hồ Chí Minh', 'Khánh Hòa'=>'Khánh Hòa', 'Kiên Giang'=>'Kiên Giang', 'Kon Tum'=>'Kon Tum',
                                                    'Lai Châu'=>'Lai Châu', 'Lào Cai'=>'Lào Cai', 'Lạng Sơn'=>'Lạng Sơn', 'Lâm Đồng'=>'Lâm Đồng', 'Long An'=>'Long An',
                                                    'Nam Định'=>'Nam Định', 'Nghệ An'=>'Nghệ An', 'Ninh Bình'=>'Ninh Bình', 'Ninh Thuận'=>'Ninh Thuận', 'Phú Thọ'=>'Phú Thọ',
                                                    'Phú Yên'=>'Phú Yên', 'Quảng Bình'=>'Quảng Bình', 'Quảng Nam'=>'Quảng Nam', 'Quảng Ngãi'=>'Quảng Ngãi', 'Quảng Ninh'=>'Quảng Ninh',
                                                    'Quảng Trị'=>'Quảng Trị', 'Sóc Trăng'=>'Sóc Trăng', 'Sơn La'=>'Sơn La', 'Tây Ninh'=>'Tây Ninh', 'Thái Bình'=>'Thái Bình',
                                                    'Thái Nguyên'=>'Thái Nguyên', 'Thanh Hóa'=>'Thanh Hóa', 'Thừa Thiên - Huế'=>'Thừa Thiên - Huế', 'Tiền Giang'=>'Tiền Giang', 'Trà Vinh'=>'Trà Vinh',
                                                    'Tuyên Quang'=>'Tuyên Quang', 'Vĩnh Long'=>'Vĩnh Long', 'Vĩnh Phúc'=>'Vĩnh Phúc', 'Yên Bái'=>'Yên Bái');
                                ?>
                                <select class="custom-select" required>
                                    <?php foreach($diaChi as $id=>$value) { ?>
                                        <option value="<?php echo $id; ?>" <?php echo ($id ==  $taiKhoan->DiaChi) ? 'selected' : ''; ?>> <?php echo $value; ?> </option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">
                                    Vui lòng chọn thành phố.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4 col-md-2"></div>
                            <div class="col-sm-8 col-md-8">
                                <label class="switch" for="checkbox" style="float: left;">
                                    <input type="checkbox" id="checkbox" onclick="showpass()" />
                                    <div class="slider round"></div>
                                </label>
                                <p style="margin: 4px 0px 0 65px;">Thay đổi mật khẩu</p>
                            </div>
                        </div>

                        <div id="password-group" class="password-group" style="display: none;">
                            <div class="form-group row">
                                <label for="validationTooltip06" class="col-sm-4 col-md-2 col-form-label">Mật khẩu cũ</label>
                                <div class="col-sm-8 col-md-6">
                                    <input type="password" class="form-control thongtin" id="passwordInputOld" name="passwordInputOld" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="validationTooltip07" class="col-sm-4 col-md-2 col-form-label">Mật khẩu mới</label>
                                <div class="col-sm-8 col-md-6">
                                    <input type="password" class="form-control thongtin" id="passwordInput" name="passwordInput" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="validationTooltip08" class="col-sm-4 col-md-2 col-form-label">Nhập lại mật khẩu</label>
                                <div class="col-sm-8 col-md-6">
                                    <input type="password" class="form-control thongtin" id="confirmPasswordInput" name="confirmPasswordInput" placeholder="" required>
                                    <p><div class="" id="passwordStrength"></div></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-6">
                                <button type="submit" class="btn">Cập Nhật Thông Tin</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade show active" id="nav-cart">
                    <div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit voluptatem accusamus quam dolor molestias fugiat deleniti, numquam error aliquid enim, qui nisi ducimus nihil odio atque veniam necessitatibus rem sed!</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end infomation -->