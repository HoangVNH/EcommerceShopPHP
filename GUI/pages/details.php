<?php
if(!isset($_SESSION))
    session_start();

if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $maSanPham = $_GET['id'];

    $sP = new SanPhamBUS();
    $sanPham = $sP->GetDetail($maSanPham);

    $maLoai = $sanPham->MaLoai;

    $hangSX = new HangSanXuatBUS();
    $tenHangSX = $hangSX->GetName($sanPham->MaHangSanXuat);

    $sP->UpdateViews($maSanPham);
}
?>

<div class="container">
    <div class="card">
        <div class="wrapper row">
            <div class="preview col-md-6">
                <div class="preview-pic tab-content">
                   <?php
                        echo '<div class="tab-pane active" id="pic-1"><img src="' . $sanPham->HinhURL . '" /></div>';
                    ?>
                </div>
            </div>
            <div class="details col-md-6">
                    <?php
                        echo '<h3 class="product-title">' . $sanPham->TenSanPham . '</h3>';
                    ?>
                    <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <?php
                            echo '<span class="review-no">' . $sanPham->LuotXem . ' lượt xem</span>';
                        ?>
                    </div>
                    <?php
                    echo '<p class="product-description">' . $sanPham->MoTa . '</p>';
                    echo '<h4 class="price">Giá bán: <span style="color: red;">' . number_format($sanPham->Gia, 0, ",", ",") . ' VNĐ</span></h4>';
                    echo '<p class="vote"><strong>' . $sanPham->SoLuongBan . '</strong> sản phẩm đã được bán! </p>';
                    echo '<p class="vote">Xuất xứ: ' . $sanPham->XuatXu . '</p>';
                    echo '<p class="vote">Hãng sản xuất: ' . $tenHangSX . '</p>';
                    ?>
                    <div class="action">
                        <a href="?a=105&id=<?php echo $sanPham->MaSanPham ?>"><button class="add-to-cart btn btn-default">Mua Ngay <i class="fa fa-shopping-cart"></i></button></a>
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="title text-left SPTuongTu">SẢN PHẨM TƯƠNG TỰ</h3>
            <?php
                $lstSanPham = $sP->GetSameType($maLoai, $maSanPham);
                foreach($lstSanPham as $sanPham)
                { ?>
                    <div class="recommend-product-item">
                        <a href="?a=4&id=' . $sanPham->MaSanPham . '">
                            <div class="thumbnail effect">
                                <img class="img-proc" src="' . $sanPham->HinhURL . '" width="100%">
                                <div class="productname">' . $sanPham->TenHienThi . '</div>
                                <h4 class="price">' . number_format($sanPham->Gia, 0, ",", ",") . ' VNĐ</h4>
                            </div>
                        </a>
                    </div>
                <?php } ?>
        </div>
    </div>
</div>