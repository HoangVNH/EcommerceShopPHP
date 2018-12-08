<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 05-Dec-18
 * Time: 4:17 PM
 */

class HangSanXuat
{
    var $MaHangSanXuat;
    var $TenHangSanXuat;
    var $LogoURL;
    var $BiXoa;

    public function __construct()
    {
        $this->MaHangSanXuat = 0;
        $this->TenHangSanXuat = "";
        $this->LogoURL = "";
        $this->BiXoa = 0;
    }
}