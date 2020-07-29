  <?php
require_once('config.php');//contains database login information and functions

	//fetch each of the sections on the page
	$table = ABOUTPAGE_CONTENT;
	$about_content = get_table_rows($table);

	$table = ABOUTPAGE_ABOUTUS_CARDS;
	$about_cards =get_table_rows($table);
	
	$table = ABOUTPAGE_POSITIONING;
	$positioning = get_single_row($table);
	debug_to_console($positioning['title']);

	
	//Functions	
	function display_card($heading, $content){
		echo <<<DISPLAY
		<div class="card " style="background: rgb(255,255,255,0.8);">
    <div class="card-title" >
      <h4 class="card-header text-center" data_temp_dwid="1">$heading</h4>
    </div>
    <div class="card-body text-center" >
      <p class="card-text"> $content</p>
    </div>      
    
  </div>
DISPLAY;
	}
	
	function display_about_paragraphs($content){
		echo <<<DISPLAY
		<p class="content">$content </p>
DISPLAY;
	}
	
//close_Connection();

?>

  <!-- End Header -->

  <br><br>


  <section class="breadcrumbs" style="background: url(static/img/about-pic.png);">
      <div class="container">
          <h2 style="visibility: hidden;;">About Us</h2>

      </div>

  </section>

  <!-- ======= About Section ======= -->
  <section id="about" class="strat" style="background-color: #fff;">
      <div class="container"><br>

          <div class="section-title" data-aos="fade-up">
              <h2 style="font-size: 24px;">About Us</h2>

          </div>

          <div class="row">
              <div id="" class=" col-md-12 col-sm-12" style="text-align: justify;">
                  <?php
					  foreach($about_content as $content){
						  
						  display_about_paragraphs($content['content']);
						  
					  }	  
					  ?>


                  <br>
                  <h5 style="text-align: center;"><b>
                          <?php echo $positioning['title']; ?> </b></h5>

                  <p> <?php echo $positioning['content']; ?> </p>
                  <div class="image-holder">


                      <!-- about-cards -->
                      <div class="row">
                          <div class="about-cards card-deck" style="background-image: url('static/img/about-pic.png') ">

                              <?php
					  foreach($about_cards as $card){
						  
						  display_card($card['title'], $card['content']);
						  
					  }	  
					  ?>

                          </div>

                      </div>
                  </div>
              </div>

          </div>

      </div>
  </section><!-- End Services Section -->




  </main><!-- End #main -->