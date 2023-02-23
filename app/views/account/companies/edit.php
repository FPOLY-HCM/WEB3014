<?php
require_once __DIR__ . '/../partials/header.php';
?>

<div class="col-md-8">
    <div>
        <h3 class="mb-25 text-center">Chỉnh sửa công ty</h3>
        <?= flash()->display() ?>
        <form action="/account/companies/update" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $company->id ?>">
        <div class="row form-group">
                <label for="form-label" class="col-md-3 form-label">Tên công ty</label>
                <div class="col-md-9">
                    <input type="text" name="name" class="form-control" value="<?= $company->name ?>">
                </div>
            </div>
            <div class="row form-group">
                <label for="form-label" class="col-md-3 form-label">Logo</label>
                <div class="col-md-9">
                    <input type="file" name="logo" class="form-control" accept="image/*">
                </div>
            </div>
            <div class="row form-group">
                <label for="form-label" class="col-md-3 form-label">Email</label>
                <div class="col-md-9">
                    <input type="email" name="email" class="form-control" value="<?= $company->email ?>">
                </div>
            </div>
            <div class="row form-group">
                <label for="form-label" class="col-md-3 form-label">Phone</label>
                <div class="col-md-9">
                    <input type="text" name="phone" class="form-control" value="<?= $company->phone ?>">
                </div>
            </div><div class="row form-group">
                <label for="form-label" class="col-md-3 form-label">Website</label>
                <div class="col-md-9">
                    <input type="website" name="website" class="form-control" value="<?= $company->website ?>">
                </div>
            </div>
            <div class="row form-group">
                <label for="description" class="col-md-3 form-label">Giới thiệu</label>
                <div class="col-md-9">
                    <textarea name="description" id="description" class="form-control" style="height: 150px;"></textarea>
                </div>
            </div>
            <div class="row form-group">
                <label for="address" class="col-md-3 form-label">Địa chỉ</label>
                <div class="col-md-9">
                    <input type="text" name="address" class="form-control" value="<?= $company->address ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sửa</button>
        </form>
    </div>
</div>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>