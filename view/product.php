<!-- ======================== Breadcrumb Two Section Start ===================== -->
<section class="breadcrumb border-bottom p-0 d-block section-bg position-relative z-index-1">

    <div class="breadcrumb-two">
        <img src="assets/images/gradients/breadcrumb-gradient-bg.png" alt="" class="bg--gradient">
        <div class="container container-two">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb-two-content">

                        <ul class="breadcrumb-list flx-align gap-2 mb-2">
                            <li class="breadcrumb-list__item font-14 text-body">
                                <a href="?p=home" class="breadcrumb-list__link text-body hover-text-main">Home</a>
                            </li>
                            <li class="breadcrumb-list__item font-14 text-body">
                                <span class="breadcrumb-list__icon font-10"><i class="fas fa-chevron-right"></i></span>
                            </li>
                            <li class="breadcrumb-list__item font-14 text-body">
                                <a href="?p=shop" class="breadcrumb-list__link text-body hover-text-main">Products</a>
                            </li>
                            <li class="breadcrumb-list__item font-14 text-body">
                                <span class="breadcrumb-list__icon font-10"><i class="fas fa-chevron-right"></i></span>
                            </li>
                            <li class="breadcrumb-list__item font-14 text-body">
                                <span class="breadcrumb-list__text"><?= $title ?></span>
                            </li>
                        </ul>

                        <h3 class="breadcrumb-two-content__title mb-3 text-capitalize"><?= $author ?>: <?= $title ?>
                        </h3>

                        <div class="breadcrumb-content flx-align gap-3">
                            <div class="breadcrumb-content__item text-heading fw-500 flx-align gap-2">
                                <span class="text">By <a href="?p=search&q=<?= $author ?>"
                                        class="link text-main fw-600"><?= $author ?></a> </span>
                            </div>
                            <div class="breadcrumb-content__item text-heading fw-500 flx-align gap-2">
                                <span class="icon"><img src="assets/images/icons/cart-icon.svg" alt=""></span>
                                <span class="text">158 sales</span>
                            </div>
                            <div class="breadcrumb-content__item text-heading fw-500 flx-align gap-2">
                                <span class="icon"><img src="assets/images/icons/check-icon.svg" alt=""></span>
                                <span class="text">Recently Updated</span>
                            </div>
                            <div class="breadcrumb-content__item text-heading fw-500 flx-align gap-2">
                                <span class="icon"><img src="assets/images/icons/check-icon.svg" alt=""></span>
                                <span class="text">Well Documented</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container container-two">
        <div class="breadcrumb-tab flx-wrap align-items-start gap-lg-4 gap-2">
            <ul class="nav tab-bordered nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-product-details-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-product-details" type="button" role="tab"
                        aria-controls="pills-product-details" aria-selected="true">Product Details</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-rating-tab" data-bs-toggle="pill" data-bs-target="#pills-rating"
                        type="button" role="tab" aria-controls="pills-rating" aria-selected="false">
                        <span class="d-flex align-items-center gap-1">
                            <span class="star-rating">
                                <span class="star-rating__item font-11"><i class="fas fa-star"></i></span>
                                <span class="star-rating__item font-11"><i class="fas fa-star"></i></span>
                                <span class="star-rating__item font-11"><i class="fas fa-star"></i></span>
                                <span class="star-rating__item font-11"><i class="fas fa-star"></i></span>
                                <span class="star-rating__item font-11"><i class="fas fa-star"></i></span>
                            </span>
                            <span class="star-rating__text text-body"> 5.0</span>
                            <span class="star-rating__text text-body"> (180)</span>
                        </span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-comments-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-comments" type="button" role="tab" aria-controls="pills-comments"
                        aria-selected="false">Comments (50)</button>
                </li>
            </ul>
            <div class="social-share">
                <button type="button" class="social-share__button">
                    <img src="assets/images/icons/share-icon.svg" alt="">
                </button>
                <div class="social-share__icons">
                    <ul class="social-list colorful-style">
                        <li class="social-list__item">
                            <a href="https://www.facebook.com" class="social-list__link text-body flex-center"><i
                                    class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="social-list__item">
                            <a href="https://www.twitter.com" class="social-list__link text-body flex-center"> <i
                                    class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="social-list__item">
                            <a href="https://www.google.com" class="social-list__link text-body flex-center"> <i
                                    class="fab fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- ======================== Breadcrumb Two Section End ===================== -->

<!-- ======================= Product Details Section Start ==================== -->
<div class="product-details mt-32 padding-b-120">
    <div class="container container-two">
        <div class="row gy-4">
            <div class="col-lg-8">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-product-details" role="tabpanel"
                        aria-labelledby="pills-product-details-tab" tabindex="0">
                        <!-- Product Details Content Start -->
                        <div class="product-details">
                            <div class="product-details__thumb">
                                <img src="<?= $img ?>" alt="">
                            </div>
                            <div class="product-details__buttons flx-align justify-content-center gap-3">
                                <a href="?p=whatsapp"
                                    class="btn btn-main d-inline-flex align-items-center gap-2 pill px-sm-5 justify-content-center">Contact
                                    Support
                                    <img src="assets/images/icons/eye-outline.svg" alt="">
                                </a>

                                <a href="#" class="screenshot-btn btn btn-white pill px-sm-5"
                                    data-images='["assets/images/thumbs/product-details.png", "assets/images/thumbs/product-details.png"]'>Screenshot</a>


                            </div>

                            <?= html_entity_decode($description) ?>
                        </div>
                        <!-- Product Details Content End -->
                    </div>
                    <div class="tab-pane fade" id="pills-rating" role="tabpanel" aria-labelledby="pills-rating-tab"
                        tabindex="0">
                        <div class="product-review-wrapper">
                            <div class="product-review">
                                <div class="product-review__top flx-between">
                                    <div class="product-review__rating flx-align">
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-body"> 5.0</span>
                                        </div>
                                        <span class="product-review__reason">For <span
                                                class="product-review__subject">Customer Support</span> </span>
                                    </div>
                                    <div class="product-review__date">
                                        by <a href="#" class="product-review__user text--base">John Doe </a> 2 month ago
                                    </div>
                                </div>
                                <div class="product-review__body">
                                    <p class="product-review__desc">Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Quibusdam itaque vitae ex possimus delectus? Voluptas expedita accusantium
                                        aperiam quo quod dolore dignissimos rerum praesentium deserunt libero recusandae
                                        quisquam est accusamus eos dolorum sit explicabo, sapiente pariatur voluptates
                                        veniam aut veritatis, magnam velit similique! Ex similique magni labore aperiam,
                                        eius quas molestiae accusantium porro eaque esse minus amet doloribus quo odit
                                        illo doloremque.</p>
                                </div>
                            </div>
                            <div class="product-review">
                                <div class="product-review__top flx-between">
                                    <div class="product-review__rating flx-align">
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-body"> 5.0</span>
                                        </div>
                                        <span class="product-review__reason">For <span
                                                class="product-review__subject">Customer Support</span> </span>
                                    </div>
                                    <div class="product-review__date">
                                        by <a href="#" class="product-review__user text--base">John Doe </a> 2 month ago
                                    </div>
                                </div>
                                <div class="product-review__body">
                                    <p class="product-review__desc">Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Quibusdam itaque vitae ex possimus delectus? Voluptas expedita accusantium
                                        aperiam quo quod dolore dignissimos rerum praesentium deserunt libero recusandae
                                        quisquam est accusamus eos dolorum sit explicabo, sapiente pariatur voluptates
                                        veniam aut veritatis, magnam velit similique! Ex similique magni labore aperiam,
                                        eius quas molestiae accusantium porro eaque esse minus amet doloribus quo odit
                                        illo doloremque.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-comments" role="tabpanel" aria-labelledby="pills-comments-tab"
                        tabindex="0">

                        <!-- Comment Start -->
                        <div class="comment mt-64 mb-64">
                            <h5 class="mb-32">2 Comments</h5>
                            <ul class="comment-list">
                                <li class="comment-list__item d-flex align-items-start gap-sm-4 gap-3">
                                    <div class="comment-list__thumb flex-shrink-0">
                                        <img src="assets/images/thumbs/comment1.png" class="cover-img" alt="">
                                    </div>
                                    <div class="comment-list__content">
                                        <div class="flx-between gap-2 align-items-start">
                                            <div>
                                                <h6 class="comment-list__name font-18 mb-sm-2 mb-1">Jenny Wilson</h6>
                                                <span class="comment-list__date font-14">Jan 21, 2024 at 11:25 pm</span>
                                            </div>
                                            <a class="comment-list__reply fw-500 flx-align gap-2 hover-text-decoration-underline"
                                                href="#comment-box">
                                                Reply
                                                <span class="icon"><img src="assets/images/icons/reply-icon.svg"
                                                        alt=""></span>
                                            </a>
                                        </div>
                                        <p class="comment-list__desc mt-3">Lorem ipsum dolor sit amet consectetur. Nec
                                            nunc pellentesque massa pretium. Quam sapien nec venenatis vivamus sed cras
                                            faucibus mi viverra. Quam faucibus morbi cras vitae neque. Necnunc
                                            pellentesque massa pretium.</p>
                                    </div>
                                </li>
                                <li>
                                    <ul class="comment-list comment-list--two">
                                        <li class="comment-list__item d-flex align-items-start gap-sm-4 gap-3">
                                            <div class="comment-list__thumb flex-shrink-0">
                                                <img src="assets/images/thumbs/comment2.png" class="cover-img" alt="">
                                            </div>
                                            <div class="comment-list__content">
                                                <div class="flx-between gap-2 align-items-start">
                                                    <div>
                                                        <h6 class="comment-list__name font-18 mb-sm-2 mb-1">Courtney
                                                            Henry</h6>
                                                        <span class="comment-list__date font-14">Jan 21, 2024 at 11:25
                                                            pm</span>
                                                    </div>
                                                    <a class="comment-list__reply fw-500 flx-align gap-2 hover-text-decoration-underline"
                                                        href="#comment-box">
                                                        Reply
                                                        <span class="icon"><img src="assets/images/icons/reply-icon.svg"
                                                                alt=""></span>
                                                    </a>
                                                </div>
                                                <p class="comment-list__desc mt-3">Lorem ipsum dolor sit amet
                                                    consectetur. Nec nunc pellentesque massa pretium. Quam sapien nec
                                                    venenatis vivamus sed cras faucibus.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- Comment End -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- ======================= Product Sidebar Start ========================= -->
                <div class="product-sidebar section-bg">
                    <div class="product-sidebar__top position-relative flx-between gap-1">
                        <button type="button" class="btn-has-dropdown font-heading font-18">Extended License</button>
                        <div class="license-dropdown">
                            <div class="license-dropdown__item mb-3">
                                <h6 class="license-dropdown__title font-body mb-1 font-16">Regular License</h6>
                                <p class="license-dropdown__desc font-13">Use, by you or one client, in a solitary
                                    finished result which end clients are not charged for. The complete cost
                                    incorporates the thing cost and a purchaser expense..</p>
                            </div>
                            <div class="license-dropdown__item">
                                <h6 class="license-dropdown__title font-body mb-1 font-16">Extended License</h6>
                                <p class="license-dropdown__desc font-13">Use, by you or one client, in a solitary final
                                    result which end clients can be charged for. The all out cost incorporates the thing
                                    cost and a purchaser expense.</p>
                            </div>
                            <div class="mt-3 pt-2 border-top text-center ">
                                <a href="#" class="link hover-text-decoration-underline font-14 text-main fw-500">View
                                    License Details</a>
                            </div>
                        </div>
                        <h6 class="product-sidebar__title">$1580.00</h6>
                    </div>
                    <ul class="sidebar-list">
                        <li class="sidebar-list__item flx-align gap-2 font-14 fw-300 mb-2">
                            <span class="icon"><img src="assets/images/icons/check-cirlce.svg" alt=""></span>
                            <span class="text">Quality verified</span>
                        </li>
                        <li class="sidebar-list__item flx-align gap-2 font-14 fw-300 mb-2">
                            <span class="icon"><img src="assets/images/icons/check-cirlce.svg" alt=""></span>
                            <span class="text">Use for a single project</span>
                        </li>
                        <li class="sidebar-list__item flx-align gap-2 font-14 fw-300">
                            <span class="icon"><img src="assets/images/icons/check-cirlce.svg" alt=""></span>
                            <span class="text">Non-paying users only</span>
                        </li>
                    </ul>

                    <div class="flx-between mt-3">
                        <div class="common-check mb-0">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="extended">
                            <label class="form-check-label mb-0 fw-300 text-body" for="extended">Extended support 12
                                month</label>
                        </div>
                        <div class="flx-align gap-2">
                            <span class="product-card__prevPrice text-decoration-line-through">$12</span>
                            <h6 class="product-card__price mb-0 font-14 fw-500">$7.25</h6>
                        </div>
                    </div>
                    <a href="?p=whatsapp&id=<?=md5($id)?>&text=Hello,%20I%20am%20interested%20in%20purchasing%20the%20item%20I%20looked%20at%20on%20your%20website." target="_blank" type="button"
                        class="btn btn-main d-flex w-100 justify-content-center align-items-center gap-2 pill px-sm-5 mt-32">
                        <img src="assets/images/icons/add-to-cart.svg" alt="">
                        Buy Now
                    </a>

                    <!-- Author Details Start-->
                    <div class="author-details">
                        <div class="d-flex align-items-center gap-2">
                            <div class="author-details__thumb flex-shrink-0">
                                <img src="assets/images/thumbs/author-details-img.png" alt="">
                            </div>
                            <div class="author-details__content">
                                <h6 class="author-details__name font-18 mb-2"><a href="?p=whatsapp"
                                        class="link hover-text-main">Yahirtech</a></h6>

                                <span class="d-flex align-items-center gap-1">
                                    <span class="star-rating">
                                        <span class="star-rating__item font-11"><i class="fas fa-star"></i></span>
                                        <span class="star-rating__item font-11"><i class="fas fa-star"></i></span>
                                        <span class="star-rating__item font-11"><i class="fas fa-star"></i></span>
                                        <span class="star-rating__item font-11"><i class="fas fa-star"></i></span>
                                        <span class="star-rating__item font-11"><i class="fas fa-star"></i></span>
                                    </span>
                                    <span class="star-rating__text text-body"> 5.0</span>
                                </span>
                            </div>
                        </div>
                        <a href="?p=whatsapp" class="btn btn-outline-light w-100 pill mt-32">Contact</a>
                    </div>
                    <!-- Author Details End -->

                    <!-- Meta Attribute List Start -->
                    <ul class="meta-attribute">
                        <li class="meta-attribute__item">
                            <span class="name">Last Update</span>
                            <span class="details"><?= $date_created ?></span>
                        </li>
                        <li class="meta-attribute__item">
                            <span class="name">Published</span>
                            <span class="details"><?= $date_created ?></span>
                        </li>
                        <li class="meta-attribute__item">
                            <span class="name">Category</span>
                            <span class="details"><?= $category_id ?></span>
                        </li>
                    </ul>
                    <!-- Meta Attribute List End -->
                </div>
                <!-- ======================= Product Sidebar End ========================= -->
            </div>
            <!-- ========================= Related Section Start =========================== -->
            <div class="col-lg-12">
                <section
                    class="resource style-two padding-y-120 section-bg position-relative z-index-1 overflow-hidden">

                    <img src="assets/images/shapes/element-moon1.png" alt="" class="element one">
                    <img src="assets/images/shapes/curve-pattern3.png" alt=""
                        class="d-none position-absolute end-0 top-0 z-index--1">

                    <div class="container container-two">
                        <div class="section-heading style-left style-flex flx-between align-items-end gap-3">
                            <div class="section-heading__inner w-lg">
                                <h3 class="section-heading__title">Related Products</h3>
                            </div>
                            <a href="#" class="btn btn-main btn-lg pill">View All Items</a>
                        </div>
                        <div class="resource-slider gy-4">
                            <?php
                            $products = $conn->query("SELECT * FROM `products` where status = 1 and (category_id = '{$category_id}' or sub_category_id = '{$sub_category_id}') and id !='{$id}' order by rand() limit 9");
                            while ($row = $products->fetch_assoc()):
                                $upload_path = 'uploads/product_' . $row['id'];
                                $img = "";
                                if (is_dir($upload_path)) {
                                    $fileO = scandir($upload_path);
                                    if (isset($fileO[2]))
                                        $img = "uploads/product_" . $row['id'] . "/" . $fileO[2];
                                    // var_dump($fileO);
                                }
                                $inventory = $conn->query("SELECT * FROM inventory where product_id = " . $row['id']);
                                $_inv = array();
                                foreach ($row as $k => $v) {
                                    $row[$k] = trim(stripslashes($v));
                                }
                                while ($ir = $inventory->fetch_assoc()) {
                                    $_inv[] = number_format($ir['price']);
                                }
                                ?>
                                <div class="product-card shadow-sm">
                                    <div class="product-card__thumb d-flex">
                                        <a href="?p=shop&id=<?= md5($id) ?>" class="link w-100">
                                            <img src="<?= $img ?>" alt="<?= $title ?>" class="contain-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="?p=shop&id=<?= md5($id) ?>" class="link"><?= $title ?></a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="?p=search&q=<?= $row['author'] ?>"
                                                    class="link hover-text-decoration-underline"><?= $row['author'] ?></a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <?php foreach ($inv as $k => $v): ?>
                                                    <h6 class="product-card__price mb-0">$<?php echo $v ?></h6>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">1200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </section>
            </div>
            <!-- ========================= Related Section End =========================== -->
        </div>
    </div>
</div>
<!-- ======================= Product Details Section End ==================== -->