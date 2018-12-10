<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 09-Dec-18
 * Time: 2:16 PM
 */

class DonDatHangDAO extends DB
{
    public function Insert($data)
    {
        $sql = "INSERT INTO dondathang";
        $columns = implode(',', array_keys($data));
        $values = "";
        $sql .= '(' .$columns . ')';
        foreach ($data as $field=>$value)
        {
            if(is_string($value))
                $values .= "'".$value . "',";
            else
                $values .=  $value . ',';
        }
        $mysqli = new mysqli("localhost", "root", "", "1660214_1660359_1660656_quanlysanpham");
        $values = substr($values, 0 , -1);
        $sql .= " VALUES (" . $values . ')';
        $mysqli->query($sql);
        return $mysqli->insert_id;
    }

    public function GetAllById($maTaiKhoan)
    {
        $sql = "SELECT ddh.MaDonHang, ddh.NgayMua, sp.TenHienThi, ddh.TongTien, ddh.TinhTrang FROM dondathang ddh, chitietdondathang ctddh, sanpham sp WHERE ddh.MaTaiKhoan = '$maTaiKhoan' AND ctddh.MaDonDatHang = ddh.MaDonHang AND sp.MaSanPham = ctddh.MaSanPham";
        $result = $this->ExecuteQuery($sql);
        $lstDonDatHang = array();
        while($row = mysqli_fetch_array($result))
        {
            $lstDonDatHang[] = $row;
        }

        return $lstDonDatHang;
    }
}