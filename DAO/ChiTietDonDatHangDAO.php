<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 09-Dec-18
 * Time: 4:21 PM
 */

class ChiTietDonDatHangDAO extends DB
{
    public function Insert($chiTietDonDatHang){
        $sql = "INSERT INTO chitietdondathang(MaDonDatHang, MaSanPham, SoLuong, GiaSanPham) VALUES('$chiTietDonDatHang->MaDonDatHang', $chiTietDonDatHang->MaSanPham, $chiTietDonDatHang->SoLuong, $chiTietDonDatHang->GiaSanPham)";
        $this->ExecuteQuery($sql);
    }
}