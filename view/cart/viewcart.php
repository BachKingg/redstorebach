<div class="container">
    <div class=" cart">
        <h2 class="title">GIỎ HÀNG</h2>
        <div class="">
            <table>
                <?php
                viewcart(1);
                ?>
                <!--                    <tr>
                        <th></th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                    </tr>-->
            </table>
        </div>
    </div>
    <div class="">
        <a href="index.php?act=sanpham"><input type="button" class="btn" value="MUA THÊM"></a>
        <a href="index.php?act=bill"><input type="button" class="btn" value="TIẾP TỤC ĐẶT HÀNG"></a>
        <a href="index.php?act=delcart"><input type="button" class="btn" value="XÓA GIỎ HÀNG"></a>
    </div>
</div>