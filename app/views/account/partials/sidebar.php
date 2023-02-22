<div class="col-md-4">
    <nav class="nav-tavs-profile mb-5">
        <ul>
            <li>
                <a class="btn btn-border aboutus-icon mb-20" href="/account/profile">Thông tin tài khoản</a>
            </li>
            <?php if (auth('account')->user()->type === \App\Enums\AccountType::Employer) : ?>
                <li>
                    <a class="btn btn-border aboutus-icon mb-20" href="/account/companies">Công ty</a>
                </li>
                <li>
                    <a class="btn btn-border aboutus-icon mb-20" href="/account/jobs">Việc làm</a>
                </li>
                <li>
                    <a class="btn btn-border aboutus-icon mb-20" href="/account/applications">Đơn ứng tuyển</a>
                </li>
            <?php endif; ?>
            <li>
                <a class="btn btn-border aboutus-icon mb-20" href="/logout">Đăng xuất</a>
            </li>
        </ul>
    </nav>
</div>