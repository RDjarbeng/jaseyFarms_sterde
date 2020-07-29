<?php

require_once( 'config.php' ); //contains database login information, functions and constants(table names)

$contact = array();
$products = array();


$contact['location']= "Sunyani, Bono Region Ghana";
$contact['postal_address']= "P.O Box 19540 Accra North Ghana";
$contact['phone'] = " +233 244132705 | +233 264132705";
$contact['email'] = "oseph.wilson-sey@jaseyfarms.com | jaseyfarms@gmail.com";

$careers ="Presently, there are no employment opportunities.  However, we believe in working with brilliant minds seeking to support our company's objectives and mission. Kindly send us your profile and contact details, and we will reach you as and when opportunities arise. Thank you.";

$products[] ="Carrots";
$products[] ="Cabbage";
$products[] ="Pepper";
$products[] ="Spinach";
$products[] ="Tomatoes";
	
//refresh_connection();	


$temp =get_Careers();
if(!empty($temp)){
	$careers =$temp;
}

$temp =get_contactus();
if(!empty($temp)){
	$contact =$temp;
}
set_products();

close_Connection();

/* FUNCTIONS */
/*
function get_Careers(){
	
	$table = HOMEPAGE_FOOTER_CAREERS;
	
	$result = select_all($table);
	global $careers;
	if ( $result->num_rows > 0 ) {
			
		while ( $row = $result->fetch_assoc() ) {

			$careers = $row['careers'];	
			
		}
	} 
}


function get_contactus(){
	
$table = HOMEPAGE_FOOTER_CONTACTUS;


	
	
	$result = select_all($table);
	global $contact;

if ( $result->num_rows > 0 ) {
	$contact = array();
	while ( $row = $result->fetch_assoc() ) {
		
		$contact['location'] = $row['location'];

$contact['postal_address'] = $row['postal_address'];
$contact['digital_address'] = $row['digital_address'];

$phone1 = $row['phone1'];
$phone2 = $row['phone2'];

if(!empty($phone2)){
	$phone1= $phone1." | ".$phone2;
}
$contact['phone'] = $phone1;

 
$email1 = $row['email1'];
$email2 = $row['email2'];

if(!empty($email2)){
	$email1= $email1." | ".$email2;
}
$contact['email'] = $email1;
	}
}

}	
*/

function set_products(){
	
$table = HOMEPAGE_FOOTER_PRODUCTS;
	
	
	$result = select_all($table);

	global $products;
		

	if ( $result->num_rows > 0 ) {
		$products = array();
		$i=0;
		while ( $row = $result->fetch_assoc() ) {

			$products[$i] = $row['products'];
			$i++;

		}//debug_to_console($products);
	}
}

function get_products($item){
	echo<<<SEND
	<li><a href=""> $item</a></li>
SEND;
}
//debug_to_console($about );



?>

<footer id="footer"><br>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Links</h4>
                    <ul>
                        <li> <a href="index.php">Home</a></li>
                        <li> <a href="about.php">About us</a></li>
                        <li> <a href="portfolio.php">Products</a></li>
                        <li><a href="privacy.html">Privacy policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Products</h4>
                    <ul>
                        <?php foreach($products as $product){
			  get_products($product);
		  } ?>
                        <!--- <li><a href=""> Carrots</a></li>
            <li> <a href="">Cabbage </a></li>
            <li><a href="">Pepper </a></li>
            <li> <a href="">Spinach</a></li>
            <li><a href=""></a>Tomatoes</li>
			-->

                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p><strong>Location:</strong> <?php echo $contact['location']; ?><br> <strong>Digital
                            Address:</strong>
                        <?php echo $contact['digital_address']; ?><br>
                        <strong>Postal Address:</strong>
                        <?php echo $contact['postal_address']; ?> <br>
                        <strong>Phone:</strong>
                        <?php echo $contact['phone']; ?>
                        <br>
                        <strong>Email:</strong>
                        <?php echo $contact['email']; ?>
                        <br>
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 footer-info">
                    <h3> Careers</h3>
                    <p style="text-align: justify;">
                        <?php echo $careers; ?>
                    </p>
                    <div class="social-links mt-3"> <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> <a
                            href="#" class="facebook"><i class="bx bxl-facebook"></i></a> <a href="#"
                            class="instagram"><i class="bx bxl-instagram"></i></a> </div>
                    <br>
                    <button class="btnread">
                        <a href="contact.php" style="color:#fff;">Send mail</a>
                    </button>
                </div>
            </div>
        </div>
        <p class="copyright">
            &copy; <?php 
		//2020
		date_default_timezone_set("Africa/Accra");
echo date("Y");
		 ?>
            <strong><span>Jasey Farms</span></strong>. All Rights Reserved. Developed and Maintained by <a
                href="https://sterde.com">Sterde</a> </p>
    </div>
</footer>
<!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="static/tpcp/jquery/jquery.min.js"></script>
<script src="static/tpcp/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="static/tpcp/jquery.easing/jquery.easing.min.js"></script>
<script src="static/tpcp/php-email-form/validate.js"></script>
<script src="static/tpcp/jquery-sticky/jquery.sticky.js"></script>
<script src="static/tpcp/owl.carousel/owl.carousel.min.js"></script>
<script src="static/tpcp/waypoints/jquery.waypoints.min.js"></script>
<script src="static/tpcp/counterup/counterup.min.js"></script>
<script src="static/tpcp/isotope-layout/isotope.pkgd.min.js"></script>
<script src="static/tpcp/venobox/venobox.min.js"></script>

<!-- Template Main JS File -->
<script src="static/js/main.js"></script>
</body>

</html>