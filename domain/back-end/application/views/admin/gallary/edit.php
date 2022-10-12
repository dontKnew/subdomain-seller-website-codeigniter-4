<?php $this->load->view('common/head')?>

<link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.css" rel="stylesheet">

<body>

<div class="page-container list-menu-view">

<!--Leftbar Start Here -->

<?php $this->load->view('common/sidebar')?>



    <div class="page-content">

    <!--Topbar Start Here -->

    <?php $this->load->view('common/header') ?>

        <div class="main-container">

            <div class="container-fluid">

                <div class="page-breadcrumb">

                    <div class="row">

                        <?php if(validation_errors()!=''){?>

                    <div class="alert alert-danger alert-dismissible">

                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                        <?php echo validation_errors(); ?>

                    </div>

                        <?php }?>

                        <div class="col-md-7">

                            <div class="page-breadcrumb-wrap">

                                <div class="page-breadcrumb-info">



                                    <ul class="list-page-breadcrumb">

                                        <li><a href="<?= base_url("admin/gallary") ?>">Home</a>

                                        </li>

                                        <li class="active-page"> Edit Gallery</li>

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
                    unset($_SESSION['msg']);

                    if($this->session->flashdata('err')!=''){

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

                                <h4>Edit Gallery</h4>

                            </div>

                            <div class="widget-container">

                                <div class=" widget-block">

                                    <form action="<?= base_url('admin/gallary/edit/'.$gallary['id'])?>" method="post" enctype="multipart/form-data">


                                        <div class="form-group">
                                            <label> Domain </label>
                                            <input type="text" class="form-control" value="<?= strtolower($this->session->sessionDomain) ?>" name="domain" required readonly />
                                        </div>

                                       <div class="form-group">

                                        <label>Name</label>

                                         <input type="text" name="name" value="<?= $gallary['name']?>" class="form-control"  required>

                                     </div>


                                     <div class="form-group">

                                        <label>Image</label>
                                         <input type="file" name="image"  class="form-control"  >
                                         <img src="<?= base_url("uploads/gallary/").$gallary['image']?>" alt="<?= $gallary['name']?>" width="200" height="auto" class="img-rounded">
                                     </div>

                                     <div class="form-group">

                                        <label> Status</label>

                                         <select class="form-control" name="status">

                                             <option <?php if($gallary['status']=='Active'){ echo 'selected'; }?>>Active</option>

                                             <option <?php if($gallary['status']=='Inactive'){ echo 'selected'; }?>>Inactive</option>

                                         </select>

                                     </div>

                                     <input type="submit" name="" class="btn btn-primary" value="Submit">

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                    </div>

                  <?php $this->load->view('common/foot'); ?>

        </div>

    </div>



    <?php $this->load->view('common/footer')?>



<script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.js"></script>
