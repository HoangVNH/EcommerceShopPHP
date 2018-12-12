<?php

if (isset($_POST["register"]))
{
    unset($_SESSION['captcha_code']);
    $hoTen = $_POST["fullname"];
    $ngay = $_POST["day"];
    $thang = $_POST["month"];
    $nam = $_POST["year"];
    $ngaySinh = new DateTime($nam . '-' . $thang . '-' . $ngay);
    $ngaySinh = $ngaySinh->format('Y-m-d');
    $diaChi = $_POST["city"];
    $tenDangNhap = $_POST["username"];
    $matKhau = $_POST["password"];

    $taiKhoan = new TaiKhoan();
    $taiKhoan->TenDangNhap = $tenDangNhap;
    $taiKhoan->MatKhau = $matKhau;
    $taiKhoan->HoTen = $hoTen;
    $taiKhoan->NgaySinh = $ngaySinh;
    $taiKhoan->DiaChi = $diaChi;

    $taiKhoanBUS = new TaiKhoanBUS();

    $taiKhoanBUS->Insert($taiKhoan);

    echo "<script type=\"text/javascript\">"."alert('Tạo tài khoản thành công');"."location.href=\"index.php\";"."</script>";
}

?>