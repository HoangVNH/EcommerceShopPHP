<?php

class DonDatHangDAO extends DB
{
    public function Insert($donDatHang)
    {
        $sql = "INSERT INTO dondathang(MaDonHang, TongTien, MaTaiKhoan) VALUES('$donDatHang->MaDonHang', $donDatHang->TongTien, $donDatHang->MaTaiKhoan)";
        $this->ExecuteQuery($sql);
    }

    public function GetAllById($maTaiKhoan)
    {
        $sql = "SELECT ddh.MaDonHang, ddh.NgayMua, sp.TenHienThi, ddh.TongTien, ddh.TinhTrang FROM dondathang ddh, chitietdondathang ctddh, sanpham sp WHERE ddh.MaTaiKhoan = $maTaiKhoan AND ctddh.MaDonDatHang = ddh.MaDonHang AND sp.MaSanPham = ctddh.MaSanPham AND ddh.BiXoa = 0";
        $result = $this->ExecuteQuery($sql);
        $lstDonDatHang = array();
        while($row = mysqli_fetch_array($result))
            $lstDonDatHang[] = $row;

        return $lstDonDatHang;
    }

    public function GetMaDonHang(){
        $sql = "SELECT MaDonHang FROM dondathang";
        $result = $this->ExecuteQuery($sql);
        $lstDonDatHang = array();
        while($row = mysqli_fetch_array($result))
            $lstDonDatHang[] = $row;

        return $lstDonDatHang;
    }

    public function GetNumRows(){
        $sql = "SELECT MaDonHang FROM dondathang";
        $result = $this->ExecuteQuery($sql);
        return mysqli_num_rows($result);
    }

    public function GetAll(){
        $sql = "SELECT MaDonHang, NgayMua, TongTien, MaTaiKhoan, TinhTrang, BiXoa FROM dondathang";
        $result = $this->ExecuteQuery($sql);
        $lstDonHang = array();
        while($row = mysqli_fetch_array($result))
        {
            $donHang = new DonDatHang();
            $donHang->MaDonHang = $row[0];
            $donHang->NgayMua = $row[1];
            $donHang->TongTien = $row[2];
            $donHang->MaTaiKhoan = $row[3];
            $donHang->TinhTrang = $row[4];
            $donHang->BiXoa = $row[5];
            $lstDonHang[] = $donHang;
        }

        return $lstDonHang;
    }

    public function Update($donDatHang){
        $sql = "UPDATE dondathang SET TongTien = $donDatHang->TongTien, MaTaiKhoan = $donDatHang->MaTaiKhoan, TinhTrang = N'$donDatHang->TinhTrang' WHERE MaDonHang = '$donDatHang->MaDonHang'";
        $this->ExecuteQuery($sql);
    }

    public function GetOrderById($maDonhang){
        $sql = "SELECT NgayMua, TongTien, MaTaiKhoan, TinhTrang FROM dondathang WHERE BiXoa <> 1 AND MaDonHang = '$maDonhang'";
        $result = $this->ExecuteQuery($sql);
        if ($result == null)
            return null;
        $row = mysqli_fetch_array($result);
        return $row;
    }

    public function SetDeleted($maDonHang){
        $sql = "UPDATE dondathang SET BiXoa = 1 WHERE MaDonHang = '$maDonHang'";
        $this->ExecuteQuery($sql);
    }

    public function UnsetDeleted($maDonHang){
        $sql = "UPDATE dondathang SET BiXoa = 0 WHERE MaDonHang = '$maDonHang'";
        $this->ExecuteQuery($sql);
    }
}