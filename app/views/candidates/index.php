<?php
require_once __DIR__ . '/../partials/header.php';
?>

<section class="section-box-2">
    <div class="container">
        <div class="banner-hero banner-company">
            <div class="block-banner text-center">
                <h3 class="wow animate__animated animate__fadeInUp">Khám phá các Ứng viên</h3>
                <div class="font-sm color-text-paragraph-2 mt-10 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, <br class="d-none d-xl-block">atque delectus molestias quis?</div>
                <div class="box-list-character">
                    <ul>
                        <?php foreach (range('A', 'Z') as $value) : ?>
                            <li>
                                <a <?php if ($value === 'D') : ?> class="active" <?php endif; ?> href="#"><?= $value ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-box mt-30">
    <div class="container">
        <div class="content-page">
            <div class="box-filters-job">
                <div class="row">
                    <div class="col-xl-6 col-lg-5"><span class="text-small text-showing">Showing <strong>41-60 </strong>of <strong>944 </strong>jobs</span></div>
                    <div class="col-xl-6 col-lg-7 text-lg-end mt-sm-15">
                        <div class="display-flex2">
                            <div class="box-border mr-10"><span class="text-sortby">Show:</span>
                                <div class="dropdown dropdown-sort">
                                    <button class="btn dropdown-toggle" id="dropdownSort" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>12</span><i class="fi-rr-angle-small-down"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort">
                                        <li><a class="dropdown-item active" href="#">10</a></li>
                                        <li><a class="dropdown-item" href="#">12</a></li>
                                        <li><a class="dropdown-item" href="#">20</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box-border"><span class="text-sortby">Sort by:</span>
                                <div class="dropdown dropdown-sort">
                                    <button class="btn dropdown-toggle" id="dropdownSort2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>Newest Post</span><i class="fi-rr-angle-small-down"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort2">
                                        <li><a class="dropdown-item active" href="#">Newest Post</a></li>
                                        <li><a class="dropdown-item" href="#">Oldest Post</a></li>
                                        <li><a class="dropdown-item" href="#">Rating Post</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box-view-type"><a class="view-type" href="jobs-list.html"><img src="<?= asset('assets/imgs/template/icons/icon-list.svg') ?>" alt="<?= env('APP_NAME') ?>"></a><a class="view-type" href="jobs-grid.html"><img src="<?= asset('assets/imgs/template/icons/icon-grid-hover.svg') ?>" alt="<?= env('APP_NAME') ?>"></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($accounts as $account) : ?>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card-grid-2 hover-up">
                            <div class="card-grid-2-image-left">
                                <div class="card-grid-2-image-rd online"><a href="/candidate/show?id=<?= $account->id ?>">
                                        <figure><img alt="<?= $account->name ?>" src="<?= asset('assets/imgs/page/candidates/user1.png') ?>"></figure>
                                    </a></div>
                                <div class="card-profile pt-10"><a href="/candidate/show?id=<?= $account->id ?>">
                                        <h5><?= $account->name ?></h5>
                                    <div class="rate-reviews-small pt-5"><span><img src="<?= asset('assets/imgs/template/icons/star.svg') ?>" alt="<?= env('APP_NAME') ?>"></span><span><img src="<?= asset('assets/imgs/template/icons/star.svg') ?>" alt="<?= env('APP_NAME') ?>"></span><span><img src="<?= asset('assets/imgs/template/icons/star.svg') ?>" alt="<?= env('APP_NAME') ?>"></span><span><img src="<?= asset('assets/imgs/template/icons/star.svg') ?>" alt="<?= env('APP_NAME') ?>"></span><span><img src="<?= asset('assets/imgs/template/icons/star.svg') ?>" alt="<?= env('APP_NAME') ?>"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                                </div>
                            </div>
                            <div class="card-block-info">
                                <p class="font-xs color-text-paragraph-2"><?= $account->bio ?></p>
                                <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                    <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="paginations">
            <ul class="pager">
                <li><a class="pager-prev" href="#"></a></li>
                <li><a class="pager-number" href="#">1</a></li>
                <li><a class="pager-number" href="#">2</a></li>
                <li><a class="pager-number" href="#">3</a></li>
                <li><a class="pager-number" href="#">4</a></li>
                <li><a class="pager-number" href="#">5</a></li>
                <li><a class="pager-number active" href="#">6</a></li>
                <li><a class="pager-number" href="#">7</a></li>
                <li><a class="pager-next" href="#"></a></li>
            </ul>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>