<?php

require_once( 'config.php' ); //contains database login information, functions and constants(table names)

$contact = array();

//in case database retrieval fails
$contact['location']= "Sunyani, Bono Region Ghana";
$contact['postal_address']= "P.O Box 19540 Accra North Ghana";
$contact['phone'] = " +233 244132705 | +233 264132705";
$contact['email'] = "oseph.wilson-sey@jaseyfarms.com | jaseyfarms@gmail.com";


	
//refresh_connection();	

$temp =get_contactus();
if(!empty($temp)){
	$contact =$temp;
}


?>



<?php 
include("header.php");
?>
<!-- End Header --><br>
<br>
<main id="main">

    <!--  Breadcrumbs  -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <h2>Contact Us</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!--  Contact Section  -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="info-box mb-4"> <i class="bx bx-map"></i>
                        <h3>Location</h3>
                        <p>
                            <?php echo $contact['location']; ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4"> <i class="bx bx-envelope"></i>
                        <h3>Postal Address</h3>
                        <p>
                            <?php echo $contact['postal_address']; ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4"> <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>
                            <?php echo $contact['email']; ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4"> <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>
                            <?php echo $contact['phone']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class=" row col-lg-6 col-12 map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126628.54448246388!2d-2.383735540638504!3d7.337943976999711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdacf2948671391%3A0xb6cac72b91017af!2sSunyani!5e0!3m2!1sen!2sgh!4v1594038513239!5m2!1sen!2sgh"
                        class="col-sm" height="450" frameborder="0" style="border:0; padding-right: 0px;"
                        allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-lg-6 ml-4">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

</main>
<!-- End #main -->
<script>
//highlight active link in nav
var element = document.getElementById("contact-nav");

element.className += " active";
</script>
<!--  Footer  -->
<?php 
include("footer.php");
?>