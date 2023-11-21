<?php
function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan)
{
    $sql = "INSERT INTO binhluan(noidung, iduser, idpro, ngaybinhluan) VALUES ('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}

function ds_binhluan($idpro)
{
    $sql = "SELECT * FROM binhluan where 1";
    if ($idpro > 0)
        $sql .= " AND idpro= '$idpro'";
    $sql .= " ORDER BY id DESC";
    $listbl = pdo_query($sql);
    return $listbl;
}

function ds_binhluan_inner()
{
    $sql = "SELECT taikhoan.id, taikhoan.user, binhluan.iduser,binhluan.id as idbl, binhluan.noidung, binhluan.ngaybinhluan FROM taikhoan INNER JOIN binhluan ON taikhoan.id = binhluan.iduser
    ORDER BY idbl DESC";
    $listbl = pdo_query($sql);
    return $listbl;
}

function ds_binhluan_inner_form($idpro)
{
    $sql = "SELECT taikhoan.id, taikhoan.user, binhluan.iduser,binhluan.id as idbl, binhluan.noidung, binhluan.ngaybinhluan FROM taikhoan INNER JOIN binhluan ON taikhoan.id = binhluan.iduser
    where binhluan.idpro = '$idpro' ORDER BY idbl DESC";
    $listbl = pdo_query($sql);
    return $listbl;
}

function delete_binhluan($id)
{
    $sql = "DELETE FROM binhluan WHERE id= '$id'";
    pdo_query($sql);
}

function binhluan_one($id)
{
    $sql = "SELECT * FROM binhluan where id = '$id'";
    $listcmt = pdo_query_one($sql);
    return $listcmt;
}

function update_binhluan($id, $noidung, $ngayupdate)
{
    $sql = "UPDATE binhluan SET id = '$id', noidung = '$noidung', ngaybinhluan = '$ngayupdate'";
    pdo_execute($sql);
}

?>