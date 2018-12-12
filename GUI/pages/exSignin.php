<?php

if(!isset($_SESSION))
    session_start();

if(isset($_POST['btnSubmit']))
{
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $tenDangNhap = $_POST['username'];
        $matKhau = $_POST['password'];

        // xoá bỏ các tag html, kí tự đặc biệt nhằm tránh sql injection
        $tenDangNhap = strip_tags($tenDangNhap);
        $tenDangNhap = addslashes($tenDangNhap);
        $matKhau = strip_tags($matKhau);
        $matKhau = addslashes($matKhau);

        $taiKhoanBUS = new TaiKhoanBUS();
        $soLuong = $taiKhoanBUS->VerifyAccount($tenDangNhap, $matKhau);
        if ($soLuong == 0)
        {
            echo "<script>alert('Tài khoản hoặc mật khẩu sai !!!')</script>";
            echo "<script>window.open('?h=signin','_self')</script>";
        }
        else{
            $loaiTaiKhoan = $taiKhoanBUS->CheckTypeAccount($tenDangNhap);
            if($loaiTaiKhoan == 'user')
            {
                $_SESSION['TenNguoiDung'] = $taiKhoanBUS->GetName($tenDangNhap);
                $_SESSION['MaTaiKhoan'] = $taiKhoanBUS->GetID($tenDangNhap);
                echo "<script>alert('Đăng Nhập Thành Công')</script>";
                echo "<script>window.open('index.php','_self')</script>";
            }
            else
            {
                $_SESSION['TenNguoiDung'] = $taiKhoanBUS->GetName($tenDangNhap);
                echo "<script>alert('Đăng Nhập Thành Công')</script>";
                echo "<script>window.open('admin.php','_self')</script>";
            }
        }
    }
};
?>