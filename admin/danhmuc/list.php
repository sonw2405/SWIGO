<div class="main">
    <?php
    include("danhmuc/title.php")
    ?>
    <div class="table-container">
        <h1>Danh sách danh mục</h1>
        <form action="index.php?act=listdm" method="POST">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên danh mục</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($listdanhmuc as $danhmuc) : ?>

                        <tr>
                            <td>
                                <input type="checkbox" name="" id="">
                            </td>
                            <td>
                                <?php echo $danhmuc['id']; ?>
                            </td>
                            <td>
                                <?php echo $danhmuc['name']; ?>
                            </td>
                            <div class="thaotac">
                                <td>
                                
                                    <a class="btn1" href="index.php?act=suadm&id=<?php echo $danhmuc['id']; ?>"><i class='bx bxs-edit'></i></a>
                                    <a class="btn1" href="index.php?act=xoadm&id=<?php echo $danhmuc['id']; ?>"><i class='bx bx-trash'></i></a>
                                   
                                </td>
                            </div>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </form>
        <div class="back">
            <a href="index.php?act=adddm">
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