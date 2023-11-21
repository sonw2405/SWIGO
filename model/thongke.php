<?php
function loadall_thongke()
{
    $sql = "SELECT danhmuc.id as madm, danhmuc.name as tendm, COUNT(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, AVG (sanpham.price) as trungbinh FROM sanpham LEFT JOIN danhmuc ON danhmuc.id = sanpham.iddm GROUP BY danhmuc.id ORDER BY danhmuc.id desc";
    $list = pdo_query($sql);
    return $list;
}
?>