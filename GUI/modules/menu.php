<?php
if(!isset($_SESSION))
    session_start();

if(isset($_SESSION['TenNguoiDung']))
{
?>
    <div class="container-fluid header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 menu">
                    <ul>
                        <li><a href="?a=1"><img src="GUI/img/logo_2.png" alt="" width="50px;"></a></li>
                        <li><a href="?a=2&cat=1">ĐIỆN THOẠI</a></li>
                        <li><a href="?a=2&cat=2">LAPTOP</a></li>
                        <li><a href="?a=2&cat=3">TABLET</a></li>
                        <li><a href="?a=2&cat=4">ĐỒNG HỒ</a></li>
                        <li>
                            <li class="ropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">HÃNG</a>
                                <div class="dropdown-menu menu-ngan">
                                    <a class="dropdown-item menu-hang" href="#">Apple</a>
                                    <a class="dropdown-item menu-hang" href="#">Asus</a>
                                    <a class="dropdown-item menu-hang" href="#">Dell</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item menu-hang" href="#">Lenovo</a>
                                    <a class="dropdown-item menu-hang" href="#">HP</a>
                                    <a class="dropdown-item menu-hang" href="#">MSI</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item menu-hang" href="#">Oppo</a>
                                    <a class="dropdown-item menu-hang" href="#">Xiaomi</a>
                                    <a class="dropdown-item menu-hang" href="#">Samsung</a>
                                </div>
                        </li>
                        <li><a href="?a=5"><i class="fa fa-shopping-cart" title="Giỏ hàng"></i></a></li>
                        <li>
                            <!-- user's infomation -->
                            <a href="?a=13"><i class="fa fa-user-o" title="Thông tin tài khoản"></i></a>
                        </li>
                        <li>
                            <a href="?a=108"><i class="fa fa-sign-out" aria-hidden="true"  title="Đăng xuất"></i></a>
                        </li>
                        <li>
                            <form action="?a=14" method="POST">
                                <input class="input-search" type="text" name="q" placeholder="Bạn tìm gì . . . ?">
                                <button type="submit" class=" btn-search">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
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
<?php } else {  ?>
    <div class="container-fluid header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 menu">
                    <ul>
                        <li><a href="?a=1"><img src="GUI/img/logo_2.png" alt="" width="50px;"></a></li>
                        <li><a href="?a=2&cat=1">ĐIỆN THOẠI</a></li>
                        <li><a href="?a=2&cat=2">LAPTOP</a></li>
                        <li><a href="?a=2&cat=3">TABLET</a></li>
                        <li><a href="?a=2&cat=4">ĐỒNG HỒ</a></li>
                        <li><a href="#">HÃNG</a></li>
                        <li><a href="?a=5"><i class="fa fa-shopping-cart"></i></a></li>
                        <li>
                            <a href="?a=6"><i class="fa fa-sign-in" aria-hidden="true" title="Đăng nhập"></i></a>
                        </li>
                        <li style="margin-left:80px;">
                            <form action="?a=14" method="POST">
                                <input class="input-search" type="text" name="q" placeholder="Bạn tìm gì . . . ?">
                                <button type="submit" class=" btn-search">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
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
<?php } ?>