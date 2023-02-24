<?php
require_once __DIR__ . '/../partials/header.php';
?>

<div class="col-md-8">
    <?= flash()->display() ?>
    <div class="mt-4">
        <table class="table table-hover">
            <thead>
                <th>Tên</th>
                <th>Địa chỉ</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </thead>
            <tbody>
                <?php foreach ($applications as $application) : ?>
                    <tr>
                        <td><?= $application->job->name ?></td>
                        <td><?= $application->job->address ?></td>
                        <td><?= $application->status->name ?></td>
                        <td>
                            <a href="/account/applications/approve?id=<?= $application->id ?>" class="btn btn-sm btn-primary">Chấp thuận</a>
                            <a href="/account/applications/reject?id=<?= $application->id ?>" class="btn btn-sm btn-danger">Từ chối</a>
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