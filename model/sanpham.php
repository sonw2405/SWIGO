<?php

function insert_sanpham($tensp, $giasp, $mota, $filename, $iddm)
{
    $sql = "INSERT INTO sanpham(name,price, img, mota, iddm ) VALUES ('$tensp', '$giasp', '$mota', '$filename', '$iddm')";
    pdo_execute($sql);
}

function delete_sanpham($id)
{
    $sql = "DELETE FROM sanpham WHERE id= '$id'";
    pdo_query($sql);
}

function loadAll_sanpham_home()
{
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id DESC LIMIT 0,9";
    $listsp = pdo_query($sql);
    return $listsp;
}

function loadAll_sanpham_top10()
{
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY luotxem DESC LIMIT 0,10";
    $listsp = pdo_query($sql);
    return $listsp;
}

function loadAll_sanpham($tukhoa = "", $iddm = 0)
{
    $sql = "SELECT * FROM sanpham WHERE 1";

    if ($tukhoa != "") {
        $sql .= " AND name LIKE '%$tukhoa%'";
    }

    if ($iddm > 0) {
        $sql .= " AND iddm = '$iddm'";
    }

    $sql .= " ORDER BY id DESC";

    $listsp = pdo_query($sql);
    return $listsp;
}


function loadOne_sanpham($id)
{
    $sql = "SELECT * FROM sanpham WHERE id = '$id'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function load_ten_dm($iddm)
{
    if ($iddm > 0) {
        $sql = "SELECT * FROM danhmuc WHERE id = '$iddm'";
        $dm = pdo_query_one($sql);
        extract($dm);
    } else {
        return "";
    }
}

function loadOne_sanpham_cungloai($id, $iddm)
{
    $sql = "SELECT * FROM sanpham WHERE iddm = '$iddm' AND id <> '$id'"; // where khác <>
    $listsp = pdo_query($sql);
    return $listsp;
}

function update_sanpham($id, $tensp, $giasp, $filename, $mota, $iddm)
{
    if ($filename != "") {
        $sql = "UPDATE sanpham SET name='$tensp',price='$giasp',img='$filename',mota='$mota',iddm='$iddm' WHERE id = '$id'";
    } else {
        $sql = "UPDATE sanpham SET name='$tensp',price='$giasp',mota='$mota',iddm='$iddm' WHERE id = '$id'";
    }
    pdo_execute($sql);
}





?>