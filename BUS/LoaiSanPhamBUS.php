<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 06-Dec-18
 * Time: 1:13 PM
 */

class LoaiSanPhamBUS
{
    var $loaiSanPhamDAO;

    public function __construct()
    {
        $this->loaiSanPhamDAO = new LoaiSanPhamDAO();
    }

    public function GetAll()
    {
        return $this->loaiSanPhamDAO->GetAll();
    }

    public function GetAllAvailable(){
        return $this->loaiSanPhamDAO->GetAllAvailable();
    }

    public function Insert($tenLoai){
        $this->loaiSanPhamDAO->Insert($tenLoai);
    }

    public function Delete($maLoaiSanPham){
        $loaiSanPham = new LoaiSanPham();
        $loaiSanPham->MaLoai = $maLoaiSanPham;
        $soLuongSanPham = $this->loaiSanPhamDAO->CountProductsBasedOnCategory($maLoaiSanPham);
        if($soLuongSanPham == 0)
            $this->loaiSanPhamDAO->Delete($loaiSanPham);
        else
            $this->loaiSanPhamDAO->SetDelete($loaiSanPham);
    }

    public function SetDelete($maLoaiSanPham){
        $loaiSanPham = new LoaiSanPham();
        $loaiSanPham->MaLoai = $maLoaiSanPham;
        $this->loaiSanPhamDAO->SetDelete($loaiSanPham);
    }

    public function UnsetDelete($maLoaiSanPham){
        $loaiSanPham = new LoaiSanPham();
        $loaiSanPham->MaLoai = $maLoaiSanPham;
        $this->loaiSanPhamDAO->UnsetDelete($loaiSanPham);
    }

    public function Update($loaiSanPham){
        $this->loaiSanPhamDAO->Update($loaiSanPham);
    }

    public function CountProductsBasedOnCategory($maLoaiSanPham){
        return $this->loaiSanPhamDAO->CountProductsBasedOnCategory($maLoaiSanPham);
    }

    public function GetOnId($maLoai){
        return $this->loaiSanPhamDAO->GetOnId($maLoai);
    }

    public function GetAllName(){
        return $this->loaiSanPhamDAO->GetAllName();
    }
}