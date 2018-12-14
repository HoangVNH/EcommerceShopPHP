<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("../modules/adheader.php"); ?>
    <title>Quản Trị Hệ Thống</title>
</head>

<body>

    <?php
        include ("leftmenu.php");
        require_once("../../DTO/ChiTietDonDatHang.php");
        require_once("../../DTO/DonDatHang.php");
        require_once("../../DTO/HangSanXuat.php");
        require_once("../../DTO/LoaiSanPham.php");
        require_once("../../DTO/SanPham.php");
        require_once("../../DTO/TaiKhoan.php");
        require_once("../../DAO/DB.php");
        require_once("../../DAO/LoaiSanPhamDAO.php");
        require_once("../../DAO/HangSanXuatDAO.php");
        require_once("../../DAO/SanPhamDAO.php");
        require_once("../../DAO/TaiKhoanDAO.php");
        require_once("../../DAO/DonDatHangDAO.php");
        require_once("../../DAO/ChiTietDonDatHangDAO.php");
        require_once("../../BUS/HangSanXuatBUS.php");
        require_once("../../BUS/LoaiSanPhamBUS.php");
        require_once("../../BUS/SanPhamBUS.php");
        require_once("../../BUS/TaiKhoanBUS.php");
        require_once("../../BUS/DonDatHangBUS.php");
        require_once("../../BUS/ChiTietDonDatHangBUS.php");

    $a = isset($_GET['a']) ? $_GET['a'] : 1;

    switch ($a)
    {
        case 1:
            include("pIndex.php");
            break;
        case 2:
            include("taikhoan.php");
            break;
        case 3:
            include("suaTaiKhoan.php");
            break;
        case 4:
            include("themTaiKhoan.php");
            break;
        case 103:
            include("exTaiKhoan.php");
            break;
        case 105:
            include("exXoaTaiKhoan.php");
            break;
    }
        ?>

<!-- hết phần menu bên trái -->
<?php include ("../modules/adfooter.php");?>
</body>
</html>