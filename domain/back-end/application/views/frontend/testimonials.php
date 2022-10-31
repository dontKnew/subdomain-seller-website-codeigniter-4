<?php $this->load->view('common_front/header');
?>
<section class="row final-inner-header" style="
        display: table;
        height: 245px;
        background: url('<?= base_url() . "uploads/testinomial/" . $ctestimonial['testinomial_photo'] ?>');
        width: 100%;
        margin: 0;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        ">
    <div class="container">
        <h2 class="this-title"> <?= $ctestimonial['photo_text'] ?> </h2>
    </div>
</section>
<section class="row final-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>"><?= $ctestimonial['directory_link_home'] ?></a></li>
            <li class="active"><?= $ctestimonial['directory_link_testimonials'] ?></li>
        </ol>
    </div>
</section>
<!-- Booking style-->
<section class="container clearfix common-pad booknow">
    <div class="sec-header">
        <h2><?= $ctestimonial['web_description_title'] ?></h2>
        <h3><?= $ctestimonial['web_description_title_comment'] ?></h3>
        <p><?= $ctestimonial['web_description_testimonials'] ?></p>
    </div>

</section>
<section class="test-sec">
    <div class="container clearfix  booknow ">
        <?php foreach($testimonial as $cmt ){ ?>
        <div class="sec-header">
            <img src="<?= base_url()."uploads/testinomial/profile/".$cmt['profile'] ?>" alt="<?= $cmt['name'] ?>" class="img-circle" width="100" height="auto">
            <h2> <?= $cmt['comment_title'] ?> </h2>
            <p> <?= $cmt['comments'] ?> </p>
            <h4><ins><?= $cmt['name'] ?> </ins> <small>posted at <?= $cmt['created_at'] ?> </small> </h4>
        </div>
            <hr>
        <?php } ?>
    </div>

</section>

<?php $this->load->view('common_front/footer'); ?>
