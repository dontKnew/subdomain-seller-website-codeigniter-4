<?php $this->load->view('common_front/header');
?>
<section class="row final-inner-header" style="
                display: table;
                height: 245px;
                background: url('<?= base_url()."uploads/package/".$cpackage[0]['package_photo'] ?>');
                width: 100%;
                margin: 0;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
">
    <div class="container">
        <h2 class="this-title"> <?= $cpackage[0]['photo_text'] ?> </h2>
    </div>
</section>
<section class="row final-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>"><?= $cpackage[0]['directory_link_home'] ?></a></li>
            <li class="active"><?= $cpackage[0]['directory_link_package'] ?></li>
        </ol>
    </div>
</section>


<!-- about Resort style-->
<section class="container clearfix common-pad-inner about-info-box nasir-room-grid-header">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="sec-header3">
                <h2><?= $cpackage[0]['web_description_title'] ?></h2>
                <h3><?= $cpackage[0]['web_description_title_comment'] ?></h3>
                <p> <?= $cpackage[0]['web_description'] ?></p>
            </div>
        </div>
    </div>
</section>
<!-- about Resort style-->
<section class="row nasir-room-grid">
    <div class="container">
        <div class="row">
            <?php foreach($package as $pc) { ?>
            <div class="col-sm-4 nroom-grid"><a ref="https://wa.me/<?=$textHome['phone_no'] ?>" target="_blank" class="room-img"><img src="<?= base_url()."uploads/package/".$pc['image'] ?>" alt="<?= $pc['name']?>"></a>
                <div class="row this-conts">
                    <div class="media">
                        <div class="media-body this-title"><?= $pc['name']?></div>
                    </div>
                    <div class="categories">
                        <ul class="list">
                            <li><strong>Inclusions :-</strong></li>
                            <?php foreach($inclusions as $inclusion) { ?>
                                <?php if($inclusion['package_id']==$pc['id']) {?>
                                    <li><?= $inclusion['name']?></li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                    <a class="read-more popup-btn" data-popup="popup-reg" ><?= $cpackage[0]['button_more_details']?><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</section>

<!--enquiry form -->
<div id="popup-reg" class="popup">
    <div class="popup-content">
        <div class="event-header">
            <h6>ENQUIRY FORM</h6>
        </div>
        <form id="send" class="send-form">
            <div class="form-group">
                <input type="text" placeholder="Enter name..." id="name" name="name" required="required">
                <label for="name">
                    <i class="fa fa-user"></i>
                </label>
            </div>
            <div class="form-group">
                <input type="tel" placeholder="Enter phone..." id="phone" name="phone" required="required">
                <label for="phone">
                    <i class="fa fa-phone"></i>
                </label>
            </div>
            <div class="form-group">
                <input type="email" placeholder="Enter mail..." id="mail" name="mail" required="required">
                <label for="mail">
                    <i class="fa fa-envelope"></i>
                </label>
            </div>
            <div class="form-group">
                <textarea placeholder="Enter message..." name="text" id="text"></textarea>
                <label for="text" class="txt">
                    <i class="fa fa-commenting"></i>
                </label>
            </div>
            <button type="submit" class="main-btn-rect" name="text" value="Send">
                <i class="fa fa-paper-plane"></i><?= $cpackage[0]['button_send'] ?> </button>
        </form>
        <span class="fade-out main-btn-circle">╳</span>
    </div>
</div
<!--end enquiry form-->

<?php $this->load->view('common_front/footer'); ?>
