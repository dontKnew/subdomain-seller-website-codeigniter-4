<div class="dashboard-left">
<div class="profile-box">
<?php $x=$this->session->userdata('kumar');?>
                       <p> 
                        <?php if($x['profile']==''){?>
                     <img src="<?= base_url('public/front/')?>images/default-avatar.png" alt="">
                  <?php }else{?>
                      <img style="height: 50px;

width: 50px;" src="<?= base_url('uploads/profile/'.$x['profile'])?>" alt="">
                  <?php }?>
                </p>
<h4><?= $x['name']?></h4>
                       <p>Phone: <?= $x['mobile']?></p>
                       <p>Email: <?= $x['email']?></p>
</div>
<div class="side-link-box">
<ul class="link">
    <li class="active"><a href="<?= base_url('customer-profile')?>">My Profile</a></li>
    <li><a href="<?= base_url('my_order')?>">My Orders</a></li>

    <li><a href="<?= base_url('change_password')?>">Change Password</a></li>

    <li><a href="<?= base_url('customer-logout')?>">Logout</a></li>
</ul>
</div>
</div>