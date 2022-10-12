<script src="<?php echo base_url(); ?>public/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery2.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // get domain list while type input search button
        $("#country").on("keyup", function() {
            var country = $(this).val();
            if (country !== "") {
                $.ajax({
                    url: "<?= base_url("admin/domain") ?>",
                    type: "POST",
                    cache: false,
                    data: {
                        domain1: country
                    },
                    success: function(data) {
                        $("#countrylist").html(data);
                        $("#countrylist").fadeIn();
                    },
                    error: function() {
                        console.warn("frontend ajax errors");
                    }
                });
            }
        });
        // get domain list while click in input search button
        $("#country").on("click", function() {
            $.ajax({
                url: "<?= base_url("admin/domain") ?>",
                type: "POST",
                cache: false,
                data: {
                    domain: "ok"
                },
                success: function(data) {
                    // console.warn(data);
                    $("#countrylist").html(data);
                    $("#countrylist").fadeIn();
                },
                error: function() {
                    console.warn("frontend ajax errors");
                }
            });
        });

        // get text and fill to input value and set domain value to session driver
        $(document).on("click", ".countrylist li", function() {
            let domainText = $(this).text();
            $('#country').val(domainText);
            $('#countrylist').fadeOut("fast");
            // set domain name in session
            $.ajax({
                url: "<?= base_url("admin/domain") ?>",
                type: "POST",
                cache: false,
                data: {
                    setDomain: domainText,
                },
                success: function(data) {
                    // console.warn(data);
                    if (data == 200) {
                        // console.warn("session data set");
                        location.href = "<?php echo base_url("admin/dashboard"); ?>";
                    } else if (data == 404) {
                        console.wrn("sessino data does not exist");
                    } else {
                        console.warn(data)
                    }
                },
                error: function() {
                    console.warn("frontend ajax errors while creating domain session");
                }
            });

        });

        // hide domain list whenever click anyhwere in the doucment except input search button
        $(document).click(function() {
            var container = $("#countrylist");
            if (!container.is(event.target) && !container.has(event.target).length) {
                container.hide();
            }
        });
    });
</script>

<script src="<?php echo base_url(); ?>public/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/jRespond.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/nav-accordion.js"></script>
<script src="<?php echo base_url(); ?>public/js/hoverintent.js"></script>
<script src="<?php echo base_url(); ?>public/js/waves.js"></script>
<script src="<?php echo base_url(); ?>public/js/switchery.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.loadmask.js"></script>
<script src="<?php echo base_url(); ?>public/js/icheck.js"></script>
<script src="<?php echo base_url(); ?>public/js/select2.js"></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap-filestyle.js"></script>
<script src="<?php echo base_url(); ?>public/js/bootbox.js"></script>
<script src="<?php echo base_url(); ?>public/js/animation.js"></script>
<script src="<?php echo base_url(); ?>public/js/colorpicker.js"></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>public/js/sweetalert.js"></script>
<script src="<?php echo base_url(); ?>public/js/moment.js"></script>
<script src="<?php echo base_url(); ?>public/js/summernote.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/calendar/fullcalendar.js"></script>
<!--CHARTS-->
<script src="<?php echo base_url(); ?>public/js/chart/sparkline/jquery.sparkline.js"></script>
<script src="<?php echo base_url(); ?>public/js/chart/easypie/jquery.easypiechart.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/chart/flot/excanvas.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/chart/flot/jquery.flot.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/chart/flot/jquery.flot.time.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/chart/flot/jquery.flot.stack.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/chart/flot/jquery.flot.axislabels.js"></script>
<script src="<?php echo base_url(); ?>public/js/chart/flot/jquery.flot.resize.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/chart/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/chart/flot/jquery.flot.spline.js"></script>
<script src="<?php echo base_url(); ?>public/js/chart/flot/jquery.flot.pie.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/chart.init.js"></script>
<script src="<?php echo base_url(); ?>public/js/smart-resize.js"></script>
<script src="<?php echo base_url(); ?>public/js/layout.init.js"></script>
<script src="<?php echo base_url(); ?>public/js/matmix.init.js"></script>
<script src="<?php echo base_url(); ?>public/js/retina.min.js"></script>
<!--Data Tables-->
<script src="<?php echo base_url(); ?>public/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>public/js/dataTables.responsive.js"></script>
<script src="<?php echo base_url(); ?>public/js/dataTables.tableTools.js"></script>
<script src="<?php echo base_url(); ?>public/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>public/js/stacktable.js"></script>
<script src="<?php echo base_url(); ?>public/js/daterangepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap/web-customize.js"></script>
</body>

<!-- Mirrored from lab.westilian.com/matmix/list-view/dashboard-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jul 2015 10:29:40 GMT -->

</html>
