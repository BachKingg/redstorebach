<?php

function insert_binhluan($noidung, $iduser, $idpro, $username, $ngaybinhluan)
{
    $sql = "insert into binhluan(noidung,iduser,idpro,username,ngaybinhluan) values('$noidung', '$iduser', '$idpro','$username', '$ngaybinhluan')";
    pdo_execute($sql);
}

function delete_binhluan($id)
{
    $sql = "delete from binhluan where id=" . $id;
    pdo_execute($sql);
}

function loadAll_binhluan($idpro)
{
    $sql = "select * from binhluan where 1 ";
    if ($idpro > 0) {
        $sql .= " and idpro= '" . $idpro . "'";
    }
    $sql .= " order by id desc";

    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
