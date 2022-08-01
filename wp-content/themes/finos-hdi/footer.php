<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FinOs_HDI
 */

?>

<footer class="footer-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/home3/logo-footer.png">
                <p class="introduce">Công ty TNHH Bảo hiểm HD <br>
                    Trụ sở chính: Tòa nhà Abacus, 58 Nguyễn Đình Chiểu, Quận 1, Tp. Hồ Chí Minh
                    <br>
                    Chi nhánh Hà Nội: Số 885 Hồng Hà, Quận Hoàn Kiếm, Hà Nội
                    <br>
                    Tel: (028) 3528 2999 | Fax: (028) 3910 2888 | E: info@hdinsurance.com.vn
                    <br>
                    Giấy phép thành lập và hoạt động số 82/GP/KDBH ngày cấp 19/05/2020</p>
            </div>
            <div class="col-md-6">
                <div class="row footer-link">
                    <div class="col-md-3">
                        <h5>Sản phẩm dịch vụ</h5>
                        <a>Sức khoẻ</a><br>
                        <a> Xe cơ giới</a>
                        <br>
                        <a>Tai nạn</a>
                        <br>
                        <a>Hỗn hợp</a>
                        <br>
                        <a>Hàng hoá</a>
                        <br>
                        <a> Tàu Trách nhiệm</a>
                        <br>
                    </div>
                    <div class="col-md-3">
                        <h5>Sitemap</h5>
                        <a>Sản phẩm</a><br>
                        <a>Bồi thường</a><br>
                        <a>Thuật ngữ / FAQ</a><br>
                        <a>Liên hệ</a><br>
                        <a>Tải tài liệu</a><br>
                    </div>
                    <div class="col-md-6 footer-social-register">
                        <div class="link-social">
                            <h5>Theo dõi</h5>
                            <a href="<?php echo get_option('facebook_url') ?? "#" ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/home3/fb.png"></a>
                            <a href="<?php echo get_option('youtube_url') ?? "#" ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/home3/yb.png"></a>
                            <a href="<?php echo get_option('instagram_url') ?? "#" ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/home3/ins.png"></a>
                        </div>

                        <div class="register-info">
                            <span>Nhận thông tin</span>
                            <div class="input">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/home3/mail.png" alt="">
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div>
    <img class="hotline-footer-image" src="<?php echo get_template_directory_uri(); ?>/images/home3/footer-hotline.png" alt="">
</footer>

</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
<?php wp_footer(); ?>

</body>
</html>
