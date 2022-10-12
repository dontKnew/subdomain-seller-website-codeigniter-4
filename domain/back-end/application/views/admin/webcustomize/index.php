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

                    // if($this->session->flashdata('msg')!=''){

                    //     echo '<div class="alert alert-success alert-dismissible">

                    //           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                    //           <strong>'.$this->session->flashdata('msg').'</strong>

                    //         </div>';

                    // }

                    // if($this->session->flashdata('err')!=''){

                    //     echo '<div class="alert alert-danger alert-dismissible">

                    //           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                    //           <strong>'.$this->session->flashdata('err').'</strong>

                    //         </div>';

                    // }

                    ?>

                    <div class="row">

                        <div class="col-md-12 ">

                            <div class="box-widget widget-module">

                                <div class="widget-head clearfix">

                                    <!-- <span class="h-icon"><i class="fa fa-bars"></i></span>

                                <h4>companys</h4> -->
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs d-flex justify-content-center" role="tablist">
                                        <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">HOME PAGE</a></li>
                                        <li role="presentation"><a href="#about" aria-controls="about" role="tab" data-toggle="tab">ABOUT</a></li>
                                        <li role="presentation"><a href="#accommodation" aria-controls="accommodation" role="tab" data-toggle="tab">ACCMMODATION</a></li>
                                        <li role="presentation"><a href="#amenities" aria-controls="amenities" role="tab" data-toggle="tab">AMENITIES</a></li>
                                    </ul>
                                </div>

                                <div class="widget-container">

                                    <div class=" widget-block">

                                        <!-- <h1 class="text-grey"><u> Web-Customization</u></h1> -->
                                        <div>
                                            <!-- Tab panes -->
                                            <div class="tab-content" style="padding:10px">

                                                <?php
                                                $this->load->view('admin/webcustomize/inlcude/home');
                                                $this->load->view('admin/webcustomize/inlcude/about');
                                                $this->load->view('admin/webcustomize/inlcude/accomodation');
                                                // $this->load->view('admin/webcustomize/inlcude/amenities');

                                                ?>

                                                <!-- <div role="tabpanel" class="tab-pane fade" id="home">
                                                    HOME
                                                </div>

                                                <div role="tabpanel" class="tab-pane fade" id="about">
                                                    ABOUT
                                                </div> -->


                                            </div>

                                        </div>


                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php $this->load->view('common/foot'); ?>

                </div>

            </div>


<?php $this->load->view('common/footer') ?>