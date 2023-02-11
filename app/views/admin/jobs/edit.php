<?php

use App\Enums\JobStatus;

require_once __DIR__ . '/../partials/header.php';
?>

<div class="panel-white">
    <div class="panel-head d-flex justify-content-between align-items-center">
        <h5>Chỉnh sửa <span><?= $job->name ?></span></h5>
    </div>
    <div class="panel-body">
        <form action="/admin/jobs/store" method="post">
            <div class="form-group">
                <label for="name" class="form-label">Tên việc làm</label>
                <input type="text" id="name" name="name" class="form-group" value="<?= $job->name ?>">
            </div>
            <div class="form-group">
                <label for="category_id" class="form-label">Danh mục</label>
                <select name="category_id" id="category_id" class="form-control">
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?= $category->id ?>" <?= selected($category->id === $job->category_id) ?>><?= $category->name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="company_id" class="form-label">Nhà tuyển dụng</label>
                <select name="company_id" id="company_id" class="form-control">
                    <?php foreach ($companies as $company) : ?>
                        <option value="<?= $company->id ?>" <?= selected($company->id === $job->company_id) ?>><?= $company->name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="description" class="form-label">Mô tả</label>
                <textarea name="description" id="description" rows="2" class="form-control"><?= $job->description ?></textarea>
            </div>
            <div class="form-group">
                <label for="content" class="form-label">Nội dung</label>
                <textarea name="content" id="content" rows="5" class="form-control"><?= $job->content ?></textarea>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="salary" class="form-label">Lương</label>
                        <input type="text" id="salary" name="salary" class="form-group" value="<?= $job->salary ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="salary" class="form-label">Khoảng lương theo</label>
                        <select name="salary_range" id="salary_range" class="form-control">
                            <option value="tháng" <?= selected($job->salary_range === 'tháng') ?>>Tháng</option>
                            <option value="giờ" <?= selected($job->salary_range === 'giờ') ?>>Giờ</option>
                            <option value="ngày" <?= selected($job->salary_range === 'ngày') ?>>Ngày</option>
                            <option value="tuần" <?= selected($job->salary_range === 'tuần') ?>>Tuần</option>
                            <option value="năm" <?= selected($job->salary_range === 'năm') ?>>Năm</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="number_of_position" class="form-label">Số lượng cần tuyển</label>
                        <input type="text" id="number_of_position" name="number_of_position" class="form-group" value="<?= $job->number_of_position ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="form-label">Địa chỉ</label>
                <input type="text" id="address" name="address" class="form-group" value="<?= $job->address ?>">
            </div>
            <div class="form-group">
                <label for="status" class="form-label">Trạng thái</label>
                <select name="status" id="status" class="form-control">
                    <?php foreach (JobStatus::cases() as $status) : ?>
                        <option value="<?= $status->value ?>" <?= selected($status->value === $job->status) ?>><?= $status->label() ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</div>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>