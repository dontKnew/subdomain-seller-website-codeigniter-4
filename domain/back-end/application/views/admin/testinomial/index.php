<?php $this->load->view('common/head');
?>

<body>

    <div class="page-container list-menu-view">

        <!--Leftbar Start Here -->

        <?php $this->load->view('common/sidebar'); ?>
        <div class="page-content">

            <!--Topbar Start Here -->

            <?php $this->load->view('common/header'); ?>

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

                                            <li class="active-page"> Testinomial </li>

                                        </ul>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-5">

                            </div>

                        </div>

                    </div>

                    <?php

                    if ($this->session->flashdata('msg') != '') {

                        echo '<div class="alert alert-success alert-dismissible">

                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                              <strong>' . $this->session->flashdata('msg') . '</strong>

                            </div>';
                    }
                    unset($_SESSION['msg']);

                    if ($this->session->flashdata('err') != '') {

                        echo '<div class="alert alert-danger alert-dismissible">

                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                              <strong>' . $this->session->flashdata('err') . '</strong>

                            </div>';
                    }
                    unset($_SESSION['err']);

                    ?>

                    <div class="row">

                        <div class="col-md-12 ">

                            <div class="box-widget widget-module">

                                <div class="widget-head clearfix">

                                    <span class="h-icon"><i class="fa fa-bars"></i></span>

                                    <h4>All Testinomials</h4>

                                </div>

                                <div class="widget-container">

                                    <div class=" widget-block">

                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Photo</th>
                                                    <th>Comment Title </th>
                                                    <th>Comment</th>
                                                    <th>posted at</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($testinomial as $profile) { ?>
                                                <tr>
                                                    <td><?= $profile['id']; ?></td>
                                                    <td><?= $profile['name']; ?></td>
                                                    <td class="text-center">
                                                        <img src="<?= base_url()."uploads/testinomial/profile/".$profile['profile']; ?>" class="img-circle" alt="<?= $profile['name']; ?>" srcset="" height="100" width="100">
                                                    </td>
                                                    <td><?= $profile['comment_title']; ?></td>
                                                    <td ><?= $profile['comments']; ?></td>
                                                    <td class="posted-at"><?= $profile['created_at']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url("admin/testinomial/edit/").$profile['id'] ?>" class="btn btn-warning btn-sm m-1" style="margin:1px;">
                                                            Edit <span class="glyphicon glyphicon-edit"></span>
                                                        </a>
                                                        <a href="<?= base_url("admin/testinomial/delete/").$profile['id']?>" class="btn btn-danger btn-sm">
                                                            Delete <span class="glyphicon glyphicon-trash"></span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>

                                        <div class="dt-pagination">

                                            <?= $links; ?>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php $this->load->view('common/foot'); ?>

                </div>

            </div>



            <?php $this->load->view('common/footer'); ?>
