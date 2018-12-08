<?php
if(!isset($_SESSION))
    session_start();
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-5 sign_in">
            <h5>Đăng Nhập</h5>
            <form action="?h=exSignin" class="needs-validation" method="POST" novalidate>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Tên Đăng Nhập" required>
                    <div class="invalid-feedback">
                        Vui lòng nhập tên đăng nhập.
                    </div>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Mật Khẩu" required>
                    <div class="invalid-feedback">
                        Vui lòng nhập mật khẩu.
                    </div>
                </div>
                <button type="submit" name="btnSubmit" class="btn btn-lg btn-dangnhap">Đăng Nhập</button>
            </form>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5">
            <div class="row quenmatkhau">
                <i class="fa fa-chevron-circle-right"><a href="#"> Quên tên đăng nhập hoặc mật khẩu?</a></i>
                <i class="fa fa-chevron-circle-right"><a href="?h=signup"> Chưa có tài khoản? Đăng ký ngay bây giờ.</a></i>
            </div>
        </div>
    </div>
</div>
<!-- hết phần đăng nhập -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="header-top"></div>
        </div>
    </div>
</div>