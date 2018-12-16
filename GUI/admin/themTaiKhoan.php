<div id="main">
    <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Trang quản trị</a></li>
        <li><a class="" href="taikhoan.php"><i class="fa fa-users"></i> Quản lý tài khoản</a></li>
        <li><a class="active" href="themTaiKhoan.php"><i class="fa fa-users"></i> Thêm mới tài khoản</a></li>
    </ol>
    <div class="col-xs-12">
        <div class="quanlytaikhoan">
            <h3>TẠO TÀI KHOẢN</h3>
        </div>
        <form id="admin-form" class="form-horizontal col-xl-9 col-lg-10 col-md-12 col-sm-12" method="post" action="?a=103" enctype="multipart/form-data" role="form">
            <input type="hidden" name="ex" value="new" />
            <div class="form-group">
                <div class="col-sm-9">
                    <input name="tdn" type="text" id="username" class="form-control" placeholder="Tên đăng nhập" required maxlength="25">
                    <span id="availability"></span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-9">
                    <input name="matkhau" type="password" class="form-control" placeholder="Mật khẩu" required maxlength="30">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-9">
                    <input name="hoten" type="text" class="form-control" placeholder="Họ tên" maxlength="64">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-9">
                    <input name="ngaysinh" type="date" class="form-control" placeholder="Ngày sinh">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-9">
                    <select class="form-control" name="diachi" required>
                        <option value="">-- Chọn Thành Phố --</option>
                        <option value="An Giang">An Giang</option>
                        <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                        <option value="Bạc Liêu">Bạc Liêu</option>
                        <option value="Bắc Kạn">Bắc Kạn</option>
                        <option value="Bắc Giang">Bắc Giang</option>
                        <option value="Bắc Ninh">Bắc Ninh</option>
                        <option value="Bến Tre">Bến Tre</option>
                        <option value="Bình Dương">Bình Dương</option>
                        <option value="Bình Định">Bình Định</option>
                        <option value="Bình Phước">Bình Phước</option>
                        <option value="Bình Thuận">Bình Thuận</option>
                        <option value="Cà Mau">Cà Mau</option>
                        <option value="Cao Bằng">Cao Bằng</option>
                        <option value="Cần Thơ">Cần Thơ</option>
                        <option value="Đà Nẵng">Đà Nẵng</option>
                        <option value="Đắk Lắk">Đắk Lắk</option>
                        <option value="Đắk Nông">Đắk Nông</option>
                        <option value="Đồng Nai">Đồng Nai</option>
                        <option value="Đồng Tháp">Đồng Tháp</option>
                        <option value="Điện Biên">Điện Biên</option>
                        <option value="Gia Lai">Gia Lai</option>
                        <option value="Hà Giang">Hà Giang</option>
                        <option value="Hà Nam">Hà Nam</option>
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="Hà Tĩnh">Hà Tĩnh</option>
                        <option value="Hải Dương">Hải Dương</option>
                        <option value="Hải Phòng">Hải Phòng</option>
                        <option value="Hòa Bình">Hòa Bình</option>
                        <option value="Hậu Giang">Hậu Giang</option>
                        <option value="Hưng Yên">Hưng Yên</option>
                        <option value="Thành phố Hồ Chí Minh">Thành phố Hồ Chí Minh</option>
                        <option value="Khánh Hòa">Khánh Hòa</option>
                        <option value="Kiên Giang">Kiên Giang</option>
                        <option value="Kon Tum">Kon Tum</option>
                        <option value="Lai Châu">Lai Châu</option>
                        <option value="Lào Cai">Lào Cai</option>
                        <option value="Lạng Sơn">Lạng Sơn</option>
                        <option value="Lâm Đồng">Lâm Đồng</option>
                        <option value="Long An">Long An</option>
                        <option value="Nam Định">Nam Định</option>
                        <option value="Nghệ An">Nghệ An</option>
                        <option value="Ninh Bình">Ninh Bình</option>
                        <option value="Ninh Thuận">Ninh Thuận</option>
                        <option value="Phú Thọ">Phú Thọ</option>
                        <option value="Phú Yên">Phú Yên</option>
                        <option value="Quảng Bình">Quảng Bình</option>
                        <option value="Quảng Nam">Quảng Nam</option>
                        <option value="Quảng Ngãi">Quảng Ngãi</option>
                        <option value="Quảng Ninh">Quảng Ninh</option>
                        <option value="Quảng Trị">Quảng Trị</option>
                        <option value="Sóc Trăng">Sóc Trăng</option>
                        <option value="Sơn La">Sơn La</option>
                        <option value="Tây Ninh">Tây Ninh</option>
                        <option value="Thái Bình">Thái Bình</option>
                        <option value="Thái Nguyên">Thái Nguyên</option>
                        <option value="Thanh Hóa">Thanh Hóa</option>
                        <option value="Thừa Thiên - Huế">Thừa Thiên - Huế</option>
                        <option value="Tiền Giang">Tiền Giang</option>
                        <option value="Trà Vinh">Trà Vinh</option>
                        <option value="Tuyên Quang">Tuyên Quang</option>
                        <option value="Vĩnh Long">Vĩnh Long</option>
                        <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                        <option value="Yên Bái">Yên Bái</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" id="submitBtn" class="btn btn-danger"><small><i class="fa fa-save"></i></small> Xác Nhận</button>
                    <a class="btn btn-warning" href="?a=2"><small><i class="fa fa-reply"></i></small> Trở về</a>
                </div>
            </div>
        </form>
    </div>
</div>