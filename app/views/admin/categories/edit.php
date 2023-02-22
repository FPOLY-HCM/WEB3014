<?php
require_once __DIR__ . '/../partials/header.php';
?>

<div class="panel-white">
    <div class="panel-head d-flex justify-content-between align-items-center">
        <h5>Chỉnh sửa danh mục</h5>
    </div>
    <div class="panel-body">
        <?= flash()->display() ?>
        <form action="/admin/categories/update" method="post">
            <input type="hidden" name="id" value="<?= $category->id ?>">
            <div class="form-group">
                <label for="name" class="form-label">Tên nhà danh mục</label>
                <input type="text" id="name" name="name" class="form-group" value="<?= $category->name ?>">
            </div>
            <div class="form-group">
                <label for="logo" class="form-label">Icon</label>
                <input type="file" name="icon" id="icon" class="form-control" value="<?= $category->icon ?>">
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</div>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>