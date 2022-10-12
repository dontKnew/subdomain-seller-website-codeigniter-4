<?php $this->load->view('common/head'); ?>

<body>

<div class="page-container list-menu-view">

    <!--Left bar Start Here -->

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

                                        <li><a href="<?= base_url("admin/accommodation")?>">Home</a>
                                        </li>
                                        <li class="active-page">Accommodation</li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-5">

                        </div>

                    </div>

                </div>

                <?php

                if ($this->session->flashdata('msg') != '') {

                    echo '<div class="alert alert-success alert-dismissible">

                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                       <strong>' . $this->session->flashdata('msg') . '</strong>

                     </div>';
                    unset($_SESSION['msg']);

                }

                if ($this->session->flashdata('err') != '') {

                    echo '<div class="alert alert-danger alert-dismissible">

                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                       <strong>' . $this->session->flashdata('err') . '</strong>

                     </div>';
                    unset($_SESSION['err']);

                }

                ?>

                <div class="row">

                    <div class="col-md-12 ">

                        <div class="box-widget widget-module">

                            <div class="widget-head clearfix">
                                <span class="h-icon"><i class="fa fa-bars"></i></span>
                                <h4>Accommodation Customization</h4>
                            </div>

                            <div class="widget-container">

                                <div class=" widget-block">

                                    <!-- <h1 class="text-grey"><u> Web-Customization</u></h1> -->
                                    <div>

                                        <form action="<?php echo base_url("admin/accommodation/customize"); ?>"
                                              method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="domain"
                                                   value="<?php echo strtolower($this->session->sessionDomain); ?>">
                                            <div class="form-group">
                                                <label for="">Webpage title</label>
                                                <input type="text" class="form-control" name="webpage_title"
                                                       value="<?= $data[0]->webpage_title; ?>"
                                                       value="Resorts-Accommodation" placeholder="web title" required>
                                            </div>
                                            <div class="form-group">
                                                <label for=""> Photo title</label>
                                                <input type="text" class="form-control" name="photo_title"
                                                       value="<?= $data[0]->photo_title; ?>" value="Accommodation"
                                                       placeholder="Accommodation photo title" required>
                                            </div>
                                            <div class="form-group">
                                                <label for=""> Photo</label>
                                                <input type="file" class="form-control" name="accommodation_photo">
                                                <img src="<?= base_url() . 'uploads/acomodation/' . $data[0]->accommodation_photo; ?>"
                                                     alt="accommodation-photo" class="img-rounded " width="150"
                                                     height="100">
                                            </div>
                                            <div class="form-inline">
                                                <div class="form-group">
                                                    <label for=""> Directory Link </label>
                                                    <input type="text" class="form-control" name="directory_link_home"
                                                           value="<?= $data[0]->directory_link_home; ?>" value="Home"
                                                           placeholder="menu title" required>
                                                    <input type="text" class="form-control"
                                                           name="directory_link_accommodation"
                                                           value="<?= $data[0]->directory_link_accommodation; ?>"
                                                           value="Accomdation" placeholder="menu title" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for=""> Description title </label>
                                                <input type="text" class="form-control" name="description_title"
                                                       value="<?= $data[0]->description_title; ?>"
                                                       value="Accomdation and Tarrif" placeholder="description title"
                                                       required>
                                            </div>
                                            <div class="form-group">
                                                <label for=""> Title comment </label>
                                                <input type="text" class="form-control" name="title_comment"
                                                       value="<?= $data[0]->title_comment; ?>"
                                                       value="Pick a room that best suits hyour taste and budge "
                                                       placeholder="title comment" required>
                                            </div>
                                            <div class="form-group">
                                                <label for=""> Description </label>
                                                <!-- <textarea class="form-control" name="webdescription- value="<?= $data[0]->webdescription; ?>-about" placeholder="website description" rows="5" required> -->
                                                <textarea class="form-control full-editor" name="web_description"
                                                          value="<?= $data[0]->web_description; ?>"
                                                          placeholder="website description" rows="5"
                                                          required> <?= $data[0]->web_description; ?> </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for=""> Menu </label>
                                                <input type="text" class="form-control" name="accommodation_menu"
                                                       value="<?= $data[0]->accommodation_menu; ?>"
                                                       value="Accommodation" placeholder="Accommodation Menu" required>
                                            </div>
                                            <label for="">
                                                <h3> Contact Form - </h3>
                                            </label>
                                            <div class="form-group">
                                                <label for="">Form title</label>
                                                <input type="text" class="form-control" name="contact_form_title"
                                                       value="<?= $data[0]->contact_form_title; ?>"
                                                       value="Have any question" placeholder="contact form title"
                                                       required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Button</label>
                                                <input type="text" class="form-control" name="button_contact_form"
                                                       value="<?= $data[0]->button_contact_form; ?>"
                                                       value="Have any question"
                                                       placeholder="contact form submit button" required>
                                            </div>
                                            <input type="submit" class="btn btn-warning" value="Save Settings"/>
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
