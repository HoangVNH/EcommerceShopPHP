<?php
if(!isset($_SESSION))
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("GUI/modules/header.php"); ?>
    <title>HTN STORE</title>
</head>
<body>
    <?php
        include_once("GUI/modules/menu.php");
        require_once("DTO/ChiTietDonDatHang.php");
        require_once("DTO/DonDatHang.php");
        require_once("DTO/HangSanXuat.php");
        require_once("DTO/LoaiSanPham.php");
        require_once("DTO/SanPham.php");
        require_once("DTO/TaiKhoan.php");
        require_once("DAO/DB.php");
        require_once("DAO/LoaiSanPhamDAO.php");
        require_once("DAO/HangSanXuatDAO.php");
        require_once("DAO/SanPhamDAO.php");
        require_once("DAO/TaiKhoanDAO.php");
        require_once("DAO/DonDatHangDAO.php");
        require_once("DAO/ChiTietDonDatHangDAO.php");
        require_once("BUS/HangSanXuatBUS.php");
        require_once("BUS/LoaiSanPhamBUS.php");
        require_once("BUS/SanPhamBUS.php");
        require_once("BUS/TaiKhoanBUS.php");
        require_once("BUS/DonDatHangBUS.php");
        require_once("BUS/ChiTietDonDatHangBUS.php");

        $a = isset($_GET['a']) ? $_GET['a'] : 1;

        switch ($a)
        {
            case 1:
                include("GUI/pages/pIndex.php");
                break;
            case 2:
                include("GUI/pages/category.php");
                break;
            case 3:
                include("GUI/pages/brand.php");
                break;
            case 4:
                include("GUI/pages/details.php");
                break;
            case 5:
                include("GUI/pages/cart.php");
                break;
            case 6:
                include("GUI/pages/signin.php");
                break;
            case 7:
                include ("GUI/pages/signup.php");
                break;
            case 13:
                include ("GUI/pages/information.php");
                break;
            case 14:
                include ("GUI/pages/search.php");
                break;
            case 105:
                include("GUI/pages/exCart.php");
                break;
            case 106:
                include ("GUI/pages/exSignin.php");
                break;
            case 107:
                include("GUI/pages/exSignup.php");
                break;
            case 108:
                include("GUI/pages/exLogout.php");
                break;
            case 109:
                include("GUI/pages/exQty.php");
                break;
            case 110:
                include("GUI/pages/exDel.php");
                break;
            case 111:
                include("GUI/pages/exShipping.php");
                break;
            case 112:
                include("GUI/pages/success.php");
                break;
            case 113:
                include ("GUI/pages/exInformation.php");
                break;
            default:
                include("GUI/pages/pError.php");
                break;
        }
    ?>

    <?php include_once("GUI/modules/footer.php"); ?>
</body>
</html>
