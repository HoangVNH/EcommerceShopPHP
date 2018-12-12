<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 dangky-header">
            <a href="?h=login">Đăng Nhập</a>
        </div>
    </div>
</div>

<div class="main-header create-header">
    <div class="hero-image-wrapper">
        <div class="container text-center dangky">
            <h2>ĐĂNG KÝ TÀI KHOẢN NGAY TỪ BÂY GIỜ</h2>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="header-top"></div>
        </div>
    </div>
</div>

<!-- đăng ký -->
<div class="container">
    <div class="row">
        <div class="col-xs-0 col-sm-0 col-md-2"></div>
        <div class="col-xs-12 col-sm-12 col-md-8">
            <form action="?h=exSignup" method="POST" class="needs-validation" id="mainform">
                <h5>Thông Tin Cá Nhân</h5>
                <div class="form-group row">
                    <label for="validationTooltip01" class="col-md-4 col-form-label text-right">Họ tên của bạn</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control thongtin" id="fullname" name="fullname" required>
                        <div class="invalid-feedback">
                            Hãy nhập họ tên
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="validationTooltip02" class="col-md-4 col-form-label text-right">Ngày sinh</label>
                    <div class="col-md-3">
                        <select class="custom-select" name="year" id="year" required></select>
                        <div class="invalid-feedback">
                            Hãy chọn năm sinh.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <select class="custom-select" name="month" id="month" required></select>
                        <div class="invalid-feedback">
                            Hãy chọn tháng sinh.
                        </div>
                    </div>
                    <div class="col-md-2">
                        <select class="custom-select" name="day" id="day" required>
                            <option value=" " selected="selected">[Ngày]</option>
                        </select>
                        <div class="invalid-feedback">
                            Hãy chọn ngày sinh.
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="validationTooltip01" class="col-md-4 col-form-label text-right">Bạn sống tại</label>
                    <div class="col-md-8">
                        <select class="custom-select" name="city" required>
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
                        <div class="invalid-feedback">
                            Vui lòng chọn thành phố.
                        </div>
                    </div>
                </div>

                <h5>Thông Tài Khoản</h5>
                <div class="form-group  row">
                    <label for="validationTooltip03" class="col-md-4 col-form-label text-right">Tên đăng nhập <span style="color: red;">*</span></label>
                    <div class="col-md-8">
                        <input type="text" class="form-control thongtin" id="username" name="username" required>
                        <span id="availability"></span>
                        <div class="invalid-feedback">
                            Vui lòng nhập tên đăng nhập.
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="validationTooltip04" class="col-md-4 col-form-label text-right">Mật khẩu <span style="color: red;">*</span></label>
                    <div class="col-md-8">
                        <input type="password" class="form-control thongtin" id="password" name="password" required>
                        <div class="invalid-feedback">
                            Vui lòng nhập mật khẩu.
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="validationTooltip05" class="col-md-4 col-form-label text-right">Xác nhận mật khẩu <span style="color: red;">*</span></label>
                    <div class="col-md-8">
                        <input type="password" class="form-control thongtin" id="confirmPassword" name="confirmPassword" required>
                        <div class="invalid-feedback">
                            Vui lòng nhập lại mật khẩu.
                        </div>
                        <span id="matchpwd"></span>
                        <p><div class="" id="passwordStrength"></div></p>
                    </div>
                </div>

                <h5>Mã Kiểm Tra</h5>
                <div class="form-group row">
                    <label for="validationTooltip04" class="col-md-4 col-form-label text-right">Mã kiểm tra <span style="color: red;">*</span></label>
                    <div class="col-md-5">
<!--                        <img src="GUI/pages/image.php" id="img-captcha"/>-->
                        <img src="GUI/pages/image.php" id="img-captcha"/>
                        <input type="button" value="Tải lại" onclick="$('#img-captcha').attr('src', 'GUI/pages/image.php?rand=' + Math.random())" /> <br />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="validationTooltip04" class="col-md-4 col-form-label text-right">Nhập mã kiểm tra <span style="color: red;">*</span></label>
                    <div class="col-md-8">
                        <input type="text" class="form-control thongtin" id="captcha" name="captcha" required/>
                        <div class="invalid-feedback">
                            Vui lòng nhập mã kiểm tra.
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-md-4"></label>
                    <div class="col-md-8">
                        <p>Bằng việc click vào nút Đăng ký bạn đã đồng ý <a href="#" style="color: #0070c9; text-decoration: none;"> Điều khoản sử dụng</a></p>
                        <button type="submit" class="btn gui" id="register" name="register" disabled>Đăng Ký</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xs-0 col-sm-0 col-md-2"></div>
    </div>
</div>