<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 09-Dec-18
 * Time: 2:16 PM
 */

class DonDatHangDAO extends DB
{
    public function Insert($donDatHang)
    {
        $sql = "INSERT INTO dondathang(MaDonHang, TongTien, MaTaiKhoan) VALUES('$donDatHang->MaDonHang', $donDatHang->TongTien, $donDatHang->MaTaiKhoan)";
        $this->ExecuteQuery($sql);
    }

    public function GetAllById($maTaiKhoan)
    {
        $sql = "SELECT ddh.MaDonHang, ddh.NgayMua, sp.TenHienThi, ddh.TongTien, ddh.TinhTrang FROM dondathang ddh, chitietdondathang ctddh, sanpham sp WHERE ddh.MaTaiKhoan = $maTaiKhoan AND ctddh.MaDonDatHang = ddh.MaDonHang AND sp.MaSanPham = ctddh.MaSanPham";
        $result = $this->ExecuteQuery($sql);
        $lstDonDatHang = array();
        while($row = mysqli_fetch_array($result))
            $lstDonDatHang[] = $row;

        return $lstDonDatHang;
    }

    public function GetMaDonHang(){
        $sql = "SELECT MaDonHang FROM dondathang WHERE BiXoa <> 1";
        $result = $this->ExecuteQuery($sql);
        $lstDonDatHang = array();
        while($row = mysqli_fetch_array($result))
            $lstDonDatHang[] = $row;

        return $lstDonDatHang;
    }

    public function GetNumRows(){
        $sql = "SELECT MaDonHang FROM dondathang WHERE BiXoa <> 1";
        $result = $this->ExecuteQuery($sql);
        return mysqli_num_rows($result);
    }
}