<div class="container">
    <div class="column">
        <div class="col-header title">
            <h2>DANH SÁCH ĐƠN HÀNG</h2>
        </div>
        <div class="col-content">
            <div class="add-table">
                <table>
                    <tr>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>KHÁCH HÀNG</th>
                        <th>SỐ LOẠI</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>PHƯƠNG THỨC THANH TOÁN</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT HÀNG</th>
                        <th>OPTION</th>
                    </tr>
                    <?php
                    foreach ($listbill as $bill) {
                        extract($bill);
                        $xoabill = "indexadmin.php?act=xoabill&id=" . $bill['id'];
                        $kh = $bill["bill_name"] . '<br>' . $bill["bill_email"] . '<br>' . $bill["bill_address"] . '<br>' . $bill["bill_phone"];
                        $countsp = loadAll_cart_count($bill['id']);
                        $tongsl = loadAll_cart_count_soluong($bill['id']);
                        $ttdh = get_ttdh($bill['bill_status']);
                        $pttt = get_pttt($bill['bill_pttt']);
                        echo '<tr>
                        <td>BACH-' . $bill['id'] . '</td>
                        <td>' . $kh . '</td>
                        <td>' . $countsp . '</td>
                        <td>' . $tongsl["soluongtong"] . '</td>
                        <td>' . $bill['total'] . ' $</td>
                        <td>' . $pttt . ' </td>
                        <td>' . $ttdh . '</td>
                        <td>' . $bill['ngaydathang'] . '</td>
                        <td><a href="#"><input type="button" class="btn"  value="Sửa"></a><a href="' . $xoabill . '"><input type="button" class="btn" value="Xóa"></a></td>
                    </tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>