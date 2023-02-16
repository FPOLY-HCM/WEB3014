<?php
require_once __DIR__ . '/../partials/header.php';
?>

<div class="panel-white">
    <div class="panel-head d-flex justify-content-between align-items-center">
        <h5>Thêm danh mục mới</h5>
    </div>
    <div class="panel-body">
        <form action="/admin/categories/store" method="post">
            <div class="form-group">
                <label for="name" class="form-label">Tên danh mục</label>
                <input type="text" id="name" name="name" class="form-group">
            </div>
            <div class="form-group">
                <label for="logo" class="form-label">Icon</label>
                <input type="file" name="icon" id="icon" class="form-control"></input>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</div>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>