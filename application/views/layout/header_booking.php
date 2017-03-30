<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7/dashboard_4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2017 13:47:49 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>gofutsal!</title>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

</head>

<body class="top-navigation">

    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom white-bg">
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <i class="fa fa-reorder"></i>
                </button>
                <a href="#" class="navbar-brand">gofutsal!</a>
            </div>
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="login.html">
                            <i class="fa fa-sign-in"></i> Masuk
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa fa-file-text-o"></i> Daftar
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        </div>
        
        <div class="content">
           <?php $this->load->view('pages/content_booking'); ?>            
        </div>

        <div class="footer">
            <div>
                <strong>Copyright</strong> gofutsal &copy; 2017
            </div>
        </div>

        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url(); ?>assets/js/inspinia.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/pace/pace.min.js"></script>

    <!-- Flot -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/flot/jquery.flot.resize.js"></script>


    <!-- Peity -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/peity/jquery.peity.min.js"></script>
    <!-- Peity demo -->
    <script src="<?php echo base_url(); ?>assets/js/demo/peity-demo.js"></script>


    

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7/dashboard_4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2017 13:47:49 GMT -->
</html>
