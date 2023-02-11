<?php
require_once __DIR__ . '/../partials/header.php';
?>
<section class="section-box">
    <div class="post-loop-grid">
        <div class="container">
            <div class="post-8 page type-page status-publish hentry no-post-thumbnail pt-10">
                <div class="entry-content">
                    <div class="woocommerce">
                        <div class="banner-hero banner-image-single">
                            <img src="https://jthemes.com/themes/wp/jobbox/wp-content/themes/jobbox/assets/imgs/page/candidates/img.png"
                                alt="Jobbox" />
                        </div>

                        <div class="box-company-profile">
                            <div class="image-compay">
                                <img src="https://secure.gravatar.com/avatar/33e8ba153f5ec9d50afec43e627b3775?s=96&#038;d=mm&#038;r=g"
                                    width="85" alt="nguyenhoangviecquoc" />
                            </div>
                            <div class="row mt-10">
                                <div class="col-lg-8 col-md-12">
                                    <h5 class="f-18">
                                        <?= $user->name ?>
                                    </h5>
                                    <p class="mt-0 font-md color-text-paragraph-2 mb-15"></p>
                                </div>
                            </div>
                        </div>

                        <div class="border-bottom pt-10 mb-50"></div>
                        <div class="row">
                            <div class="col-md-4">

                                <nav class="woocommerce-MyAccount-navigation box-nav-tabs nav-tavs-profile mb-5">
                                    <ul class="list-unstyled">
                                        <li
                                            class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard">
                                            <a class="btn btn-border aboutus-icon mb-20"
                                                href="https://jthemes.com/themes/wp/jobbox/my-account/">Dashboard</a>
                                        </li>
                                        <li
                                            class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
                                            <a class="btn btn-border aboutus-icon mb-20"
                                                href="https://jthemes.com/themes/wp/jobbox/my-account/orders/">Orders</a>
                                        </li>
                                        <li
                                            class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads">
                                            <a class="btn btn-border aboutus-icon mb-20"
                                                href="https://jthemes.com/themes/wp/jobbox/my-account/downloads/">Downloads</a>
                                        </li>
                                        <li
                                            class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
                                            <a class="btn btn-border aboutus-icon mb-20"
                                                href="https://jthemes.com/themes/wp/jobbox/my-account/edit-address/">Addresses</a>
                                        </li>
                                        <li
                                            class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account is-active active">
                                            <a class="btn btn-border aboutus-icon mb-20"
                                                href="https://jthemes.com/themes/wp/jobbox/my-account/edit-account/">Account
                                                details</a>
                                        </li>
                                        <li
                                            class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                                            <a class="btn btn-border aboutus-icon mb-20"
                                                href="https://jthemes.com/themes/wp/jobbox/my-account/customer-logout/?_wpnonce=6922e8170c">Logout</a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                            <div class="woocommerce-MyAccount-content col-md-8">
                                <div class="woocommerce-notices-wrapper"></div>
                                <form class="woocommerce-EditAccountForm edit-account d-grid" action="" method="post">

                                    <div class="row row-cols-2">
                                        <p
                                            class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                            <label for="account_first_name">Full Name&nbsp;<span
                                                    class="required">*</span></label>
                                            <input type="text"
                                                class="woocommerce-Input woocommerce-Input--text input-text form-control"
                                                name="account_first_name" id="account_first_name"
                                                autocomplete="given-name" value="" />
                                        </p>
                                    </div>

                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="account_display_name">Display name&nbsp;<span
                                                class="required">*</span></label>
                                        <input type="text"
                                            class="woocommerce-Input woocommerce-Input--text input-text form-control"
                                            name="account_display_name" id="account_display_name"
                                            value="<?php echo $email=explode('@',$user->email)[0]; ?>" /> <span><em>This
                                                will be how your name will be displayed in the account section and in
                                                reviews</em></span>
                                    </p>
                                    <div class="clear"></div>

                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="account_email">Email address&nbsp;<span
                                                class="required">*</span></label>
                                        <input type="email"
                                            class="woocommerce-Input woocommerce-Input--email input-text form-control"
                                            name="account_email" id="account_email" autocomplete="email"
                                            value="<?= $user->email ?>" />
                                    </p>

                                    <div class="clear"></div>


                                    <p>
                                        <input type="hidden" id="save-account-details-nonce"
                                            name="save-account-details-nonce" value="4417f34947" /><input type="hidden"
                                            name="_wp_http_referer"
                                            value="/themes/wp/jobbox/my-account/edit-account/" /> <button type="submit"
                                            class="woocommerce-Button button btn btn-primary"
                                            name="save_account_details" value="Save changes">Save changes</button>
                                        <input type="hidden" name="action" value="save_account_details" />
                                    </p>

                                </form>

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