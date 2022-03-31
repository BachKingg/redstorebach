<?php

function insert_taikhoan($email, $user, $pass) {
    $sql = "insert into taikhoan(username,password,email) values('$user','$pass','$email')";
    pdo_execute($sql);
}

function delete_taikhoan($id_khach) {
    $sql = "delete from taikhoan where id_khach=" . $id_khach;
    pdo_execute($sql);
}

function checkuser($user, $pass) {
    $sql = "select * from taikhoan where username='" . $user . "' AND  password='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkemail($email) {
    $sql = "select * from taikhoan where email='" . $email ."'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_taikhoan($id, $user, $pass, $diachi, $phone, $email) {
    $sql = "update taikhoan set username='" . $user . "',password='" . $pass . "',diachi='" . $diachi . "',email='" . $email . "',phone='" . $phone . "' where id_khach=" . $id;
    pdo_execute($sql);
}

function loadAll_taikhoan() {
    $sql = "select * from taikhoan order by id_khach desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
