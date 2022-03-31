<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<div class="small-container">
    <div class="column">
        <div class="col-header title">
            <h2>CẬP NHẬT LOẠI HÀNG HÓA</h2>
        </div>
        <div class="col-content">
            <form action="indexadmin.php?act=updatedm" method="POST">
                <div class="form-col">
                    <h3>Mã loại</h3>
                    <input type="text" name="maloai" disabled placeholder="auto number">
                </div>
                <div class="form-col">
                    <h3>Tên loại</h3>
                    <input type="text" name="tenloai" value="<?php if (isset($ten_danhmuc) && ($ten_danhmuc != "")) echo $ten_danhmuc; ?>">
                </div>
                <div class="">
                    <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
                    <input type="submit" class="btn" name="capnhat" value="Cập nhật">
                    <input type="reset" class="btn" value="Nhập lại">
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