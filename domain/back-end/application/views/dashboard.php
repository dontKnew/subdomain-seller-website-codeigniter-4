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
                                        <li class="active-page"> Dashboard</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                        </div>
                    </div>
                </div>

                <div class="box-widget widget-module">
                    <div class="widget-head clearfix">
                        <span class="h-icon"><i class="fa fa-th"></i></span>
                        <h4>Dashboard</h4>
                    </div>
                    <div class="widget-container">
                        <div class=" widget-block">

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Footer Start Here -->
        <?php $this->load->view('common/foot'); ?>
    </div>
</div>
<!--Rightbar Start Here -->
<!-- <div class="right-aside">
<div class="aside-branding">
    <div class="aside-tab">
        <ul class="nav nav-tabs pull-left">
            <li class="active"><a href="#coversetaion" data-toggle="tab" data-tooltip="tooltip" data-placement="bottom" title="Chat" class="waves-effect"><i class="fa fa-comments"></i></a>
            </li>
            <li><a href="#server-stats" data-toggle="tab" data-tooltip="tooltip" data-placement="bottom" title="Stats" class="waves-effect"><i class="fa fa-pie-chart"></i></a>
            </li>
            <li><a href="#notifications" data-toggle="tab" data-tooltip="tooltip" data-placement="bottom" title="Notifications" class="waves-effect aside-notifications"><i class="fa fa-bell"></i><span class="alert-bubble">10</span></a>
            </li>
        </ul>
    </div>
    <span class="rightbar-action waves-effect"><i class="fa fa-times"></i></span>
</div>
<div class="aside-tab-wigets">
<div class="tab-content">
<div class="tab-pane active" id="coversetaion">
    <div class="chat-search-form">
        <form>
            <input name="searchbox" value="" placeholder="Chat With" class="chat-u-search form-control">
        </form>
    </div>
    <div class="block-content chat-user-list">
        <span class="piechart"></span>
        <h3 class="clearfix"><span class="pull-left">Friends</span><span class="pull-right online-counter">3 Online</span></h3>
        <ul class="chat-list">
            <li>
                <a href="#"><span class="chat-avatar"><img src="images/avatar/adellecharles.jpg" alt="Avatar"></span><span class="chat-u-info">Adellecharles<cite>New York</cite></span></a>
                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
            </li>
            <li class="chat-u-online">
                <a href="#"><span class="chat-avatar"><img src="images/avatar/allisongrayce.jpg" alt="Avatar"></span><span class="chat-u-info">Allisongrayce<cite>New York</cite></span></a>
                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
            </li>
            <li class="chat-u-online">
                <a href="#"><span class="chat-avatar"><img src="images/avatar/bobbyjkane.jpg" alt="Avatar"></span><span class="chat-u-info">Bobbyjkane<cite>New York</cite></span></a>
                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
            </li>
            <li class="chat-u-online">
                <a href="#"><span class="chat-avatar"><img src="images/avatar/littlenono.jpg" alt="Avatar"></span><span class="chat-u-info">Littlenono<cite>New York</cite></span></a>
                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
            </li>
        </ul>
        <h3 class="clearfix"><span class="pull-left">Family</span><span class="pull-right online-counter">1 Online</span></h3>
        <ul class="chat-list">
            <li>
                <a href="#"><span class="chat-avatar"><img src="images/avatar/geeftvorm.jpg" alt="Avatar"></span><span class="chat-u-info">Geeftvorm<cite>New York</cite></span></a>
                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
            </li>
            <li class="chat-u-online">
                <a href="#"><span class="chat-avatar"><img src="images/avatar/amarkdalen.jpg" alt="Avatar"></span><span class="chat-u-info">Amarkdalen<cite>New York</cite></span></a>
                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
            </li>
            <li>
                <a href="#"><span class="chat-avatar"><img src="images/avatar/mko.jpg" alt="Avatar"></span><span class="chat-u-info">Mko<cite>New York</cite></span></a>
                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
            </li>
            <li>
                <a href="#"><span class="chat-avatar"><img src="images/avatar/marktimemedia.jpg" alt="Avatar"></span><span class="chat-u-info">Marktimemedia<cite>New York</cite></span></a>
                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
            </li>
            <li>
                <a href="#"><span class="chat-avatar"><img src="images/avatar/oykun.jpg" alt="Avatar"></span><span class="chat-u-info">Oykun<cite>New York</cite></span></a>
                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
            </li>
        </ul>
    </div>
</div>
<div class="tab-pane" id="server-stats">
    <div class="block-content">
        <div class="server-stats-content">
            <h3>Work Progress</h3>
            <div class="progress-wrap">
                <div class="clearfix progress-meta">
                    <span class="pull-left progress-label">Daily Backup</span><span class="pull-right progress-percent label label-primary"></span>
                </div>
                <div class="progress">
                    <div class="progress-bar" data-progress="80">
                    </div>
                </div>
            </div>
            <div class="progress-wrap">
                <div class="clearfix progress-meta">
                    <span class="pull-left progress-label">My Sql Backup</span><span class="pull-right progress-percent label label-primary"></span>
                </div>
                <div class="progress">
                    <div class="progress-bar" data-progress="60">
                    </div>
                </div>
            </div>
            <div class="progress-wrap">
                <div class="clearfix progress-meta">
                    <span class="pull-left progress-label">Vps Configure </span><span class="pull-right progress-percent label label-primary"></span>
                </div>
                <div class="progress">
                    <div class="progress-bar" data-progress="90">
                    </div>
                </div>
            </div>
            <h3>Usage</h3>
            <div class="uasge-wrap">
                <ul>
                    <li>
                        <h4>Bandwidth</h4>
                        <span class="uasge-intro">950GB of 1.95 TB Used</span>
                    </li>
                    <li class="usage-chart">
                                <span class="epie-chart" data-percent="60" data-barcolor="#e64a19" data-tcolor="#e0e0e0" data-scalecolor="#e0e0e0" data-linecap="butt" data-linewidth="3" data-size="55" data-animate="2000"><span class="percent"></span>
                                </span>
                    </li>
                </ul>
            </div>
            <div class="uasge-wrap">
                <ul>
                    <li>
                        <h4>Memory </h4>
                        <span class="uasge-intro">3 GB of 6 GB Used</span>
                    </li>
                    <li class="usage-chart">
                                <span class="epie-chart" data-percent="50" data-barcolor="#00acc1" data-tcolor="#e0e0e0" data-scalecolor="#e0e0e0" data-linecap="butt" data-linewidth="3" data-size="55" data-animate="2000"><span class="percent"></span>
                                </span>
                    </li>
                </ul>
            </div>
            <div class="uasge-wrap">
                <ul>
                    <li>
                        <h4>HDD </h4>
                        <span class="uasge-intro">18 GB of 30 GB Used </span>
                    </li>
                    <li class="usage-chart">
                                <span class="epie-chart" data-percent="60" data-barcolor="#43a047" data-tcolor="#e0e0e0" data-scalecolor="#e0e0e0" data-linecap="butt" data-linewidth="3" data-size="55" data-animate="2000"><span class="percent"></span>
                                </span>
                    </li>
                </ul>
            </div>
            <h3>Used Services</h3>
            <div class="progress-wrap">
                <div class="clearfix progress-meta">
                    <span class="pull-left progress-label">Email</span><span class="pull-right progress-percent-multiple label label-primary">90%</span>
                </div>
                <div class="progress multi-progress">
                    <div class="progress-bar progress-bar-success" data-progress="40">
                    </div>
                    <div class="progress-bar progress-bar-warning progress-bar-striped" data-progress="30">
                    </div>
                    <div class="progress-bar progress-bar-danger" data-progress="20">
                    </div>
                </div>
                <span class="progress-intro">27 of 30 Email Used</span>
            </div>
            <div class="progress-wrap">
                <div class="clearfix progress-meta">
                    <span class="pull-left progress-label">Credits</span><span class="pull-right progress-percent-multiple label label-primary">70%</span>
                </div>
                <div class="progress multi-progress">
                    <div class="progress-bar progress-bar-success" data-progress="40">
                    </div>
                    <div class="progress-bar progress-bar-warning progress-bar-striped" data-progress="20">
                    </div>
                    <div class="progress-bar progress-bar-danger" data-progress="10">
                    </div>
                </div>
                <span class="progress-intro">700 of 1000 Credits Used</span>
            </div>
            <h3>Task Pending</h3>
            <div class="progress-wrap">
                <div class="clearfix progress-meta">
                    <span class="pull-left progress-label">Tickets</span><span class="pull-right progress-percent label label-primary"></span>
                </div>
                <div class="progress">
                    <div class="progress-bar" data-progress="60">
                    </div>
                </div>
                <span class="progress-intro">60 of 100 Replied / 40 Pending</span>
            </div>
            <div class="progress-wrap">
                <div class="clearfix progress-meta">
                    <span class="pull-left progress-label">Payments</span><span class="pull-right progress-percent label label-primary"></span>
                </div>
                <div class="progress">
                    <div class="progress-bar" data-progress="90">
                    </div>
                </div>
                <span class="progress-intro">90 of 100 Paid / 10 Unpaid</span>
            </div>
            <div class="progress-wrap">
                <div class="clearfix progress-meta">
                    <span class="pull-left progress-label">Review</span><span class="pull-right progress-percent label label-primary"></span>
                </div>
                <div class="progress">
                    <div class="progress-bar" data-progress="50">
                    </div>
                </div>
                <span class="progress-intro">5 of 10 Reviewed / 5 Pending</span>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane" id="notifications">
    <div class="block-content">
        <div class="aside-notifications-wrap">
            <div class="message-wrap">
                <h4>You have 15 new messages</h4>
                <ul class="clearfix">
                    <li class="clearfix">
                        <a href="#" class="message-thumb"><img src="images/avatar/adellecharles.jpg" alt="image">
                        </a><a href="#" class="message-intro"><span class="message-meta">Adellecharles </span>Nunc aliquam dolor... <span class="message-time">today at 10:20 pm</span></a>
                    </li>
                    <li class="clearfix">
                        <a href="#" class="message-thumb"><img src="images/avatar/allisongrayce.jpg" alt="image">
                        </a><a href="#" class="message-intro"><span class="message-meta">Allisongrayce </span>In hac habitasse ... <span class="message-time">today at 8:29 pm</span></a>
                    </li>
                    <li class="clearfix">
                        <a href="#" class="message-thumb"><img src="images/avatar/amarkdalen.jpg" alt="image">
                        </a><a href="#" class="message-intro"><span class="message-meta">Amarkdalen </span>Suspendisse ac mauris ... <span class="message-time">yesterday at 12:29 pm</span></a>
                    </li>
                    <li class="clearfix">
                        <a href="#" class="message-thumb"><img src="images/avatar/annapickard.jpg" alt="image">
                        </a><a href="#" class="message-intro"><span class="message-meta">Annapickard </span>Vivamus lacinia facilisis... <span class="message-time">yesterday at 11:48 pm</span></a>
                    </li>
                    <li class="clearfix">
                        <a href="#" class="message-thumb"><img src="images/avatar/bobbyjkane.jpg" alt="image">
                        </a><a href="#" class="message-intro"><span class="message-meta">Bobbyjkane </span>Donec vel iaculis ... <span class="message-time">1 month ago</span></a>
                    </li>
                    <li class="clearfix">
                        <a href="#" class="message-thumb"><img src="images/avatar/chexee.jpg" alt="image">
                        </a><a href="#" class="message-intro"><span class="message-meta">Chexee </span> Curabitur eget blandit...<span class="message-time">3 months ago</span></a>
                    </li>
                    <li class="clearfix">
                        <a href="#" class="message-thumb"><img src="images/avatar/coreyweb.jpg" alt="image">
                        </a><a href="#" class="message-intro"><span class="message-meta">Coreyweb </span>Etiam molestie nulla... <span class="message-time">1 year ago</span></a>
                    </li>
                </ul>
                <a class="btn btn-primary btn-block notification-btn waves-effect clearfix" href="#"><span>View All</span></a>
            </div>
            <div class="notification-wrap">
                <h4>You have 10 new notifications</h4>
                <ul>
                    <li><a href="#" class="clearfix"><span class="ni w-green"><i class="fa fa-bullhorn"></i></span><span class="notification-message">Pellentesque semper posuere. <span class="notification-time clearfix">3 Min Ago</span></span></a>
                    </li>
                    <li><a href="#" class="clearfix"><span class="ni w-orange"><i class="fa fa-life-ring"></i></span><span class="notification-message">Nulla commodo sem at purus. <span class="notification-time clearfix">1 Hours Ago</span></span></a>
                    </li>
                    <li><a href="#" class="clearfix"><span class="ni w-bondi-blue"><i class="fa fa-star-o"></i></span><span class="notification-message">Fusce condimentum turpis. <span class="notification-time clearfix">3 Hours Ago</span></span></a>
                    </li>
                    <li><a href="#" class="clearfix"><span class="ni w-blue"><i class="fa fa-trophy"></i></span><span class="notification-message">Pellentesque habitant morbi. <span class="notification-time clearfix">Yesterday</span></span></a>
                    </li>
                    <li><a href="#" class="clearfix"><span class="ni w-brown"><i class="fa fa-bolt"></i></span><span class="notification-message">Fusce bibendum lacus mauris.<span class="notification-time clearfix">1 Month Ago</span></span></a>
                    </li>
                    <li><a href="#" class="clearfix"><span class="ni w-dark-yellow"><i class="fa fa-bookmark-o"></i></span><span class="notification-message">Donec id mi placerat, scelerisque.<span class="notification-time clearfix">3 Months Ago</span></span></a>
                    </li>
                </ul>
                <a class="btn btn-primary btn-block notification-btn clearfix waves-effect " href="#"><span>View All</span></a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="conv-container">
    <div class="conv-u-info chat-u-online">
        <ul>
            <li class="chat-avatar"><img src="images/avatar/adellecharles.jpg" alt="Avatar">
            </li>
            <li class="chat-u-info">adellecharles<span>New York</span>
            </li>
            <li><span data-tooltip="tooltip" data-placement="bottom" title="Call" class="waves-effect chat-u-call"><i class="fa fa-phone"></i></span>
            </li>
            <li><span data-tooltip="tooltip" data-placement="bottom" title="Exit" class="waves-effect chat-close"><i class="fa fa-angle-right"></i></span>
            </li>
        </ul>
    </div>
    <div class="converstaion-list">
        <div class="conversation-back">
            <div class="conv-thumb">
                <img src="images/avatar/uxceo.jpg" alt="user">
            </div>
            <div class="conv-text">
                Hello John, thank you for calling Provide Support. How may I help you?
            </div>
        </div>
        <div class="conversation-front">
            <div class="conv-text">
                Hello Mary. I understand the problem and will be happy to help you. Let’s see what I can do.
            </div>
        </div>
        <div class="conversation-front">
            <div class="conv-text">
                Let me see if I have this correct, you want me to…” or “You would like for me to…?
            </div>
        </div>
        <div class="conversation-back">
            <div class="conv-thumb">
                <img src="images/avatar/uxceo.jpg" alt="user">
            </div>
            <div class="conv-text">
                I’m not sure, but let me find out for you.
            </div>
        </div>
    </div>
    <div class="chat-input-form">
        <form>
            <input name="chatbox" value="" class="form-control chat-input">
        </form>
    </div>
</div>
</div> -->
<?php $this->load->view('common/footer')?>
