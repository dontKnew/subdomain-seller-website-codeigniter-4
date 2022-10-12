<?= $this->extend("app.php") ?>
<?= $this->section("user-contents") ?>
<!--Main Slider-->
<section class="main-slider style2">
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_two" data-version="5.4.1">
            <ul>
                <?php foreach ($slider as $s): ?>
                    <li data-description="Slide Description" data-easein="default" data-easeout="default"
                        data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default"
                        data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5=""
                        data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0"
                        data-saveperformance="off" data-slotamount="default"
                        data-thumb="<?= base_url("backend/img/slider/original/" . $s['image']) ?>"
                        data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                             data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                             src="<?= base_url("backend/img/slider/compress/" . $s['image']) ?>">

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                             data-type="text" data-height="none" data-width="['800','800','700','400']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']" data-voffset="['-80','-95','-80','-90']"
                             data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content left-slide">
                                <div class="big-title">
                                    <?= $s['title'] ?>
                                </div>
                            </div>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                             data-type="text" data-height="none" data-width="['800','800','700','400']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']" data-voffset="['105','90','75','65']"
                             data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;">

                            <div class="slide-content left-slide">
                                <div class="btn-box">
                                    <a class="html5lightbox play-button" title="<?= $s['yt_video_title'] ?>"
                                       href="https://www.youtube.com/watch?v=<?= $s['youtube_url'] ?>">
                                        <span class="flaticon-play-button"></span>
                                    </a>
                                    <a class="slide-style2-button" href="#"><?= $s['yt_video_title'] ?></a>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>
<!--End Main Slider-->

<!--Start about Style2 Area-->
<section class="about-style2-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-style2-text">
                    <div class="sec-title">
                        <p>About Company</p>
                        <div class="title">E Service Apartments</div>
                    </div>
                    <div class="text">
                        <p>eService Apartment offers fully-furnished eco-friendly & economical serviced apartments which
                            contains fully equipped modular kitchen, spacious living area and large bathroom.
                        </p>
                        <p>We offer all the creature comforts of home and come with budget-friendly price with best
                            services at our service apartments in Delhi, Gurgaon, Noida & Goa. </p>
                        <p>E Service Apartment has a great collection of fully furnished serviced apartments (Studio, 1
                            BHK, 2 BHK, 3 BHK & 4 BHK) in the most sophisticated and posh residential areas which are
                            also close to corporate houses, shopping
                            malls, hospitals and city centre. </p>
                        <p>These self-catered serviced apartments are full of natural resource light and air. You can
                            easily select the apartment that suits your budget & style from these deluxe to premium
                            serviced apartments.</p>
                        <p>Our 24-hour security services as well as closed-circuit TV within most residences ensure
                            peace of mind and secure living for you & your family. Our housekeeping service visits your
                            residence according to your schedule,
                            not ours. </p>
                    </div>

                    <div class="button">
                        <a class="btn-one" href="#">More About Us<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-style2-image-box">
                    <div class="pattern wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms"></div>
                    <div class="image">
                        <img src="<?= base_url("frontend/images/resources/about-style2-image.jpg") ?>"
                             alt="Awesome Image">
                        <div class="overlay-box">
                            <div class="title">
                                <h1>27 <span>Years Experience<br> in this Field</span></h1>
                            </div>
                            <div class="button">
                                <a href="#"><span class="icon-back"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End about Style2 Area-->

<!--Start Latest Projects Area-->
<section class="latest-projects-area">
    <div class="container">
        <div class="sec-title">
            <p>Our Services</p>
            <div class="title clr-white">Serviced Apartment - <span>Highlights</span></div>
        </div>
    </div>
    <div class="container-fluid latest-projects-v3">
        <div class="row">
            <div class="col-xl-12">
                <div class="project-carousel-v3 owl-carousel owl-theme">

                    <?php foreach ($highlight as $h): ?>
                        <!--Start Single excellent project-->
                        <div class="single-project-style3">
                            <div class="img-holder">
                                <img src="<?= base_url("backend/img/apartment/compress/" . $h[0]['image']) ?>"
                                     alt="<?= $h[0]['title'] ?>" width="100" height="100">
                                <div class="overlay-content">
                                    <div class="inner-content">
                                        <div class="links-icons">
                                            <a href="<?= base_url() . $h[0]['states'] . ".html" ?>"><span
                                                        class="icon-link"></span> Click to View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="title-holder text-center">
                                <h3><?= $h[0]['title'] ?></h3>
                            </div>
                        </div>
                        <!--End Single excellent project-->
                    <?php endforeach; ?>
                </div>

            </div> <!--col-xl-12-->
        </div>
    </div>
</section>
<!--End Latest Projects Area-->

<!--Start faq area-->
<section class="faq-area ">
    <div class="container">
        <div class="sec-title">
            <p>FAQ’s</p>
            <div class="title">FAQ for Serviced Apartments</div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="">
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn ">
                                <h4>What is serviced apartments?</h4>
                            </div>
                            <div class="accord-content">
                                <p>We denounce with righteous indignation and dislike men who are so beguiled and
                                    demoralized by the charms of pleasure of the moment, so blinded by desire, that they
                                    cannot foresee the pain and trouble that are bound
                                    to ensue.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn ">
                                <h4>Why should you stay in serviced apartments?</h4>
                            </div>
                            <div class="accord-content ">
                                <p>We denounce with righteous indignation and dislike men who are so beguiled and
                                    demoralized by the charms of pleasure of the moment, so blinded by desire, that they
                                    cannot foresee the pain and trouble that are bound
                                    to ensue.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>How do I choose best service apartments?</h4>
                            </div>
                            <div class="accord-content">
                                <p>We denounce with righteous indignation and dislike men who are so beguiled and
                                    demoralized by the charms of pleasure of the moment, so blinded by desire, that they
                                    cannot foresee the pain and trouble that are bound
                                    to ensue.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why service apartments are better than hotels?</h4>
                            </div>
                            <div class="accord-content">
                                <p>We denounce with righteous indignation and dislike men who are so beguiled and
                                    demoralized by the charms of pleasure of the moment, so blinded by desire, that they
                                    cannot foresee the pain and trouble that are bound
                                    to ensue.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="">
                    <div class="accordion-box">
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Difference between hotel and serviced apartments?</h4>
                            </div>
                            <div class="accord-content">
                                <p>We denounce with righteous indignation and dislike men who are so beguiled and
                                    demoralized by the charms of pleasure of the moment, so blinded by desire, that they
                                    cannot foresee the pain and trouble that are bound
                                    to ensue.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are benefits of choosing serviced apartments?</h4>
                            </div>
                            <div class="accord-content">
                                <p>We denounce with righteous indignation and dislike men who are so beguiled and
                                    demoralized by the charms of pleasure of the moment, so blinded by desire, that they
                                    cannot foresee the pain and trouble that are bound
                                    to ensue.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What are the amenities offered by serviced apartments?</h4>
                            </div>
                            <div class="accord-content">
                                <p>We denounce with righteous indignation and dislike men who are so beguiled and
                                    demoralized by the charms of pleasure of the moment, so blinded by desire, that they
                                    cannot foresee the pain and trouble that are bound
                                    to ensue.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->

                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Which are the best service apartments for long stays?</h4>
                            </div>
                            <div class="accord-content">
                                <p>We denounce with righteous indignation and dislike men who are so beguiled and
                                    demoralized by the charms of pleasure of the moment, so blinded by desire, that they
                                    cannot foresee the pain and trouble that are bound
                                    to ensue.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End faq area-->


<!--Start slogan style2 area-->
<section class="slogan-style2-area"
         style="background-image:url("<?= base_url("frontend/images/parallax-background/slogan-bg.jpg") ?>">
    <div class="icon-holder">
        <span class="flaticon-car"></span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content">
                    <div class="title" style="background: black; margin-bottom: ">
                        <h1>We hope that you’d provide us the honor and opportunity to serve you !</h1>
                    </div>
                    <div class="button">
                        <a class="btn-one call-us" href="tel:+91 9999 10 5555"><i class="icon-music"></i>+91 9999 10
                            5555</a>
                        <a class="btn-one" href="#">Book now<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End slogan style2 area-->

<!--Start Testimonial Style2 Area-->
<?php foreach($state as $s): ?>
<section class="testimonial-style2-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="sec-title float-left">
                    <p>Our Latest Apartments</p>
                    <div class="title">Best Service Apartments <span>in <?= $s['name'] ?></span></div>
                </div>
                <div class="more-blog-button float-right">
                    <a class="btn-two" href="#">Viw More<span class="flaticon-next"></span></a>
                </div>
            </div>
        </div>
        <!--apartment start-->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="testimonial-style2-content">
                    <div class="testimonial-carousel owl-carousel owl-theme">
                        <!--Start Single apartment -->
                        <?php foreach($apartment as $a): if($s['name']==$a['states']): ?>
                        <div class="single-blog-post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="img-holder">
                                <img src="<?= base_url("backend/img/apartment/compress/".$a['image'])?>" alt="<?= ucwords($a['title']) ?> Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link-icon">
                                            <a href="#"><span class="flaticon-zoom"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="meta-box">
                                    <ul class="meta-info">
                                        <li>Price Starts : <a href="#"> Rs. <?= $a['price_start'] ?> </a></li>
                                        <li><a href="#"> <?= ucwords($a['shift_time']) ?> onwards</a></li>
                                    </ul>
                                </div>
                                <h3 class="blog-title"><a href="#"><?= ucwords($a['title']) ?></a></h3>

                            </div>
                        </div>
                        <?php endif; endforeach; ?>
                        <!--End Single Testimonial style2 -->

                    </div>
                </div>
            </div>
        </div>
        <!--apartment end-->
    </div>
</section>
<?php endforeach; ?>
<!--End Testimonial Style2 Area-->

<!--Start Working Process Area-->

<section class="working-process-area">
    <div class="container">
        <div class="sec-title text-center">
            <p>Our Apartment</p>
            <div class="title">Apartments<span></span></div>
        </div>
        <div class="row">
            <!--Start Single Working Process-->
            <?php $i = 1; foreach ($state as $s): ?>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="single-working-process text-center">
                        <div class="top-box"><span><?= $i ?></span></div>
                        <div class="inner text-left">
                            <h3>Serviced Apartments in <?= ucwords($s['name']) ?></h3>
                            <ul>
                                <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Serviced Apartments in Saket</li>

                                <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Serviced Apartments in Dwarka</li>

                                <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Serviced Apartments in GK 1 & 2
                                </li>

                                <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Serviced Apartments in Green Pak
                                </li>

                                <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Serviced Apartments in Panchsheel
                                </li>

                                <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Serviced Apartments in Vasant Kunj
                                </li>

                                <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Serviced Apartments in Defence
                                    Colony
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Single Working Process-->
            <?php $i++;  endforeach; ?>

        </div>
    </div>
</section>
<!--End Working Process Area-->

<!--Start slogan area-->
<section class="slogan-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content flex-box-two fix">
                    <div class="title float-left">
                        <h3>Wanna Work With Our Profesional Team? Make an Appointment.</h3>
                    </div>
                    <div class="button float-right">
                        <a class="btn-one" href="#">Make an Appointment<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End slogan area-->

<?= $this->endSection("user-contents") ?>
