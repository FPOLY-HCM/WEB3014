<?php
require_once __DIR__ . '/../partials/header.php';
?>

<div class="col-md-8">
    <div>
        <?= flash()->display() ?>
        <form action="/account/companies/store" method="post" enctype="multipart/form-data">
        <div class="row form-group">
                <label for="form-label" class="col-md-3 form-label">Tên công ty</label>
                <div class="col-md-9">
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên công ty">
                </div>
            </div>
            <div class="row form-group">
                <label for="form-label" class="col-md-3 form-label">Logo</label>
                <div class="col-md-9">
                    <input type="file" name="logo" class="form-control" accept="image/*">
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
                    <input type="text" name="address" class="form-control" placeholder="Nhập địa chỉ">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Tạo mới</button>
        </form>
    </div>
</div>

<?php
require_once __DIR__ . '/../partials/footer.php';
?>