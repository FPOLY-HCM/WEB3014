<?php
require_once __DIR__ . '/../partials/header.php';
?>

<div class="panel-white">
    <div class="panel-head d-flex justify-content-between align-items-center">
        <h5>Thêm việc làm mới</h5>
    </div>
    <div class="panel-body">
        <?= flash()->display() ?>
        <form action="/admin/jobs/store" method="post">
            <div class="form-group">
                <label for="name" class="form-label">Tên việc làm</label>
                <input type="text" id="name" name="name" class="form-group">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="category_id" class="form-label">Danh mục</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <?php foreach ($categories as $category) : ?>
                                <option value="<?= $category->id ?>"><?= $category->name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="company_id" class="form-label">Nhà tuyển dụng</label>
                        <select name="company_id" id="company_id" class="form-control">
                            <?php foreach ($companies as $company) : ?>
                                <option value="<?= $company->id ?>"><?= $company->name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="form-label">Mô tả</label>
                <textarea name="description" id="description" rows="2" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="content" class="form-label">Nội dung</label>
                <textarea name="content" id="content" rows="5" class="form-control"></textarea>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="salary" class="form-label">Lương</label>
                        <input type="text" id="salary" name="salary" class="form-group">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="salary" class="form-label">Khoảng lương theo</label>
                        <select name="salary_range" id="salary_range" class="form-control">
                            <option value="tháng">Tháng</option>
                            <option value="giờ">Giờ</option>
                            <option value="ngày">Ngày</option>
                            <option value="tuần">Tuần</option>
                            <option value="năm">Năm</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="number_of_position" class="form-label">Số lượng cần tuyển</label>
                        <input type="text" id="number_of_position" name="number_of_position" class="form-group">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="form-label">Địa chỉ</label>
                <input type="text" id="address" name="address" class="form-group">
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</div>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>