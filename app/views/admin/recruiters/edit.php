<?php

use App\Enums\JobStatus;

require_once __DIR__ . '/../partials/header.php';
?>

<div class="panel-white">
    <div class="panel-head d-flex justify-content-between align-items-center">
        <h5>Chỉnh sửa nhà tuyển dụng</h5>
    </div>
    <div class="panel-body">
        <form action="/admin/recruiters/update" method="post">
            <input type="hidden" name="id" value="<?= $recruiter->id ?>">
            <div class="form-group">
                <label for="name" class="form-label">Tên nhà tuyển dụng</label>
                <input type="text" id="name" name="name" class="form-group" value="<?= $recruiter->name ?>">
            </div>
            <div class="form-group">
                <input type="hidden" id="account_id" name="account_id" class="form-group" value="1">
            </div>
            <div class="form-group">
                <label for="logo" class="form-label">Lô gô</label>
                <input type="file" name="logo" id="logo" class="form-control" value="<?= $recruiter->logo ?>">
            </div>
            <div class="form-group">
                <label for="address" class="form-label">Địa chỉ</label>
                <input type="text" id="address" name="address" class="form-group" value="<?= $recruiter->address ?>">
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</div>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>