<div class="container">
    <div class="cart">
        <h2 class="title">ĐƠN HÀNG CỦA BẠN</h2>
        <div class="row">
            <table>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Số loại</th>
                    <th>Số lượng</th>
                    <th>Tổng giá trị</th>
                    <th>Tình trạng đơn hàng</th>
                </tr>
                <?php
                if (is_array($listbill)) {
                    foreach ($listbill as $bill) {
                        extract($bill);
                        $ttdh = get_ttdh($bill['bill_status']);
                        $countsp = loadAll_cart_count($bill['id']);
                        $tongsl = loadAll_cart_count_soluong($bill['id']);
                        echo '<tr>
                                    <td>BACH-' . $bill['id'] . '</td>
                                    <td>' . $bill['ngaydathang'] . '</td>
                                    <td>' . $countsp . '</td>
                                    <td>' . $tongsl["soluongtong"] . '</td>
                                    <td>' . $bill['total'] . '$</td>
                                    <td>' . $ttdh . '</td>
                                </tr>';
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>