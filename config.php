<?php

 define("SERVERNAME", "localhost");
 define("USERNAME", "root");
 define("PASSWORD", "");
 define("DATABASENAME", "jaseyfarms");
 
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "jaseyfarms";

//SQL Tables
define("HOMEPAGE_BENEFITS", "homepage_benefits");
define("HOMEPAGE_BENEFITS_CONTENTS", "homepage_benefits_contents");
define("HOMEPAGE_PRODUCTS", "homepage_products");
define("HOMEPAGE_PROD_PICTURES", "homepage_products_pictures");
define("HOMEPAGE_SLIDE", "homepage_slide");
define("HOMEPAGE_DETAILS", "homepage_details");

define("HOMEPAGE_ORDER", "homepage_order");
define("HOMEPAGE_ABOUTUS", "homepage_aboutus");
define("HOMEPAGE_FOOTER_CONTACTUS", "homepage_footer_contactus");
define("HOMEPAGE_FOOTER_PRODUCTS", "homepage_footer_products");
define("HOMEPAGE_FOOTER_CAREERS", "homepage_footer_careers");
define("ABOUTPAGE_ABOUTUS_CARDS", "aboutpage_aboutus_cards");
define("ABOUTPAGE_POSITIONING", "aboutpage_strategic_Positioning");
define("ABOUTPAGE_CONTENT", "aboutpage_content");
define("PORTFOLIO_TABLE", "portfolio");

// Create connection
$conn = getConnection();
$con = $conn;


	/* functions */
	function getConnection(){
			$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASENAME);
			// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		  debug_to_console("Connection failed: unable to connect to database; check servername, username, password, database Name.");
		}
		return $conn;
	}

	function debug_to_console($data) {
		$output = $data;
		if (is_array($output))
			$output = implode(',', $output);

		echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
	}
	
	function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}
	
	function refresh_connection(){
		global $conn;
		if(!(is_resource($conn) && get_resource_type($conn)==='mysql link')){//check for closed connection
     $conn = getConnection();//load connection
}
	}
	
	
	/* DATABASE RETRIEVAL FUNCTIONS */
	function query_database($sql){
		global $conn;
		return $conn->query($sql);
	}
	//returns result set of all elements in specified table
	function select_all($table){
		$sql = "SELECT * FROM " . $table;
		return query_database($sql);
	}
	//returns the result set of a single row with id= $id
	function select_all_id($table, $id){
		global $conn;
		if($sql = $conn->prepare("SELECT * FROM  $table  WHERE ".$table.".id =? ")){
			if($sql->bind_param("i", $id )){
				if ($sql->execute()) {
					return $sql->get_result();  
					
	}else{
		console_log("Select_all_id: Unsuccessful please try again!");
		console_log($sql->error);
		console_log($sql->errno);
		mysqli_close($conn);
	}
				
		}else{
			console_log("Select_all_id:Could not bind params ". $sql->errno . ") " . $sql->error);
				}
			}else{
		console_log("Select_all_id: Could not connect to database");
		console_log($conn->error);
		
	}
		
		
	}
	/*
	*executes a prepared statement object, for admin update statements
	*shows errors on false redirects to previous page on true
	*@params an sqli prepared statement which has already executed bind_params
	*/
	function execute_prepared_status($stmt){
	global $conn;
	console_log($stmt);
	
	if ($stmt->execute()) {
		echo query_succeeded();
		//mysqli_close($conn);
		console_log("rows updateds: ". $stmt->affected_rows);

		if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != ""){
		$url = $_SERVER['HTTP_REFERER'];
		}else{
		$url = "index.php";
		}
		//wait in seconds and redirect
		header("refresh:1.5; url=". $url);
		exit;
		
	}else{
		echo "Unsuccessful please try again!";
		console_log($stmt->error);
		console_log($conn->error);
		console_log($stmt->errno);
		mysqli_close($conn);
	}
}
	function query_succeeded(){
	$redirect ='<h3 style="background:#24B0E9;color:white"><strong>Redirecting...</strong></h3>';
	$msg= '<p style="background:#83E08A; font-size: 1.5em">"Updated successfully :)!")</p>' ;
	return $redirect.$msg;
}
	//appends the image directory to the image from the database
	function get_image($image){
		$relative_path= "static/img/";
		
		return $relative_path.$image;
	}
	//for admin view only, to display images
	function display_image($image){
 $img_relative = "../";//file path relative to where image in the database points
 return $img_relative.get_image($image);
}
	//for admin edit and displaying images, outputs an image, file chooser and image textbox for image name
	//requires script to display image name in text input
	function display_form_image_section($the_image, $image_id, $file_chooser_id, $image_input_text_id, $name="image"){
		$image_relative =display_image( $the_image);
		
echo <<<DISPLAY

<div class="form-group ">
                                    <label> Image</label><br>
                                    <img id="$image_id" style="margin: 5%;" width="200" height="200"
                                        src="$image_relative" />

<input type="file" id="$file_chooser_id"  />
</div>
<div class="form-group">
    <input style="width: 80%;" value="$the_image" name="$name" id="$image_input_text_id" readonly />
</div>

DISPLAY;

}
	function display_form_text_section($label, $text_to_display, $name){
		
echo <<<DISPLAY
<div class="form-group">
                                                        <label> $label</label><br>
                                                        <input type="text" name="$name" style="width: 50%;"
                                                            value="$text_to_display" />
                                                    </div>
DISPLAY;

}


	function display_form_button_section( $name, $label="save"){
		
echo <<<DISPLAY
<div class="form-group">
                                                        <button class="btn btn-primary " type="submit"
                                                            name="$name">$label</button>
                                                    </div>
DISPLAY;

}

//returns the rows of the specified table as a 2D associative array [num]['table_title']
function get_table_rows($table){
$an_Array= array();
$result = select_all($table);
if ($result->num_rows > 0) {
// output data of each row
$i=0;
while($row = $result->fetch_assoc()) {
$an_Array[] = $row;
}
return $an_Array;
}else {
return null;
debug_to_console("0 rows found in ".$table);
}
}

//returns the first row of the specified table as an associative array
function get_single_row($table){
$an_Array= array();
$result = select_all($table);
if ($result->num_rows > 0) {
// output data of first row
$row = $result->fetch_assoc();
return $row;
}else {
return null;
debug_to_console("0 rows found in ".$table);
}
}

/*CONTACT RETRIEVAL FUNCTIONS*/
//sets the contact information
function get_contactus(){

$table = HOMEPAGE_FOOTER_CONTACTUS;

$result = select_all($table);
$contact = array();
$temp = get_single_row($table);
if(!empty($temp)){
$contact =$temp;

if(!empty($contact['phone2'])){
$contact['phone1']= $contact['phone1']." | ".$contact['phone2'];
}
$contact['phone'] =$contact['phone1'];
if(!empty($contact['email2'])){
$contact['email1']= $contact['email1']." | ".$contact['email2'];
}
$contact['email']= $contact['email1'];
return $contact;
}else{
return temp;
debug_to_console("GetContactUs: No rows found in ".$table);
}
}
function get_Careers(){

$table = HOMEPAGE_FOOTER_CAREERS;

$result = select_all($table);

$content = get_single_row($table);

if(!empty($content))
return $content['careers'];
else{
return $content;
}
}


function close_Connection(){
global $conn;
$conn->close();
}

?>