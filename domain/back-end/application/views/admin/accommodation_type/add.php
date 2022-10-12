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

                                        <li><a href="#">Home</a>

                                        </li>

                                        <li class="active-page"> Add acomodationtype</li>

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

                    if($this->session->flashdata('err')!=''){

                        echo '<div class="alert alert-danger alert-dismissible">

                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                              <strong>'.$this->session->flashdata('err').'</strong> 

                            </div>';

                    }

                ?>

                <div class="row">

                    <div class="col-md-12 ">

                    <div class="box-widget widget-module">

                            <div class="widget-head clearfix">

                                <span class="h-icon"><i class="fa fa-bars"></i></span>

                                <h4>Add acomodationtype</h4>

                            </div>

                            <div class="widget-container">

                                <div class=" widget-block">

                                    <form action="<?= base_url('admin/acomodationtype/add')?>" method="post" enctype="multipart/form-data">

                                         <legend>Add acomodationtype</legend>

                                    <div class="form-group">

                                        <label> Domain</label>

                                         <select class="form-control" name="domain" onchange="getacodomation(this.value)" required="" readonly>

                                         <option value="<?php
                                                                    if ($this->session->has_userdata('sessionDomain')) {
                                                                        echo $this->session->sessionDomain;
                                                                    } else {
                                                                        echo "no domain was selected";
                                                                    } ?>" selected><!-- close tag -->
                                                                    
                                                            <?php if ($this->session->has_userdata('sessionDomain')) {
                                                                    $domain = $this->session->sessionDomain;
                                                                    $domain = substr($domain, 0, strpos($domain, '.'));
                                                                        echo $domain;
                                                                    } else {
                                                                        echo "no domain was selected";
                                                                    }
                                                                ?>
                                            </option>

                                         </select>

                                     </div>

                                  <div class="form-group">

                                        <label>Acomodation</label>

                                         <select name="acomodation"  class="form-control" id="acomodation"  required="">
                                            <option value=""> Select acomodation</option>
                                         </select>

                                     </div>


                                      <div class="form-group">

                                        <label>Name</label>

                                         <input type="text" name="name" value="<?= set_value('name')?>" class="form-control"  required="">

                                     </div>


                                        <div class="form-group">

                                        <label>Price</label>

                                         <input type="text" name="price" value="<?= set_value('price')?>" class="form-control"  required="">

                                     </div>


                                        <div class="form-group">

                                        <label>Offer Price</label>

                                         <input type="text" name="offerprice" value="<?= set_value('offerprice')?>" class="form-control"  required="">

                                     </div>


                                     <div class="form-group">

                                        <label>Short Description</label>

                                         <textarea name="short" class="form-control"  required=""><?= set_value('short')?></textarea>

                                     </div>

                                    


                                     <div class="form-group">

                                        <label> Description</label>

                                         <textarea name="description" class="form-control full-editor"  required=""><?= set_value('description')?></textarea>

                                     </div>


                                      <div class="form-group">

                                        <label> Oberview</label>

                                         <textarea name="overview" class="form-control full-editor"  required=""><?= set_value('overview')?></textarea>

                                     </div>




                                      <div class="form-group">

                                        <label>Image</label>

                                         <input type="file" name="image" value="<?= set_value('image')?>" class="form-control"  required="">

                                     </div>


                                       <div class="form-group">

                                        <label>Slider Image</label>

                                         <input type="file" name="sliderimage[]" multiple value="<?= set_value('sliderimage')?>" class="form-control" >

                                     </div>



                                     



                                     <div class="form-group">

                                        <label> Status</label>

                                         <select class="form-control" name="status">

                                             <option <?php if(set_value('status')=='Active'){ echo 'selected'; }?>>Active</option>

                                             <option <?php if(set_value('status')=='Inactive'){ echo 'selected'; }?>>Inactive</option>

                                         </select>

                                     </div>

                                     <input type="submit" name="" class="btn btn-primary" value="Submit">

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