<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 10-Dec-18
 * Time: 10:44 AM
 */

if(!isset($_SESSION))
    session_start();

$soLuongMoi = $_POST['slm'];
$maSP = $_POST['masp'];
$_SESSION['GioHang'][$maSP]['SoLuong'] = $soLuongMoi;