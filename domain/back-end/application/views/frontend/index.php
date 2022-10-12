<?php $this->load->view('common_front/header'); ?>
<div id="minimal-bootstrap-carousel" data-ride="carousel" class="carousel default-home-slider slide carousel-fade shop-slider">
    <!-- Wrapper for slides-->
    <div role="listbox" class="carousel-inner">
    <?php  $i= 1; foreach ($slider as $s) { ?>
        <div style="background-image: url(<?=  base_url()."uploads/slider/".$s['image']; ?>); background-position: center right;" class="item <?php if($i==1){echo "active";}; ?> slide-<?php echo $i; ?>">
            <div class="carousel-caption nhs-caption nhs-caption6">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content text-center">
                            <h2 data-animation="animated fadeInUp" class="this-title"> <?php echo $s['type']; ?> </h2>
                            <p data-animation="animated fadeInDown"> <?php echo $s['type2']; ?> </p><a data-animation="animated fadeInLeft" href="https://wa.me/<?= $textHome['phone_no']; ?>" target="_blank" class="nhs-btn3"><?= $textHome['button_book_now'] ?></a><a data-animation="animated fadeInRight" href="<?= base_url()."contact"; ?>" class="nhs-btn">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $i = $i+1;} ?>

        <!--        <div style="background-image: url(images/slider/11.jpg);backgroudn-position: center right;" class="item slide-2">-->
<!--            <div class="carousel-caption nhs-caption nhs-caption7">-->
<!--                <div class="thm-container">-->
<!--                    <div class="box valign-middle">-->
<!--                        <div class="content text-left pull-left">-->
<!--                            <h2 data-animation="animated fadeInUp" class="this-title">The Best Place to Relax</h2>-->
<!--                            <p data-animation="animated fadeInDown">Book a room at our resort now and get a discount of 30%. Fruit basket, soft drinks and a huge cozy bed are waiting for you. We will do everything to make you feel at home.</p><a data-animation="animated fadeInLeft" href="https://wa.me/919999105555" target="_blank" class="nhs-btn3">Book now</a><a data-animation="animated fadeInRight" href="contact.html" class="nhs-btn">Contact us</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div style="background-image: url(images/slider/12.jpg);backgroudn-position: center right;" class="item slide-2">-->
<!--            <div class="carousel-caption nhs-caption nhs-caption8">-->
<!--                <div class="thm-container">-->
<!--                    <div class="box valign-middle">-->
<!--                        <div class="content text-center">-->
<!--                            <h2 data-animation="animated fadeInUp" class="this-title">We offer you the best</h2>-->
<!--                            <h2 data-animation="animated fadeInUp" class="this-title">luxury hotel with an impressive history</h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
    <!-- Controls--><a href="#minimal-bootstrap-carousel" role="button" data-slide="prev" class="left carousel-control"><i class="fa fa-angle-left"></i><span class="sr-only">Previous</span></a><a href="#minimal-bootstrap-carousel" role="button" data-slide="next" class="right carousel-control"><i class="fa fa-angle-right"></i><span class="sr-only">Next</span></a>
</div>

<div class="nasir-welcome-style row list list5">
    <div class="container">
        <div class="row nwelcomestyle">
            <div class="col-md-6 this-images">
                <iframe class="iframeCss" width="100%" src="https://www.youtube.com/embed/<?=$textHome['youtube_url']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 col-md-6 this-texts">
                <h2 class="this-wtitle"><?= $textHome['welcome_text'] ?></h2>
                <h2 class="this-title"><?= $textHome['website_name'] ?></h2>

            </div>
        </div>

        <div class="row nwelcomestyle">
            <div class="col-lg-12 col-md-12 this-texts">
              <?=  $textHome['web_description'] ?>
            </div>
        </div>

    </div>
</div>
<!-- Search style-->

<!-- Room style-->
<section class="clearfix news-wrapper">
    <div class="container clearfix ">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <?php foreach($accommodation as $ac){ ?>
                <div class="room-wrapper">

                    <div class="row">
                        <div class="col-md-3 col-sm-12"><a href="<?= base_url()."single-room"?>" target="_blank"><img src="<?= base_url()."uploads/acomodation/".$ac['image'] ?>" alt=""></a></div>
                        <div class="col-md-6 col-sm-12 galler">
                            <h2><?=  $ac['name'] ?></h2>
                            <p><?=  $ac['description'] ?></p>
                            <ul class="booking-item-features booking-item-features-small clearfix">
                                <li rel="tooltip" data-placement="top" title="Air Conditioning"><i class="fa fa-rss" aria-hidden="true"></i> </li>
                                <li rel="tooltip" data-placement="top" title="Flat Screen TV"><i class="fa fa-television" aria-hidden="true"></i> </li>
                                <li rel="tooltip" data-placement="top" title="Soundproof"><i class="fa fa-coffee" aria-hidden="true"></i> </li>
                                <li rel="tooltip" data-placement="top" title="Tea Coffee Maker"><i class="fa fa-shower" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-12 galler-right">
                            <ul>
                                <li>
                                    <div class="redioBtn"><input name="" type="radio" value=""></div>
                                    <div class="ap">Daily</div>
                                    <div class="rupees1">₹ <?= $ac['old_daily_amount'] ?></div>
                                    <div class="rupees2">₹ <?= $ac['daily_amount'] ?></div>
                                    <div class="night"><?= $ac['shift'] ?></div>
                                </li>
                                <li>
                                    <div class="redioBtn"><input name="" type="radio" value=""></div>
                                    <div class="ap">Weekly</div>
                                    <div class="rupees1">₹ <?= $ac['old_weekly_amount'] ?></div>
                                    <div class="rupees2">₹ <?= $ac['weekly_amount'] ?></div>
                                    <div class="night"><?= $ac['shift'] ?></div>
                                </li>
                                <li>
                                    <div class="redioBtn"><input name="" type="radio" value=""></div>
                                    <div class="ap">Monthly</div>
                                    <div class="rupees1">₹ <?= $ac['old_monthly_amount'] ?></div>
                                    <div class="rupees2">₹ <?= $ac['monthly_amount'] ?></div>
                                    <div class="night"><?= $ac['shift'] ?></div>
                                </li>
                            </ul>
                            <a href="<?= base_url()."single-room/".$ac['id']?>" target="_blank">Book Now</a>
                        </div>

                    </div>
                </div>
        <?php }?>

            </div>
        </div>
    </div>
</section>
<!-- Room style-->

<!--facilities section-->
<section class="fac-sec">
    <div class="container">
        <h2><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;&nbsp;FACILITIES @ D-HABITAT</h2>
        <div class="row">
            <?php foreach ($facility as $fac){?>
            <div class="col-md-4 mb-3">
                <div class="fac-b">
                    <img src="<?= base_url()."public/frontend/images/icon/breakfast-icon.png" ?>">
                    <h5><?= $fac['name'] ?></h5>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
   <?php $this->load->view('common_front/footer'); ?>
