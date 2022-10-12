<?= $this->extend('admin') ?>
<?= $this->section('main-contents') ?>

<!--start main content-->
<div class="container-fluid">

    <h4 class="page-title">
        <a href="<?= base_url("admin/home-slider") ?>" class="btn btn-warning">
            <i class="la la-arrow-left"></i> Back
        </a>
    </h4>
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Add Slider</div>
                </div>
                <form action="<?= base_url("admin/home-slider/add") ?>" method="POST" enctype="multipart/form-data">
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

                        <div class="form-group"> <!--has-success-->
                            <label>Slider Title</label>
                            <input type="text" name="title" value="TITLE" class="form-control input-solid" required>
                        </div>
                        <div class="form-group "> <!--has-error has-feedback-->
                            <label>Sub Title</label>
                            <input type="text"  name="sub_title" value="SUB TITLE" class="form-control input-solid" required>
                            <!--<small  class="form-text text-muted">Please provide a valid informations.</small>-->
                        </div>
                        <div class="form-group">
                            <label>Youtube Url</label>
                            <input type="text" name="youtube_url" value="youtube url" class="form-control input-solid" required>
                        </div>
                        <div class="form-group">
                            <label>Yt Video Title </label>
                            <input type="text" name="yt_video_title" value="yt video title" class="form-control input-solid" required>
                        </div>
                        <div class="form-group">
                            <label>Slider Image</label>
                            <input type="file" name="image" class="form-control-file input-solid"  required>
                        </div>
                        <div class="form-group">
                            <label>Select Status</label>
                            <select name="status" class="form-control input-solid" required>
                                <option value="Private" selected>Private</option>
                                <option value="Public">Public</option>
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
