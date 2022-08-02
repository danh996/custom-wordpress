<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FinOs_HDI
 */

get_header();
?>
    <div class="banner-section">
        <?php
        echo do_shortcode('[smartslider3 slider="2"]');
        ?>
        <div class="banner-info">
            <h1>CHỌN BẢO HIỂM. CHỌN AN TÂM</h1>
            <div class="insurance-type">
                <div class="row m-0 tab-header">
                    <div class="col tab-header-link text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/health.png" alt="">
                        <p>Sức khoẻ CN</p>
                    </div>
                    <div class="col tab-header-link text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/bike.png" alt="">
                        <p>Xe máy</p>
                    </div>
                    <div class="col tab-header-link text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/car.png" alt="">
                        <p>Xe hơi</p>
                    </div>
                    <div class="col tab-header-link text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/health.png" alt="">
                        <p>Tai nạn</p>
                    </div>
                    <div class="col tab-header-link text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/health.png" alt="">
                        <p>Sức khoẻ nhóm</p>
                    </div>
                    <div class="col tab-header-link text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/health.png" alt="">
                        <p>Nhà</p>
                    </div>
                </div>
                <div class="insurance-content">
                    <p class="tab-content">Bảo hiểm sức khỏe là hình thức bảo hiểm cho những thương tật, tai nạn, ốm đau, bệnh tật, sức khỏe của người bệnh được doanh nghiệp bảo hiểm chi trả theo các điều khoản của hợp đồng bảo hiểm.</p>
                    <p class="tab-content">Bảo hiểm Xe may là hình thức bảo hiểm cho những thương tật, tai nạn, ốm đau, bệnh tật, sức khỏe của người bệnh được doanh nghiệp bảo hiểm chi trả theo các điều khoản của hợp đồng bảo hiểm.</p>
                    <p class="tab-content">Bảo hiểm Xe hoi là hình thức bảo hiểm cho những thương tật, tai nạn, ốm đau, bệnh tật, sức khỏe của người bệnh được doanh nghiệp bảo hiểm chi trả theo các điều khoản của hợp đồng bảo hiểm.</p>
                    <p class="tab-content">Bảo hiểm sức khỏe là hình thức bảo hiểm cho những thương tật, tai nạn, ốm đau, bệnh tật, sức khỏe của người bệnh được doanh nghiệp bảo hiểm chi trả theo các điều khoản của hợp đồng bảo hiểm.</p>
                    <p class="tab-content">Bảo hiểm sức khỏe là hình thức bảo hiểm cho những thương tật, tai nạn, ốm đau, bệnh tật, sức khỏe của người bệnh được doanh nghiệp bảo hiểm chi trả theo các điều khoản của hợp đồng bảo hiểm.</p>
                    <p class="tab-content">Bảo hiểm sức khỏe là hình thức bảo hiểm cho những thương tật, tai nạn, ốm đau, bệnh tật, sức khỏe của người bệnh được doanh nghiệp bảo hiểm chi trả theo các điều khoản của hợp đồng bảo hiểm.</p>


                    <div class="row">
                        <div class="col-md-6 btn">
                            <button class="btn btn-detail">XEM CHI TIẾT</button>
                        </div>
                        <div class="col-md-6 btn">
                            <button class="btn btn-buy">MUA NGAY
                                <img src="<?php echo get_template_directory_uri(); ?>/images/home3/arrow.png" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>

    <div class="protect-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2><strong>Bạn muốn bảo vệ gì hôm nay?</strong></h2>
                    <div class="row consurance-button tab-header-2">
                        <div class="consurance-type-div tab-header-link-2 active">Con người</div>
                        <div class="consurance-type-div tab-header-link-2">Xe cơ giới</div>
                        <div class="consurance-type-div tab-header-link-2">Tài sản - Kỹ thuật</div>
                        <div class="consurance-type-div tab-header-link-2">Hỗn hợp</div>
                        <div class="consurance-type-div tab-header-link-2">Hàng hoá</div>
                        <div class="consurance-type-div tab-header-link-2">Tàu</div>
                        <div class="consurance-type-div tab-header-link-2">Trách nhiệm</div>
                    </div>
                </div>

            </div>

            <div class="tab-content-2">
                <div class="consurance-type-div-detail">
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/person.png" alt="">
                        <br>
                        <span>Tai nạn con người</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Chăm sóc sức khoẻ và tai nạn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/people-and-loans.png" alt="">
                        <br>
                        <span>Sức khoẻ người vay vốn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/people-and-loans.png" alt="">
                        <br>
                        <span>Bảo hiểm Người vay vốn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Sức khoẻ người vay vốn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Sức khoẻ người vay vốn</span>
                    </div>
                </div>

                <div class="consurance-type-div-detail">
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/person.png" alt="">
                        <br>
                        <span>Học sinh, sinh viên</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Chăm sóc sức khoẻ và tai nạn</span>
                    </div>
                </div>
            </div>
            <div class="tab-content-2">
                <div class="consurance-type-div-detail">
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/person.png" alt="">
                        <br>
                        <span>Xe cơ giới</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Xe cơ giới</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/people-and-loans.png" alt="">
                        <br>
                        <span>Xe cơ giới</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/people-and-loans.png" alt="">
                        <br>
                        <span>Xe cơ giới</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Xe cơ giới</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Xe cơ giới</span>
                    </div>
                </div>

                <div class="consurance-type-div-detail">
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/person.png" alt="">
                        <br>
                        <span>Học sinh, sinh viên</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Chăm sóc sức khoẻ và tai nạn</span>
                    </div>
                </div>
            </div>
            <div class="tab-content-2">
                <div class="consurance-type-div-detail">
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/person.png" alt="">
                        <br>
                        <span>Tai nạn con người</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Chăm sóc sức khoẻ và tai nạn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/people-and-loans.png" alt="">
                        <br>
                        <span>Sức khoẻ người vay vốn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/people-and-loans.png" alt="">
                        <br>
                        <span>Bảo hiểm Người vay vốn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Sức khoẻ người vay vốn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Sức khoẻ người vay vốn</span>
                    </div>
                </div>

                <div class="consurance-type-div-detail">
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/person.png" alt="">
                        <br>
                        <span>Học sinh, sinh viên</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Chăm sóc sức khoẻ và tai nạn</span>
                    </div>
                </div>
            </div>
            <div class="tab-content-2">
                <div class="consurance-type-div-detail">
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/person.png" alt="">
                        <br>
                        <span>Tai nạn con người</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Chăm sóc sức khoẻ và tai nạn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/people-and-loans.png" alt="">
                        <br>
                        <span>Sức khoẻ người vay vốn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/people-and-loans.png" alt="">
                        <br>
                        <span>Bảo hiểm Người vay vốn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Sức khoẻ người vay vốn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Sức khoẻ người vay vốn</span>
                    </div>
                </div>

                <div class="consurance-type-div-detail">
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/person.png" alt="">
                        <br>
                        <span>Học sinh, sinh viên</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Chăm sóc sức khoẻ và tai nạn</span>
                    </div>
                </div>
            </div>
            <div class="tab-content-2">
                <div class="consurance-type-div-detail">
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/person.png" alt="">
                        <br>
                        <span>Tai nạn con người</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Chăm sóc sức khoẻ và tai nạn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/people-and-loans.png" alt="">
                        <br>
                        <span>Sức khoẻ người vay vốn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/people-and-loans.png" alt="">
                        <br>
                        <span>Bảo hiểm Người vay vốn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Sức khoẻ người vay vốn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Sức khoẻ người vay vốn</span>
                    </div>
                </div>

                <div class="consurance-type-div-detail">
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/person.png" alt="">
                        <br>
                        <span>Học sinh, sinh viên</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Chăm sóc sức khoẻ và tai nạn</span>
                    </div>
                </div>
            </div>
            <div class="tab-content-2">
                <div class="consurance-type-div-detail">
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/person.png" alt="">
                        <br>
                        <span>Tai nạn con người</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Chăm sóc sức khoẻ và tai nạn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/people-and-loans.png" alt="">
                        <br>
                        <span>Sức khoẻ người vay vốn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/people-and-loans.png" alt="">
                        <br>
                        <span>Bảo hiểm Người vay vốn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Sức khoẻ người vay vốn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Sức khoẻ người vay vốn</span>
                    </div>
                </div>

                <div class="consurance-type-div-detail">
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/person.png" alt="">
                        <br>
                        <span>Học sinh, sinh viên</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Chăm sóc sức khoẻ và tai nạn</span>
                    </div>
                </div>
            </div>
            <div class="tab-content-2">
                <div class="consurance-type-div-detail">
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/person.png" alt="">
                        <br>
                        <span>Tai nạn con người</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Chăm sóc sức khoẻ và tai nạn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/people-and-loans.png" alt="">
                        <br>
                        <span>Sức khoẻ người vay vốn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/people-and-loans.png" alt="">
                        <br>
                        <span>Bảo hiểm Người vay vốn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Sức khoẻ người vay vốn</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Sức khoẻ người vay vốn</span>
                    </div>
                </div>

                <div class="consurance-type-div-detail">
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/person.png" alt="">
                        <br>
                        <span>Học sinh, sinh viên</span>
                    </div>
                    <div class="content-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/emergency.png" alt="">
                        <br>
                        <span>Chăm sóc sức khoẻ và tai nạn</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="about-us-section">
        <div class="container">
            <div class="row banner-row">
                <div class="col">
                    <h2><strong>Tại sao chọn Bảo hiểm HDI</strong></h2>
                </div>

            </div>
            <div class="row info-row">
                <div class="col info-detail">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home3/any-where-management.png" alt="">
                    <h5>Quản lý mọi nơi</h5>
                    <p>Get a quote and stay protected easily with your laptop or mobile phone anytime, anywhere.</p>
                    <a href="">Tìm hiểu
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/green-arrow.png" alt="">
                    </a>
                </div>
                <div class="col info-detail">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home3/fast.png" alt="">
                    <h5>Nhanh chóng tiện lợi</h5>
                    <p>There is no middleman between you and us, which means we can address your concerns directly and swiftly.</p>
                    <a href="">Tìm hiểu
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/green-arrow.png" alt="">
                    </a>
                </div>
                <div class="col info-detail">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home3/simple.png" alt="">
                    <h5>Thủ tục đơn giản</h5>
                    <p>Our plans are simple and concise, and offers you all the protection you need. and offers you all the protection you need.</p>
                    <a href="">Tìm hiểu
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home3/green-arrow.png" alt="">
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div class="promotion-news-section">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2><strong>Khuyến mãi và tin tức</strong></h2>
                </div>

            </div>
            <div class="row info-row">

                <?php
                    $the_query = new WP_Query( 'posts_per_page=4' ); ?>
                      
                    <?php
                    // Start our WP Query
                    while ($the_query -> have_posts()) : $the_query -> the_post();
                    ?>
                      
                    <div class="col-md-3 info-detail">
                        <div>
                            <img style="height: 160px;" src="<?php the_post_thumbnail_url() ?>" alt="">
                            <div style="height: 90px;" class="title-date d-flex flex-column justify-content-between">
                                <a href="<?php the_permalink() ?>"><p style="margin-bottom: 0.5rem;">
                                    <?php
                                        $title = get_the_title();
                                        $short_title = wp_trim_words( $title, 15, '...' );
                                        echo $short_title;
                                    ?>
                                    </p></a>
                                <span><?php echo get_the_date( 'd/m/Y' ) ?></span>
                            </div>
                        </div>
                    </div>
                        <?php
                    // Display the Post Excerpt
                    the_excerpt(__('(more…)')); ?></li>
                      
                    <?php
                    // Repeat the process and reset once it hits the limit
                    endwhile;
                    wp_reset_postdata();
                ?>

               
            </div>
            <div class="link-news">
                <a href="">Tìm hiểu
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home3/green-arrow.png" alt="">
                </a>
            </div>

        </div>
    </div>
<?php
get_sidebar();
get_footer();
