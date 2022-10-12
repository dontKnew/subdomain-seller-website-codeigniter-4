<?php $this->load->view('common_front/header');
?>
<section class="row final-inner-header" style="
                display: table;
                height: 245px;
                background: url('<?= base_url()."uploads/about/".$cabout[0]['about_photo'] ?>');
                width: 100%;
                margin: 0;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
">
    <div class="container">
        <h2 class="this-title"> <?= $cabout[0]['photo_text'] ?> </h2>
    </div>
</section>
<section class="row final-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>"><?= $cabout[0]['directory_link_home'] ?></a></li>
            <li class="active"><?= $cabout[0]['directory_link_about'] ?></li>
        </ol>
    </div>
</section>
<div class="nasir-welcome-style row list list5">
    <div class="container">
        <div class="row nwelcomestyle">
            <div class="col-md-6 this-images">
                <iframe class="iframeCss" width="100%" src="https://www.youtube.com/embed/<?= $cabout[0]['youtube_url'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 col-md-6 this-texts">
                <h2 class="this-wtitle"><?= $cabout[0]['web_desc_title'] ?></h2>
                <h2 class="this-title"><?= $textHome['website_name'] ?></h2>
                <p><?= $cabout[0]['short_description'] ?> </p>
            </div>
        </div>

        <div class="row nwelcomestyle">
            <div class="col-lg-12 col-md-12 this-texts">
                <?= $cabout[0]['web_description'] ?>
            </div>
        </div>

    </div>
</div>
<!--why section-->
<section class="why-sec">
    <div class="container ">
        <div class="row">
            <div class="col-md-6 mb-3">
                <img src="<?= base_url()."uploads/about/".$cabout[0]['about_photo'] ?>">
            </div>
            <div class="col-md-6 mb-3">
                <h3><?= $cabout[0]['something_title'] ?></h3>
                <p><?= $cabout[0]['content_description'] ?></p>
                <div class="why-points">
                    <div class="row">
                        <?php foreach($point_word as $point){ ?>
                            <div class="col-lg-6 mb-3 why-p-col">
                                <i class="fa fa-area-chart" aria-hidden="true"></i>
                                <span><?= $point['point_word']?> </span>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
