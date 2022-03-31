<div class="small-container">
    <div class="column">
        <div class="col-header title">
            <h2>DANH SÁCH LOẠI HÀNG</h2>
        </div>
        <div class="col-content">
            <form action="#" method="POST">
                <div class="add-table">
                    <table>
                        <tr>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th>Option</th>
                        </tr>
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            $suadm = "indexadmin.php?act=suadm&id=" . $id;
                            $xoadm = "indexadmin.php?act=xoadm&id=" . $id;
                            echo '<tr>
                        <td>' . $id . '</td>
                        <td>' . $ten_danhmuc . '</td>
                        <td>
                        <a href="' . $suadm . '">
                        <input type="button" value="Sửa" class="btn">
                        </a>
                        <a href="' . $xoadm . '">
                        <input type="button" value="Xóa" class="btn">
                        </a>
                        </td>
                    </tr>';
                        }
                        ?>
                    </table>
                </div>
                <div class="">
                    <a href="indexadmin.php?act=adddm"><input type="button" class="btn" value="Nhập thêm"></a>
                </div>
            </form>
        </div>
    </div>
</div>