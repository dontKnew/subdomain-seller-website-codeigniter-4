<?php $this->load->view('common_front/header'); ?>
<section class="row final-inner-header" style="
                display: table;
                height: 245px;
                background: url('<?= base_url()."uploads/acomodation/".$single_room[0]['image'] ?>');
                width: 100%;
                margin: 0;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
">
    <div class="container">
        <h2 class="this-title"> <?= $single_room[0]['name'] ?> </h2>
    </div>
</section>
<section class="row final-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>"> <?= $single_room[0]['room_directory_link_home'] ?></a></li>
            <li class="active"><?= $single_room[0]['directory_link_single_room'] ?></li>
        </ol>
    </div>
</section>
<!--end header image and photo title -->

<!-- News style-->
<section class="container clearfix common-pad-inner">
    <div class="row">
        <div class="col-md-4 col-md-push-8">
            <div class="single-sidebar-widget sroom-sidebar">
                <!-- Booking Form style-->
                <div class="book-r-form">
                    <div class="room-price">
                        <h6><?= $single_room[0]['starting_from_text'] ?></h6>
                        <p>$ <?= $single_room[0]['starting_price'] ?><span>/ <?= $single_room[0]['shift_search'] ?></span></p>
                    </div>
                    <div class="book-form">
                        <div class="col-md-12"><b>Arrive</b>
                            <input placeholder="Arival Date" type="text" class="form-control datepicker-example8">
                        </div>
                        <div class="col-md-12"><b>Departure</b>
                            <input type="text" placeholder="Departure Date" class="form-control datepicker-example8">
                        </div>
                        <div class="col-md-12"><b>Adults</b>
                            <div class="select-box">
                                <select name="selectMenu" class="select-menu">
                                    <option value="default">Adults</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12"><b>children</b>
                            <div class="select-box">
                                <select name="selectMenu" class="select-menu">
                                    <option value="default">Children</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="chk-button">
                                <button type="submit" class="res-btn"><?= $single_room[0]['button_check_availability'] ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Booking Form style-->
                <!-- Budget Rooms style-->
<!--                <div class="single-sidebar-widget-outer">-->
<!--                    <div class="sec-title">-->
<!--                        <h2>Budget Rooms</h2>-->
<!--                    </div>-->
<!--                    <div class="popular-post">-->
<!--                        <ul>-->
<!--                            <li class="img-cap-effect">-->
<!--                                <div class="img-box"><a href="news-details.html"><img src="images/rooms/4.jpg" alt=""></a></div>-->
<!--                                <div class="content"><a href="#">-->
<!--                                        <h4>Economy room</h4></a>-->
<!--                                    <h6>$199 <span>Per Night</span></h6>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li class="img-cap-effect">-->
<!--                                <div class="img-box"><a href="news-details.html"><img src="images/rooms/5.jpg" alt=""></a></div>-->
<!--                                <div class="content"><a href="#">-->
<!--                                        <h4>Garden family room</h4></a>-->
<!--                                    <h6>$79 <span>Per Night</span></h6>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li class="img-cap-effect">-->
<!--                                <div class="img-box"><a href="news-details.html"><img src="images/rooms/6.jpg" alt=""></a></div>-->
<!--                                <div class="content"><a href="#">-->
<!--                                        <h4>double Deluxe room</h4></a>-->
<!--                                    <h6>$235 <span>Per Night</span></h6>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li class="img-cap-effect">-->
<!--                                <div class="img-box"><a href="news-details.html"><img src="images/rooms/7.jpg" alt=""></a></div>-->
<!--                                <div class="content"><a href="#">-->
<!--                                        <h4>super Deluxe room</h4></a>-->
<!--                                    <h6>$185 <span>Per Night</span></h6>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
                <!-- Budget Rooms style-->
            </div>
        </div>
        <div class="col-md-8 col-md-pull-4">
            <div class="single-room-wrapper">
                <!-- Rooms Slider style-->
                <div class="room-slider-wrapper">
                    <div class="single-r-wrapper">
                        <div class="single-sl-room">
                            <?php $i = 0; foreach($room_slider_photo as $rslider){?>
                                <div data-hash="<?= $i ?>" class="owl-itemm">
                                    <img src="<?= base_url()."uploads/acomodation/room/".$rslider['preview_photo']?>" alt="<?= $rslider['portion_name'] ?>">
                                </div>
                            <?php $i+=$i++;} ?>
                        </div>
                        <?php for ($x = 0; $x < 5; $x++) { ?>
                            <a href="#<?= $x ?>" class="button secondary url">
                                <img src="<?= base_url()."uploads/acomodation/room/".$room_slider_photo[$x]['preview_photo']?>" alt="<?= $room_slider_photo[$x]['portion_name'] ?>" height="100px">
                            </a>
                        <?php } ?>
                    </div>
                </div>
                <!-- Rooms Slider style-->

                <!-- Description of Room style-->
                <div class="room-dec-wrapper">
                    <h2><?= $single_room[0]['room_title'] ?></h2>
                    <p><?= $single_room[0]['room_web_description'] ?></p>
                </div>
                <!-- Description of Room style-->
                <!-- Room Facilities style-->
                <div class="room-fac-wrapper">
                    <h2>Room Facilities</h2>
                    <div class="row">
                        <div class="ro-facilitie">
                            <ul class="clearfix">
                                <?php foreach($room_facility as $facility){?>
                                <li style="margin-bottom:5px">
                                    <div class="facilitie-i-box">
                                        <h3><?= $facility['facility_name'] ?> </h3><span><img src="<?= base_url()."public/frontend/images/rooms/icon4.gif" ?>" alt="<?= $facility['facility_name'] ?>"></span>
                                    </div>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Room Facilities style-->
                <!-- Room Overview style-->
                <div class="room-overview">
                    <h2>Room Overview</h2>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-7">
                            </colgroup>
                            <tbody>

                            <?php  foreach($room_overview as $overview){?>
                            <tr>
                                <th scope="row"><code><?= strtoupper($overview['service_name'])?>:</code></th>
                                <td><?= ucwords($overview['service_information'])?></td>
                            </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <h5><?= $single_room[0]['room_service_web_description'] ?></h5><a href="<?= base_url()."/".$single_room[0]['id'] ?>" class="res-btn"><?= $single_room[0]['button_book_now'] ?> <i class="fa fa-arrow-right"></i></a>
                </div>
                <!-- Room Overview style-->
                <!-- Have any question style-->
                <form id="contactForm" action="http://designarc.biz/demos/lakecious/sendemail.php" method="post">
                    <div class="question-wrapper">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2><?= $caccommodation[0]['contact_form_title'] ?></h2>
                        </div>
                        <div class="col-lg-4">
                            <input id="name" type="text" name="name" placeholder="Name" class="form-control">
                        </div>
                        <div class="col-lg-4">
                            <input id="phone" type="text" name="phone" placeholder="Phone" class="form-control">
                        </div>
                        <div class="col-lg-4">
                            <input id="email" type="text" name="name" placeholder="Email" class="form-control">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <textarea id="message" rows="6" name="message" placeholder="Message" class="form-control"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="res-btn"><?= $caccommodation[0]['button_contact_form'] ?> <i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
                <!-- Have any question style-->
            </div>
        </div>
    </div>
</section>
<!-- News style-->

<?php $this->load->view('common_front/footer'); ?>
