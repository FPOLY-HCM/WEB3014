<?php
require_once __DIR__ . '/partials/header.php';
?>

<div class="panel-white">
    <div class="panel-head d-flex justify-content-between align-items-center">
        <h5>Cài đặt</h5>
    </div>
    <div class="panel-body">
        <form action="/admin/settings" method="post">
        <div class="form-group">
                <label class="form-label">Tên trang web</label>
                <input type="text" class="form-control" name="title" value="<?= setting('title') ?>">
            </div>
            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
        </form>
    </div>
</div>

<?php
require_once __DIR__ . '/partials/footer.php';
?>