<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 05-Dec-18
 * Time: 10:29 PM
 */

class LoaiSanPhamDAO extends DB
{
    public function GetAll()
    {
        $sql = "SELECT MaLoai, TenLoai, BiXoa from loaisanpham";
        $result = $this->ExecuteQuery($sql);
        if($result == null)
            return null;
        $lstLoaiSanPham = array();
        while($row = mysqli_fetch_array($result))
        {
            $loaiSanPham = new LoaiSanPham();
            $loaiSanPham->MaLoai = $row["MaLoai"];
            $loaiSanPham->TenLoai = $row["TenLoai"];
            $loaiSanPham->BiXoa = $row["BiXoa"];
            $lstLoaiSanPham[] = $loaiSanPham;
        }
        return $lstLoaiSanPham;
    }

    public function GetAllAvailable()
    {
        $sql = "SELECT MaLoai, TenLoai from loaisanpham WHERE BiXoa = 0";
        $result = $this->ExecuteQuery($sql);
        if($result == null)
            return null;
        $lstLoaiSanPham = array();
        while($row = mysqli_fetch_array($result))
        {
            $loaiSanPham = new LoaiSanPham();
            $loaiSanPham->MaLoai = $row["MaLoai"];
            $loaiSanPham->TenLoai = $row["TenLoai"];
            $loaiSanPham->BiXoa = $row["BiXoa"];
            $lstLoaiSanPham[] = $loaiSanPham;
        }
        return $lstLoaiSanPham;
    }

    public function Insert($tenLoai){
        $sql = "INSERT INTO loaisanpham(TenLoai) VALUES (N'$tenLoai')";
        $this->ExecuteQuery($sql);
    }

    public function Delete($loaiSanPham){
        $sql = "DELETE FROM loaisanpham WHERE MaLoai = $loaiSanPham->MaLoai";
        $this->ExecuteQuery($sql);
    }

    public function SetDelete($loaiSanPham){
        $sql = "UPDATE loaisanpham SET BiXoa = 1 WHERE MaLoai = $loaiSanPham->MaLoai";
        $this->ExecuteQuery($sql);
    }

    public function UnsetDelete($loaiSanPham){
        $sql = "UPDATE loaisanpham SET BiXoa = 0 WHERE MaLoai = $loaiSanPham->MaLoai";
        $this->ExecuteQuery($sql);
    }

    public function Update($loaiSanPham){
        $sql = "UPDATE loaisanpham SET TenLoai = N'$loaiSanPham->TenLoai' WHERE MaLoai = $loaiSanPham->MaLoai";
        $this->ExecuteQuery($sql);
    }

    public function CountProductsBasedOnCategory($maLoaiSanPham){
        $sql = "SELECT COUNT(MaSanPham) AS SoLuong FROM sanpham where MaLoai = $maLoaiSanPham";
        $result = $this->ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        return $row[0];
    }

    public function GetOnId($maLoai){
        $sql = "SELECT MaLoai, TenLoai FROM loaisanpham WHERE MaLoai = $maLoai";
        $result = $this->ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        return $row;
    }
}