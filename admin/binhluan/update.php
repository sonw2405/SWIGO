<div class="main">

    <div class="con1">
        <div class="h1">
            <h1>Sửa bình luận</h1>
        </div>
        <?php
        if (isset($checkcmt) && is_array($checkcmt)) {
            extract($checkcmt);
        }
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ngayupdate = date("Y-m-d H:i:s");
        ?>
        <form action="index.php?act=updatecmt" method="POST">
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="mb-3">
                <p class="text-left" for="">Nội dung</p>
                <input type="text" class="form-control" name="noidung" value="<?= $noidung ?>">
            </div>

            <input type="hidden" name="ngayupdate" value="<?= $ngayupdate ?>">

            <div class="mb-3">
                <input class="btn btn-primary mr-3 text-left" type="submit" name="capnhat" value="CẬP NHẬT" required>
                <div class="back">
            <a href="index.php?act=dsbl">
                <i class='bx bx-arrow-back'></i>
            </a>
        </div>
            </div>
        </form>
    </div>
</div>