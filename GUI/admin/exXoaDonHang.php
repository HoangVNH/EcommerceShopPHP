<?php
$maDH = isset($_GET['mdh']) ? $_GET['mdh'] : null;
$biXoa = isset($_GET['d']) ? $_GET['d'] : null;

$donHangBUS = new DonDatHangBUS();

if($biXoa == 0)
    $donHangBUS->SetDeleted($maDH);
else
    $donHangBUS->UnsetDeleted($maDH);

echo "<script>alert('Cập nhật đơn hàng thành công !')</script>";
echo "<script>window.open('?a=5','_self')</script>";