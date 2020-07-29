<?php
require_once( 'config.php' ); //contains database login information
$table = PORTFOLIO_TABLE;

//refresh_connection();
$portfolio = get_table_rows($table);

?>
<!--  Header  -->
<?php include("header.php") ?>
<!-- End Header --><br><br>

<main id="main">

    <!--  Breadcrumbs  -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <h2>Our Farm Produce</h2>

        </div>
    </section><!-- End Breadcrumbs -->


    <!--  Project Section  -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-cons">Healthy</li>
                        <li data-filter=".filter-eng">Nutritious</li>
                        <li data-filter=".filter-plant">Hygienic</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-cons">
                    <div class="portfolio-wrap">
                        <img src="<?php echo get_image($portfolio[0]['image']); ?>" class="img-fluid portimg" alt="">
                        <div class="portfolio-info">
                            <h4><?php echo($portfolio[0]['heading_hover'])?></h4>
                            <p><?php echo($portfolio[0]['subheading_hover'])?></p>
                            <div class="portfolio-links">
                                <a href="<?php echo get_image($portfolio[0]['image']); ?>" data-gall="portfolioGallery"
                                    class="venobox" title="Lettuce"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                        <p style="background-color: #fff;"><?php echo($portfolio[0]['caption'])?></p>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-eng">
                    <div class="portfolio-wrap">
                        <img src="<?php echo get_image($portfolio[1]['image']); ?>" class="img-fluid portimg" alt="">
                        <div class="portfolio-info">
                            <h4><?php echo($portfolio[1]['heading_hover'])?></h4>
                            <p><?php echo($portfolio[1]['subheading_hover'])?></p>
                            <div class="portfolio-links">
                                <a href="<?php echo get_image($portfolio[1]['image']); ?>" data-gall="portfolioGallery"
                                    class="venobox" title="Tomato"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                        <p style="background-color: #fff;"><?php echo($portfolio[1]['caption'])?></p>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-cons">
                    <div class="portfolio-wrap">
                        <img src="<?php echo get_image($portfolio[2]['image']); ?>" class="img-fluid portimg" alt="">
                        <div class="portfolio-info">
                            <h4><?php echo($portfolio[2]['heading_hover'])?></h4>
                            <p><?php echo($portfolio[2]['subheading_hover'])?></p>
                            <div class="portfolio-links">
                                <a href="<?php echo get_image($portfolio[2]['image']); ?>" data-gall="portfolioGallery"
                                    class="venobox" title=" Spinach"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                        <p style="background-color: #fff;"><?php echo($portfolio[2]['caption'])?></p>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-plant">
                    <div class="portfolio-wrap">
                        <img src="<?php echo get_image($portfolio[3]['image']); ?>" class="img-fluid portimg" alt="">
                        <div class="portfolio-info">
                            <h4><?php echo($portfolio[3]['heading_hover'])?></h4>
                            <p><?php echo($portfolio[3]['subheading_hover'])?></p>
                            <div class="portfolio-links">
                                <a href="<?php echo get_image($portfolio[3]['image']); ?>" data-gall="portfolioGallery"
                                    class="venobox" title=" Carrot"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                        <p style="background-color: #fff;"> <?php echo($portfolio[3]['caption'])?></p>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-eng">
                    <div class="portfolio-wrap">
                        <img src="<?php echo get_image($portfolio[4]['image']); ?>" class="img-fluid portimg" alt="">
                        <div class="portfolio-info">
                            <h4><?php echo($portfolio[4]['heading_hover'])?></h4>
                            <p><?php echo($portfolio[4]['subheading_hover'])?></p>
                            <div class="portfolio-links">
                                <a href="<?php echo get_image($portfolio[4]['image']); ?>" data-gall="portfolioGallery"
                                    class="venobox" title=" Sweet Pepper"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                        <p style="background-color: #fff;"> <?php echo($portfolio[4]['caption'])?></p>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-cons">
                    <div class="portfolio-wrap">
                        <img src="<?php echo get_image($portfolio[5]['image']); ?>" class="img-fluid portimg" alt="">
                        <div class="portfolio-info">
                            <h4><?php echo($portfolio[5]['heading_hover'])?></h4>
                            <p><?php echo($portfolio[5]['subheading_hover'])?></p>
                            <div class="portfolio-links">
                                <a href="<?php echo get_image($portfolio[5]['image']); ?>" data-gall="portfolioGallery"
                                    class="venobox" title=" Okra"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                        <p style="background-color: #fff;"> <?php echo($portfolio[5]['caption'])?></p>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-plant">
                    <div class="portfolio-wrap">
                        <img src="<?php echo get_image($portfolio[6]['image']); ?>" class="img-fluid portimg" alt="">
                        <div class="portfolio-info">
                            <h4><?php echo($portfolio[6]['heading_hover'])?></h4>
                            <p><?php echo($portfolio[6]['subheading_hover'])?></p>
                            <div class="portfolio-links">
                                <a href="<?php echo get_image($portfolio[6]['image']); ?>" data-gall="portfolioGallery"
                                    class="venobox" title=" Cucumber"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                        <p style="background-color: #fff;"><?php echo($portfolio[6]['caption'])?> </p>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-plant">
                    <div class="portfolio-wrap">
                        <img src="<?php echo get_image($portfolio[7]['image']); ?>" class="img-fluid portimg" alt="">
                        <div class="portfolio-info">
                            <h4><?php echo($portfolio[7]['heading_hover'])?></h4>
                            <p><?php echo($portfolio[7]['subheading_hover'])?></p>
                            <div class="portfolio-links">
                                <a href="<?php echo get_image($portfolio[7]['image']); ?>" data-gall="portfolioGallery"
                                    class="venobox" title="Chili Pepper "><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                        <p style="background-color: #fff;"><?php echo($portfolio[7]['caption'])?> </p>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-eng">
                    <div class="portfolio-wrap">
                        <img src="<?php echo get_image($portfolio[8]['image']); ?>" class="img-fluid portimg" alt="">
                        <div class="portfolio-info">
                            <h4><?php echo($portfolio[8]['heading_hover'])?></h4>
                            <p><?php echo($portfolio[8]['subheading_hover'])?></p>
                            <div class="portfolio-links">
                                <a href="<?php echo get_image($portfolio[8]['image']); ?>" data-gall="portfolioGallery"
                                    class="venobox" title="EggPlant (Garden-Eggs) "><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                        <p style="background-color: #fff;"><?php echo($portfolio[8]['caption'])?> </p>

                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Project Section -->


</main><!-- End #main -->
<script>
var element = document.getElementById("port-nav");

element.className += " active";
</script>
<?php 
	include('footer.php');
	?>
<!--  Footer  -