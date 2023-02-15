<?php
require_once __DIR__ . '/partials/header.php';
?>

<div class="bg-homepage1"></div>
<section class="section-box">
    <div class="banner-hero hero-1">
        <div class="banner-inner">
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div class="block-banner">
                        <h1 class="heading-banner wow animate__animated animate__fadeInUp">The <span class="color-brand-2">Easiest Way</span><br class="d-none d-lg-block">to Get Your New Job</h1>
                        <div class="banner-description mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Each month, more than 3 million job seekers turn to <br class="d-none d-lg-block">website in their search for work, making over 140,000 <br class="d-none d-lg-block">applications every single day</div>
                        <div class="form-find mt-40 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                            <form>
                                <div class="box-industry">
                                    <select class="form-input mr-10 select-active input-industry">
                                        <?php foreach ($categories as $category) : ?>
                                            <option value="<?= $category->id ?>"><?= $category->name ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <select class="form-input mr-10 select-active">
                                    <option value="">Vị trí</option>
                                    <?php foreach ($cities as $city) : ?>
                                        <option value="<?= $city->id ?>"><?= $city->name ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <input class="form-input input-keysearch mr-10" type="text" placeholder="Từ khoá... ">
                                <button class="btn btn-default btn-find font-sm">Tìm kiếm</button>
                            </form>
                        </div>
                        <div class="list-tags-banner mt-60 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                            <strong>Popular Searches:</strong>
                            <a href="#">Designer</a>, <a href="#">Web</a>, <a href="#">IOS</a>, <a href="#">Developer</a>, <a href="#">PHP</a>, <a href="#">Senior</a>, <a href="#">Engineer</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 d-none d-xl-block col-md-6">
                    <div class="banner-imgs">
                        <div class="block-1 shape-1"><img class="img-responsive" alt="<?= env('APP_NAME') ?>" src="<?= asset('assets/imgs/page/homepage1/banner1.png') ?>"></div>
                        <div class="block-2 shape-2"><img class="img-responsive" alt="<?= env('APP_NAME') ?>" src="<?= asset('assets/imgs/page/homepage1/banner2.png') ?>"></div>
                        <div class="block-3 shape-3"><img class="img-responsive" alt="<?= env('APP_NAME') ?>" src="<?= asset('assets/imgs/page/homepage1/icon-top-banner.png') ?>"></div>
                        <div class="block-4 shape-3"><img class="img-responsive" alt="<?= env('APP_NAME') ?>" src="<?= asset('assets/imgs/page/homepage1/icon-bottom-banner.png') ?>"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="mt-100"></div>
<section class="section-box mt-80">
    <div class="section-box wow animate__animated animate__fadeIn">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Khám phá các Danh mục</h2>
                <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Find the job that&rsquo;s perfect for you. about 800+ new jobs everyday</p>
            </div>
            <div class="box-swiper mt-50">
                <div class="swiper-container swiper-group-5 swiper">
                    <div class="swiper-wrapper pb-70 pt-5">
                        <?php foreach ($categories->chunk(2) as $collection) : ?>
                            <div class="swiper-slide hover-up">
                                <?php foreach ($collection as $category) : ?>
                                    <a href="jobs-list.html">
                                        <div class="item-logo">
                                            <div class="image-left">
                                                <img alt="<?= $category->name ?>" src="<?= asset($category->icon) ?>">
                                            </div>
                                            <div class="text-info-right">
                                                <h4><?= $category->name ?></h4>
                                                <p class="font-xs">Có <?= $category->jobs_count ?> Việc làm</p>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>
<section class="section-box mt-50">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Việc làm mới nhất</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Tìm Việc làm phù hợp với bạn. 800+ Việc làm mới mỗi ngày</p>
            <div class="list-tabs mt-40">
                <ul class="nav nav-tabs" role="tablist">
                    <?php foreach ($categories->sortByDesc('jobs_count')->take(6) as $key => $category) : ?>
                        <li>
                            <a <?= $key === 0 ? 'class="active"' : null ?> id="nav-tab-job-<?= $category->id ?>" href="#tab-job-<?= $category->id ?>" data-bs-toggle="tab" role="tab">
                                <img src="<?= asset($category->icon) ?>" alt="<?= $category->name ?>">
                                <?= $category->name ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="mt-70">
            <div class="tab-content" id="myTabContent-1">
                <?php foreach ($categories as $key => $category) : ?>
                    <div class="tab-pane fade <?= $key === 0 ? 'show active' : null ?>" id="tab-job-<?= $category->id ?>" role="tabpanel">
                        <div class="row">
                            <?php foreach ($category->jobs as $job) : ?>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left">
                                            <span class="flash"></span>
                                            <div class="image-box">
                                                <img src="<?= asset($job->company->logo) ?>" alt="<?= $job->company->name ?>">
                                            </div>
                                            <div class="right-info">
                                                <a class="name-job" href="/jobs/show?id=<?= $job->id ?>"><?= $job->company->name ?></a>
                                                <span class="location-small"><?= $job->city->name ?></span>
                                            </div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6>
                                                <a href="/jobs/show?id=<?= $job->id ?>"><?= $job->name ?></a>
                                            </h6>
                                            <div class="mt-5">
                                                <span class="card-briefcase">Fulltime</span>
                                                <span class="card-time"><?= $job->created_at->diffForHumans() ?></span>
                                            </div>
                                            <p class="font-sm color-text-paragraph mt-15"><?= $job->description ?></p>
                                            <div class="mt-30">
                                                <a class="btn btn-grey-small mr-5" href="/jobs">Adobe XD</a>
                                                <a class="btn btn-grey-small mr-5" href="/jobs">Figma</a>
                                                <a class="btn btn-grey-small mr-5" href="/jobs">Photoshop</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7">
                                                        <span class="card-text-price"><?= money_format($job->salary) ?></span>
                                                        <span class="text-muted">/<?= $job->salary_range ?></span>
                                                    </div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Ứng ngay</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<section class="section-box mt-50">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Nhà tuyển dụng hàng đầu</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Discover your next career move, freelance gig, or internship</p>
        </div>
    </div>
    <div class="container">
        <div class="box-swiper mt-50">
            <div class="swiper-container swiper-group-1 swiper-style-2 swiper">
                <div class="swiper-wrapper pt-5">
                    <div class="swiper-slide">
                        <?php foreach ($companies as $company) : ?>
                            <div class="item-5 hover-up wow animate__animated animate__fadeIn">
                                <a href="/companies/show">
                                    <div class="item-logo">
                                        <div class="image-left">
                                            <img alt="<?= $company->name ?>" src="<?= $company->logo ?>">
                                        </div>
                                        <div class="text-info-right">
                                            <h4><?= $company->name ?></h4>
                                            <?php foreach (range(1, 5) as $i) : ?>
                                                <img alt="<?= $i ?>" src="<?= asset('assets/imgs/template/icons/star.svg') ?>">
                                            <?php endforeach; ?>
                                            <span class="font-xs color-text-mutted ml-10">(68)</span>
                                        </div>
                                        <div class="text-info-bottom mt-5">
                                            <span class="font-xs color-text-mutted icon-location"><?= $company->address ?></span>
                                            <span class="font-xs color-text-mutted float-end mt-5">
                                                <?= $company->jobs_count ?> Việc làm
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-button-next-1"></div>
            <div class="swiper-button-prev swiper-button-prev-1"></div>
        </div>
    </div>
</section>
<section class="section-box mt-50 mb-50">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Tin tức và Blog</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Get the latest news, updates and tips</p>
        </div>
    </div>
    <div class="container">
        <div class="mt-50">
            <div class="box-swiper style-nav-top">
                <div class="swiper-container swiper-group-3 swiper">
                    <div class="swiper-wrapper pb-70 pt-5">
                        <div class="swiper-slide">
                            <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                                <div class="text-center card-grid-3-image">
                                    <a href="/blog/show">
                                        <figure><img alt="<?= env('APP_NAME') ?>" src="<?= asset('assets/imgs/page/homepage1/img-news1.png') ?>"></figure>
                                    </a>
                                </div>
                                <div class="card-block-info">
                                    <div class="tags mb-15"><a class="btn btn-tag" href="/blog/show">News</a>
                                    </div>
                                    <h5><a href="/blog/show">21 Job Interview Tips: How To Make a Great Impression</a></h5>
                                    <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                                    <div class="card-2-bottom mt-20">
                                        <div class="row">
                                            <div class="col-lg-6 col-6">
                                                <div class="d-flex"><img class="img-rounded" src="<?= asset('assets/imgs/page/homepage1/user1.png') ?>" alt="<?= env('APP_NAME') ?>">
                                                    <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Sarah Harding</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins to read</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                                <div class="text-center card-grid-3-image">
                                    <a href="/blog/show">
                                        <figure><img alt="<?= env('APP_NAME') ?>" src="<?= asset('assets/imgs/page/homepage1/img-news2.png') ?>"></figure>
                                    </a>
                                </div>
                                <div class="card-block-info">
                                    <div class="tags mb-15"><a class="btn btn-tag" href="/blog/show">Events</a>
                                    </div>
                                    <h5><a href="/blog/show">39 Strengths and Weaknesses To Discuss in a Job Interview</a></h5>
                                    <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                                    <div class="card-2-bottom mt-20">
                                        <div class="row">
                                            <div class="col-lg-6 col-6">
                                                <div class="d-flex"><img class="img-rounded" src="<?= asset('assets/imgs/page/homepage1/user2.png') ?>" alt="<?= env('APP_NAME') ?>">
                                                    <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Steven Jobs</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">6 mins to read</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                                <div class="text-center card-grid-3-image">
                                    <a href="/blog/show">
                                        <figure><img alt="<?= env('APP_NAME') ?>" src="<?= asset('assets/imgs/page/homepage1/img-news3.png') ?>"></figure>
                                    </a>
                                </div>
                                <div class="card-block-info">
                                    <div class="tags mb-15"><a class="btn btn-tag" href="/blog/show">News</a>
                                    </div>
                                    <h5><a href="/blog/show">Interview Question: Why Dont You Have a Degree?</a></h5>
                                    <p class="mt-10 color-text-paragraph font-sm">Learn how to respond if an interviewer asks you why you dont have a degree, and read example answers that can help you craft</p>
                                    <div class="card-2-bottom mt-20">
                                        <div class="row">
                                            <div class="col-lg-6 col-6">
                                                <div class="d-flex"><img class="img-rounded" src="<?= asset('assets/imgs/page/homepage1/user3.png') ?>" alt="<?= env('APP_NAME') ?>">
                                                    <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Wiliam Kend</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">9 mins to read</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="text-center"><a class="btn btn-brand-1 btn-icon-load mt--30 hover-up" href="/blog/show">Load More Posts</a>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/partials/footer.php';
?>