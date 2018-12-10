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
        return $this->donDatHangDAO->Insert($data);
    }

    public function GetAllById($maTaiKhoan)
    {
        return $this->donDatHangDAO->GetAllById($maTaiKhoan);
    }

}