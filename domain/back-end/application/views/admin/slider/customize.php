we<!--<h1> Hello </h1>-->
<?php
//    foreach($data as $home){
//        print_r($home);
//    }
//?>
<?php $this->load->view('common/head') ?>

<body>

<div class="page-container list-menu-view">

    <!--Leftbar Start Here -->

    <?php $this->load->view('common/sidebar') ?>



    <div class="page-content">

        <!--Topbar Start Here -->

        <?php $this->load->view('common/header') ?>

        <div class="main-container">

            <div class="container-fluid">

                <div class="page-breadcrumb">

                    <div class="row">

                        <div class="col-md-7">

                            <div class="page-breadcrumb-wrap">

                                <div class="page-breadcrumb-info">



                                    <ul class="list-page-breadcrumb">

                                        <li><a href="#">Home</a>

                                        </li>

                                        <li class="active-page">Web-Customization</li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-5">

                        </div>

                    </div>

                </div>

                <?php

                 if($this->session->flashdata('msg') !== null && $this->session->flashdata('msg')!==''){

                     echo '<div class="alert alert-success alert-dismissible">

                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                           <strong>'.$this->session->flashdata('msg').'</strong>

                         </div>';
                     unset($_SESSION['msg']);

                 }

                 if($this->session->flashdata('err') !== null && $this->session->flashdata('err')!==''){
                     echo '<div class="alert alert-danger alert-dismissible">
                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                           <strong>'.$this->session->flashdata('err').'</strong>
                         </div>';
                 }
                unset($_SESSION['err']);

                ?>

                <div class="row">

                    <div class="col-md-12 ">

                        <div class="box-widget widget-module">

                            <div class="widget-head clearfix">

                                 <span class="h-icon"><i class="fa fa-bars"></i></span>

                            <h4>Home Customization</h4>
                            </div>

                            <div class="widget-container">

                                <div class=" widget-block">
                                    <form action="<?php echo base_url("admin/home/customize"); ?>" method="POST">
                                        <input type="hidden" name="domain" value="<?php echo strtolower($this->session->sessionDomain);?>">
                                        <label for="">
                                            <h3> Header - </h3>
                                        </label>
                                        <div class="form-group">

                                            <label for="">Webpage title</label>
                                            <input type="text" class="form-control" name="webpage_title" value="<?= $data['webpage_title'] ?>" placeholder="web title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Website name</label>
                                            <input type="text/" class="form-control" name="website_name" value="<?= $data['website_name'] ?>" placeholder="website name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Phone no. </label>
                                            <input type="text" class="form-control" name="phone_no" value="<?= $data['phone_no'] ?>" placeholder="contact number" required>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Website email </label>
                                            <input type="email" class="form-control" name="website_email" value="<?= $data['website_email'] ?>" placeholder="website email" required>
                                        </div>
                                        <label for="">
                                            <h3> After Slider - </h3>
                                        </label>
                                        <div class="form-group">
                                            <label for="">Web description 1 </label>
                                            <input type="text" class="form-control" name="welcome_text" value="<?= $data['welcome_text'] ?>" placeholder="welcome text" required>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Website description 2 </label>
                                            <!-- <textarea class="form-control" name="webdescription-about" placeholder="website description" rows="5" required> -->
                                            <textarea class="form-control full-editor" name="web_description" placeholder="website description" rows="5" required><?= $data['web_description'] ?></textarea>

                                        </div>
                                        <div class="form-group">
                                            <label for=""> Menu </label>
                                            <input type="text" class="form-control" name="home_menu" value="<?= $data['home_menu'] ?>" placeholder="home menu" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Button </label>
                                            <input type="text" class="form-control" name="button_book_now" value="<?= $data['button_book_now'] ?>" placeholder="button-book now" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="button_contact" value="<?= $data['button_contact'] ?>" placeholder="button-contact us" required>
                                            <label for=""> Button </label>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Pay Button </label>
                                            <input type="text" class="form-control" name="button_payment" value="<?= $data['button_payment'] ?>" placeholder="button-payment" required>
                                        </div>
                                        <label for="">
                                            <h3> Footer - </h3>
                                        </label>
                                        <div class="form-group">
                                            <label for=""> Accommodation/Amenities title </label>
                                            <input type="text" class="form-control" name="accommdation_title" value="<?= $data['accommdation_title'] ?>" placeholder="title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Package title </label>
                                            <input type="text" class="form-control" name="package_title" value="<?= $data['package_title'] ?>" placeholder="SPECIAL PACKAGE" required>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Event title </label>
                                            <input type="text" class="form-control" name="event_title" value="<?= $data['event_title'] ?>" placeholder="WEEDDING AND PARTY" required>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Location title </label>
                                            <input type="text" class="form-control" name="location_title" value="<?= $data['location_title'] ?>" placeholder="GET IN TOUCH" required>
                                        </div>
                                        <div class="form-inline">
                                            <label for=""> Office Address </label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="google_map_link" value="<?= $data['google_map_link'] ?>" placeholder="google map link" required>
                                                <input type="text" class="form-control" name="city_name" value="<?= $data['city_name'] ?>" placeholder="city name" required>
                                                <input type="text" class="form-control" name="state_name" value="<?= $data['state_name'] ?>" placeholder="state name" required>
                                                <input type="text" class="form-control" name="country_name" value="<?= $data['country_name'] ?>" placeholder="country name" required>
                                                <input type="text" class="form-control" name="website_2nd_email" value="<?= $data['website_2nd_email'] ?>" placeholder="webiste 2nd email" required>
                                                <input type="text" class="form-control" name="footer_phone_no" value="<?= $data['footer_phone_no'] ?>" placeholder="phone no." required>
                                                <input type="text" class="form-control" name="footer_phone_no1" value="<?= $data['footer_phone_no1'] ?>" placeholder="phone no." required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Copyright line </label>
                                            <input type="text" class="form-control" name="copyright_line" value="<?= $data['copyright_line'] ?>" placeholder="footer copyright line" required>
                                        </div>
                                        <input type="submit"  value="Save Setting" class="btn btn-warning" />
                                    </form>


                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <?php $this->load->view('common/foot'); ?>

            </div>

        </div>

        <?php $this->load->view('common/footer') ?>
