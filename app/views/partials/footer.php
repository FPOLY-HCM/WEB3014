        <section class="section-box mt-50 mb-20">
            <div class="container">
                <div class="box-newsletter">
                    <div class="row">
                        <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="<?= asset('assets/imgs/template/newsletter-left.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
                        <div class="col-lg-12 col-xl-6 col-12">
                            <h2 class="text-md-newsletter text-center">Nhận thông tin mới nhất <br> từ chúng tôi</h2>
                            <div class="box-form-newsletter mt-40">
                                <form class="form-newsletter">
                                    <input class="input-newsletter" type="text" value="" placeholder="Nhập địa chỉ email">
                                    <button class="btn btn-default font-heading icon-send-letter">Đăng ký</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-3 col-12 text-center d-none d-xl-block">
                            <img src="<?= asset('assets/imgs/template/newsletter-right.png') ?>" alt="<?= env('APP_NAME') ?>">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer mt-50">
        <div class="container">
            <div class="row">
                <div class="footer-col-1 col-md-3 col-sm-12"><a href="index.html"><img alt="<?= env('APP_NAME') ?>" src="<?= asset('assets/imgs/template/jobhub-logo.svg') ?>"></a>
                    <div class="mt-20 mb-20 font-xs color-text-paragraph-2"><?= env('APP_NAME') ?> is the heart of the design community and the best resource to discover and connect with designers and jobs worldwide.</div>
                    <div class="footer-social">
                        <a class="icon-socials icon-facebook" href="#"></a>
                        <a class="icon-socials icon-twitter" href="#"></a>
                        <a class="icon-socials icon-linkedin" href="#"></a>
                    </div>
                </div>
                <div class="footer-col-2 col-md-2 col-xs-6">
                    <h6 class="mb-20">Resources</h6>
                    <ul class="menu-footer">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col-3 col-md-2 col-xs-6">
                    <h6 class="mb-20">Community</h6>
                    <ul class="menu-footer">
                        <li><a href="#">Feature</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Credit</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-col-4 col-md-2 col-xs-6">
                    <h6 class="mb-20">Quick links</h6>
                    <ul class="menu-footer">
                        <li><a href="#">iOS</a></li>
                        <li><a href="#">Android</a></li>
                        <li><a href="#">Microsoft</a></li>
                        <li><a href="#">Desktop</a></li>
                    </ul>
                </div>
                <div class="footer-col-5 col-md-2 col-xs-6">
                    <h6 class="mb-20">More</h6>
                    <ul class="menu-footer">
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-col-6 col-md-3 col-sm-12">
                    <h6 class="mb-20">Download App</h6>
                    <p class="color-text-paragraph-2 font-xs">Download our Apps and get extra 15% Discount on your first Order&mldr;!</p>
                    <div class="mt-15"><a class="mr-5" href="#"><img src="<?= asset('assets/imgs/template/icons/app-store.png') ?>" alt="<?= env('APP_NAME') ?>"></a><a href="#"><img src="<?= asset('assets/imgs/template/icons/android.png') ?>" alt="<?= env('APP_NAME') ?>"></a></div>
                </div>
            </div>
            <div class="footer-bottom mt-50">
                <div class="row">
                    <div class="col-md-6"><span class="font-xs color-text-paragraph">Copyright &copy; 2022. <?= env('APP_NAME') ?> all right reserved</span></div>
                    <div class="col-md-6 text-md-end text-start">
                        <div class="footer-social"><a class="font-xs color-text-paragraph" href="#">Privacy Policy</a><a class="font-xs color-text-paragraph mr-30 ml-30" href="#">Terms &amp; Conditions</a><a class="font-xs color-text-paragraph" href="#">Security</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?= asset('assets/js/vendor/modernizr-3.6.0.min.js') ?>"></script>
    <script src="<?= asset('assets/js/vendor/jquery-3.6.0.min.js') ?>"></script>
    <script src="<?= asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') ?>"></script>
    <script src="<?= asset('assets/js/vendor/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= asset('assets/js/plugins/waypoints.js') ?>"></script>
    <script src="<?= asset('assets/js/plugins/wow.js') ?>"></script>
    <script src="<?= asset('assets/js/plugins/magnific-popup.js') ?>"></script>
    <script src="<?= asset('assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= asset('assets/js/plugins/select2.min.js') ?>"></script>
    <script src="<?= asset('assets/js/plugins/isotope.js') ?>"></script>
    <script src="<?= asset('assets/js/plugins/scrollup.js') ?>"></script>
    <script src="<?= asset('assets/js/plugins/swiper-bundle.min.js') ?>"></script>
    <script src="<?= asset('assets/js/main.js?v=1.0') ?>"></script>
</body>
</html>