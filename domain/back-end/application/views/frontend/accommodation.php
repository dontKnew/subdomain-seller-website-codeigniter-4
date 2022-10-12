<?php $this->load->view('common_front/header');
?>
<section class="row final-inner-header" style="
                display: table;
                height: 245px;
                background: url('<?= base_url()."uploads/acomodation/".$caccommodation[0]['accommodation_photo'] ?>');
                width: 100%;
                margin: 0;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
">
    <div class="container">
        <h2 class="this-title"> <?= $caccommodation[0]['photo_title'] ?> </h2>
    </div>
</section>
<section class="row final-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>"><?= $caccommodation[0]['directory_link_home'] ?></a></li>
            <li class="active"><?= $caccommodation[0]['directory_link_accommodation'] ?></li>
        </ol>
    </div>
</section>

<!-- about Resort style-->
<section class="container clearfix common-pad-inner about-info-box">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="sec-header3">
                <h2><?= $caccommodation[0]['description_title'] ?> </h2>
                <h3><?= $caccommodation[0]['title_comment'] ?></h3>
            </div>
            <p><?= $caccommodation[0]['web_description'] ?></p>
        </div>
    </div>
</section>
<!-- about Resort style-->
<!-- Room style-->
<section class="clearfix news-wrapper">
    <div class="container clearfix common-pad-room">
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

<?php $this->load->view('common_front/footer'); ?>
