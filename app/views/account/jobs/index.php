<?php
require_once __DIR__ . '/../partials/header.php';
?>

<div class="col-md-8">
    <a class="btn btn-block btn-default" href="/account/jobs/create">Thêm việc làm mới</a>

    <div class="mt-4">
        <?= flash()->display() ?>
        <table class="table table-hover">
            <thead>
                <th>Tên</th>
                <th>Số người ứng tuyển</th>
                <th>Công ty</th>
                <th>Mức lương</th>
                <th>Tạo lúc</th>
                <th>Thao tác</th>
            </thead>
            <tbody>
                <?php foreach ($jobs as $job) : ?>
                    <tr>
                        <td>
                            <a href="/account/jobs/show?id=<?= $job->id ?>"><?= $job->name ?></a>
                        </td>
                        <td><?= number_format($job->applications_count) ?> người</td>
                        <td><?= $job->company->name ?></td>
                        <td><?= money_format($job->salary) ?></td>
                        <td><?= $job->created_at->diffForHumans() ?></td>
                        <td>
                            <a href="/account/jobs/edit?id=<?= $job->id ?>" class="btn btn-sm btn-primary">Sửa</a>
                            <a href="/account/jobs/delete?id=<?= $job->id ?>" class="btn btn-sm btn-danger">Xóa</a>
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