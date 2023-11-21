<?php
function insert_taikhoan($email, $user, $pass)
{
    $sql = "INSERT INTO taikhoan(user, pass, email) VALUES ('$user', '$pass', '$email')";
    pdo_execute($sql);
}

function delete_taikhoan($id)
{
    $sql = "DELETE FROM taikhoan WHERE id= '$id'";
    pdo_query($sql);
}

function taikhoan_one($user, $pass)
{
    $sql = "SELECT * FROM taikhoan where user = '$user' AND pass = '$pass'";
    $listtk = pdo_query_one($sql);
    return $listtk;
}

function taikhoan_one_admin($id)
{
    $sql = "SELECT * FROM taikhoan where id = '$id'";
    $listtk = pdo_query_one($sql);
    return $listtk;
}


function check_email($email)
{
    $sql = "SELECT * FROM taikhoan where email='$email'";
    $email = pdo_query_one($sql);
    return $email;
}

function update_taikhoan($id, $user, $pass, $email, $address, $tel)
{
    $sql = "UPDATE taikhoan SET user='$user',pass='$pass',email='$email',address='$address',tel='$tel' WHERE id = '$id'";
    pdo_execute($sql);
}

function update_taikhoan_admin($id, $user, $pass, $email, $address, $tel, $role)
{
    $sql = "UPDATE taikhoan SET user='$user',pass='$pass',email='$email',address='$address',tel='$tel',role='$role' WHERE id = '$id'";
    pdo_execute($sql);
}

function loadAll_taikhoan()
{
    $sql = "SELECT * FROM taikhoan ORDER BY id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
?>