<?php
require_once __DIR__ . '/../partials/header.php';
?>
<section class="section-box">
    <div class="container">
        <div class="pt-10">
            <div class="banner-hero banner-image-single">
                <img src="https://jthemes.com/themes/wp/jobbox/wp-content/themes/jobbox/assets/imgs/page/candidates/img.png" alt="<?= env('APP_NAME') ?>" />
            </div>

            <div class="box-company-profile">
                <div class="image-compay">
                    <img src="<?= $account->avatar ? asset($account->avatar) : 'https://secure.gravatar.com/avatar/33e8ba153f5ec9d50afec43e627b3775?s=96&#038;d=mm&#038;r=g' ?>" width="85" alt="<?= $account->name ?>" />
                </div>
                <div class="row mt-10">
                    <div class="col-lg-8 col-md-12">
                        <h5 class="f-18">
                            <?= $account->name ?>
                        </h5>
                        <p class="mt-0 font-md color-text-paragraph-2 mb-15"></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <nav class="nav-tavs-profile mb-5">
                        <ul>
                            <li>
                                <a class="btn btn-border aboutus-icon mb-20" href="/">Bảng điều khiển</a>
                            </li>
                            <li>
                                <a class="btn btn-border aboutus-icon mb-20" href="/account/profile">Thông tin tài khoản</a>
                            </li>
                            <li>
                                <a class="btn btn-border aboutus-icon mb-20" href="/logout">Đăng xuất</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-8">
                    <form>
                        <div class="form-group">
                            <label for="name" class="form-label">Họ tên</label>
                            <input type="text" id="name" name="name" class="form-control" value="<?= $account->name ?>">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control" disabled value="<?= $account->email ?>">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input type="tel" id="phone" name="phone" class="form-control" value="<?= $account->phone ?>">
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input type="text" id="address" name="address" class="form-control" value="<?= $account->address ?>">
                        </div>
                        <button type="button" class="btn btn-primary">Lưu thay đổi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>