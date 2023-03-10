<?php
require_once __DIR__ . '/../partials/header.php';
?>

<?= flash()->display() ?>

<div class="panel-white">
    <div class="panel-head d-flex justify-content-between align-items-center">
        <h5>Danh sách Việc làm</h5>
        <a href="/admin/companies/create" class="btn btn-primary">Thêm mới</a>
    </div>
    <div class="panel-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Logo</th>
                    <th>Nhà tuyển dụng</th>
                    <th>Địa chỉ</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($companies as $company) : ?>
                    <tr>
                    <td><?= $company->id ?></td>
                    <td><img src="<?= $company->logo ?>" alt="<?= $company->name ?>" class="align-middle"></td>
                    <td><?= $company->name ?></td>
                    <td><?= $company->address ?></td>
                    <td>
                        <a href="/admin/companies/edit?id=<?= $company->id ?>" class="btn btn-sm btn-primary">Sửa</a>
                        <a href="/admin/companies/delete?id=<?= $company->id ?>" class="btn btn-sm btn-danger">Xóa</a>
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