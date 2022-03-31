<div class="container">
    <div class="col-header title">
        <h2>THÔNG TIN TÀI KHOẢN</h2>
    </div>
    <div class="form-content">
        <?php
        if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
            extract($_SESSION['user']);
        }
        ?>
        <form action="index.php?act=edit_taikhoan" method="POST">
            <div class="form-col">
                <h3> Email</h3>
                <input type="email" name="email" value="<?= $email ?>">
            </div>
            <div class="form-col">
                <h3>Tên đăng nhập</h3>
                <input type="text" name="user" value="<?= $username ?>">
            </div>
            <div class="form-col">
                <h3>Mật khẩu</h3>
                <input type="password" name="pass" value="<?= $password ?>">
            </div>
            <div class="form-col">
                <h3> Địa chỉ</h3>
                <input type="text" name="diachi" value="<?= $diachi ?>">
            </div>
            <div class="form-col">
                <h3> Điện thoại</h3>
                <input type="text" name="phone" value="<?= $phone ?>">
            </div>
            <div class="">
                <input type="hidden" name="id" value="<?= $id_khach ?>">
                <input type="submit" name="capnhat" class="btn" value="Cập nhật">
                <input type="reset" class="btn" value="Nhập lại">
            </div>
        </form>
        <h2 class="thongbao">
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?>
        </h2>
    </div>
</div>