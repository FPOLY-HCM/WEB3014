<?php
require_once __DIR__ . '/../partials/header.php';
?>

<section class="section-box-2">
    <div class="container">
        <div class="banner-hero banner-company">
            <div class="block-banner text-center">
                <h3 class="wow animate__animated animate__fadeInUp">Khám phá các Nhà tuyển dụng</h3>
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
        <div class="row flex-row-reverse">
            <div class="col-lg-9 col-md-12 col-sm-12 col-12 float-right">
                <div class="content-page">
                    <div class="box-filters-job">
                        <div class="row">
                            <div class="col-xl-6 col-lg-5">
                                <span class="text-small text-showing">Đang hiện từ <strong>41-60</strong> của 944 Việc làm
                            </div>
                            <div class="col-xl-6 col-lg-7 text-lg-end mt-sm-15">
                                <div class="display-flex2">
                                    <div class="box-border mr-10">
                                        <span class="text-sortby">Hiển thị:</span>
                                        <div class="dropdown dropdown-sort">
                                            <button class="btn dropdown-toggle" id="dropdownSort" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>12</span><i class="fi-rr-angle-small-down"></i></button>
                                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort">
                                                <li><a class="dropdown-item active" href="#">10</a></li>
                                                <li><a class="dropdown-item" href="#">12</a></li>
                                                <li><a class="dropdown-item" href="#">20</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="box-border">
                                        <span class="text-sortby">Sắp xếp theo:</span>
                                        <div class="dropdown dropdown-sort">
                                            <button class="btn dropdown-toggle" id="dropdownSort2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>Newest Post</span><i class="fi-rr-angle-small-down"></i></button>
                                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort2">
                                                <li><a class="dropdown-item active" href="#">Newest Post</a></li>
                                                <li><a class="dropdown-item" href="#">Oldest Post</a></li>
                                                <li><a class="dropdown-item" href="#">Rating Post</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="box-view-type">
                                        <a class="view-type" href="jobs-list.html">
                                            <img src="<?= asset('assets/imgs/template/icons/icon-list.svg') ?>" alt="<?= env('APP_NAME') ?>">
                                        </a>
                                        <a class="view-type" href="jobs-grid.html">
                                            <img src="<?= asset('assets/imgs/template/icons/icon-grid-hover.svg') ?>" alt="<?= env('APP_NAME') ?>">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($companies as $company) : ?>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="card-grid-1 hover-up wow animate__animated animate__fadeIn">
                                    <div class="image-box">
                                        <a href="/companies/show?id=<?= $company->id ?>">
                                            <img src="<?= asset($company->logo ?? '') ?>" alt="<?= $company->name ?>">
                                        </a>
                                    </div>
                                    <div class="info-text mt-10">
                                        <h5 class="font-bold">
                                            <a href="/companies/show?id=<?= $company->id ?>"><?= $company->name ?></a>
                                        </h5>
                                        <div class="mt-5">
                                            <?php foreach (range(1, 5) as $i) : ?>
                                                <img alt="<?= $i ?>" src="<?= asset('assets/imgs/template/icons/star.svg') ?>">
                                            <?php endforeach; ?>
                                            <span class="font-xs color-text-mutted ml-10">(66)</span>
                                        </div>
                                        <span class="card-location"><?= $company->address ?></span>
                                        <div class="mt-30">
                                            <a class="btn btn-grey-big" href="jobs-grid.html">
                                                <span>12 Việc làm</span>
                                            </a>
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
            <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="sidebar-shadow none-shadow mb-30">
                    <div class="sidebar-filters">
                        <div class="filter-block head-border mb-30">
                            <h5>Bộ lọc nâng cao <a class="link-reset" href="#">Đặt lại</a></h5>
                        </div>
                        <div class="filter-block mb-30">
                            <div class="form-group select-style select-style-icon">
                                <select class="form-control form-icons select-active">
                                    <option>New York, US</option>
                                    <option>London</option>
                                    <option>Paris</option>
                                    <option>Berlin</option>
                                </select><i class="fi-rr-marker"></i>
                            </div>
                        </div>
                        <div class="filter-block mb-20">
                            <h5 class="medium-heading mb-15">Ngành nghề</h5>
                            <div class="form-group">
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked">
                                            <span class="text-small">Tất cả</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">180</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox">
                                            <span class="text-small">Software</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">12</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox">
                                            <span class="text-small">Finance</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">23</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox">
                                            <span class="text-small">Recruting</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">43</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox">
                                            <span class="text-small">Management</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">65</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox">
                                            <span class="text-small">Advertising</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">76</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="filter-block mb-20">
                            <h5 class="medium-heading mb-25">Lương</h5>
                            <div class="form-group mb-20">
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked">
                                            <span class="text-small">Tất cả</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">145</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox">
                                            <span class="text-small">$0k - $20k</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">56</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox">
                                            <span class="text-small">$20k - $40k</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">37</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox">
                                            <span class="text-small">$40k - $60k</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">75</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox">
                                            <span class="text-small">$60k - $80k</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">98</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox">
                                            <span class="text-small">$80k - $100k</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">14</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox">
                                            <span class="text-small">$100k - $200k</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">25</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="filter-block mb-30">
                            <h5 class="medium-heading mb-10">Kinh nghiệm</h5>
                            <div class="form-group">
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox">
                                            <span class="text-small">Internship</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">56</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox">
                                            <span class="text-small">Entry Level</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">87</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked">
                                            <span class="text-small">Associate</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">24</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox">
                                            <span class="text-small">Mid Level</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">45</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox">
                                            <span class="text-small">Director</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">76</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox">
                                            <span class="text-small">Executive</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">89</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="filter-block mb-20">
                            <h5 class="medium-heading mb-15">Kiểu Việc làm</h5>
                            <div class="form-group">
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox">
                                            <span class="text-small">Full Time</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">25</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked">
                                            <span class="text-small">Part Time</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">64</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox">
                                            <span class="text-small">Remote</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">78</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox">
                                            <span class="text-small">Freelancer</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="number-item">97</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>