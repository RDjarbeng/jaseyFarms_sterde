<?php

require_once( 'config.php' ); //contains database login information, functions and constants(table names)



$order = array();
$order['title'] = "Make an order";
$order['image1'] = "static/img/m1.png";
$order['subtitle1'] = "Please call a sales representative";
$order['content1'] = "0244132705" ;

$order['image2'] = "static/img/m2.jpg";
$order['subtitle2'] = "Place an order";
$order['content2'] = "Tap to order healthy quality affordable vegetables" ;

$order['image3'] = "static/img/m3.png";
$order['subtitle3'] ="Engage us" ;
$order['content3'] = "Send us an email";

	
$table = HOMEPAGE_ORDER;
$select = "SELECT * FROM ";
$sql =  $select. $table;
	
	
refresh_connection();
$result = query_database( $sql );


if ( $result->num_rows > 0 ) {
	
	while ( $row = $result->fetch_assoc() ) {
		$order['title']=$row['title'];
		$order['image1'] = get_image($row['image1']);
$order['subtitle1'] = $row['subtitle1'];
$order['content1'] = $row['content1'];

$order['image2'] = get_image($row['image2']);
$order['subtitle2'] = $row['subtitle2'];
$order['content2'] = $row['content2'];

$order['image3'] = get_image($row['image3']);
$order['subtitle3'] =$row['subtitle3'];
$order['content3'] = $row['content3'];

	}
//	debug_to_console($order);
}

//close_Connection();

?>


<section id="order">
  <div class="container">
    <div class=" col-md-12 order-section ">
      <div class="section-title col-md-12" data-aos="fade-up"><br>
        <h2 ><?php echo $order['title']; ?></h2>
      </div>
      <!--			  order images -->
      <div class="row col-md-12 order-image-row card-group">
        <div class="col-md-4 col-sm-12 pl-md-0">
			<img src="<?php echo $order['image1']; ?>" style="height: 50%; margin-top: 40px;" class="makeorder-box img-fluid" alt="">
          <div class="order-title d-flex justify-content-center align-items-center" >
            <div class="d-flex justify-content-center align-items-center"> <?php echo $order['subtitle1']; ?> </div>
          </div>
          <div class="order-subTitle d-flex justify-content-center align-items-center mt-2" >
            <div class="d-flex justify-content-center align-items-center p-3"><?php echo $order['content1']; ?>  </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 pl-md-0"> 
			<img src="<?php echo $order['image2']; ?>" style="height: 50%; margin-top: 40px;" class="makeorder-box img-fluid" alt="">
          <div class="order-title d-flex justify-content-center align-items-center" >
            <div class="d-flex justify-content-center align-items-center"><?php echo $order['subtitle2']; ?>  </div>
          </div>
          <div class="order-subTitle d-flex justify-content-center align-items-center mt-2" >
            <div class="d-flex justify-content-center align-items-center">
			  <button class="btn text-trunctate " style="padding: 0px; flex-grow:1" data-toggle="modal" data-target="modal1" onclick="show()">
				  <p style="line-height: 1rem;" class="my-auto"> <?php echo $order['content2']; ?> </p>
            </button>
			  </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 pl-md-0">
			
			<div style="height: 64%;" class="d-flex">
			<img src="<?php echo $order['image3']; ?> " style="height: 45%; margin-top: 70px" class="makeorder-box img-fluid mx-auto align-items-middle" alt="">
<!--			<img src="static/img/m3.png" alt="" style="height: 50%; margin-top: 5px; margin-bottom: 5%" class="makeorder-box img-fluid">-->
				</div>
				
          <div class="order-title d-flex justify-content-center align-items-center" >
            <div class="d-flex justify-content-center align-items-center"><?php echo $order['subtitle3']; ?> </div>
          </div>
          <div class="order-subTitle d-flex justify-content-center align-items-center mt-2" >
            <div class="d-flex justify-content-center align-items-center">
			  <button class="btn overflow-hidden" style="flex-grow:1; W "  data-toggle="modal" data-target="modal2" onclick="show1()">
            <p class="my-auto"><?php echo $order['content3']; ?>  </p>
            </button>
				</div>
          </div>
          </div>
        </div>
      </div>
      
    </div>
    <!--		End of order images --> 
  </div>
  <br>
  
  <!--modal section-->
  
  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Jasey Order list form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body">
          <div class="col-12">
            <form action="" method="post" role="form" class="php-email-form">
              <h5>Order details</h5>
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="Product" class="form-control" id="name" placeholder="Product " data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="tel" class="form-control" name="Quantity" id="email" placeholder="Quantity" data-rule="phone" data-msg="Please enter a valid quality" />
                  <div class="validate"></div>
                </div>
              </div>
              <h5>Customer contact details</h5>
              <div class="form-group">
                <input type="text" class="form-control" name="Phone" id="subject" placeholder="Phone Number" data-rule="minlen:4" data-msg="Please enter at least 10 chars of number" />
                <div class="validate"></div>
              </div>
              <div class=" form-group">
                <input type="email" class="form-control" name="Email" id="email" placeholder="Email" data-rule="phone" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="location" rows="5" data-rule="required" data-msg="Please indicate your location" placeholder="Location"></textarea>
                <div class="validate"></div>
              </div>
              <h5>Allocated Sales Rep</h5>
              <div class="form-group">
                <input type="text" class="form-control" name="Phone" id="subject" placeholder="Phone Number" data-rule="minlen:4" data-msg="Please enter at least 10 chars of number" />
                <div class="validate"></div>
              </div>
              <div class=" form-group">
                <input type="email" class="form-control" name="Email" id="email" placeholder="Email" data-rule="phone" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
              <div class="mb-3"> 
                <!-- <div class="loading">Loading</div>
					<div class="error-message"></div>
					<div class="sent-message">Your message has been sent. Thank you!</div>--> 
              </div>
              <div class="text-center">
                <button  class="btn btn-success" type="submit">Place Order</button>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <!--<button type="button" class="btn btn-primary">Save changes</button>--> 
        </div>
      </div>
    </div>
  </div>
  
  <!--modal2-->
  
  <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Send Mail</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body">
          <div class="col-12">
            <form action="" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3"> 
                <!--<div class="loading">Loading</div>
					<div class="error-message"></div>
					<div class="sent-message">Your message has been sent. Thank you!</div>--> 
              </div>
              <div class="text-center">
                <button class="btn btn-success" type="submit">Send Message</button>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary">Save changes</button>--> 
        </div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
	 function show(){
	$('#modal1').modal('show');
	}
	</script> 
<script type="text/javascript">
	 function show1(){
	$('#modal2').modal('show');
	}
	</script>