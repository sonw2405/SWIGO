<div class="main">
    <?php
    include("danhmuc/title.php")
    ?>



    <div class="con1">
        <div class="h1">
            <h1>CẬP NHẬT TÀI KHOẢN</h1>
        </div>
        <?php
    if (isset($checktaikhoan) && is_array($checktaikhoan)) {
        extract($checktaikhoan);
    }
    ?>
        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="form-group1">
                <label for="email">Email</label>
                <input type="text" id="email" name="email"  value="<?= $email ?>">
            </div>

            <div class="form-group1">
                <label for="user">User</label>
                <input type="text" id="user" name="user"  value="<?= $user ?>">
            </div>

            <div class="form-group1">
                <label for="pass">Mật khẩu</label>
                <input type="text" id="pass" name="pass"  value="<?= $pass ?>">
            </div>

            <div class="form-group1">
                <label for="address">Địa chỉ</label>
                <input type="text" id="address" name="address"  value="<?= $pass ?>">
            </div>

            <div class="form-group1">
                <label for="tel">Số điện thoại</label>
                <input type="text" id="tel" name="tel"  value="<?= $tel ?>">
            </div>

            <div class="form-group1">
                <label for="role">Role</label>
                <input type="text" id="role" name="role"  value="<?= $role ?>">
            </div>

            <div class="form-group1">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                
                <a href="index.php?act=dskh"><input type="button" value="QUAY LẠI"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ''))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>