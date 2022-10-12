<?php $this->load->view('common/head')?>
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
                            <div class="col-md-7">
                                <div class="page-breadcrumb-wrap">
                                    <div class="page-breadcrumb-info">

                                        <ul class="list-page-breadcrumb">
                                            <li><a href="#">Home</a>
                                            </li>
                                            <li class="active-page"> Profile</li>
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

                    <div class="col-md-6 col-md-offset-3">
                    <div class="box-widget widget-module" style="height: auto;">
                        <div class="widget-head clearfix">
                            <span class="h-icon"><i class="fa fa-th"></i></span>
                            <h4>Profile</h4>
                        </div>
                        <div class="widget-container">
                            <div class=" widget-block">

                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col-md-4">Name</div>
                                    <div class="col-md-4"><?= $admin['name']?></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col-md-4">Email</div>
                                    <div class="col-md-4"><?= $admin['email']?></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col-md-4">Address</div>
                                    <div class="col-md-4"><?= $admin['address']?></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col-md-4">Phone</div>
                                    <div class="col-md-4"><?= $admin['phone']?></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4"><a href="<?= base_url('change_pass')?>">Change Password</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!--Footer Start Here -->
             <?php $this->load->view('common/foot'); ?>
        </div>
    </div>

<?php $this->load->view('common/footer')?>
