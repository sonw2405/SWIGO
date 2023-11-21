<div class="main">
    <?php
    include("danhmuc/title.php")
    ?>

    <?php
    if (isset($sanpham) && is_array($sanpham)) {
        extract($sanpham);
    }
    $hinhPath = "../upload/" . $img;
    if (is_file($hinhPath)) {
        $hinh = '<img src="' . $hinhPath . '" height="80px">';
    } else {
        $hinh = "Không có hình";
    }
    ?>
    <div class="con1">
        <div class="h1">
            <h2>CẬP NHẬT SẢN PHẨM</h2>
        </div>
        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="form-group1">
                <label for="maloai">Mã loại</label>
                <input type="text" id="maloai" name="maloai" placeholder="Nhập vào mã loại" value="<?= $id ?>">
            </div>

            <div class="form-group1">
                <label for="tensp">Tên sản phẩm</label>
                <input type="text" id="tensp" name="tensp" placeholder="Nhập vào tên sản phẩm" value="<?= $name ?>">
            </div>

            <div class="form-group1">
                <label for="giasp">Giá</label>
                <input type="text" id="giasp" name="giasp" placeholder="Nhập Giá" value="<?= $price ?>">
            </div>

            <div class=" form-group1">
                <div class="file-input-container">
                    <label for="hinh">Hình ảnh</label>
                    <label for="hinh" class="custom-file-input">Choose File</label>
                    <?= $hinh ?>
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
                <textarea class="mota" id="mota" name="mota" placeholder="Nhập mô tả" required name="" id="" cols="20" rows="5"><?= $mota ?>
          </textarea>
            </div>

            <div class="form-group1">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                
                <a href="index.php?act=listsp"><input type="button" value="QUAY LẠI"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ''))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>