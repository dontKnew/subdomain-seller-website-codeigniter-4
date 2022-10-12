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
                                        <li><a href="<?= base_url("seotools") ?>">Home</a>
                                        </li>
                                        <li class="active-page"> SEO Tools </li>
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
                        <h4>Tools</h4>
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

<?php $this->load->view('common/footer')?>
