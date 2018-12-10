<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 05-Dec-18
 * Time: 3:52 PM
 */

class DonDatHang
{
    var $MaDonHang;
    var $NgayMua;
    var $TongTien;
    var $MaTaiKhoan;
    var $TinhTrang;

    public function __construct()
    {
        $this->MaDonHang = 0;
        $this->NgayMua = "";
        $this->TongTien = 0;
        $this->MaTaiKhoan = 0;
        $this->TinhTrang = "";
    }
}