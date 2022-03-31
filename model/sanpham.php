<?php

function insert_sanpham($tensp, $giasp, $anhsp, $mota, $iddm)
{
    $sql = "insert into sanpham(ten_sanpham,gia_sanpham,img,mota,id_danhmuc) values('$tensp','$giasp','$anhsp','$mota','$iddm')";
    pdo_execute($sql);
}

function delete_sanpham($id)
{
    $sql = "delete from sanpham where id=" . $id;
    pdo_execute($sql);
}

function loadAll_sanpham_top10()
{
    $sql = "select * from sanpham where 1 order by view desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadAll_sanpham_home()
{
    $sql = "select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadAll_sanpham($keyw = "", $iddm = 0)
{
    $sql = "select * from sanpham where 1";
    if ($keyw != "") {
        $sql .= " and ten_sanpham like '%" . $keyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and id_danhmuc = '" . $iddm . "'";
    }
    $sql .= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function load_ten_dm($iddm)
{
    if ($iddm > 0) {
        $sql = "select * from danhmuc where id=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $ten_danhmuc;
    } else {
        return "";
    }
}

function loadOne_sanpham($id)
{
    $sql = "select * from sanpham where id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}

function load_sanpham_cungloai($id, $id_danhmuc)
{
    $sql = "select * from sanpham where id_danhmuc='" . $id_danhmuc . "' AND id <>" . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function update_sanpham($tensp, $giasp, $anhsp, $mota, $iddm, $id)
{
    if ($anhsp != "") {
        $sql = "update sanpham set ten_sanpham='" . $tensp . "',gia_sanpham='" . $giasp . "',img='" . $anhsp . "',mota='" . $mota . "',id_danhmuc='" . $iddm . "' where id=" . $id;
    } else {
        $sql = "update sanpham set ten_sanpham='" . $tensp . "',gia_sanpham='" . $giasp . "',mota='" . $mota . "',id_danhmuc='" . $iddm . "' where id=" . $id;
    }
    pdo_execute($sql);
}
