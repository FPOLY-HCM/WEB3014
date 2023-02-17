<?php
require_once __DIR__ . '/../partials/header.php';
?>

<section class="section-box-2">
    <div class="container">
        <div class="banner-hero banner-image-single">
            <img src="<?= asset('assets/imgs/page/candidates/img.png') ?>" alt="<?= env('APP_NAME') ?>">
        </div>
        <div class="box-company-profile">
            <div class="image-compay"><img src="<?= asset('assets/imgs/page/candidates/candidate-profile.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
            <div class="row mt-10">
                <div class="col-lg-8 col-md-12">
                    <h5 class="f-18"><?= $account->name ?></h5>
                    <div class="mt-10 mb-15"><img src="<?= asset('assets/imgs/template/icons/star.svg') ?>" alt="<?= env('APP_NAME') ?>"><img src="<?= asset('assets/imgs/template/icons/star.svg') ?>" alt="<?= env('APP_NAME') ?>"><img src="<?= asset('assets/imgs/template/icons/star.svg') ?>" alt="<?= env('APP_NAME') ?>"><img src="<?= asset('assets/imgs/template/icons/star.svg') ?>" alt="<?= env('APP_NAME') ?>"><img src="<?= asset('assets/imgs/template/icons/star.svg') ?>" alt="<?= env('APP_NAME') ?>"><span class="font-xs color-text-mutted ml-10">(66)</span><img class="ml-30" src="<?= asset('assets/imgs/page/candidates/verified.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
                </div>
                <div class="col-lg-4 col-md-12 text-lg-end"><a class="btn btn-download-icon btn-apply btn-apply-big" href="page-contact.html">Tải CV</a></div>
            </div>
        </div>
        <div class="box-nav-tabs mt-40 mb-5">
            <ul class="nav" role="tablist">
                <li><a class="btn btn-border aboutus-icon mr-15 mb-5 active" href="#tab-short-bio" data-bs-toggle="tab" role="tab" aria-controls="tab-short-bio" aria-selected="true">Short Bio</a></li>
            </ul>
        </div>
        <div class="border-bottom pt-10 pb-10"></div>
    </div>
</section>
<section class="section-box mt-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="content-single">
                    <?= $account->bio ?>
                </div>
                <div class="box-related-job content-page">
                    <h3 class="mb-30">Công việc đã làm</h3>
                    <div class="box-list-jobs display-list">
                        <?php foreach ($jobs as $job) : ?>
                            <div class="col-xl-12 col-12">
                                <div class="card-grid-2 hover-up wow animate__animated animate__fadeIn"><span class="flash"></span>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="card-grid-2-image-left">
                                                <div class="image-box"><img src="<?= $job->company->logo ?>" alt="<?= $job->company->name ?>"></div>
                                                <div class="right-info"><a class="name-job" href="/companies/show?id=<?= $job->company->id ?>"><?= $job->company->name ?></a><span class="location-small">New York, US</span></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                            <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a class="btn btn-grey-small mr-5" href="#">Figma</a></div>
                                        </div>
                                    </div>
                                    <div class="card-block-info">
                                        <h4><a href="/jobs/show?id=<?= $job->id ?>"><?= $job->name ?></a></h4>
                                        <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time"><span><?= $job->created_at->diffForHumans() ?></span></div>
                                        <p class="font-sm color-text-paragraph mt-10"><?= $job->description ?>.</p>
                                        <div class="card-2-bottom mt-20">
                                            <div class="row">
                                                <div class="col-lg-7 col-7"><span class="card-text-price">Trạng thái:<span class="text-success">Đã hoàn thành</span></span></div>
                                                <div class="col-lg-5 col-5 text-end"><a class="btn btn-apply-now" href="/jobs/show?id=<?= $job->id ?>">Chi tiết</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
                <div class="sidebar-border">
                    <h5 class="f-18">Tổng quan</h5>
                    <div class="sidebar-list-job">
                        <ul>
                            <li>
                                <div class="sidebar-icon-item"><i class="fi-rr-briefcase"></i></div>
                                <div class="sidebar-text-info"><span class="text-description">Kinh nghiệm</span><strong class="small-heading"></strong></div>
                            </li>
                            <li>
                                <div class="sidebar-icon-item"><i class="fi-rr-dollar"></i></div>
                                <div class="sidebar-text-info"><span class="text-description">Lương mong muốn</span><strong class="small-heading"></strong></div>
                            </li>
                            <li>
                                <div class="sidebar-icon-item"><i class="fi-rr-marker"></i></div>
                                <div class="sidebar-text-info"><span class="text-description">Ngôn ngữ</span><strong class="small-heading"></strong></div>
                            </li>
                            <li>
                                <div class="sidebar-icon-item"><i class="fi-rr-time-fast"></i></div>
                                <div class="sidebar-text-info"><span class="text-description">Trình độ học vấn</span><strong class="small-heading"></strong></div>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-list-job">
                        <ul class="ul-disc">
                            <li>Address:</li>
                            <li>Phone:</li>
                            <li>Email:</li>
                        </ul>
                        <div class="mt-30"><a class="btn btn-send-message" href="page-contact.html">Gửi tin nhắn</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>