<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 06-Dec-18
 * Time: 1:20 PM
 */

class HangSanXuatBUS
{
    var $hangSanXuatDAO;

    public function __construct()
    {
        $this->hangSanXuatDAO = new HangSanXuatDAO();
    }

    public function GetAll(){
        return $this->hangSanXuatDAO->GetAll();
    }

    public function GetAllAvailable(){
        return $this->hangSanXuatDAO->GetAllAvailable();
    }

    public function GetLogo($cat)
    {
        return $this->hangSanXuatDAO->GetLogo($cat);
    }

    public function GetName($maHangSanXuat)
    {
        return $this->hangSanXuatDAO->GetName($maHangSanXuat);
    }

    public function Insert($hangSanXuat)
    {
        $this->hangSanXuatDAO->Insert($hangSanXuat);
    }

    public function Delete($maHangSanXuat){
        $hangSanXuat = new HangSanXuat();
        $hangSanXuat->MaHangSanXuat = $maHangSanXuat;
        $soLuong = $this->hangSanXuatDAO->CountProductsBasedOnBrand($hangSanXuat->MaHangSanXuat);
        if ($soLuong == 0)
            $this->hangSanXuatDAO->Delete($hangSanXuat);
        else
            $this->hangSanXuatDAO->SetDelete($hangSanXuat);
    }

    public function SetDelete($maHangSanXuat){
        $this->hangSanXuatDAO->SetDelete($maHangSanXuat);
    }

    public function UnsetDelete($maHangSanXuat){
        $this->hangSanXuatDAO->UnsetDelete($maHangSanXuat);
    }

    public function Update($hangSanXuat){
        $this->hangSanXuatDAO->Update($hangSanXuat);
    }

    public function CountProductsBasedOnBrand($maHangSanXuat){
        return $this->hangSanXuatDAO->CountProductsBasedOnBrand($maHangSanXuat);
    }

    public function GetBrandOnId($maHangSanXuat){
        return $this->hangSanXuatDAO->GetBrandOnId($maHangSanXuat);
    }

    public function GetLogoURL($maHangSanXuat){
        return $this->hangSanXuatDAO->GetLogoURL($maHangSanXuat);
    }

    public function GetAllName(){
        return $this->hangSanXuatDAO->GetAllName();
    }
}