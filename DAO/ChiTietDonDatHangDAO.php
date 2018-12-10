<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 09-Dec-18
 * Time: 4:21 PM
 */

class ChiTietDonDatHangDAO extends DB
{
    public function Insert($data){
        $sql = "INSERT INTO chitietdondathang";
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
}