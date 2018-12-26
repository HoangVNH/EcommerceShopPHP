<?php
if(!isset($_SESSION))
    session_start();
if((isset($_SESSION['LoaiTaiKhoan']) && $_SESSION['LoaiTaiKhoan'] != 'admin') || !(isset($_SESSION['LoaiTaiKhoan']))) {
    echo "<script>window.open('../../index.php','_self')</script>";
    exit();
}
?>
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
        case 5:
            include("dondathang.php");
            break;
        case 6:
            include("suaDonDatHang.php");
            break;
        case 7:
            include("hangsanxuat.php");
            break;
        case 8:
            include("themHangSanXuat.php");
            break;
        case 9:
            include("suaHangSanXuat.php");
            break;
        case 10:
            include("loaisanpham.php");
            break;
        case 11:
            include("suaLoaiSanPham.php");
            break;
        case 12:
            include("themLoaiSanPham.php");
            break;
        case 13:
            include("sanpham.php");
            break;
        case 14:
            include("themSanPham.php");
            break;
        case 15:
            include("suaSanPham.php");
            break;
        case 103:
            include("exTaiKhoan.php");
            break;
        case 104:
            include("exXoaTaiKhoan.php");
            break;
        case 105:
            include("exXoaDonHang.php");
            break;
        case 106:
            include("exDonDatHang.php");
            break;
        case 107:
            include("exHangSanXuat.php");
            break;
        case 108:
            include("exXoaHangSanXuat.php");
            break;
        case 109:
            include("exXoaLoaiSanPham.php");
            break;
        case 110:
            include("exLoaiSanPham.php");
            break;
        case 113:
            include("exXoaSanPham.php");
            break;
        case 114:
            include("exSanPham.php");
            break;
        case 115:
            include("exLogoutAdmin.php");
            break;
        default:
            include("error.php");
            break;
    }
        ?>

<?php include ("../modules/adfooter.php");?>
</body>
</html>