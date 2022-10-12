<?php $this->load->view('common/head');
//print_r($accommodation);
//exit;
?>

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

                        <?php if (validation_errors() != '') { ?>

                            <div class="alert alert-danger alert-dismissible">

                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                                <?php echo validation_errors(); ?>

                            </div>

                        <?php } ?>

                        <div class="col-md-7">

                            <div class="page-breadcrumb-wrap">

                                <div class="page-breadcrumb-info">


                                    <ul class="list-page-breadcrumb">

                                        <li><a href="<?= base_url("admin/accommodation") ?>">Home</a>

                                        </li>

                                        <li class="active-page"> Accommodation</li>

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

                }
                unset($_SESSION['err']);
                ?>

                <div class="row">

                    <div class="col-md-12 ">

                        <div class="box-widget widget-module">

                            <div class="widget-head clearfix">

                                <span class="h-icon"><i class="fa fa-bars"></i></span>

                                <h4>Edit Accommodation</h4>

                            </div>

                            <div class="widget-container">

                                <div class=" widget-block">

                                    <form action="<?= base_url('admin/accommodation/edit/'.$accommodation['id']) ?>"
                                          method="post" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label> Domain</label>
                                            <input type="text" class="form-control" name="domain"  value="<?= strtolower($this->session->sessionDomain) ?>" readonly required>
                                        </div>
                                        <div class="form-group">

                                            <label>Room type</label>

                                            <input type="text" name="name" value="<?= $accommodation['name'] ?>"
                                                   class="form-control">

                                        </div>

                                        <div class="form-group">

                                            <label>Image</label>

                                            <input type="file" name="image" class="form-control">
                                            <img src="<?= base_url("uploads/acomodation/").$accommodation['image'] ?>"
                                                 alt="<?= $accommodation['name'] ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Webpage title </label>
                                            <input type="text" class="form-control" name="room_webpage_title"
                                                   value="<?= $accommodation['room_webpage_title']; ?>"
                                                   value="Resort | Accomdation" placeholder="webpage title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">header title </label>
                                            <input type="text" class="form-control" name="room_header_title"
                                                   value="<?= $accommodation['room_header_title']; ?>" value="Single Room"
                                                   placeholder="header title" required>
                                        </div>
                                        <div class="form-inline" style="margin-bottom:16px;">
                                            <div class="form-group">
                                                <label for=""> Directory Link </label>
                                                <input type="text" class="form-control" name="room_directory_link_home"
                                                       value="<?= $accommodation['room_directory_link_home']; ?>" value="Home"
                                                       placeholder="menu title" required>
                                                <input type="text" class="form-control" name="directory_accommodation"
                                                       value="<?= $accommodation['directory_link_accommodation']; ?>"
                                                        placeholder="directory name" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Description Room title</label>
                                            <input type="text" class="form-control" name="room_title"
                                                   value="<?= $accommodation['room_title']; ?>" value="Descripiton of Room"
                                                   placeholder="room title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Descripiton Room </label>
                                            <textarea class="form-control full-editor" name="room_web_description"
                                                      placeholder="website description" rows="5" required>
                                              <?= $accommodation['room_web_description']; ?>
                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for=""> Room Service Descripiton </label>
                                            <textarea class="form-control full-editor" name="room_service_web_description"
                                                      placeholder="website description" rows="5" required>
                                                      <?= $accommodation['room_service_web_description']; ?>
                                                  </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Button</label>
                                            <input type="text" class="form-control" name="button_book_now"
                                                   value="<?= $accommodation['button_book_now']; ?>"
                                                   placeholder="book now button" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Button</label>
                                    <input type="text" class="form-control" name="button_check_availability"
                                           value="<?= $accommodation['button_check_availability']; ?>"
                                           placeholder="Check availabiity button" required>
                                </div>
                                <div class="form-group">
                                    <label>Shift</label>
                                    <select name="shift" class="form-control">
                                        <option <?php if ($accommodation['shift'] == 'Day') {
                                            echo 'selected';
                                        } ?>>Day</option>

                                        <option <?php if ($accommodation['shift'] == 'Night') {
                                            echo 'selected';
                                        } ?>>Night</option>
                                    </select>
                                </div>
                                <label for="">Offer Price</label>
                                <div class="form-inline">
                                    <div class="form-group">
                                        <input type="number" placeholder="old_daily_amount" name="old_daily_amount"
                                               value="<?= $accommodation['old_daily_amount'] ?>" class="form-control">
                                        <input type="number" placeholder="old_weekly_amount" name="old_weekly_amount"
                                               value="<?= $accommodation['old_weekly_amount'] ?>" class="form-control">
                                        <input type="number" placeholder="old_monthly_amount" name="old_monthly_amount"
                                               value="<?= $accommodation['old_monthly_amount'] ?>" class="form-control">
                                        <br>
                                        <input type="number" placeholder="daily_amount" name="daily_amount"
                                               value="<?= $accommodation['daily_amount'] ?>" class="form-control">
                                        <input type="number" placeholder="weekly_amount" name="weekly_amount"
                                               value="<?= $accommodation['weekly_amount'] ?>" class="form-control">
                                        <input type="number" placeholder="monthly_amount" name="monthly_amount"
                                               value="<?= $accommodation['monthly_amount'] ?>" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Availability Title</label>
                                    <input type="text" name="starting_from_text"
                                           value="<?= $accommodation['starting_from_text'] ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Starting Price </label>
                                    <input type="text" placeholder="Room starting price " name="starting_price"
                                           value="<?= $accommodation['starting_price'] ?>" class="form-control">
                                </div>
                                <div class="form-group">

                                    <label>Availability Shift</label>
                                    <select class="form-control" name="shift_search">
                                        <option <?php if ($accommodation['shift_search'] == 'Night') {
                                            echo 'selected';
                                        } ?>>Night</option>

                                        <option <?php if ($accommodation['shift_search'] == 'Day') {
                                            echo 'selected';
                                        } ?>>Day</option>
                                    </select>

                                </div>

                                        <div class="form-group">

                                            <label> Status</label>

                                            <select class="form-control" name="status">

                                                <option <?php if ($accommodation['status'] == 'Active') {
                                                    echo 'selected';
                                                } ?>>Active
                                                </option>
                                                <option <?php if ($accommodation['status'] == 'Inactive') {
                                                    echo 'selected';
                                                } ?>>Inactive
                                                </option>
                                            </select>
                                        </div>
                                        <input type="submit" name="" class="btn btn-info" value="Update">
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
