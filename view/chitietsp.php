<div class="page-content bg-white">
    <!-- Banner  -->
    <div class="dz-bnr-inr style-1 text-center bg-parallax" style="background-image: url(&quot;assets/images/banner/bnr1.jpg&quot;); background-size: cover; background-position: center 2px;">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Chi tiết sản phẩm</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chi tiết sản phẩm</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Product Detail Section -->
    <section class="content-inner-1 overflow-hidden">
        <div class="container">
            <div class="row product-detail">
                <?php
                extract($onesp);
                ?>
                <div class="col-lg-4 col-md-5">
                    <div class="detail-media m-b30">
                        <?php
                        $img = $img_path . $img;
                        echo '<img src="' . $img . '" alt="/">';

                        ?>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="detail-info">
                        <span class="badge">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="16" height="16" stroke="#0F8A65"></rect>
                                <circle cx="8.5" cy="8.5" r="5.5" fill="#0F8A65"></circle>
                            </svg>
                            Pure veg
                        </span>
                        <div class="dz-head">
                            <h2 class="title"><?= $name ?></h2>


                            <!-- đánh giá -->
                            <div class="rating">
                                <i class="fa-solid fa-star"></i> <span><strong class="text-dark">4.5</strong> -
                                    20 Đánh giá</span>
                            </div>
                        </div>
                        <?php

                        echo '<p class="text">' . $mota . '</p>';
                        ?>
                        <ul class="detail-list">
                            

                            <li>Giá<span class="text-primary m-t5"><?= number_format($price)?> VND</span></li>
                            
                            <li>Số lượng
										<div class="btn-quantity style-1 m-t5">
											<div class="input-group bootstrap-touchspin"><span
													class="input-group-addon bootstrap-touchspin-prefix"
													style="display: none;"></span><input id="demo_vertical2" type="text"
													value="1" name="demo_vertical2" class="form-control"
													style="display: block;"><span
													class="input-group-addon bootstrap-touchspin-postfix"
													style="display: none;"></span><span
													class="input-group-btn-vertical"><button
														class="btn btn-default bootstrap-touchspin-up" type="button"><i
															class="ti-plus"></i></button><button
														class="btn btn-default bootstrap-touchspin-down"
														type="button"><i class="ti-minus"></i></button></span></div>
										</div>
									</li>
                        </ul>
                        <h6 class="title">Thêm vào</h6>
                        <ul class="add-product">
                            <li>
                                <div class="mini-modal">
                                    <div class="dz-media">
                                        <img src="assets/images/modal/mini/pic1.jpg" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <p class="title">Khoai tây chiên</p>
                                        <div class="form-check search-content">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="mini-modal">
                                    <div class="dz-media">
                                        <img src="assets/images/modal/mini/pic2.jpg" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <p class="title">Phô mai thêm</p>
                                        <div class="form-check search-content">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="mini-modal">
                                    <div class="dz-media">
                                        <img src="assets/images/modal/mini/pic3.jpg" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <p class="title">Coca Cola</p>
                                        <div class="form-check search-content">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="mini-modal">
                                    <div class="dz-media">
                                        <img src="assets/images/modal/mini/pic4.jpg" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <p class="title">Choco Lava</p>
                                        <div class="form-check search-content">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="d-lg-flex justify-content-between">
                            <ul class="modal-btn-group">
                                <li><a href="shop-cart.html" class="btn btn-primary btn-hover-1"><span>Thêm vào giỏ hàng <i class="flaticon-shopping-bag-1 m-l10"></i></span></a></li>
                                <li><a href="shop-checkout.html" class="btn btn-outline-secondary btn-hover-1"><span>Mua ngay <i class="flaticon-shopping-cart m-l10"></i></span></a></li>
                            </ul>
                            <ul class="avatar-list avatar-list-stacked">
                                <li class="avatar"><img src="assets/images/testimonial/small/pic1.jpg" alt="">
                                </li>
                                <li class="avatar"><img src="assets/images/testimonial/small/pic2.jpg" alt="">
                                </li>
                                <li class="avatar"><img src="assets/images/testimonial/small/pic3.jpg" alt="">
                                </li>
                                <li class="avatar"><img src="assets/images/testimonial/small/pic4.jpg" alt="">
                                </li>
                                <li class="avatar"><img src="assets/images/testimonial/small/pic5.jpg" alt="">
                                </li>
                                <li class="avatar"><span>150+</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="content-inner pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs tabs-style-1" role="tablist">

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" href="#graphic-design-1" aria-selected="false" tabindex="-1" role="tab">
                                <i class="icon-image"></i>
                                <span class="d-none d-md-inline-block m-l10">Thông tin thêm</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" href="#developement-1" aria-selected="false" tabindex="-1" role="tab">
                                <i class="icon-settings"></i>
                                <span class="d-none d-md-inline-block m-l10">Bình luận về sản phẩm</span>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content">

                        <div id="graphic-design-1" class="tab-pane" role="tabpanel">
                            <table class="table-bordered check-tbl">
                                <tbody>
                                    <tr><?php
                                        echo '<td>' . $name . '</td>';
                                        ?>
                                        <td>Small, Medium &amp; Large</td>
                                    </tr>
                                    <tr>
                                        <td>Toppings</td>
                                        <td>Onion, Tomato, Olives</td>
                                    </tr>
                                    <tr>
                                        <td>Đánh giá</td>
                                        <td>
                                            <span class="rating-bx">
                                                <i class="fas fa-star text-secondary"></i>
                                                <i class="fas fa-star text-secondary"></i>
                                                <i class="fas fa-star text-secondary"></i>
                                                <i class="fas fa-star text-secondary"></i>
                                                <i class="far fa-star text-secondary"></i>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Chi phí vận chuyển</td>
                                        <td>Miễn phí vận chuyển</td>
                                    </tr>
                                    <tr>
                                        <td>Bô sung thêm </td>
                                        <td>Coca, Phô mai, Choco lava</td>
                                    </tr>
                                    <tr>
                                        <td>Thời gian giao hàng</td>
                                        <td>30 phút</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="developement-1" class="tab-pane" role="tabpanel">
                            <div class="comments-area" id="comments">
                                <!-- bình luận -->
                                <ul class="comment-list">
                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="comment-author vcard">
                                                <img class="avatar photo" src="assets/images/testimonial/mini/pic1.jpg" alt="/">
                                                <cite class="fn">Monsur Rahman Lito</cite>
                                            </div>
                                            <div class="star-rating" data-rating="2">
                                                <i class="fas fa-star text-secondary"></i>
                                                <i class="fas fa-star text-secondary"></i>
                                                <i class="far fa-star text-secondary"></i>
                                                <i class="far fa-star text-secondary"></i>
                                                <i class="far fa-star text-secondary"></i>
                                            </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s, when an unknown printer took a galley
                                                of type and scrambled it to make a type specimen book.</p>
                                        </div>
                                        <!-- list END -->
                                    </li>
                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="comment-author vcard">
                                                <img class="avatar photo" src="assets/images/testimonial/mini/pic2.jpg" alt="/">
                                                <cite class="fn">Jake Johnson</cite>
                                            </div>
                                            <div class="star-rating" data-rating="3">
                                                <i class="fas fa-star text-secondary"></i>
                                                <i class="fas fa-star text-secondary"></i>
                                                <i class="fas fa-star text-secondary"></i>
                                                <i class="far fa-star text-secondary"></i>
                                                <i class="far fa-star text-secondary"></i>
                                            </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s, when an unknown printer took a galley
                                                of type and scrambled it to make a type specimen book.</p>
                                        </div>
                                    </li>
                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="comment-author vcard">
                                                <img class="avatar photo" src="assets/images/testimonial/mini/pic3.jpg" alt="/">
                                                <cite class="fn">John Doe</cite>
                                            </div>
                                            <div class="star-rating" data-rating="4">
                                                <i class="fas fa-star text-secondary"></i>
                                                <i class="fas fa-star text-secondary"></i>
                                                <i class="fas fa-star text-secondary"></i>
                                                <i class="fas fa-star text-secondary"></i>
                                                <i class="far fa-star text-secondary"></i>
                                            </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s, when an unknown printer took a galley
                                                of type and scrambled it to make a type specimen book.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="comment-respond style-1" id="respond">
                                <h3 class="comment-reply-title mb-4" id="reply-title">Thêm một đánh giá</h3>
                                <form class="comment-form" id="commentform" method="post">
                                    <p class="comment-form-author">
                                        <label for="author">Tên <span class="required">*</span></label>
                                        <input type="text" name="dzName" placeholder="Author" id="author">
                                    </p>
                                    <p class="comment-form-email">
                                        <label for="email">Email <span class="required">*</span></label>
                                        <input type="text" placeholder="Email" name="dzEmail" id="email">
                                    </p>
                                    <div class="comment-form-rating d-flex p-lr10">
                                        <label class="pull-left m-r10 m-b20">Đánh giá của bạn</label>
                                        <div class="rating-widget">
                                            <!-- Rating Stars Box -->
                                            <div class="rating-stars">
                                                <ul id="stars">
                                                    <li class="star" title="Poor" data-value="1">
                                                        <i class="fas fa-star fa-fw"></i>
                                                    </li>
                                                    <li class="star" title="Fair" data-value="2">
                                                        <i class="fas fa-star fa-fw"></i>
                                                    </li>
                                                    <li class="star" title="Good" data-value="3">
                                                        <i class="fas fa-star fa-fw"></i>
                                                    </li>
                                                    <li class="star" title="Excellent" data-value="4">
                                                        <i class="fas fa-star fa-fw"></i>
                                                    </li>
                                                    <li class="star" title="WOW!!!" data-value="5">
                                                        <i class="fas fa-star fa-fw"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="comment-form-comment">
                                        <label for="comment">Bình luận</label>
                                        <textarea rows="10" name="comment" placeholder="Type Review Here" id="comment"></textarea>
                                    </p>
                                    <p class="form-submit">
                                        <button type="submit" class="btn btn-primary btn-hover-2" id="submit">Gửi ngay</button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="pagination mt-xl-0 m-t40">
        <div class="img-button-prev btn-prev-long" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-b310d510befe1a8df1"><i class="fa-solid fa-arrow-left"></i></div>
        <div class="img-button-next btn-next-long" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-b310d510befe1a8df1"><i class="fa-solid fa-arrow-right"></i></div>
    </div> -->
</div>
</div>

<!-- Product Detail Section -->

</div>