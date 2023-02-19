<?php
require_once __DIR__ . '/../partials/header.php';
?>

<section class="pt-100 login-register">
    <div class="container">
        <div class="row login-register-cover">
            <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                <div class="text-center">
                    <p class="font-sm text-brand-2">Chào mừng bạn quay trở lại!</p>
                    <h2 class="mt-10 mb-5 text-brand-1">Đăng nhập</h2>
                    <p class="font-sm text-muted mb-30">Access to all features. No credit card required.</p>
                </div>
                <?= flash()->display() ?>

                <form class="login-register text-start mt-20" action="/login" method="post">
                    <div class="form-group">
                        <label class="form-label" for="email">Email *</label>
                        <input class="form-control" id="email" type="text" required="" name="email" placeholder="email@example.com">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">Mật khẩu *</label>
                        <input class="form-control" id="password" type="password" required="" name="password" placeholder="************">
                    </div>
                    <div class="login_footer form-group d-flex justify-content-between">
                        <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Ghi nhớ đăng nhập</span><span class="checkmark"></span>
                        </label><a class="text-muted" href="page-contact.html">Quên mật khẩu?</a>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-brand-1 hover-up w-100" type="submit">Đăng nhập</button>
                    </div>
                    <div class="text-muted text-center">Chưa có tài khoản? <a href="/register">Đăng ký</a></div>
                </form>
                <div class="mt-20">
                    <div class="divider-text-center"><span>Hoặc đăng nhập bằng Google</span></div>
                    <button class="btn social-login hover-up mt-20">
                        <img src="<?= asset('assets/imgs/template/icons/icon-google.svg') ?>" alt="<?= env('APP_NAME') ?>">
                        <strong>Đăng nhập bằng Google</strong>
                    </button>
                </div>
            </div>
            <div class="img-1 d-none d-lg-block">
                <img class="shape-1" src="<?= asset('assets/imgs/page/login-register/img-4.svg') ?>" alt="<?= env('APP_NAME') ?>">
            </div>
            <div class="img-2">
                <img src="<?= asset('assets/imgs/page/login-register/img-3.svg') ?>" alt="<?= env('APP_NAME') ?>">
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>