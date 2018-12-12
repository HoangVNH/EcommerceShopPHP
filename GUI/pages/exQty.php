<?php

if(!isset($_SESSION))
    session_start();

$soLuongMoi = $_POST['slm'];
$maSP = $_POST['masp'];
$_SESSION['GioHang'][$maSP]['SoLuong'] = $soLuongMoi;
