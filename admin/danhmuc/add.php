<div class="small-container">
    <div class="">
        <div class="col-header title">
            <h2>THÊM MỚI LOẠI HÀNG HÓA</h2>
        </div>
        <div class="col-content">
            <form action="indexadmin.php?act=adddm" method="POST">
                <div class="form-col">
                    <h3>Mã loại</h3>
                    <input type="text" name="maloai" disabled placeholder="Auto number">
                </div>
                <div class="form-col">
                    <h3>Tên loại</h3>
                    <input type="text" name="tenloai">
                </div>
                <div class="">
                    <input type="submit" name="themmoi" value="Thêm mới" class="btn">
                    <input type="reset" value="Nhập lại" class="btn">
                    <a href="indexadmin.php?act=listdm"><input type="button" class="btn" value="Danh sách"></a>
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != ""))
                    echo $thongbao;
                ?>
            </form>
        </div>
    </div>

</div>