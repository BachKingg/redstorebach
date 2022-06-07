
<?php
session_start();
ob_start();
include 'model/pdo.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'model/taikhoan.php';
include 'model/cart.php';
include 'view/header.php';
include 'global.php';

// Nguyễn Xuân Bách - PS16780
if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}

$spnew = loadAll_sanpham_home();
$dsdm = loadAll_danhmuc();
$dsview = loadAll_sanpham_top10();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'gioithieu':
            include 'view/gioithieu.php';
            break;
        case 'lienhe':
            include 'view/lienhe.php';
            break;
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadOne_sanpham($id);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id, $id_danhmuc);
                include 'view/sanphamct.php';
            } else {
                include 'view/home.php';
            }
            break;
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadAll_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include 'view/sanpham.php';
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $thongbao = "Đã đăng ký thành công! Vui lòng đăng nhập để tiếp tục.";
            }
            include 'view/taikhoan/dangky.php';
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('Location: index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại.Vui lòng kiểm tra lại hoặc đăng ký!";
                }
            }
            include 'view/taikhoan/dangky.php';
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $phone = $_POST['phone'];
                $id = $_POST['id'];
                update_taikhoan($id, $user, $pass, $diachi, $phone, $email);
                $_SESSION['user'] = checkuser($user, $pass);
                header('Location: index.php?act=edit_taikhoan');
            }
            include 'view/taikhoan/edit_taikhoan.php';
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['password'];
                } else {
                    $thongbao = "Email này không tồn tại!";
                }
            }
            include 'view/taikhoan/quenmk.php';
            break;
        case 'thoat':
            session_unset();
            header('Location: index.php');
            // include 'view/gioithieu.php';
            exit();
        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = $_POST['soluong']; // chỉnh sửa số lượng

                //kiểm tra sp có trong cart hay không

                $fl = 0; //kiem tra san pham co trong gio hang khong

                for ($i = 0; $i < sizeof($_SESSION['mycart']); $i++) {
                    if ($_SESSION['mycart'][$i][1] == $name) {
                        $fl = 1;
                        $soluongnew = $soluong + $_SESSION['mycart'][$i][4];
                        $_SESSION['mycart'][$i][4] = $soluongnew;
                        break;
                    }
                }
                //neu khong trùng sp trong giỏ hàng thì them moi
                if ($fl == 0) {
                    //them moi sp vao gio hang
                    $ttien = (int)$soluong * (int)$price;
                    $spadd = [$id, $name, $img, $price, $soluong, $ttien];
                    array_push($_SESSION['mycart'], $spadd);
                }
            }
            include 'view/cart/viewcart.php';
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('Location: index.php?act=viewcart');
            break;
        case 'viewcart':
            include 'view/cart/viewcart.php';
            break;
        case 'bill':
            include 'view/cart/bill.php';
            break;
        case 'mybill':
            $listbill = loadAll_bill($_SESSION['user']['id_khach']);
            include 'view/cart/mybill.php';
            break;
        case 'billconfirm':
            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {

                if (isset($_SESSION['user'])) {
                    $iduser = $_SESSION['user']['id_khach'];
                } else {
                    $id = 0;
                }

                $name = $_POST['name'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $phone = $_POST['phone'];
                $pttt = $_POST['pttt'];
                date_default_timezone_set("Asia/Ho_Chi_Minh");
                $ngaydathang = date("d-m-Y H:i:sa");
                $tongdonhang = tongdonhang();
                // tạo đơn hàng
                $idbill = insert_bill($iduser, $name, $email, $diachi, $phone, $pttt, $ngaydathang, $tongdonhang);

                // tạo giỏ hàng
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id_khach'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
                }
                // xóa session
                //                insert into cart: $_SESSION['mycart']$ idbill;
                $_SESSION['cart'] = [];
            }
            $bill = loadOne_bill($idbill);
            $billct = loadAll_cart($idbill);
            include 'view/cart/billconfirm.php';
            break;
        default:
            include 'view/home.php';
            break;
    }
} else {
    include 'view/home.php';
}
include 'view/footer.php';
    