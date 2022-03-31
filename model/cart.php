
<?php

function bill_chitiet($listbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    $sltong = 0;

    echo '<tr>
                    <th>Hình</th>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
            </tr>';

    foreach ($listbill as $cart) {
        // $hinh = $img_path . $cart['img'];
        $hinh = $cart['img'];
        $tong += $cart['thanhtien'];
        $sltong +=  $cart['soluong'];

        echo '
            
            <tr>
                <td><img src="' . $hinh . '" height="80px"></td>
                <td>' . $cart['name'] . '</td>
                <td>$' . $cart['price'] . '</td>
                <td>' . $cart['soluong'] . '</td>
                <td>$' . $cart['thanhtien'] . '</td>
            </tr>';
        $i += 1;
    }
    echo '<tr>
                                <th colspan="3">Tổng đơn hàng</th>
                                <th>' . $sltong . '</th>
                                <th>$' . $tong . ' </th>
                            </tr>';
}

function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    $sltong = 0;

    if ($del == 1) {
        $xoasp_th = ' <th>Thao tác</th>';
        $xoasp_td2 = '<td></td>';
    } else {
        $xoasp_th = '';
        $xoasp_td2 = '';
    }
    echo '<tr>
                <th>Hình</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                ' . $xoasp_th . '
            </tr>';
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh =  $cart[2];
        // $hinh = $img_path . $cart[2];

        $ttien = (int)$cart[3] * (int)$cart[4];
        $sltong += $cart[4];
        $tong += $ttien;
        if ($del == 1) {
            $xoasp_td = '<td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a></td>';
        } else {
            $xoasp_td = '';
        }

        echo '
            <tr>
                <td><img src="' . $hinh . '" height="80px"></td>
                <td>' . $cart[1] . '</td>
                <td>$' . $cart[3] . '</td>
                <td>' . $cart[4] . '</td>
                <td>$' . $ttien . ' </td>
                ' . $xoasp_td . '
            </tr> ';
        $i += 1;
    }
    // var_dump($hinh);
    // var_dump($cart[2]);
    // var_dump($_SESSION['mycart']);
    echo
    '<tr>
        <th colspan="3">Tổng đơn hàng</th>
        <th>' . $sltong . '</th>
        <th class="tonghoadon">$' . $tong . '</th>
        <th></th>
    </tr>';
}

function tongdonhang()
{

    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}

function insert_bill($iduser, $name, $email, $diachi, $phone, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "insert into bill(iduser,bill_name,bill_email,bill_address,bill_phone,bill_pttt,ngaydathang,total) values('$iduser','$name', '$email', '$diachi','$phone','$pttt', '$ngaydathang', '$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}

function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "insert into cart(iduser ,idpro ,img,name,price,soluong,thanhtien,idbill ) values('$iduser', '$idpro', '$img', '$name', '$price', '$soluong', '$thanhtien', '$idbill')";
    return pdo_execute($sql);
}

function loadOne_bill($id)
{
    $sql = "select * from bill where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}

function loadAll_cart($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}

function delete_bill($id)
{
    $sql = "delete from bill where id=" . $id;
    pdo_execute($sql);
}
// count số loại

function loadAll_cart_count($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}

//count so luong

function loadAll_cart_count_soluong($idbill)
{
    $sql = "select sum(soluong) AS 'soluongtong' from cart group by idbill having idbill=" . $idbill;
    return pdo_query_one($sql);
}

function loadAll_bill($iduser)
{
    $sql = "select * from bill where 1";
    if ($iduser > 0) {
        $sql .= " AND iduser=" . $iduser;
    }
    $sql .= " order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}

function get_ttdh($n)
{
    switch ($n) {
        case '0': //trạng thái thanh toán
            $tt = "Đơn hàng mới";
            break;
        case '1':
            $tt = "Đang xử lý";
            break;
        case '2':
            $tt = "Đang giao hàng";
            break;
        case '3':
            $tt = "Đã giao hàng";
            break;

        default:
            $tt = "Đơn hàng mới";
            break;
    }
    return $tt;
}

function get_pttt($t)
{
    switch ($t) {
        case '0': //phương thức thanh toán
            $ttt = "Thanh toán khi nhận hàng";
            break;
        case '1':
            $ttt = "Chuyển khoản ngân hàng";
            break;
        case '2':
            $ttt = "Thanh toán qua ví điện tử";
            break;
        default:
            $ttt = "Thanh toán khi nhận hàng";
            break;
    }
    return $ttt;
}

function loadAll_thongke()
{
    $sql = "select danhmuc.id as madm, danhmuc.ten_danhmuc as tendm, count(sanpham.id_sanpham) as countsp, min(sanpham.gia_sanpham) as minprice, max(sanpham.gia_sanpham) as maxprice, avg(sanpham.gia_sanpham) as avgprice";
    $sql .= " from sanpham left join danhmuc on danhmuc.id=sanpham.id_danhmuc";
    $sql .= " group by danhmuc.id order by danhmuc.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
