<?php
require_once __DIR__ . '/../partials/header.php';
?>

<div class="col-md-8">
    <div class="d-flex justify-content-between">
        <h3>Các đơn ứng tuyển của <strong><?= $job->name ?></strong></h3>
        <a href="/account/jobs">Quay lại</a>
    </div>
    <div class="mt-4">
        <table class="table table-hover">
            <thead>
                <th>Tên</th>
                <th>Ứng viên</th>
                <th>Thời gian</th>
            </thead>
            <tbody>
                <?php foreach ($job->applications as $application) : ?>
                    <tr>
                        <td><?= $application->id ?></td>
                        <td><?= $application->account->name ?></td>
                        <td><?= $application->created_at ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>