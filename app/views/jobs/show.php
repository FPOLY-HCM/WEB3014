<?php
require_once __DIR__ . '/../partials/header.php';
?>

<section class="section-box-2">
    <div class="container">
        <div class="banner-hero banner-image-single"><img src="<?= asset('assets/imgs/page/job-single/thumb.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
        <div class="row mt-10">
            <div class="col-lg-8 col-md-12">
                <h3><?= $job->name ?></h3>
                <div class="mt-0 mb-15"><span class="card-briefcase">Fulltime</span><span class="card-time">3 mins ago</span></div>
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
                            <div class="sidebar-icon-item"><img src="<?= asset('assets/imgs/page/job-single/industry.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                            <div class="sidebar-text-info ml-10"><span class="text-description industry-icon mb-10">Nghành nghề</span><strong class="small-heading"> Mechanical / Auto / Automotive, Civil / Construction</strong></div>
                        </div>
                        <div class="col-md-6 d-flex mt-sm-15">
                            <div class="sidebar-icon-item"><img src="<?= asset('assets/imgs/page/job-single/job-level.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                            <div class="sidebar-text-info ml-10"><span class="text-description joblevel-icon mb-10">Cấp bậc</span><strong class="small-heading">Có kinh nghiệm (Non - Manager)</strong></div>
                        </div>
                    </div>
                    <div class="row mt-25">
                        <div class="col-md-6 d-flex mt-sm-15">
                            <div class="sidebar-icon-item"><img src="<?= asset('assets/imgs/page/job-single/salary.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                            <div class="sidebar-text-info ml-10"><span class="text-description salary-icon mb-10">Lương</span><strong class="small-heading"><?= money_format($job->salary) ?></strong></div>
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="sidebar-icon-item"><img src="<?= asset('assets/imgs/page/job-single/experience.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                            <div class="sidebar-text-info ml-10"><span class="text-description experience-icon mb-10">Kinh nghiệm</span><strong class="small-heading">1 - 2 năm</strong></div>
                        </div>
                    </div>
                    <div class="row mt-25">
                        <div class="col-md-6 d-flex mt-sm-15">
                            <div class="sidebar-icon-item"><img src="<?= asset('assets/imgs/page/job-single/job-type.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                            <div class="sidebar-text-info ml-10"><span class="text-description jobtype-icon mb-10">Công việc</span><strong class="small-heading">Dài hạn</strong></div>
                        </div>
                        <div class="col-md-6 d-flex mt-sm-15">
                            <div class="sidebar-icon-item"><img src="<?= asset('assets/imgs/page/job-single/deadline.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                            <div class="sidebar-text-info ml-10"><span class="text-description mb-10">Ngày hết hạn</span><strong class="small-heading">10/08/2022</strong></div>
                        </div>
                    </div>
                    <div class="row mt-25">
                        <div class="col-md-6 d-flex mt-sm-15">
                            <div class="sidebar-icon-item"><img src="<?= asset('assets/imgs/page/job-single/updated.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                            <div class="sidebar-text-info ml-10"><span class="text-description jobtype-icon mb-10">Ngày cập nhật</span><strong class="small-heading"><?php echo explode(" ", $job->updated_at)[0] ?></strong></div>
                        </div>
                        <div class="col-md-6 d-flex mt-sm-15">
                            <div class="sidebar-icon-item"><img src="<?= asset('assets/imgs/page/job-single/location.svg') ?>" alt="<?= env('APP_NAME') ?>"></div>
                            <div class="sidebar-text-info ml-10"><span class="text-description mb-10">Địa chỉ</span><strong class="small-heading"><?= $job->company->address ?></strong></div>
                        </div>
                    </div>
                </div>
                <div class="content-single">
                    <h4>Chào mừng đến với <?= $job->company->name ?></h4>
                    <p><?= $job->company->name ?> có tầm nhìn thiết lập một nền tảng đáng tin cậy cho phép các doanh nghiệp hoạt động hiệu quả và lành mạnh trong thế giới của mọi thứ từ xa và kỹ thuật số, các mô hình và chuẩn mực công việc thay đổi liên tục cũng như nhu cầu về khả năng phục hồi của tổ chức.</p>
                    <p>
                        Ứng viên lý tưởng sẽ có kỹ năng sáng tạo mạnh mẽ và danh mục công việc thể hiện niềm đam mê của họ đối với thiết kế minh họa và kiểu chữ. Ứng viên này sẽ có kinh nghiệm làm việc với nhiều nền tảng thiết kế khác nhau như kỹ thuật số
                        và in các biểu mẫu.
                    </p>
                    <h4>Kiến thức, kỹ năng và kinh nghiệm thiết yếu</h4>
                    <ul>
                        <li>Một danh mục đầu tư thể hiện sự suy nghĩ thấu đáo và trau chuốt từ đầu đến cuối hành trình của khách hàng</li>
                        <li>Hơn 5 năm kinh nghiệm trong ngành về thiết kế tương tác và/hoặc thiết kế trực quan</li>
                        <li>Kỹ năng quan hệ tuyệt vời</li>
                        <li>Nhận biết các xu hướng trong di động, truyền thông và cộng tác</li>
                        <li>Khả năng tạo các nguyên mẫu thiết kế, mô hình mô phỏng và các tạo phẩm giao tiếp khác được đánh bóng cao</li>
                        <li>Khả năng xác định phạm vi và ước tính nỗ lực một cách chính xác và ưu tiên các nhiệm vụ và mục tiêu một cách độc lập</li>
                        <li>Lịch sử tác động đến các sản phẩm vận chuyển với công việc của bạn</li>
                        <li>Bằng Cử nhân về Thiết kế (hoặc lĩnh vực liên quan) hoặc kinh nghiệm chuyên môn tương đương</li>
                        <li>Thành thạo nhiều công cụ thiết kế như Figma, Photoshop, Illustrator và Sketch</li>
                    </ul>
                    <h4>Kinh nghiệm thích hợp</h4>
                    <ul>
                        <li>Thiết kế trải nghiệm người dùng cho phần mềm/dịch vụ doanh nghiệp</li>
                        <li>Tạo và áp dụng các nguyên tắc thiết kế và mẫu tương tác đã thiết lập</li>
                        <li>Sắp xếp hoặc ảnh hưởng đến tư duy thiết kế với các nhóm làm việc ở các khu vực địa lý khác</li>
                    </ul>
                    <h4>Người thiết kế sản phẩm</h4>
                    <p><strong>Kiến thức về sản phẩm:</strong> Hiểu sâu về công nghệ, tính năng của mảng sản phẩm mình được phân công phụ trách.</p>
                    <p><strong>Nghiên cứu:</strong> Cung cấp tác động của con người và doanh nghiệp cũng như hiểu biết sâu sắc về sản phẩm..</p>
                    <p><strong>Sản phẩm có thể bàn giao:</strong> CTạo sản phẩm bàn giao cho khu vực sản phẩm của bạn (ví dụ: phân tích cạnh tranh, luồng người dùng, khung lưới có độ trung thực thấp, mô hình mô phỏng có độ trung thực cao, nguyên mẫu, v.v.) để giải quyết các vấn đề thực của người dùng thông qua trải nghiệm người dùng..
                    </p>
                    <p><strong>Giao tiếp:</strong> Truyền đạt kết quả của các hoạt động UX trong khu vực sản phẩm của bạn tới bộ phận nhóm thiết kế, các đối tác đa chức năng trong khu vực sản phẩm của bạn và các thành viên nhóm Superformula quan tâm khác bằng cách sử dụng ngôn ngữ rõ ràng giúp đơn giản hóa sự phức tạp..
                    </p>
                </div>
                <div class="author-single"><span><?= $job->company->name ?></span></div>
                <div class="single-apply-jobs">
                    <div class="row align-items-center">
                        <div class="col-md-5"><a class="btn btn-default mr-15" href="#">Apply now</a><a class="btn btn-border" href="#">Save job</a></div>
                        <div class="col-md-7 text-lg-end social-share">
                            <h6 class="color-text-paragraph-2 d-inline-block d-baseline mr-10">Share this</h6><a class="mr-5 d-inline-block d-middle" href="#"><img alt="<?= env('APP_NAME') ?>" src="<?= asset('assets/imgs/template/icons/share-fb.svg') ?>"></a><a class="mr-5 d-inline-block d-middle" href="#"><img alt="<?= env('APP_NAME') ?>" src="<?= asset('assets/imgs/template/icons/share-tw.svg') ?>"></a><a class="mr-5 d-inline-block d-middle" href="#"><img alt="<?= env('APP_NAME') ?>" src="<?= asset('assets/imgs/template/icons/share-red.svg') ?>"></a><a class="d-inline-block d-middle" href="#"><img alt="<?= env('APP_NAME') ?>" src="<?= asset('assets/imgs/template/icons/share-whatsapp.svg') ?>"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
                <div class="sidebar-border">
                    <div class="sidebar-heading">
                        <div class="avatar-sidebar">
                            <figure><img alt="<?= env('APP_NAME') ?>" src="<?= asset('assets/imgs/page/job-single/avatar.png') ?>"></figure>
                            <div class="sidebar-info"><span class="sidebar-company"><?= $job->company->name ?></span><span class="card-location"><?= $job->company->address ?></span><a class="link-underline mt-15" href="#">02 Open Jobs</a></div>
                        </div>
                    </div>
                    <div class="sidebar-list-job">
                        <div class="box-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.3150609575905!2d-87.6235655!3d41.886080899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2ca8b34afe61%3A0x6caeb5f721ca846!2s205%20N%20Michigan%20Ave%20Suit%20810%2C%20Chicago%2C%20IL%2060601%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1658551322537!5m2!1svi!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <ul class="ul-disc">
                            <li>205 North Michigan Avenue, Suite 810 Chicago, 60601, USA</li>
                            <li>Phone: (123) 456-7890</li>
                            <li>Email: contact@Evara.com</li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-border">
                    <h6 class="f-18">Similar jobs</h6>
                    <div class="sidebar-list-job">
                        <ul>
                            <li>
                                <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                                    <div class="image"><a href="job-details.html"><img src="<?= asset('assets/imgs/brands/brand-1.png') ?>" alt="<?= env('APP_NAME') ?>"></a></div>
                                    <div class="info-text">
                                        <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">UI / UX Designer fulltime</a></h5>
                                        <div class="mt-0"><span class="card-briefcase">Fulltime</span><span class="card-time"><span>3</span><span> mins ago</span></span></div>
                                        <div class="mt-5">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h6 class="card-price">$250<span>/Hour</span></h6>
                                                </div>
                                                <div class="col-6 text-end"><span class="card-briefcase">New York, US</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                                    <div class="image"><a href="job-details.html"><img src="<?= asset('assets/imgs/brands/brand-2.png') ?>" alt="<?= env('APP_NAME') ?>"></a></div>
                                    <div class="info-text">
                                        <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">Java Software Engineer</a></h5>
                                        <div class="mt-0"><span class="card-briefcase">Fulltime</span><span class="card-time"><span>5</span><span> mins ago</span></span></div>
                                        <div class="mt-5">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h6 class="card-price">$500<span>/Hour</span></h6>
                                                </div>
                                                <div class="col-6 text-end"><span class="card-briefcase">Tokyo, Japan</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                                    <div class="image"><a href="job-details.html"><img src="<?= asset('assets/imgs/brands/brand-3.png') ?>" alt="<?= env('APP_NAME') ?>"></a></div>
                                    <div class="info-text">
                                        <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">Frontend Developer</a></h5>
                                        <div class="mt-0"><span class="card-briefcase">Fulltime</span><span class="card-time"><span>8</span><span> mins ago</span></span></div>
                                        <div class="mt-5">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h6 class="card-price">$650<span>/Hour</span></h6>
                                                </div>
                                                <div class="col-6 text-end"><span class="card-briefcase">Hanoi, Vietnam</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                                    <div class="image"><a href="job-details.html"><img src="<?= asset('assets/imgs/brands/brand-4.png') ?>" alt="<?= env('APP_NAME') ?>"></a></div>
                                    <div class="info-text">
                                        <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">Cloud Engineer</a></h5>
                                        <div class="mt-0"><span class="card-briefcase">Fulltime</span><span class="card-time"><span>12</span><span> mins ago</span></span></div>
                                        <div class="mt-5">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h6 class="card-price">$380<span>/Hour</span></h6>
                                                </div>
                                                <div class="col-6 text-end"><span class="card-briefcase">Losangl, Au</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                                    <div class="image"><a href="job-details.html"><img src="<?= asset('assets/imgs/brands/brand-5.png') ?>" alt="<?= env('APP_NAME') ?>"></a></div>
                                    <div class="info-text">
                                        <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">DevOps Engineer</a></h5>
                                        <div class="mt-0"><span class="card-briefcase">Fulltime</span><span class="card-time"><span>34</span><span> mins ago</span></span></div>
                                        <div class="mt-5">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h6 class="card-price">$140<span>/Hour</span></h6>
                                                </div>
                                                <div class="col-6 text-end"><span class="card-briefcase">Paris, France</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                                    <div class="image"><a href="job-details.html"><img src="<?= asset('assets/imgs/brands/brand-6.png') ?>" alt="<?= env('APP_NAME') ?>"></a></div>
                                    <div class="info-text">
                                        <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">Figma design UI/UX</a></h5>
                                        <div class="mt-0"><span class="card-briefcase">Fulltime</span><span class="card-time"><span>45</span><span> mins ago</span></span></div>
                                        <div class="mt-5">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h6 class="card-price">$290<span>/Hour</span></h6>
                                                </div>
                                                <div class="col-6 text-end"><span class="card-briefcase">New York, US</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                                    <div class="image"><a href="job-details.html"><img src="<?= asset('assets/imgs/brands/brand-7.png') ?>" alt="<?= env('APP_NAME') ?>"></a></div>
                                    <div class="info-text">
                                        <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">Product Manage</a></h5>
                                        <div class="mt-0"><span class="card-briefcase">Fulltime</span><span class="card-time"><span>50</span><span> mins ago</span></span></div>
                                        <div class="mt-5">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h6 class="card-price">$650<span>/Hour</span></h6>
                                                </div>
                                                <div class="col-6 text-end"><span class="card-briefcase">New York, US</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                                    <div class="image"><a href="job-details.html"><img src="<?= asset('assets/imgs/brands/brand-8.png') ?>" alt="<?= env('APP_NAME') ?>"></a></div>
                                    <div class="info-text">
                                        <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">UI / UX Designer</a></h5>
                                        <div class="mt-0"><span class="card-briefcase">Fulltime</span><span class="card-time"><span>58</span><span> mins ago</span></span></div>
                                        <div class="mt-5">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h6 class="card-price">$270<span>/Hour</span></h6>
                                                </div>
                                                <div class="col-6 text-end"><span class="card-briefcase">New York, US</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-box mt-50 mb-50">
    <div class="container">
        <div class="text-left">
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Featured Jobs</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Get the latest news, updates and tips</p>
        </div>
        <div class="mt-50">
            <div class="box-swiper style-nav-top">
                <div class="swiper-container swiper-group-4 swiper">
                    <div class="swiper-wrapper pb-10 pt-5">
                        <div class="swiper-slide">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="<?= asset('assets/imgs/brands/brand-6.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Senior System Engineer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5" href="job-details.html">Android </a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Ứng tuyển ngay</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="<?= asset('assets/imgs/brands/brand-4.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Frontend Developer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Typescript</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="<?= asset('assets/imgs/brands/brand-8.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="<?= asset('assets/imgs/brands/brand-4.png') ?>" alt="<?= env('APP_NAME') ?>"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Frontend Developer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Typescript</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next swiper-button-next-4"></div>
                <div class="swiper-button-prev swiper-button-prev-4"></div>
            </div>
            <div class="text-center"><a class="btn btn-grey" href="#">Load more posts</a></div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>