<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 09-Dec-18
 * Time: 4:22 PM
 */

class ChiTietDonDatHangBUS
{
    var $chiTietDonDatHangDAO;

    public function __construct()
    {
        $this->chiTietDonDatHangDAO = new ChiTietDonDatHangDAO();
    }

    public function Insert($chiTietDonDatHang){
         $this->chiTietDonDatHangDAO->Insert($chiTietDonDatHang);
    }
}