<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <link rel="manifest" href="manifest.json" crossorigin>
    <meta name="msapplication-config" content="browserconfig.xml">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="http://localhost:8080/assets/dashboard/imgs/template/favicon.svg') ?>">
    <link href="http://localhost:8080/assets/dashboard/css/style.css?version=2.0" rel="stylesheet">
    <title><?= env('APP_NAME') ?> Dashboard - Job Portal HTML Template </title>
</head>

<body class="bg-white">
    <div class="container">
        <div class="login-register-cover">
            <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                <div class="form-login-cover">
                    <div class="text-center">
                        <p class="font-sm text-brand-2">Welcome back! </p>
                        <h2 class="mt-10 mb-5 text-brand-1">Member Login</h2>
                        <p class="font-sm text-muted mb-30">Access to all features. No credit card required.</p>
                        <button class="btn social-login hover-up mb-20"><img src="http://localhost:8080/assets/imgs/template/icons/icon-google.svg" alt="jobbox"><strong>Sign in with Google</strong></button>
                        <div class="divider-text-center"><span>Or continue with</span></div>
                    </div>
                    <form class="login-register text-start mt-20" action="/admin/login" method="post">
                        <div class="form-group">
                            <label class="form-label" for="input-1">Username or Email address *</label>
                            <input class="form-control" id="input-1" type="text" required="" name="email" placeholder="Steven Job">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="input-4">Password *</label>
                            <input class="form-control" id="input-4" type="password" required="" name="password" placeholder="************">
                        </div>
                        <div class="login_footer form-group d-flex justify-content-between">
                            <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Remenber me</span><span class="checkmark"></span>
                            </label><a class="text-muted" href="#">Forgot Password</a>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login">Login</button>
                        </div>
                        <div class="text-muted text-center">Don't have an Account? <a href="register.html">Sign up</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
require_once __DIR__ . '/partials/footer.php';
?>