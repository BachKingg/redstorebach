<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopBach | Ecommere Website</title>
    <link rel="stylesheet" href="./view/assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header">
        <div class="navbar">
            <div class="logo">
                <a href="index.php">
                    <img src="./view/assets/images/logo-bad.png" alt="logo" width="150px">
                </a>
            </div>
            <nav class="navbar-menu-items">
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?act=sanpham">Products</a></li>
                    <li><a href="index.php?act=gioithieu">About</a></li>
                    <li><a href="index.php?act=lienhe">Contact</a></li>
                    <!-- <li><a href="#">Account</a></li> -->
                </ul>
                <!-- <div class="form-col search-bar">
                        <form action="index.php?act=sanpham" method="POST">
                            <input type="text" name="kyw" placeholder="Nhập tìm kiếm...">
                            <input type="submit" name="timkiem" class="btn" value="Tìm kiếm">
                        </form>
                    </div> -->
            </nav>
            <div>
                <a href="">
                    <i class="fa fa-shopping-basket" style="font-size:24px"></i>
                </a>
            </div>
            <div class="header__navbar-item header__navbar-user">
                <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                ?>
                    <div class="header__navbar-user-name">
                        <i class="fas fa-user-circle header__navbar-user-icon"></i>
                        <p>Chào, <?= $username ?> | <a href="index.php?act=thoat">Đăng xuất</a></p>
                    </div>
                    <ul class="header__navbar-user-menu">
                        <!-- <li class="header__navbar-user-item">
                                <a href="" id="username" class="title"></a>
                            </li> -->
                        <li class="header__navbar-user-item">
                            <a href="index.php?act=mybill">
                                <i class="fas fa-shopping-cart" style="font-size: 18px;"></i>&nbsp;&nbsp;Đơn hàng của tôi
                                
                            </a>
                        </li>
                        <li class="header__navbar-user-item">
                            <a href="index.php?act=quenmk">
                                <i class="fas fa-unlock-alt" style="font-size: 18px;"></i>&nbsp;&nbsp;Quên mật khẩu
                            </a>
                        </li>
                        <li class="header__navbar-user-item">
                            <a href="index.php?act=edit_taikhoan">
                                <i class="fas fa-edit" style="font-size: 18px;"></i>&nbsp;&nbsp;Cập nhật tài khoản
                            </a>
                        </li>
                        <?php if ($vaitro == 1) { ?>
                            <li class="header__navbar-user-item">
                                <a href="admin/indexadmin.php">
                                    <i class="fas fa-users-cog" style="font-size: 18px;"></i>&nbsp;&nbsp;Đăng nhập Admin
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } else { ?>
                    <div class="header__navbar-user-name-no-user">
                        <a href="index.php?act=dangky">
                            <i class="fas fa-user-circle header__navbar-user-icon-no-user"></i>
                        </a>
                    </div>
                <?php } ?>
            </div>

            <!-- <img src="./view/assets/images/menu.png" alt="menu" class="menu-icon" onclick="menutoggle()"> -->
        </div>
    </div>