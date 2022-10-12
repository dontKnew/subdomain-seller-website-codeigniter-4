<?php
/*$this->load->database();
$this->load->model('users_models');
$logoimg=$this->users_models->getserverlogo($_SERVER['SERVER_NAME']);*/
error_reporting(0);
?>
<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=$logoimg['webtitle']?></title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/font-awesome.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/animate.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/waves.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/layout.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/components.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/plugins.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/common-styles.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/pages.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/responsive.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/matmix-iconfont.css" type="text/css">

    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,500,500italic" rel="stylesheet" type="text/css">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="<?=base_url();?>public/images/<?=$logoimg['userfavicon']?>" type="image/x-icon">
    <link href="<?php echo base_url(); ?>public/css/my-css.css?<?=time()?>" rel="stylesheet" type="text/css" />

</head>

<body class="body-background" style="background:url(<?=base_url('public/images/1d7be4527b51900c9a85916f2ff81f55_large.jpeg')?>)">

<div class="body-background">
    <div class="container">
        <div class="col-md-8"></div>

        <div class="col-md-4">
            <div class="login-formme">

                <div class="row">
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

                    <?php if(!empty($logoimg['logoimage'])) { ?>
                        <div class="col-md-12">
                            <img src="<?php echo base_url(); ?>public/frontend/images/logo.jpg" class="img-responsive" />
                        </div>
                    <?php }

                    else
                    {
                        ?>
                        <div class="col-md-12">
                            <img src="<?= base_url('public/frontend/images/logo.jpg'); ?>" class="img-responsive" />
                        </div>
                    <?php } ?>

                    <div class="col-md-12 login-page-ma login-text">Log In</div>
                    <form method="post" action="<?= base_url('admin/login')?>">
                        <div class="col-md-12 login-page-ma">

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user pass-text"></i></span>
                                <input type="email" class="form-control" placeholder="Email" name="email" required="" value="<?= get_cookie('email')?>">
                            </div>

                        </div>

                        <div class="col-md-12 login-page-ma">


                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock pass-text"></i></span>
                                <input type="password" class="form-control" placeholder="Password" name="password" required="" value="<?= get_cookie('password')?>">
                            </div>



                        </div>

                        <div class="col-md-12 socil-link"><button class="btn btn-primarya btn-block btn-signin" id="yuoji"  type="submit">Sign In</button></div>
                        <span id="msgstatus" style="font-size:15px;"></span>
                    </form>
                    <div class="col-md-12">

                        <!-- <div class="row">
<div class="col-md-6 forgot-pas"><a href="<?=site_url('pages/forgotpassword')?>" class="forgot-pass-link">Forgot password?</a></div>
<?php if($_SERVER['SERVER_NAME']!=='103.231.43.206')
                        { ?>
<div class="col-md-6 join-link">Not a member? <a href="<?=site_url('pages/registration')?>">Join now</a></div>
<?php } ?>
</div> -->

                    </div>

                    <div class="col-md-12 forgot-pas">
                        <!-- <div class="divi-new"><span>OR</span></div>

                        </div> -->

                        <div class="col-md-12 socil-link">
                            <div class="row">
                                <?php if(isset( $login_url) && $_SERVER['SERVER_NAME']=='manage.staticking.net'): ?>
                                    <div class="col-md-6"><a href="<?=$login_url?>"><img src="<?=base_url() ?>public/images/facebook-icon-login.png" width="100%" class="img-responsive"/></a></div>
                                <?php endif ?>
                                <?php if(isset( $authUrl) && $_SERVER['SERVER_NAME']=='manage.staticking.net'): ?>
                                    <div class="col-md-6 imag"><a href="<?=$authUrl?>"><img src="<?=base_url() ?>public/images/google-icon-login.png" width="138" height="41" /></a></div>
                                <?php endif ?>
                            </div>

                        </div>





                    </div>

                </div>


            </div>

        </div>

    </div>

    <script src="<?php echo base_url(); ?>public/js/jquery-1.11.2.min.js"></script>

    <script src="<?php echo base_url(); ?>public/js/jquery-migrate-1.2.1.min.js"></script>



    <!--  <script type="text/javascript">

    jQuery(document).ready(function()

{



jQuery("#loginform").on('submit',function(ev)
{
ev.preventDefault();
username=jQuery("#username").val();
password=jQuery("#inputPassword").val();

if(username=='')

{

    jQuery("#msgstatus").addClass("alert-danger").fadeIn(10).text("Please Enter Username");

}

else

{

    if(password=='')

    {

        jQuery("#msgstatus").addClass("alert-danger").fadeIn(10).text("Please Enter Password");

    }

    else
    {



        jQuery.ajax({

                type:'POST',

                url:'<?php echo site_url(); ?>/pages/loginuserid',

                data:jQuery("#loginform").serialize(),

                beforeSend:function()
                {

                    jQuery("#msgstatus").addClass("alert-danger").fadeIn(10).text("Please Wait....");

                },

                success:function(data)

                {

                    jQuery("#msgstatus").removeClass("alert-danger").fadeIn(10).html(data);

                }





        });





    }



}



    });

});





    </script> -->



    <script src="<?php echo base_url(); ?>public/js/jRespond.min.js"></script>

    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url(); ?>public/js/nav-accordion.js"></script>

    <script src="<?php echo base_url(); ?>public/js/hoverintent.js"></script>

    <script src="<?php echo base_url(); ?>public/js/waves.js"></script>

    <script src="<?php echo base_url(); ?>public/js/switchery.js"></script>

    <script src="<?php echo base_url(); ?>public/js/jquery.loadmask.js"></script>

    <script src="<?php echo base_url(); ?>public/js/icheck.js"></script>

    <script src="<?php echo base_url(); ?>public/js/bootbox.js"></script>

    <script src="<?php echo base_url(); ?>public/js/animation.js"></script>

    <script src="<?php echo base_url(); ?>public/js/colorpicker.js"></script>

    <script src="<?php echo base_url(); ?>public/js/bootstrap-datepicker.js"></script>

    <script src="<?php echo base_url(); ?>public/js/floatlabels.js"></script>



    <script src="<?php echo base_url(); ?>public/js/smart-resize.js"></script>

    <script src="<?php echo base_url(); ?>public/js/layout.init.js"></script>

    <script src="<?php echo base_url(); ?>public/js/matmix.init.js"></script>

    <script src="<?php echo base_url(); ?>public/js/retina.min.js"></script>


</body>
</html>
