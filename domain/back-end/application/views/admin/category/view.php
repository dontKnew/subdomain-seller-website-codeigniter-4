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
                                        <li class="active-page"> certificates</li>
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
                                <h4>certificates</h4>
                            </div>
                            <div class="widget-container">
                                <div class=" widget-block">
                                     <table class="table table-bordered">
                                        <tbody>
                                            

                                            

                                            <tr>
                                                <td>Title</td>
                                                <td><?= $certificates['title']?></td>
                                            </tr>

                                            <tr>
                                                <td>URL</td>
                                                <td><?= $certificates['url']?></td>
                                            </tr>

                                          
                                            <tr>
                                                <td>Meta Title</td>
                                                <td><?= $certificates['meta_title']?></td>
                                            </tr>

                                            <tr>
                                                <td>Meta Keyword</td>
                                                <td><?= $certificates['meta_keyword']?></td>
                                            </tr>

                                            <tr>
                                                <td>Meta Description</td>
                                                <td><?= $certificates['meta_description']?></td>
                                            </tr>

                                             <tr>
                                                <td>Date</td>
                                                <td><?= $certificates['date']?></td>
                                            </tr>


                                            

                                            
                                             <tr>
                                                <td>Status</td>
                                                <td><?= $certificates['status']?></td>
                                            </tr>

                                             <tr>
                                                <td>Image</td>
                                                <td><img src="<?= base_url('uploads/certificates/'.$certificates['image'])?>" height="100" width="100"></td>
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

    