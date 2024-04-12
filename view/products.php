<!-- ======================== All Product Section Start ====================== -->
<section class="all-product padding-y-120">
    <div class="container container-two">
        <div class="row">
            <div class="col-lg-12">
                <div class="filter-tab gap-3 flx-between">
                    <button type="button"
                        class="filter-tab__button btn btn-outline-light pill d-flex align-items-center">
                        <span class="icon icon-left"><img src="assets/images/icons/filter.svg" alt=""></span>
                        <span class="font-18 fw-500">Filters</span>
                    </button>
                    <ul class="nav common-tab nav-pills mb-0 gap-lg-2 gap-1 ms-lg-auto" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-product-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-product" type="button" role="tab" aria-controls="pills-product"
                                aria-selected="true">All Item</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-bestMatch-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-bestMatch" type="button" role="tab"
                                aria-controls="pills-bestMatch" aria-selected="false">Best Match</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-bestRating-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-bestRating" type="button" role="tab"
                                aria-controls="pills-bestRating" aria-selected="false">Best Rating</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-trending" type="button" role="tab" aria-controls="pills-trending"
                                aria-selected="false">Site Template</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-bestOffers-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-bestOffers" type="button" role="tab"
                                aria-controls="pills-bestOffers" aria-selected="false">Best Offers</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-bestSelling-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-bestSelling" type="button" role="tab"
                                aria-controls="pills-bestSelling" aria-selected="false">Best Selling</button>
                        </li>
                    </ul>
                    <div class="list-grid d-flex align-items-center gap-2">
                        <button class="list-grid__button list-button d-sm-flex d-none text-body"><i
                                class="las la-list"></i></button>
                        <button class="list-grid__button grid-button d-sm-flex d-none active text-body"><i
                                class="las la-border-all"></i></button>
                        <button class="list-grid__button sidebar-btn text-body d-lg-none d-flex"><i
                                class="las la-bars"></i></button>
                    </div>
                </div>
                <form action="#" class="filter-form pb-4 ">
                    <div class="row gy-3">
                        <div class="col-sm-4 col-xs-6">
                            <div class="flx-between gap-1">
                                <label for="tag" class="form-label font-16">Tag</label>
                                <button type="reset" class="text-body font-14">Clear</button>
                            </div>
                            <div class="position-relative">
                                <input type="text" class="common-input border-gray-five common-input--withLeftIcon"
                                    id="tag" placeholder="Search By Tag...">
                                <span class="input-icon input-icon--left"><img src="assets/images/icons/search-two.svg"
                                        alt=""></span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-6">
                            <div class="flx-between gap-1">
                                <label for="Price" class="form-label font-16">Price</label>
                                <button type="reset" class="text-body font-14">Clear</button>
                            </div>
                            <div class="position-relative">
                                <input type="text" class="common-input border-gray-five" id="Price"
                                    placeholder="$7 - $29">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="flx-between gap-1">
                                <label for="time" class="form-label font-16">Time Frame</label>
                                <button type="reset" class="text-body font-14">Clear</button>
                            </div>
                            <div class="position-relative select-has-icon">
                                <select id="time" class="common-input border-gray-five">
                                    <option value="1">Now</option>
                                    <option value="2">Yesterday</option>
                                    <option value="2">1 Month Ago</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-3 col-lg-4">
                <!-- ===================== Filter Sidebar Start ============================= -->
                <div class="filter-sidebar">
                    <button type="button"
                        class="filter-sidebar__close p-2 position-absolute end-0 top-0 z-index-1 text-body hover-text-main font-20 d-lg-none d-block"><i
                            class="las la-times"></i></button>
                    <div class="filter-sidebar__item">
                        <button type="button"
                            class="filter-sidebar__button font-16 text-capitalize fw-500">Category</button>
                        <div class="filter-sidebar__content">
                            <ul class="filter-sidebar-list">
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        All Categories <span class="qty">25489</span>
                                    </a>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        Site Template <span class="qty">12,501</span>
                                    </a>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        WordPress <span class="qty">1258</span>
                                    </a>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        UI Template <span class="qty">1520</span>
                                    </a>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        Templates Kits <span class="qty">210</span>
                                    </a>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        eCommerce <span class="qty">158</span>
                                    </a>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        Marketing <span class="qty">178</span>
                                    </a>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        CMS Template <span class="qty">122</span>
                                    </a>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        Muse Themes <span class="qty">450</span>
                                    </a>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        Blogging <span class="qty">155</span>
                                    </a>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        Courses <span class="qty">125</span>
                                    </a>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        Forums <span class="qty">35</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="filter-sidebar__item">
                        <button type="button"
                            class="filter-sidebar__button font-16 text-capitalize fw-500">Rating</button>
                        <div class="filter-sidebar__content">
                            <ul class="filter-sidebar-list">
                                <li class="filter-sidebar-list__item">
                                    <div class="filter-sidebar-list__text">
                                        <div class="common-check common-radio">
                                            <input class="form-check-input" type="radio" name="radio" id="veiwAll">
                                            <label class="form-check-label" for="veiwAll"> View All</label>
                                        </div>
                                        <span class="qty">(1859)</span>
                                    </div>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <div class="filter-sidebar-list__text">
                                        <div class="common-check common-radio">
                                            <input class="form-check-input" type="radio" name="radio" id="oneStar">
                                            <label class="form-check-label" for="oneStar"> 1 Star and above</label>
                                        </div>
                                        <span class="qty">(785)</span>
                                    </div>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <div class="filter-sidebar-list__text">
                                        <div class="common-check common-radio">
                                            <input class="form-check-input" type="radio" name="radio" id="twoStar">
                                            <label class="form-check-label" for="twoStar"> 2 Star and above</label>
                                        </div>
                                        <span class="qty">(1250)</span>
                                    </div>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <div class="filter-sidebar-list__text">
                                        <div class="common-check common-radio">
                                            <input class="form-check-input" type="radio" name="radio" id="threeStar">
                                            <label class="form-check-label" for="threeStar"> 3 Star and above</label>
                                        </div>
                                        <span class="qty">(7580)</span>
                                    </div>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <div class="filter-sidebar-list__text">
                                        <div class="common-check common-radio">
                                            <input class="form-check-input" type="radio" name="radio" id="fourStar">
                                            <label class="form-check-label" for="fourStar"> 4 Star and above</label>
                                        </div>
                                        <span class="qty">(1450)</span>
                                    </div>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <div class="filter-sidebar-list__text">
                                        <div class="common-check common-radio">
                                            <input class="form-check-input" type="radio" name="radio" id="fiveStar">
                                            <label class="form-check-label" for="fiveStar"> 5 Star Rating</label>
                                        </div>
                                        <span class="qty">(2530)</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="filter-sidebar__item">
                        <button type="button" class="filter-sidebar__button font-16 text-capitalize fw-500">Date
                            Updated</button>
                        <div class="filter-sidebar__content">
                            <ul class="filter-sidebar-list">
                                <li class="filter-sidebar-list__item">
                                    <div class="filter-sidebar-list__text">
                                        <div class="common-check common-radio">
                                            <input class="form-check-input" type="radio" name="radio" id="anyDate">
                                            <label class="form-check-label" for="anyDate"> Any Date</label>
                                        </div>
                                        <span class="qty"> 5,203</span>
                                    </div>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <div class="filter-sidebar-list__text">
                                        <div class="common-check common-radio">
                                            <input class="form-check-input" type="radio" name="radio" id="lastYear">
                                            <label class="form-check-label" for="lastYear"> In the last year</label>
                                        </div>
                                        <span class="qty">1,258</span>
                                    </div>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <div class="filter-sidebar-list__text">
                                        <div class="common-check common-radio">
                                            <input class="form-check-input" type="radio" name="radio" id="lastMonth">
                                            <label class="form-check-label" for="lastMonth"> In the last month</label>
                                        </div>
                                        <span class="qty">2450</span>
                                    </div>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <div class="filter-sidebar-list__text">
                                        <div class="common-check common-radio">
                                            <input class="form-check-input" type="radio" name="radio" id="LastWeek">
                                            <label class="form-check-label" for="LastWeek"> In the last week</label>
                                        </div>
                                        <span class="qty">325</span>
                                    </div>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <div class="filter-sidebar-list__text">
                                        <div class="common-check common-radio">
                                            <input class="form-check-input" type="radio" name="radio" id="lastDay">
                                            <label class="form-check-label" for="lastDay"> In the last day</label>
                                        </div>
                                        <span class="qty">745</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ===================== Filter Sidebar End ============================= -->
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-product" role="tabpanel"
                        aria-labelledby="pills-product-tab" tabindex="0">
                        <div class="row gy-4 list-grid-wrapper">
                            <!-- ===================== Logic Start ============================= -->
                            <?php
                            while ($row = $products->fetch_assoc()):
                                $upload_path = 'uploads/product_' . $row['id'];
                                $img = "";
                                if (is_dir($upload_path)) {
                                    $fileO = scandir($upload_path);
                                    if (isset($fileO[2]))
                                        $img = "uploads/product_" . $row['id'] . "/" . $fileO[2];
                                    // echo $img;
                                    // var_dump($fileO);
                                }
                                foreach ($row as $k => $v) {
                                    $row[$k] = trim(stripslashes($v));
                                }
                                $inventory = $conn->query("SELECT * FROM inventory where product_id = " . $row['id']);
                                $inv = array();
                                while ($ir = $inventory->fetch_assoc()) {
                                    $inv[] = number_format($ir['price']);
                                }
                                ?>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="?p=shop&id=<?=md5($row['id'])?>" class="link w-100">
                                                <img  src="<?=$img?>" alt="<?=$row['title']?>" class="contain-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i
                                                    class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="?p=shop&id=<?=md5($row['id'])?>" class="link"><?=$row['title']?></a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
                                                <span class="product-card__author">
                                                    by
                                                    <a href="?p=search&q=<?=$row['author']?>" class="link hover-text-decoration-underline"><?=$row['author']?></a>
                                                </span>
                                                <div class="flx-align gap-2">
                                                    <?php foreach($inv as $k=> $v): ?>
                                                    <h6 class="product-card__price mb-0">$<?php echo $v ?></h6>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">1200 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14">
                                                            (16)</span>
                                                    </div>
                                                </div>
                                                <a href="?p=shop&id=<?=md5($row['id'])?>"
                                                    class="btn btn-outline-light btn-sm pill">More Info</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <!-- ===================== Logic End ============================= -->
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$120</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">1200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$129</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">900 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$59</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">1225 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$99</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">1300 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$129</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$129</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">500 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img9.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img10.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img11.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img12.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Pagination Start -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination common-pagination">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link flx-align gap-2 flex-nowrap" href="#">Next
                                        <span class="icon line-height-1 font-20"><i
                                                class="las la-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Pagination End -->

                    </div>
                    <div class="tab-pane fade" id="pills-bestMatch" role="tabpanel"
                        aria-labelledby="pills-bestMatch-tab" tabindex="0">
                        <div class="row gy-4 list-grid-wrapper">
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$120</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">1200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$129</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">900 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$59</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">1225 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$99</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">1300 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$129</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$129</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">500 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img9.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img10.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img11.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img12.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Pagination Start -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination common-pagination">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link flx-align gap-2 flex-nowrap" href="#">Next
                                        <span class="icon line-height-1 font-20"><i
                                                class="las la-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Pagination End -->

                    </div>
                    <div class="tab-pane fade" id="pills-bestRating" role="tabpanel"
                        aria-labelledby="pills-bestRating-tab" tabindex="0">
                        <div class="row gy-4 list-grid-wrapper">
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$120</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">1200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$129</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">900 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$59</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">1225 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$99</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">1300 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$129</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$129</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">500 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img9.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img10.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img11.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img12.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Pagination Start -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination common-pagination">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link flx-align gap-2 flex-nowrap" href="#">Next
                                        <span class="icon line-height-1 font-20"><i
                                                class="las la-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Pagination End -->

                    </div>
                    <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab"
                        tabindex="0">
                        <div class="row gy-4 list-grid-wrapper">
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$120</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">1200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$129</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">900 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$59</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">1225 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$99</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">1300 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$129</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$129</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">500 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img9.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img10.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img11.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img12.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Pagination Start -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination common-pagination">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link flx-align gap-2 flex-nowrap" href="#">Next
                                        <span class="icon line-height-1 font-20"><i
                                                class="las la-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Pagination End -->

                    </div>
                    <div class="tab-pane fade" id="pills-bestOffers" role="tabpanel"
                        aria-labelledby="pills-bestOffers-tab" tabindex="0">
                        <div class="row gy-4 list-grid-wrapper">
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$120</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">1200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$129</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">900 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$59</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">1225 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$99</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">1300 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$129</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$129</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">500 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img9.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img10.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img11.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img12.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Pagination Start -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination common-pagination">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link flx-align gap-2 flex-nowrap" href="#">Next
                                        <span class="icon line-height-1 font-20"><i
                                                class="las la-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Pagination End -->

                    </div>
                    <div class="tab-pane fade" id="pills-bestSelling" role="tabpanel"
                        aria-labelledby="pills-bestSelling-tab" tabindex="0">
                        <div class="row gy-4 list-grid-wrapper">
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$120</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">1200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$129</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">900 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$59</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">1225 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$99</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">1300 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$129</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$129</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">500 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img9.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img10.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img11.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-card section-bg">
                                    <div class="product-card__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img12.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">$79</h6>
                                                <span
                                                    class="product-card__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Pagination Start -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination common-pagination">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link flx-align gap-2 flex-nowrap" href="#">Next
                                        <span class="icon line-height-1 font-20"><i
                                                class="las la-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Pagination End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================== All Product Section End ====================== -->