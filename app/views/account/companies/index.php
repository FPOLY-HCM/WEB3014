<?php
require_once __DIR__ . '/../partials/header.php';
?>

<div class="col-md-8">
    <a class="btn btn-block btn-default" href="/account/companies/create">Thêm công ty mới</a>

    <?= flash()->display() ?>
    <div class="mt-4">
        <table class="table table-hover">
            <thead>
                <th>Logo</th>
                <th>Tên</th>
                <th>Địa chỉ</th>
            </thead>
            <tbody>
                <?php foreach ($companies as $company) : ?>
                    <tr>
                        <td>
                            <img src="<?= $company->logo ? asset($company->logo) : null ?>" alt="<?= $company->name ?>" height="50px">
                        </td>
                        <td>
                            <a href="/companies/show?id=<?= $company->id ?>"><?= $company->name ?></a>
                        </td>
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