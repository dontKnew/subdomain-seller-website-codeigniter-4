<?php $this->load->view('common/head')?>

<link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.css" rel="stylesheet">

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

                        <?php if(validation_errors()!=''){?>

                    <div class="alert alert-danger alert-dismissible">

                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                        <?php echo validation_errors(); ?>

                    </div>

                        <?php }?>

                        <div class="col-md-7">

                            <div class="page-breadcrumb-wrap">

                                <div class="page-breadcrumb-info">



                                    <ul class="list-page-breadcrumb">

                                        <li><a href="<?= base_url()."about"; ?>" >Home</a>

                                        </li>

                                        <li class="active-page">About</li>

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

                                <h4>Add Point Word</h4>

                            </div>

                            <div class="widget-container">

                                <div class=" widget-block">

                                    <form action="<?= base_url('about/point-word/add')?>" method="post">
                                        <div class="form-group">
                                            <label>Domain </label>
                                            <input type="text" class="form-control" name="domain" value="<?php echo strtolower($this->session->sessionDomain); ?>" required readonly>
                                        </div>

                                      <div class="form-group">
                                        <label>Point Name </label>
                                         <input type="text" name="point_word" value="<?= set_value('point_word')?>" class="form-control"  required="">
                                     </div>

                                     <div class="form-group">

                                        <label> Status</label>

                                         <select class="form-control" name="status">

                                             <option <?php if(set_value('status')=='Active'){ echo 'selected'; }?>>Active</option>

                                             <option <?php if(set_value('status')=='Inactive'){ echo 'selected'; }?>>Inactive</option>

                                         </select>

                                     </div>

                                     <input type="submit"  class="btn btn-primary" value="Submit">

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                    </div>

                  <?php $this->load->view('common/foot'); ?>

        </div>

    </div>



    <?php $this->load->view('common/footer')?>


<script>
    $=jQuery;
    function getacodomation(v)
    {
        $.ajax({
    type: "POST",
    url: "<?= base_url('Acomodationtype/getacco')?>",
    data: { domain : v },
    dataType: "json",
    success: function(result){
        $("#acomodation").html(result);
    }
});
    }
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.js"></script>
