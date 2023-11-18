<div class="clearfix">
                <ul id="masonry" class="row dlab-gallery-listing gallery">
                    <?php
                    foreach ($spnew as $sp) :
                        extract($sp);
                        $hinh = $img_path . $img;
                    ?>
                        <li class="card-container col-lg-4 col-md-6 m-b30 All drink pizza burger wow fadeInUp" data-wow-delay="0.2s">
                            <div class="dz-img-box style-7">
                                <div class="dz-media">
                                    <img src="<?= $hinh ?>" alt="/">
                                    <div class="dz-meta">
                                        <ul>
                                            <li class="seller">Top Seller</li>
                                            <li class="rating"><i class="fa-solid fa-star"></i> 4.5</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="product-detail.html"><?= $name ?></a></h5>
                                    <p>It is a long established fact that a reader will be distracted by the
                                        readable.</p>
                                    <span class="price"><?= number_format($price) ?>VND</span>
                                </div>
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
      