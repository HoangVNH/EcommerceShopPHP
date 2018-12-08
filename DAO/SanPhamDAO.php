<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 05-Dec-18
 * Time: 11:14 PM
 */

class SanPhamDAO extends DB
{
    public function GetNewestProducts()
    {
        $sql = "SELECT MaSanPham, TenHienThi, Gia, HinhURL FROM sanpham WHERE (MaLoai = 1 or MaLoai = 3 or MaLoai = 4) AND BiXoa = 0 ORDER BY NgayNhap DESC LIMIT 10";
        $result = $this->ExecuteQuery($sql);
        if($result == null)
            return null;
        $lstSanPham = array();
        while($row = mysqli_fetch_array($result))
        {
            $sanPham = new SanPham();
            $sanPham->MaSanPham = $row["MaSanPham"];
            $sanPham->TenHienThi = $row["TenHienThi"];
            $sanPham->Gia = $row["Gia"];
            $sanPham->HinhURL = $row["HinhURL"];
            $lstSanPham[] = $sanPham;
        }
        return $lstSanPham;
    }

    public function GetBestSellers()
    {
        $sql = "SELECT MaSanPham, TenHienThi, Gia, HinhURL FROM sanpham WHERE (MaLoai = 1 or MaLoai = 3 or MaLoai = 4) AND BiXoa = 0 ORDER BY SoLuongBan DESC LIMIT 10";
        $result = $this->ExecuteQuery($sql);
        if($result == null)
            return null;
        $lstSanPham = array();
        while($row = mysqli_fetch_array($result))
        {
            $sanPham = new SanPham();
            $sanPham->MaSanPham = $row["MaSanPham"];
            $sanPham->TenHienThi = $row["TenHienThi"];
            $sanPham->Gia = $row["Gia"];
            $sanPham->HinhURL = $row["HinhURL"];
            $lstSanPham[] = $sanPham;
        }
        return $lstSanPham;
    }

    public function GetAll()
    {
        $sql = "SELECT MaSanPham, TenHienThi, Gia, HinhURL, BiXoa FROM sanpham";
        $result = $this->ExecuteQuery($sql);
        if($result == null)
            return null;
        $lstSanPham = array();
        while($row = mysqli_fetch_array($result))
        {
            $sanPham = new SanPham();
            $sanPham->MaSanPham = $row["MaSanPham"];
            $sanPham->TenHienThi = $row["TenHienThi"];
            $sanPham->Gia = $row["Gia"];
            $sanPham->HinhURL = $row["HinhURL"];
            $sanPham->BiXoa = $row["BiXoa"];
            $lstSanPham[] = $sanPham;
        }
        return $lstSanPham;
    }

    public function GetAllAvailable()
    {
        $sql = "SELECT MaSanPham, TenHienThi, Gia, HinhURL, BiXoa FROM sanpham WHERE BiXoa = 0";
        $result = $this->ExecuteQuery($sql);
        if($result == null)
            return null;
        $lstSanPham = array();
        while($row = mysqli_fetch_array($result))
        {
            $sanPham = new SanPham();
            $sanPham->MaSanPham = $row["MaSanPham"];
            $sanPham->TenHienThi = $row["TenHienThi"];
            $sanPham->Gia = $row["Gia"];
            $sanPham->HinhURL = $row["HinhURL"];
            $sanPham->BiXoa = $row["BiXoa"];
            $lstSanPham[] = $sanPham;
        }
        return $lstSanPham;
    }

    public function GetOnBrand($id, $br)
    {
        $sql = "SELECT MaSanPham, TenHienThi, Gia, HinhURL FROM sanpham WHERE MaLoai = $id AND MaHangSanXuat = $br AND BiXoa = 0";
        $result = $this->ExecuteQuery($sql);
        if($result == null)
            return null;
        $lstSanPham = array();
        while($row = mysqli_fetch_array($result))
        {
            $sanPham = new SanPham();
            $sanPham->MaSanPham = $row["MaSanPham"];
            $sanPham->TenHienThi = $row["TenHienThi"];
            $sanPham->Gia = $row["Gia"];
            $sanPham->HinhURL = $row["HinhURL"];
            $lstSanPham[] = $sanPham;
        }
        return $lstSanPham;
    }

    public function GetOnCategory($cat)
    {
        $sql = "SELECT MaSanPham, TenHienThi, Gia, HinhURL from SANPHAM where MaLoai = $cat AND BiXoa = 0";
        $result = $this->ExecuteQuery($sql);
        if($result == null)
            return null;
        $lstSanPham = array();
        while($row = mysqli_fetch_array($result))
        {
            $sanPham = new SanPham();
            $sanPham->MaSanPham = $row["MaSanPham"];
            $sanPham->TenHienThi = $row["TenHienThi"];
            $sanPham->Gia = $row["Gia"];
            $sanPham->HinhURL = $row["HinhURL"];
            $lstSanPham[] = $sanPham;
        }
        return $lstSanPham;
    }

    public function GetDetail($id)
    {
        $sql = "SELECT TenSanPham, Gia, HinhURL, LuotXem, SoLuongBan, MoTa, XuatXu, MaHangSanXuat, MaLoai FROM sanpham WHERE MaSanPham = $id";
        $result = $this->ExecuteQuery($sql);
        if($result == null)
            return null;
        $row = mysqli_fetch_array($result);
        $sanPham = new SanPham();

        $sanPham->TenSanPham = $row["TenSanPham"];
        $sanPham->Gia = $row["Gia"];
        $sanPham->HinhURL = $row["HinhURL"];
        $sanPham->LuotXem = $row["LuotXem"];
        $sanPham->SoLuongBan = $row["SoLuongBan"];
        $sanPham->MoTa = $row["MoTa"];
        $sanPham->XuatXu = $row["XuatXu"];
        $sanPham->MaHangSanXuat = $row["MaHangSanXuat"];
        $sanPham->MaLoai = $row["MaLoai"];

            return $sanPham;
    }

    public function GetSameType($maLoai, $maSanPham)
    {
        //$sql = "SELECT MaSanPham, TenHienThi, HinhURL, concat(FORMAT(Gia, 0, 'de_DE'), 'Đ') as Gia  FROM sanpham where MaLoai = $maLoai and MaSanPham <> $maSanPham ORDER BY LuotXem DESC LIMIT 5";
        $sql = "SELECT MaSanPham, TenHienThi, HinhURL, Gia  FROM sanpham WHERE MaLoai = $maLoai AND MaSanPham <> $maSanPham AND BiXoa = 0 ORDER BY LuotXem DESC LIMIT 5";
        $result = $this->ExecuteQuery($sql);
        $lstSanPham = array();
        while($row = mysqli_fetch_array($result))
        {
            $sanPham = new SanPham();
            $sanPham->MaSanPham = $row["MaSanPham"];
            $sanPham->TenHienThi = $row["TenHienThi"];
            $sanPham->HinhURL = $row["HinhURL"];
            $sanPham->Gia = $row["Gia"];
            $lstSanPham[] = $sanPham;
        }
        return $lstSanPham;
    }

    public function GetSearch($q)
    {
        $sql = "SELECT MaSanPham, TenHienThi, Gia, HinhURL FROM sanpham WHERE TenSanPham LIKE N'%$q%' AND BiXoa = 0";
        $result = $this->ExecuteQuery($sql);
        $lstSanPham = array();
        while($row = mysqli_fetch_array($result))
        {
            $sanPham = new SanPham();
            $sanPham->MaSanPham = $row["MaSanPham"];
            $sanPham->TenHienThi = $row["TenHienThi"];
            $sanPham->Gia = $row["Gia"];
            $sanPham->HinhURL = $row["HinhURL"];
            $lstSanPham[] = $sanPham;
        }
        return $lstSanPham;
    }

    public function Insert($sanPham){
        $sql = "INSERT INTO sanpham(TenSanPham, Gia, HinhURL, NgayNhap, SoLuongTon, SoLuongBan, LuotXem, MoTa, XuatXu, MaHangSanXuat, MaLoai, TenHienThi, BiXoa) VALUES('$sanPham->TenSanPham', $sanPham->Gia, '$sanPham->HinhURL', '$sanPham->NgayNhap', $sanPham->SoLuongTon, $sanPham->SoLuongBan, $sanPham->LuotXem, '$sanPham->MoTa', '$sanPham->XuatXu', $sanPham->MaHangSanXuat, $sanPham->MaLoai, '$sanPham->TenHienThi', $sanPham->BiXoa)";
        $this->ExecuteQuery($sql);
    }

    public function Delete($sanPham){
        $sql = "DELETE FROM sanpham WHERE MaSanPham = $sanPham->MaSanPham";
        $this->ExecuteQuery($sql);
    }

    public function SetDelete($sanPham){
        $sql = "UPDATE sanpham SET BiXoa = 1 WHERE MaSanPham = $sanPham->MaSanPham";
        $this->ExecuteQuery($sql);
    }

    public function UnsetDelete($sanPham){
        $sql = "UPDATE sanpham SET BiXoa = 0 WHERE MaSanPham = $sanPham->MaSanPham";
        $this->ExecuteQuery($sql);
    }

    public function Update($sanPham){
        $sql = "UPDATE sanpham SET TenSanPham = $sanPham->TenSanPham, Gia = $sanPham->Gia, HinhURL = $sanPham->HinhURL, NgayNhap = $sanPham->NgayNhap, SoLuongTon = $sanPham->SoLuongTon, SoLuongBan = $sanPham->SoLuongBan, LuotXem = $sanPham->LuotXem, MoTa = $sanPham->MoTa, XuatXu = $sanPham->XuatXu, MaHangSanXuat = $sanPham->MaHangSanXuat, MaLoai = $sanPham->MaLoai, TenHienThi = $sanPham->TenHienThi, BiXoa = $sanPham->BiXoa WHERE MaSanPham = $sanPham->MaSanPham";
        $this->ExecuteQuery($sql);
    }

    public function GetSoLuongBan($sanPham){
        $sql = "SELECT SoLuongBan from sanpham WHERE MaSanPham = $sanPham->MaSanPham";
        $this->ExecuteQuery($sql);
    }
}