<?php
session_start();
include '../../model/pdo.php';
include '../../model/binhluan.php';

$idpro = $_REQUEST['idpro'];
$dsbl = loadAll_binhluan($idpro);
?>
<div class="small-container binhluanbox">
    <div class="row">
        <div class="binhluan">
            <table>
                <?php
                foreach ($dsbl as $bl) {
                    extract($bl);
                    echo '<tr><td>' . $username . '</td>';
                    // echo '<td>' . $iduser . '</td>';
                    echo '<td>' . $noidung . '</td>';
                    echo '<td>' . $ngaybinhluan . '</td></tr>';
                }
                ?>
            </table>
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <input type="text" name="noidung" placeholder="Nhập bình luận">
                <input type="submit" name="guibinhluan" class="btn" value="Gửi bình luận">
            </form>
        </div>
    </div>
    <?php
    if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
        $noidung = $_POST['noidung'];
        $idpro = $_POST['idpro'];
        $iduser = $_SESSION['user']['id_khach'];
        $username = $_SESSION['user']['username'];
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $ngaybinhluan = date("d-m-Y H:i:sa");
        insert_binhluan($noidung, $iduser, $idpro, $username, $ngaybinhluan);
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
    ?>
</div>