<!-- Welcome banner  style-->
<div class="nasir-subscribe-form-row row">
    <div class="container">
        <div class="row this-dashed">
            <div class="textmain">
                <ul>
                    <li><a href=""><img src="<?= base_url()."public/frontend/images/secured-1.png"?>"></a></li>
                    <li><a href=""><img src="<?= base_url()."public/frontend/images/secured-2.png"?>"></a></li>
                    <li><a href=""><img src="<?= base_url()."public/frontend/images/secured-3.png"?>"></a></li>
                    <li><a href=""><img src="<?= base_url()."public/frontend/images/secured-4.png"?>"></a></li>
                    <li><a href=""><img src="<?= base_url()."public/frontend/images/secured-5.png"?>"></a></li>
                </ul>
            </div>
            <form action="#" method="post" class="this-form input-group">
                <a href="" class="res-btn"><?= $textHome['button_payment'] ?><i class="fa fa-arrow-right"></i></a></span>
            </form>
        </div>
    </div>
</div>
<!-- Welcome banner  style-->
<!-- footer  style-->
<footer>
    <section class="clearfix footer-wrapper">
        <section class="container clearfix footer-pad">

            <div class="widget widget-links col-md-3 col-sm-6">
                <h4 class="widget_title"> <?= $textHome['accommdation_title'] ?> </h4>
                <div class="widget-contact-list">
                    <ul>
                        <?php foreach($accommodation as $room ){ ?>
                        <li><a href="https://wa.me/919999105555" target="_blank"><?= $room['name'] ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="widget widget-links col-md-3 col-sm-6">
                <h4 class="widget_title"><?= $textHome['package_title'] ?>  </h4>
                <div class="widget-contact-list">
                    <ul>
                        <?php foreach($package as $p ){ ?>
                            <li><a href="https://wa.me/919999105555" target="_blank"><?= $p['name'] ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="widget widget-links col-md-3 col-sm-6">
                <h4 class="widget_title"><?= $textHome['event_title'] ?>  </h4>
                <div class="widget-contact-list">
                    <ul>
                        <?php foreach($amenities as $am ){ ?>
                            <li><a href="https://wa.me/919999105555" target="_blank"><?= $am['name'] ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="widget get-in-touch col-md-3 col-sm-6">
                <h4 class="widget_title">Get In Touch</h4>
                <div class="widget-contact-list">
                    <ul>
                        <li>
                            <a href="<?=$textHome['google_map_link'] ?>" target="_blank"> <i class="fa fa-map-marker"></i></a>
                            <div class="fleft location_address"><b><?=$textHome['city_name'] ?></b><br><?=$textHome['state_name'] ?>, <?=$textHome['country_name'] ?></div>
                        </li>
                        <li><i class="fa fa-phone"></i>
                            <div class="fleft contact_no"><a href="tel:+<?=$textHome['footer_phone_no'] ?>">+91-<?=$textHome['footer_phone_no'] ?></a> / <a
                                        href="tel:+<?=$textHome['footer_phone_no1'] ?>">+91-<?=$textHome['footer_phone_no1'] ?></a></div>
                        </li>
                        <li><i class="fa fa-envelope-o"></i>
                            <div class="fleft contact_mail"><a href="mailto:<?=$textHome['website_2nd_email'] ?>"><?=$textHome['website_2nd_email'] ?></a></div>
                        </li>
                    </ul>
                </div>
            </div>

        </section>
    </section>
    <section class="container clearfix footer-b-pad">
        <div class="footer-copy">
            <div class="pull-left fo-txt">
                <p><?=$textHome['copyright_line'] ?></p>
            </div>
        </div>
    </section>
</footer>
<!-- footer  style-->
<script src="<?= base_url()."public/frontend/js/jquery-2.2.4.min.js"?>"> </script>
<script src="<?= base_url()."public/frontend/js/bootstrap.min.js"?>"> </script>
<script type="text/javascript" src="<?= base_url()."public/frontend/public/js/jquery.bxslider.js"?>"> </script>
<!-- owl carousel-->
<script src="<?= base_url()."public/frontend/vendors/owlcarousel/owl.carousel.min.js"?>"> </script>
<script src="<?= base_url()."public/frontend/js/jquery.easing.min.js"?>"> </script>
<script src="<?= base_url()."public/frontend/js/jquery.mCustomScrollbar.concat.min.js"?>"> </script>
<script src="<?= base_url()."public/frontend/js/zebra_datepicker.js"?>"> </script>
<!-- jQuery appear-->
<script src="<?= base_url()."public/frontend/vendors/jquery-appear/jquery.appear.js"?>"> </script>
<!-- jQuery countTo-->
<script src="<?= base_url()."public/frontend/vendors/jquery-countTo/jquery.countTo.js"?>"> </script>
<script src="<?= base_url()."public/frontend/js/jquery.form.js"?>"> </script>
<script src="<?= base_url()."public/frontend/js/jquery.validate.min.js"?>"> </script>
<script src="<?= base_url()."public/frontend/js/contact.js"?>"> </script>
<script src="<?= base_url()."public/frontend/js/jquery.mixitup.min.js"?>"> </script>
<script src="<?= base_url()."public/frontend/js/jquery.fancybox.pack.js"?>"> </script>
<script src="<?= base_url()."public/frontend/vendors/jquery-ui-1.11.4/jquery-ui.min.js"?>"> </script>
<script src="<?= base_url()."public/frontend/js/custom.js"?>" > </script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js'></script>
<script>
    $(document).ready(function(){
        $('.popup-btn').click(function(){
            var popupBlock = $('#'+$(this).data('popup'));
            popupBlock.addClass('active')
                .find('.fade-out').click(function(){
                popupBlock.css('opacity','0').find('.popup-content').css('margin-top','350px');
                setTimeout(function(){
                    $('.popup').removeClass('active');
                    popupBlock.css('opacity','').find('.popup-content').css('margin-top','');
                }, 600);
            });
        });
    });
</script>
<!--photo gallery script -->
<script>

    $(document).ready(function() {

        var itemSelector = '.grid-item';

        var $container = $('#container').isotope({
            itemSelector: itemSelector,
            masonry: {
                columnWidth: itemSelector,
                isFitWidth: true
            }
        });

        //Ascending order
        var responsiveIsotope = [
            [480, 7],
            [720, 10]
        ];

        var itemsPerPageDefault = 12;
        var itemsPerPage = defineItemsPerPage();
        var currentNumberPages = 1;
        var currentPage = 1;
        var currentFilter = '*';
        var filterAtribute = 'data-filter';
        var pageAtribute = 'data-page';
        var pagerClass = 'isotope-pager';

        function changeFilter(selector) {
            $container.isotope({
                filter: selector
            });
        }


        function goToPage(n) {
            currentPage = n;

            var selector = itemSelector;
            selector += (currentFilter != '*') ? '[' + filterAtribute + '="' + currentFilter + '"]' : '';
            selector += '[' + pageAtribute + '="' + currentPage + '"]';

            changeFilter(selector);
        }

        function defineItemsPerPage() {
            var pages = itemsPerPageDefault;

            for (var i = 0; i < responsiveIsotope.length; i++) {
                if ($(window).width() <= responsiveIsotope[i][0]) {
                    pages = responsiveIsotope[i][1];
                    break;
                }



            }

            return pages;
        }

        function setPagination() {

            var SettingsPagesOnItems = function() {

                var itemsLength = $container.children(itemSelector).length;

                var pages = Math.ceil(itemsLength / itemsPerPage);
                var item = 1;
                var page = 1;
                var selector = itemSelector;
                selector += (currentFilter != '*') ? '[' + filterAtribute + '="' + currentFilter + '"]' : '';

                $container.children(selector).each(function() {
                    if (item > itemsPerPage) {
                        page++;
                        item = 1;
                    }
                    $(this).attr(pageAtribute, page);
                    item++;
                });

                currentNumberPages = page;

            }();

            var CreatePagers = function() {

                var $isotopePager = ($('.' + pagerClass).length == 0) ? $('<div class="' + pagerClass + '"></div>') : $('.' + pagerClass);

                $isotopePager.html('');

                for (var i = 0; i < currentNumberPages; i++) {
                    var $pager = $('<a href="javascript:void(0);" class="pager" ' + pageAtribute + '="' + (i + 1) + '"></a>');
                    $pager.html(i + 1);

                    $pager.click(function() {
                        var page = $(this).eq(0).attr(pageAtribute);
                        goToPage(page);
                    });

                    $pager.appendTo($isotopePager);
                }

                $container.after($isotopePager);

            }();

        }



        //Adicionando Event de Click para as categorias
        $('.filters a').click(function() {
            var filter = $(this).attr(filterAtribute);
            currentFilter = filter;

            setPagination();
            goToPage(1);


        });

        //Evento Responsivo
        $(window).resize(function() {
            itemsPerPage = defineItemsPerPage();
            setPagination();
        });



    });



    $(document).ready(function() {

        // filter items on button click
        $('.filter-button-group').on('click', 'li', function() {
            var filterValue = $(this).attr('data-filter');
            $('.grid').isotope({ filter: filterValue });
            $('.filter-button-group li').removeClass('active');
            $(this).addClass('active');
        });
    })


    $(document).ready(function() {

        // filter items on button click
        $('.isotope-pager').on('click', 'a', function() {
            var filterValue = $(this).attr('data-page');

            $('.isotope-pager a').removeClass('active');
            $(this).addClass('active');
        });
    })




    $(document).ready(function() {
        $('.popupimg').magnificPopup({
            type: 'image',
            mainClass: 'mfp-with-zoom',
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,

                duration: 300, // duration of the effect, in milliseconds
                easing: 'ease-in-out', // CSS transition easing function

                opener: function(openerElement) {

                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }

        });

        $("#contact-google-map > iframe").width("100%");

    });
</script>
<!--end photo gallery script-->
</body>
</html>
