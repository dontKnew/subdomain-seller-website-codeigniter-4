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
                    unset($_SESSION['msg']);

                }

                if($this->session->flashdata('err')!=''){

                    echo '<div class="alert alert-danger alert-dismissible">

                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                              <strong>'.$this->session->flashdata('err').'</strong> 

                            </div>';
                    unset($_SESSION['err']);
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

                                        <legend>Edit company</legend>





                                        <div class="form-group">

                                            <label>Company Name</label>

                                            <input type="text" name="name" value="<?= ucwords($company['name'])?>" class="form-control"  required="">

                                        </div>

                                        <?php
                                        function get_domain($host){
                                            $myhost = strtolower(trim($host));
                                            $count = substr_count($myhost, '.');
                                            if($count === 2){
                                                if(strlen(explode('.', $myhost)[1]) > 3) $myhost = explode('.', $myhost, 2)[1];
                                            } else if($count > 2){
                                                $myhost = get_domain(explode('.', $myhost, 2)[1]);
                                            }
                                            return $myhost;
                                        }
                                        ?>

                                        <div class="form-group">

                                            <label>Company Domain </label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon2">http://</span>
                                                <input type="text" aria-describedby="basic-addon2" name="domain" value="<?=   strstr($company['domain'], '.', true); ?>" class="form-control"  required="">
                                                <span class="input-group-addon" id="basic-addon2"><?= get_domain(DOMAIN) ?></span>
                                            </div>
                                            <small>Example : https://www.<span class="text-warning">companydomain</span>.<?= get_domain(DOMAIN) ?></small>
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

                                            <label>Company Address</label>

                                            <textarea  name="address" class="form-control full-editor"  required=>
                                             <?= $company['address'];?>
                                         </textarea>

                                        </div>


                                        <div class="form-group">

                                            <label>Company Logo</label>

                                            <input type="file" name="logo" class="form-control" >
                                            <img src="<?= base_url('uploads/company/'.$company['logo'])?>" alt="<?= $company['name'];?>" width="50" height="auto">
                                        </div>


                                        <div class="form-group">

                                            <label>Company Favicon</label>

                                            <input type="file" name="favicon"class="form-control"  >
                                            <img src="<?= base_url('uploads/company/'.$company['favicon'])?>" alt="<?= $company['name'];?>" width="50" height="auto">

                                        </div>

                                        <div class="form-group">

                                            <label>Youtube Embed Code</label>
                                            <input type="text" name="youtube_url" value="<?= $company['youtube_url'];?>" class="form-control" placeholder="rIO5hMLV5kk" required="">
                                            <small>Hint : https://www.youtube.com/watch?v=<span class="text-success"> <strong>rIO5hMLV5kk</strong> </span></small>

                                        </div>
                                        <div class="form-group">
                                            <label>Map Embed Code </label>
                                            <input type="text" name="google_map_link" value="<?= $company['google_map_link']?>" class="form-control" placeholder='1m12!1m8!1m3!1d5849.938147096442!2d79.13286085002807!3d29.32944585469947!3m2!1i1024!2i768!4f13.1!2m1!1ssantoshpur%20choi%2c%20near%20hanuman%20dham%2c%2c%20ramnagar%2c%20uttarakhand%20244715%2c%20india!5e0!3m2!1sen!2sus!4v1616481129523!5m2!1sen!2sus' required="">
                                            <small>Hint 1 : How to get embed code ? <span class="text-danger"> <strong>click here</strong> </span></small><br>
                                            <small>Hint 2 : copy the code after ... pb ->  <span class="text-primary"> <strong>https://www.google.com/maps/embed?pb=</strong> </span></small>
                                        </div>


                                        <div class="form-group">

                                            <label> Status</label>

                                            <select class="form-control" name="status">

                                                <option <?php if(ucwords($company['status'])=='Active'){ echo 'selected'; }?>>Active</option>

                                                <option <?php if(ucwords($company['status'])=='Inactive'){ echo 'selected'; }?>>Inactive</option>

                                            </select>

                                        </div>

                                        <input type="submit" name="" class="btn btn-warning" value="Update">

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
