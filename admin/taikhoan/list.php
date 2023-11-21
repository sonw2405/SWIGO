<div class="main">
    <?php
    include("danhmuc/title.php")
    ?>
    <div class="table-container">

        <div class="sanpham">
            <h1>Danh sách khấch hàng</h1>
        </div>

        <form action="index.php?act=dskh" method="POST">
            <table>
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên đăng nhập</th>
                        <th scope="col">Mật khẩu</th>
                        <th scope="col">Email</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Phân cấp</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>

                <tbody>

                <?php
                            foreach ($listtaikhoan as $key => $taikhoan):
                                extract($taikhoan);
                                ?>
                                <tr>
                                    <td>
                                        <?= $key + 1 ?>
                                    </td>
                                    <td>
                                        <?= $user ?>
                                    </td>
                                    <td>
                                        <?= $pass ?>
                                    </td>
                                    <td>
                                        <?= $email ?>
                                    </td>
                                    <td>
                                        <?= $address ?>
                                    </td>
                                    <td>
                                        <?= $tel ?>
                                    </td>
                                    <td>
                                        <?= $role ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="index.php?act=suatk&id=<?= $id ?>">Sửa</a>
                                        <a class="btn btn-danger" href="index.php?act=xoatk&id=<?= $id ?>">Xóa</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                </tbody>
            </table>
        </form>
        
    </div>
</div>