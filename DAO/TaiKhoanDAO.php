<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 06-Dec-18
 * Time: 12:20 PM
 */

class TaiKhoanDAO extends DB
{
    public function Insert($taiKhoan)
    {
        $sql = "INSERT IGNORE INTO taikhoan(TenDangNhap, MatKhau, HoTen, NgaySinh, DiaChi) VALUES('$taiKhoan->TenDangNhap', '$taiKhoan->MatKhau', '$taiKhoan->HoTen', '$taiKhoan->NgaySinh', '$taiKhoan->DiaChi')";
        $this->ExecuteQuery($sql);
    }

    public function Update($taiKhoan)
    {
        $sql = "UPDATE taikhoan SET MatKhau = '$taiKhoan->MatKhau', HoTen = '$taiKhoan->HoTen', NgaySinh = '$taiKhoan->NgaySinh', DiaChi = '$taiKhoan->DiaChi' WHERE MaTaiKhoan = '$taiKhoan->MaTaiKhoan'";
        $this->ExecuteQuery($sql);
    }

    public function CheckTypeAccount($tenDangNhap)
    {
        $sql = "SELECT LoaiTaiKhoan FROM taikhoan WHERE tenDangNhap = '$tenDangNhap'";
        $result = $this->ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        return $row[0];
    }

    public function VerifyAccount($tenDangNhap, $matKhau)
    {
        $sql = "SELECT COUNT(MaTaiKhoan) FROM taikhoan WHERE TenDangNhap = '$tenDangNhap' AND MatKhau = '$matKhau'";
        $result = $this->ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        return $row[0];
    }

    public function GetName($tenDangNhap)
    {
        $sql = "SELECT HoTen FROM taikhoan WHERE TenDangNhap = '$tenDangNhap'";
        $result = $this->ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        return $row[0];
    }

    public function GetID($tenDangNhap)
    {
        $sql = "SELECT MaTaiKhoan FROM taikhoan WHERE TenDangNhap = '$tenDangNhap'";
        $result = $this->ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        return $row[0];
    }

    public function GetUsername($tenDangNhap)
    {
        $sql = "SELECT TenDangNhap FROM taikhoan WHERE TenDangNhap = '$tenDangNhap'";
        $result = $this->ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        return $row[0];
    }

    public function GetInfoByID($maTaiKhoan){
        $sql = "SELECT TenDangNhap, HoTen, NgaySinh, DiaChi FROM taikhoan WHERE MaTaiKhoan = '$maTaiKhoan'";
        $result = $this->ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        return $row;
    }

    public function GetPasswordByID($maTaiKhoan){
        $sql = "SELECT MatKhau FROM taikhoan WHERE MaTaiKhoan = '$maTaiKhoan'";
        $result = $this->ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        return $row[0];
    }
}