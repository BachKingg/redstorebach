<div class="small-container">
    <div class="column">
        <div class="col-header title">
            <h2>DANH SÁCH THỐNG KÊ</h2>
        </div>
        <div class="col-content">
            <form action="#" method="POST">

                <div class="add-table">
                    <table>
                        <tr>
                            <th>MÃ DANH MỤC</th>
                            <th>TÊN DANH MỤC</th>
                            <th>SỐ LOẠI</th>
                            <th>GIÁ CAO NHẤT</th>
                            <th>GIÁ THẤP NHẤT</th>
                            <th>GIÁ TRUNG BÌNH</th>
                        </tr>
                        <?php
                        foreach ($listthongke as $thongke) {
                            extract($thongke);
                            echo '<tr>
                        <td>' . $madm . '</td>
                        <td>' . $tendm . '</td>
                        <td>' . $countsp . '</td>
                        <td>' . $maxprice . '</td>
                        <td>' . $minprice . '</td>
                        <td>' . $avgprice . '</td>
                    </tr>';
                        }
                        ?>
                    </table>
                </div>
                <div class="">
                    <a href="indexadmin.php?act=bieudo">
                        <input type="button" class="btn" value="Xem biểu đồ">
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>