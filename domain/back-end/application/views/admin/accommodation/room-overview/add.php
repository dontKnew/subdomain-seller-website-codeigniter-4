<?php $this->load->view('common/head') ?>

<link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.css" rel="stylesheet">

<body>

<div class="page-container list-menu-view">

    <!--Leftbar Start Here -->

    <?php $this->load->view('common/sidebar') ?>

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

                                        <li><a href="<?= base_url("admin/room-overview")?>">Home</a>

                                        </li>

                                        <li class="active-page">Room Overview </li>

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
                    unset($_SESSION['msg']);
                }

                if ($this->session->flashdata('err') != '') {

                    echo '<div class="alert alert-danger alert-dismissible">

                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                              <strong>' . $this->session->flashdata('err') . '</strong>

                            </div>';
                    unset($_SESSION['err']);
                }

                ?>

                <div class="row">

                    <div class="col-md-12 ">

                        <div class="box-widget widget-module">

                            <div class="widget-head clearfix">

                                <span class="h-icon"><i class="fa fa-bars"></i></span>

                                <h4>Add Room Services </h4>

                            </div>

                            <div class="widget-container">

                                <div class=" widget-block">

                                    <form action="<?= base_url("admin/room-overview/add") ?>" method="post">

                                        <legend>Add Room Service </legend>

                                        <div class="form-group">
                                            <label> Domain </label>
                                            <input type="text" class="form-control" value="<?= strtolower($this->session->sessionDomain) ?>" name="domain" required readonly />
                                        </div>
                                        <div class="form-group">
                                            <label>Service Name </label>
                                            <input type="text" name="service_name"  class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Service Information </label>
                                            <input type="text" name="service_information"  class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Select Accommodation </label>
                                            <a href="<?= base_url('admin/accommodation/add') ?>" class="btn btn-sm btn-primary text-center" style="margin:10px 0 10px 0"> Add Room <i class="fa fa-plus"></i></a>
                                            <select class="form-control" name="accommodation_id">
                                                <?php foreach($accommodation as $a){
                                                    echo '<option value="'.$a['id'].'">'.$a['name'].'</option>';
                                                } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label> Status</label>
                                            <select class="form-control" name="status">
                                                <option <?php if (ucwords(set_value('status')) == 'Active') {
                                                    echo 'selected';
                                                } ?>>Active</option>
                                                <option <?php if (ucwords(set_value('status')) == 'Inactive') {
                                                    echo 'selected';
                                                } ?>>Inactive</option>
                                            </select>
                                        </div>
                                        <input type="submit" name="" class="btn btn-warning" value="Submit">
                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <?php $this->load->view('common/foot'); ?>

            </div>

        </div>

        <?php $this->load->view('common/footer') ?>

        <script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.js"></script>
