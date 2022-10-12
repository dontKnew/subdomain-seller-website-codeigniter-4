<?php $this->load->view('common/head'); ?>

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

                                        <li class="active-page">Package-Customization</li>

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

                                <span class="h-icon"><i class="fa fa-bars"></i></span>

                                <h4>Package Customize</h4>

                            </div>

                            <div class="widget-container">

                                <div class=" widget-block">

                                    <div>

                                        <form action="<?php echo base_url("admin/package/customize"); ?>" method="post" enctype="multipart/form-data" >
                                            <input type="hidden" name="domain" value="<?php echo strtolower($this->session->sessionDomain);?>">
                                            <label for="">
                                                <h3> Header - </h3>
                                            </label>
                                            <div class="form-group">
                                                <label for="">Webpage title</label>
                                                <input type="text" class="form-control" name="webpage_title" value="<?= $data[0]->webpage_title; ?>" value="Resorts-package" placeholder="webpage title" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Package</label>
                                                <input type="text" class="form-control" name="package_menu" value="<?= $data[0]->package_menu; ?>" value="Resorts-package" placeholder="webpage title" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Package Photo</label>
                                                <input type="file" name="package_photo" class="form-control" placeholder="package photo">
                                                <img src="<?= base_url()."uploads/package/". $data[0]->package_photo; ?>"  width="150" height="100" alt="package photo">
                                            </div>
                                            <div class="form-group">
                                                <label for=""> Photo Text </label>
                                                <input type="text" name="photo_text" value="<?= $data[0]->photo_text; ?>" class="form-control" value="package" placeholder="title of package" required>
                                            </div>
                                            <div class="form-inline">
                                                <div class="form-group">
                                                    <label for=""> Directory Link </label>
                                                    <input type="text" name="directory_link_home" value="<?= $data[0]->directory_link_home; ?>" class="form-control" value="Home" placeholder="menu title" required>
                                                    <input type="text" name="directory_link_package" value="<?= $data[0]->directory_link_package; ?>" class="form-control" value="package" placeholder="menu title" required>
                                                </div>
                                            </div>
                                            <label for="">
                                                <h3> Center - </h3>
                                            </label>
                                            <div class="form-group">
                                                <label for="">description title </label>
                                                <input type="text" class="form-control" name="web_description_title" value="<?= $data[0]->web_description_title; ?>" value="Apartments Accomodation in Gurgaon Near Sikanderpur" placeholder="web description title" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">description title comment </label>
                                                <input type="text" class="form-control" name="web_description_title_comment" value="<?= $data[0]->web_description_title_comment; ?>" value="Thats some our best moment in our life" placeholder="web description title comment" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Web Description </label>
                                                <textarea type="text" class="form-control full-editor" name="web_description" value="<?= $data[0]->web_description; ?>" required>
                                                <?= $data[0]->web_description; ?>
                                                </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for=""> button </label>
                                                <input type="text" class="form-control" name="button_more_details" value="<?= $data[0]->button_more_details; ?>" value="CLICK HERE FOR MORE DETAILS" required>
                                            </div>
                                            <label for="">ENQUIRY FORM - </label>
                                            <div class="form-group">
                                                <label for=""> button </label>
                                                <input type="text" class="form-control" value="<?= $data[0]->button_send; ?>" value="SEND" required>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Save Settings" class="btn btn-primary"/>
                                    </div>

                                    </form>


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