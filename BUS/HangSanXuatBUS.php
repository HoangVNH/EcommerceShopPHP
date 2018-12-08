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
        $hangSanXuat = new HangSanXuat();
        $hangSanXuat->MaHangSanXuat = $maHangSanXuat;
        $this->hangSanXuatDAO->SetDelete($hangSanXuat);
    }

    public function UnsetDelete($maHangSanXuat){
        $hangSanXuat = new HangSanXuat();
        $hangSanXuat->MaHangSanXuat = $maHangSanXuat;
        $this->hangSanXuatDAO->UnsetDelete($hangSanXuat);
    }

    public function Update($tenHang){
        $hangSanXuat = new HangSanXuat();
        $hangSanXuat->TenHangSanXuat = $tenHang;
        $this->hangSanXuatDAO->Update($hangSanXuat);
    }
}