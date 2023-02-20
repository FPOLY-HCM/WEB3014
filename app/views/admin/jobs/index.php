<?php
require_once __DIR__ . '/../partials/header.php';
?>

<?= flash()->display() ?>

<div class="panel-white">
    <div class="panel-head d-flex justify-content-between align-items-center">
        <h5>Danh sách Việc làm</h5>
        <a href="/admin/jobs/create" class="btn btn-primary">Thêm mới</a>
    </div>
    <div class="panel-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên công việc</th>
                    <th>Nhà tuyển dụng</th>
                    <th>Lương</th>
                    <th>Lượt xem</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jobs as $job) : ?>
                    <tr>
                        <td><?= $job->id ?></td>
                        <td>
                            <a href="/jobs/show?id=<?= $job->id ?>" target="_blank"><?= $job->name ?></a>
                        </td>
                        <td><?= $job->company->name ?></td>
                        <td><?= money_format($job->salary) ?>/<?= $job->salary_range ?></td>
                        <td><?= number_format($job->views) ?></td>
                        <td><?= $job->created_at->diffForHumans() ?></td>
                        <td>
                            <a href="/admin/jobs/edit?id=<?= $job->id ?>" class="btn btn-sm btn-primary">Sửa</a>
                            <a href="/admin/jobs/delete?id=<?= $job->id ?>" class="btn btn-sm btn-danger">Xóa</a>
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