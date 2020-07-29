<?php require_once ('./includes/header.php'); ?>

<body>

    <div id="wrapper">
        <?php require_once ('./includes/nav.php'); ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            All Pages
                        </h3>
                    </div>


                    <div class="col-lg-12">
                        <table class="table table-bordered">
                            <tr>
                                <th width="30%">Page Id</th>
                                <th width="50%">Page Name</th>
                                <th width="30%">Operation</th>

                            </tr>
                            <tr>
                                <td>01</td>
                                <td>Home Page</td>
                                <td><a href="edithome.php" class="btn btn-success">Edit</a></td>
                            </tr>


                            <tr>
                                <td>02</td>
                                <td>About Page</td>
                                <td><a href="editabout.php" class="btn btn-success">Edit</a></td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>Contact Page</td>
                                <td><a href="editcontact.php" class="btn btn-success">Edit</a></td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>Portfolio Page</td>
                                <td><a href="editportfolio.php" class="btn btn-success">Edit</a></td>
                            </tr>

                        </table>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php require_once ('./includes/footer.php'); ?>