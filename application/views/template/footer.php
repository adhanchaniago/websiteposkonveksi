</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="<?= base_url('assets/dashboard/') ?>bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/dashboard/') ?>bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/dashboard/') ?>bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/dashboard/') ?>bower_components/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?= base_url('assets/dashboard/') ?>bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?= base_url('assets/dashboard/') ?>bower_components/modernizr/js/modernizr.js"></script>
<!-- Chart js -->
<script type="text/javascript" src="<?= base_url('assets/dashboard/') ?>bower_components/chart.js/js/Chart.js"></script>

<!-- Date-dropper js -->
<script type="text/javascript" src="<?= base_url('assets/dashboard/') ?>bower_components/datedropper/js/datedropper.min.js"></script>
<!-- data-table js -->
<script src="<?= base_url('assets/dashboard/') ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/dashboard/') ?>bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/dashboard/') ?>bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/dashboard/') ?>bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<!-- i18next.min.js -->
<script src="<?= base_url('assets/dashboard/') ?>pages/user-profile.js"></script>


<!-- amchart js -->
<script src="<?= base_url('assets/dashboard/') ?>pages/widget/amchart/amcharts.js"></script>
<script src="<?= base_url('assets/dashboard/') ?>pages/widget/amchart/serial.js"></script>
<script src="<?= base_url('assets/dashboard/') ?>pages/widget/amchart/light.js"></script>
<script src="<?= base_url('assets/dashboard/') ?>js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/dashboard/') ?>js/SmoothScroll.js"></script>
<script src="<?= base_url('assets/dashboard/') ?>js/pcoded.min.js"></script>
<!-- custom js -->
<script src="<?= base_url('assets/dashboard/') ?>js/vartical-layout.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/dashboard/') ?>pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="<?= base_url('assets/dashboard/') ?>js/script.min.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script>
    $('.border-checkbox').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('dashboard/ubahakses'); ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('dashboard/kelolamenu/'); ?>" + roleId;
            }
        });

    });
</script>
</body>

</html>