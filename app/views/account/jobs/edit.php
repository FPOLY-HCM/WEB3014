<?php
require_once __DIR__ . '/../partials/header.php';
?>

<div class="col-md-8">
    <div>
        <?= flash()->display() ?>
        <h3 class="mb-20 text-center">Chỉnh sửa công việc</h3>
        <form action="/account/jobs/update" method="post">
            <input type="hidden" name="id" value="<?= $job->id ?>">
            <div class="row form-group">
                <label for="category_id" class="col-md-3 form-label">Danh mục</label>
                <div class="col-md-9">
                    <select name="category_id" id="category_id" class="form-control form-select">
                        <?php foreach ($categories as $category_id) : ?>
                            <option value="<?= $category_id->id ?>"><?= $category_id->name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <label for="name" class="col-md-3 form-label">Tên việc làm</label>
                <div class="col-md-9">
                    <input type="text" name="name" class="form-control" value="<?= $job->name ?>">
                </div>
            </div>
            <div class="row form-group">
                <label for="company_id" class="col-md-3 form-label">Công ty</label>
                <div class="col-md-9">
                    <select name="company_id" id="company_id" class="form-control form-select">
                        <?php foreach ($companies as $company) : ?>
                            <option value="<?= $company->id ?>"><?= $company->name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <label for="content" class="col-md-3 form-label">Mô tả</label>
                <div class="col-md-9">
                    <textarea name="content" id="content" class="form-control" style="height: 150px;"></textarea>
                </div>
            </div>
            <div class="row form-group">
                <label for="city_id" class="col-md-3 form-label">Thành phố</label>
                <div class="col-md-9">
                    <select name="city_id" id="city_id" class="form-control form-select">
                        <?php foreach ($cities as $city) : ?>
                            <option value="<?= $city->id ?>"><?= $city->name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <label for="address" class="col-md-3 form-label">Địa chỉ</label>
                <div class="col-md-9">
                    <input type="text" name="address" class="form-control" value="<?= $job->company->address ?>">
                </div>
            </div>
            <div class="row form-group">
                <label for="salary" class="col-md-3 form-label">Lương</label>
                <div class="col-md-9">
                    <input type="text" name="salary" class="form-control" value="<?= money_format($job->salary) ?>">
                </div>
            </div>
            <div class="row form-group">
                <label for="number_of_positions" class="col-md-3 form-label">Số lượng tuyển dụng</label>
                <div class="col-md-9">
                    <input type="text" name="number_of_positions" class="form-control" value="<?= $job->number_of_positions ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sửa</button>
        </form>
    </div>
</div>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>