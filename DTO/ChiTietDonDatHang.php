<?php
/**
 * Created by PhpStorm.
 * User: hoangvnh
 * Date: 05-Dec-18
 * Time: 3:42 PM
 */

class ChiTietDonDatHang
{
    var $MaChiTietDonDatHang;
    var $MaDonDatHang;
    var $MaSanPham;
    var $SoLuong;
    var $GiaSanPham;

    public function __construct()
    {
        $this->MaChiTietDonDatHang = 0;
        $this->MaDonDatHang = "";
        $this->SoLuong = 0;
        $this->MaSanPham = 0;
        $this->GiaSanPham = 0;
    }
}