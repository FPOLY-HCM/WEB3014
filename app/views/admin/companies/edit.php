<?php
require_once __DIR__ . '/../partials/header.php';
?>

<div class="panel-white">
    <div class="panel-head d-flex justify-content-between align-items-center">
        <h5>Chỉnh sửa nhà tuyển dụng</h5>
    </div>
    <div class="panel-body">
        <?= flash()->display() ?>
        <form action="/admin/companies/update" method="post">
            <input type="hidden" name="id" value="<?= $company->id ?>">
            <div class="form-group">
                <label for="name" class="form-label">Tên nhà tuyển dụng</label>
                <input type="text" id="name" name="name" class="form-group" value="<?= $company->name ?>">
            </div>
            <div class="form-group">
                <label for="account_id" class="form-label">Người dùng</label>
                <select name="account_id" id="account_id" class="form-control">
                    <?php foreach ($accounts as $account) : ?>
                        <option value="<?= $account->id ?>"><?= $account->name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="logo" class="form-label">Logo</label>
                <input type="file" name="logo" id="logo" class="form-control" value="<?= $company->logo ?>">
            </div>
            <div class="form-group">
                <label for="address" class="form-label">Địa chỉ</label>
                <input type="text" id="address" name="address" class="form-group" value="<?= $company->address ?>">
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</div>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>