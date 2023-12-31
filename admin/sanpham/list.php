<div class="main">
    <?php
    include("danhmuc/title.php")
    ?>
    <div class="table-container">

    
        <div class="sanpham">
        <h1>Danh sách sản phẩm</h1>
        </div>
        <form action="index.php?act=listsp" method="post">
                <div class="input-group1">
                    <input type="search" class="form-control rounded" name="tukhoa" placeholder="Nhập từ khóa"
                        aria-label="Search" aria-describedby="search-addon" />
                    <select name="iddm" class="form-select " aria-label="Default select example">
                        <option value="0" selected>Tất cả</option>
                        <?php
                        foreach ($listdanhmuc as $danhmuc):
                            extract($danhmuc);
                            ?>
                            <option value="<?= $id ?>">
                                <?= $name ?>
                            </option>
                        <?php endforeach ?>
                        ?>
                    </select>
                    <input type="submit" name="listok" class="btn btn-outline-primary" value="Tìm kiếm">
                </div>
            </form>
        <form action="index.php?act=listsp" method="POST">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Giá</th>
                        <th>Lượt xem</th>
                        <th>Mô tả</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    foreach ($listsanpham as $sanpham) :
                        extract($sanpham);

                        $hinhPath = "../upload/" . $img;
                        if (is_file($hinhPath)) {
                            $hinh = '<img src="' . $hinhPath . '" height="80px">';
                        } else {
                            $hinh = "Không có hình";
                        }

                    ?>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>
                                <?= $id ?>
                            </td>
                            <td>
                                <?= $name ?>
                            </td>
                            <td>
                                <?= $hinh ?>
                            </td>
                            <td>
                                <?= number_format($price)   ?>VND
                            </td>
                            <td>
                                <?= $luotxem ?>
                            </td>
                            <td>
                                <?= $mota ?>
                            </td>

                            <div class="thaotac">
                                <td>

                                    <a class="btn1" href="index.php?act=suasp&id=<?= $id ?>"><i class='bx bxs-edit'></i></a>
                                    <a class="btn1" href="index.php?act=xoasp&id=<?= $id ?>"><i class='bx bx-trash'></i></a>

                                </td>
                            </div>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </form>
        <div class="back">
            <a href="index.php?act=addsp">
                <i class='bx bx-arrow-back'></i>
            </a>
        </div>

        <div class="thongbao">
            <?php
            if (isset($thongbao) && ($thongbao != ''))
                echo $thongbao;
            ?>
        </div>
    </div>
</div>