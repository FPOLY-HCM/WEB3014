<?php
require_once __DIR__ . '/../partials/header.php';
?>

<div class="panel-white">
    <div class="panel-head d-flex justify-content-between align-items-center">
        <h5>Thêm người dùng mới</h5>
    </div>
    <div class="panel-body">
        <?= flash()->display() ?>
        <form action="/admin/users/store" method="post">
            <div class="form-group">
                <label for="name" class="form-label">Tên tài khoản</label>
                <input type="text" id="name" name="name" class="form-group">
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Emai</label>
                <input type="text" id="email" name="email" class="form-group">
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Mật khẩu</label>
                <input type="text" id="password" name="password" class="form-group">
            </div>
            <button type="submit" class="btn btn-primary">Thêm Mới</button>
        </form> 
    </div>
</div>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>