<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/minton/layouts/horizontal/green/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jan 2020 18:34:54 GMT -->
<head>
        <meta charset="utf-8" />
        <title>MINI-CRM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="assets/libs/custombox/custombox.min.css" rel="stylesheet">
  <!-- Sweet Alert-->
  <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Pre-loader -->
        <div id="preloader">
            <div id="status">
                <div class="bouncingLoader"><div></div><div></div><div></div></div>
            </div>
        </div>
        <!-- End Preloader-->

        <!-- Navigation Bar-->
        <?php require_once('template/navbar.view.php'); ?>
        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="wrapper">
            <div class="container-fluid">
        <!-- Content -->
        <?= $content ?>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
                    
            </div> <!-- end container -->
        </div>
        <!-- Footer Start -->
        <?php require_once('template/footer.view.php'); ?>
        <!-- end Footer -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>
        <script src="assets/libs/peity/jquery.peity.min.js"></script>

        <!-- Sparkline charts -->
        <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- init js -->
        <script src="assets/js/pages/dashboard-1.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        <script src="assets/libs/custombox/custombox.min.js"></script>
        <script src="assets/js/pdfFromHTML.js"></script>
        <script src="assets/js/jspdf.js"></script>
        <script src="assets/js/pdf.js"></script>
        <!-- Sweet Alerts js -->
        <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

        <!-- Sweet alert init js-->
        <script src="assets/js/pages/sweet-alerts.init.js"></script>
    </body>

<!-- Mirrored from coderthemes.com/minton/layouts/horizontal/green/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jan 2020 18:36:47 GMT -->
</html>