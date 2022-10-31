<?php $this->load->view('common/head');?>

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

                                <div class="page-breadcrumb-info"


                                <ul class="list-page-breadcrumb">

                                    <li><a href="#">Home</a>

                                    </li>

                                    <li class="active-page">Gallery-Customization</li>

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

                            <h4>Gallery Customize</h4>
                        </div>

                        <div class="widget-container">

                            <div class=" widget-block">

                                <!-- <h1 class="text-grey"><u> Web-Customization</u></h1> -->
                                <div>
                                    <form action="<?php echo base_url("admin/gallary/customize");?>" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="domain" value="<?php echo strtolower($this->session->sessionDomain);?>">
                                        <label for="">
                                            <h3> Header - </h3>
                                        </label>
                                        <div class="form-group">
                                            <label for="">Webpage title</label>
                                            <input type="text" class="form-control" value="<?= $data[0]->webpage_title; ?>" name="webpage_title" value="Resorts-Gallery" placeholder="webpage title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Menu Name</label>
                                            <input type="text" class="form-control" value="<?= $data[0]->gallery_menu; ?>" name="gallery_menu" value="Resorts-Gallery" placeholder="gallery menu" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Gallery Photo</label>
                                            <input type="file"  name="gallery_photo" class="form-control" placeholder="gallery photo">
                                            <img src="<?= base_url()."uploads/gallary/".$data[0]->gallery_photo; ?>" alt="gallery-photo" width="150" height="100">
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Photo Text </label>
                                            <input type="text" value="<?= $data[0]->photo_text; ?>" name="photo_text" class="form-control" value="gallery" placeholder="tile of gallery" required>
                                        </div>
                                        <div class="form-inline">
                                            <div class="form-group">
                                                <label for=""> Directory Link </label>
                                                <input type="text" value="<?= $data[0]->directory_link_home; ?>" name="directory_link_home" class="form-control" value="Home" placeholder="menu title" required>
                                                <input type="text" value="<?= $data[0]->directory_link_gallery; ?>" name="directory_link_gallery" class="form-control" value="Amentites" placeholder="menu title" required>
                                            </div>
                                        </div>
                                        <label for="">
                                            <h3> Center - </h3>
                                        </label>
                                        <div class="form-group">
                                            <label for="">description title </label>
                                            <input type="text" class="form-control" value="<?= $data[0]->web_description_title; ?>" name="web_description_title" value="PHOTO GALLARY" placeholder="web description title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">description title comment </label>
                                            <input type="text" class="form-control" value="<?= $data[0]->web_description_title_comment; ?>" name="web_description_title_comment" value="PHOTO GALLERY" placeholder="web description title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Website description </label>

                                            <textarea class="form-control" name="web_description_gallery" placeholder="gallery description" rows="5" required><?= $data[0]->web_description_gallery; ?></textarea>

                                        </div>
                                        <label for="">
                                            <h3>gallery Photo - </h3>
                                        </label>

                                        <div class="form-group">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr class="text-center">
                                                    <th>Id</th>
                                                    <th>Gallery Category</th>
                                                    <th>Photo Name</th>
                                                    <th>Photo</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td >2</td>
                                                    <td>Events</td>
                                                    <td>Company</td>
                                                    <th class="text-center">
                                                        <img src="http://localhost:5500/front-end/resort_/images/gallery/1.jpg" alt="bedgallery" srcset="" height="80" width="100">
                                                    </th>
                                                    <td>
                                                        <div class="btn btn-warning btn-sm open-gallery-preview" data-toggle="modal" data-target="#galleryPreivewModal"><span class="glyphicon glyphicon-plus"></span></div>
                                                        <div class="btn btn-danger btn-sm" data-gallery-preview-id="<?php echo 1; ?>" id="galleryPreviewDelete"><span class="glyphicon glyphicon-trash"></span></div>
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <label for=""><h3>Gallery Category</h3></label>
                                        <div class="form-group">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr class="text-center">
                                                    <th>Id</th>
                                                    <th>Category</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td >2</td>
                                                    <td>Events</td>
                                                    <td>
                                                        <div class="btn btn-warning btn-sm open-gallery-preview" data-toggle="modal" data-target="#galleryPreivewModal"><span class="glyphicon glyphicon-plus"></span></div>
                                                        <div class="btn btn-danger btn-sm" data-gallery-preview-id="<?php echo 1; ?>" id="galleryPreviewDelete"><span class="glyphicon glyphicon-trash"></span></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td >2</td>
                                                    <td>University</td>
                                                    <td>
                                                        <div class="btn btn-warning btn-sm open-gallery-preview" data-toggle="modal" data-target="#galleryPreivewModal"><span class="glyphicon glyphicon-plus"></span></div>
                                                        <div class="btn btn-danger btn-sm" data-gallery-preview-id="<?php echo 1; ?>" id="galleryPreviewDelete"><span class="glyphicon glyphicon-trash"></span></div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Content-Description </label>
                                            <textarea  name="content_description" placeholder=""  rows="5" class="form-control full-editor" required=""> <?= $data[0]->content_description; ?> </textarea>
                                        </div>
                                        <input type="submit"  value="Save Settings" class="btn btn-danger">
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

<!-- FACILITIES MODEL -->
<?php //$this->load->view('admin/include/add-photo'); ?>
<!-- END FACILITIES MODEL -->
<?php $this->load->view('common/footer') ?>