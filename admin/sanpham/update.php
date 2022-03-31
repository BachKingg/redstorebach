<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "Không có ảnh";
}
?>
<div class="small-container">
    <div class="column">
        <div class="col-header title">
            <h2>CẬP NHẬT SẢN PHẨM</h2>
        </div>
        <div class="col-content">
            <form action="indexadmin.php?act=updatesp" method="POST" enctype="multipart/form-data">
                <div class="form-col">
                    <h3>Danh mục</h3>
                    <select name="iddm">
                        <option value="0" selected>Tất cả</option>
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            if ($id_danhmuc == $id) {
                                $s = "selected";
                            } else {
                                $s = "";
                            }
                            echo '<option value="' . $id . '" ' . $s . '>' . $ten_danhmuc . '</option>';
                        }
                        ?>

                    </select>
                </div>
                <br>
                <div class="form-col">
                    <h3>Tên sản phẩm</h3>
                    <input type="text" name="tensp" value="<?= $ten_sanpham ?>">
                </div>
                <div class="form-col">
                    <h3>Giá sản phẩm </h3>
                    <input type="text" name="giasp" value="<?= $gia_sanpham ?>">
                </div>
                <div class="">
                    <h3>Ảnh sản phẩm</h3>
                    <input type="file" name="anhsp" class="btn">
                    
                </div>
                <?= $hinh ?>
                <div class="form-col">
                    <h3>Mô tả sản phẩm</h3>
                    <textarea name="mota" rows="5" cols="132"><?= $mota ?></textarea>
                </div>
                <div class="">
                    <input type="hidden" name="id" value="<?= $id_sanpham ?>">
                    <input type="submit" name="capnhat" class="btn" value="Cập nhật">
                    <input type="reset" class="btn" value="Nhập lại">
                    <a href="indexadmin.php?act=listsp"><input type="button" class="btn" value="Danh sách"></a>
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
            </form>
        </div>
    </div>
</div>