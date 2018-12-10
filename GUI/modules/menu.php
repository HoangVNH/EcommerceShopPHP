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
                        <li><a href="?h=pIndex"><img src="GUI/img/logo_2.png" alt="" width="50px;"></a></li>
                        <li><a href="?h=category&cat=1">ĐIỆN THOẠI</a></li>
                        <li><a href="?h=category&cat=2">LAPTOP</a></li>
                        <li><a href="?h=category&cat=3">TABLET</a></li>
                        <li><a href="?h=category&cat=4">ĐỒNG HỒ</a></li>
                        <li><a href="#">HÃNG</a></li>
                        <li><a href="?h=cart"><i class="fa fa-shopping-cart" title="Giỏ hàng"></i></a></li>
                        <li>
                            <!-- user's infomation -->
                            <a href="?h=information"><i class="fa fa-user-o" title="Thông tin tài khoản"></i></a>
                        </li>
                        <li>
                            <a href="?h=exLogout"><i class="fa fa-sign-out" aria-hidden="true"  title="Đăng xuất"></i></a>
                        </li>
                        <li>
                            <form action="?h=search" method="POST">
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
                        <li><a href="?h=pIndex"><img src="GUI/img/logo_2.png" alt="" width="50px;"></a></li>
                        <li><a href="?h=category&cat=1">ĐIỆN THOẠI</a></li>
                        <li><a href="?h=category&cat=2">LAPTOP</a></li>
                        <li><a href="?h=category&cat=3">TABLET</a></li>
                        <li><a href="?h=category&cat=4">ĐỒNG HỒ</a></li>
                        <li><a href="#">HÃNG</a></li>
                        <li><a href="?h=cart"><i class="fa fa-shopping-cart"></i></a></li>
                        <li>
                            <a href="?h=signin"><i class="fa fa-sign-in" aria-hidden="true" title="Đăng nhập"></i></a>
                        </li>
                        <li style="margin-left:80px;">
                            <form action="?h=search" method="POST">
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