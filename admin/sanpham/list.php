<div class="small-container">
    <div class="column">
        <div class="col-header title">
            <h2>DANH SÁCH LOẠI HÀNG</h2>
        </div>
        <div class="col-content">
            <form action="#" method="POST">
                <div class="">
                    <form action="indexadmin.php?act=listsp" method="post">
                        <input type="text" class="form-col-four" name="keyw">
                        <select name="iddm">
                            <option value="0" selected>Tất cả</option>
                            <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="' . $id . '">' . $ten_danhmuc . '</option>';
                            }
                            ?>
                        </select>
                        <input type="submit" name="listloc" class="btn" value="Lọc">
                    </form>
                    <div class="add-table">

                        <table>
                            <tr>
                                <th>MÃ LOẠI</th>
                                <th>TÊN SẢN PHẨM</th>
                                <th>ẢNH</th>
                                <th>GIÁ</th>
                                <th>LƯỢT VIEW</th>
                                <th>Option</th>
                            </tr>
                            <?php
                            foreach ($listsanpham as $sanpham) {
                                extract($sanpham);
                                $suasp = "indexadmin.php?act=suasp&id=" . $id_sanpham;
                                $xoasp = "indexadmin.php?act=xoasp&id=" . $id_sanpham;
                                $hinhpath = "../upload/" . $img;
                                if (is_file($hinhpath)) {
                                    $hinh = "<img src='" . $hinhpath . "' height='80'>";
                                } else {
                                    $hinh = "Không có ảnh";
                                }
                                echo '<tr>
                                        <td>' . $id_danhmuc . '</td>
                                        <td>' . $ten_sanpham . '</td>
                                        <td>' . $hinh . '</td>
                                        <td>' . $gia_sanpham . '</td>
                                        <td>' . $view . '</td>
                                        <td>
                                        <a href="' . $suasp . '">
                                        <input type="button" class="btn" value="Sửa">
                                        </a>
                                        <a href="' . $xoasp . '">
                                        <input type="button" class="btn" value="Xóa">
                                        </a>
                                        </td>
                                    </tr>';
                            }
                            ?>
                        </table>
                    </div>
                    <div class="">
                        <a href="indexadmin.php?act=addsp"><input type="button" class="btn" value="Nhập thêm"></a>
                    </div>
            </form>
        </div>
    </div>
</div>