<div class="main">
    <?php
    include("danhmuc/title.php")
    ?>
    <div class="table-container">

    
        <div class="sanpham">
        <h1>Danh sách bình luận</h1>
        </div>
        <!-- <form action="index.php?act=dsbl" method="post">
                <div class="input-group1">
                    <input type="search" class="form-control rounded" name="tukhoa" placeholder="Nhập từ khóa"
                        aria-label="Search" aria-describedby="search-addon" />
                    <select name="iddm" class="form-select " aria-label="Default select example">
                        <option value="0" selected>Tất cả</option>
                       
                      
                    </select>
                    <input type="submit" name="listok" class="btn btn-outline-primary" value="Tìm kiếm">
                </div>
            </form> -->
        <form action="index.php?act=listsp" method="POST">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        
                                <th scope="col">STT</th>
                                <th scope="col">User</th>
                                <th scope="col">Nội dung</th>
                                <th scope="col">Ngày bình luận</th>
                                <th scope="col">Thao tác</th>
                        
                    </tr>
                </thead>

                <tbody>

                <?php
                            foreach ($listcmt as $key => $cmt):
                                extract($cmt);
                                ?>
                                <tr>
                                    <td>
                                        <?= $idbl?>
                                    </td>
                                    <td>
                                        <?= $user ?>
                                    </td>
                                    <td>
                                        <?= $noidung ?>
                                    </td>
                                    <td>
                                        <?= $ngaybinhluan ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="index.php?act=suacmt&id=<?= $idbl ?>">Sửa</a>
                                        <a class="btn btn-danger" href="index.php?act=xoacmt&id=<?= $idbl ?>">Xóa</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                </tbody>
            </table>
        </form>
        <!-- <div class="back">
            <a href="index.php?act=addsp">
                <i class='bx bx-arrow-back'></i>
            </a>
        </div> -->

        
    </div>
</div>