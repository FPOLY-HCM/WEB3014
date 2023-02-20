<?php
require_once __DIR__ . '/../partials/header.php';
?>

<?= flash()->display() ?>

<div class="panel-white">
    <div class="panel-head d-flex justify-content-between align-items-center">
        <h5>Danh sách danh mục</h5>
        <a href="/admin/categories/create" class="btn btn-primary">Thêm mới</a>
    </div>
    <div class="panel-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Icon</th>
                    <th>Tên danh mục</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($categories as $category) : ?>
                    <tr>
                    <td><?= $category->id ?></td>
                    <td><img src="<?= asset($category->icon) ?>" alt="<?= $category->name ?>" class="align-middle"></td>
                    <td><?= $category->name ?></td>
                    <td>
                        <a href="/admin/categories/edit?id=<?= $category->id ?>" class="btn btn-sm btn-primary">Sửa</a>
                        <a href="/admin/categories/delete?id=<?= $category->id ?>" class="btn btn-sm btn-danger">Xóa</a>
                    </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>