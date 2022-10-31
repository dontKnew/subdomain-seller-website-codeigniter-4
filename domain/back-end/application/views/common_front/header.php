<?php
$comp = $this->db->where('status', 'Active')->where('domain', DOMAIN)->get('company')->row_array();
if (empty($comp)) {
    echo "Your domain is not registered with us,  <a href='www.globalheight.com'>Contact us</a> for register your domain <br> ";
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title><?= $title ?></title>
    <!-- reponsive meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="<?= $keywords ?>" name="keywords">
    <meta content="<?= $description ?>" name="description">
    <link rel="canonical" href="<?= current_url() ?>" />
    <!-- Bootstrap-->
    <link href= <?= base_url()."public/frontend/css/bootstrap.min.css" ?> rel="stylesheet">
    <link href= <?= base_url()."public/frontend/css/font-awesome.min.css" ?> rel="stylesheet">
    <!-- strock gap icons-->
    <link  href= <?= base_url()."public/frontend/vendors/Stroke-Gap-Icons-Webfont/style.css" ?> rel="stylesheet">
    <link  href= <?= base_url()."public/frontend/css/animate.min.css" ?> rel="stylesheet">
    <!-- owl-carousel-->
    <link  href= <?= base_url()."public/frontend/vendors/owlcarousel/owl.carousel.css" ?> rel="stylesheet">
    <link  href= <?= base_url()."public/frontend/vendors/imagelightbox/imagelightbox.min.css" ?> rel="stylesheet">
    <link  href= <?= base_url()."public/frontend/vendors/jquery-ui-1.11.4/jquery-ui.min.css" ?> rel="stylesheet">
    <!-- Main Css-->
    <link  href= <?= base_url()."public/frontend/css/style.css" ?> rel="stylesheet">
    <link  href= <?= base_url()."public/frontend/css/responsive.css" ?> rel="stylesheet">
    <link  href="<?= base_url()."uploads/company/".$comp['favicon']?>" type="image/png" sizes="16x16"  rel="icon">
    <!--if IE-->
    <link  href= <?= base_url()."public/frontend/css/all-ie-only.css"?> type="text/css"   rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')
    script(src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js')
    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<section class="top-bar dhomev">
    <div class="container">
        <div class="pull-left left-infos contact-infos">
            <div class="logo2"> <a href="/">
                    <img src="<?= base_url()."uploads/company/".$comp['logo']?>"> <h5> <?= $textHome['website_name'] ?></h5></a>
            </div>
        </div>
        <!-- /.pull-left left-infos-->
        <div class="pull-right right-infos link-list">
            <ul class="list-inline">

                <li><a href="tel:<?= $textHome['phone_no'] ?>"><i class="fa fa-phone"></i> (+91) <?= $textHome['phone_no'] ?></a></li>
                <li><a href="mailto:<?= $textHome['website_email'] ?>"><i class="fa fa-envelope"></i> <?= $textHome['website_email'] ?></a></li>
            </ul>
        </div>
        <!-- /.pull-right right-infos link-list-->
    </div>
    <!-- /.container-->
</section>
<!-- /.top-bar-->
<nav id="main-navigation-wrapper" class="navbar navbar-default _fixed-header _light-header stricky">
    <div class="container">
        <div class="pull-left left-infos contact-infos">
            <div class="logo2"> <a href=<?= base_url() ?>"> <img src="<?= base_url()."uploads/company/".$comp['logo'] ?>"> <h5><?= $textHome['website_name'] ?></h5></a></div>

        </div>
        <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
<!--            <a href="index.html" class="navbar-brand"><img src="images/logo.jpg"></a></a>-->
        </div>
        <div id="main-navigation" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?= base_url("/") ?>"><?= $textHome['home_menu'] ?></a></li>
                <li><a href="<?= base_url()."about" ?>">About</a></li>
                <li><a href="<?=  base_url()."accommodation" ?>">Accommodation</a></li>
                <li><a href="<?=  base_url()."amenities" ?>">Amenities</a></li>
                <li><a href="<?=  base_url()."package" ?>">Packages </a></li>
                <li><a href="<?=  base_url()."location-advantage" ?>">Location Advantages</a></li>
                <li><a href="<?=  base_url()."gallery" ?>">Photo Gallery</a></li>
                <li><a href="<?=  base_url()."testimonials" ?>">Testimonials</a></li>
                <li><a href="<?=  base_url()."blog" ?>">Blog</a></li>
                <li><a href="<?=  base_url()."contact" ?>">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Header  Slider style-->
