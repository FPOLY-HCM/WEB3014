<?php
require_once __DIR__ . '/../../partials/header.php';
?>

<section class="section-box">
    <div class="container">
        <div class="pt-10">
            <div class="banner-hero banner-image-single">
                <img src="https://jthemes.com/themes/wp/jobbox/wp-content/themes/jobbox/assets/imgs/page/candidates/img.png" alt="<?= env('APP_NAME') ?>" />
            </div>

            <div class="box-company-profile">
                <div class="image-compay">
                    <img src="<?= auth('account')->user()->avatar ? asset(auth('account')->user()->avatar) : 'https://secure.gravatar.com/avatar/33e8ba153f5ec9d50afec43e627b3775?s=96&#038;d=mm&#038;r=g' ?>" width="85" alt="<?= auth('account')->user()->name ?>" />
                </div>
                <div class="row mt-10">
                    <div class="col-lg-8 col-md-12">
                        <h5 class="f-18">
                            <?= auth('account')->user()->name ?>
                        </h5>
                        <p class="mt-0 font-md color-text-paragraph-2 mb-15"></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                require_once __DIR__ . '/sidebar.php';
                ?>