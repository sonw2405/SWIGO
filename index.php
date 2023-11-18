<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "global.php";

$spnew = loadAll_sanpham_home();

include "view/header.php";
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {

    $act = $_GET['act'];
    switch ($act) {
        case "sanpham":
            if (isset($_POST['kyw']) && $_POST['kyw'] != "") {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = " ";
            }
            if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadAll_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
            
        case "lienhe":
            include "view/lienhe.php";
            break;

            default:
                include "view/home.php";
                break;
    }

}else{
    include "view/home.php";
}

include "view/footer.php";
?>