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

    public function GetOnCategory($cat)
    {
        return $this->sanPhamDAO->GetOnCategory($cat);
    }

    public function GetSearch($q)
    {
        return $this->sanPhamDAO->GetSearch($q);
    }

    public function GetOnBrand($id, $br)
    {
        return $this->sanPhamDAO->GetOnBrand($id, $br);
    }

    public function GetDetail($id)
    {
        return $this->sanPhamDAO->GetDetail($id);
    }

    public function GetSameType($maLoai, $maSanPham)
    {
        return $this->sanPhamDAO->GetSameType($maLoai, $maSanPham);
    }

    public function GetSoLuongBan($sanPham){
        return $this->sanPhamDAO->GetSoLuongBan($sanPham);
    }
}