<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 05-Dec-18
 * Time: 4:10 PM
 */

class LoaiSanPham
{
    var $MaLoai;
    var $TenLoai;
    var $BiXoa;

    public  function __construct()
    {
        $this->MaLoai = 0;
        $this->TenLoai = "";
        $this->BiXoa = 0;
    }
}