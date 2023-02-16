<?php
require_once __DIR__ . '/../partials/header.php';
?>

<div class="col-md-8">
    <a class="btn btn-block btn-default" href="/account/companies/create">Thêm công ty mới</a>

    <div class="mt-4">
        <table class="table table-hover">
            <thead>
                <th>Tên</th>
                <th>Logo</th>
                <th>Địa chỉ</th>
            </thead>
            <tbody>
                <?php foreach ($companies as $company) : ?>
                    <tr>
                        <td><?= $company->name ?></td>
                        <td><?= $company->logo ? asset($company->logo) : null ?></td>
                        <td><?= $company->address ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>