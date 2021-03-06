<!-- slide -->
<div class="myslides" width="100%">
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
                <div class="carousel-inner" width="100%">
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
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="header-top"></div>
        </div>
    </div>
</div>

<!--sản phẩm bán mới nhất -->
<div class="container">
    <h3 class="title text-left SPBanChay">SẢN PHẨM MỚI NHẤT</h3>
    <div class="row">
        <?php
        $sanPhamBUS = new SanPhamBUS();
        $lstSanPham = $sanPhamBUS->GetNewestProducts();
        foreach($lstSanPham as $sanPham){
            echo ('
                <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="?a=4&id=' . $sanPham->MaSanPham . '">
                <div class="thumbnail effect">
                    <img class="img-proc" src="' . $sanPham->HinhURL . '" width="100%">
                    <div class="productname">' . $sanPham->TenHienThi . '</div>
                    <h4 class="price">' . number_format($sanPham->Gia, 0, ",", ",") . ' VNĐ</h4>
                </div>
                </a>
            </div>');
        }
        ?>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="header-top"></div>
        </div>
    </div>
</div>
<!-- hết sản phẩm mới nhất -->

<!--sản phẩm bán chạy nhất -->
<div class="container">
    <h3 class="title text-left SPBanChay">SẢN PHẨM BÁN CHẠY NHẤT</h3>
    <div class="row">
        <?php
        $sanPhamBUS = new SanPhamBUS();
        $lstSanPham = $sanPhamBUS->GetBestSellers();
        foreach($lstSanPham as $sanPham){
            echo ('
                <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="?a=4&id=' . $sanPham->MaSanPham . '">
                <div class="thumbnail effect">
                    <img class="img-proc" src="' . $sanPham->HinhURL . '" width="100%">
                    <div class="productname">' . $sanPham->TenHienThi . '</div>
                    <h4 class="price">' . number_format($sanPham->Gia, 0, ",", ",")  . ' VNĐ</h4>
                </div>
                </a>
            </div>');
        }
        ?>
    </div>
</div>
<!--hết sản phẩm bán chạy nhất -->