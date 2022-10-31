<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Ready Bootstrap Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <link rel="stylesheet" href="<?= base_url("backend/css/bootstrap.min.css") ?>">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="<?= base_url("backend/css/ready.css") ?>">
    <link rel="stylesheet" href="<?= base_url("backend/css/demo.css") ?>">
</head>
<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
    .pagination {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        font-size:large;

    }
    .pagination > li {
        cursor:pointer;
        color:white !important;
        background-color: white;
        padding: 2px 10px;
        margin:2px;
        border:2px solid blue;
        border-radius: 5px;
    }
    .pagination > li:hover{
        background-color:lightblue;
    }
    .pagination > li.active  {
        background-color: lawngreen !important;
        color:white;
    }
    .pagination > li > a:active{
        color:white;
    }
    .footer {
        position: absolute;
        bottom: 0px;
        width: 100%
    }
</style>
<body>
<div class="wrapper">
    <div class="main-header">
        <div class="logo-header">
            <a href="<?= base_url() ?>" class="logo">
                E-Service Apartments
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
        </div>
        <nav class="navbar navbar-header navbar-expand-lg">
            <div class="container-fluid">
                <!--start search bar-->
<!--                <form class="navbar-left navbar-form nav-search mr-md-3" action="">-->
<!--                    <div class="input-group">-->
<!--                        <input type="search" id="searchInput" placeholder="Search anything..." class="form-control">-->
<!--                        <div class="input-group-append">-->
<!--                                    <span class="input-group-text">-->
<!--                                        <i class="la la-search search-icon"></i>-->
<!--                                    </span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </form>-->
                <!--end search bar-->

                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                            <img src="<?= base_url() . "/backend/img/admin_profile/" . esc($_SESSION['profile']) ?>" alt="user-img" width="36"
                                 class="img-circle"><span<?= $_SESSION['name'] ?></span></span> </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <div class="user-box">
                                    <div class="u-img"><img src="<?= base_url() . "/backend/img/admin_profile/" . esc($_SESSION['profile']) ?>" alt="user">
                                    </div>
                                    <div class="u-text">
                                        <h4> <?= $_SESSION['name'] ?></h4>
                                        <p class="text-muted"> <?= $_SESSION['email'] ?></p>
                                </div>
                            </li>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-center" href="<?= base_url("admin/logout") ?>"><i class="fa fa-power-off"></i> Logout</a>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="sidebar">
        <div class="scrollbar-inner sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="<?= base_url() . "/backend/img/admin_profile/" . esc($_SESSION['profile']) ?>">
                </div>
                <div class="info">
                    <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                    <span>
                                        <?= $_SESSION['name'] ?>
                                        <span class="user-level">Administrator</span>
                                    </span>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item <?php if(isset($dashboard) ){ echo $dashboard;} ?>">
                    <a href="<?= base_url("admin/dashboard"); ?>">
                        <i class="la la-dashboard"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item <?php if(isset($apartment) ){ echo $apartment;} ?>">
                    <a href="<?= base_url("admin/apartment") ?>">
                        <i class="la la-table"></i>
                        <p>Apartments</p>
                        <span class="badge badge-info"><?php if(isset($apartmentCount)): echo esc($apartmentCount); endif; ?></span>
                    </a>
                </li>
                <li class="nav-item <?php if(isset($home_slider) ){ echo $home_slider;} ?>">
                    <a href="<?= base_url("admin/home-slider") ?>">
                        <i class="la la-table"></i>
                        <p>Home Sliders</p>
                        <span class="badge badge-info"><?php if(isset($sliderCount)): echo esc($sliderCount); endif; ?></span>
                    </a>
                </li>
                <li class="nav-item <?php if(isset($apartment_state) ){ echo $apartment_state;} ?>">
                    <a href="<?= base_url("admin/apartment-state") ?>">
                        <i class="la la-table"></i>
                        <p>Apartment States</p>
                        <span class="badge badge-info"><?php if(isset($stateCount)): echo esc($stateCount); endif; ?></span>
                    </a>
                </li>
                <li class="nav-item <?php if(isset($highlight_apartment) ){ echo $highlight_apartment;} ?>">
                    <a href="<?= base_url("admin/highlight-apartment") ?>">
                        <i class="la la-table"></i>
                        <p>Highlight Apart.</p>
                        <span class="badge badge-info"><?php if(isset($highlightCount)): echo esc($highlightCount); endif; ?></span>
                    </a>
                </li>
                <li class="nav-item <?php if(isset($profile) ){ echo $profile;} ?>">
                    <a href="<?= base_url("admin/profile") ?>">
                        <i class="la la-user-secret"></i>
                        <p>Your Profile</p>
                    </a>
                </li>
                <li class="nav-item <?php if(isset($change_password) ){ echo $change_password;} ?>">
                    <a href="<?= base_url("admin/change-password") ?>">
                        <i class="la la-lock"></i>
                        <p>Change Password</p>
                    </a>
                </li>
                <a href="<?= base_url("admin/logout") ?>" alt="logout button" class="mx-4 my-4 btn btn-sm btn-outline-danger d-flex justify-content-center align-items-center">
                    <i class="la la-mail-reply-all"></i> &nbsp;
                    <span>EXIT NOW</span>
                </a>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <div class="content">
            <!--start main content-->
            <?= $this->renderSection('main-contents') ?>
            <!--end main content-->

        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                E-Service Apartment
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Help
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright ml-auto">
                    2022, made with <i class="la la-heart heart text-danger"></i> by <a href="#">Global Height</a>
                </div>
            </div>
        </footer>
    </div>
</div>

</div>

</body>
</body>
<script src="<?= base_url("backend/js/core/jquery.3.2.1.min.js") ?>"></script>

<script src="<?= base_url("backend/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js") ?>"></script>

<script src="<?= base_url("backend/js/core/popper.min.js") ?>"></script>
<script src="<?= base_url("backend/js/core/bootstrap.min.js") ?>"></script>

<script src="<?= base_url("backend/js/plugin/bootstrap-notify/bootstrap-notify.min.js") ?>"> </script>
<script src="<?= base_url("backend/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js") ?>"></script>
<script src="<?= base_url("backend/js/plugin/jquery-mapael/jquery.mapael.min.js") ?>"></script>
<script src="<?= base_url("backend/js/plugin/jquery-mapael/maps/world_countries.min.js") ?>"></script>


<script src="<?= base_url("backend/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js") ?>"> </script>
<script src="<?= base_url("backend/js/ready.min.js") ?>"></script>
<script src="<?= base_url("backend/js/demo.js") ?>"</script>
</html>
