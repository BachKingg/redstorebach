<div class="container">
    <form action="index.php?act=billconfirm" method="POST">
        <div class="small-container cart">
            <h2 class="title">THÔNG TIN ĐẶT HÀNG</h2>
            <div class="">
                <table>
                    <?php
                    if (isset($_SESSION['user'])) {
                        $name = $_SESSION['user']['username'];
                        $diachi = $_SESSION['user']['diachi'];
                        $email = $_SESSION['user']['email'];
                        $phone = $_SESSION['user']['phone'];
                    } else {
                        $name = "";
                        $diachi = "";
                        $email = "";
                        $phone = "";
                    }
                    ?>
                    <tr>
                        <th>Người đặt hàng</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                        <th>Điện thoại</th>
                    </tr>
                    <tr class="cart--user-info">
                        <td><input type="text" name="name" value="<?= $name ?>"></td>
                        <td><input type="text" name="diachi" value="<?= $diachi ?>"></td>
                        <td><input type="text" name="email" value="<?= $email ?>"></td>
                        <td><input type="text" name="phone" value="<?= $phone ?>"></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="small-container cart">
            <h2 class="title">THÔNG TIN GIỎ HÀNG</h2>
            <div class="">
                <table>
                    <?php
                    viewcart(0);
                    ?>
                </table>
            </div>
        </div>
        <div class="small-container">
            <h2 class="title">PHƯƠNG THỨC THANH TOÁN</h2>
            <div class="cart-pttt">
                <table>
                    <tr>
                        <td>
                            <input type="radio" value="0" class="pttt" name="pttt" checked>Trả tiền khi nhận hàng
                        </td>
                        <td>
                            <input type="radio" value="1" class="pttt" name="pttt">Chuyển khoản ngân hàng
                        </td>
                        <td>
                            <input type="radio" value="2" class="pttt" name="pttt">Thanh toán Online
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="small-container">
            <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" class="btn" name="dongydathang">
        </div>
    </form>
</div>