<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 05-Dec-18
 * Time: 11:58 PM
 */

class HangSanXuatDAO extends DB
{
    public function GetAll(){
        $sql = "SELECT MaHangSanXuat, TenHangSanXuat, LogoURL, BiXoa FROM hangsanxuat";
        $result = $this->ExecuteQuery($sql);
        if($result == null)
            return null;
        $lstLogo = array();
        while($row = mysqli_fetch_array($result))
        {
            $hangSanXuat = new HangSanXuat();
            $hangSanXuat->MaHangSanXuat = $row["MaHangSanXuat"];
            $hangSanXuat->TenHangSanXuat = $row["TenHangSanXuat"];
            $hangSanXuat->LogoURL = $row["LogoURL"];
            $hangSanXuat->BiXoa = $row["BiXoa"];
            $lstLogo[] = $hangSanXuat;
        }
        return $lstLogo;
    }

    public function GetAllAvailable(){
        $sql = "SELECT MaHangSanXuat, TenHangSanXuat, LogoURL FROM hangsanxuat where BiXoa = 0";
        $result = $this->ExecuteQuery($sql);
        if($result == null)
            return null;
        $lstLogo = array();
        while($row = mysqli_fetch_array($result))
        {
            $hangSanXuat = new HangSanXuat();
            $hangSanXuat->MaHangSanXuat = $row["MaHangSanXuat"];
            $hangSanXuat->LogoURL = $row["LogoURL"];
            $lstLogo[] = $hangSanXuat;
        }
        return $lstLogo;
    }

    public function GetLogo($cat)
    {
        $sql = "SELECT DISTINCT (hsx.MaHangSanXuat), hsx.LogoURL FROM sanpham sp, hangsanxuat hsx WHERE sp.MaLoai = $cat AND sp.MaHangSanXuat = hsx.MaHangSanXuat AND hsx.BiXoa = 0";
        $result = $this->ExecuteQuery($sql);
        if($result == null)
            return null;
        $lstLogo = array();
        while($row = mysqli_fetch_array($result))
        {
            $hangSanXuat = new HangSanXuat();
            $hangSanXuat->MaHangSanXuat = $row["MaHangSanXuat"];
            $hangSanXuat->LogoURL = $row["LogoURL"];
            $lstLogo[] = $hangSanXuat;
        }
        return $lstLogo;
    }

    public function GetName($maHangSanXuat)
    {
        $sql = "SELECT TenHangSanXuat FROM hangsanxuat WHERE MaHangSanXuat = $maHangSanXuat";
        $result = $this->ExecuteQuery($sql);
        if($result == null)
            return null;
        $row = mysqli_fetch_array($result);
        return $row[0];
    }

    public function Insert($hangSanXuat){
        $sql = "INSERT INTO hangsanxuat(TenHangSanXuat, LogoURL, BiXoa) VALUES ('$hangSanXuat->TenHangSanXuat', '$hangSanXuat->LogoURL', $hangSanXuat->BiXoa)";
        $this->ExecuteQuery($sql);
    }

    public function Delete($hangSanXuat){
        $sql = "DELETE FROM hangsanxuat WHERE MaHangSanXuat = $hangSanXuat->MaHangSanXuat";
        $this->ExecuteQuery($sql);
    }

    public function SetDelete($hangSanXuat){
        $sql = "UPDATE hangsanxuat SET BiXoa = 1 WHERE MaHangSanPham = $hangSanXuat->MaHangSanPham";
        $this->ExecuteQuery($sql);
    }

    public function UnsetDelete($hangSanXuat){
        $sql = "UPDATE hangsanxuat SET BiXoa = 0 WHERE MaHangSanPham = $hangSanXuat->MaHangSanPham";
        $this->ExecuteQuery($sql);
    }

    public function Update($hangSanXuat){
        $sql = "UPDATE hangsanxuat SET TenHangSanXuat = '$hangSanXuat->TenHangSanXuat', LogoURL = '$hangSanXuat->LogoURL', BiXoa = $hangSanXuat->BiXoa WHERE MaHangSanXuat = $hangSanXuat->MaHangSanXuat";
        $this->ExecuteQuery($sql);
    }

    public function CountProductsBasedOnBrand($maHangSanXuat){
        $sql = "SELECT COUNT(MaSanPham) AS SoLuong FROM sanpham where MaHangSanXuat = $maHangSanXuat";
        $result = $this->ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        return $row[0];
    }
}