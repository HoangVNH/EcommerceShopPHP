<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 05-Dec-18
 * Time: 4:06 PM
 */

class SanPham
{
    var $MaSanPham;
    var $TenSanPham;
    var $Gia;
    var $HinhURL;
    var $NgayNhap;
    var $SoLuongTon;
    var $SoLuongBan;
    var $LuotXem;
    var $MoTa;
    var $XuatXu;
    var $MaHangSanXuat;
    var $MaLoai;
    var $TenHienThi;

    public function __construct()
    {
        $this->MaSanPham = 0;
        $this->TenSanPham = "";
        $this->Gia = 0;
        $this->HinhURL = "";
        $this->NgayNhap = "";
        $this->SoLuongTon = 0;
        $this->SoLuongBan = 0;
        $this->LuotXem = 0;
        $this->MoTa  = "";
        $this->XuatXu = "";
        $this->MaHangSanXuat = 0;
        $this->MaLoai = 0;
        $this->TenHienThi = "";
    }
}