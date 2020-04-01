
<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">

    <!-- Favicon icon -->

    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('images/favicon.pn')); ?>g">

    <title>Admin Press Admin Template - The Ultimate Bootstrap 4 Admin Template</title>

    <!-- Bootstrap Core CSS -->

    <link href="<?php echo e(asset('plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('plugins/footable/css/footable.core.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('plugins/bootstrap-select/bootstrap-select.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

    
    <link href="<?php echo e(asset('plugins/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- You can change the theme colors from here -->

    <link href="<?php echo e(asset('css/colors/blue-dark.css')); ?>" id="theme" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]-->

</head>



<body class="fix-header card-no-border">

    <!-- ============================================================== -->

    <!-- Preloader - style you can find in spinners.css -->

    <!-- ============================================================== -->

    <?php echo $__env->make('layout.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- ============================================================== -->

    <!-- Main wrapper - style you can find in pages.scss -->

    <!-- ============================================================== -->

    <div id="main-wrapper">

        <!-- ============================================================== -->

        <!-- Topbar header - style you can find in pages.scss -->

        <!-- ============================================================== -->

        <?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- ============================================================== -->

        <!-- End Topbar header -->

        <!-- ============================================================== -->

        <!-- ============================================================== -->

        <!-- Left Sidebar - style you can find in sidebar.scss  -->

        <!-- ============================================================== -->

        <?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- ============================================================== -->

        <!-- End Left Sidebar - style you can find in sidebar.scss  -->

        <!-- ============================================================== -->

        <!-- ============================================================== -->

        <!-- Page wrapper  -->

        <!-- ============================================================== -->

        <div class="page-wrapper">

            <!-- ============================================================== -->

            <!-- Bread crumb and right sidebar toggle -->

            <!-- ============================================================== -->

            <div class="row page-titles">

                <div class="col-md-5 align-self-center">

                    <h3 class="text-themecolor">Sims</h3>

                </div>

            </div>

            <!-- ============================================================== -->

            <!-- End Bread crumb and right sidebar toggle -->

            <!-- ============================================================== -->

            <!-- ============================================================== -->

            <!-- Container fluid  -->

            <!-- ============================================================== -->

            <div class="container-fluid">

                <!-- ============================================================== -->

                <!-- Start Page Content -->

                <!-- ============================================================== -->

                <?php echo $__env->yieldContent('content'); ?>

                <!-- ============================================================== -->

                <!-- End PAge Content -->

                <!-- ============================================================== -->

                <!-- ============================================================== -->

                <!-- Right sidebar -->

                <!-- ============================================================== -->

                <!-- .right-sidebar -->

                <?php echo $__env->make('layout.rightbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!-- ============================================================== -->

                <!-- End Right sidebar -->

                <!-- ============================================================== -->

            </div>

            <!-- ============================================================== -->

            <!-- End Container fluid  -->

            <!-- ============================================================== -->

            <!-- ============================================================== -->

            <!-- footer -->

            <!-- ============================================================== -->

            <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- ============================================================== -->

            <!-- End footer -->

            <!-- ============================================================== -->

        </div>

        <!-- ============================================================== -->

        <!-- End Page wrapper  -->

        <!-- ============================================================== -->

    </div>

    <!-- ============================================================== -->

    <!-- End Wrapper -->

    <!-- ============================================================== -->

    <!-- ============================================================== -->

    <!-- All Jquery -->

    <!-- ============================================================== -->

    <script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>

    <!-- Bootstrap tether Core JavaScript -->

    <script src="<?php echo e(asset('plugins/bootstrap/js/popper.min.js')); ?>"></script>

    <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>

    <!-- slimscrollbar scrollbar JavaScript -->

    <script src="<?php echo e(asset('js/jquery.slimscroll.js')); ?>"></script>

    <!--Wave Effects -->

    <script src="<?php echo e(asset('js/waves.js')); ?>"></script>

    <!--Menu sidebar -->

    <script src="<?php echo e(asset('js/sidebarmenu.js')); ?>"></script>

    <!--stickey kit -->

    <!--Custom JavaScript -->

    <script src="<?php echo e(asset('js/custom.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/footable/js/footable.all.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/bootstrap-select/bootstrap-select.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('js/footable-init.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/sticky-kit-master/dist/sticky-kit.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/sparkline/jquery.sparkline.min.js')); ?>"></script>

    <!-- ============================================================== -->

    <!-- Style switcher -->

    <!-- ============================================================== -->

   <script>
        $('#mdate').bootstrapMaterialDatePicker({ weekStart: 0, time: false });

    $('#timepicker').bootstrapMaterialDatePicker({ format: 'HH:mm', time: true, date: false });

    $('#date-format').bootstrapMaterialDatePicker({ format: 'dddd DD MMMM YYYY - HH:mm' });



    $('#min-date').bootstrapMaterialDatePicker({ format: 'DD/MM/YYYY HH:mm', minDate: new Date() });

    jQuery('.mydatepicker, #datepicker').datepicker();

    jQuery('#datepicker-autoclose').datepicker({

        autoclose: true,

        todayHighlight: true

    });

    jQuery('#date-range').datepicker({

        toggleActive: true

    });

    jQuery('#datepicker-inline').datepicker({

        todayHighlight: true

    });

    // Daterang
    </script>


    <script src="<?php echo e(asset('plugins/styleswitcher/jQuery.style.switcher.js')); ?>"></script>
<?php echo $__env->yieldContent('modals'); ?>
</body>



</html>

<?php /**PATH /home/user1/Dokumen/project-laravel/LaravelPert5/resources/views/layout/app.blade.php ENDPATH**/ ?>