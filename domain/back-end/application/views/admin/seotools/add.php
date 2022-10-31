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

                                        <li><a href="<?= base_url()."admin/seotags"; ?>" >Home</a>

                                        </li>

                                        <li class="active-page">Add SEO Tags</li>

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

                                <h4>ADD SEO TAGS </h4>

                            </div>

                            <div class="widget-container">

                                <div class=" widget-block">
                                    <form action="<?= base_url('admin/seotags/add')?>" method="post">
                                        <div class="form-group">
                                            <label>Domain </label>
                                            <input type="hidden"  class="form-control" name="domain" value="<?php echo strtolower($this->session->sessionDomain); ?>" required>
                                        </div>
                                     <div class="form-group">
                                        <label> Select Page</label>
                                         <select class="form-control" name="page_name" required>
                                             <option value="Home" <?php if(set_value("page_name")=="Home"){echo "selected";} ?>>Home</option>
                                             <option value="About" <?php if(set_value("page_name")=="About"){echo "selected";} ?>>About</option>
                                             <option value="Accommodation" <?php if(set_value("page_name")=="Accommodation"){echo "selected";} ?>>Accommodation</option>
                                             <option value="Amenities" <?php if(set_value("page_name")=="Amenities"){echo "selected";} ?>>Amenities</option>
                                             <option value="Packages" <?php if(set_value("page_name")=="Packages"){echo "selected";} ?>>Packages</option>
                                             <option value="Location Advantages" <?php if(set_value("page_name")=="Location Advantages"){echo "selected";} ?>>Location Advantages</option>
                                             <option value="Photo Gallery" <?php if(set_value("page_name")=="Photo Gallery"){echo "selected";} ?>>Photo Gallery</option>
                                             <option value="Testimonials" <?php if(set_value("page_name")=="Testimonials"){echo "selected";} ?>>Testimonials</option>
                                             <option value="Blog" <?php if(set_value("page_name")=="Blog"){echo "selected";} ?>>Blog</option>
                                             <option value="Contact" <?php if(set_value("page_name")=="Contact"){echo "selected";} ?>>Contact</option>
                                         </select>
                                     </div>
                                    <div class="form-group">
                                        <label>Meta Description </label>
                                        <textarea class="form-control" name="meta_description" rows="3" required><?php echo set_value("meta_description") ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Meta Keywords </label>
                                        <textarea class="form-control" name="meta_keywords" rows="3" required><?php echo set_value("meta_keywords") ?></textarea>
                                    </div>

                                     <input type="submit"  class="btn btn-warning" value="Submit">

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
