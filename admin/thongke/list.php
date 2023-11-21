<div class="main">
<?php
    include("danhmuc/title.php")
    ?>
        <div class="col-123">
            <h1 class="font-weight-bold">DANH SÁCH</h1>
        </div>
    
    
        <div class="col-12">
            <form action="index.php?act=thongke" method="POST">
                <div class="mb-3">
                    <table class="table" border="1">
                        <thead>
                            <tr>
                                <th scope="col">Mã danh mục</th>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Giá cao nhất</th>
                                <th scope="col">Giá thấp nhất</th>
                                <th scope="col">Giá trung bình</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listthongke as $key => $thongke):
                                extract($thongke);
                                ?>
                                <tr>
                                    <td>
                                        <?= $madm ?>
                                    </td>
                                    <td>
                                        <?= $tendm ?>
                                    </td>
                                    <td>
                                        <?= $countsp ?>
                                    </td>
                                    <td> 
                                        <?= number_format($maxprice)," " ?>$
                                    </td>
                                    <td>
                                        <?= number_format($minprice)," " ?>$
                                    </td>
                                    <td>
                                        <?= number_format($trungbinh), " " ?>$
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
   
</div>