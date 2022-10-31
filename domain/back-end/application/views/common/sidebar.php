<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

<div class="left-aside desktop-view left-and-top">

    <div class="branding">

        <a href="<?php echo site_url('admin/dashboard'); ?>" class="large-logo"><img src="<?= base_url('public/frontend/images/logo.jpg'); ?>" style="width:260px;height:auto;" alt="Resorts Admin">

        </a><span class="aside-pin waves-effect"><i class="fa fa-thumb-tack"></i></span>

        <span class="aside-close -effect"><i class="fa fa-times"></i></span>

    </div>
    <!-- <div class="row"> -->
    <!-- <div class="col-12 d-flex justify-content-start"> -->
    <div style="margin:2px;">
        <input type="text" class="form-control list text-center" value="" name="Orgcountry" id="country" style='min-width: 75% !important;' placeholder="<?php if ($this->session->has_userdata("sessionDomain")) {
                                                                                                                                                                echo $this->session->sessionDomain;
                                                                                                                                                            } else {
                                                                                                                                                                echo "Please Select Domain";
                                                                                                                                                            } ?>">
        <div id="countrylist" class="countrylist">
        </div>
    </div>
    <!-- </div> -->
    <!-- </div> -->

    <div class="left-navigation">

        <ul class="list-accordion">

            <li><a href="<?php echo site_url('admin/dashboard'); ?>" class="waves-effect"><span class="nav-icon"><i class="fa fa-align-justify"></i></span><span class="nav-label">Dashboard</span></a>
            </li>


            <li>
                <a href="#" class="waves-effect"><span class="nav-icon"><i class="fa fa-table"></i></span><span class="nav-label">Company</span></a>

                <ul>

                    <li><a href="<?= base_url('admin/company/add'); ?>">Add Company </a>
                    <li><a href="<?= base_url('admin/company'); ?>">View Company </a>
                    </li>

                </ul>

            </li>
            <?php if($this->session->has_userdata("sessionDomain")): ?>
                <li>
                    <a href="#" class="waves-effect"><span class="nav-icon"><i class="fa fa-table"></i></span><span class="nav-label">Home</span></a>
                    <ul>
                        <li><a href="<?= base_url('admin/slider/add'); ?>">Add Slider </a>
                        <li><a href="<?= base_url('admin/slider'); ?>">View Slider </a>
                        <li><a href="<?= base_url('admin/facility'); ?>">Footer Facility</a>
                        <li><a href="<?= base_url('admin/home/customize'); ?>">Customize Home </a>
                        </li>

                    </ul>

                </li>
                <li>
                    <a href="#" class="waves-effect"><span class="nav-icon"><i class="fa fa-table"></i></span><span class="nav-label">About</span></a>
                    <ul>
                        <li><a href="<?= base_url('about/point-word/add'); ?>">Add PointWord </a>
                        <li><a href="<?= base_url('about/point-word'); ?>">View PointWord </a>
                        <li><a href="<?= base_url('admin/about/customize'); ?>">Customize About </a>
                        </li>
                    </ul>

                </li>
                <li>
                    <a href="#" class="waves-effect"><span class="nav-icon"><i class="fa fa-table"></i></span><span class="nav-label">Accommodation</span></a>
                    <ul>
                        <li><a href="<?= base_url('admin/accommodation/add'); ?>">Add Accommodation </a>
                        <li><a href="<?= base_url('admin/accommodation'); ?>">View Accommodation </a>
                        <li><a href="<?= base_url('admin/accommodation/customize'); ?>">Customize Accommodation </a>
                        <li><a href="<?= base_url('admin/room-photo/'); ?>">Room Photo </a>
                        <li><a href="<?= base_url('admin/room-overview/'); ?>">Room Overview </a>
                        <li><a href="<?= base_url('admin/room-facility/'); ?>">Room Facility </a>
                        </li>
                    </ul>
                </li>
                <li>

                    <a href="#" class="waves-effect"><span class="nav-icon"><i class="fa fa-table"></i></span><span class="nav-label">Amenties</span></a>

                    <ul>

                        <li><a href="<?= base_url('admin/amenities/add'); ?>">Add Amenties </a>

                        <li><a href="<?= base_url('admin/amenities'); ?>">View Amenties </a>
                        <li><a href="<?= base_url('admin/amenities/customize'); ?>">Customize Amenties </a>

                        </li>

                    </ul>

                </li>
                <li>

                    <a href="#" class="waves-effect"><span class="nav-icon"><i class="fa fa-table"></i></span><span class="nav-label">Package</span></a>

                    <ul>

                        <li>
                            <a href="<?= base_url('admin/package'); ?>">View Package </a>
                            <a href="<?= base_url('admin/package/add'); ?>">Add Package </a>
                            <a href="<?= base_url('admin/inclusions'); ?>">Package Inclusions </a>
                        <li><a href="<?= base_url('admin/package/customize'); ?>">Customize Package </a>
                        </li>

                    </ul>

                </li>
                <li>
                    <a href="#" class="waves-effect"><span class="nav-icon"><i class="fa fa-table"></i></span><span class="nav-label">Gallary</span></a>

                    <ul>

                        <li><a href="<?= base_url('admin/gallary/add'); ?>">Add Gallery </a>

                        <li><a href="<?= base_url('admin/gallary'); ?>">View Gallery </a>
                        <li><a href="<?= base_url('admin/gallery-type'); ?>">Type Gallery </a>
                        <li><a href="<?= base_url('admin/gallary/customize'); ?>">Customize Gallery </a>

                        </li>

                    </ul>

                </li>
                <li>

                    <a href="#" class="waves-effect"><span class="nav-icon"><i class="fa fa-table"></i></span><span class="nav-label">Testinomial</span></a>

                    <ul>

                        <li><a href="<?= base_url('admin/testinomial/add'); ?>">Add Testinomial </a>

                        <li><a href="<?= base_url('admin/testinomial'); ?>">View Testinomial </a></li>
                        <li><a href="<?= base_url('admin/testinomial/customize'); ?>"> Customize Testinomial </a></li>
                    </ul>

                </li>

                <li>
                    <a href="" class="waves-effect"><span class="nav-icon"><i class="fa fa-table"></i></span><span class="nav-label">SEO Tool</span></a>
                <ul>
                    <li><a href="<?= base_url('admin/seotags'); ?>">SEO Tags</a>
                </ul>
                <ul>
                    <li><a href="<?= base_url('admin/seotags/add'); ?>"> Add SEO Tag</a>
                </ul>
            </li>

            <?php endif; ?>

            <li>
                <a href="<?= base_url('logout'); ?>" class="waves-effect"><span class="nav-icon"><i class="fa fa-sign-out"></i></span><span class="nav-label">Logout</span></a>
            </li>



        </ul>

    </div>

</div>
