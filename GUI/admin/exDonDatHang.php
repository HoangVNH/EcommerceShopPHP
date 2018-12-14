<?php

$act = $_POST['ex'];

if ($act == 'edit')
{
    $donDatHang = new DonDatHang();

    $donDatHang->MaDonHang = $_POST['mddh'];
    $donDatHang->TongTien = $_POST['tongtien'];
    $donDatHang->MaTaiKhoan = $_POST['mtk'];
    $donDatHang->TinhTrang = $_POST['tinhtrang'];

    $donDatHangBUS = new DonDatHangBUS();
    $donDatHangBUS->Update($donDatHang);

    echo "<script>alert('Cập nhật đơn hàng thành công')</script>";
    echo "<script>window.open('?a=5','_self')</script>";
}