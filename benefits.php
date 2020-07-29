<?php
require_once( 'config.php' ); //contains database login information
$table = HOMEPAGE_BENEFITS;
$select = "SELECT * FROM ";
$sql =  $select. $table;

$benefits_title = "Benefits";
$benefits_subtitle = "A diet rich in vegetables can:";

refresh_connection();
$result = query_database( $sql );


if ( $result->num_rows > 0 ) {
	
	while ( $row = $result->fetch_assoc() ) {
		$benefits_title = $row['title'];
		$benefits_subtitle = $row['subtitle'];
	}
}

//update image details from database

$table = HOMEPAGE_BENEFITS_CONTENTS;
$sql =  $select. $table;
$result = query_database( $sql );

$benefits_contents = array();

if ( $result->num_rows > 0 ) {
	$i=0;
	while ( $row = $result->fetch_assoc() ) {
		$benefits_contents[$i] = $row['benefits'];
		$i++;
	}
}
//debug_to_console($benefits_contents);

//close_Connection();

function display_cards($text){
	
echo <<<DISPLAY
	<td class="benefit-box col-sm-12"><p>$text</p></td>

DISPLAY;
}



?>


<section class="section-benefit">
  <div class="container">
    <div class=" col-sm-12 section-title " ><br>
      <h2> <?php echo $benefits_title; ?></h2>
    </div>
    <div class="col-sm-12 text-center">
      <h4> <?php echo $benefits_subtitle; ?></h4>
    </div>
    <div class="row">
        <table class="benefits-table" width="100%" padding="5px">
          <tbody class="align-middle">
            <tr >
              <?php 
				$i=0;
				foreach($benefits_contents as $benefits){
					$i++;
					display_cards($benefits);
					if($i%4 ===0){
						echo("</tr>
						<tr>");
						
					}
					
				}
				?>
            
            </tr>
          </tbody>
        </table>

      
    </div>
  </div>
  <br>
</section>