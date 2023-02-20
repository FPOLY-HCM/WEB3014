<?php
require_once __DIR__ . '/../partials/header.php';
?>

<?= flash()->display() ?>

<div class="panel-white">
    <div class="panel-head d-flex justify-content-between align-items-center">
        <h5>Danh sách người dùng</h5>
        <a href="/admin/users/create" class="btn btn-primary">Thêm mới</a>
    </div>
    <div class="panel-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user->id ?></td>
                    <td><?= $user->name ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->password ?></td>
                    <td>
                        <a href="/admin/users/edit?id=<?= $user->id ?>" class="btn btn-sm btn-primary">Sửa</a>
                        <a href="/admin/users/delete?id=<?= $user->id ?>" class="btn btn-sm btn-danger">Xóa</a>
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