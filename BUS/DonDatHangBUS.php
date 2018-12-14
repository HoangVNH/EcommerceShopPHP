<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 09-Dec-18
 * Time: 4:05 PM
 */

class DonDatHangBUS
{
    var $donDatHangDAO;

    public function __construct()
    {
        $this->donDatHangDAO = new DonDatHangDAO();
    }

    public function Insert($data)
    {
        $this->donDatHangDAO->Insert($data);
    }

    public function GetAllById($maTaiKhoan)
    {
        return $this->donDatHangDAO->GetAllById($maTaiKhoan);
    }

    public function GetMaDonHang(){
        return $this->donDatHangDAO->GetMaDonHang();
    }

    public function GetNumRows(){
        return $this->donDatHangDAO->GetNumRows();
    }

    public function GetAll(){
        return $this->donDatHangDAO->GetAll();
    }

    public function Update($donDatHang){
        $this->donDatHangDAO->Update($donDatHang);
    }

    public function GetOrderById($maDonhang){
        return $this->donDatHangDAO->GetOrderById($maDonhang);
    }

    public function SetDeleted($maDonHang){
        $this->donDatHangDAO->SetDeleted($maDonHang);
    }

    public function UnsetDeleted($maDonHang){
        $this->donDatHangDAO->UnsetDeleted($maDonHang);
    }

}