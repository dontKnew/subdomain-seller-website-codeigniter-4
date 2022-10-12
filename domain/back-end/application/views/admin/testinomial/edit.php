<?php $this->load->view('common/head');
//print_r($data[0]->domain);
//exit;
?>


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

                                        <li><a href="#">Home</a>

                                        </li>

                                        <li class="active-page"> Edit testinomial</li>

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

                                <h4>Edit testinomial</h4>

                            </div>

                            <div class="widget-container">

                                <div class=" widget-block">

                                    <form action="<?= base_url('admin/testinomial/edit/').$data[0]->id ?>" method="post" enctype="multipart/form-data">
                                        <legend>Edit testinomial</legend>
                                        <input type="hidden" name="domain" value="<?= strtolower($this->session->sessionDomain);?>" required>
                                        <div class="form-group">
                                            <label> Name </label>
                                            <input type="text" name="name" value="<?= $data[0]->name; ?>"  class="form-control" placeholder="enter name" required="">
                                        </div>
                                        <div class="form-group">
                                            <label> Profile </label>
                                            <input type="file" name="profile" class="form-control">
                                            <img src="<?= base_url()."uploads/testinomial/profile/".$data[0]->profile ?>" alt="<?= $data[0]->name ?>" width="100" height="auto" class="img-rounded">
                                        </div>

                                        <div class="form-group">
                                            <label> Comment Title </label>
                                            <input type="text" name="comment_title" value="<?= $data[0]->comment_title; ?>" class="form-control" placeholder="title of comment" required="">
                                        </div>

                                        <div class="form-group">
                                            <label> Comment  </label>
                                            <input type="text" name="comments" value="<?= $data[0]->comments; ?>" class="form-control"  placeholder="enter comments" required="">
                                        </div>
                                        <div class="form-group">
                                            <label> Status</label>
                                            <select class="form-control" name="status">
                                                <option <?php if ($data[0]->status == 'Active') {
                                                    echo 'selected';
                                                } ?>>Active</option>
                                                <option <?php if ($data[0]->status == 'Inactive') {
                                                    echo 'selected';
                                                } ?>>Inactive</option>
                                            </select>
                                        </div>
                                        <input type="submit"  class="btn btn-success" value="Update Testinomial">
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
