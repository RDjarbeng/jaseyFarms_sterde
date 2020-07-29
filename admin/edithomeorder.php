
<div class="panel pane-default">
	<div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#services" style="background: #6f6f6f73;">
		<h2 class="panel-title">
				<a href="#" class="ing"> Homepage Order</a>
			</h2>
	</div>
	<div id="services" class="panel-collapse collapse" style="height: 0px;">
		<div class="panel-body">
			<div class="col-lg-12">
				<h3> <span class="label label-primary"> Order Section</span></h3>
				<!-- order table -->
				<div style="display: flex; overflow: auto;">
					<table class="table table-bordered table-responsive" style="overflow: auto;">
						<?php 


							$result = select_all(HOMEPAGE_ORDER);
							while ($data = mysqli_fetch_assoc($result)) {
								?>
						<!-- vertical table headers -->
						<tr>
							<th> Id</th>
							<td>
								<?php echo $data['id']; ?>
							</td>
						</tr>

						<tr>
							<th >Heading</th>
							<td>
								<?php echo $data['title']; ?>
							</td>
						</tr>
						<tr>
							<th width="30%">Image 1</th>
							<td><img class="img-responsive" width="50" height="50" src="<?php echo display_image($data['image1']); ?>"/>
							</td>
						</tr>
						<tr>
							<th >Subtitle 1</th>
							<td>
								<?php echo $data['subtitle1']; ?>
							</td>
						</tr>

						<tr>
							<th width="30%">Content 1</th>
							<td>
								<?php echo $data['content1']; ?>
							</td>
						</tr>
						
						<tr>
							<th width="20%"> Image 2</th>
							<td><img class="img-responsive" width="50" height="50" src="<?php echo display_image($data['image2']); ?>"/>
							</td>
						</tr>						
						<tr>
							<th width="30%">Subtitle 2</th>
							<td>
								<?php echo $data['subtitle2']; ?>
							</td>
						</tr>
						<tr>
							<th width="30%">Content 2</th>
							<td>
								<?php echo $data['content2']; ?>
							</td>

						</tr>
						<tr>
							<th width="20%"> Image3</th>
							<td><img class="img-responsive" width="50" height="50" src="<?php echo display_image($data['image3']); ?>"/>
							</td>
						</tr>
						<tr>
							<th width="30%">Subtitle 3</th>
							<td>
								<?php echo $data['subtitle3']; ?>
							</td>
						</tr>
						<tr>
							<th width="30%">Content 3</th>
							<td>
								<?php echo $data['content3']; ?>
							</td>
						</tr>
						
						<tr>
							<th width="30%">Operation</th>
							<td><a href="edithome.php?order_edit=<?php echo $data['id']; ?>" class="btn btn-success">Edit</a>
							</td>
						</tr>
						<?php
						}

						?>
						</tr>
					</table>
				</div>
			</div>


			<?php 
			if(isset($_GET['order_edit']))
			{
			   $Edit_id = $_GET['order_edit'];

				$table =HOMEPAGE_ORDER;
			   $result = select_all_id($table, $Edit_id);
				 if($result->num_rows>0){
											$row = mysqli_fetch_assoc($result); 
										}else{
											console_log("EditHomeOrderSection:Could not retrieve ".$Edit_id."from Database");
										}
			   ?>


			<form action="update.php" method="POST">
				<div class="card">
					<div class="card-body">
						<hr>

						<h3 class="card-title  btn-indigo"> Edit Order Section</h3>
						<hr>
						<div class="form-group">
							<input value="<?php echo $row['id']?>" type="hidden" name="id" placeholder=""/>

							<div class="form-group">
								<label> Heading</label><br>
								<input type="text" name="title" placeholder="" value="<?php echo $row['title']; ?>"/>
							</div>
						<div class="form-group">
									<label> Image 1</label><br>
									<img id="order_image_1" style="margin: 5%;" width="200" height="200"  src="<?php echo display_image( $row['image1']); ?>" />
							<div>
								<input style="width: 50%;" value="<?php echo $row['image1']?>" name="order_image1" id="order_image_1_label" readonly  />
							</div>

								<input type="file" id="order_image_1_input"  />								
						</div>
							<div class="form-group">
								<label> Subtitle 1</label><br>
								<input type="text" name="subtitle1" style="width: 50%;" value="<?php echo $row['subtitle1']; ?>"/>
							</div>
							<div class="form-group">
								<label> Content 1</label><br>
								<input type="text" style="width: 50%;" name="content1" value="<?php echo $row['content1']; ?>"/>
							</div>
						<div class="form-group">
									<label> Image 2</label><br>
									<img id="order_image_2" style="margin: 5%;" width="200" height="200"  src="<?php echo display_image( $row['image2']); ?>" />
							<div>
								<input style="width: 50%;" value="<?php echo $row['image2']?>" name="order_image2" id="order_image_2_label" readonly  />
							</div>

								<input type="file" id="order_image_2_input"  />								
						</div>
							<div class="form-group">
								<label> Subtitle 2</label><br>
								<input type="text" name="subtitle2" style="width: 50%;" value="<?php echo $row['subtitle2']; ?>"/>
							</div>
							<div class="form-group">
								<label> Content 2</label><br>
								<input type="text" style="width: 50%;" name="content2" value="<?php echo $row['content2']; ?>"/>
							</div>
							
						<div class="form-group">
									<label> Image 3</label><br>
									<img id="order_image_3" style="margin: 5%;" width="200" height="200"  src="<?php echo display_image( $row['image3']); ?>" />
							<div>
								<input style="width: 50%;" value="<?php echo $row['image3']?>" name="order_image3" id="order_image_3_label" readonly  />
							</div>

								<input type="file" id="order_image_3_input"  />								
						</div>
							<div class="form-group">
								<label> Subtitle 3</label><br>
								<input type="text" name="subtitle3" style="width: 50%;" value="<?php echo $row['subtitle3']; ?>"/>
							</div>
							<div class="form-group">
								<label> Content 3</label><br>
								<input type="text" style="width: 50%;" name="content3" value="<?php echo $row['content3']; ?>"/>
							</div>


							<div class="form-group">
								<button class="btn btn-primary " type="submit" name="order_edit_btn">Save</button>
							</div>
						</div>
					</div>
			</form>
			<?php

			}

			?>
			</div>
			<!-- /.row -->

			</div>
			<!-- /.container-fluid -->

		</div>
	
		<!-- /#page-wrapper -->					