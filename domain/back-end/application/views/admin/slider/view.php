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
                                        <li class="active-page"> blog</li>
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
                                <h4>blog</h4>
                            </div>
                            <div class="widget-container">
                                <div class=" widget-block">
                                     <table class="table table-bordered">
                                        <tbody>
                                            

                                             <tr>
                                                <td>Category</td>
                                                <td><?= $this->db->where('id',$blog['id'])->get('blogcategory')->row_array()['name']?></td>
                                            </tr>


                                            <tr>
                                                <td>Title</td>
                                                <td><?= $blog['title']?></td>
                                            </tr>

                                             <tr>
                                                <td>Date</td>
                                                <td><?= $blog['date']?></td>
                                            </tr>


                                            


                                             <tr>
                                                <td>Short Description</td>
                                                <td><?= $blog['short_description']?></td>
                                            </tr>

                                             <tr>
                                                <td>Description</td>
                                                <td><?= $blog['description']?></td>
                                            </tr>

                                             <tr>
                                                <td>Sort</td>
                                                <td><?= $blog['sort']?></td>
                                            </tr>
                                            
                                             <tr>
                                                <td>Status</td>
                                                <td><?= $blog['status']?></td>
                                            </tr>

                                             <tr>
                                                <td>Image</td>
                                                <td><img src="<?= base_url('uploads/blog/'.$blog['image'])?>" height="100" width="100"></td>
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

    