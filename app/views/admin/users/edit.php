<?php
require_once __DIR__ . '/../partials/header.php';
?>

<div class="panel-white">
    <div class="panel-head d-flex justify-content-between align-items-center">
        <h5>Chỉnh sửa người dùng</h5>
    </div>
    <div class="panel-body">
        <?= flash()->display() ?>
        <form action="/admin/users/update" method="post">
            <input type="hidden" name="id" value="<?= $user->id ?>">
            <div class="form-group">
                <label for="name" class="form-label">Tên người dùng</label>
                <input type="text" id="name" name="name" class="form-group" value="<?= $user->name ?>">
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Email</label>
                <input type="text" id="email" name="email" class="form-group" value="<?= $user->email ?>">
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Mật khẩu</label>
                <input type="text" id="password" name="password" class="form-group" value="<?= $user->password ?>">
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</div>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>