<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 05-Dec-18
 * Time: 4:04 PM
 */

class TaiKhoan
{
    var $MaTaiKhoan;
    var $TenDangNhap;
    var $MatKhau;
    var $HoTen;
    var $NgaySinh;
    var $DiaChi;
    var $LoaiTaiKhoan;

    public function __construct()
    {
        $this->MaTaiKhoan = 0;
        $this->TenDangNhap = "";
        $this->MatKhau = "";
        $this->HoTen = "";
        $this->NgaySinh = "";
        $this->DiaChi = "";
        $this->LoaiTaiKhoan = "";
    }
}