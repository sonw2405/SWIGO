<div class="main">
    <?php
    include("danhmuc/title.php")
    ?>

    <?php
    if (is_array($dm)) {
        extract($dm);
    }
    ?>
    <div class="con">
        <h2> UPDATE DANH MỤC</h2>
        <form action="index.php?act=updatedm" method="POST">
            <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>">
            <div class="form-group">
                <label for="name">Mã loại</label>
                <input type="text" id="maloai" name="maloai" value="<?= isset($id) ? $id : '' ?>">
            </div>
            <div class="form-group">
                <label for="name">Tên danh mục</label>
                <input type="text" id="tenloai" name="tenloai" value="<?= isset($name) ? $name : ''; ?>">
            </div>
            <div class="form-group2">
                <input type="submit" name="capnhat" value="Cập nhật">
               
                <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
            </div>

        </form>

    </div>

    <?php
    if (isset($thongbao) && ($thongbao != ''))
        echo $thongbao;
    ?>

</div>