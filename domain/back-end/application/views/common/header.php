<header class="top-bar" style="background-color: #5b5a6b !important;"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <div class="container-fluid top-nav">
        <!--<div class="search-form search-bar">-->
        <!--    <form>-->
        <!--        <input name="searchbox" value="" placeholder="Search Topic..." class="search-input">-->
        <!--    </form>-->
        <!--    <span class="search-close waves-effect"><i class="ico-cross"></i></span>-->
        <!--</div>-->
        <div class="row">
            <div class="col-md-2 d-flex">
                <div class="clearfix top-bar-action">
                    <span class="leftbar-action-mobile waves-effect"><i class="fa fa-bars "></i></span>
                    <span class="leftbar-action desktop waves-effect"><i class="fa fa-bars "></i></span>
                    <!--<span class="waves-effect search-btn mobile-search-btn">-->
                    <!--<i class="fa fa-search"></i>-->
                    <!--</span>-->
                    <!--<span class="rightbar-action waves-effect"><i class="fa fa-bars"></i></span>-->
                    <!--<span class="waves-effect text-center"> <i class="fa fa-eye fa-2x text-light"></i>-->
                    </span>
                </div>
            </div>

            <div class="col-md-6 col-md-offset-4 responsive-fix">
                <div class="top-aside-right">
                    <div class="user-nav">
                        <ul>
                            <li class="dropdown">
                                <a data-toggle="dropdown" href="#" class="clearfix dropdown-toggle waves-effect waves-block waves-classic">
                                    <?php
                                    $x=$this->session->userdata('iletsadmin');
                                    $val=$this->db->where('email',$x['email'])->get('users')->result_array();

                                    ?>
                                    <span class="user-info"><?= $val[0]['name'] ?><cite><?= $val[0]['email']?></cite></span>
                                    <!-- <span class="user-thumb"><img src="images/avatar/jaman.jpg" alt="image"></span> -->
                                </a>
                                <ul role="menu" class="dropdown-menu fadeInUp">
                                    <li><a href="<?= base_url('admin/profile')?>"><span class="user-nav-icon"><i class="fa fa-briefcase"></i></span><span class="user-nav-label">My Account</span></a>
                                    </li>
                                    <!--  <li><a href="#"><span class="user-nav-icon"><i class="fa fa-user"></i></span><span class="user-nav-label">View Profile</span></a>
                                     </li>
                                     <li><a href="#"><span class="user-nav-icon"><i class="fa fa-cogs"></i></span><span class="user-nav-label">Settings</span></a> -->
                                    <!-- </li> -->
                                    <li><a href="<?= base_url('logout')?>"><span class="user-nav-icon"><i class="fa fa-lock"></i></span><span class="user-nav-label">Logout</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--   <div class="pull-right desktop-search">
                          <span class="waves-effect search-btn">
                          <i class="fa fa-search"></i>
                          </span>
                      </div>
                      <span class="rightbar-action waves-effect"><i class="fa fa-bars"></i></span> -->
                </div>
            </div>
        </div>
    </div>
</header>