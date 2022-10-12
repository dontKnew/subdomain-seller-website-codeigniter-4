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

                                        <li><a href="#">Home</a>

                                        </li>

                                        <li class="active-page"> Edit company</li>

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

                                <h4>Edit company</h4>

                            </div>

                            <div class="widget-container">

                                <div class=" widget-block">

                                    <form action="<?= base_url('admin/company/edit/'.$company['id'])?>" method="post" enctype="multipart/form-data">

                                         <legend>Add company</legend>

                                   

                                  

                                     <div class="form-group">

                                        <label>Company Name</label>

                                         <input type="text" name="name" value="<?= $company['name']?>" class="form-control"  required="">

                                     </div>

                                       <div class="form-group">

                                        <label>Company Domain(Without www and http eg. xyz.domain.com)</label>

                                         <input type="text" name="domain" value="<?= $company['domain'];?>" class="form-control"  required="">

                                     </div>

                                      


                                      <div class="form-group">

                                        <label>Email </label>

                                         <input type="email" name="email" value="<?= $company['email'];?>" class="form-control"  required="">

                                     </div>


                                      <div class="form-group">

                                        <label>Company Mobile</label>

                                         <input type="text" name="mobile" value="<?= $company['mobile'];?>" class="form-control"  required="">

                                     </div>



                                      <div class="form-group">

                                        <label>Company Whatsapp</label>

                                         <input type="text" name="whatsapp" value="<?= $company['whatsapp'];?>" class="form-control"  required="">

                                     </div>


                                     <div class="form-group">

                                        <label>Company Address</label>

                                         <input type="text" name="address" value="<?= $company['address'];?>" class="form-control"  required="">

                                     </div>
                                  

                                   <div class="form-group">

                                        <label>Company Maps (Google Embedd code paste here)</label>

                                         <textarea name="maps" value="<?= $company['maps']?>" class="form-control"  required=""></textarea>

                                     </div>


                                    <div class="form-group">

                                        <label>Company Logo</label>

                                         <input type="file" name="image" value="<?= $company['image'];?>" class="form-control"  >

                                     </div>


                                     <div class="form-group">

                                        <label>Company Favicon</label>

                                         <input type="file" name="favicon" value="<?= $company['favicon'];?>" class="form-control"  >

                                     </div>


                                       <div class="form-group">

                                        <label>Youtube Video ID</label>

                                         <input type="text" name="video_id" value="<?= $company['video_id']?>" class="form-control"  required="">

                                     </div>



                                     <div class="form-group">

                                        <label>Home Page Desc 1</label>

                                         <textarea name="desc1" class="form-control full-editor"  required=""><?= $company['desc1']?></textarea>

                                     </div>


                                     <div class="form-group">

                                        <label>Home Page Desc 2</label>

                                         <textarea name="desc2" class="form-control full-editor"  required=""><?= $company['desc2']?></textarea>

                                     </div>
                                  
                                  

                                     <div class="form-group">

                                        <label> Status</label>

                                         <select class="form-control" name="status">

                                             <option <?php if($company['status']=='Active'){ echo 'selected'; }?>>Active</option>

                                             <option <?php if($company['status']=='Inactive'){ echo 'selected'; }?>>Inactive</option>

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