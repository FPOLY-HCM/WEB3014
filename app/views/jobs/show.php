<?php
require_once __DIR__ . '/../partials/header.php';
?>

<section class="section-box-2">
    <div class="container">
        <div class="banner-hero banner-image-single"><img src="<?= asset('assets/imgs/page/job-single/thumb.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
        <div class="row mt-10">
            <div class="col-lg-8 col-md-12">
                <h3><?= $job->name ?></h3>
                <div class="mt-0 mb-15">
                    <span class="card-briefcase">Fulltime</span>
                    <span class="card-time"><?= $job->created_at->diffForHumans() ?></span>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 text-lg-end">
                <div class="btn btn-apply-icon btn-apply btn-apply-big hover-up" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Ứng tuyển ngay</div>
            </div>
        </div>
        <div class="border-bottom pt-10 pb-10"></div>
    </div>
</section>
<section class="section-box mt-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="job-overview">
                    <h5 class="border-bottom pb-15 mb-30">Thông tin việc làm</h5>
                    <div class="row">
                        <div class="col-md-6 d-flex">
                            <div class="sidebar-icon-item">
                                <img src="<?= asset('assets/imgs/page/job-single/industry.svg') ?>" alt="<?= env('APP_NAME') ?>">
                            </div>
                            <div class="sidebar-text-info ml-10"><span class="text-description industry-icon mb-10">Nghành nghề</span>
                                <strong class="small-heading"> Mechanical / Auto / Automotive, Civil / Construction</strong>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex mt-sm-15">
                            <div class="sidebar-icon-item">
                                <img src="<?= asset('assets/imgs/page/job-single/job-level.svg') ?>" alt="<?= env('APP_NAME') ?>">
                            </div>
                            <div class="sidebar-text-info ml-10"><span class="text-description joblevel-icon mb-10">Cấp bậc</span>
                                <strong class="small-heading">Có kinh nghiệm (Non - Manager)</strong>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-25">
                        <div class="col-md-6 d-flex mt-sm-15">
                            <div class="sidebar-icon-item">
                                <img src="<?= asset('assets/imgs/page/job-single/salary.svg') ?>" alt="<?= env('APP_NAME') ?>">
                            </div>
                            <div class="sidebar-text-info ml-10"><span class="text-description salary-icon mb-10">Lương</span>
                                <strong class="small-heading"><?= money_format($job->salary) ?></strong>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="sidebar-icon-item">
                                <img src="<?= asset('assets/imgs/page/job-single/experience.svg') ?>" alt="<?= env('APP_NAME') ?>">
                            </div>
                            <div class="sidebar-text-info ml-10"><span class="text-description experience-icon mb-10">Kinh nghiệm</span>
                                <strong class="small-heading">1 - 2 năm</strong>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-25">
                        <div class="col-md-6 d-flex mt-sm-15">
                            <div class="sidebar-icon-item">
                                <img src="<?= asset('assets/imgs/page/job-single/job-type.svg') ?>" alt="<?= env('APP_NAME') ?>">
                            </div>
                            <div class="sidebar-text-info ml-10"><span class="text-description jobtype-icon mb-10">Công việc</span>
                                <strong class="small-heading">Dài hạn</strong>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex mt-sm-15">
                            <div class="sidebar-icon-item">
                                <img src="<?= asset('assets/imgs/page/job-single/deadline.svg') ?>" alt="<?= env('APP_NAME') ?>">
                            </div>
                            <div class="sidebar-text-info ml-10"><span class="text-description mb-10">Ngày hết hạn</span>
                                <strong class="small-heading">10/08/2022</strong>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-25">
                        <div class="col-md-6 d-flex mt-sm-15">
                            <div class="sidebar-icon-item">
                                <img src="<?= asset('assets/imgs/page/job-single/updated.svg') ?>" alt="<?= env('APP_NAME') ?>">
                            </div>
                            <div class="sidebar-text-info ml-10"><span class="text-description jobtype-icon mb-10">Ngày cập nhật</span>
                                <strong class="small-heading"><?= $job->updated_at->format('d/m/Y') ?></strong>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex mt-sm-15">
                            <div class="sidebar-icon-item">
                                <img src="<?= asset('assets/imgs/page/job-single/location.svg') ?>" alt="<?= env('APP_NAME') ?>">
                            </div>
                            <div class="sidebar-text-info ml-10"><span class="text-description mb-10">Địa chỉ</span>
                                <strong class="small-heading"><?= $job->company->address ?></strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-single">
                    <?= $job->content ?>
                </div>
                <div class="author-single">
                    <span><?= $job->company->name ?></span>
                </div>
                <div class="single-apply-jobs">
                    <div class="row align-items-center">
                        <div class="col-md-12 text-lg-end social-share">
                            <h6 class="color-text-paragraph-2 d-inline-block d-baseline mr-10">Chia sẻ</h6>
                            <a class="mr-5 d-inline-block d-middle" href="#">
                                <img alt="<?= env('APP_NAME') ?>" src="<?= asset('assets/imgs/template/icons/share-fb.svg') ?>">
                            </a>
                            <a class="mr-5 d-inline-block d-middle" href="#">
                                <img alt="<?= env('APP_NAME') ?>" src="<?= asset('assets/imgs/template/icons/share-tw.svg') ?>">
                            </a>
                            <a class="mr-5 d-inline-block d-middle" href="#">
                                <img alt="<?= env('APP_NAME') ?>" src="<?= asset('assets/imgs/template/icons/share-red.svg') ?>">
                            </a>
                            <a class="d-inline-block d-middle" href="#">
                                <img alt="<?= env('APP_NAME') ?>" src="<?= asset('assets/imgs/template/icons/share-whatsapp.svg') ?>">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
                <div class="sidebar-border">
                    <div class="sidebar-heading">
                        <div class="avatar-sidebar">
                            <figure>
                                <img alt="<?= env('APP_NAME') ?>" src="<?= asset($job->company->logo) ?>">
                            </figure>
                            <div class="sidebar-info">
                                <span class="sidebar-company"><?= $job->company->name ?></span>
                                <span class="card-location"><?= $job->company->address ?></span>
                                <a class="link-underline mt-15" href="#"><?= $job->company->jobs_count ?> việc làm</a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-list-job">
                        <div class="box-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.3150609575905!2d-87.6235655!3d41.886080899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2ca8b34afe61%3A0x6caeb5f721ca846!2s205%20N%20Michigan%20Ave%20Suit%20810%2C%20Chicago%2C%20IL%2060601%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1658551322537!5m2!1svi!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <ul class="ul-disc">
                            <li><?= $job->address ?></li>
                            <li>Phone: <?= $job->phone ?></li>
                            <li>Email: <?= $job->email ?></li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-border">
                    <h6 class="f-18">Việc làm liên quan</h6>
                    <div class="sidebar-list-job">
                        <ul>
                            <?php foreach ($similarJobs as $job) : ?>
                                <li>
                                    <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                                        <div class="image">
                                            <a href="/jobs/show?id=<?= $job->id ?>">
                                                <img src="<?= asset($job->company->logo) ?>" alt="<?= $job->company->name ?>">
                                            </a>
                                        </div>
                                        <div class="info-text">
                                            <h5 class="font-md font-bold color-brand-1">
                                                <a href="/jobs/show?id=<?= $job->id ?>"><?= $job->name ?></a>
                                            </h5>
                                            <div class="mt-0">
                                                <span class="card-briefcase">Fulltime</span>
                                                <span class="card-time"><?= $job->created_at->diffForHumans() ?></span>
                                            </div>
                                            <div class="mt-5">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h6 class="card-price"><?= money_format($job->salary) ?>/<?= $job->salary_range ?></h6>
                                                    </div>
                                                    <div class="col-6 text-end">
                                                        <span class="card-briefcase"><?= $job->city->name ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>