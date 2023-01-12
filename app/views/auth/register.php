<?php
require_once __DIR__ . '/../partials/header.php';
?>

<main class="main">
    <section class="pt-100 login-register">
        <div class="container">
            <div class="row login-register-cover">
                <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                    <div class="text-center">
                        <p class="font-sm text-brand-2">Đăng ký </p>
                        <h2 class="mt-10 mb-5 text-brand-1">Bắt đầu miễn phí</h2>
                        <p class="font-sm text-muted mb-30">Access to all features. No credit card required.</p>
                    </div>
                    <form class="login-register text-start mt-20" action="#">
                        <div class="form-group">
                            <label class="form-label" for="input-1">Họ tên *</label>
                            <input class="form-control" id="input-1" type="text" required="" name="fullname" placeholder="Steven Job">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="input-2">Email *</label>
                            <input class="form-control" id="input-2" type="email" required="" name="emailaddress" placeholder="stevenjob@gmail.com">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="input-3">Tên tài khoản *</label>
                            <input class="form-control" id="input-3" type="text" required="" name="username" placeholder="stevenjob">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="input-4">Mật khẩu *</label>
                            <input class="form-control" id="input-4" type="password" required="" name="password" placeholder="************">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="input-5">Nhập lại mật khẩu *</label>
                            <input class="form-control" id="input-5" type="password" required="" name="re-password" placeholder="************">
                        </div>
                        <div class="login_footer form-group d-flex justify-content-between">
                            <label class="cb-container">
                                <input type="checkbox"><span class="text-small">Đồng ý điều khoản và bảo mật</span><span class="checkmark"></span>
                            </label><a class="text-muted" href="page-contact.html">Tìm hiểu thêm</a>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login">Đăng ký</button>
                        </div>
                        <div class="text-muted text-center">Đã có tài khoản? <a href="page-signin.html">Đăng nhập</a></div>
                    </form>
                    <div class="mt-20">
                        <div class="divider-text-center"><span>Hoặc đăng nhập bằng Google</span></div>
                        <button class="btn social-login hover-up mt-20"><img src="assets/imgs/template/icons/icon-google.svg" alt="jobbox"><strong>Đăng nhập bằng Google</strong></button>
                    </div>
                </div>
                <div class="img-1 d-none d-lg-block">
                    <img class="shape-1" src="assets/imgs/page/login-register/img-1.svg" alt="JobBox">
                </div>
                <div class="img-2">
                    <img src="assets/imgs/page/login-register/img-2.svg" alt="JobBox">
                </div>
            </div>
        </div>
    </section>
</main>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>