<?php
if(!isset($_SESSION))
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("GUI/modules/header.php"); ?>

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

        $a = isset($_GET['h']) ? $_GET['h'] : 'pIndex';
        $myPath = "GUI/pages/".$a.".php";
        if(file_exists($myPath))
            include_once($myPath);
        else
            include_once("GUI/pages/404.php");
    ?>

    <?php include_once("GUI/modules/footer.php"); ?>
</body>
</html>
