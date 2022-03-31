<?php

include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/cart.php";

include 'header.php';
// Controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        
        /* Controller cho danhmuc */
        case 'adddm':
            // Kiểm tra xem ng dùng có click vào nút add hay ko
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc = loadAll_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadAll_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadOne_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadAll_danhmuc();
            include "danhmuc/list.php";
            break;

        /* Controller cho sanpham */
        case 'addsp':
            // Kiểm tra xem ng dùng có click vào nút add hay ko

            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $anhsp = $_FILES['anhsp']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["anhsp"]["name"]);
                if (move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file)) {
                    // echo "Ảnh này " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " đã được upload.";
                } else {
                    // echo "Xin lỗi, đã xảy ra lỗi khi tải tệp của bạn lên.";
                }
                insert_sanpham($tensp, $giasp, $anhsp, $mota, $iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadAll_danhmuc();
            include "sanpham/add.php";
            break;
        case 'listsp':
            if (isset($_POST['listloc']) && ($_POST['listloc'])) {
                $keyw = $_POST['keyw'];
                $iddm = $_POST['iddm'];
            } else {
                $keyw = '';
                $iddm = 0;
            }

            $listdanhmuc = loadAll_danhmuc();
            $listsanpham = loadAll_sanpham($keyw, $iddm);
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadAll_sanpham();
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadOne_sanpham($_GET['id']);
            }
            $listdanhmuc = loadAll_danhmuc();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $anhsp = $_FILES['anhsp']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["anhsp"]["name"]);
                if (move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file)) {
                    // echo "Ảnh này " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " đã được upload.";
                } else {
                    // echo "Xin lỗi, đã xảy ra lỗi khi tải tệp của bạn lên.";
                }

                update_sanpham($tensp, $giasp, $anhsp, $mota, $iddm, $id);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadAll_danhmuc();
            $listsanpham = loadAll_sanpham();
            include "sanpham/list.php";
            break;
            
        /* Controller cho taikhoan */
        case 'dskh':
            $listtaikhoan = loadAll_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadAll_taikhoan();
            include "taikhoan/list.php";
            break;
            
        /* Controller cho bill */
        case 'listbill':
            $listbill = loadAll_bill(0);
            include "bill/listbill.php";
            break;
        case 'xoabill':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_bill($_GET['id']);
            }
            $listbill = loadAll_bill(0);
            include "bill/listbill.php";
            break;
            
        /* Controller cho binhluan */
        case 'dsbl':
            $listbinhluan = loadAll_binhluan(0);
            include "binhluan/list.php";
            break;
        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            $listbinhluan = loadAll_binhluan(0);
            include "binhluan/list.php";
            break;
            
            /* Controller cho Thong ke & Bieu do*/
        case 'thongke':
            $listthongke = loadAll_thongke();
            include "thongke/list.php";
            break;
        case 'bieudo':
            $listthongke = loadAll_thongke();
            include "thongke/bieudo.php";
            break;
        default:
            include 'home.php';
            break;
    }
} else {
    include 'home.php';
}

include 'footer.php';

    