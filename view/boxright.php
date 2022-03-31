<div class="row mb">
    <div class="boxtitle">TÀI KHOẢN</div>
    <div class="boxcontent formtaikhoan">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
            ?>
            <div class="row mb10">
                Xin chào <?= $username ?>
            </div>
            <div class="row mb10">
                <li><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
                <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
                <?php if ($vaitro == 1) { ?>
                    <li><a href="admin/indexadmin.php">Đăng nhập Admin</a></li>
                <?php } ?>
                <li><a href="index.php?act=thoat">Đăng xuất</a></li>
            </div>
        <?php } else { ?>
            <form action="index.php?act=dangnhap" method="POST">
                <div class="row mb10">
                    Tên đăng nhập <br>
                    <input type="text" name="user"><br>
                </div>
                <div class="row mb10">
                    Mật khẩu <br>
                    <input type="password" name="pass"><br>
                </div>
                <div class="row mb10">
                    <input type="checkbox"> Ghi nhớ tài khoản ? <br>
                </div>
                <div class="row mb10">
                    <input type="submit" value="ĐĂNG NHẬP" name="dangnhap">
                </div>
            </form>
            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
        <?php } ?>
    </div>
</div>
<div class="row mb">
    <div class="boxtitle">DANH MỤC</div>
    <div class="boxcontent2 menudoc">
        <ul>
            <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '<li>
                               <a href="' . $linkdm . '">' . $ten_danhmuc . '</a>
                            </li>';
            }
            ?>
            <!--            <li>
                            <a href="#">Đồng hồ</a>
                        </li>
                        <li>
                            <a href="#">Đồng hồ</a>
                        </li>-->

        </ul>
    </div>
    <div class="boxfooter searchbox">
        <form action="index.php?act=sanpham" method="POST">
            <input type="text" name="kyw" placeholder="Nhập tìm kiếm của bạn..."><input type="submit" name="timkiem" value="Tìm kiếm">
        </form>
    </div>
</div>
<div class="row ">
    <div class="boxtitle">TOP 10 SẢN PHẨM HOT</div>
    <div class="row boxcontent">
        <?php
        foreach ($dsview as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id_sanpham;
            $img = $img_path . $img;
            echo '<div class="row mb10 top10">
                                    <a href="' . $linksp . '"><img src="' . $img . '" alt=""></a>
                                    <a href="' . $linksp . '">' . $ten_sanpham . '</a>
                        </div>';
        }
        ?>
        <!--        <div class="row mb10 top10">
                    <img src="view/img/" alt="">
                    <a href="#">sam pham 1</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/img/" alt="">
                    <a href="#">sam pham 1</a>
                </div>-->


    </div>
</div>
