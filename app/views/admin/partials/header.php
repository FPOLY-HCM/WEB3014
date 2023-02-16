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

<body>
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="<?= asset('assets/dashboard/imgs/template/loading.gif') ?>" alt="<?= env('APP_NAME') ?>">
                </div>
            </div>
        </div>
    </div>
    <header class="header sticky-bar">
        <div class="container">
            <div class="main-header">
                <div class="header-left">
                    <div class="header-logo">
                        <a class="d-flex" href="/admin">
                            <img alt="<?= env('APP_NAME') ?>" src="<?= asset('assets/dashboard/imgs/page/dashboard/logo.svg') ?>">
                        </a>
                    </div>
                </div>
                <div class="header-search">
                    <div class="box-search">
                        <form action="">
                            <input class="form-control input-search" type="text" name="keyword" placeholder="Search">
                        </form>
                    </div>
                </div>
                <div class="header-menu d-none d-md-block">
                    <ul>
                        <li>
                            <a href="http://wp.alithemes.com/html/<?= env('APP_NAME') ?>/demos//admin">Home </a>
                        </li>
                        <li>
                            <a href="http://wp.alithemes.com/html/<?= env('APP_NAME') ?>/demos/page-about.html">About us </a>
                        </li>
                        <li>
                            <a href="http://wp.alithemes.com/html/<?= env('APP_NAME') ?>/demos/page-contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="header-right">
                    <div class="block-signin"><a class="btn btn-default icon-edit hover-up" href="post-job.html">Post Job</a>
                        <div class="dropdown d-inline-block"><a class="btn btn-notify" id="dropdownNotify" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"></a>
                            <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownNotify">
                                <li><a class="dropdown-item active" href="#">10 notifications</a></li>
                                <li><a class="dropdown-item" href="#">12 messages</a></li>
                                <li><a class="dropdown-item" href="#">20 replies</a></li>
                            </ul>
                        </div>
                        <div class="member-login"><img alt="" src="<?= asset('assets/dashboard/imgs/page/dashboard/profile.png') ?>">
                            <div class="info-member"> <strong class="color-brand-1"> <?= auth('admin')->user()->name ?> </strong>
                                <div class="dropdown"><a class="font-xs color-text-paragraph-2 icon-down" id="dropdownProfile" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static">Super Admin</a>
                                    <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownProfile">
                                        <li><a class="dropdown-item" href="profile.html">Profiles</a></li>
                                        <li><a class="dropdown-item" href="my-resume.html">CV Manager</a></li>
                                        <li><a class="dropdown-item" href="login.html">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="burger-icon burger-icon-white">
        <span class="burger-icon-top"></span>
        <span class="burger-icon-mid"></span>
        <span class="burger-icon-bottom"></span>
    </div>
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-content-area">
                <div class="perfect-scroll">
                    <div class="mobile-search mobile-header-border mb-30">
                        <form action="#">
                            <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-border">
                        <!-- mobile menu start-->
                        <nav>
                            <ul class="main-menu">
                                <li>
                                    <a class="dashboard2 active" href="/admin">
                                        <img src="<?= asset('assets/dashboard/imgs/page/dashboard/dashboard.svg') ?>" alt="<?= env('APP_NAME') ?>">
                                        <span class="name">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dashboard2" href="candidates.html">
                                        <img src="<?= asset('assets/dashboard/imgs/page/dashboard/candidates.svg') ?>" alt="<?= env('APP_NAME') ?>">
                                        <span class="name">Candidates</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dashboard2" href="recruiters.html">
                                        <img src="<?= asset('assets/dashboard/imgs/page/dashboard/recruiters.svg') ?>" alt="<?= env('APP_NAME') ?>">
                                        <span class="name">Recruiters</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dashboard2" href="my-job-grid.html">
                                        <img src="<?= asset('assets/dashboard/imgs/page/dashboard/jobs.svg') ?>" alt="<?= env('APP_NAME') ?>">
                                        <span class="name">My Jobs</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dashboard2" href="my-tasks-list.html">
                                        <img src="<?= asset('assets/dashboard/imgs/page/dashboard/tasks.svg') ?>" alt="<?= env('APP_NAME') ?>">
                                        <span class="name">Tasks List</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dashboard2" href="profile.html">
                                        <img src="<?= asset('assets/dashboard/imgs/page/dashboard/profiles.svg') ?>" alt="<?= env('APP_NAME') ?>">
                                        <span class="name">My Profiles</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dashboard2" href="my-resume.html">
                                        <img src="<?= asset('assets/dashboard/imgs/page/dashboard/cv-manage.svg') ?>" alt="<?= env('APP_NAME') ?>">
                                        <span class="name">CV Manage</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dashboard2" href="settings.html">
                                        <img src="<?= asset('assets/dashboard/imgs/page/dashboard/settings.svg') ?>" alt="<?= env('APP_NAME') ?>">
                                        <span class="name">Setting</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dashboard2" href="authentication.html">
                                        <img src="<?= asset('assets/dashboard/imgs/page/dashboard/authentication.svg') ?>" alt="<?= env('APP_NAME') ?>">
                                        <span class="name">Authentication</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dashboard2" href="login.html">
                                        <img src="<?= asset('assets/dashboard/imgs/page/dashboard/logout.svg') ?>" alt="<?= env('APP_NAME') ?>">
                                        <span class="name">Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="mobile-account">
                        <h6 class="mb-10">Your Account</h6>
                        <ul class="mobile-menu font-heading">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Work Preferences</a></li>
                            <li><a href="#">Account Settings</a></li>
                            <li><a href="#">Go Pro</a></li>
                            <li><a href="page-signin.html">Sign Out</a></li>
                        </ul>
                        <div class="mb-15 mt-15"> <a class="btn btn-default icon-edit hover-up" href="post-job.html">Post Job</a></div>
                    </div>
                    <div class="site-copyright">Copyright 2022 &copy; <?= env('APP_NAME') ?>. <br>Designed by AliThemes.</div>
                </div>
            </div>
        </div>
    </div>
    <main class="main">
        <div class="nav">
            <a class="btn btn-expanded"></a>
            <nav class="nav-main-menu">
                <ul class="main-menu">
                    <li>
                        <a class="dashboard2 active" href="/admin">
                            <img src="<?= asset('assets/dashboard/imgs/page/dashboard/dashboard.svg') ?>" alt="<?= env('APP_NAME') ?>">
                            <span class="name">Bảng điều khiển</span>
                        </a>
                    </li>
                    <li>
                        <a class="dashboard2" href="/admin/users">
                            <img src="<?= asset('assets/dashboard/imgs/page/dashboard/candidates.svg') ?>" alt="<?= env('APP_NAME') ?>">
                            <span class="name">Người dùng</span>
                        </a>
                    </li>
                    <li>
                        <a class="dashboard2" href="/admin/companies">
                            <img src="<?= asset('assets/dashboard/imgs/page/dashboard/recruiters.svg') ?>" alt="<?= env('APP_NAME') ?>">
                            <span class="name">Nhà tuyển dụng</span>
                        </a>
                    </li>
                    <li>
                        <a class="dashboard2" href="/admin/jobs">
                            <img src="<?= asset('assets/dashboard/imgs/page/dashboard/jobs.svg') ?>" alt="<?= env('APP_NAME') ?>">
                            <span class="name">Việc làm</span>
                        </a>
                    </li>
                    <li>
                        <a class="dashboard2" href="/admin/categories">
                            <img src="<?= asset('assets/dashboard/imgs/page/dashboard/tasks.svg') ?>" alt="<?= env('APP_NAME') ?>">
                            <span class="name">Danh mục</span>
                        </a>
                    </li>
                    <li>
                        <a class="dashboard2" href="/admin/settings">
                            <img src="<?= asset('assets/dashboard/imgs/page/dashboard/tasks.svg') ?>" alt="<?= env('APP_NAME') ?>">
                            <span class="name">Cài đặt</span>
                        </a>
                    </li>
                    <li>
                        <a class="dashboard2" href="/admin/logout">
                            <img src="<?= asset('assets/dashboard/imgs/page/dashboard/logout.svg') ?>" alt="<?= env('APP_NAME') ?>">
                            <span class="name">Đăng xuất</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="border-bottom mb-20 mt-20"></div>
        </div>
        <div class="box-content">