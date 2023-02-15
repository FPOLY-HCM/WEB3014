<?php
require_once __DIR__ . '/../partials/header.php';
?>

<main class="main">
    <section class="section-box-2">
        <div class="container">
            <div class="banner-hero banner-image-single"><img src="<?= $company->cover_image ?>" alt="<?= $company->name ?>"></div>
            <div class="box-company-profile">
                <div class="image-compay"><img src="/assets/imgs/page/company/company.png" alt="jobBox"></div>
                <div class="row mt-10">
                    <div class="col-lg-8 col-md-12">
                        <h5 class="f-18"><?= $company->name ?><span class="card-location font-regular ml-20"><?= $company->address ?></span></h5>
                    </div>
                    <div class="col-lg-4 col-md-12 text-lg-end"><a class="btn btn-call-icon btn-apply btn-apply-big" href="page-contact.html">Liên hệ</a></div>
                </div>
            </div>
            <div class="box-nav-tabs mt-40 mb-5">
                <ul class="nav" role="tablist">
                    <li><a class="btn btn-border aboutus-icon mr-15 mb-5 active" href="#tab-about" data-bs-toggle="tab" role="tab" aria-controls="tab-about" aria-selected="true">Về chúng tôi</a></li>
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
                        <?= $company->description ?>
                    </div>
                    <div class="box-related-job content-page">
                        <h5 class="mb-30">Công việc mới nhất</h5>
                        <div class="box-list-jobs display-list">
                            <?php foreach ($company->jobs as $job) : ?>
                                <div class="col-xl-12 col-12">
                                    <div class="card-grid-2 hover-up"><span class="flash"></span>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="card-grid-2-image-left">
                                                    <div class="image-box"><img src="<?= $company->logo ?>" alt="<?= $job->name ?>"></div>
                                                    <div class="right-info"><a class="name-job" href=""><?= $company->name ?></a><span class="location-small"><?= $job->address ?></span></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                                <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a class="btn btn-grey-small mr-5" href="#">Figma</a></div>
                                            </div>
                                        </div>
                                        <div class="card-block-info">
                                            <h4><a href="job-details.html"><?= $job->name ?></a></h4>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time"><span>5</span><span> mins ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-10"><?= $job->description ?>.</p>
                                            <div class="card-2-bottom mt-20">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price"><?= money_format($job->salary) ?></span><span class="text-muted">/<?= $job->salary_range ?></span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
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
                        <div class="sidebar-heading">
                            <div class="avatar-sidebar">
                                <div class="sidebar-info pl-0"><span class="sidebar-company"><?= $company->name ?></span><span class="card-location"><?= $company->address ?></span></div>
                            </div>
                        </div>
                        <div class="sidebar-list-job">
                            <div class="box-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.3150609575905!2d-87.6235655!3d41.886080899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2ca8b34afe61%3A0x6caeb5f721ca846!2s205%20N%20Michigan%20Ave%20Suit%20810%2C%20Chicago%2C%20IL%2060601%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1658551322537!5m2!1svi!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="sidebar-list-job">
                            <ul>
                                <li>
                                    <div class="sidebar-icon-item"><i class="fi-rr-marker"></i></div>
                                    <div class="sidebar-text-info"><span class="text-description">Địa chỉ</span><strong class="small-heading"><?= $company->address ?></strong></div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-list-job">
                            <ul class="ul-disc">
                                <li><?= $company->address ?></li>
                            </ul>
                            <div class="mt-30"><a class="btn btn-send-message" href="page-contact.html">Gửi tin nhắn</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>