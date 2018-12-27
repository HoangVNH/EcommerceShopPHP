<?php

if (!isset($_SESSION))
    session_start();

$taiKhoan = new TaiKhoan();
$taiKhoanBUS = new TaiKhoanBUS();
$taiKhoan->MaTaiKhoan = $_SESSION['MaTaiKhoan'];

$info = $taiKhoanBUS->GetInfoByID($taiKhoan->MaTaiKhoan);
$matKhau = $taiKhoanBUS->GetPasswordByID($taiKhoan->MaTaiKhoan);

$taiKhoan->HoTen = isset($_POST['hoTen']) ? $_POST['hoTen'] : $info['HoTen'];
$taiKhoan->NgaySinh = isset($_POST['ngaySinh']) ? $_POST['ngaySinh'] : $info['NgaySinh'];
$taiKhoan->DiaChi = isset($_POST['diaChiCuaTui']) ? $_POST['diaChiCuaTui'] : $info['DiaChi'];
$taiKhoan->MatKhau = (isset($_POST['passwordInputOld']) && isset($_POST['passwordInput'])) ? $_POST['passwordInput'] : $matKhau;

$taiKhoanBUS->Update($taiKhoan);

echo "<script>alert('Cập nhật thông tin thành công !')</script>";
echo "<script>window.open('?a=13','_self')</script>";
?>