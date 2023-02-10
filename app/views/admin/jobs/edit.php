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
                        <option value="<?= $category->id ?>" <?= $category->id === $job->category_id ? 'selected' : null ?>><?= $category->name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="company_id" class="form-label">Nhà tuyển dụng</label>
                <select name="company_id" id="company_id" class="form-control">
                    <?php foreach ($companies as $company) : ?>
                        <option value="<?= $company->id ?>" <?= $company->id === $job->company_id ? 'selected' : null ?>><?= $company->name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="description" class="form-label">Mô tả</label>
                <textarea name="description" id="description" rows="2" class="form-control"><?= $job->description ?></textarea>
            </div>
            <div class="form-group">
                <label for="salary" class="form-label">Lương</label>
                <input type="text" id="salary" name="salary" class="form-group" value="<?= $job->salary ?>">
            </div>
            <div class="form-group">
                <label for="status" class="form-label">Trạng thái</label>
                <select name="status" id="status" class="form-control">
                    <?php foreach (JobStatus::cases() as $status) : ?>
                        <option value="<?= $status->value ?>" <?= $status->value === $job->status ? 'selected' : null ?>><?= $status->label() ?></option>
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