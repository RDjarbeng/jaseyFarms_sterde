<?php require_once ('./includes/header.php'); ?>


<body>

    <div id="wrapper">
        <?php require_once ('./includes/nav.php'); ?>

        <div id="page-wrapper">
            <div class="container-fluid">

                <?php 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "<p>Oops! Something went wrong. Please try again later.</p>";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
     $pass= trim(mysqli_real_escape_string($conn, $_POST["password"]));
    if(empty($pass)){
        $password_err = "Please enter a password.";       
    } elseif(strlen($pass) < 6){
        $password_err = "Password must have at least 6 characters.";
        } else{
            $password = $pass;
        }
    
    // Validate confirm password
    $c_pass= trim(mysqli_real_escape_string($conn, $_POST["confirm_password"]));
    if(empty($c_pass)){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = $c_pass;
        if( $password != $confirm_password){
            $confirm_password_err = "Password did not match.";
        }else{
                    // Check input errors before inserting in database
            if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
                
                // Prepare an insert statement
                $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
                
                if($stmt = mysqli_prepare($con, $sql)){
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
                    
                    // Set parameters
                    $param_username = $username;
                    $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
                    
                    // Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmt)){
                        // Redirect to login page
                        //header("location: login.php");
                        
                        //display success message
                        echo "<div><p class='success'>User successfully created</p></div>";


                    } else{
                        echo "<p class='danger'>Something went wrong. Please try again later.</p>";
                    }

                    // Close statement
                    mysqli_stmt_close($stmt);
                    // Close connection
                    mysqli_close($con);
                    exit;
                }
            }
        }
    }
    
}
?>
                <div class="wrapper">
                    <h2>Create User</h2>
                    <p>Please fill this form to create an admin account.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                            <span class="help-block"><?php echo $username_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control"
                                value="<?php echo $password; ?>">
                            <span class="help-block"><?php echo $password_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                            <label>Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control"
                                value="<?php echo $confirm_password; ?>">
                            <span class="help-block"><?php echo $confirm_password_err; ?></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <input type="reset" class="btn btn-default" value="Reset">
                        </div>
                    </form>
                </div>
</body>

</html>


</div>
</div>

<?php require_once ('./includes/footer.php'); ?>