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
                                        <li class="active-page"> company</li>
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
                                <h4>company</h4>
                            </div>
                            <div class="widget-container">
                                <div class=" widget-block">
                                     <table class="table table-bordered">
                                        <tbody>
                                            

                                            

                                            <tr>
                                                <td>Name</td>
                                                <td><?= $company['name']?></td>
                                            </tr>

                                            <tr>
                                                <td>Domain</td>
                                                <td><?= $company['domain']?></td>
                                            </tr>

                                           <tr>
                                                <td>Email</td>
                                                <td><?= $company['email']?></td>
                                            </tr>


                                             <tr>
                                                <td>Mobile</td>
                                                <td><?= $company['mobile']?></td>
                                            </tr>


                                             <tr>
                                                <td>Adress</td>
                                                <td><?= $company['address']?></td>
                                            </tr>
                                          
                                            
                                             <tr>
                                                <td>Status</td>
                                                <td><?= $company['status']?></td>
                                            </tr>

                                             <tr>
                                                <td>Image</td>
                                                <td><img src="<?= base_url('uploads/company/'.$company['image'])?>" height="100" width="100"></td>
                                            </tr>

                                             <tr>
                                                <td>Favicon</td>
                                                <td><img src="<?= base_url('uploads/company/'.$company['favicon'])?>" height="100" width="100"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                           <div class="dt-pagination">
										
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                  <?php $this->load->view('common/foot'); ?>
        </div>
    </div>

    <?php $this->load->view('common/footer')?>

    