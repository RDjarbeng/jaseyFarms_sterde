<?php

require_once( 'config.php' ); //contains database login information, functions and constants(table names)



$about = array();
$about['title'] = "About Us";

$about['about_subheading1'] = "Our Objective";
$about['about_content1'] = "Our objective is to improve the well-being of our consumers through the cultivation and supply of well-grown farm products with specific emphasis on vegetables." ;

$about['about_subheading2'] = "Our Mission";
$about['about_content2'] = "Our focus is to develop our greenhouse farming know-how, capability, and output progressively to enable us to supply fresh, healthy, and quality vegetables at competitive rates with the least impact on the environment" ;

$about['about_subheading3'] = "Our Approach";
$about['about_content3'] = "Our approach involves using a greenhouse-controlled environment for farming various vegetables in commercial quantities using no pesticides in the cultivation process. More so, we mindfully endeavor to ensure less usage of water and energy to lower our carbon footprint. We believe in sustainable farming to meet the needs of our growing population.";

	
$table = HOMEPAGE_ABOUTUS;
$select = "SELECT * FROM ";
$sql =  $select. $table;
	
	
refresh_connection();
$result = query_database( $sql );


if ( $result->num_rows > 0 ) {
	
	while ( $row = $result->fetch_assoc() ) {
		
		$about['title'] = $row['about_heading'];

$about['about_subheading1'] = $row['about_subheading1'];
$about['about_content1'] = $row['about_content1'];

$about['about_subheading2'] = $row['about_subheading2'];
$about['about_content2'] = $row['about_content2'];

$about['about_subheading3'] = $row['about_subheading3'];
$about['about_content3'] = $row['about_content3'];

		
	}
}
		
//debug_to_console($about );

//close_Connection();

?>

<section id="about" class="services">
<div class="container">
<br>
<div class="section-title" data-aos="fade-up">
  <h2><?php echo $about['title']; ?></h2>
</div>
<div class="row">
  <div class="about-us-main card-deck">
    <div class=" col-md-4 col-sm-12">
      <div class="icon-box"> <a> <i class="bx bx-briefcase"></i></a></div>
      <div class="card-title">
        <h5 class="card-header text-center"><?php echo $about['about_subheading1']; ?></h5>
      </div>
      <div class=" card-body text-justify col-sm-12">
        <p class="card-text d-flex" style="width: 100%">
		<?php echo $about['about_content1'] ?>;		
		</p>
      </div>
    </div>
    <div class="col-md-4 col-sm-12">
      <div class="icon-box"> <a> <i class="bx bx-rocket"></i></a></div>
      <div class="card-title">
        <h5 class="card-header text-center">
		<?php echo $about['about_subheading2']; ?></h5>
      </div>
      <div class=" card-body text-justify col-sm-12">
        <p class="card-text">
		<?php echo $about['about_content2']; ?>
		</p>
      </div>
    </div>
    <div class="col-md-4 col-sm-12">
      <div class="icon-box"> <a> <i class="bx bx-bar-chart-square"></i></a></div>
      <div class="card-title">
        <h5 class="card-header text-center">
		<?php echo $about['about_subheading3'];?>
		</h5>
      </div>
      <div class=" card-body text-justify col-sm-12">
        <p class="card-text">
		<?php echo $about['about_content3']; ?>
		</p>
      </div>
      <button style="margin-left: 70%; border-radius: 8px; background: #018903e0; color: #fff;" class="btn-sm  " data-toggle="collapse" >
      <a href="aboutus.php" style="color: #fff;">Read more...</a>
      </button>
    </div>
  </div>
</div>

<!--  <div class="about-us-text col-sm-12">
				  <div class="button-collapse">
	  <button style="margin-left: 80%; border-radius: 8px; background: #018903e0; color: #fff;" class="btn-sm  " data-toggle="collapse" ><a href="about.html" style="color: #fff;">Read more...</a></button>
	  </div>

		  </div>-->
<hr class="new">
</section>