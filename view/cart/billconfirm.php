<div class="container">
    <div class="cart">
        <div class="cart-thanks">
            <h1>ĐẶT HÀNG THÀNH CÔNG!</h1>
            <h1 class="title">Cảm ơn bạn đã tin tưởng và ủng hộ shop!</h1>
        </div>
    </div>
    <?php
    if (isset($bill) && (is_array($bill))) {
        extract($bill);
        $pttt = get_pttt($bill['bill_pttt']);
    }
    ?>
    <div class="cart">
        <h2 class="title">THÔNG TIN ĐƠN HÀNG</h2>
        <div class="bill--info">
            <table>
                <tr>
                    <th>Người đặt hàng</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Điện thoại</th>
                </tr>
                <tr>
                    <td><?= $bill['bill_name']; ?></td>
                    <td><?= $bill['bill_address']; ?></td>
                    <td><?= $bill['bill_email']; ?></td>
                    <td><?= $bill['bill_phone']; ?></td>
                </tr>
            </table>
            <br>
            <table>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Tổng đơn hàng</th>
                    <th>Phương thức thanh toán</th>
                </tr>
                <tr>
                    <td>BACH-<?= $bill['id']; ?></td>
                    <td><?= $bill['ngaydathang']; ?></td>
                    <td>$<?= $bill['total']; ?></td>
                    <td><?= $pttt; ?></td>
                </tr>
            </table>


        </div>

    </div>

    <div class="cart">
        <h2 class="title">CHI TIẾT GIỎ HÀNG</h2>
        <div class=" billform">
            <table>
                <?php
                bill_chitiet($billct);
                ?>
            </table>
        </div>
    </div>
</div>