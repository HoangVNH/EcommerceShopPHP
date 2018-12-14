<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 07-Dec-18
 * Time: 1:25 AM
 */

class TaiKhoanBUS
{
    var $taiKhoanDAO;

    public function __construct()
    {
        $this->taiKhoanDAO = new TaiKhoanDAO();
    }

    public function Insert($taiKhoan)
    {
        $this->taiKhoanDAO->Insert($taiKhoan);
    }

    public function Update($taiKhoan)
    {
        $this->taiKhoanDAO->Update($taiKhoan);
    }

    public function UpdateByAdmin($taiKhoan)
    {
        $this->taiKhoanDAO->UpdateByAdmin($taiKhoan);
    }

    public function CheckTypeAccount($tenDangNhap)
    {
        return $this->taiKhoanDAO->CheckTypeAccount($tenDangNhap);
    }

    public function VerifyAccount($tenDangNhap, $matKhau)
    {
        return $this->taiKhoanDAO->VerifyAccount($tenDangNhap, $matKhau);
    }

    public function GetName($tenDangNhap)
    {
        return $this->taiKhoanDAO->GetName($tenDangNhap);
    }

    public function GetID($tenDangNhap)
    {
        return $this->taiKhoanDAO->GetID($tenDangNhap);
    }

    public function GetUsername($tenDangNhap)
    {
        return $this->taiKhoanDAO->GetUsername($tenDangNhap);
    }

    public function GetInfoByID($maTaiKhoan){
        return $this->taiKhoanDAO->GetInfoByID($maTaiKhoan);
    }

    public function GetPasswordByID($maTaiKhoan){
        return $this->taiKhoanDAO->GetPasswordByID($maTaiKhoan);
    }

    public function GetAll(){
        return $this->taiKhoanDAO->GetAll();
    }

    public function GetAllAvailable(){
        return $this->taiKhoanDAO->GetAll();
    }

    public function SetDelete($maTaiKhoan){
        $this->taiKhoanDAO->SetDelete($maTaiKhoan);
    }

    public function UnsetDelete($maTaiKhoan){
        $this->taiKhoanDAO->UnsetDelete($maTaiKhoan);
    }

    public function CheckIsDeleted($tenDangNhap){
        return $this->taiKhoanDAO->CheckIsDeleted($tenDangNhap);
    }

    public function GetAllID(){
        return $this->taiKhoanDAO->GetAllID();
    }
}