<div class="main">
    <?php
    include("danhmuc/title.php")
    ?>
    
    <div class="con1">
        <div class="h1">
            <h1>THÊM SẢN PHẨM</h1>
        </div>
        <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
            <div class="form-group1">
                <label for="maloai">Mã loại</label>
                <input type="text" id="maloai" name="maloai" placeholder="Nhập vào mã loại">
            </div>

            <div class="form-group1">
                <label for="tensp">Tên sản phẩm</label>
                <input type="text" id="tensp" name="tensp" placeholder="Nhập vào tên sản phẩm">
            </div>

            <div class="form-group1">
                <label for="giasp">Giá</label>
                <input type="text" id="giasp" name="giasp" placeholder="Nhập Giá">
            </div>

            <div class="form-group1">
                <div class="file-input-container">
                    <label for="hinh">Hình ảnh</label>
                    <label for="hinh" class="custom-file-input">Choose File</label>
                    <input type="file" id="hinh" name="hinh">
                </div>
            </div>

            <div class="form-group1">
                <label for="danhmuc">Danh mục</label>
                <select name="iddm" class="form-select " aria-label="default select example">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) :
                        extract($danhmuc);
                    ?>
                        <option value="<?= $id ?>">
                            <?= $name ?>
                        </option>
                    <?php endforeach ?>
                    ?>
                </select>
            </div>

            <div class="form-group1">
                <label for="mota">Mô tả</label>
                <textarea class="mota" id="mota" name="mota" placeholder="Nhập mô tả" required name="" id="" cols="20" rows="5">
          </textarea>
            </div>

            <div class="form-group1">
                <input type="submit" name="themmoi" value="Thêm mới">
                <!-- <input type="submit" value="Nhập lại"> -->
                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ''))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>