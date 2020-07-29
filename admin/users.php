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
                            View all users
                        </h3>
                       </div>
  <table class="table table-bordered">
                            <tr>
                                <th width="10%"> Id</th>
                                <th width="20%">User Id</th>
                                <th width="20%">Username</th>
                                <th width="20%">User Ip</th>
                                <th width="60%">Login Time</th>
                                                            
                            </tr>

                            <?php 
                $query = "SELECT * FROM userlog" ;
                $result = mysqli_query($con, $query);
                while($data = mysqli_fetch_assoc($result))
                {
                $userId = $data['userId'];
                $username = $data['username'];             
                $userIp = $data['userIp'];             
                $logintime = $data['logintime'];             

            ?>
            

                            <tr>

                                <td><?php echo $data['id']; ?></td>
                                <td><?php echo $userId ; ?></td>
                                <td><?php echo $username; ?></td>
                                <td><?php echo $userIp; ?></td>
                                <td><?php echo $logintime; ?></td>

                                 <?php
                            }
                            
                        ?>
                            </tr>
                        </table>
             </div>
             </div>

           <?php require_once ('./includes/footer.php'); ?>
