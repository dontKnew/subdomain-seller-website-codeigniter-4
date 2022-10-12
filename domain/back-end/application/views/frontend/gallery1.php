<?php $this->load->view('common_front/header');

?>
<section class="row final-inner-header" style="
        display: table;
        height: 245px;
        background: url('<?= base_url()."uploads/gallary/".$cgallery['gallery_photo'] ?>');
        width: 100%;
        margin: 0;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        ">
    <div class="container">
        <h2 class="this-title"> <?= $cgallery['photo_text'] ?> </h2>
    </div>
</section>
<section class="row final-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>"><?= $cgallery['directory_link_home'] ?></a></li>
            <li class="active"><?= $cgallery['directory_link_gallery'] ?></li>
        </ol>
    </div>
</section>

<!--gallery section -->
<!-- about Resort style-->
<section class="container clearfix common-pad-inner about-info-box nasir-room-grid-header">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="sec-header3">
                <h2>Photo Gallery</h2>
                <h3>Photo Gallery</h3>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="filters filter-button-group">
        <ul>
            <li class="active"><a href="javascript:void(0);" data-filter="*">All</a></li>
            <?php  $i= 0; foreach ($gallery_type as $type) { ?>
                <li><a href="javascript:void(0);" data-filter="<?= $i ?>"><?= ucwords($type['name']) ?></a></li>
                <?php $i = $i+1;}?>
        </ul>
    </div>
    <div id="container" class="isotope container-fluid">
        <div class="row">
            <?php  foreach ($gallery as $gal) { ?>
                <?php  $x = 0; foreach ($gallery_type as $type) {
                    if(trim(ucwords($type['name']))==trim(ucwords($gal["gallery_type"]))) { ?>
                        <div clas="col-md-4">
                            <div class="grid-item" data-filter="<?= $x ?>">
                                <a class="popupimg" href="<?= base_url()."public/frontend/images/gallery/1-big.jpg"?>">
                                    <img src="<?= base_url()."public/frontend/images/gallery/1.jpg"?>">
                                </a>
                                <div class="overlay">Front View</div>
                            </div>
                        </div>
                        <?php $x = $x+1;}}?>
            <?php }?>
        </div>
</section>
<!-- end gallery section  -->

<?php $this->load->view('common_front/footer'); ?>
