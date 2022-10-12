<?php $this->load->view('common_front/header');
?>
<section class="row final-inner-header" style="
                display: table;
                height: 245px;
                background: url('<?= base_url()."uploads/amenities/".$camenities[0]['amenties_photo'] ?>');
                width: 100%;
                margin: 0;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
">
    <div class="container">
        <h2 class="this-title"> <?= $camenities[0]['photo_text'] ?> </h2>
    </div>
</section>
<section class="row final-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>"><?= $camenities[0]['directory_link_home'] ?></a></li>
            <li class="active"><?= $camenities[0]['directory_link_amenities'] ?></li>
        </ol>
    </div>
</section>

<!-- about Resort style-->
<section class="container clearfix common-pad-inner about-info-box amm-sec">

    <div class="row">
        <div class="col-lg-9 col-md-8 col-xs-12">
            <div class="single-sidebar-widget-outer">
                <div class="sec-title-cat sec-title">
                    <h2><?= $camenities[0]['web_description_title']?> <br> <?= $camenities[0]['web_description_title_comment']?></h2>
                    <p><?= $camenities[0]['web_description_amenities']?></p>
<!--                    <p class="mt-3">TreeTop Greens serviced apartments offer reasonably priced accommodation in Gurgaon. There are 3 types of apartments affording flexibility of choice as per requirement, for a long comfortable stay. All apartments are tastefully furnished as per international standards and are equipped with all modern amenities.</p>-->
<!---->
<!--                    <ul class="mt-3">-->
<!--                        <p>The apartments are available in ::</p>-->
<!--                        <li class="mt-2"> ☀ Studio</li><br>-->
<!--                        <li class="mt-2"> ☀ One bedroom</li><br>-->
<!--                        <li class="mt-2"> ☀ Twin beds</li>-->
<!--                    </ul>-->
<!--                    <p>Sikanderpur is located at 5 minutes drive from Tree Top Greens Service Apartments in Gurgaon. Sikanderpur is also a Metro Station on the Yellow Line of the Delhi Metro and since from 2013. It acts as an interchange station for Rapid Metro for Udhyog Vihar and Golf Course Road. This station gets a much gathering going to office and some other residential and commercial places along this line. It benefits travellers who previously reached these places by some other transportation like Auto and Bus.</p>-->
<!---->
<!--                    <p>Sikanderpur is located at 5 minutes drive from Tree Top Greens Service Apartments in Gurgaon. Sikanderpur is also a Metro Station on the Yellow Line of the Delhi Metro and since from 2013. It acts as an interchange station for Rapid Metro for Udhyog Vihar and Golf Course Road. This station gets a much gathering going to office and some other residential and commercial places along this line. It benefits travellers who previously reached these places by some other transportation like Auto and Bus.</p>-->


                </div>
            </div>
        </div>


        <div class="col-lg-3 col-md-4 col-xs-12">
            <div class="single-sidebar-widget-outer">

                <div class="categories">
                    <ul class="mttt">
                        <li>
                            <img src="<?= base_url()."uploads/amenities/".$camenities[0]['sidebar_photo']?>">
                        </li>
                        <li>
                            <img src="<?= base_url()."uploads/amenities/".$camenities[0]['sidebar_1photo']?>">
                        </li>
                        <li>
                            <img src="<?= base_url()."uploads/amenities/".$camenities[0]['sidebar_2photo']?>">
                        </li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- about Resort style-->
<!-- Our Special Dinning-->
<section class="our-special-wrapper amm-sec2">
    <section class="container clearfix ">
        <h2>Room Aminities</h2>
        <div class="row">
            <div class="our-spec-outer">
                <?php foreach($amenities as $amenity){ ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom:2px">
                    <div class="item"><img src="<?= base_url()."uploads/amenities/".$amenity['image']?>" alt="<?=  $amenity['name']?>" class="img-responsive">
                        <h2><?= $amenity['name'] ?></h2>
                    </div>
                </div>
                <?php }?>
<!--                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--                    <div class="item"><img src="images/amenities/2.jpg" alt="" class="img-responsive">-->
<!--                        <h2>Basketball Court</h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--                    <div class="item"><img src="images/amenities/3.jpg" alt="" class="img-responsive">-->
<!--                        <h2>Tennis Court</h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--                    <div class="item"><img src="images/amenities/4.jpg" alt="" class="img-responsive">-->
<!--                        <h2>Yoga Center</h2>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>


    </section>
</section>
<!---->
<!--<!-- Our Special Dinning-->-->
<!--<section class="our-special-wrapper amm-sec3">-->
<!--    <section class="container clearfix ">-->
<!--        <h2>Additional Services</h2>-->
<!--        <div class="row">-->
<!--            <div class="our-spec-outer">-->
<!--                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--                    <div class="item"><img src="images/amenities/1.jpg" alt="" class="img-responsive">-->
<!--                        <h2>Badminton Court</h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--                    <div class="item"><img src="images/amenities/2.jpg" alt="" class="img-responsive">-->
<!--                        <h2>Basketball Court</h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--                    <div class="item"><img src="images/amenities/3.jpg" alt="" class="img-responsive">-->
<!--                        <h2>Tennis Court</h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--                    <div class="item"><img src="images/amenities/4.jpg" alt="" class="img-responsive">-->
<!--                        <h2>Yoga Center</h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="our-spec-outer">-->
<!--                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--                    <div class="item"><img src="images/amenities/1.jpg" alt="" class="img-responsive">-->
<!--                        <h2>Badminton Court</h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--                    <div class="item"><img src="images/amenities/2.jpg" alt="" class="img-responsive">-->
<!--                        <h2>Basketball Court</h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--                    <div class="item"><img src="images/amenities/3.jpg" alt="" class="img-responsive">-->
<!--                        <h2>Tennis Court</h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--                    <div class="item"><img src="images/amenities/4.jpg" alt="" class="img-responsive">-->
<!--                        <h2>Yoga Center</h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </section>-->
</section>



<?php $this->load->view('common_front/footer'); ?>
