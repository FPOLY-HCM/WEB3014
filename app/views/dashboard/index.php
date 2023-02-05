<?php
require_once __DIR__ . '/partials/header.php';
?>

<main class="main">
    <div class="nav">
        <a class="btn btn-expanded"></a>
        <nav class="nav-main-menu">
            <ul class="main-menu">
                <li> <a class="dashboard2 active" href="index.html"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/dashboard.svg') ?>" alt="<?= env('APP_NAME') ?>"><span class="name">Dashboard</span></a>
                </li>
                <li> <a class="dashboard2" href="candidates.html"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/candidates.svg') ?>" alt="<?= env('APP_NAME') ?>"><span class="name">Candidates</span></a>
                </li>
                <li> <a class="dashboard2" href="recruiters.html"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/recruiters.svg') ?>" alt="<?= env('APP_NAME') ?>"><span class="name">Recruiters</span></a>
                </li>
                <li> <a class="dashboard2" href="my-job-grid.html"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/jobs.svg') ?>" alt="<?= env('APP_NAME') ?>"><span class="name">My Jobs</span></a>
                </li>
                <li> <a class="dashboard2" href="my-tasks-list.html"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/tasks.svg') ?>" alt="<?= env('APP_NAME') ?>"><span class="name">Tasks List</span></a>
                </li>
                <li> <a class="dashboard2" href="profile.html"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/profiles.svg') ?>" alt="<?= env('APP_NAME') ?>"><span class="name">My Profiles</span></a>
                </li>
                <li> <a class="dashboard2" href="my-resume.html"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/cv-manage.svg') ?>" alt="<?= env('APP_NAME') ?>"><span class="name">CV Manage</span></a>
                </li>
                <li> <a class="dashboard2" href="settings.html"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/settings.svg') ?>" alt="<?= env('APP_NAME') ?>"><span class="name">Setting</span></a>
                </li>
                <li> <a class="dashboard2" href="authentication.html"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/authentication.svg') ?>" alt="<?= env('APP_NAME') ?>"><span class="name">Authentication</span></a>
                </li>
                <li> <a class="dashboard2" href="login.html"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/logout.svg') ?>" alt="<?= env('APP_NAME') ?>"><span class="name">Logout</span></a>
                </li>
            </ul>
        </nav>
        <div class="border-bottom mb-20 mt-20"></div>
        <div class="box-profile-completed text-center mb-30">
            <div id="circle-staticstic-demo"></div>
            <h6 class="mb-10">Profile Completed</h6>
            <p class="font-xs color-text-mutted">Please add detailed information to your profile. This will help you develop your career more quickly.</p>
        </div>
        <div class="sidebar-border-bg mt-50"><span class="text-grey">WE ARE</span><span class="text-hiring">HIRING</span>
            <p class="font-xxs color-text-paragraph mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto</p>
            <div class="mt-15"><a class="btn btn-paragraph-2" href="#">Know More</a></div>
        </div>
    </div>
    <div class="box-content">
        <div class="box-heading">
            <div class="box-title">
                <h3 class="mb-35">Dashboard</h3>
            </div>
            <div class="box-breadcrumb">
                <div class="breadcrumbs">
                    <ul>
                        <li> <a class="icon-home" href="index.html">Admin</a></li>
                        <li><span>Dashboard</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-8 col-xl-7 col-lg-7">
                <div class="section-box">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6">
                            <div class="card-style-1 hover-up">
                                <div class="card-image"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/computer.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                <div class="card-info">
                                    <div class="card-title">
                                        <h3>1568<span class="font-sm status up">25<span>%</span></span>
                                        </h3>
                                    </div>
                                    <p class="color-text-paragraph-2">Interview Schedules</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6">
                            <div class="card-style-1 hover-up">
                                <div class="card-image"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/bank.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                <div class="card-info">
                                    <div class="card-title">
                                        <h3>284<span class="font-sm status up">5<span>%</span></span>
                                        </h3>
                                    </div>
                                    <p class="color-text-paragraph-2">Applied Jobs</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6">
                            <div class="card-style-1 hover-up">
                                <div class="card-image"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/headphone.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                <div class="card-info">
                                    <div class="card-title">
                                        <h3>985<span class="font-sm status up">5<span>%</span></span>
                                        </h3>
                                    </div>
                                    <p class="color-text-paragraph-2">Application Sent</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6">
                            <div class="card-style-1 hover-up">
                                <div class="card-image"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/open-file.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                <div class="card-info">
                                    <div class="card-title">
                                        <h3>2356<span class="font-sm status down">- 2%</span>
                                        </h3>
                                    </div>
                                    <p class="color-text-paragraph-2">New Messages</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6">
                            <div class="card-style-1 hover-up">
                                <div class="card-image"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/doc.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                <div class="card-info">
                                    <div class="card-title">
                                        <h3>254<span class="font-sm status up">2<span>%</span></span>
                                        </h3>
                                    </div>
                                    <p class="color-text-paragraph-2">Articles Added</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6">
                            <div class="card-style-1 hover-up">
                                <div class="card-image"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/man.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                <div class="card-info">
                                    <div class="card-title">
                                        <h3>548<span class="font-sm status up">48<span>%</span></span>
                                        </h3>
                                    </div>
                                    <p class="color-text-paragraph-2">CV Added</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-box">
                    <div class="container">
                        <div class="panel-white">
                            <div class="panel-head">
                                <h5>Vacancy Stats</h5><a class="menudrop" id="dropdownMenu2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownMenu2">
                                    <li><a class="dropdown-item active" href="#">Add new</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Actions</a></li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <div id="chartdiv"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-box">
                    <div class="container">
                        <div class="panel-white">
                            <div class="panel-head">
                                <h5>Latest Jobs</h5><a class="menudrop" id="dropdownMenu3" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownMenu3">
                                    <li><a class="dropdown-item active" href="#">Add new</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Actions</a></li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <div class="card-style-2 hover-up">
                                    <div class="card-head">
                                        <div class="card-image"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/img1.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                        <div class="card-title">
                                            <h6>Senior Full Stack Engineer, Creator Success</h6><span class="job-type">Full time</span><span class="time-post">3mins ago</span><span class="location">New York, US</span>
                                        </div>
                                    </div>
                                    <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a>
                                    </div>
                                    <div class="card-price"><strong>$300</strong><span class="hour">/Hour</span></div>
                                </div>
                                <div class="card-style-2 hover-up">
                                    <div class="card-head">
                                        <div class="card-image"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/img2.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                        <div class="card-title">
                                            <h6>Senior Full Stack Engineer, Creator Success</h6><span class="job-type">Full time</span><span class="time-post">3mins ago</span><span class="location">Chicago, US</span>
                                        </div>
                                    </div>
                                    <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a><a class="btn btn-tag">PSD</a>
                                    </div>
                                    <div class="card-price"><strong>$650</strong><span class="hour">/Hour</span></div>
                                </div>
                                <div class="card-style-2 hover-up">
                                    <div class="card-head">
                                        <div class="card-image"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/img3.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                        <div class="card-title">
                                            <h6>Lead Product/UX/UI Designer Role</h6><span class="job-type">Full time</span><span class="time-post">3mins ago</span><span class="location">Paris, France</span>
                                        </div>
                                    </div>
                                    <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a><a class="btn btn-tag">PSD</a>
                                    </div>
                                    <div class="card-price"><strong>$1200</strong><span class="hour">/Hour</span></div>
                                </div>
                                <div class="card-style-2 hover-up">
                                    <div class="card-head">
                                        <div class="card-image"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/img4.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                        <div class="card-title">
                                            <h6>Marketing Graphic Designer</h6><span class="job-type">Full time</span><span class="time-post">3mins ago</span><span class="location">Tokyto, Japan</span>
                                        </div>
                                    </div>
                                    <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a><a class="btn btn-tag">PSD</a>
                                    </div>
                                    <div class="card-price"><strong>$580</strong><span class="hour">/Hour</span></div>
                                </div>
                                <div class="card-style-2 hover-up">
                                    <div class="card-head">
                                        <div class="card-image"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/img5.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                        <div class="card-title">
                                            <h6>Director, Product Design - Creator</h6><span class="job-type">Full time</span><span class="time-post">3mins ago</span><span class="location">Ha Noi, Vietnam</span>
                                        </div>
                                    </div>
                                    <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a><a class="btn btn-tag">PSD</a>
                                    </div>
                                    <div class="card-price"><strong>$1500</strong><span class="hour">/Hour</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-5 col-lg-5">
                <div class="section-box">
                    <div class="container">
                        <div class="panel-white">
                            <div class="panel-head">
                                <h5>Top Candidates</h5><a class="menudrop" id="dropdownMenu4" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownMenu4">
                                    <li><a class="dropdown-item active" href="#">Add new</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Actions</a></li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <div class="card-style-3 hover-up">
                                    <div class="card-image online"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/avata1.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                    <div class="card-title">
                                        <h6>Robert Fox</h6><span class="job-position">UI/UX Designer</span>
                                    </div>
                                    <div class="card-location"> <span class="location">Chicago, US</span></div>
                                    <div class="card-rating"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <span class="font-xs color-text-mutted">
                                            (65)</span></div>
                                </div>
                                <div class="card-style-3 hover-up">
                                    <div class="card-image online"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/avata2.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                    <div class="card-title">
                                        <h6>Cody Fisher</h6><span class="job-position">Network Engineer</span>
                                    </div>
                                    <div class="card-location"> <span class="location">New York, US</span></div>
                                    <div class="card-rating"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <span class="font-xs color-text-mutted">
                                            (65)</span></div>
                                </div>
                                <div class="card-style-3 hover-up">
                                    <div class="card-image online"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/avata3.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                    <div class="card-title">
                                        <h6>Jane Cooper</h6><span class="job-position">Content Manager</span>
                                    </div>
                                    <div class="card-location"> <span class="location">Chicago, US</span></div>
                                    <div class="card-rating"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <span class="font-xs color-text-mutted">
                                            (65)</span></div>
                                </div>
                                <div class="card-style-3 hover-up">
                                    <div class="card-image online"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/avata4.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                    <div class="card-title">
                                        <h6>Jerome Bell</h6><span class="job-position">Frontend Developer</span>
                                    </div>
                                    <div class="card-location"> <span class="location">Chicago, US</span></div>
                                    <div class="card-rating"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <span class="font-xs color-text-mutted">
                                            (65)</span></div>
                                </div>
                                <div class="card-style-3 hover-up">
                                    <div class="card-image online"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/avata5.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                    <div class="card-title">
                                        <h6>Floyd Miles</h6><span class="job-position">NodeJS Dev</span>
                                    </div>
                                    <div class="card-location"> <span class="location">Chicago, US</span></div>
                                    <div class="card-rating"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <span class="font-xs color-text-mutted">
                                            (65)</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-box">
                    <div class="container">
                        <div class="panel-white">
                            <div class="panel-head">
                                <h5>Top Recruiters</h5><a class="menudrop" id="dropdownMenu5" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownMenu5">
                                    <li><a class="dropdown-item active" href="#">Add new</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Actions</a></li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 pr-5 pl-5">
                                        <div class="card-style-4 hover-up">
                                            <div class="d-flex">
                                                <div class="card-image"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/avata1.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                                <div class="card-title">
                                                    <h6>Robert Fox</h6><img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star-none.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star-none.svg') ?>" alt="<?= env('APP_NAME') ?>"> <span class="font-xs color-text-mutted">
                                                        (65)</span>
                                                </div>
                                            </div>
                                            <div class="card-location d-flex"><span class="location">Red, CA</span><span class="jobs-number">25 Open Jobs</span></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 pr-5 pl-5">
                                        <div class="card-style-4 hover-up">
                                            <div class="d-flex">
                                                <div class="card-image"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/avata2.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                                <div class="card-title">
                                                    <h6>Cody Fisher</h6><img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star-none.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star-none.svg') ?>" alt="<?= env('APP_NAME') ?>"> <span class="font-xs color-text-mutted">
                                                        (65)</span>
                                                </div>
                                            </div>
                                            <div class="card-location d-flex"><span class="location">Chicago, US</span><span class="jobs-number">25 Open Jobs</span></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 pr-5 pl-5">
                                        <div class="card-style-4 hover-up">
                                            <div class="d-flex">
                                                <div class="card-image"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/avata3.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                                <div class="card-title">
                                                    <h6>Jane Cooper</h6><img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star-none.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star-none.svg') ?>" alt="<?= env('APP_NAME') ?>"> <span class="font-xs color-text-mutted">
                                                        (65)</span>
                                                </div>
                                            </div>
                                            <div class="card-location d-flex"><span class="location">Austin, TX</span><span class="jobs-number">25 Open Jobs</span></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 pr-5 pl-5">
                                        <div class="card-style-4 hover-up">
                                            <div class="d-flex">
                                                <div class="card-image"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/avata4.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                                <div class="card-title">
                                                    <h6>Jerome Bell</h6><img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star-none.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star-none.svg') ?>" alt="<?= env('APP_NAME') ?>"> <span class="font-xs color-text-mutted">
                                                        (65)</span>
                                                </div>
                                            </div>
                                            <div class="card-location d-flex"><span class="location">Remote</span><span class="jobs-number">25 Open Jobs</span></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 pr-5 pl-5">
                                        <div class="card-style-4 hover-up">
                                            <div class="d-flex">
                                                <div class="card-image"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/avata5.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                                <div class="card-title">
                                                    <h6>Floyd Miles</h6><img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star-none.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star-none.svg') ?>" alt="<?= env('APP_NAME') ?>"> <span class="font-xs color-text-mutted">
                                                        (65)</span>
                                                </div>
                                            </div>
                                            <div class="card-location d-flex"><span class="location">Boston, US</span><span class="jobs-number">25 Open Jobs</span></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 pr-5 pl-5">
                                        <div class="card-style-4 hover-up">
                                            <div class="d-flex">
                                                <div class="card-image"><img src="<?= asset('assets/dashboard/imgs/page/dashboard/avata1.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                                <div class="card-title">
                                                    <h6>Devon Lane</h6><img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star-none.svg') ?>" alt="<?= env('APP_NAME') ?>"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/star-none.svg') ?>" alt="<?= env('APP_NAME') ?>"> <span class="font-xs color-text-mutted">
                                                        (65)</span>
                                                </div>
                                            </div>
                                            <div class="card-location d-flex"><span class="location">Chicago, US</span><span class="jobs-number">25 Open Jobs</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-box">
                    <div class="container">
                        <div class="panel-white">
                            <div class="panel-head">
                                <h5>Queries by search</h5><a class="menudrop" id="dropdownMenu6" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownMenu6">
                                    <li><a class="dropdown-item active" href="#">Add new</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Actions</a></li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <div class="card-style-5 hover-up">
                                    <div class="card-title">
                                        <h6 class="font-sm">Developer</h6>
                                    </div>
                                    <div class="card-progress">
                                        <div class="number font-sm">2635</div>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 100%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-style-5 hover-up">
                                    <div class="card-title">
                                        <h6 class="font-sm">UI/Ux Designer</h6>
                                    </div>
                                    <div class="card-progress">
                                        <div class="number font-sm">1658</div>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 90%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-style-5 hover-up">
                                    <div class="card-title">
                                        <h6 class="font-sm">Marketing</h6>
                                    </div>
                                    <div class="card-progress">
                                        <div class="number font-sm">1452</div>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 80%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-style-5 hover-up">
                                    <div class="card-title">
                                        <h6 class="font-sm">Content manager</h6>
                                    </div>
                                    <div class="card-progress">
                                        <div class="number font-sm">1325</div>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 70%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-style-5 hover-up">
                                    <div class="card-title">
                                        <h6 class="font-sm">Ruby on rain</h6>
                                    </div>
                                    <div class="card-progress">
                                        <div class="number font-sm">985</div>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 60%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-style-5 hover-up">
                                    <div class="card-title">
                                        <h6 class="font-sm">Human hunter</h6>
                                    </div>
                                    <div class="card-progress">
                                        <div class="number font-sm">920</div>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 50%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-style-5 hover-up">
                                    <div class="card-title">
                                        <h6 class="font-sm">Finance</h6>
                                    </div>
                                    <div class="card-progress">
                                        <div class="number font-sm">853</div>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 40%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-10">
            <div class="section-box">
                <div class="container">
                    <div class="panel-white pt-30 pb-30 pl-15 pr-15">
                        <div class="box-swiper">
                            <div class="swiper-container swiper-group-10">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/microsoft.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                    <div class="swiper-slide"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/sony.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                    <div class="swiper-slide"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/acer.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                    <div class="swiper-slide"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/nokia.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                    <div class="swiper-slide"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/asus.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                    <div class="swiper-slide"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/casio.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                    <div class="swiper-slide"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/dell.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                    <div class="swiper-slide"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/panasonic.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                    <div class="swiper-slide"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/vaio.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                    <div class="swiper-slide"> <img src="<?= asset('assets/dashboard/imgs/page/dashboard/sony.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer mt-20">
            <div class="container">
                <div class="box-footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 mb-25 text-center text-md-start">
                            <p class="font-sm color-text-paragraph-2">© 2022 - <a class="color-brand-2" href="https://themeforest.net/item/<?= env('APP_NAME') ?>-job-portal-html-bootstrap-5-template/39217891" target="_blank"><?= env('APP_NAME') ?> </a>Dashboard <span> Made by </span><a class="color-brand-2" href="http://alithemes.com" target="_blank"> AliThemes</a></p>
                        </div>
                        <div class="col-md-6 col-sm-12 text-center text-md-end mb-25">
                            <ul class="menu-footer">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</main>

<?php
require_once __DIR__ . '/partials/footer.php';
?>