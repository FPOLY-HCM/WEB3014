<?php
require_once __DIR__ . '/../partials/header.php';
?>

<section class="section-box-2">
	<div class="container">
		<div class="banner-hero banner-single banner-single-bg">
			<div class="block-banner text-center">
				<h3 class="wow animate__animated animate__fadeInUp">
                    <span class="color-brand-2">22 Jobs</span> Available Now
                </h3>
				<div class="font-sm color-text-paragraph-2 mt-10 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, <br class="d-none d-xl-block">atque delectus molestias quis?</div>
				<div class="form-find text-start mt-40 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
					<form>
						<div class="box-industry">
							<select class="form-input mr-10 select-active input-industry">
								<option value="">Danh mục</option>
                                <?php foreach ($categories as $category) : ?>
                                    <option value="<?= $category->id ?>"><?= $category->name ?></option>
                                <?php endforeach; ?>
							</select>
						</div>
						<select class="form-input mr-10 select-active">
							<option value="">Địa điểm</option>
                            <?php foreach ($cities as $city) : ?>
                                <option value="<?= $city->id ?>"><?= $city->name ?></option>
                            <?php endforeach; ?>
                        </select>
						<input class="form-input input-keysearch mr-10" type="text" placeholder="Nhập từ khoá... ">
						<button class="btn btn-default btn-find font-sm">Tìm kiếm</button>
					</form>
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
									<div class="box-view-type"><a class="view-type" href="jobs-list.html"><img src="<?= asset('assets/imgs/template/icons/icon-list.svg') ?>" alt="<?= env('APP_NAME') ?>"></a>
										<a class="view-type" href="jobs-grid.html"><img src="<?= asset('assets/imgs/template/icons/icon-grid-hover.svg') ?>" alt="<?= env('APP_NAME') ?>"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row display-list">
						<?php foreach ($jobs as $job) : ?>
							<div class="col-xl-12 col-12">
								<div class="card-grid-2 hover-up">
                                    <span class="flash"></span>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="card-grid-2-image-left">
												<div class="image-box">
													<img src="<?= asset($job->company->logo) ?>" alt="<?= $job->name ?>">
												</div>
												<div class="right-info">
													<a class="name-job" href="/companies/show?id=<?= $job->company->id ?>"><?= $job->company->name ?></a>
													<span class="location-small"><?= $job->city->name ?></span>
												</div>
											</div>
										</div>
										<div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
											<div class="pl-15 mb-15 mt-30">
												<a class="btn btn-grey-small mr-5" href="#">Adobe XD</a>
												<a class="btn btn-grey-small mr-5" href="#">Figma</a>
											</div>
										</div>
									</div>
									<div class="card-block-info">
										<h4>
                                            <a href="/jobs/show?id=<?= $job->id ?>"><?= $job->name ?></a>
                                        </h4>
										<div class="mt-5">
                                            <span class="card-briefcase">Fulltime</span>
                                            <span class="card-time"><?= $job->created_at->diffForHumans() ?></span>
                                        </div>
										<p class="font-sm color-text-paragraph mt-10"><?= $job->description ?></p>
										<div class="card-2-bottom mt-20">
											<div class="row">
												<div class="col-lg-7 col-7">
                                                    <span class="card-text-price"><?= number_format($job->salary) ?></span>
                                                    <span class="text-muted">/<?= $job->salary_range ?></span>
                                                </div>
												<div class="col-lg-5 col-5 text-end">
													<a href="/jobs/show?id=<?= $job->id ?>">
                                                        <div class="btn btn-apply-now">Xem thêm</div>
                                                    </a>
												</div>
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
			<div class="col-lg-3 col-md-12 col-sm-12 col-12">
				<div class="sidebar-shadow none-shadow mb-30">
					<div class="sidebar-filters">
						<div class="filter-block head-border mb-30">
							<h5>Advance Filter <a class="link-reset" href="#">Reset</a></h5>
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
							<h5 class="medium-heading mb-15">Industry</h5>
							<div class="form-group">
								<ul class="list-checkbox">
									<li>
										<label class="cb-container">
											<input type="checkbox" checked="checked"><span class="text-small">All</span><span class="checkmark"></span>
										</label><span class="number-item">180</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">Software</span><span class="checkmark"></span>
										</label><span class="number-item">12</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">Finance</span><span class="checkmark"></span>
										</label><span class="number-item">23</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">Recruting</span><span class="checkmark"></span>
										</label><span class="number-item">43</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">Management</span><span class="checkmark"></span>
										</label><span class="number-item">65</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">Advertising</span><span class="checkmark"></span>
										</label><span class="number-item">76</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="filter-block mb-20">
							<h5 class="medium-heading mb-25">Salary Range</h5>
							<div class="list-checkbox pb-20">
								<div class="row position-relative mt-10 mb-20">
									<div class="col-sm-12 box-slider-range">
										<div id="slider-range"></div>
									</div>
									<div class="box-input-money">
										<input class="input-disabled form-control min-value-money" type="text" name="min-value-money" disabled="disabled" value="">
										<input class="form-control min-value" type="hidden" name="min-value" value="">
									</div>
								</div>
								<div class="box-number-money">
									<div class="row mt-30">
										<div class="col-sm-6 col-6"><span class="font-sm color-brand-1">$0</span></div>
										<div class="col-sm-6 col-6 text-end"><span class="font-sm color-brand-1">$500</span></div>
									</div>
								</div>
							</div>
							<div class="form-group mb-20">
								<ul class="list-checkbox">
									<li>
										<label class="cb-container">
											<input type="checkbox" checked="checked"><span class="text-small">All</span><span class="checkmark"></span>
										</label><span class="number-item">145</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">$0k - $20k</span><span class="checkmark"></span>
										</label><span class="number-item">56</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">$20k - $40k</span><span class="checkmark"></span>
										</label><span class="number-item">37</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">$40k - $60k</span><span class="checkmark"></span>
										</label><span class="number-item">75</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">$60k - $80k</span><span class="checkmark"></span>
										</label><span class="number-item">98</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">$80k - $100k</span><span class="checkmark"></span>
										</label><span class="number-item">14</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">$100k - $200k</span><span class="checkmark"></span>
										</label><span class="number-item">25</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="filter-block mb-30">
							<h5 class="medium-heading mb-10">Popular Keyword</h5>
							<div class="form-group">
								<ul class="list-checkbox">
									<li>
										<label class="cb-container">
											<input type="checkbox" checked="checked"><span class="text-small">Software</span><span class="checkmark"></span>
										</label><span class="number-item">24</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">Developer</span><span class="checkmark"></span>
										</label><span class="number-item">45</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">Web</span><span class="checkmark"></span>
										</label><span class="number-item">57</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="filter-block mb-30">
							<h5 class="medium-heading mb-10">Position</h5>
							<div class="form-group">
								<ul class="list-checkbox">
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">Senior</span><span class="checkmark"></span>
										</label><span class="number-item">12</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox" checked="checked"><span class="text-small">Junior</span><span class="checkmark"></span>
										</label><span class="number-item">35</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">Fresher</span><span class="checkmark"></span>
										</label><span class="number-item">56</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="filter-block mb-30">
							<h5 class="medium-heading mb-10">Experience Level</h5>
							<div class="form-group">
								<ul class="list-checkbox">
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">Internship</span><span class="checkmark"></span>
										</label><span class="number-item">56</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">Entry Level</span><span class="checkmark"></span>
										</label><span class="number-item">87</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox" checked="checked"><span class="text-small">Associate</span><span class="checkmark"></span>
										</label><span class="number-item">24</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">Mid Level</span><span class="checkmark"></span>
										</label><span class="number-item">45</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">Director</span><span class="checkmark"></span>
										</label><span class="number-item">76</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">Executive</span><span class="checkmark"></span>
										</label><span class="number-item">89</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="filter-block mb-30">
							<h5 class="medium-heading mb-10">Onsite/Remote</h5>
							<div class="form-group">
								<ul class="list-checkbox">
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">On-site</span><span class="checkmark"></span>
										</label><span class="number-item">12</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox" checked="checked"><span class="text-small">Remote</span><span class="checkmark"></span>
										</label><span class="number-item">65</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">Hybrid</span><span class="checkmark"></span>
										</label><span class="number-item">58</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="filter-block mb-30">
							<h5 class="medium-heading mb-10">Job Posted</h5>
							<div class="form-group">
								<ul class="list-checkbox">
									<li>
										<label class="cb-container">
											<input type="checkbox" checked="checked"><span class="text-small">All</span><span class="checkmark"></span>
										</label><span class="number-item">78</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">1 day</span><span class="checkmark"></span>
										</label><span class="number-item">65</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">7 days</span><span class="checkmark"></span>
										</label><span class="number-item">24</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">30 days</span><span class="checkmark"></span>
										</label><span class="number-item">56</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="filter-block mb-20">
							<h5 class="medium-heading mb-15">Job type</h5>
							<div class="form-group">
								<ul class="list-checkbox">
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">Full Time</span><span class="checkmark"></span>
										</label><span class="number-item">25</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox" checked="checked"><span class="text-small">Part Time</span><span class="checkmark"></span>
										</label><span class="number-item">64</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">Remote Jobs</span><span class="checkmark"></span>
										</label><span class="number-item">78</span>
									</li>
									<li>
										<label class="cb-container">
											<input type="checkbox"><span class="text-small">Freelancer</span><span class="checkmark"></span>
										</label><span class="number-item">97</span>
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