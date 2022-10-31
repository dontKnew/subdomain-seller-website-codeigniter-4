<?php $this->load->view('common/head');
?>

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

                                        <li><a href="<?= base_url("admin/point-word")?>">Home</a>
                                        </li>
                                        <li class="active-page">About</li>

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
                                <h4>About Customization</h4>
                            </div>

                            <div class="widget-container">

                                <div class=" widget-block">

                                    <!-- <h1 class="text-grey"><u> Web-Customization</u></h1> -->
                                    <div>

                                        <form action="<?php echo base_url("admin/about/customize"); ?>"
                                              method="POST" enctype="multipart/form-data">

                                            <input type="hidden" name="domain"
                                                   value="<?php echo strtolower($this->session->sessionDomain); ?>" required>
                                            <label for="">
                                                <h3> Header - </h3>
                                            </label>
                                            <div class="form-group">
                                                <label for="">Webpage title</label>
                                                <input type="text" class="form-control" name="webpage_title" value="<?= $about[0]['webpage_title'] ?>" placeholder="webpage title" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">About Photo</label>
                                                <input type="file" name="about_photo" class="form-control"  placeholder="company photo" >
                                                <img src="<?= base_url()."uploads/about/".$about[0]['about_photo'] ?>" alt="<?= $about[0]['webpage_title'] ?>" width="200" height="auto">
                                            </div>
                                            <div class="form-group">
                                                <label for=""> Photo Text </label>
                                                <input type="text" name="photo_text" value="<?= $about[0]['photo_text'] ?>" class="form-control"  placeholder="about us" required>
                                            </div>
                                            <div class="form-inline">
                                                <div class="form-group">
                                                    <label for=""> Directory Link </label>
                                                    <input type="text" name="directory_link_home" value="<?= $about[0]['directory_link_home'] ?>" class="form-control"  placeholder="menu title" required>
                                                    <input type="text" name="directory_link_about" value="<?= $about[0]['directory_link_about'] ?>" class="form-control"  placeholder="menu title" required>
                                                </div>
                                            </div>
                                            <label for="">
                                                <h3> Center - </h3>
                                            </label>
                                            <div class="form-group">
                                                <label for="">Web Desc. Title  </label>
                                                <input type="text" class="form-control" name="web_desc_title" value="<?= $about[0]['web_desc_title'] ?>"  placeholder="welcome text" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Short description </label>
                                                <textarea class="form-control full-editor" name="short_description"  placeholder="website description" rows="3" required> <?= $about[0]['short_description'] ?>" </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Web description </label>
                                                <textarea class="form-control full-editor" name="web_description" placeholder="website description" rows="5" required><?= $about[0]['web_description'] ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for=""> Something Title  </label>
                                                <input type="text" class="form-control" name="something_title" value="<?= $about[0]['something_title'] ?>"  placeholder="something title" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Content Description </label>
                                                <textarea  placeholder="" name="content_description" class="form-control full-editor" required=""> <?= $about[0]['content_description'] ?> </textarea>
                                            </div>
                                            <button type="submit" class="btn btn-danger">Save Settings</button>
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
