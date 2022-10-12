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


<!-- Booking style-->
<section class="container clearfix common-pad booknow">
    <div class="sec-header">
        <h2>Send a message</h2>
        <h3>Pick a room that best suits your taste and budget</h3>
    </div>
    <div class="row nasir-contact">
        <div class="col-md-8">
            <div class="book-left-content input_form">
                <?php
                if($this->session->flashdata('msg')!=''){

                echo '<div class="alert alert-success alert-dismissible">

                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                    <strong>'.$this->session->flashdata('msg').'</strong>

                </div>';

                unset($_SESSION['msg']);

                }

                if($this->session->flashdata('err')!=''){

                echo '<div class="alert alert-danger alert-dismissible">

                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                    <strong>'.$this->session->flashdata('err').'</strong>

                </div>';
                unset($_SESSION['err']);

                }

                ?>
                <form id="contactForm" action="<?= base_url()."thanksme" ?>" method="post">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12"><span>Your Name*</span>
                            <input  type="text" name="name" placeholder="Enter Your name" class="form-control" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12"><span>Your Mobile No*</span>
                            <input  type="text" name="mobile" placeholder="Enter Your Mobile No*" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><span>Your Email id*</span>
                            <input  type="text" name="email" placeholder="Enter Your Email id*" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><span>Message</span>
                            <textarea rows="6" name="message" placeholder="Message" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" value="submit now" class="res-btn">Submit Now</button>
                        </div>
                    </div>
                </form>
<!--                <div id="success">-->
<!--                    <p>Your message sent successfully.</p>-->
<!--                </div>-->
<!--                <div id="error">-->
<!--                    <p>Something is wrong. Message cant be sent!</p>-->
<!--                </div>-->
            </div>
        </div>
        <div class="col-md-4">
            <div class="contact-info">
                <h2>Contact Info</h2>
                <div class="media-contact clearfix">
                    <div class="media-contact-icon"><i aria-hidden="true" class="fa fa-map-marker"></i></div>
                    <div class="media-contact-info">
                        <p><?=$textHome['website_name'] ?><br/>
                            <?=$company['address'] ?>
                        </p>
                    </div>
                </div>
                <div class="media-contact clearfix">
                    <div class="media-contact-icon"><i aria-hidden="true" class="fa fa-envelope-o"></i></div>
                    <div class="media-contact-info">
                        <p><a href="mailto:<?=$textHome['website_2nd_email'] ?>"><?=$textHome['website_2nd_email'] ?></a></p>
                    </div>
                </div>

                <div class="media-contact clearfix">
                    <div class="media-contact-icon"><i aria-hidden="true" class="fa fa-phone"></i></div>
                    <div class="media-contact-info">
                        <p><a href="tel:<?=$textHome['footer_phone_no'] ?>"><i>+91-<?=$textHome['footer_phone_no'] ?></i></a><br>
                            <a href="tel:<?=$textHome['footer_phone_no1'] ?>"><i>+91-<?=$textHome['footer_phone_no1'] ?> </i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- TT-CONTACT-MAP-->
<div class="addresses-block text-center" id="contact-google-map" style="margin:5px">
    <iframe class="iframeCss2"
            src="https://www.google.com/maps/embed?pb=<?= $company['google_map_link'] ?>"
            width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<!--    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317715.7233443598!2d-0.38246906128677727!3d51.52873356137895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2z4KSy4KSC4KSm4KSoLCDgpK_gpYLgpKjgpL7gpIfgpJ_gpYfgpKEg4KSV4KS_4KSC4KSX4KSh4KSu!5e0!3m2!1shi!2sin!4v1664427081877!5m2!1shi!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->

</div>
<?php $this->load->view('common_front/footer'); ?>
