<?php
require_once __DIR__ . '/../partials/header.php';
?>

<div class="col-md-8">
    <div class="mt-4">
        <table class="table table-hover">
            <thead>
                <th>Tên</th>
                <th>Địa chỉ</th>
            </thead>
            <tbody>
                <?php foreach ($applications as $application) : ?>
                    <tr>
                        <td><?= $application->name ?></td>
                        <td><?= $application->address ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>