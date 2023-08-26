<?php
 /* 
 Template Name: Static-Homepage
 */

get_header(); ?>

    <main id="main" class="site-main" role="main">

        <?php
            /*
            while ( have_posts() ) :
                the_post();
                do_action( 'bookworm_page_before' );
                get_template_part( 'templates/contents/content', 'page' );
                do_action( 'bookworm_page_after' );
            endwhile; 
           */ 

        echo do_shortcode('[masterslider id="1"]');
        ?>
        <div class="wp-block-spacer" style="height: 100px;" aria-hidden="true">&nbsp;</div>
        <h1 class="has-text-align-center has-secondary-color has-text-color">
            <a href="http://3.92.125.38/about-us/">Alefredo Books</a>
        </h1>
        <blockquote class="wp-block-quote has-text-align-center">
            <p>The largest Arabic Platform to sell Used Books and Educational 
                <a href="http://3.92.125.38/book-category/digital-past-papers-and-practice-test/digital-notes-summaries/" class ="Digital"   style=" color: #4BB9AA;" >Digital Summaries</a>
            </p>
        </blockquote>
        <!----Featured category block start-->
        <div id="bwgb-784262d" class="wp-block-bwgb-product-categories bwgb-product-categories space-top-3 space-bottom-3 bwgb-784262d bwgb-product-categories__style-v1">
            <style>
                .bwgb-784262d .bwgb-products-category__icon-5 {
                color: #f4e6e5 !important
                }

                .bwgb-784262d .bwgb-products-category__bg-5 {
                background-color: #fff6f6 !important
                }
            </style>
            <div class="wp-block-bwgb-product-categories__inner container">
                <header class="bwgb-products-category__block-header d-md-flex justify-content-between align-items-center mb-5">
                <h2 class="bwgb-product-category__block-title font-size-7 mb-3 mb-md-0 mb-3 mb-md-0">Featured Categories from Alefredo Books</h2>
                <a class="h-primary d-block bwgb-products-category__block-action-text bwgb-product-category__block-title" href="#">All Categories <i class="flaticon flaticon-next font-size-3 ml-2"></i>
                </a>
                </header>
                <div class="wp-block-bwgb-product-categories__content_aks">
                <div>
                    <ul class="list-unstyled my-0 row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-5 row-cols-wd-2">
                    <li class="product-category col mb-5">
                        <div class="bwgb-cat__item product-category__inner bwgb-products-category__bg-4 bg-carolina-light px-6 py-5">
                        <div class="product-category__icon font-size-12  text-carolina"></div>
                        <div class="product-category__body">
                            <h3 class="bwgb-products-category__category-title text-truncate font-size-3">
                            <a href="http://3.92.125.38/book-category/books/school-books/" class="bwgb-products-category__category-title stretched-link text-dark">School Books</a>
                            </h3>
                            <a href="http://3.92.125.38/book-category/books/school-books/" class="stretched-link bwgb-products-category__shop-now-text text-dark">Shop Now</a>
                        </div>
                        </div>
                    </li>
                    <li class="product-category col mb-5">
                        <div class="bwgb-cat__item product-category__inner bwgb-products-category__bg-1 bg-indigo-light px-6 py-5">
                        <div class="product-category__icon font-size-12  text-primary-indigo"></div>
                        <div class="product-category__body">
                            <h3 class="bwgb-products-category__category-title text-truncate font-size-3">
                            <a href="http://3.92.125.38/book-category/digital-past-papers-practice-test/" class="bwgb-products-category__category-title stretched-link text-dark">Digital Past Papers &amp; Practice Test</a>
                            </h3>
                            <a href="http://3.92.125.38/book-category/digital-past-papers-practice-test/" class="stretched-link bwgb-products-category__shop-now-text text-dark">Shop Now</a>
                        </div>
                        </div>
                    </li>
                    <li class="product-category col mb-5">
                        <div class="bwgb-cat__item product-category__inner bwgb-products-category__bg-3 bg-chili-light px-6 py-5">
                        <div class="product-category__icon font-size-12  text-chili"></div>
                        <div class="product-category__body">
                            <h3 class="bwgb-products-category__category-title text-truncate font-size-3">
                            <a href="http://3.92.125.38/book-category/past-paper-practice-test-2/" class="bwgb-products-category__category-title stretched-link text-dark">Past Paper &amp; Practice Test</a>
                            </h3>
                            <a href="http://3.92.125.38/book-category/past-paper-practice-test-2/" class="stretched-link bwgb-products-category__shop-now-text text-dark">Shop Now</a>
                        </div>
                        </div>
                    </li>
                   
                    <li class="product-category col mb-5">
                        <div class="bwgb-cat__item product-category__inner bwgb-products-category__bg-5 bg-punch-light px-6 py-5">
                        <div class="product-category__icon font-size-12  text-punch"></div>
                        <div class="product-category__body">
                            <h3 class="bwgb-products-category__category-title text-truncate font-size-3">
                            <a href="http://3.92.125.38/sell-your-books/" class="bwgb-products-category__category-title stretched-link text-dark">Sell your books</a>
                            </h3>
                            <a href="http://3.92.125.38/sell-your-books/" class="stretched-link bwgb-products-category__shop-now-text text-dark">Shop Now</a>
                        </div>
                        </div>
                    </li>
                    <li class="product-category col mb-5">
                        <div class="bwgb-cat__item product-category__inner bwgb-products-category__bg-2 bg-tangerine-light px-6 py-5">
                        <div class="product-category__icon font-size-12  text-tangerine"></div>
                        <div class="product-category__body">
                            <h3 class="bwgb-products-category__category-title text-truncate font-size-3">
                            <a href="http://3.92.125.38/book-category/books/kids-products/" class="bwgb-products-category__category-title stretched-link text-dark">Kids Products</a>
                            </h3>
                            <a href="http://3.92.125.38/book-category/books/kids-products/" class="stretched-link bwgb-products-category__shop-now-text text-dark">Shop Now</a>
                        </div>
                        </div>
                    </li>
                    <li class="product-category col mb-5">
                        <div class="bwgb-cat__item product-category__inner bwgb-products-category__bg-6 bg-indigo-light px-6 py-5">
                        <div class="product-category__icon font-size-12  text-primary-indigo"></div>
                        <div class="product-category__body">
                            <h3 class="bwgb-products-category__category-title text-truncate font-size-3">
                            <a href="http://3.92.125.38/book-category/books/university-books/" class="bwgb-products-category__category-title stretched-link text-dark">University Books</a>
                            </h3>
                            <a href="http://3.92.125.38/book-category/books/university-books/" class="stretched-link bwgb-products-category__shop-now-text text-dark">Shop Now</a>
                        </div>
                        </div>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
        <!----Featured category block end-->
        
        <!----School book block start-->

        <div id="bwgb-20caeb8" class="wp-block-bwgb-products-carousel bwgb-products-carousel space-bottom-3 bwgb-20caeb8 bwgb-products-carousel__style-v1">
            <div class="wp-block-bwgb-products-carousel__inner container">
                <header class="justify-content-between align-items-center bwgb-products-carousel__block-header mb-5 d-md-flex">
                <h2 class="bwgb-products-carousel__block-title font-size-7 mb-3 mb-md-0">
                    <a href="http://3.92.125.38/book-category/books/school-books/">School Books</a>
                </h2>
                <a class="h-primary d-block bwgb-products-carousel__block-action-text" href="http://3.92.125.38/book-category/books/school-books/">View All <i class="flaticon flaticon-next ml-1"></i>
                </a>
                </header>
                <div class="wp-block-bwgb-products-carousel__content_aks">
                <div>
                    <div class="woocommerce columns-3 ">
                    <div class="js-slick-carousel  slick-slider slick-slider-1 slick-dotted" data-slides-show="3" data-slides-scroll="1" data-pagi-classes="text-center u-slick__pagination position-absolute right-0 left-0" data-responsive='[{"breakpoint":1479.98000000000001818989403545856475830078125,"settings":{"slidesToShow":3}},{"breakpoint":1199.98000000000001818989403545856475830078125,"settings":{"slidesToShow":2}},{"breakpoint":991.98000000000001818989403545856475830078125,"settings":{"slidesToShow":2}},{"breakpoint":575.98000000000001818989403545856475830078125,"settings":{"slidesToShow":1}}]'>
                        
                            <div class="js-slide product product__card border-right type-product post-166839 status-publish first instock product_cat-books product_cat-school-books product_cat-chemistry has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide">
                            <div class="media p-3 p-md-4d875 w-100 bg-white">
                                <a href="http://3.92.125.38/product/ap-chemistry-premium-2022-2023/" class="d-block bwgb-products-carousel__product-image" tabindex="0">
                                <img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2022/04/513uOCTZ7vL._SX383_BO1204203200_-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="Barrons chemistry" loading="lazy">
                                </a>
                                <div class="media-body ml-4d875">
                                <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                    <a href="http://3.92.125.38/product/ap-chemistry-premium-2022-2023/" tabindex="0">AP Chemistry Premium, 2022-2023</a>
                                </h6>
                                <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3">
                                    <span class="price">
                                    <span class="woocommerce-Price-amount amount">
                                        <bdi>
                                        <span class="woocommerce-Price-currencySymbol">JD</span>30.00 </bdi>
                                    </span>
                                    </span>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="js-slide product product__card border-right type-product post-166855 status-publish instock product_cat-books product_cat-school-books product_cat-biology has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide">
                            <div class="media p-3 p-md-4d875 w-100 bg-white">
                                <a href="http://3.92.125.38/product/ap-biology-premium-2022-2023/" class="d-block bwgb-products-carousel__product-image" tabindex="0">
                                <img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2022/04/41jtU6he60L._SX383_BO1204203200_-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="AP Barrons Biology" loading="lazy">
                                </a>
                                <div class="media-body ml-4d875">
                                <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                    <a href="http://3.92.125.38/product/ap-biology-premium-2022-2023/" tabindex="0">AP Biology Premium, 2022-2023</a>
                                </h6>
                                <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3">
                                    <span class="price">
                                    <span class="woocommerce-Price-amount amount">
                                        <bdi>
                                        <span class="woocommerce-Price-currencySymbol">JD</span>35.00 </bdi>
                                    </span>
                                    </span>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="js-slide product product__card border-right type-product post-166864 status-publish last instock product_cat-mathematics product_cat-books product_cat-school-books has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide">
                            <div class="media p-3 p-md-4d875 w-100 bg-white">
                                <a href="http://3.92.125.38/product/ap-calculus-premium-with-12-practice-tests/" class="d-block bwgb-products-carousel__product-image" tabindex="0">
                                <img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2022/04/51JhGkUE95L._SX258_BO1204203200_-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="Barrons AP Calculus" loading="lazy">
                                </a>
                                <div class="media-body ml-4d875">
                                <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                    <a href="http://3.92.125.38/product/ap-calculus-premium-with-12-practice-tests/" tabindex="0">AP Calculus Premium: With 12 Practice Tests</a>
                                </h6>
                                <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3">
                                    <span class="price">
                                    <span class="woocommerce-Price-amount amount">
                                        <bdi>
                                        <span class="woocommerce-Price-currencySymbol">JD</span>30.00 </bdi>
                                    </span>
                                    </span>
                                </div>
                                </div>
                        </div>
                        </div>
                        <div class="u-slick__pagination1"></div>
                        
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <!----School book block end-->

            <!----Past Papers & Practice Test block start-->
            <div id="bwgb-53503cc" class="wp-block-bwgb-products-carousel bwgb-products-carousel space-bottom-3 bwgb-53503cc bwgb-products-carousel__style-v1">
                <div class="wp-block-bwgb-products-carousel__inner container">
                    <header class="justify-content-between align-items-center bwgb-products-carousel__block-header mb-5 d-md-flex">
                        <h2 class="bwgb-products-carousel__block-title font-size-7 mb-3 mb-md-0"><a href="http://3.92.125.38/book-category/past-paper-practice-test-2/">Past Papers &amp; Practice Test</a></h2> <a class="h-primary d-block bwgb-products-carousel__block-action-text" href="http://3.92.125.38/book-category/past-paper-practice-test-2/">View All<i class="flaticon flaticon-next ml-1"></i></a></header>
                    <div class="wp-block-bwgb-products-carousel__content_aks">
                        <div>
                            <div class="woocommerce columns-3 ">
                                <div class="js-slick-carousel u-slick--equal-height u-slick products border slick-slider slick-slider-7 slick-dotted" data-slides-show="3" data-slides-scroll="1" data-speed="4000" data-force-unslick="1" data-pagi-classes="text-center u-slick__pagination position-absolute right-0 left-0" data-responsive='[{"breakpoint":1479.98000000000001818989403545856475830078125,"settings":{"slidesToShow":3}},{"breakpoint":1199.98000000000001818989403545856475830078125,"settings":{"slidesToShow":2}},{"breakpoint":991.98000000000001818989403545856475830078125,"settings":{"slidesToShow":2}},{"breakpoint":575.98000000000001818989403545856475830078125,"settings":{"slidesToShow":1}}]'>
                                    <!--<div class="slick-list draggable">
                                        <div class="slick-track" style="opacity: 1; width: 2730px; transform: translate3d(0px, 0px, 0px);"> -->
                                            <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 390px; height: auto;" role="tabpanel" id="slick-slide110">
                                                <div>
                                                    <div class="js-slide product product__card border-right type-product post-65589 status-publish first instock product_cat-past-paper-practice-test product_cat-ap product_cat-calculus-en has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart" style="width: 100%; display: inline-block;">
                                                        <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                            <a href="http://3.92.125.38/product/ap-calculus-ab-real-past-papers-free-response-questions-frq-with-answers-and-scoring-guidelines/" class="d-block bwgb-products-carousel__product-image" tabindex="0"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2021/10/cover-pastpapers-AP-Calculus-AB-FRQ--120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                            <div class="media-body ml-4d875">
                                                                <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                <a href="http://3.92.125.38/product/ap-calculus-ab-real-past-papers-free-response-questions-frq-with-answers-and-scoring-guidelines/" tabindex="0">AP Calculus AB ,Real Past papers Free Response Questions (FRQ) with Answers and Scoring Guidelines</a>
                                                            </h6>
                                                                <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>15.00</bdi>
                                                                    </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 390px; height: auto;" role="tabpanel" id="slick-slide111">
                                                <div>
                                                    <div class="js-slide product product__card border-right type-product post-28181 status-publish instock product_cat-past-paper-practice-test product_cat-american-program product_cat-ap product_cat-calculus-en has-post-thumbnail sale shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart" style="width: 100%; display: inline-block;">
                                                        <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                            <a href="http://3.92.125.38/product/ap-calculus-past-paper-200-exercises-with-explanations-answer-sheet/" class="d-block bwgb-products-carousel__product-image" tabindex="0"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2020/05/Calculus-AB-400-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                            <div class="media-body ml-4d875">
                                                                <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                <a href="http://3.92.125.38/product/ap-calculus-past-paper-200-exercises-with-explanations-answer-sheet/" tabindex="0">AP Calculus AB 400 Multiple Choice Questions (MCQ) with Answers and Explanations</a>
                                                            </h6>
                                                                <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><ins class="text-decoration-none mr-2"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>12.00</bdi>
                                                                    </span>
                                                                    </ins><del class="font-size-1 font-weight-regular text-gray-700"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>22.00</bdi></span></del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 390px; height: auto;" role="tabpanel" id="slick-slide112">
                                                <div>
                                                    <div class="js-slide product product__card border-right type-product post-67865 status-publish last instock product_cat-ap product_cat-calculus-en product_cat-past-paper-practice-test product_cat-american-program has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart" style="width: 100%; display: inline-block;">
                                                        <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                            <a href="http://3.92.125.38/product/ap-calculus-bc-real-past-papers-free-response-questions-frq-with-answers-and-scoring-guidelines-2/" class="d-block bwgb-products-carousel__product-image" tabindex="0"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2021/12/cover-pastpapers-AP-Calculus-BC-FRQ--120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                            <div class="media-body ml-4d875">
                                                                <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                <a href="http://3.92.125.38/product/ap-calculus-bc-real-past-papers-free-response-questions-frq-with-answers-and-scoring-guidelines-2/" tabindex="0">AP Calculus BC ,Real Past papers Free Response Questions (FRQ) with Answers and Scoring Guidelines</a>
                                                            </h6>
                                                                <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>15.00</bdi>
                                                                    </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slick-slide" data-slick-index="3" aria-hidden="true" style="width: 390px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide113">
                                                <div>
                                                    <div class="js-slide product product__card border-right type-product post-28184 status-publish first instock product_cat-past-paper-practice-test product_cat-american-program product_cat-ap product_cat-calculus-en has-post-thumbnail sale shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart" style="width: 100%; display: inline-block;">
                                                        <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                            <a href="http://3.92.125.38/product/ap-calculus-past-paper-200-exercises-with-explanations-questions-sheet/" class="d-block bwgb-products-carousel__product-image" tabindex="-1"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2020/05/Calculus-BC-400-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                            <div class="media-body ml-4d875">
                                                                <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                <a href="http://3.92.125.38/product/ap-calculus-past-paper-200-exercises-with-explanations-questions-sheet/" tabindex="-1">AP Calculus BC 400 Multiple Choice Questions (MCQ) with Answers and Explanations</a>
                                                            </h6>
                                                                <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><ins class="text-decoration-none mr-2"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>12.00</bdi>
                                                                    </span>
                                                                    </ins><del class="font-size-1 font-weight-regular text-gray-700"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>22.00</bdi></span></del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 390px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide114">
                                                <div>
                                                    <div class="js-slide product product__card border-right type-product post-150987 status-publish instock product_cat-past-paper-practice-test product_cat-british-program product_cat-o-level product_cat-chemistry-en product_cat-cambridge-en has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart" style="width: 100%; display: inline-block;">
                                                        <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                            <a href="http://3.92.125.38/product/chemistry-_past-papers_igcse_o-level_cambridge_papers-246_2016_2021_questions-mark-scheme/" class="d-block bwgb-products-carousel__product-image" tabindex="-1"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2022/02/cover-pastpapers-chemistry-backage-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                            <div class="media-body ml-4d875">
                                                                <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                <a href="http://3.92.125.38/product/chemistry-_past-papers_igcse_o-level_cambridge_papers-246_2016_2021_questions-mark-scheme/" tabindex="-1">Chemistry _Past Papers_IGCSE_O Level_Cambridge_Papers 2&amp;4&amp;6_(2016_2021)_(Questions &amp; Mark Scheme)</a>
                                                            </h6>
                                                                <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>30.00</bdi>
                                                                    </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slick-slide" data-slick-index="5" aria-hidden="true" style="width: 390px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide115">
                                                <div>
                                                    <div class="js-slide product product__card border-right type-product post-9704 status-publish last instock product_cat-o-level product_cat-chemistry-en product_cat-cambridge-en product_cat-books product_cat-past-paper-practice-test product_cat-british-program has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart" style="width: 100%; display: inline-block;">
                                                        <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                            <a href="http://3.92.125.38/product/chemistry_past-papers_igcse_o-level_cambridge_paper-2_2015_2019_mark-scheme/" class="d-block bwgb-products-carousel__product-image" tabindex="-1"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2020/01/cover-pastpapers-O-level-paper-2-Chemistry-MS-1-1-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                            <div class="media-body ml-4d875">
                                                                <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                <a href="http://3.92.125.38/product/chemistry_past-papers_igcse_o-level_cambridge_paper-2_2015_2019_mark-scheme/" tabindex="-1">Chemistry_Past Papers_IGCSE_O Level_Cambridge_Paper 2_(2015_2022)_(Mark Scheme)</a>
                                                            </h6>
                                                                <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>6.00</bdi>
                                                                    </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slick-slide" data-slick-index="6" aria-hidden="true" style="width: 390px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide116">
                                                <div>
                                                    <div class="js-slide product product__card border-right type-product post-9677 status-publish first instock product_cat-british-program product_cat-o-level product_cat-chemistry-en product_cat-cambridge-en product_cat-books product_cat-past-paper-practice-test has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart" style="width: 100%; display: inline-block;">
                                                        <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                            <a href="http://3.92.125.38/product/chemistry_past-papers_igcse_o-level_cambridge_paper-1_2015_2019_questions-paper/" class="d-block bwgb-products-carousel__product-image" tabindex="-1"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2020/01/cover-pastpapers-O-level-paper-2-chemistry-QP-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                            <div class="media-body ml-4d875">
                                                                <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                <a href="http://3.92.125.38/product/chemistry_past-papers_igcse_o-level_cambridge_paper-1_2015_2019_questions-paper/" tabindex="-1">Chemistry_Past Papers_IGCSE_O Level_Cambridge_Paper 2_(2016_2022)_(Questions Paper)</a>
                                                            </h6>
                                                                <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>6.00</bdi>
                                                                    </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-slick__pagination7"></div>
                                </div>
                            <!--</div>
                        </div>-->
                    </div>
                </div>
            </div>
            <!----Past Papers & Practice Test block end-->


            <!----Digital Past Papers & Practice Test block start-->
            <div id="bwgb-11bc354" class="wp-block-bwgb-products-carousel bwgb-products-carousel space-bottom-3 bwgb-11bc354 bwgb-products-carousel__style-v1">
            <div class="wp-block-bwgb-products-carousel__inner container">
                <header class="justify-content-between align-items-center bwgb-products-carousel__block-header mb-5 d-md-flex">
                    <h2 class="bwgb-products-carousel__block-title font-size-7 mb-3 mb-md-0"><a href="http://3.92.125.38/book-category/digital-past-papers-and-practice-test/">Digital Past Papers & Practice Test</a></h2> <a class="h-primary d-block bwgb-products-carousel__block-action-text" href="http://3.92.125.38/book-category/digital-past-papers-and-practice-test/">View All<i class="flaticon flaticon-next ml-1"></i></a></header>
                        <div class="wp-block-bwgb-products-carousel__content_aks" >
                            <div>
                                <div class="woocommerce columns-3 ">
                                    <div class="js-slick-carousel u-slick--equal-height u-slick products border slick-slider slick-slider-2 slick-dotted" data-slides-show="3" data-slides-scroll="1" data-speed="4000" data-force-unslick="1" data-pagi-classes="text-center u-slick__pagination position-absolute right-0 left-0" data-responsive='[{"breakpoint":1479.98000000000001818989403545856475830078125,"settings":{"slidesToShow":3}},{"breakpoint":1199.98000000000001818989403545856475830078125,"settings":{"slidesToShow":2}},{"breakpoint":991.98000000000001818989403545856475830078125,"settings":{"slidesToShow":2}},{"breakpoint":575.98000000000001818989403545856475830078125,"settings":{"slidesToShow":1}}]'>
                                        <!--<div class="slick-list draggable">
                                            <div class="slick-track" style="opacity: 1; width: 2730px; transform: translate3d(0px, 0px, 0px);">-->
                                                <div class="js-slide product product__card border-right type-product post-151144 status-publish first instock product_cat-accounting-digital-format product_cat-digital-past-papers-practice-test product_cat-british-program-digital-format product_cat-cambridge-digital-format product_cat-a-level-digital-format has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide slick-current slick-active" style="width: 390px;" tabindex="0" role="tabpanel" id="slick-slide30" aria-describedby="slick-slide-control30" data-slick-index="0" aria-hidden="false">
                                                    <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                        <a href="http://3.92.125.38/product/accounting-_past-papers_igcse_a-level_cambridge_paper-2_2016_2021_question-paperdigital-format/" class="d-block bwgb-products-carousel__product-image" tabindex="0"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2022/02/Accounting-2-QP-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                        <div class="media-body ml-4d875">
                                                            <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                    <a href="http://3.92.125.38/product/accounting-_past-papers_igcse_a-level_cambridge_paper-2_2016_2021_question-paperdigital-format/" tabindex="0">Accounting _Past Papers_IGCSE_A Level_Cambridge_Paper 2_(2016_2021)_(Question  Paper)(Digital Format )</a>
                                                                </h6>
                                                            <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>3.00</bdi>
                                                                </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="js-slide product product__card border-right type-product post-151164 status-publish instock product_cat-digital-past-papers-practice-test product_cat-british-program-digital-format product_cat-cambridge-digital-format product_cat-a-level-digital-format product_cat-accounting-digital-format has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide slick-active" style="width: 390px;" tabindex="0" role="tabpanel" id="slick-slide31" aria-describedby="slick-slide-control31" data-slick-index="1" aria-hidden="false">
                                                    <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                        <a href="http://3.92.125.38/product/accounting-_past-papers_igcse_a-level_cambridge_paper-3_2016_2021_mark-scheme-paperdigital-format/" class="d-block bwgb-products-carousel__product-image" tabindex="0"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2022/02/Accounting-3-MS--120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                        <div class="media-body ml-4d875">
                                                            <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                    <a href="http://3.92.125.38/product/accounting-_past-papers_igcse_a-level_cambridge_paper-3_2016_2021_mark-scheme-paperdigital-format/" tabindex="0">Accounting _Past Papers_IGCSE_A Level_Cambridge_Paper 3_(2016_2021)_(Mark Scheme  Paper)(Digital Format )</a>
                                                                </h6>
                                                            <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>3.00</bdi>
                                                                </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="js-slide product product__card border-right type-product post-151162 status-publish last instock product_cat-digital-past-papers-courses product_cat-british-program-digital-format-digital-past-papers-courses product_cat-cambridge-digital-format product_cat-a-level-digital-format product_cat-accounting-digital-format has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide slick-active" style="width: 390px;" tabindex="0" role="tabpanel" id="slick-slide32" aria-describedby="slick-slide-control32" data-slick-index="2" aria-hidden="false">
                                                    <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                        <a href="http://3.92.125.38/product/accounting-_past-papers_igcse_a-level_cambridge_paper3_2016_2021_questions-paperdigital-format/" class="d-block bwgb-products-carousel__product-image" tabindex="0"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2022/02/Accounting-3-QP-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                        <div class="media-body ml-4d875">
                                                            <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                    <a href="http://3.92.125.38/product/accounting-_past-papers_igcse_a-level_cambridge_paper3_2016_2021_questions-paperdigital-format/" tabindex="0">Accounting _Past Papers_IGCSE_A Level_Cambridge_Paper3_(2016_2021)_(Questions   Paper)(Digital Format )</a>
                                                                </h6>
                                                            <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>3.00</bdi>
                                                                </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="js-slide product product__card border-right type-product post-151528 status-publish first instock product_cat-british-program-digital-format-digital-past-papers-courses product_cat-cambridge-digital-format product_cat-a-level-digital-format product_cat-accounting-digital-format product_cat-digital-past-papers-courses has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide" style="width: 390px;" tabindex="-1" role="tabpanel" id="slick-slide33" aria-describedby="slick-slide-control33" data-slick-index="3" aria-hidden="true">
                                                    <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                        <a href="http://3.92.125.38/product/accounting-_past-papers_igcse_a-level_cambridge_papers-123-2016_2021_question-mark-scheme-digital-format/" class="d-block bwgb-products-carousel__product-image" tabindex="-1"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2022/02/Accoun-3-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                        <div class="media-body ml-4d875">
                                                            <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                    <a href="http://3.92.125.38/product/accounting-_past-papers_igcse_a-level_cambridge_papers-123-2016_2021_question-mark-scheme-digital-format/" tabindex="-1">Accounting _Past Papers_IGCSE_A Level_Cambridge_Papers 1&amp;2&amp;3-(2016_2021)_(Question &amp; Mark Scheme )(Digital Format)</a>
                                                                </h6>
                                                            <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>12.00</bdi>
                                                                </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="js-slide product product__card border-right type-product post-151127 status-publish instock product_cat-a-level-digital-format product_cat-cambridge-digital-format-british-program-digital-summaries-courses product_cat-a-level product_cat-a-level-digital-format-cambridge-digital-format-british-program-digital-summaries-courses product_cat-digital-past-papers-practice-test product_cat-british-program-digital-format product_cat-digital-past-papers-courses product_cat-british-program-digital-format-digital-past-papers-courses product_cat-cambridge product_cat-a-level-cambridge product_cat-cambridge-digital-format has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide" style="width: 390px;" tabindex="-1" role="tabpanel" id="slick-slide34" aria-describedby="slick-slide-control34" data-slick-index="4" aria-hidden="true">
                                                    <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                        <a href="http://3.92.125.38/product/accounting_past-papers_igcse_a-level_cambridge_paper-1_2016_2021_mark-scheme-paperdigital-format/" class="d-block bwgb-products-carousel__product-image" tabindex="-1"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2022/02/Accounting-1-MS-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                        <div class="media-body ml-4d875">
                                                            <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                    <a href="http://3.92.125.38/product/accounting_past-papers_igcse_a-level_cambridge_paper-1_2016_2021_mark-scheme-paperdigital-format/" tabindex="-1">Accounting_Past Papers_IGCSE_A Level_Cambridge_Paper 1_(2016_2021)_(Mark Scheme  Paper)(Digital Format )</a>
                                                                </h6>
                                                            <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>3.00</bdi>
                                                                </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="js-slide product product__card border-right type-product post-151124 status-publish last instock product_cat-digital-past-papers-courses product_cat-british-program-digital-format-digital-past-papers-courses product_cat-cambridge-digital-format product_cat-a-level-digital-format product_cat-accounting-digital-format has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide" style="width: 390px;" tabindex="-1" role="tabpanel" id="slick-slide35" aria-describedby="slick-slide-control35" data-slick-index="5" aria-hidden="true">
                                                    <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                        <a href="http://3.92.125.38/product/accounting_past-papers_igcse_a-level_cambridge_paper-1_2016_2021_questions-paperdigital-format/" class="d-block bwgb-products-carousel__product-image" tabindex="-1"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2022/02/Accounting-1-QP-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                        <div class="media-body ml-4d875">
                                                            <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                    <a href="http://3.92.125.38/product/accounting_past-papers_igcse_a-level_cambridge_paper-1_2016_2021_questions-paperdigital-format/" tabindex="-1">Accounting_Past Papers_IGCSE_A Level_Cambridge_Paper 1_(2016_2021)_(Questions  Paper)(Digital Format )</a>
                                                                </h6>
                                                            <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>3.00</bdi>
                                                                </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="js-slide product product__card border-right type-product post-151146 status-publish first instock product_cat-digital-past-papers-practice-test product_cat-british-program-digital-format product_cat-cambridge-digital-format product_cat-a-level-digital-format product_cat-accounting-digital-format has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide" style="width: 390px;" tabindex="-1" role="tabpanel" id="slick-slide36" aria-describedby="slick-slide-control36" data-slick-index="6" aria-hidden="true">
                                                    <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                        <a href="http://3.92.125.38/product/accounting_past-papers_igcse_a-level_cambridge_paper-2_2016_2021_mark-scheme-paperdigital-format/" class="d-block bwgb-products-carousel__product-image" tabindex="-1"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2022/02/Accounting-2-MS-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                        <div class="media-body ml-4d875">
                                                            <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                    <a href="http://3.92.125.38/product/accounting_past-papers_igcse_a-level_cambridge_paper-2_2016_2021_mark-scheme-paperdigital-format/" tabindex="-1">Accounting_Past Papers_IGCSE_A Level_Cambridge_Paper 2_(2016_2021)_(Mark Scheme  Paper)(Digital Format )</a>
                                                                </h6>
                                                            <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>3.00</bdi>
                                                                </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="u-slick__pagination2"></div>
                                    </div>
                               <!-- </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            <!----Digital Past Papers & Practice Test block end-->

            <!----University Books block start-->

            <div id="bwgb-17422aa" class="wp-block-bwgb-products-carousel bwgb-products-carousel space-bottom-3 bwgb-17422aa bwgb-products-carousel__style-v1">
                <div class="wp-block-bwgb-products-carousel__inner container">
                    <header class="justify-content-between align-items-center bwgb-products-carousel__block-header mb-5 d-md-flex">
                        <h2 class="bwgb-products-carousel__block-title font-size-7 mb-3 mb-md-0"><a href="http://3.92.125.38/book-category/books/university-books/">University Books</a></h2> <a class="h-primary d-block bwgb-products-carousel__block-action-text" href="http://3.92.125.38/book-category/books/university-books/">View All<i class="flaticon flaticon-next ml-1"></i></a></header>
                    <div class="wp-block-bwgb-products-carousel__content_aks">
                        <div>
                            <div class="woocommerce columns-3 ">
                                <div class="js-slick-carousel u-slick--equal-height u-slick products border slick-slider slick-slider-3 slick-dotted" data-slides-show="3" data-slides-scroll="1" data-speed="4000" data-force-unslick="1" data-pagi-classes="text-center u-slick__pagination position-absolute right-0 left-0" data-responsive='[{"breakpoint":1479.98000000000001818989403545856475830078125,"settings":{"slidesToShow":3}},{"breakpoint":1199.98000000000001818989403545856475830078125,"settings":{"slidesToShow":2}},{"breakpoint":991.98000000000001818989403545856475830078125,"settings":{"slidesToShow":2}},{"breakpoint":575.98000000000001818989403545856475830078125,"settings":{"slidesToShow":1}}]'>
                                   
                                            <div class="js-slide product product__card border-right type-product post-202824 status-publish first instock product_cat-engineering product_cat-biomedical-engineering product_cat-university-books has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide slick-current slick-active" style="width: 390px;" tabindex="0" role="tabpanel" id="slick-slide60" aria-describedby="slick-slide-control60" data-slick-index="0" aria-hidden="false">
                                                <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                    <a href="http://3.92.125.38/product/advanced-engineering-mathematics-3/" class="d-block bwgb-products-carousel__product-image" tabindex="0"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2022/08/image-47-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                    <div class="media-body ml-4d875">
                                                        <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                <a href="http://3.92.125.38/product/advanced-engineering-mathematics-3/" tabindex="0">Advanced Engineering Mathematics</a>
                                                            </h6>
                                                        <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>11.67</bdi>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="js-slide product product__card border-right type-product post-50397 status-publish instock product_cat-engineering has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide slick-active" style="width: 390px;" tabindex="0" role="tabpanel" id="slick-slide61" aria-describedby="slick-slide-control61" data-slick-index="1" aria-hidden="false">
                                                <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                    <a href="http://3.92.125.38/product/applied-thermodynamics-for-engineering-technologists/" class="d-block bwgb-products-carousel__product-image" tabindex="0"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2021/08/image-252-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                    <div class="media-body ml-4d875">
                                                        <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                <a href="http://3.92.125.38/product/applied-thermodynamics-for-engineering-technologists/" tabindex="0">Applied thermodynamics for engineering technologists</a>
                                                            </h6>
                                                        <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>60.00</bdi>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="js-slide product product__card border-right type-product post-201945 status-publish last instock product_cat-mechanical-engineering product_cat-university-books product_cat-engineering has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide slick-active" style="width: 390px;" tabindex="0" role="tabpanel" id="slick-slide62" aria-describedby="slick-slide-control62" data-slick-index="2" aria-hidden="false">
                                                <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                    <a href="http://3.92.125.38/product/automobile-mechanical-and-electrical-systems/" class="d-block bwgb-products-carousel__product-image" tabindex="0"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2022/08/1660160374530676896512-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                    <div class="media-body ml-4d875">
                                                        <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                <a href="http://3.92.125.38/product/automobile-mechanical-and-electrical-systems/" tabindex="0">Automobile mechanical and electrical systems</a>
                                                            </h6>
                                                        <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>30.77</bdi>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="js-slide product product__card border-right type-product post-40373 status-publish first instock product_cat-engineering has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide" style="width: 390px;" tabindex="-1" role="tabpanel" id="slick-slide63" aria-describedby="slick-slide-control63" data-slick-index="3" aria-hidden="true">
                                                <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                    <a href="http://3.92.125.38/product/barrons-sat-subject-test-math-level-2-with-cd-rom-11th-edition-condition-is-very-good/" class="d-block bwgb-products-carousel__product-image" tabindex="-1"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2021/06/image-66-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                    <div class="media-body ml-4d875">
                                                        <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                <a href="http://3.92.125.38/product/barrons-sat-subject-test-math-level-2-with-cd-rom-11th-edition-condition-is-very-good/" tabindex="-1">Barron’s SAT Subject Test Math Level 2 with CD-ROM, 11th Edition. Condition is Very Good.</a>
                                                            </h6>
                                                        <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>30.00</bdi>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="js-slide product product__card border-right type-product post-202197 status-publish instock product_cat-university-books product_cat-engineering product_cat-civil-engineering has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide" style="width: 390px;" tabindex="-1" role="tabpanel" id="slick-slide64" aria-describedby="slick-slide-control64" data-slick-index="4" aria-hidden="true">
                                                <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                    <a href="http://3.92.125.38/product/building-construction/" class="d-block bwgb-products-carousel__product-image" tabindex="-1"><img width="120" height="150" src="http://3.92.125.38/wp-content/uploads/2022/08/1660301303299498154369-150x150-1-120x150.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                    <div class="media-body ml-4d875">
                                                        <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                <a href="http://3.92.125.38/product/building-construction/" tabindex="-1">Building construction</a>
                                                            </h6>
                                                        <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>38.46</bdi>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-slick__pagination3"></div>
                                </div>
                           
                    </div>
                </div>
            </div>                                                


             <!----University Books block end-->

             <!----Kids Stories block start-->



             <div id="bwgb-716c324" class="wp-block-bwgb-products-carousel bwgb-products-carousel space-bottom-3 bwgb-716c324 bwgb-products-carousel__style-v1">
                <div class="wp-block-bwgb-products-carousel__inner container">
                    <header class="justify-content-between align-items-center bwgb-products-carousel__block-header mb-5 d-md-flex">
                        <h2 class="bwgb-products-carousel__block-title font-size-7 mb-3 mb-md-0"><a href="http://3.92.125.38/book-category/books/kids-products/">Kids Stories</a></h2> <a class="h-primary d-block bwgb-products-carousel__block-action-text" href="http://3.92.125.38/book-category/books/kids-products/">View All<i class="flaticon flaticon-next ml-1"></i></a></header>
                    <div class="wp-block-bwgb-products-carousel__content_aks">
                        <div>
                            <div class="woocommerce columns-3 ">
                                <div class="js-slick-carousel u-slick--equal-height u-slick products border slick-slider slick-slider-4 slick-dotted" data-slides-show="3" data-slides-scroll="1" data-speed="4000" data-force-unslick="1" data-pagi-classes="text-center u-slick__pagination position-absolute right-0 left-0" data-responsive="[{&quot;breakpoint&quot;:1479.98000000000001818989403545856475830078125,&quot;settings&quot;:{&quot;slidesToShow&quot;:3}},{&quot;breakpoint&quot;:1199.98000000000001818989403545856475830078125,&quot;settings&quot;:{&quot;slidesToShow&quot;:2}},{&quot;breakpoint&quot;:991.98000000000001818989403545856475830078125,&quot;settings&quot;:{&quot;slidesToShow&quot;:2}},{&quot;breakpoint&quot;:575.98000000000001818989403545856475830078125,&quot;settings&quot;:{&quot;slidesToShow&quot;:1}}]">
                                    
                                            <div class="js-slide product product__card border-right type-product post-65104 status-publish first instock product_cat-kids-products has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide slick-current slick-active" style="width: 390px;" tabindex="0" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00" data-slick-index="0" aria-hidden="false">
                                                <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                    <a href="http://3.92.125.38/product/abraham-and-ismael/" class="d-block bwgb-products-carousel__product-image" tabindex="0"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2021/10/IMG_1010-2-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                    <div class="media-body ml-4d875">
                                                        <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                <a href="http://3.92.125.38/product/abraham-and-ismael/" tabindex="0">ABRAHAM AND ISMAEL</a>
                                                            </h6>
                                                        <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>3.00</bdi>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="js-slide product product__card border-right type-product post-65121 status-publish instock product_cat-kids-products has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide slick-active" style="width: 390px;" tabindex="0" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01" data-slick-index="1" aria-hidden="false">
                                                <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                    <a href="http://3.92.125.38/product/adam/" class="d-block bwgb-products-carousel__product-image" tabindex="0"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2021/10/IMG_1006-2-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                    <div class="media-body ml-4d875">
                                                        <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                <a href="http://3.92.125.38/product/adam/" tabindex="0">ADAM</a>
                                                            </h6>
                                                        <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>3.00</bdi>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="js-slide product product__card border-right type-product post-65051 status-publish last instock product_cat-kids-products has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide slick-active" style="width: 390px;" tabindex="0" role="tabpanel" id="slick-slide02" aria-describedby="slick-slide-control02" data-slick-index="2" aria-hidden="false">
                                                <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                    <a href="http://3.92.125.38/product/alice-wonderland-%d8%a3%d9%84%d9%8a%d8%b3-%d9%81%d9%8a-%d8%a8%d9%84%d8%a7%d8%af-%d8%a7%d9%84%d8%b9%d8%ac%d8%a7%d8%a6%d8%a8/" class="d-block bwgb-products-carousel__product-image" tabindex="0"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2021/10/IMG_1022-2-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                    <div class="media-body ml-4d875">
                                                        <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                <a href="http://3.92.125.38/product/alice-wonderland-%d8%a3%d9%84%d9%8a%d8%b3-%d9%81%d9%8a-%d8%a8%d9%84%d8%a7%d8%af-%d8%a7%d9%84%d8%b9%d8%ac%d8%a7%d8%a6%d8%a8/" tabindex="0">Alice Wonderland أليس في بلاد العجائب</a>
                                                            </h6>
                                                        <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>3.00</bdi>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="js-slide product product__card border-right type-product post-64939 status-publish first instock product_cat-kids-products shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide" style="width: 390px;" tabindex="-1" role="tabpanel" id="slick-slide03" aria-describedby="slick-slide-control03" data-slick-index="3" aria-hidden="true">
                                                <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                    <a href="http://3.92.125.38/product/bill-gates-%d8%a8%d9%8a%d9%84-%d8%ac%d9%8a%d8%aa%d8%b3/" class="d-block bwgb-products-carousel__product-image" tabindex="-1"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/woocommerce-placeholder-120x183.png" class="woocommerce-placeholder wp-post-image" alt="Placeholder" loading="lazy"></a>
                                                    <div class="media-body ml-4d875">
                                                        <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                <a href="http://3.92.125.38/product/bill-gates-%d8%a8%d9%8a%d9%84-%d8%ac%d9%8a%d8%aa%d8%b3/" tabindex="-1">BILL GATES بيل جيتس</a>
                                                            </h6>
                                                        <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>3.00</bdi>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="js-slide product product__card border-right type-product post-64934 status-publish instock product_cat-kids-products shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide" style="width: 390px;" tabindex="-1" role="tabpanel" id="slick-slide04" aria-describedby="slick-slide-control04" data-slick-index="4" aria-hidden="true">
                                                <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                    <a href="http://3.92.125.38/product/christopher-columbus-%d9%83%d8%b1%d9%8a%d8%b3%d8%aa%d9%88%d9%81%d8%b1-%d9%83%d9%88%d9%84%d9%88%d9%85%d8%a8%d9%88%d8%b3/" class="d-block bwgb-products-carousel__product-image" tabindex="-1"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/woocommerce-placeholder-120x183.png" class="woocommerce-placeholder wp-post-image" alt="Placeholder" loading="lazy"></a>
                                                    <div class="media-body ml-4d875">
                                                        <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                <a href="http://3.92.125.38/product/christopher-columbus-%d9%83%d8%b1%d9%8a%d8%b3%d8%aa%d9%88%d9%81%d8%b1-%d9%83%d9%88%d9%84%d9%88%d9%85%d8%a8%d9%88%d8%b3/" tabindex="-1">CHRISTOPHER COLUMBUS كريستوفر كولومبوس</a>
                                                            </h6>
                                                        <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>3.00</bdi>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="js-slide product product__card border-right type-product post-65055 status-publish last instock product_cat-kids-products has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide" style="width: 390px;" tabindex="-1" role="tabpanel" id="slick-slide05" aria-describedby="slick-slide-control05" data-slick-index="5" aria-hidden="true">
                                                <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                    <a href="http://3.92.125.38/product/cindrella-%d8%b3%d9%86%d8%af%d8%b1%d9%8a%d9%84%d8%a7/" class="d-block bwgb-products-carousel__product-image" tabindex="-1"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2021/10/IMG_1021-2-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="سندريلا" loading="lazy"></a>
                                                    <div class="media-body ml-4d875">
                                                        <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                <a href="http://3.92.125.38/product/cindrella-%d8%b3%d9%86%d8%af%d8%b1%d9%8a%d9%84%d8%a7/" tabindex="-1">Cindrella سندريلا</a>
                                                            </h6>
                                                        <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>3.00</bdi>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="js-slide product product__card border-right type-product post-65133 status-publish first instock product_cat-kids-products has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide" style="width: 390px;" tabindex="-1" role="tabpanel" id="slick-slide06" aria-describedby="slick-slide-control06" data-slick-index="6" aria-hidden="true">
                                                <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                    <a href="http://3.92.125.38/product/david-and-solomon/" class="d-block bwgb-products-carousel__product-image" tabindex="-1"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2021/10/IMG_1001-2-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                    <div class="media-body ml-4d875">
                                                        <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                                <a href="http://3.92.125.38/product/david-and-solomon/" tabindex="-1">DAVID AND SOLOMON</a>
                                                            </h6>
                                                        <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>3.00</bdi>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-slick__pagination4"></div>
                                </div>
                            
                    </div>
                </div>
            </div>
            <!----Kids Stories block start-->

            <!----Other Books block start-->
            
            <div id="bwgb-a858c38" class="wp-block-bwgb-products-carousel bwgb-products-carousel space-bottom-3 bwgb-a858c38 bwgb-products-carousel__style-v1">
                <div class="wp-block-bwgb-products-carousel__inner container">
                    <header class="justify-content-between align-items-center bwgb-products-carousel__block-header mb-5 d-md-flex">
                        <h2 class="bwgb-products-carousel__block-title font-size-7 mb-3 mb-md-0">Other Books</h2> <a class="h-primary d-block bwgb-products-carousel__block-action-text" href="#">View All<i class="flaticon flaticon-next ml-1"></i></a></header>
                <div class="wp-block-bwgb-products-carousel__content_aks">
                    <div>
                        <div class="woocommerce columns-3 ">
                            <div class="js-slick-carousel u-slick--equal-height u-slick products border slick-slider slick-slider-5  slick-dotted" data-slides-show="3" data-slides-scroll="1" data-speed="4000" data-force-unslick="1" data-pagi-classes="text-center u-slick__pagination position-absolute right-0 left-0" data-responsive="[{&quot;breakpoint&quot;:1479.98000000000001818989403545856475830078125,&quot;settings&quot;:{&quot;slidesToShow&quot;:3}},{&quot;breakpoint&quot;:1199.98000000000001818989403545856475830078125,&quot;settings&quot;:{&quot;slidesToShow&quot;:2}},{&quot;breakpoint&quot;:991.98000000000001818989403545856475830078125,&quot;settings&quot;:{&quot;slidesToShow&quot;:2}},{&quot;breakpoint&quot;:575.98000000000001818989403545856475830078125,&quot;settings&quot;:{&quot;slidesToShow&quot;:1}}]">
                               
                                        <div class="js-slide product product__card border-right type-product post-35838 status-publish first instock product_cat-biology-university-books has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide slick-current slick-active" style="width: 390px;" tabindex="0" role="tabpanel" id="slick-slide20" aria-describedby="slick-slide-control20" data-slick-index="0" aria-hidden="false">
                                            <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                <a href="http://3.92.125.38/product/ap-biology-barrons/" class="d-block bwgb-products-carousel__product-image" tabindex="0"><img width="1" height="1" src="http://3.92.125.38/wp-content/uploads/2021/05/image-1.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                <div class="media-body ml-4d875">
                                                    <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                            <a href="http://3.92.125.38/product/ap-biology-barrons/" tabindex="0">AP Biology Barron’s</a>
                                                        </h6>
                                                    <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>15.00</bdi>
                                                        </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="js-slide product product__card border-right type-product post-185082 status-publish instock product_cat-university-books product_cat-basic-science has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide slick-active" style="width: 390px;" tabindex="0" role="tabpanel" id="slick-slide21" aria-describedby="slick-slide-control21" data-slick-index="1" aria-hidden="false">
                                            <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                <a href="http://3.92.125.38/product/the-classical-music-book/" class="d-block bwgb-products-carousel__product-image" tabindex="0"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2022/07/image-15-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                <div class="media-body ml-4d875">
                                                    <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                            <a href="http://3.92.125.38/product/the-classical-music-book/" tabindex="0">The classical music book</a>
                                                        </h6>
                                                    <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>30.77</bdi>
                                                        </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="js-slide product product__card border-right type-product post-151265 status-publish last instock product_cat-university-books product_cat-basic-science product_cat-anatomy has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide slick-active" style="width: 390px;" tabindex="0" role="tabpanel" id="slick-slide22" aria-describedby="slick-slide-control22" data-slick-index="2" aria-hidden="false">
                                            <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                <a href="http://3.92.125.38/product/essential-of-human-anatomy-and-physiology/" class="d-block bwgb-products-carousel__product-image" tabindex="0"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2022/02/81Zav5SzQ1L-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                <div class="media-body ml-4d875">
                                                    <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                            <a href="http://3.92.125.38/product/essential-of-human-anatomy-and-physiology/" tabindex="0">Essential of human anatomy and physiology</a>
                                                        </h6>
                                                    <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>23.08</bdi>
                                                        </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="js-slide product product__card border-right type-product post-50367 status-publish first instock product_cat-basic-science product_cat-biology-university-books has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide" style="width: 390px;" tabindex="-1" role="tabpanel" id="slick-slide23" aria-describedby="slick-slide-control23" data-slick-index="3" aria-hidden="true">
                                            <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                <a href="http://3.92.125.38/product/science-fusion-the-human-body/" class="d-block bwgb-products-carousel__product-image" tabindex="-1"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2021/08/image-245-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                <div class="media-body ml-4d875">
                                                    <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                            <a href="http://3.92.125.38/product/science-fusion-the-human-body/" tabindex="-1">Science fusion the human body</a>
                                                        </h6>
                                                    <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>5.00</bdi>
                                                        </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="js-slide product product__card border-right type-product post-201563 status-publish instock product_cat-basic-science product_cat-genetics product_cat-university-books has-post-thumbnail shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide" style="width: 390px;" tabindex="-1" role="tabpanel" id="slick-slide24" aria-describedby="slick-slide-control24" data-slick-index="4" aria-hidden="true">
                                            <div class="media p-3 p-md-4d875 w-100 bg-white">
                                                <a href="http://3.92.125.38/product/molecular-biology-of-the-gene/" class="d-block bwgb-products-carousel__product-image" tabindex="-1"><img width="120" height="183" src="http://3.92.125.38/wp-content/uploads/2022/08/20220802_182027-2-120x183.jpg" class="attachment-bookworm-120x183-crop size-bookworm-120x183-crop" alt="" loading="lazy"></a>
                                                <div class="media-body ml-4d875">
                                                    <h6 class="bwgb-products-carousel__product-title woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                            <a href="http://3.92.125.38/product/molecular-biology-of-the-gene/" tabindex="-1">Molecular Biology of the Gene</a>
                                                        </h6>
                                                    <div class="bwgb-products-carousel__product-price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>71.43</bdi>
                                                        </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="u-slick__pagination5"></div>
                            </div>
                       
                </div>
            </div>
        </div>

        <!----Other Books block end-->


        <!----Deals of the week block start-->
        <div id="bwgb-b63efe8" class="wp-block-bwgb-group bwgb-group space-bottom-3">
        <div id="bwgb-bf8bfaf" class="wp-block-bwgb-products-deals-carousel bwgb-products-deals-carousel space-top-3 space-bottom-4 bwgb-bf8bfaf bwgb-products-deals-carousel__style-v1 bg-gray-200">
            <div class="wp-block-bwgb-products-deals-carousel__inner container">
                <header class="bwgb-products-deals-carousel__block-header d-md-flex justify-content-between align-items-center mb-5">
                    <h2 class="bwgb-products-deals-carousel__block-title font-size-7 mb-3 mb-md-0">Deals of the Week</h2> <a class="bwgb-products-deals-carousel__block-action-text d-flex align-items-center h-primary" href="#">View All<i class="flaticon flaticon-next ml-1"></i></a></header>
                <div class="wp-block-bwgb-products-deals-carousel__content_aks" >
                    <div>
                        <div class="woocommerce columns-3 ">
                            <div class="js-slick-carousel u-slick u-slick--equal-height bg-white border products  slick-slider slick-slider-6" data-slides-show="2" data-slides-scroll="1" data-speed="4000" data-force-unslick="1" data-arrows-classes="u-slick__arrow u-slick__arrow-centered--y" data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n4 ml-xl-n10" data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n4 mr-xl-n10" data-responsive='[{&quot;breakpoint&quot;:1199.98000000000001818989403545856475830078125,&quot;settings&quot;:{&quot;slidesToShow&quot;:2}},{&quot;breakpoint&quot;:991.98000000000001818989403545856475830078125,&quot;settings&quot;:{&quot;slidesToShow&quot;:2}},{&quot;breakpoint&quot;:575.98000000000001818989403545856475830078125,&quot;settings&quot;:{&quot;slidesToShow&quot;:1}}]'>
                               <!-- <div class="js-prev u-slick__arrow u-slick__arrow-centered--y fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n4 ml-xl-n10 slick-arrow" aria-disabled="false" style=""></div>-->
                               
                                        <div class="js-slide product product__card border-right type-product post-14881 status-publish first instock product_cat-school-books product_cat-physics product_cat-books has-post-thumbnail sale shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide" style="width: 584px;" tabindex="-1" data-slick-index="0" aria-hidden="true">
                                            <div class="media d-block d-md-flex w-100 p-md-6 p-4">
                                                <div class="woocommerce-loop-product__thumbnail mb-4 mb-md-0">
                                                    <a href="http://3.92.125.38/product/alpha-science-grade-3-student-book-d-physical-science-1-year-digital-access/" class="d-block bwgb-products-deals-carousel__product-image" tabindex="-1"><img width="200" height="248" src="http://3.92.125.38/wp-content/uploads/2020/02/Cover-Al-Pha-Science_-Grade3_D.png" class="attachment-bookworm-200x327-crop size-bookworm-200x327-crop" alt="" loading="lazy"></a>
                                                </div>
                                                <div class="woocommerce-loop-product__body media-body ml-md-5d25">
                                                    <div class="mb-3">
                                                        <h2 class="bwgb-products-deals-carousel__product-title woocommerce-loop-product__title font-size-3 text-lh-md mb-2 text-height-2 crop-text-2 h-dark">
                                                                    <a href="http://3.92.125.38/product/alpha-science-grade-3-student-book-d-physical-science-1-year-digital-access/" tabindex="-1">Alpha Science Grade 3 Student Book D: Physical Science + 1 Year Digital Access</a>
                                                                </h2>
                                                        <div class="bwgb-products-deals-carousel__product-price price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><ins class="text-decoration-none mr-2"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>9.00</bdi>
                                                            </span>
                                                            </ins><del class="font-size-1 font-weight-regular text-gray-700"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>18.00</bdi></span></del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="js-slide product product__card border-right type-product post-12771 status-publish instock product_cat-books product_cat-school-books product_cat-mathematics has-post-thumbnail sale shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide" style="width: 584px;" tabindex="-1" data-slick-index="1" aria-hidden="true">
                                            <div class="media d-block d-md-flex w-100 p-md-6 p-4">
                                                <div class="woocommerce-loop-product__thumbnail mb-4 mb-md-0">
                                                    <a href="http://3.92.125.38/product/barrons-ap-calculus-14th-edition/" class="d-block bwgb-products-deals-carousel__product-image" tabindex="-1"><img width="200" height="259" src="http://3.92.125.38/wp-content/uploads/2020/01/5132zK2hfAL._SX383_BO1204203200_.jpg" class="attachment-bookworm-200x327-crop size-bookworm-200x327-crop" alt="" loading="lazy"></a>
                                                </div>
                                                <div class="woocommerce-loop-product__body media-body ml-md-5d25">
                                                    <div class="mb-3">
                                                        <h2 class="bwgb-products-deals-carousel__product-title woocommerce-loop-product__title font-size-3 text-lh-md mb-2 text-height-2 crop-text-2 h-dark">
                                                                    <a href="http://3.92.125.38/product/barrons-ap-calculus-14th-edition/" tabindex="-1">Barron’s AP Calculus, 14th Edition</a>
                                                                </h2>
                                                        <div class="bwgb-products-deals-carousel__product-price price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><ins class="text-decoration-none mr-2"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>14.00</bdi>
                                                            </span>
                                                            </ins><del class="font-size-1 font-weight-regular text-gray-700"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>25.00</bdi></span></del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="js-slide product product__card border-right type-product post-31838 status-publish last instock product_cat-books product_cat-school-books product_cat-chemistry has-post-thumbnail sale shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide slick-current slick-active" style="width: 584px;" tabindex="0" data-slick-index="2" aria-hidden="false">
                                            <div class="media d-block d-md-flex w-100 p-md-6 p-4">
                                                <div class="woocommerce-loop-product__thumbnail mb-4 mb-md-0">
                                                    <a href="http://3.92.125.38/product/holt-chemistry-34/" class="d-block bwgb-products-deals-carousel__product-image" tabindex="0"><img width="200" height="222" src="http://3.92.125.38/wp-content/uploads/2020/01/SX-9780547353876-500x554-1.jpg" class="attachment-bookworm-200x327-crop size-bookworm-200x327-crop" alt="" loading="lazy"></a>
                                                </div>
                                                <div class="woocommerce-loop-product__body media-body ml-md-5d25">
                                                    <div class="mb-3">
                                                        <h2 class="bwgb-products-deals-carousel__product-title woocommerce-loop-product__title font-size-3 text-lh-md mb-2 text-height-2 crop-text-2 h-dark">
                                                                    <a href="http://3.92.125.38/product/holt-chemistry-34/" tabindex="0">Holt Chemistry</a>
                                                                </h2>
                                                        <div class="bwgb-products-deals-carousel__product-price price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><ins class="text-decoration-none mr-2"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>46.00</bdi>
                                                            </span>
                                                            </ins><del class="font-size-1 font-weight-regular text-gray-700"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>90.00</bdi></span></del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="js-slide product product__card border-right type-product post-11666 status-publish first instock product_cat-books product_cat-school-books product_cat-biology has-post-thumbnail sale shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide slick-active" style="width: 584px;" tabindex="0" data-slick-index="3" aria-hidden="false">
                                            <div class="media d-block d-md-flex w-100 p-md-6 p-4">
                                                <div class="woocommerce-loop-product__thumbnail mb-4 mb-md-0">
                                                    <a href="http://3.92.125.38/product/holt-mcdougal-biology-student-edition-2012-33/" class="d-block bwgb-products-deals-carousel__product-image" tabindex="0"><img width="200" height="255" src="http://3.92.125.38/wp-content/uploads/2019/12/30-4.jpg" class="attachment-bookworm-200x327-crop size-bookworm-200x327-crop" alt="" loading="lazy"></a>
                                                </div>
                                                <div class="woocommerce-loop-product__body media-body ml-md-5d25">
                                                    <div class="mb-3">
                                                        <h2 class="bwgb-products-deals-carousel__product-title woocommerce-loop-product__title font-size-3 text-lh-md mb-2 text-height-2 crop-text-2 h-dark">
                                                                    <a href="http://3.92.125.38/product/holt-mcdougal-biology-student-edition-2012-33/" tabindex="0">Holt McDougal Biology: Student Edition 2012</a>
                                                                </h2>
                                                        <div class="bwgb-products-deals-carousel__product-price price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><ins class="text-decoration-none mr-2"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>42.00</bdi>
                                                            </span>
                                                            </ins><del class="font-size-1 font-weight-regular text-gray-700"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>90.00</bdi></span></del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="js-slide product product__card border-right type-product post-22234 status-publish instock product_cat-books product_cat-school-books product_cat-mathematics has-post-thumbnail sale shipping-taxable purchasable product-type-simple add-to-wishlist-after_add_to_cart slick-slide" style="width: 584px;" tabindex="-1" data-slick-index="4" aria-hidden="true">
                                            <div class="media d-block d-md-flex w-100 p-md-6 p-4">
                                                <div class="woocommerce-loop-product__thumbnail mb-4 mb-md-0">
                                                    <a href="http://3.92.125.38/product/precalculus-graphical-numerical-algebraic-global-edition-2/" class="d-block bwgb-products-deals-carousel__product-image" tabindex="-1"><img width="200" height="255" src="http://3.92.125.38/wp-content/uploads/2020/01/518ePErO7L._SX390_BO1204203200_.jpg" class="attachment-bookworm-200x327-crop size-bookworm-200x327-crop" alt="" loading="lazy"></a>
                                                </div>
                                                <div class="woocommerce-loop-product__body media-body ml-md-5d25">
                                                    <div class="mb-3">
                                                        <h2 class="bwgb-products-deals-carousel__product-title woocommerce-loop-product__title font-size-3 text-lh-md mb-2 text-height-2 crop-text-2 h-dark">
                                                                    <a href="http://3.92.125.38/product/precalculus-graphical-numerical-algebraic-global-edition-2/" tabindex="-1">Precalculus: Graphical, Numerical, Algebraic, Global Edition</a>
                                                                </h2>
                                                        <div class="bwgb-products-deals-carousel__product-price price d-flex align-items-center font-weight-medium font-size-3"> <span class="price"><ins class="text-decoration-none mr-2"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>32.00</bdi>
                                                            </span>
                                                            </ins><del class="font-size-1 font-weight-regular text-gray-700"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">JD</span>55.00</bdi></span></del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                    </div>
                                </div>
                                <!--<div class="js-next u-slick__arrow u-slick__arrow-centered--y fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n4 mr-xl-n10 slick-arrow" style="" aria-disabled="false"></div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                                    </div>
        <!----Deals of the week block end-->

        <!----Customer review & our social block start-->
        <div id="bwgb-1f52c44" class="wp-block-bwgb-group bwgb-group">
            <div class="wp-block-spacer" style="height: 100px;" aria-hidden="true">&nbsp;</div>
            <h2 id="h-our-customer-s-reviews" class="has-text-align-center"><a href="https://web.facebook.com/Alefredobooks/reviews/?ref=page_internal" target="_blank" rel="noopener">Our Customer’s Reviews</a></h2>
            <hr class="wp-block-separator">
            <div id="gks-slider-4" data-gks-id="4" class="gks-slider-layout gks-slider-carousel-layout"> <a class="gks-slider-ctrl gks-slider-ctrl-prev"><i class="fa gks-fa fa-angle-left"></i></a> <a class="gks-slider-ctrl gks-slider-ctrl-next"><i class="fa gks-fa fa-angle-right"></i></a>
                <div class="owl-carousel gks-carousel owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-2546px, 0px, 0px); transition: all 4.2s ease 0s; width: 5518px;">
                            <div class="owl-item" style="width: 414.443px; margin-right: 10px;">
                                <div id="0" class="gks-slider-cell image-none " data-type="pic" data-index="0" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="https://www.facebook.com/Alefredobooks/reviews/">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/rev1-e1638266319982.jpeg);"> </div>
                                            <a href="https://www.facebook.com/Alefredobooks/reviews/" class="gks-slider-button">
                                                <div class="gks-slider-button-icon"><i class="fa gks-fa fa-star"></i></div>
                                            </a>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 414.443px; margin-right: 10px;">
                                <div id="1" class="gks-slider-cell image-none " data-type="pic" data-index="1" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="https://www.facebook.com/Alefredobooks/reviews/">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/rev3-e1638266563270.jpeg);"> </div>
                                            <a href="https://www.facebook.com/Alefredobooks/reviews/" class="gks-slider-button">
                                                <div class="gks-slider-button-icon"><i class="fa gks-fa fa-star"></i></div>
                                            </a>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 414.443px; margin-right: 10px;">
                                <div id="2" class="gks-slider-cell image-none " data-type="pic" data-index="2" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="https://www.facebook.com/Alefredobooks/reviews/">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/rev10-e1638266947903.jpeg);"> </div>
                                            <a href="https://www.facebook.com/Alefredobooks/reviews/" class="gks-slider-button">
                                                <div class="gks-slider-button-icon"><i class="fa gks-fa fa-star"></i></div>
                                            </a>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 414.443px; margin-right: 10px;">
                                <div id="3" class="gks-slider-cell image-none " data-type="pic" data-index="3" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="https://www.facebook.com/Alefredobooks/reviews/">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/12/rev12-e1638436648348.jpeg);"> </div>
                                            <a href="https://www.facebook.com/Alefredobooks/reviews/" class="gks-slider-button">
                                                <div class="gks-slider-button-icon"><i class="fa gks-fa fa-star"></i></div>
                                            </a>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 414.443px; margin-right: 10px;">
                                <div id="4" class="gks-slider-cell image-none " data-type="pic" data-index="4" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="https://www.facebook.com/Alefredobooks/reviews/">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/12/rev13-e1638436684663.jpeg);"> </div>
                                            <a href="https://www.facebook.com/Alefredobooks/reviews/" class="gks-slider-button">
                                                <div class="gks-slider-button-icon"><i class="fa gks-fa fa-star"></i></div>
                                            </a>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 414.443px; margin-right: 10px;">
                                <div id="5" class="gks-slider-cell image-none " data-type="pic" data-index="5" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="https://www.facebook.com/Alefredobooks/reviews/">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/rev.jpeg);"> </div>
                                            <a href="https://www.facebook.com/Alefredobooks/reviews/" class="gks-slider-button">
                                                <div class="gks-slider-button-icon"><i class="fa gks-fa fa-star"></i></div>
                                            </a>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 414.443px; margin-right: 10px;">
                                <div id="6" class="gks-slider-cell image-none " data-type="pic" data-index="6" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="https://www.facebook.com/Alefredobooks/reviews/">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/rev2-e1638266353595.jpeg);"> </div>
                                            <a href="https://www.facebook.com/Alefredobooks/reviews/" class="gks-slider-button">
                                                <div class="gks-slider-button-icon"><i class="fa gks-fa fa-star"></i></div>
                                            </a>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 414.443px; margin-right: 10px;">
                                <div id="7" class="gks-slider-cell image-none " data-type="pic" data-index="7" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="https://www.facebook.com/Alefredobooks/reviews/">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/12/rev11-e1638436608998.jpeg);"> </div>
                                            <a href="https://www.facebook.com/Alefredobooks/reviews/" class="gks-slider-button">
                                                <div class="gks-slider-button-icon"><i class="fa gks-fa fa-star"></i></div>
                                            </a>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 414.443px; margin-right: 10px;">
                                <div id="8" class="gks-slider-cell image-none " data-type="pic" data-index="8" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="https://www.facebook.com/Alefredobooks/reviews/">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/rev9-e1638266883982.jpeg);"> </div>
                                            <a href="https://www.facebook.com/Alefredobooks/reviews/" class="gks-slider-button">
                                                <div class="gks-slider-button-icon"><i class="fa gks-fa fa-star"></i></div>
                                            </a>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 414.443px; margin-right: 10px;">
                                <div id="9" class="gks-slider-cell image-none " data-type="pic" data-index="9" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="https://www.facebook.com/Alefredobooks/reviews/">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/rev4-e1638266608695.jpeg);"> </div>
                                            <a href="https://www.facebook.com/Alefredobooks/reviews/" class="gks-slider-button">
                                                <div class="gks-slider-button-icon"><i class="fa gks-fa fa-star"></i></div>
                                            </a>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 414.443px; margin-right: 10px;">
                                <div id="10" class="gks-slider-cell image-none " data-type="pic" data-index="10" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="https://www.facebook.com/Alefredobooks/reviews/">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/rev6-e1638266735580.jpeg);"> </div>
                                            <a href="https://www.facebook.com/Alefredobooks/reviews/" class="gks-slider-button">
                                                <div class="gks-slider-button-icon"><i class="fa gks-fa fa-star"></i></div>
                                            </a>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 414.443px; margin-right: 10px;">
                                <div id="11" class="gks-slider-cell image-none " data-type="pic" data-index="11" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="https://www.facebook.com/Alefredobooks/reviews/">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/rev5-e1638266676289.jpeg);"> </div>
                                            <a href="https://www.facebook.com/Alefredobooks/reviews/" class="gks-slider-button">
                                                <div class="gks-slider-button-icon"><i class="fa gks-fa fa-star"></i></div>
                                            </a>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 414.443px; margin-right: 10px;">
                                <div id="12" class="gks-slider-cell image-none " data-type="pic" data-index="12" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="https://www.facebook.com/Alefredobooks/reviews/">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/rev8-e1638266817283.jpeg);"> </div>
                                            <a href="https://www.facebook.com/Alefredobooks/reviews/" class="gks-slider-button">
                                                <div class="gks-slider-button-icon"><i class="fa gks-fa fa-star"></i></div>
                                            </a>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled">
                        <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                        <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                    </div>
                    
                </div>
            </div>
            <script>
            jQuery(document).ready(function() {
                var slideSpeed = 700;
                var settings = {
                    responsiveBaseElement: '.gks-slider-layout',
                    lazyLoad: false,
                    items: 1,
                    margin: 10,
                    center: false,
                    loop: false,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    autoplayHoverPause: false,
                    mouseDrag: true,
                    touchDrag: true,
                    nav: false,
                    dots: true,
                    dotsEach: false,
                    smartSpeed: slideSpeed,
                    fluidSpeed: slideSpeed
                };
                settings.responsive = {
                    0: {
                        items: 1
                    },
                    421: {
                        items: 2
                    },
                    769: {
                        items: 3
                    },
                    1281: {
                        items: 3
                    }
                };
                settings.slideBy = 1;
                settings.onInitialized = function() {};
                var gksSlider = jQuery('#gks-slider-4 .owl-carousel').owlCarousel(settings);
                gksSlider.on('changed.owl.carousel', function(property) {
                    gks_destroyPlayer();
                    if(false) {
                        var current = property.item.index;
                        var target = jQuery(property.target).find(".owl-item").eq(current).find(".gks-slider-cell");
                        jQuery(target).trigger("click");
                    }
                });
                //
                jQuery('#gks-slider-4 .gks-slider-ctrl-prev').click(function() {
                    jQuery(this).closest('.gks-slider-layout').find('.owl-carousel').trigger('prev.owl.carousel', [1000]);
                });
                gksSlider.on('changed.owl.carousel', function(event) {
                    jQuery("#gks-slider-4 .gks-info-opened .gks-slider-info-toggle").click();
                });
                jQuery('#gks-slider-4 .gks-slider-ctrl-next').click(function() {
                    jQuery(this).closest('.gks-slider-layout').find('.owl-carousel').trigger('next.owl.carousel', [1000]);
                });
                jQuery(window).resize(function() {
                    gks_AdjustSlider(jQuery("#gks-slider-4"));
                });
                gks_AdjustSlider(jQuery("#gks-slider-4"));
                jQuery('#gks-slider-4 .gks-slider-info-toggle').click(function() {
                    var caption = jQuery(this).closest('.gks-slider-overlay-caption');
                    caption.toggleClass('gks-info-opened');
                    if(caption.hasClass('gks-info-opened')) {
                        jQuery('.gks-slider-info-toggle', caption).removeClass('fa-angle-down');
                        jQuery('.gks-slider-info-toggle', caption).addClass('fa-angle-up');
                        jQuery('#gks-slider-4 .gks-slider-ctrl').animate({
                            opacity: 0
                        }, 100);
                    } else {
                        jQuery('.gks-slider-info-toggle', caption).addClass('fa-angle-down');
                        jQuery('.gks-slider-info-toggle', caption).removeClass('fa-angle-up');
                        jQuery('#gks-slider-4 .gks-slider-ctrl').animate({
                            opacity: 1
                        }, 100);
                    }
                    return false;
                });
                jQuery("#gks-slider-4 .gks-slider-cell-content").on("click", function(evt) {
                    if(jQuery("#gks-slider-4 .gks-slider-onslide-details").has(evt.target).length) {
                        return;
                    }
                    var parent = jQuery(this).closest(".gks-slider-cell");
                    var type = jQuery(parent).data("type");
                    if(type != "html") {
                        if(false || (type == "youtube" || type == "vimeo" || type == "video")) {
                            evt.preventDefault();
                        }
                    }
                    gks_handleClickAction(this, false);
                });
                if(false) {
                    jQuery("#gks-slider-4 #0.gks-slider-cell").trigger("click");
                }
            });

            function gks_handleClickAction(target, showPopup) {
                var parent = jQuery(target).closest(".gks-slider-cell");
                var index = jQuery(parent).data("index");
                var type = jQuery(parent).data("type");
                if(!showPopup && (type == "youtube" || type == "vimeo" || type == "video")) {
                    gks_injectPlayer(parent);
                } else if(type != "html" && showPopup) {}
            }
            jQuery(window).on('hashchange, popstate', function(event) {
                if(gksPopupIsOpen) {
                    gksPopupIsOpen = false;
                    gksBackCloses = true;
                    jQuery('.lg-close').click();
                }
            });

            function gks_getAnimationName(slider) {
                var re = /fx[a-zA-Z0-9\-_]+/i,
                    matches = re.exec(slider.attr('class'));
                return matches !== null ? matches[0] : matches;
            }

            function gks_destroyPlayer() {
                var video = jQuery("#gksvideo");
                jQuery(video).closest(".gks-slider-cell").find(".gks-slider-onslide-content").css("visibility", "visible");
                jQuery(video).closest(".gks-slider-cell").find(".gks-video-play-icon").css("visibility", "visible");
                if(video) {
                    video.attr("src", "");
                    video.remove();
                }
            }

            function gks_injectPlayer(parent) {
                var type = jQuery(parent).data("type");
                var src = jQuery(parent).data("src");
                if(type == "youtube" || type == "vimeo" || type == "video") {
                    gks_destroyPlayer();
                    var embbedIn = jQuery(parent).find(".gks-slider-cell-content-image").length > 0 ? jQuery(parent).find(".gks-slider-cell-content-image") : parent;
                    jQuery('<iframe>', {
                        src: src,
                        id: 'gksvideo',
                        frameborder: 0,
                        scrolling: 'no',
                        allow: 'autoplay',
                        allowfullscreen: 'allowfullscreen',
                        style: "position: absolute; width: 100%; height: 100%; left:0; top:0; z-index: 3; background-color: #000; z-index: 1000"
                    }).appendTo(jQuery(embbedIn));
                    jQuery(parent).find(".gks-slider-onslide-content").css("visibility", "hidden");
                    jQuery(parent).find(".gks-video-play-icon").css("visibility", "hidden");
                }
            }
            </script>
            <div class="wp-block-spacer" style="height: 100px;" aria-hidden="true">&nbsp;</div>
            <h2 id="h-our-social-impacts" class="has-text-align-center">Our Social Impacts</h2>
            <hr class="wp-block-separator">
            <div class="wp-block-spacer" style="height: 47px;" aria-hidden="true">&nbsp;</div>
            <div class="wp-block-yooslider-yooslider-block" data-gks-id="3">
                <div id="gks-slider-3" data-gks-id="3" class="gks-slider-layout gks-slider-carousel-layout"> <a class="gks-slider-ctrl gks-slider-ctrl-prev"><i class="fa gks-fa fa-angle-left"></i></a> <a class="gks-slider-ctrl gks-slider-ctrl-next"><i class="fa gks-fa fa-angle-right"></i></a>
                    <div class="owl-carousel gks-carousel owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2123px;">
                                <div class="owl-item active" style="width: 414.443px; margin-right: 10px;">
                                    <div id="0" class="gks-slider-cell image-none " data-type="pic" data-index="0" data-src="">
                                        <div class="gks-slider-cell-content gks-slider-cell-height" data-url="https://yooslider.com">
                                            <div class="gks-img-container">
                                                <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/profits.png);"> </div>
                                            </div>
                                            <div class="gks-slider-onslide-details gks-slider-slide-caption">
                                                <div class="gks-slider-details">USD 100,000 Is the total extra income families have earned selling their used textbooks.</div>
                                            </div>
                                            <div class="gks-slider-onslide-content"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 414.443px; margin-right: 10px;">
                                    <div id="1" class="gks-slider-cell image-none " data-type="pic" data-index="1" data-src="">
                                        <div class="gks-slider-cell-content gks-slider-cell-height" data-url="https://yooslider.com">
                                            <div class="gks-img-container">
                                                <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/open-book.png);"> </div>
                                            </div>
                                            <div class="gks-slider-onslide-details gks-slider-slide-caption">
                                                <div class="gks-slider-details">2 Million Books were saved from discarding after use and ultimately landing at the landfill site. </div>
                                            </div>
                                            <div class="gks-slider-onslide-content"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 414.443px; margin-right: 10px;">
                                    <div id="2" class="gks-slider-cell image-none " data-type="pic" data-index="2" data-src="">
                                        <div class="gks-slider-cell-content gks-slider-cell-height" data-url="https://yooslider.com">
                                            <div class="gks-img-container">
                                                <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/nature.png);"> </div>
                                            </div>
                                            <div class="gks-slider-onslide-details gks-slider-slide-caption">
                                                <div class="gks-slider-details">3,000 Trees were saved from being cut down, and CO2 emissions from pulp and paper production were reduced by 900 Metric tons.</div>
                                            </div>
                                            <div class="gks-slider-onslide-content"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 414.443px; margin-right: 10px;">
                                    <div id="3" class="gks-slider-cell image-none " data-type="pic" data-index="3" data-src="">
                                        <div class="gks-slider-cell-content gks-slider-cell-height" data-url="https://yooslider.com">
                                            <div class="gks-img-container">
                                                <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/hand.png);"> </div>
                                            </div>
                                            <div class="gks-slider-onslide-details gks-slider-slide-caption">
                                                <div class="gks-slider-details">220,000 JD Is the total money families have saved when buying used textbooks instead of brand new ones.</div>
                                            </div>
                                            <div class="gks-slider-onslide-content"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 414.443px; margin-right: 10px;">
                                    <div id="4" class="gks-slider-cell image-none " data-type="pic" data-index="4" data-src="">
                                        <div class="gks-slider-cell-content gks-slider-cell-height" data-url="">
                                            <div class="gks-img-container">
                                                <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/donate.png);"> </div>
                                            </div>
                                            <div class="gks-slider-onslide-details gks-slider-slide-caption">
                                                <div class="gks-slider-details">5,000 (Five thousand) Books were donated to the less privileged children and students.</div>
                                            </div>
                                            <div class="gks-slider-onslide-content"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled">
                            <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                            <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                        </div>
                       
                    </div>
                </div>
                <script>
                jQuery(document).ready(function() {
                    var slideSpeed = 700;
                    var settings = {
                        responsiveBaseElement: '.gks-slider-layout',
                        lazyLoad: false,
                        items: 1,
                        margin: 10,
                        center: false,
                        loop: false,
                        autoplay: false,
                        autoplayTimeout: 5000,
                        autoplayHoverPause: false,
                        mouseDrag: true,
                        touchDrag: true,
                        nav: false,
                        dots: true,
                        dotsEach: false,
                        smartSpeed: slideSpeed,
                        fluidSpeed: slideSpeed
                    };
                    settings.responsive = {
                        0: {
                            items: 1
                        },
                        421: {
                            items: 2
                        },
                        769: {
                            items: 3
                        },
                        1281: {
                            items: 3
                        }
                    };
                    settings.slideBy = 1;
                    settings.onInitialized = function() {};
                    var gksSlider = jQuery('#gks-slider-3 .owl-carousel').owlCarousel(settings);
                    gksSlider.on('changed.owl.carousel', function(property) {
                        gks_destroyPlayer();
                        if(false) {
                            var current = property.item.index;
                            var target = jQuery(property.target).find(".owl-item").eq(current).find(".gks-slider-cell");
                            jQuery(target).trigger("click");
                        }
                    });
                    //
                    jQuery('#gks-slider-3 .gks-slider-ctrl-prev').click(function() {
                        jQuery(this).closest('.gks-slider-layout').find('.owl-carousel').trigger('prev.owl.carousel', [1000]);
                    });
                    gksSlider.on('changed.owl.carousel', function(event) {
                        jQuery("#gks-slider-3 .gks-info-opened .gks-slider-info-toggle").click();
                    });
                    jQuery('#gks-slider-3 .gks-slider-ctrl-next').click(function() {
                        jQuery(this).closest('.gks-slider-layout').find('.owl-carousel').trigger('next.owl.carousel', [1000]);
                    });
                    jQuery(window).resize(function() {
                        gks_AdjustSlider(jQuery("#gks-slider-3"));
                    });
                    gks_AdjustSlider(jQuery("#gks-slider-3"));
                    jQuery('#gks-slider-3 .gks-slider-info-toggle').click(function() {
                        var caption = jQuery(this).closest('.gks-slider-overlay-caption');
                        caption.toggleClass('gks-info-opened');
                        if(caption.hasClass('gks-info-opened')) {
                            jQuery('.gks-slider-info-toggle', caption).removeClass('fa-angle-down');
                            jQuery('.gks-slider-info-toggle', caption).addClass('fa-angle-up');
                            jQuery('#gks-slider-3 .gks-slider-ctrl').animate({
                                opacity: 0
                            }, 100);
                        } else {
                            jQuery('.gks-slider-info-toggle', caption).addClass('fa-angle-down');
                            jQuery('.gks-slider-info-toggle', caption).removeClass('fa-angle-up');
                            jQuery('#gks-slider-3 .gks-slider-ctrl').animate({
                                opacity: 1
                            }, 100);
                        }
                        return false;
                    });
                    jQuery("#gks-slider-3 .gks-slider-cell-content").on("click", function(evt) {
                        if(jQuery("#gks-slider-3 .gks-slider-onslide-details").has(evt.target).length) {
                            return;
                        }
                        var parent = jQuery(this).closest(".gks-slider-cell");
                        var type = jQuery(parent).data("type");
                        if(type != "html") {
                            if(false || (type == "youtube" || type == "vimeo" || type == "video")) {
                                evt.preventDefault();
                            }
                        }
                        gks_handleClickAction(this, false);
                    });
                    if(false) {
                        jQuery("#gks-slider-3 #0.gks-slider-cell").trigger("click");
                    }
                });

                function gks_handleClickAction(target, showPopup) {
                    var parent = jQuery(target).closest(".gks-slider-cell");
                    var index = jQuery(parent).data("index");
                    var type = jQuery(parent).data("type");
                    if(!showPopup && (type == "youtube" || type == "vimeo" || type == "video")) {
                        gks_injectPlayer(parent);
                    } else if(type != "html" && showPopup) {}
                }
                jQuery(window).on('hashchange, popstate', function(event) {
                    if(gksPopupIsOpen) {
                        gksPopupIsOpen = false;
                        gksBackCloses = true;
                        jQuery('.lg-close').click();
                    }
                });

                function gks_getAnimationName(slider) {
                    var re = /fx[a-zA-Z0-9\-_]+/i,
                        matches = re.exec(slider.attr('class'));
                    return matches !== null ? matches[0] : matches;
                }

                function gks_destroyPlayer() {
                    var video = jQuery("#gksvideo");
                    jQuery(video).closest(".gks-slider-cell").find(".gks-slider-onslide-content").css("visibility", "visible");
                    jQuery(video).closest(".gks-slider-cell").find(".gks-video-play-icon").css("visibility", "visible");
                    if(video) {
                        video.attr("src", "");
                        video.remove();
                    }
                }

                function gks_injectPlayer(parent) {
                    var type = jQuery(parent).data("type");
                    var src = jQuery(parent).data("src");
                    if(type == "youtube" || type == "vimeo" || type == "video") {
                        gks_destroyPlayer();
                        var embbedIn = jQuery(parent).find(".gks-slider-cell-content-image").length > 0 ? jQuery(parent).find(".gks-slider-cell-content-image") : parent;
                        jQuery('<iframe>', {
                            src: src,
                            id: 'gksvideo',
                            frameborder: 0,
                            scrolling: 'no',
                            allow: 'autoplay',
                            allowfullscreen: 'allowfullscreen',
                            style: "position: absolute; width: 100%; height: 100%; left:0; top:0; z-index: 3; background-color: #000; z-index: 1000"
                        }).appendTo(jQuery(embbedIn));
                        jQuery(parent).find(".gks-slider-onslide-content").css("visibility", "hidden");
                        jQuery(parent).find(".gks-video-play-icon").css("visibility", "hidden");
                    }
                }
                </script>
            </div>
            <div class="wp-block-spacer" style="height: 100px;" aria-hidden="true">&nbsp;</div>
        </div>
            

         <!----Customer review & our social block end-->

        <!----Our Strategic Partners block start-->
         
        <div class="wp-container-1 wp-block-group"><div class="wp-block-group__inner-container">
            <h2 id="h-our-strategic-partners" class="has-text-align-center">Our Strategic Partners</h2>
            <hr class="wp-block-separator">
            <div class="wp-block-spacer" style="height: 39px;" aria-hidden="true">&nbsp;</div>
        </div></div>
        <div class="wp-block-yooslider-yooslider-block" data-gks-id="2">
            <div id="gks-slider-2" data-gks-id="2" class="gks-slider-layout gks-slider-carousel-layout"> <a class="gks-slider-ctrl gks-slider-ctrl-prev"><i class="fa gks-fa fa-angle-left"></i></a> <a class="gks-slider-ctrl gks-slider-ctrl-next"><i class="fa gks-fa fa-angle-right"></i></a>
                <div class="owl-carousel gks-carousel owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 7580px;">
                            <div class="owl-item active" style="width: 421.11px;">
                                <div id="0" class="gks-slider-cell image-none " data-type="pic" data-index="0" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/IMG_9089-8.jpg);">
                                                <div class="gks-slider-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 421.11px;">
                                <div id="1" class="gks-slider-cell image-none " data-type="pic" data-index="1" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/IMG_9084-8.png);">
                                                <div class="gks-slider-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 421.11px;">
                                <div id="2" class="gks-slider-cell image-none " data-type="pic" data-index="2" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/IMG_9083-8.png);">
                                                <div class="gks-slider-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 421.11px;">
                                <div id="3" class="gks-slider-cell image-none " data-type="pic" data-index="3" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/IMG_9098-7.png);">
                                                <div class="gks-slider-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 421.11px;">
                                <div id="4" class="gks-slider-cell image-none " data-type="pic" data-index="4" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/IMG_9100-7.png);">
                                                <div class="gks-slider-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 421.11px;">
                                <div id="5" class="gks-slider-cell image-none " data-type="pic" data-index="5" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/IMG_9102-7.png);">
                                                <div class="gks-slider-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 421.11px;">
                                <div id="6" class="gks-slider-cell image-none " data-type="pic" data-index="6" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/IMG_9101-7.png);">
                                                <div class="gks-slider-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 421.11px;">
                                <div id="7" class="gks-slider-cell image-none " data-type="pic" data-index="7" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/IMG_9099-8.png);">
                                                <div class="gks-slider-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 421.11px;">
                                <div id="8" class="gks-slider-cell image-none " data-type="pic" data-index="8" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/IMG_9097-7.png);">
                                                <div class="gks-slider-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 421.11px;">
                                <div id="9" class="gks-slider-cell image-none " data-type="pic" data-index="9" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/IMG_9096-8.png);">
                                                <div class="gks-slider-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 421.11px;">
                                <div id="10" class="gks-slider-cell image-none " data-type="pic" data-index="10" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/IMG_9095-7.png);">
                                                <div class="gks-slider-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 421.11px;">
                                <div id="11" class="gks-slider-cell image-none " data-type="pic" data-index="11" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/IMG_9094-7.png);">
                                                <div class="gks-slider-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 421.11px;">
                                <div id="12" class="gks-slider-cell image-none " data-type="pic" data-index="12" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/IMG_9093-7.png);">
                                                <div class="gks-slider-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 421.11px;">
                                <div id="13" class="gks-slider-cell image-none " data-type="pic" data-index="13" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/IMG_9091-7.png);">
                                                <div class="gks-slider-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 421.11px;">
                                <div id="14" class="gks-slider-cell image-none " data-type="pic" data-index="14" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/IMG_9090-7.png);">
                                                <div class="gks-slider-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 421.11px;">
                                <div id="15" class="gks-slider-cell image-none " data-type="pic" data-index="15" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/IMG_9088-8.png);">
                                                <div class="gks-slider-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 421.11px;">
                                <div id="16" class="gks-slider-cell image-none " data-type="pic" data-index="16" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/IMG_9087-8.png);">
                                                <div class="gks-slider-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 421.11px;">
                                <div id="17" class="gks-slider-cell image-none " data-type="pic" data-index="17" data-src="">
                                    <div class="gks-slider-cell-content gks-slider-cell-height" data-url="">
                                        <div class="gks-img-container">
                                            <div class="gks-slider-cell-content-image gks-tile-img" style="background-image: url(http://3.92.125.38/wp-content/uploads/2021/11/IMG_9086-8.jpg);">
                                                <div class="gks-slider-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="gks-slider-onslide-content"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled">
                        <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                        <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                    </div>
                    
                </div>
            </div>
            <script>
            jQuery(document).ready(function() {
                var slideSpeed = 700;
                var settings = {
                    responsiveBaseElement: '.gks-slider-layout',
                    lazyLoad: true,
                    items: 1,
                    margin: 0,
                    center: false,
                    loop: false,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    autoplayHoverPause: false,
                    mouseDrag: true,
                    touchDrag: true,
                    nav: false,
                    dots: true,
                    dotsEach: false,
                    smartSpeed: slideSpeed,
                    fluidSpeed: slideSpeed
                };
                settings.responsive = {
                    0: {
                        items: 1
                    },
                    421: {
                        items: 2
                    },
                    769: {
                        items: 3
                    },
                    1281: {
                        items: 3
                    }
                };
                settings.slideBy = 1;
                settings.onInitialized = function() {};
                var gksSlider = jQuery('#gks-slider-2 .owl-carousel').owlCarousel(settings);
                gksSlider.on('changed.owl.carousel', function(property) {
                    gks_destroyPlayer();
                    if(false) {
                        var current = property.item.index;
                        var target = jQuery(property.target).find(".owl-item").eq(current).find(".gks-slider-cell");
                        jQuery(target).trigger("click");
                    }
                });
                //
                jQuery('#gks-slider-2 .gks-slider-ctrl-prev').click(function() {
                    jQuery(this).closest('.gks-slider-layout').find('.owl-carousel').trigger('prev.owl.carousel', [1000]);
                });
                gksSlider.on('changed.owl.carousel', function(event) {
                    jQuery("#gks-slider-2 .gks-info-opened .gks-slider-info-toggle").click();
                });
                jQuery('#gks-slider-2 .gks-slider-ctrl-next').click(function() {
                    jQuery(this).closest('.gks-slider-layout').find('.owl-carousel').trigger('next.owl.carousel', [1000]);
                });
                jQuery(window).resize(function() {
                    gks_AdjustSlider(jQuery("#gks-slider-2"));
                });
                gks_AdjustSlider(jQuery("#gks-slider-2"));
                jQuery('#gks-slider-2 .gks-slider-info-toggle').click(function() {
                    var caption = jQuery(this).closest('.gks-slider-overlay-caption');
                    caption.toggleClass('gks-info-opened');
                    if(caption.hasClass('gks-info-opened')) {
                        jQuery('.gks-slider-info-toggle', caption).removeClass('fa-angle-down');
                        jQuery('.gks-slider-info-toggle', caption).addClass('fa-angle-up');
                        jQuery('#gks-slider-2 .gks-slider-ctrl').animate({
                            opacity: 0
                        }, 100);
                    } else {
                        jQuery('.gks-slider-info-toggle', caption).addClass('fa-angle-down');
                        jQuery('.gks-slider-info-toggle', caption).removeClass('fa-angle-up');
                        jQuery('#gks-slider-2 .gks-slider-ctrl').animate({
                            opacity: 1
                        }, 100);
                    }
                    return false;
                });
                jQuery("#gks-slider-2 .gks-slider-cell-content").on("click", function(evt) {
                    if(jQuery("#gks-slider-2 .gks-slider-onslide-details").has(evt.target).length) {
                        return;
                    }
                    var parent = jQuery(this).closest(".gks-slider-cell");
                    var type = jQuery(parent).data("type");
                    if(type != "html") {
                        if(false || (type == "youtube" || type == "vimeo" || type == "video")) {
                            evt.preventDefault();
                        }
                    }
                    gks_handleClickAction(this, false);
                });
                if(false) {
                    jQuery("#gks-slider-2 #0.gks-slider-cell").trigger("click");
                }
            });

            function gks_handleClickAction(target, showPopup) {
                var parent = jQuery(target).closest(".gks-slider-cell");
                var index = jQuery(parent).data("index");
                var type = jQuery(parent).data("type");
                if(!showPopup && (type == "youtube" || type == "vimeo" || type == "video")) {
                    gks_injectPlayer(parent);
                } else if(type != "html" && showPopup) {}
            }
            jQuery(window).on('hashchange, popstate', function(event) {
                if(gksPopupIsOpen) {
                    gksPopupIsOpen = false;
                    gksBackCloses = true;
                    jQuery('.lg-close').click();
                }
            });

            function gks_getAnimationName(slider) {
                var re = /fx[a-zA-Z0-9\-_]+/i,
                    matches = re.exec(slider.attr('class'));
                return matches !== null ? matches[0] : matches;
            }

            function gks_destroyPlayer() {
                var video = jQuery("#gksvideo");
                jQuery(video).closest(".gks-slider-cell").find(".gks-slider-onslide-content").css("visibility", "visible");
                jQuery(video).closest(".gks-slider-cell").find(".gks-video-play-icon").css("visibility", "visible");
                if(video) {
                    video.attr("src", "");
                    video.remove();
                }
            }

            function gks_injectPlayer(parent) {
                var type = jQuery(parent).data("type");
                var src = jQuery(parent).data("src");
                if(type == "youtube" || type == "vimeo" || type == "video") {
                    gks_destroyPlayer();
                    var embbedIn = jQuery(parent).find(".gks-slider-cell-content-image").length > 0 ? jQuery(parent).find(".gks-slider-cell-content-image") : parent;
                    jQuery('<iframe>', {
                        src: src,
                        id: 'gksvideo',
                        frameborder: 0,
                        scrolling: 'no',
                        allow: 'autoplay',
                        allowfullscreen: 'allowfullscreen',
                        style: "position: absolute; width: 100%; height: 100%; left:0; top:0; z-index: 3; background-color: #000; z-index: 1000"
                    }).appendTo(jQuery(embbedIn));
                    jQuery(parent).find(".gks-slider-onslide-content").css("visibility", "hidden");
                    jQuery(parent).find(".gks-video-play-icon").css("visibility", "hidden");
                }
            }
            </script>
        </div>
        </div>

        <!----Our Strategic Partners block end-->
        <!----Latest News block start-->
        <h2 id="h-latest-news" class="has-text-align-center"><a href="http://3.92.125.38/books/news/">Latest News</a></h2>
        <hr class="wp-block-separator">
        <ul class="wp-block-latest-posts__list is-grid columns-3 has-dates wp-block-latest-posts">
            <li>
                <div class="wp-block-latest-posts__featured-image aligncenter">
                    <a href="http://3.92.125.38/context-and-alefredo-books/" aria-label="Context and Alefredo Books"><img loading="lazy" width="980" height="653" src="http://3.92.125.38/wp-content/uploads/2022/05/Context-and-Alefredo-Books-1.jpeg" class="attachment-large size-large wp-post-image Context" alt="Context-and-Alefredo-Books" style="" srcset="http://3.92.125.38/wp-content/uploads/2022/05/Context-and-Alefredo-Books-1.jpeg 1024w, http://3.92.125.38/wp-content/uploads/2022/05/Context-and-Alefredo-Books-1-300x225.jpeg 300w, http://3.92.125.38/wp-content/uploads/2022/05/Context-and-Alefredo-Books-1-768x576.jpeg 768w" sizes="(max-width: 980px) 100vw, 980px"></a>
                </div><a class="wp-block-latest-posts__post-title" href="http://3.92.125.38/context-and-alefredo-books/">Context and Alefredo Books</a>
                <time datetime="2022-05-07T12:22:00+00:00" class="wp-block-latest-posts__post-date">May 7, 2022</time>
            </li>
            <li>
                <div class="wp-block-latest-posts__featured-image aligncenter">
                    <a href="http://3.92.125.38/the-revolution-of-used-books-in-the-mena-region/" aria-label="The Revolution of Used Books in the MENA Region"><img width="980" height="653" style="max-height:413px;" src="http://3.92.125.38/wp-content/uploads/2022/04/The-Revolution-of-Used-Books-in-the-MENA-Region-998x1024.jpeg" class="attachment-large size-large wp-post-image Revolution" alt="The Revolution of Used Books in the MENA Region" loading="lazy" style="" srcset="http://3.92.125.38/wp-content/uploads/2022/04/The-Revolution-of-Used-Books-in-the-MENA-Region-998x1024.jpeg 998w, http://3.92.125.38/wp-content/uploads/2022/04/The-Revolution-of-Used-Books-in-the-MENA-Region-439x450.jpeg 439w, http://3.92.125.38/wp-content/uploads/2022/04/The-Revolution-of-Used-Books-in-the-MENA-Region-768x788.jpeg 768w, http://3.92.125.38/wp-content/uploads/2022/04/The-Revolution-of-Used-Books-in-the-MENA-Region-300x308.jpeg 300w, http://3.92.125.38/wp-content/uploads/2022/04/The-Revolution-of-Used-Books-in-the-MENA-Region.jpeg 1033w"></a>
                </div><a class="wp-block-latest-posts__post-title" href="http://3.92.125.38/the-revolution-of-used-books-in-the-mena-region/">The Revolution of Used Books in the MENA Region</a>
                <time datetime="2022-04-06T06:30:03+00:00" class="wp-block-latest-posts__post-date">April 6, 2022</time>
            </li>
            <li>
                <div class="wp-block-latest-posts__featured-image aligncenter">
                    <a href="http://3.92.125.38/joining-the-immersion-week-in-tunisia/" aria-label="Joining the immersion week in Tunisia"><img width="980" height="653" src="http://3.92.125.38/wp-content/uploads/2022/03/Joining-the-immersion-week-in-Tunisia.jpg" class="attachment-large size-large wp-post-image Joining" alt="Joining the immersion week in Tunisia" loading="lazy" style="" srcset="http://3.92.125.38/wp-content/uploads/2022/03/Joining-the-immersion-week-in-Tunisia.jpg 1000w, http://3.92.125.38/wp-content/uploads/2022/03/Joining-the-immersion-week-in-Tunisia-450x300.jpg 450w, http://3.92.125.38/wp-content/uploads/2022/03/Joining-the-immersion-week-in-Tunisia-768x511.jpg 768w, http://3.92.125.38/wp-content/uploads/2022/03/Joining-the-immersion-week-in-Tunisia-300x200.jpg 300w" sizes="(max-width: 980px) 100vw, 980px"></a>
                </div><a class="wp-block-latest-posts__post-title" href="http://3.92.125.38/joining-the-immersion-week-in-tunisia/">Joining the immersion week in Tunisia</a>
                <time datetime="2022-03-14T10:00:47+00:00" class="wp-block-latest-posts__post-date">March 14, 2022</time>
            </li>
        </ul>
        <!----Latest News block end-->

        <!----Our Blog block start-->

        <div class="wp-block-spacer" style="height: 100px;" aria-hidden="true">&nbsp;</div>
        <h2 id="h-our-blog" class="has-text-align-center"><a href="http://3.92.125.38/books/blogs/">Our Blog</a></h2>
        <hr class="wp-block-separator">
        <ul class="wp-block-latest-posts__list is-grid columns-3 wp-block-latest-posts">
            <li>
                <div class="wp-block-latest-posts__featured-image aligncenter">
                    <a href="http://3.92.125.38/places-to-buy-used-books/" aria-label="places to buy used books"><img width="980" height="551" src="http://3.92.125.38/wp-content/uploads/2022/08/Top-5-Places-to-Buy-Used-Books.png" class="attachment-large size-large wp-post-image places" alt="Top 5 Places to Buy Used Books" loading="lazy" style="" srcset="http://3.92.125.38/wp-content/uploads/2022/08/Top-5-Places-to-Buy-Used-Books.png 620w, http://3.92.125.38/wp-content/uploads/2022/08/Top-5-Places-to-Buy-Used-Books-300x146.png 300w" sizes="(max-width: 620px) 100vw, 620px"></a>
                </div><a class="wp-block-latest-posts__post-title" href="http://3.92.125.38/places-to-buy-used-books/">places to buy used books</a></li>
            <li>
                <div class="wp-block-latest-posts__featured-image aligncenter">
                    <a href="http://3.92.125.38/order-used-books/" aria-label="order used books"><img width="980" height="551" src="http://3.92.125.38/wp-content/uploads/2022/08/order-used-books-1024x576.jpg" class="attachment-large size-large wp-post-image order" alt="order used books" loading="lazy" style="" srcset="http://3.92.125.38/wp-content/uploads/2022/08/order-used-books-1024x576.jpg 1024w, http://3.92.125.38/wp-content/uploads/2022/08/order-used-books-300x169.jpg 300w, http://3.92.125.38/wp-content/uploads/2022/08/order-used-books-768x432.jpg 768w, http://3.92.125.38/wp-content/uploads/2022/08/order-used-books.jpg 1280w" sizes="(max-width: 980px) 100vw, 980px"></a>
                </div><a class="wp-block-latest-posts__post-title" href="http://3.92.125.38/order-used-books/">order used books</a></li>
            <li>
                <div class="wp-block-latest-posts__featured-image aligncenter">
                    <a href="http://3.92.125.38/pastpapers-ap-psychology-multiple-choice-questions/" aria-label="Pastpapers AP psychology multiple choice questions"><img width="980" height="551" src="http://3.92.125.38/wp-content/uploads/2022/07/Pastpapers-AP-psychology-multiple-choice-questions.2-391x298.jpg" class="attachment-large size-large wp-post-image Pastpapers " alt="past paper Primary math" loading="lazy" style=""  sizes="(max-width: 620px) 100vw, 620px"></a>
                </div><a class="wp-block-latest-posts__post-title " href="http://3.92.125.38/pastpapers-ap-psychology-multiple-choice-questions/">Pastpapers AP psychology multiple choice questions</a></li>
        </ul>

        <!----Our Blog block end-->

        

    </main><!-- #main -->
<script>
    function getSliderSettings(param) 
    {
        var data_res = '[{"breakpoint":1479.98000000000001818989403545856475830078125,"settings":{"slidesToShow":3}},{"breakpoint":1199.98000000000001818989403545856475830078125,"settings":{"slidesToShow":2}},{"breakpoint":991.98000000000001818989403545856475830078125,"settings":{"slidesToShow":2}},{"breakpoint":575.98000000000001818989403545856475830078125,"settings":{"slidesToShow":1}}]';
        var data1 = JSON.parse(data_res);
        return {
            dots: true,
            arrows: false,
            //slidesToShow: 1,
            //slidesToScroll: 1,
            accessibility: false,
            asNavFor: '.u-slick__pagination'+param,
            responsive: data1
        }
    }
jQuery(document).ready(function(){
    jQuery('.slick-slider-1').slick( getSliderSettings(1));
    jQuery('.slick-slider-2').slick( getSliderSettings(2));
    jQuery('.slick-slider-3').slick( getSliderSettings(3));
    jQuery('.slick-slider-4').slick( getSliderSettings(4));
    jQuery('.slick-slider-5').slick( getSliderSettings(5));
    jQuery('.slick-slider-6').slick( getSliderSettings(6));
    jQuery('.slick-slider-7').slick( getSliderSettings(7));

    //jQuery('.js-slick-carousel').slick('unslick').slick('reinit');
});

</script>
<?php

get_footer();



?>