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
        $sql = "UPDATE taikhoan SET  MatKhau = '$taiKhoan->MatKhau', HoTen = '$taiKhoan->HoTen', NgaySinh = '$taiKhoan->NgaySinh', DiaChi = '$taiKhoan->DiaChi' WHERE MaTaiKhoan = '$taiKhoan->MaTaiKhoan'";
        $this->ExecuteQuery($sql);
    }

    public function UpdateByAdmin($taiKhoan)
    {
        $sql = "UPDATE taikhoan SET TenDangNhap = '$taiKhoan->TenDangNhap', MatKhau = '$taiKhoan->MatKhau', HoTen = '$taiKhoan->HoTen', NgaySinh = '$taiKhoan->NgaySinh', DiaChi = '$taiKhoan->DiaChi', LoaiTaiKhoan = '$taiKhoan->LoaiTaiKhoan', BiXoa = $taiKhoan->BiXoa WHERE MaTaiKhoan = $taiKhoan->MaTaiKhoan";
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
        $sql = "SELECT MaTaiKhoan, TenDangNhap, MatKhau, HoTen, NgaySinh, DiaChi, LoaiTaiKhoan, BiXoa FROM taikhoan WHERE MaTaiKhoan = $maTaiKhoan";
        $result = $this->ExecuteQuery($sql);
        if ($result == null)
            return null;
        $row = mysqli_fetch_array($result);
        return $row;
    }

    public function GetPasswordByID($maTaiKhoan){
        $sql = "SELECT MatKhau FROM taikhoan WHERE MaTaiKhoan = '$maTaiKhoan'";
        $result = $this->ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        return $row[0];
    }

    public function GetAll(){
        $sql = "SELECT MaTaiKhoan, TenDangNhap, MatKhau, HoTen, NgaySinh, DiaChi, LoaiTaiKhoan, BiXoa FROM taikhoan";
        $result = $this->ExecuteQuery($sql);
        if($result == null)
            return null;
        $lstTaiKhoan = array();
        while($row = mysqli_fetch_array($result)){
            $taiKhoan = new TaiKhoan();
            $taiKhoan->MaTaiKhoan = $row['MaTaiKhoan'];
            $taiKhoan->TenDangNhap = $row['TenDangNhap'];
            $taiKhoan->MatKhau = $row['MatKhau'];
            $taiKhoan->HoTen = $row['HoTen'];
            $taiKhoan->NgaySinh = $row['NgaySinh'];
            $taiKhoan->DiaChi = $row['DiaChi'];
            $taiKhoan->LoaiTaiKhoan = $row['LoaiTaiKhoan'];
            $taiKhoan->BiXoa = $row['BiXoa'];
            $lstTaiKhoan[] = $taiKhoan;
        }
        return $lstTaiKhoan;
    }

    public function GetAllAvailable(){
        $sql = "SELECT MaTaiKhoan, TenDangNhap, MatKhau, HoTen, NgaySinh, DiaChi, LoaiTaiKhoan, BiXoa FROM taikhoan WHERE BiXoa = 0";
        $result = $this->ExecuteQuery($sql);
        if($result == null)
            return null;
        $lstTaiKhoan = array();
        while($row = mysqli_fetch_array($result)){
            $taiKhoan = new TaiKhoan();
            $taiKhoan->MaTaiKhoan = $row['MaTaiKhoan'];
            $taiKhoan->TenDangNhap = $row['TenDangNhap'];
            $taiKhoan->MatKhau = $row['MatKhau'];
            $taiKhoan->HoTen = $row['HoTen'];
            $taiKhoan->NgaySinh = $row['NgaySinh'];
            $taiKhoan->DiaChi = $row['DiaChi'];
            $taiKhoan->LoaiTaiKhoan = $row['LoaiTaiKhoan'];
            $taiKhoan->BiXoa = $row['BiXoa'];
            $lstTaiKhoan[] = $taiKhoan;
        }
        return $lstTaiKhoan;
    }

    public function SetDelete($maTaiKhoan){
        $sql = "UPDATE taikhoan SET BiXoa = 1 WHERE MaTaiKhoan = $maTaiKhoan";
        $this->ExecuteQuery($sql);
    }

    public function UnsetDelete($maTaiKhoan){
        $sql = "UPDATE taikhoan SET BiXoa = 0 WHERE MaTaiKhoan = $maTaiKhoan";
        $this->ExecuteQuery($sql);
    }

    public function CheckIsDeleted($tenDangNhap){
        $sql = "SELECT BiXoa FROM taikhoan WHERE TenDangNhap = '$tenDangNhap'";
        $row = $this->ExecuteQuery($sql);
        $row = mysqli_fetch_array($row);
        return $row[0];
    }

    public function GetAllID(){
        $sql = "SELECT MaTaiKhoan FROM taikhoan WHERE BiXoa <> 1";
        $result = $this->ExecuteQuery($sql);
        if($result == null)
            return null;
        $lstID = array();
        while ($row = mysqli_fetch_array($result))
            $lstID[] = $row[0];

        return $lstID;
    }
}