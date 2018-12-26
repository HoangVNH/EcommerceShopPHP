<?php

if (!isset($_SESSION))
    session_start();
?>

<div width="100%">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="GUI/img/slide_1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="GUI/img/slide_2.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="GUI/img/slide_3.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="GUI/img/slide_4.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="GUI/img/slide_5.jpg" alt="First slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- hết slide -->


<?php
if (isset($_SESSION['MaTaiKhoan'])) {
    if (isset($_SESSION['GioHang']) && count($_SESSION['GioHang']) > 0) {
        ?>
        

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-top"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h1>GIỎ HÀNG</h1>
                    <div class="shopping-cart">
                        <div class="column-labels">
                            <label class="product-image">Hình ảnh</label>
                            <label class="product-details">Sản phẩm</label>
                            <label class="product-price">Giá</label>
                            <label class="product-quantity">Số lượng</label>
                            <label class="product-removal">Remove</label>
                            <label class="product-line-price">Tổng tiền</label>
                        </div>
                        <?php
                        $tongTien = 0;
                        foreach ($_SESSION['GioHang'] as $key => $value) { ?>
                            <div class="product" id="sp<?php echo $key ?>">
                                <div class="product-image">
                                    <img src="<?php echo $value['HinhURL']; ?>">
                                </div>
                                <div class="product-details">
                                    <div class="product-title"><?php echo $value['TenHienThi']; ?></div>
                                </div>
                                <div class="product-price"><?php echo number_format($value['Gia'], 0, ",", ","); ?> VNĐ</div>
                                <div class="product-quantity">
                                    <select class="qty" data-masp="<?php echo $key; ?>">
                                        <?php if ($key == $_POST['masp']){
                                            $value['SoLuong'] = $_POST['slm'];
                                        } ?>
                                        <?php for ($i = 1; $i < 21; $i++) {
                                            if ($i == $value['SoLuong'])
                                                echo "<option value='$i' selected> $i </option>";
                                            else
                                                echo "<option value='$i'> $i </option>";
                                        }?>
                                    </select>
                                </div>
                                <div class="product-removal">
                                    <a style="cursor: pointer;" class="myDelete" data-sp="<?php echo $key; ?>" style="margin-right: 16px" onmouseover="this.style.color='#0070c9'" onmouseout="this.style.color='#333'">Xoá</a>
                                </div>
                                <div class="product-line-price"><?php $tong = $value['Gia'] * $value['SoLuong'];
                                    echo number_format($tong, 0, ',', ','); ?> VNĐ
                                </div>
                            </div>
                            <?php $tongTien += $tong;
                        } ?>

                        <div class="totals">
                            <div class="totals-item totals-item-total">
                                <label><strong style="font-size: 25px; font-weight: bold; color: #000;">Tổng tiền</strong></label>
                                <div class="totals-value" id="cart-total"><?php echo number_format($tongTien, 0, ",", ",");?> VNĐ
                                    <?php $_SESSION['TongTien'] = $tongTien; ?></div>
                            </div>
                        </div>
                        <a href="?a=111">
                            <button type="submit" class="checkout">Tiến hành đặt hàng</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-top"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-top"></div>
                </div>
            </div>
        </div>
        <div align="center">Không có sản phẩm nào trong giỏ hàng của bạn.</div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-top"></div>
                </div>
            </div>
        </div>
        <div align="center"><a class="btn tieptuc" href="?a=1" role="button">Tiếp tục mua sắm</a></div>
    <?php }
} else {
    echo "<script>alert('Bạn phải đăng nhập mới có thể sử dụng chức năng này');location.href='?a=6'</script>";
} ?>

