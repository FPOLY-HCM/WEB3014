<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <link rel="shortcut icon" type="image/x-icon" href="<?= asset('assets/dashboard/imgs/template/favicon.svg') ?>">
    <link href="<?= asset('assets/dashboard/css/style.css') ?>" rel="stylesheet">
    <title><?= env('APP_NAME') ?></title>
</head>

<body class="bg-white">
    <div class="container">
        <div class="login-register-cover">
            <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                <div class="form-login-cover">
                    <div class="text-center">
                        <p class="font-sm text-brand-2">Chào bạn đã quay trở lại!</p>
                        <h2 class="mt-10 mb-5 text-brand-1">Đăng nhập quản trị</h2>
                        <p class="font-sm text-muted mb-30">Đăng nhập vào trang quản trị để quản lý trang web.</p>
                    </div>
                    <form class="login-register text-start mt-20" action="/admin/login" method="post">
                        <div class="form-group">
                            <label class="form-label" for="email">Địa chỉ email *</label>
                            <input class="form-control" id="email" type="text" required name="email" placeholder="Steven Job">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">Mật khẩu *</label>
                            <input class="form-control" id="password" type="password" required name="password" placeholder="************">
                        </div>
                        <div class="login_footer form-group d-flex justify-content-between">
                            <label class="cb-container">
                                <input type="checkbox">
                                <span class="text-small">Ghi nhớ</span>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-brand-1 hover-up w-100" type="submit">Đăng nhập</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
