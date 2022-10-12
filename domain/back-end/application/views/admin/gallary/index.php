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

                                        <li class="active-page"> Gallery</li>

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

                                <h4>All Gallery </h4>

                            </div>

                            <div class="widget-container">

                                <div class=" widget-block">

                                     <table class="table table-bordered">

                                                <thead>

                                                    <tr>
                                                        <!-- <th>Domain</th> -->
                                                        <th>Name</th>

                                                        <th>Image</th>

                                                        <th>Gallery Type</th>



                                                        <th>Status</th>



                                                        <th>Action</th>

                                                    </tr>

                                                </thead>



                                                <tbody>

                                                    <?php foreach($gallary as $c){



                                                        ?>

                                                    <tr>

                                                         <!-- <td><?= $c['domain']?></td> -->

                                                          <td><?= $c['name']?></td>

                                                        <td>

                                                            <img src="<?= base_url('uploads/gallary/'.$c['image'])?>" height="auto" width="150" class="img-rounded" alt="<?= $c['name'] ?>">

                                                        </td>

                                                        <td><?= $c['gallery_type']?></td>


                                                        <td><?= $c['status']?></td>

                                                        <td>

                                                            <a href="<?= base_url('admin/gallary/edit/'.$c['id'])?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>



                                                            <a onclick="return confirm('Are You Sure Want to delete')" href="<?= base_url('admin/gallary/delete/'.$c['id'])?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>

                                                        </td>

                                                    </tr>

                                                    <?php }?>



                                                </tbody>

                                            </table>

                                           <div class="dt-pagination">

										<?= $links?>

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
