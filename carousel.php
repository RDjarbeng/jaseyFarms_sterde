<?php
	require_once('config.php');//contains database login information
$table =HOMEPAGE_SLIDE;
	refresh_connection();
$result = select_all($table);

$carouselImage= array();
$carouselText= array();

//initialize values in case fetch fails
$carouselImage[0]= "static/img/s4.JPG";
$carouselImage[1]= "static/img/s3.png";
$carouselImage[2]= "static/img/s1.JPG";


$carouselText[0]= "Healthy quality affordable vegetables for everyday people";
$carouselText[1]= "Healthy quality affordable vegetables for everyday people";
$carouselText[2]= "Healthy quality affordable vegetables for everyday people";


//update image details from database
if ($result->num_rows > 0) {
	$i=0;  
	//output data of each carousel image and its text
	  while($row = $result->fetch_assoc()) {
		$carouselImage[$i] = get_image($row['image']);//fetch title and logo from the database		
		
		$carouselText[$i] = $row['text'];
		$i++;
	  }
}
//$conn->close();

?>

<section id="slide">
  <div class="hero-container">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators" id="hero-carousel-indicators">
      </ol>
      <div class="carousel-inner" role="listbox"> 
        
        <!-- Slide 1 -->
        <div class="carousel-item active " style="background: rgb(255,255,255,0.08);"> 
			<img class="slideimg" src="<?php echo($carouselImage[0]); ?>">
          <div class="carousel-container">
            <div class="carousel-content slidetxtbox"><br>
              <h2 class="animated fadeInDown" style="font-weight: 400px;"><?php echo $carouselText[0]; 	 ?></h2>
            </div>
          </div>
        </div>
        
        <!-- Slide 2 -->
        <div class="carousel-item" > <img class="slideimg" src="<?php echo($carouselImage[1])?>">
          <div class="carousel-container">
            <div class="carousel-content slidetxtbox"><br>
              <h2 class="animated fadeInDown"><?php echo $carouselText[1]; ?> </h2>
            </div>
          </div>
        </div>
        
        <!-- Slide 3 -->
        <div class="carousel-item" style="background: url()"> <img class="slideimg" src="<?php echo($carouselImage[2])?>">
          <div class="carousel-container">
            <div class="carousel-content slidetxtbox"><br>
              <h2 class="animated fadeInDown"><?php echo $carouselText[2]; ?> </h2>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
  </div>
</section>
