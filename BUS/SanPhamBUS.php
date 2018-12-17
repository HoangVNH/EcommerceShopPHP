<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 06-Dec-18
 * Time: 5:36 PM
 */

class SanPhamBUS
{
    var $sanPhamDAO;

    public function __construct()
    {
        $this->sanPhamDAO = new SanPhamDAO();
    }

    public function GetNewestProducts()
    {
        return $this->sanPhamDAO->GetNewestProducts();
    }

    public function GetBestSellers()
    {
        return $this->sanPhamDAO->GetBestSellers();
    }

    public function GetAll()
    {
        return $this->sanPhamDAO->GetAll();
    }

    public function GetAllAvailable()
    {
        return $this->sanPhamDAO->GetAllAvailable();
    }

    public function GetOnBrand($id, $br)
    {
        return $this->sanPhamDAO->GetOnBrand($id, $br);
    }

    public function GetOnCategory($cat)
    {
        return $this->sanPhamDAO->GetOnCategory($cat);
    }

    public function GetDetail($id)
    {
        return $this->sanPhamDAO->GetDetail($id);
    }

    public function GetDetailByAdmin($id)
    {
        return $this->sanPhamDAO->GetDetailByAdmin($id);
    }

    public function GetSameType($maLoai, $maSanPham)
    {
        return $this->sanPhamDAO->GetSameType($maLoai, $maSanPham);
    }

    public function GetSearch($q)
    {
        return $this->sanPhamDAO->GetSearch($q);
    }

    public function Insert($sanPham){
        $this->sanPhamDAO->Insert($sanPham);
    }

    public function Delete($maSanPham){
        $this->sanPhamDAO->Delete($maSanPham);
    }

    public function SetDelete($maSanPham){
        $this->sanPhamDAO->SetDelete($maSanPham);
    }

    public function UnsetDelete($maSanPham){
        $this->sanPhamDAO->UnsetDelete($maSanPham);
    }

    public function Update($sanPham){
        $this->sanPhamDAO->Update($sanPham);
    }

    public function GetSoLuongBan($sanPham){
        return $this->sanPhamDAO->GetSoLuongBan($sanPham);
    }

    public function UpdateSoLuongBan($maSanPham, $soLuong){
        $this->sanPhamDAO->UpdateSoLuongBan($maSanPham, $soLuong);
    }

    public function UpdateViews($sanPham){
        $this->sanPhamDAO->UpdateViews($sanPham);
    }

    public function GetAllByAdmin(){
        return $this->sanPhamDAO->GetAllByAdmin();
    }
}