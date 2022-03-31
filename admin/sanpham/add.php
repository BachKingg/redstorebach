<div class="small-container">
    <div class="column">
        <div class="col-header title">
            <h2>THÊM MỚI SẢN PHẨM</h2>
        </div>
        <div class="col-content">
            <form action="indexadmin.php?act=addsp" method="POST" enctype="multipart/form-data">
                <div class="form-col">
                    <h3>Danh mục</h3>
                    <select name="iddm">
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="' . $id . '">' . $ten_danhmuc . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <br>
                <div class="form-col">
                    <h3>Tên sản phẩm </h3>
                    <input type="text" name="tensp">
                </div>
                <div class="form-col">
                    <h3>Giá sản phẩm</h3>
                    <input type="text" name="giasp">
                </div>
                <div class="">
                    <h3>Ảnh sản phẩm </h3>
                    <input type="file" name="anhsp" class="btn">
                </div>
                <div class="form-col">
                    <h3>Mô tả sản phẩm</h3>
                    <textarea rows="5" cols="132" name="mota"></textarea>
                </div>
                <div class="">
                    <input type="submit" name="themmoi" class="btn" value="Thêm mới">
                    <input type="reset" class="btn" value="Nhập lại">
                    <a href="indexadmin.php?act=listsp"><input type="button" class="btn" value="Danh sách"></a>
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != ""))
                    echo $thongbao;
                ?>
            </form>
        </div>
    </div>
</div>