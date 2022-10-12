 <div class="user-card">
<?php $x=$this->session->userdata('kumar');?>
               <div class="card-image bg"></div>

               <div class="user-card-body">

                  <div class="user-card-img">
                     <?php if($x['profile']==''){?>
                     <img src="<?= base_url('public/front/')?>images/default-avatar.png" alt="">
                  <?php }else{?>
                      <img src="<?= base_url('uploads/profile/'.$x['profile'])?>" alt="">
                  <?php }?>

                  </div>

                  <h4 class="name"><?= $x['name']?></h4>

                  <div class="user-card-body-decc">

                     <p><b>Email Id : </b> <span class="pull-right"><?= $x['email']?></span></p>

                     <p><b>Mobile No. : </b> <span class="pull-right"><?= $x['mobile']?></span></p>

                     <p><b>Customer ID : </b> <span class="pull-right"><?= $x['customer_id']?></span></p>

                  </div>

               </div>

            </div>