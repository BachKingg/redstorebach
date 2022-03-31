<div class="container">
    <div class="col-header title">
        <h2 >QUÊN MẬT KHẨU</h2>
    </div>
    <div class="form-content">
        <form action="index.php?act=quenmk" method="POST">
            <div class="form-col">
                <h3>Email xác minh</h3>
                <input type="email" name="email">
            </div>
            <div class="">
                <input type="submit" name="guiemail" class="btn" value="Gửi">
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