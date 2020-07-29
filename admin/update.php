<?php require_once ('../config.php');  



function get_update_status($sql){
	global $conn;
	$result = mysqli_query($conn,$sql);
	if ($result){
		/*echo '<p class="alert alert-success">Home slide updated successfully :)!</p>';*/
		echo query_succeeded();
		mysqli_close($conn);
		header("refresh:0.5;url=edithome.php");
	}

	else{
		echo "Unsuccessful please try again!";
		console_log($conn->error);
		mysqli_close($conn);
	}
}



?>

<?php
//update slide section
if (isset($_POST['slide_edit_btn'])){
	$update= array();
	$update['up_id'] =mysqli_real_escape_string($conn, $_POST['editslide_ID']);
	$update['up_image'] = mysqli_real_escape_string($conn,$_POST['db_image']);
	$update['up_subheading'] = mysqli_real_escape_string($conn,$_POST['subheading']);
	$table = HOMEPAGE_SLIDE;
	
	
	if($sql =$conn->prepare("UPDATE $table set image=?, text=? where id=? ")){
		if($sql->bind_param("ssi", $update['up_image'], $update['up_subheading'], $update['up_id'] )){
			console_log($sql);
			execute_prepared_status($sql);
		}else{
					console_log("Update_order:Could not bind params ". $sql->errno . ") " . $sql->error);
				}
	}else{
		console_log($conn->error);
	}
}

?>


<?php
//product title section

if (isset($_POST['prod_title_button'])){
	$up_id1 = $_POST['edit_prod_title_ID'];
		
	$up_heading1 = $_POST['heading'];
	$up_subheading1 = $_POST['subheading'];
	$up_slide_caption = $_POST['slide_caption'];
	$table=HOMEPAGE_PRODUCTS;

	if($sql =$conn->prepare("update $table set title=?, slide_caption=?, subtitle=? where id=? ")){
		if($sql->bind_param("sssi", $up_heading1, $up_slide_caption, $up_subheading1, $up_id1 )){
			execute_prepared_status($sql);
		}else{
					console_log("Update_order:Could not bind params ". $stmt->errno . ") " . $stmt->error);
				}
	}else{
		console_log($conn->error);
	}
}
//end product title edit section
?>

<?php
//update prod_picss section
$table=HOMEPAGE_PROD_PICTURES;
if (isset($_POST['prod_pic_edit_btn'])){
	$up_id = $_POST['edit_prod_ID'];
	$up_image = $_POST['db_image'];
	$up_subheading = $_POST['img_text'];

	if($sql = $conn->prepare("UPDATE $table SET image=?, text=? where id=? ")){
		$sql ->bind_param('ssi', $up_image, $up_subheading, $up_id);
		execute_prepared_status($sql);
	}else{
		console_log($conn->error);
	}	
}

?>

<?php
//benefits title update
if (isset($_POST['benefits_title_button'])){
	$up_id1 = $_POST['edit_benefits_title_ID'];
		
	$up_heading1 = $_POST['heading'];
	$up_subheading1 = $_POST['subheading'];
	$table=HOMEPAGE_BENEFITS;

	$sql = "update $table set title='$up_heading1', subtitle='$up_subheading1' where id='$up_id1' ";
	console_log($sql);
	get_update_status($sql);
}

?>

<?php
//benefits content update
if (isset($_POST['benefits_content_button'])){
	$up_id1 = $_POST['id'];
		
	$up_heading1 = $_POST['heading'];
	
	$table=HOMEPAGE_BENEFITS_CONTENTS;

	$sql = "update $table set text='$up_heading1' where id='$up_id1' ";
	get_update_status($sql);
}

?>


<?php
//homepage order section
if (isset($_POST['order_edit_btn'])){
	$up_id = $_POST['id'];		
	$title = $_POST['title'];
	$image1 = $_POST['order_image1'];
	$subtitle1 = $_POST['subtitle1'];
	$content1 = $_POST['content1'];
	$image2 = $_POST['order_image2'];
	$subtitle2 = $_POST['subtitle2'];
	$content2 = $_POST['content2'];
	$image3 = $_POST['order_image3'];
	$subtitle3 = $_POST['subtitle3'];
	$content3 = $_POST['content3'];
	
	
	$table =HOMEPAGE_ORDER;
	
	if($stmt = $conn->prepare("update $table set 
			title=?,
			image1=?,
			subtitle1=?,
			content1 =?,
			image2 =?,
			subtitle2 =?,
			content2 =?,
			image3 =?,
			subtitle3 =?,
			content3 =? 			
			where id=? ")){
				if($stmt->bind_param('ssssssssssi', $title, $image1, $subtitle1, $content1, $image2, $subtitle2, $content2, $image3, $subtitle3, $content3, $up_id)){
					execute_prepared_status($stmt);

				}else{
					console_log("Update_order:Could not bind params ". $stmt->errno . ") " . $stmt->error);
				}
			}else{
		console_log($conn->error);
	}

}

?>


<?php
//home:about section
if (isset($_POST['edit_about_btn'])){
	$up_id = $_POST['id'];		
	$heading = $_POST['about_heading'];
	$about_subheading1 = $_POST['about_subheading1'];
	$about_content1 = $_POST['about_content1'];
	$about_subheading2 = $_POST['about_subheading2'];
	$about_content2 = $_POST['about_content2'];
	$about_subheading3 = $_POST['about_subheading3'];
	$about_content3 = $_POST['about_content3'];
	
	
	$table =HOMEPAGE_ABOUTUS;
	
	if($stmt = $conn->prepare("update $table set 
	about_heading=?,
			about_subheading1=?,
			about_content1=?,
			about_subheading2 =?,
			about_content2 =?,			
			about_subheading3 =?,
			about_content3 =?			
			where id=? ")){
				if($stmt->bind_param('sssssssi', $heading, $about_subheading1, $about_content1, $about_subheading2, $about_content2, $about_subheading3, $about_content3, $up_id)){
					execute_prepared_status($stmt);

				}else{
					console_log("Update_about:Could not bind params ". $stmt->errno . ") " . $stmt->error);
				}
			}else{
		console_log($conn->error);
		echo "<h2>An error occured</h2>";
	}

}

?>


<?php
//aboutpage: content
if (isset($_POST['edit_abt_content_btn'])){
	$up_id = $_POST['id'];		
	$content = $_POST['content'];
	
	$table=ABOUTPAGE_CONTENT;
	
	if($stmt = $conn->prepare("update $table set content=? where id=? ")){
				if($stmt->bind_param('si', $content, $up_id)){
					execute_prepared_status($stmt);

				}else{
					console_log("Update_about:Could not bind params ". $stmt->errno . ") " . $stmt->error);
				}
			}else{
		console_log($conn->error);
		echo "<h2>An error occured</h2>";
	}	

}

?>


<?php
//aboutpage: strategic positioning
if (isset($_POST['abtpage_stratpos_btn'])){
	$up_id = $_POST['id'];		
	$content = $_POST['content'];
	$title = $_POST['title'];
	
	$table=ABOUTPAGE_POSITIONING;

	if($stmt = $conn->prepare("update $table set title=?, content=? where id=? ")){
				if($stmt->bind_param('ssi', $title, $content, $up_id)){
					execute_prepared_status($stmt);

				}else{
					console_log("Update_strategic positioning:Could not bind params ". $stmt->errno . ") " . $stmt->error);
				}
			}else{
		console_log($conn->error);
		echo "<h2>An error occured</h2>";
	}

}

?>

<?php
//aboutpage: cards, vision & mission
if (isset($_POST['abtpage_cards_btn'])){
	$up_id = $_POST['id'];		
	$content = $_POST['content'];
	$title = $_POST['title'];
	
	
	$table=ABOUTPAGE_ABOUTUS_CARDS;

	if($stmt = $conn->prepare("update $table set title=?, content=? where id=? ")){
				if($stmt->bind_param('ssi', $title, $content, $up_id)){
					execute_prepared_status($stmt);

				}else{
					console_log("Update_strategic positioning:Could not bind params ". $stmt->errno . ") " . $stmt->error);
				}
			}else{
		console_log($conn->error);
		echo "<h2>An error occured</h2>";
	}

}

?>


<?php
//CONTACT details
if (isset($_POST['contact_edit_btn'])){
	$up_id = $_POST['id'];		
	$location = $_POST['location'];
	$digital_address = $_POST['digital_address'];
	$postal_address = $_POST['postal_address'];
	$phone1 = $_POST['phone1'];
	$phone2 = $_POST['phone2'];
	$email1 = $_POST['email1'];
	$email2 = $_POST['email2'];	
	
	$table =HOMEPAGE_FOOTER_CONTACTUS;
	
	if($stmt = $conn->prepare("update $table set 
			location=?,
			digital_address=?,
			postal_address=?,
			phone1 =?,
			phone2 =?,			
			email1 =?,
			email2 =?			
			where id=? ")){
				if($stmt->bind_param('sssssssi', $location, $digital_address, $postal_address, $phone1, $phone2, $email1, $email2, $up_id)){
					execute_prepared_status($stmt);

				}else{
					console_log("Update_about:Could not bind params ". $stmt->errno . ") " . $stmt->error);
				}
			}else{
		console_log($conn->error);
		echo "<h2>An error occured</h2>";
			}

}

?>


<?php
//portfoliopage
if (isset($_POST['edit_portfolio_btn'])){
	$up_id = $_POST['id'];		
	$image = $_POST['image'];
	$caption = $_POST['caption'];
	$heading_hover = $_POST['heading_hover'];
	$subheading_hover = $_POST['subheading_hover'];	
	
	$table=PORTFOLIO_TABLE;

	if($stmt = $conn->prepare("update $table set 
			image=?,
			caption=?,
			heading_hover =?,
			subheading_hover =?			
			where id=? ")){
				if($stmt->bind_param('ssssi', $image, $caption, $heading_hover, $subheading_hover, $up_id)){
					execute_prepared_status($stmt);

				}else{
					console_log("Update_portofolio:Could not bind params ". $stmt->errno . ") " . $stmt->error);
					echo "<h2>An error occured</h2>";
				}
			}else{
				console_log($_POST);
		console_log($conn->error);
		echo "<h2>An error occured</h2>";
	}

}

?>