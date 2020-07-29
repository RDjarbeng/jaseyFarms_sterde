   <?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

   <!-- Navigation -->
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <!-- Brand and toggle get grouped for better mobile display -->
       <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="index.php">Sterde Website Admin</a>
       </div>
       <!-- Top Menu Items -->
       <ul class="nav navbar-right top-nav">
           <li><a target="_blank" href="../"> View Site</a> </li>

           <li class="nav-item dropdown">
               <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                   <?php echo htmlspecialchars($_SESSION["username"]); ?> <b class="caret"></b></a>
               <ul class="dropdown-menu">
                   <li>
                       <a class="dropdown-item" href="reset_password.php"><i class="dropdown-item fa fa-fw fa-gear"></i>
                           Reset Password</a>
                   </li>

                   <li>
                       <a href="logout.php" class="dropdown-item"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                   </li>
               </ul>
           </li>

       </ul>
       <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
       <div class="collapse navbar-collapse navbar-ex1-collapse" style="background: #010531;">
           <ul class="nav navbar-nav side-nav flex-column" style="background: #020a5ded; height: 100%;">
               <li class="nav-item">
                   <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
               </li>
               <li class="nav-item">
                   <!-- <a href="javascript:;" data-toggle="collapse" data-target="#pages"><i class="fa fa-fw fa-table"></i> Pages <i class="fa fa-fw fa-caret-down"></i></a> -->

                   <a data-toggle="collapse" data-target="#pages"><i class="fa fa-fw fa-table"></i>
                       Pages <i class="fa fa-fw fa-caret-down"></i></a>
                   <ul id="pages" class="collapse">
                       <li>
                           <a href="pages.php">View All Pages</a>
                       </li>
                       <!-- <li>
                                <a href="new_page.php">Add New Page</a>
                            </li>-->
                   </ul>
               </li>
               <li class="nav-item">
                   <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-user"></i>
                       Users <i class="fa fa-fw fa-caret-down"></i></a>
                   <ul id="users" class="collapse">
                       <li>
                           <a href="users.php">View All Users</a>
                       </li>
                       <li>
                           <a href="create_user.php">Add New User</a>
                       </li>
                   </ul>
               </li>
           </ul>
       </div>
       <!-- /.navbar-collapse -->
   </nav>