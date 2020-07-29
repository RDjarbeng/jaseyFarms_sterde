<?php require_once ('./includes/header.php'); ?>


<body>

    <div id="wrapper">
        <?php require_once ('./includes/nav.php'); ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Content Wrapper. Contains page content -->
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Welcome
                        <small><?php echo htmlspecialchars($_SESSION["username"]); ?></small><br><span> <small>What
                                would you like to do today?</span></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content" d-flex>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row flex">
                        <!-- Left col -->

                        <div class="card" style="padding: 0 15px;">
                            <div class="card-body" style="padding-bottom: 1%">
                                <h4 class="card-title">Edit pages</h4>
                                <p class="card-text">
                                    <span> <a href="pages.php" class="btn btn-primary">Go to pages</a> </span>
                                </p>

                            </div>
                            <img class="card-img-bottom" src="<?php echo display_image('m4.jpg'); ?>" alt="Card image"
                                style="width:100%; height:300px;">
                        </div>
                        <!-- /.Left col -->
                        <!-- right col -->
                    </div>
                    <!-- /.row (main row) -->

                </section>

            </div>
        </div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script>
    $.widget.bridge('uibutton', $.ui.button);
    </script>

</body>

</html>