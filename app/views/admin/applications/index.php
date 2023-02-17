<?php
require_once __DIR__ . '/../partials/header.php';
?>

<div class="panel-white">
    <div class="panel-head d-flex justify-content-between align-items-center">
        <h5>Danh sách đơn ứng tuyển</h5>
        <a href="/admin/applications/create" class="btn btn-primary">Thêm mới</a>
    </div>
    <div class="panel-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Logo</th>
                    <th>Nhà tuyển dụng</th>
                    <th>Nhà tuyển dụng</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($applications as $application) : ?>
                    <tr>
                    <td><?= $application->id ?></td>
                    <td><?= $application->job_id ?></td>
                    <td><?= $application->account_id ?></td>
                    <td><?= $application->status ?></td>
                    <td>
                        <a href="/admin/applications/edit?id=<?= $application->id ?>" class="btn btn-sm btn-primary">Sửa</a>
                        <a href="/admin/applications/delete?id=<?= $application->id ?>" class="btn btn-sm btn-danger">Xóa</a>
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