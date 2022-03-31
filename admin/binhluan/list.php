<div class="small-container">
    <div class="column">
        <div class="col-header title">
            <h2>DANH SÁCH BÌNH LUẬN</h2>
        </div>
        <div class="col-content">
            <form action="#" method="POST">

                <div class="add-table">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Nội dung</th>
                            <th>IDuser</th>
                            <th>IDpro</th>
                            <th>Ngày bình luận</th>
                            <th>Option</th>
                        </tr>
                        <?php
                        foreach ($listbinhluan as $binhluan) {
                            extract($binhluan);
                            $xoabl = "indexadmin.php?act=xoabl&id=" . $id;
                            echo '<tr>
                        <td>' . $id . '</td>
                        <td>' . $username . '</td>
                        <td>' . $noidung . '</td>
                        <td>' . $iduser . '</td>
                        <td>' . $idpro . '</td>
                        <td>' . $ngaybinhluan . '</td>
                        <td><a href="' . $xoabl . '"><input type="button" class="btn" value="Xóa"></a></td>
                    </tr>';
                        }
                        ?>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>