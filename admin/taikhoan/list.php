<div class="small-container">
    <div class="column">
        <div class="col-header title">
            <h2>DANH SÁCH TÀI KHOẢN</h2>
        </div>
        <div class="col-content">
            <form action="#" method="POST">

                <div class="add-table">
                    <table>
                        <tr>
                            <th>MÃ KHÁCH HÀNG</th>
                            <th>TÊN ĐĂNG NHẬP</th>
                            <th>PASSWORD</th>
                            <th>EMAIL</th>
                            <th>ĐỊA CHỈ</th>
                            <th>ĐIỆN THOẠI</th>
                            <th>VAI TRÒ</th>
                            <th>Option</th>
                        </tr>
                        <?php
                        foreach ($listtaikhoan as $taikhoan) {
                            extract($taikhoan);
                            $xoatk = "indexadmin.php?act=xoatk&id=" . $id_khach;
                            echo '<tr>
                        <td>' . $id_khach . '</td>
                        <td>' . $username . '</td>
                        <td>' . $password . '</td>
                        <td>' . $email . '</td>
                        <td>' . $diachi . '</td>
                        <td>' . $phone . '</td>
                        <td>' . $vaitro . '</td>
                        <td><a href="' . $xoatk . '"><input type="button" class="btn" value="Xóa"></a></td>
                    </tr>';
                        }
                        ?>
                    </table>
                </div>

            </form>
        </div>
    </div>
</div>