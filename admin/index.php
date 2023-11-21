<?php
session_start();
if (!isset($_SESSION['adminUser'])) {
  header('location:login.php');
}
?>
<?php
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/pdo.php";
include "../model/binhluan.php";
include "../model/thongke.php";
include "../model/taikhoan.php";

include "header.php";

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
            //danhmuc
        case "adddm":
            if (isset($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;

        case "listdm":
            $listdanhmuc = loadAll();
            include "danhmuc/list.php";
            break;

        case "xoadm":
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                delete_danhmuc($id);
                $thongbao = "Xóa thành công";
            }
            $listdanhmuc = loadAll();
            include "danhmuc/list.php";
            break;

        case "suadm":
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                $dm = loadOne($id);
            }
            include "danhmuc/update.php";
            break;

        case "updatedm":
            if (isset($_POST['capnhat'])) {
                $id = $_POST["id"];
                $tenloai = $_POST['tenloai'];
                update_danhmuc($id, $tenloai);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadAll();
            include "danhmuc/list.php";
            break;

            //sản phẩm
        case "addsp":
            if (isset($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];

                $filename = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);

                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    echo "Thêm ảnh thành công";
                } else {
                    echo "Không thêm được ảnh";
                }
                insert_sanpham($tensp, $giasp, $filename, $mota, $iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadAll();
            include "sanpham/add.php";
            break;

        case "listsp":
            if (isset($_POST['listok'])) {
                $tukhoa = $_POST['tukhoa'];
                $iddm = $_POST['iddm'];
            } else {
                $tukhoa = "";
                $iddm = 0;
            }
            $listdanhmuc = loadAll();
            $listsanpham = loadAll_sanpham($tukhoa, $iddm);
            include "sanpham/list.php";
            break;

        case "xoasp":
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                delete_sanpham($id);
                $thongbao = "Xóa thành công";
            }
            $listsanpham = loadAll_sanpham("", 0);
            include "sanpham/list.php";
            break;

        case "suasp":
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                $sanpham = loadOne_sanpham($id);
            }
            $listdanhmuc = loadAll();
            include "sanpham/update.php";
            break;

        case "updatesp":
            if (isset($_POST['capnhat'])) {
                $id = $_POST["id"];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];

                $filename = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    echo "Thêm ảnh thành công";
                } else {
                    echo "Không thêm được ảnh";
                }

                update_sanpham($id, $tensp, $giasp, $filename, $mota, $iddm);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadAll();
            $listsanpham = loadAll_sanpham();
            include "sanpham/list.php";
            break;

         // Khách hàng
         case "dskh":
            $listtaikhoan = loadAll_taikhoan();
            include "taikhoan/list.php";
            break;

        case "xoatk":
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                delete_taikhoan($id);
            }
            $listtaikhoan = loadAll_taikhoan();
            include "taikhoan/list.php";
            break;

        case "suatk":
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                $checktaikhoan = taikhoan_one_admin($id);
            }
            include "taikhoan/update.php";
            break;

        case "updatetk":
            if (isset($_POST['capnhat'])) {
                $id = $_POST['id'];
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $role = $_POST['role'];

                update_taikhoan_admin($id, $user, $pass, $email, $address, $tel, $role);
                $thongbao = "Cập nhật thành công";
            }

            $listtaikhoan = loadAll_taikhoan();
            include "taikhoan/list.php";
            break;

         //  Quản lí bình luận
         case "dsbl":
            // $listcmt = ds_binhluan("");
            $listcmt = ds_binhluan_inner();
            include "binhluan/list.php";
            break;
        case "xoacmt":
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                delete_binhluan($id);
            }
            $listcmt = ds_binhluan_inner();
            include "binhluan/list.php";
            break;

        case "suacmt":
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                $checkcmt = binhluan_one($id);
            }
            // $listcmt = ds_binhluan_inner();
            include "binhluan/update.php";
            break;

        case "updatecmt":
            if (isset($_POST['capnhat'])) {
                $id = $_POST['id'];
                $noidung = $_POST['noidung'];
                $ngayupdate = $_POST['ngayupdate'];
                update_binhluan($id, $noidung, $ngayupdate);
                $thongbao = "Cập nhật thành công";
            }
            $listcmt = ds_binhluan_inner();
            include "binhluan/list.php";
            break;
        
          // Thống kê số lượng theo danh mục
          case "thongke":
            $listthongke = loadall_thongke();
            include "thongke/list.php";
            include "bieudo.php";
            break;

        default:
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
