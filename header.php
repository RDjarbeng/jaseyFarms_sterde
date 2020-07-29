<?php
require_once('config.php');//contains database login information and functions


//home page details, title and logo
$title = "Jasey Farms";
$logo= "static/img/JaseyFarms_new_full_Logo.jpeg";
$error="";
$status = "d-none";

$table = HOMEPAGE_DETAILS;

$result = select_all($table);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		$title = $row['title'];//fetch title and logo from the database
		$logo = get_image($row['logo']);
		
		
	  }
	}else {
	  $error="Database connectivity error";
	  $status="d-block";
		debug_to_console("0 rows found in".$table);
}
//close_Connection();

//check for open connection and close it
     //Object oriented style
    //mysqli_close($connection); //Procedural style 


//$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php echo $title; ?></title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="static/img/Logo.JPG" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- CSS Files -->
    <link href="static/tpcp/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/tpcp/icofont/icofont.min.css" rel="stylesheet">
    <link href="static/tpcp/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="static/tpcp/animate.css/animate.min.css" rel="stylesheet">
    <link href="static/tpcp/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="static/tpcp/venobox/venobox.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="static/css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="50">

    <!--  Header  -->
    <header id="nav1">
        <div class="container d-flex">
            <div class="logo mr-auto " style="width:  40%"> <a href="index.php"><img src="<?php echo $logo ?>"
                        alt="Logo" class="img-fluid" width="50%"></a>
                <!--      <h4 style="display: inline-block"> <strong style="color:white"></strong></h4>-->
            </div>
            <div id="navbar">
                <nav class="nav-menu navbar navbar-expand-md ml-auto d-none d-lg-inline-block">
                    <ul class="nav navbar-nav">
                        <li class="nav-item " id="prod-nav"><a class="nav-link" href="index.php#products">Our
                                Product</a></li>
                        <li class="nav-item" id="order-nav"><a class="nav-link" href="index.php#order">Order Now</a>
                        </li>
                        <li class="nav-item" id="about-nav"><a class="nav-link" href="index.php#about">About Us</a></li>
                        <li class="nav-item" id="port-nav"><a class="nav-link" href="portfolio.php">Our Vegetables</a>
                        </li>
                        <li class="nav-item" id="contact-nav"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <div>
                    <!-- .nav-menu -->

                </div>
    </header>
    <script>
    //highlight the current nav item
    var btnContainer = document.getElementById("navbar");

    // Get all buttons with class="btn" inside the container
    var btns = btnContainer.getElementsByClassName("nav-item");

    // Loop through the buttons and add the active class to the current/clicked button
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");

            // If there's an active class
            if (current.length > 0) {
                current[0].className = current[0].className.replace(" active", "");
            }

            // Add the active class to the current/clicked button
            this.className += " active";
        });
    }
    </script>

    <!-- Getting the scrollspy to work -->
    <!--
<script>
$('body').scrollspy({target:'#navbar', offset:50});
console.log("Scrollspy");
$document.ready(function(){
            $('[data-spy="scroll"]').each(function () {
                var $spy = $(this).scrollspy('refresh')
                });
				console.log("Scrollspy");
        });

$document.ready(function(){
	console.log("Scrollspy");
$('body').scrollspy({ target: '.navbar' });
}
</script>
-->