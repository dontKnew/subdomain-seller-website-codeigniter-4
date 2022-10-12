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
                                            <li class="active-page"> Change Pass</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-3">
                    <div class="box-widget widget-module" style="height: auto;">
                        <div class="widget-head clearfix">
                            <span class="h-icon"><i class="fa fa-th"></i></span>
                            <h4>Change Pass</h4>
                        </div>
                        <div class="widget-container">
                            <div class=" widget-block">
                                <form action="<?= base_url('save_password')?>" method="post">
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col-md-4">Password</div>
                                    <div class="col-md-8"><input type="password" name="password" placeholder="Password" class="form-control"></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col-md-4">Confirm Password</div>
                                    <div class="col-md-8"><input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control"></div>
                                </div>
                                <?php echo form_error('password'); ?>
                                <?php echo form_error('confirm_password'); ?>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8"><input type="submit" name="" value="Change Password" class="btn btn-primary"></div>
                                </div>
                            </form>
                                
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