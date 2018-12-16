<?php
$maSP = isset($_GET['id']) ? $_GET['id'] : '';
$biXoa = isset($_GET['d']) ? $_GET['d'] : '';

$spBUS = new SanPhamBUS();

if ($biXoa == 0)
    $spBUS->SetDelete($maSP);
else
    $spBUS->UnsetDelete($maSP);

echo "<script>alert('Cập nhật thành công !')</script>";
echo "<script>window.open('?a=13','_self')</script>";