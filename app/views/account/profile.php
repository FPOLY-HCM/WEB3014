<?php
require_once __DIR__ . '/partials/header.php';
?>

<div class="col-md-8">
    <form>
        <div class="form-group">
            <label for="name" class="form-label">Họ tên</label>
            <input type="text" id="name" name="name" class="form-control" value="<?= auth('account')->user()->name ?>">
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" class="form-control" disabled value="<?= auth('account')->user()->email ?>">
        </div>
        <div class="form-group">
            <label for="phone" class="form-label">Số điện thoại</label>
            <input type="tel" id="phone" name="phone" class="form-control" value="<?= auth('account')->user()->phone ?>">
        </div>
        <div class="form-group">
            <label for="address" class="form-label">Địa chỉ</label>
            <input type="text" id="address" name="address" class="form-control" value="<?= auth('account')->user()->address ?>">
        </div>
        <button type="button" class="btn btn-primary">Lưu thay đổi</button>
    </form>
</div>

<?php
require_once __DIR__ . '/partials/footer.php';
?>