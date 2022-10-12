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
                            <h4>Accommodation</h4>
                        </div>
                        <div class="widget-container">
                            <div class=" widget-block">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>Room Id</td>
                                        <td><?= $accommodation['id']?></td>
                                    </tr>
                                    <tr>
                                        <td>Room Type</td>
                                        <td><?= $accommodation['name']?></td>
                                    </tr>
                                    <tr>
                                        <td>Image</td>
                                        <td>
                                            <img src="<?= base_url("uploads/acomodation/").$accommodation['image']; ?>"  alt="<?= $accommodation['name']?>" class="img-rounded " width="150"  height="100">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Room page title </td>
                                        <td><?= $accommodation['room_webpage_title']?></td>
                                    </tr>

                                    <tr>
                                        <td>Room Header title </td>
                                        <td><?= $accommodation['room_header_title']?></td>
                                    </tr>
                                    <tr>
                                        <td>Directory Link </td>
                                        <td><?= $accommodation['room_directory_link_hom']?></td>
                                    </tr>
                                    <tr>
                                        <td>Directory Link </td>
                                        <td><?= $accommodation['directory_link_single_room']?></td>
                                    </tr>
                                    <tr>
                                        <td>Room title </td>
                                        <td><?= $accommodation['room_title']?></td>
                                    </tr>
                                    <tr>
                                        <td>Room Web Description </td>
                                        <td><?= $accommodation['room_web_description']?></td>
                                    </tr>
                                    <tr>
                                        <td>Room service web description </td>
                                        <td><?= $accommodation['room_service_web_description']?></td>
                                    </tr>
                                    <tr>
                                        <td>Book Button </td>
                                        <td><?= $accommodation['button_book_now']?></td>
                                    </tr>
                                    <tr>
                                        <td>Availability Button </td>
                                        <td><?= $accommodation['button_check_availability']?></td>
                                    </tr>

                                    <tr>
                                        <td>Availability title </td>
                                        <td><?= $accommodation['starting_from_text']?></td>
                                    </tr>
                                    <tr>
                                        <td>Starting Price </td>
                                        <td><?= $accommodation['starting_price']?></td>
                                    </tr>
                                    <tr>
                                        <td>Availability Shift </td>
                                        <td><?= $accommodation['shift_search']?></td>
                                    </tr>

                                    <tr>
                                        <td>Old Daily Amount </td>
                                        <td><?= $accommodation['old_daily_amount']?></td>
                                    </tr>
                                    <tr>
                                        <td>Daily Amount </td>
                                        <td><?= $accommodation['daily_amount']?></td>
                                    </tr>
                                    <tr>
                                        <td>Old Weekly Amount </td>
                                        <td><?= $accommodation['old_weekly_amount']?></td>
                                    </tr>
                                    <tr>
                                        <td>Weekly Amount </td>
                                        <td><?= $accommodation['weekly_amount']?></td>
                                    </tr>
                                    <tr>
                                        <td>Old Monthly Amount </td>
                                        <td><?= $accommodation['old_monthly_amount']?></td>
                                    </tr>
                                    <tr>
                                        <td>Monthly Amount </td>
                                        <td><?= $accommodation['monthly_amount']?></td>
                                    </tr>

                                    <tr>
                                        <td>Shift</td>
                                        <td><?= $accommodation['shift']?></td>
                                    </tr>

                                    <tr>
                                        <td>Description</td>
                                        <td><?= $accommodation['description']?></td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td><?= $accommodation['status']?></td>
                                    </tr>
                                    <tr>
                                        <td>Created at</td>
                                        <td><?= $accommodation['created_at']?></td>
                                    </tr>
                                    <tr>
                                        <td>Updated at</td>
                                        <td><?= $accommodation['updated_at']?></td>
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
