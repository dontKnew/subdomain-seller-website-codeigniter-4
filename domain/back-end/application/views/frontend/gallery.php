<?php $this->load->view('common_front/header');

//foreach($gallery_type as $t) {
//    foreach($gallery as $g){
//        if ($g['gallery_type'] == $t['name']) {
//            print_r($g['gallery_type']);
//        }
//    }
//}
//echo "<br>";
//foreach($gallery as $g){
//    print_r($g['gallery_type']);
//}
//exit;
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

<!--filter gallery section -->
<section>
    <div class="filters filter-button-group">
<!--        <ul>-->
<!--            <li class="active"><a href="javascript:void(0);" data-filter="*">All</a></li>-->
<!--            <li><a href="javascript:void(0);" data-filter="1">option1</a></li>-->
<!--            <li><a href="javascript:void(0);" data-filter="2">option2</a></li>-->
<!--            <li><a href="javascript:void(0);" data-filter="3">option3</a></li>-->
<!--            <li><a href="javascript:void(0);" data-filter="4">option4</a></li>-->
<!--        </ul>-->
        <ul>
            <li class="active"><a href="javascript:void(0);" data-filter="*">All</a></li>
            <?php  $i= 0; foreach ($gallery_type as $type) { ?>
                <li><a href="javascript:void(0);" data-filter="<?= $i ?>"><?= ucwords($type['name']) ?></a></li>
                <?php $i = $i+1;}?>
        </ul>
    </div>
    <div id="container" class="isotope container-fluid">
        <div class="row">
            <div clas="col-md-4">
                <div class="grid-item" data-filter="2">
                    <a class="popupimg" href="<?= base_url()."public/frontend/images/gallery/1.jpg"?>">
                        <img src="<?= base_url()."public/frontend/images/gallery/1.jpg"?>" >
                    </a>
                    <div class="overlay">Front View</div>
                </div>
            </div>

            <div clas="col-md-4">
                <div class="grid-item" data-filter="4">
                    <a class="popupimg" href="<?= base_url()."public/frontend/images/gallery/2.jpg"?>">
                        <img src="<?= base_url()."public/frontend/images/gallery/2.jpg"?>" >
                    </a>
                    <div class="overlay">Pool View</div>
                </div>
            </div>

            <div clas="col-md-4">
                <div class="grid-item" data-filter="2">
                    <a class="popupimg" href="<?= base_url()."public/frontend/images/gallery/3.jpg"?>">
                        <img src="<?= base_url()."public/frontend/images/gallery/3.jpg"?>" >
                    </a>
                    <div class="overlay">Exterior View</div>
                </div>
            </div>
        </div>

        <div class="grid-item" data-filter="3">
            <a class="popupimg" href="<?= base_url()."public/frontend/images/gallery/4.jpg"?>">
                <img src="<?= base_url()."public/frontend/images/gallery/4.jpg"?>" >
            </a>
            <div class="overlay">Restaurant</div>
        </div>


        <div class="grid-item" data-filter="4">
            <a class="popupimg" href="<?= base_url()."public/frontend/images/gallery/5.jpg"?>">
                <img src="<?= base_url()."public/frontend/images/gallery/5.jpg"?>" >
            </a>
            <div class="overlay">Conference Hall</div>
        </div>


        <div class="grid-item" data-filter="1">
            <a class="popupimg" href="<?= base_url()."public/frontend/images/gallery/6.jpg"?>">
                <img src="<?= base_url()."public/frontend/images/gallery/6.jpg"?>" >
            </a>
            <div class="overlay">SPA</div>
        </div>


        <div class="grid-item" data-filter="2">
            <a class="popupimg" href="<?= base_url()."public/frontend/images/gallery/7.jpg"?>">
                <img src="<?= base_url()."public/frontend/images/gallery/7.jpg"?>" >
            </a>
            <div class="overlay">Badmintion Court</div>
        </div>
        <div class="grid-item" data-filter="3">
            <a class="popupimg" href="<?= base_url()."public/frontend/images/gallery/8.jpg"?>">
                <img src="<?= base_url()."public/frontend/images/gallery/8.jpg"?>" >
            </a>
            <div class="overlay">Basketball Court</div>
        </div>

        <div class="grid-item" data-filter="4">
            <a class="popupimg" href="<?= base_url()."public/frontend/images/gallery/9.jpg"?>">
                <img src="<?= base_url()."public/frontend/images/gallery/9.jpg"?>" >
            </a>
            <div class="overlay">Party Hall</div>
        </div
    </div>
</section>
<!--end filter gallery section -->

<!--end gallery section -->

<?php $this->load->view('common_front/footer'); ?>
