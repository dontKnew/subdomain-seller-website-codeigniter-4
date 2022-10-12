<?= $this->extend('admin') ?>
<?= $this->section('main-contents') ?>

<!--start main content-->
<div class="container-fluid">

    <h4 class="page-title">
        <a href="<?= base_url("admin/highlight-apartment") ?>" class="btn btn-warning">
            <i class="la la-arrow-left"></i> Back
        </a>
    </h4>
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Add Highlight Apartment</div>
                </div>
                <form action="<?= base_url("admin/highlight-apartment/add") ?>" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        <?php if (session()->has('msg')) : ?>
                            <div class="alert alert-success text-center" role="alert">
                                <?= session()->getFlashdata("msg") ?>
                            </div>
                        <?php endif; ?>

                        <?php if (session()->has('err')) : ?>
                            <div class="alert alert-danger text-center" role="alert">
                                <?= session()->getFlashdata("err") ?>
                            </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <label>Select Apartment</label>
                            <div class="form-inline">
                                <select name="service_apartment_id" class="form-control input-solid mx-md-1 mx-sm-1 my-1" required>
                                    <?php if($data): ?>
                                        <?php foreach($data as $value): ?>
                                        <option value="<?= esc($value['id']) ?>"><?= ucwords(esc($value['title'])) ?></option>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <option value="">No Apartment Available</option>
                                    <?php endif; ?>
                                </select>
                                <a href="<?= base_url("admin/apartment/add") ?>" class="mx-md-1 my-1 btn btn-success btn-md">
                                    <i class="la la-plus-circle"></i> Add
                                </a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Select Status</label>
                            <select name="status" class="form-control input-solid" required>
                                <option value="Private" >Private</option>
                                <option value="Public" selected>Public</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-action text-center">
                        <button type="submit" class="btn btn-outline-primary">Submit</button
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!--end main content-->
<?= $this->endSection('main-contents') ?>
