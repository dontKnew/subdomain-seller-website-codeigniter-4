<?php $this->load->view('common/head');

?>

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

                                        <li class="active-page">Amenities</li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-5">

                        </div>

                    </div>

                </div>

                <?php

                 if($this->session->flashdata('msg')!=''){

                     echo '<div class="alert alert-success alert-dismissible">

                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                           <strong>'.$this->session->flashdata('msg').'</strong>

                         </div>';

                 }

                 if($this->session->flashdata('err')!=''){

                     echo '<div class="alert alert-danger alert-dismissible">

                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                           <strong>'.$this->session->flashdata('err').'</strong>

                         </div>';

                 }

                ?>

                <div class="row">

                    <div class="col-md-12 ">

                        <div class="box-widget widget-module">

                            <div class="widget-head clearfix">

                                <span class="h-icon"><i class="fa fa-bars"></i></span>
                                <h4>Amenities Customize</h4>
                            </div>

                            <div class="widget-container">

                                <div class=" widget-block">


                                    <div>

                                        <form action="<?php echo base_url("admin/amenities/customize");?>" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="domain" value="<?php echo strtolower($this->session->sessionDomain)?>">
                                            <label for="">
                                                <h3> Header - </h3>
                                            </label>
                                            <div class="form-group">
                                                <label for="">Webpage title</label>
                                                <input type="text" class="form-control" name="webpage_title" value="<?= $data[0]->webpage_title;?>"  value="Resorts-amenities" placeholder="webpage title" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Amenities Photo</label>
                                                <input type="file" name="amenties_photo" class="form-control">
                                                <img src="<?= base_url()."uploads/amenities/". $data[0]->amenties_photo; ?>"  width="150" height="100" alt="amenities photo">
                                            </div>
                                            <div class="form-group">
                                                <label for=""> Photo Text </label>
                                                <input type="text" name="photo_text" value="<?= $data[0]->photo_text;?>"  class="form-control" value="amenities" placeholder="title of amenities" required>
                                            </div>
                                            <div class="form-inline">
                                                <div class="form-group">
                                                    <label for=""> Directory Link </label>
                                                    <input type="text" name="directory_link_home" value="<?= $data[0]->directory_link_home;?>"  class="form-control" value="Home" placeholder="menu title" required>
                                                    <input type="text" name="directory_link_amenities" value="<?= $data[0]->directory_link_amenities;?>"  class="form-control" value="amenities" placeholder="menu title" required>
                                                </div>
                                            </div>
                                            <label for="">
                                                <h3> Center - </h3>
                                            </label>
                                            <div class="form-group">
                                                <label for="">Description title </label>
                                                <input type="text" class="form-control" name="web_description_title" value="<?= $data[0]->web_description_title;?>"  value="Special amenitiess" placeholder="web description title" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Description title comment </label>
                                                <input type="text" class="form-control" name="web_description_title_comment" value="<?= $data[0]->web_description_title_comment;?>"  value="my something amenities benefit" placeholder="web description title comment" required>
                                            </div>
                                            <div class="form-group">
                                                <label for=""> Website description </label>
                                                <textarea class="form-control full-editor" name="web_description_amenities"  placeholder="amenities description" rows="5" required> <?= $data[0]->web_description_amenities?>  </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Sidebar Photo</label>
                                                <input type="file" name="sidebar_photo" class="form-control">
                                                <img src="<?= base_url()."uploads/amenities/". $data[0]->sidebar_photo; ?>"  width="150" height="auto" alt="amenities photo">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Sidebar Photo</label>
                                                <input type="file" name="sidebar_1photo" class="form-control">
                                                <img src="<?= base_url()."uploads/amenities/". $data[0]->sidebar_1photo; ?>"  width="150" height="auto" alt="amenities photo">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Sidebar Photo</label>
                                                <input type="file" name="sidebar_2photo" class="form-control">
                                                <img src="<?= base_url()."uploads/amenities/". $data[0]->sidebar_2photo; ?>"  width="150" height="auto" alt="amenities photo">
                                            </div>
                                            <input type="submit" class="btn btn-info" value="Save Settings"/>

                                        </form>

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
