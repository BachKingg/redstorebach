<?php

function insert_danhmuc($tenloai) {
    $sql = "insert into danhmuc(ten_danhmuc) values('$tenloai')";
    pdo_execute($sql);
}

function delete_danhmuc($id) {
    $sql = "delete from danhmuc where id=" . $id;
    pdo_execute($sql);
}

function loadAll_danhmuc() {
    $sql = "select * from danhmuc order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function loadOne_danhmuc($id) {
    $sql = "select * from danhmuc where id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id, $tenloai) {
    $sql = "update danhmuc set ten_danhmuc='" . $tenloai . "' where id=" . $id;
    pdo_execute($sql);
}
?>
   