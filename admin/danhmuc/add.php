<div class="main">
    <?php
    include ("danhmuc/title.php")
    ?>
    <div class="con">
        <div class="adddm">
        <h1>THÊM DANH MỤC</h1>
        </div>
        <form action="index.php?act=adddm" method="POST">
            <div class="form-group">
                <label for="name">Mã loại</label>
                <input type="text" id="maloai" name="maloai" placeholder="Nhập vào mã loại">
            </div>
            <div class="form-group">
                <label for="name">Tên danh mục</label>
                <input type="text" id="tenloai" name="tenloai" placeholder="Nhập vào tên">
            </div>

            <div class="form-group2">
                <input type="submit" name="themmoi" value="Thêm mới">
                <!-- <input type="submit" value="Nhập lại"> -->
                <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
            </div>
            <div class="thongbaodm">
            <?php
            if (isset($thongbao) && ($thongbao != ''))
                echo $thongbao;
            ?>
            </div>
        </form>
    </div>
</div>