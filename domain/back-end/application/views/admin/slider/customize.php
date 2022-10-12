<!--<h1> Hello </h1>-->
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
                                            <input type="text" class="form-control" name="webpage_title" value="Resorts-Home" placeholder="web title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Website name</label>
                                            <input type="text/" class="form-control" name="website_name" value="E Service Apartment Website" placeholder="website name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Phone no. </label>
                                            <input type="text" class="form-control" name="phone_no" value="7015221377" placeholder="contact number" required>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Website email </label>
                                            <input type="email" class="form-control" name="website_email" value="booking@apartment.com" placeholder="website email" required>
                                        </div>
                                        <label for="">
                                            <h3> After Slider - </h3>
                                        </label>
                                        <div class="form-group">
                                            <label for="">Web description 1 </label>
                                            <input type="text" class="form-control" name="welcome_text" value="WELCOME TO" placeholder="welcome text" required>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Website description 2 </label>
                                            <!-- <textarea class="form-control" name="webdescription-about" placeholder="website description" rows="5" required> -->
                                            <textarea class="form-control full-editor" name="web_description" placeholder="website description" rows="5" required> Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.

Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.

Our resort opened its gates to welcome its guest in November 2016 and has since become the venue for some of the grandest events to be held in Jim Corbett.

Our sprawling resort stands prominently amidst the paddy fields adjoining the decades-old mango and lychee orchards, connecting the lush green part of the locale.

While our place gives our guests a lot of village life, which sometimes gives an opportunity to see the life of the village in an interactive session with the people of the village.

This approach brings your mind to the peace in Jim Corbett National Park and replaces the install moment, which is a short time. To go away your tensions, our naturalists are trained locals who know the forests behind their palms. They are confident that you will catch the jungles to reveal many mysteries, besides the tigers of tigers.

The famous forests of Corbett National Park testify to man's determination for safe places for wildlife to thrive and we are committed to maintaining it.

We aspire to promote responsible tourism in this environmentally fragile region and are proud of our strong inclination towards promoting indigenous ways of local people in its totality. At our resort you get a taste of the famous Kumaoni hospitality in its entirety.

We welcome you to this abode of peace and assure you of not having the same experience as before! </textarea>

                                        </div>
                                        <div class="form-group">
                                            <label for=""> Menu </label>
                                            <input type="text" class="form-control" name="home_menu" value="Home" placeholder="home menu" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Button </label>
                                            <input type="text" class="form-control" name="button_book_now" value="Book Now" placeholder="button-book now" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="button_contact" value="Contact us" placeholder="button-contact us" required>
                                            <label for=""> Button </label>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Pay Button </label>
                                            <input type="text" class="form-control" name="button_payment" value="Pay Online" placeholder="button-payment" required>
                                        </div>
                                        <label for="">
                                            <h3> Footer - </h3>
                                        </label>
                                        <div class="form-group">
                                            <label for=""> Accommodation/Amenities title </label>
                                            <input type="text" class="form-control" name="accommdation_title" value="ACCOMMODATION & AMENITIES" placeholder="title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Package title </label>
                                            <input type="text" class="form-control" name="package_title" value="SPECIAL PACKAGES" placeholder="package title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Event title </label>
                                            <input type="text" class="form-control" name="event_title" value="WEDDING AND EVENTS" placeholder="event title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Location title </label>
                                            <input type="text" class="form-control" name="location_title" value="GET IN TOUCH" placeholder="location title" required>
                                        </div>
                                        <div class="form-inline">
                                            <label for=""> Office Address </label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="google_map_link" value="https://goo.gl/maps/m3BXFY6CuUrq6EGz5" placeholder="google map link" required>
                                                <input type="text" class="form-control" name="city_name" value="DWARKA" placeholder="city name" required>
                                                <input type="text" class="form-control" name="state_name" value="State" placeholder="state name" required>
                                                <input type="text" class="form-control" name="country_name" value="country" placeholder="country name" required>
                                                <input type="text" class="form-control" name="website_2nd_email" value="web@email.com" placeholder="webiste 2nd email" required>
                                                <input type="text" class="form-control" name="footer_phone_no" value="6205881326" placeholder="phone no." required>
                                                <input type="text" class="form-control" name="footer_phone_no1" value="6205881326" placeholder="phone no." required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Copyright line </label>
                                            <input type="text" class="form-control" name="copyright_line" value="Copyright © Resort and Hotel 2021. All rights reserved." placeholder="footer copyright line" required>
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
