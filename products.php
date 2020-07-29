<?php
require_once( 'config.php' ); //contains database login information


//in case db connection fails
$prod_title = "Our Products";
$prod_subtitle = "We highly recommend you place an order by using the option below: ";

//text just beneath the carousel
$caption ="Production of organic vegetables in commercial quantities to promote the well-being of our patrons";

//refresh_connection();
$table = HOMEPAGE_PRODUCTS;
$prod_title = get_single_row($table);

if(empty($prod_title)){
	$prod_title['title'] =$prod_title;
	$prod_title['subtitle'] =$prod_subtitle;
	$prod_title['slide_caption'] =$caption;
}

//update image details from database

$table = "homepage_products_pictures";

//$result = select_all($table);
$picture_element = get_table_rows($table);

//close_Connection();


function display_image_item($text, $image){
	
echo <<<DISPLAY

<div class="image-item-box col-md-4 row " style="">
				<div class="col-md-4  content img-row-item">
					<p class="img-row-item-text" style="text-align: justify;">$text</p>
				</div>
				<div class="col-md-8"> <img src="$image" class="imgserv img-fluid" alt=""> 
				</div>
			</div>
	
DISPLAY;
}

?>

<section id="products" class="about">
    <div>
        <!--	Text below Carousel, carousel caption -->

        <p class="text-center bg-green">
            <?php echo($prod_title['slide_caption']);
	  ?>
        </p>
    </div>
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2><?php echo($prod_title['title']) ?></h2>
            <p style="font-size: 20px;">
                <?php echo($prod_title['subtitle']) ?>
            </p>
        </div>

        <!-- 3 column Image row -->
        <!-- row 1 -->
        <div class="image-section row">
            <?php 
				foreach($picture_element as $picture)
				display_image_item($picture['text'], get_image($picture['image']));			
			?>
            <!--
			<div class="image-item-box col-md-4 row " style="">
				
				<div class="col-md-4 content img-row-item">
					<p class="img-row-item-text" style="text-align: justify;">Lettuce</p>
				</div>
				<div class="col-md-8 "> <img style="" src="static/img/v1.jpg" class="imgserv img-fluid" alt=""> </div>
			</div>
			
		-->
        </div>
    </div>
    <br>
</section>
<!-- row 2 -->
<!-- row 3 -->
<!-- row 4 -->
<!--	End of 3-column image view		-->
<!--			<hr class="new">-->