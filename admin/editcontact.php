<?php require_once ('./includes/header.php'); ?>

<?php  ?>

<body>

    <div id="wrapper">
        <?php require_once ('./includes/nav.php'); ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            Edit Contact Page
                        </h3>
                    </div>

                    <div class="panel pane-default">
                        <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse"
                            data-parent="#faqAccordion" data-target="#services" style="background: #6f6f6f73;">
                            <h2 class="panel-title">
                                <a href="#" class="ing"> Edit Contact</a>
                            </h2>
                        </div>
                        <div id="services" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                <div class="col-lg-12">
                                    <h3> <span class="label label-primary"> Edit Contact section</span></h3>
                                    <!-- order table -->
                                    <div style="display: flex; overflow: auto;">
                                        <table class="table table-bordered table-responsive" style="overflow: auto;">
                                            <?php 


							$result = select_all(HOMEPAGE_FOOTER_CONTACTUS);
							$data = mysqli_fetch_assoc($result)
								?>
                                            <!-- vertical table headers -->
                                            <tr>
                                                <th> Id</th>
                                                <td>
                                                    <?php echo $data['id']; ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>Location</th>
                                                <td>
                                                    <?php echo $data['location']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Digital Address</th>
                                                <td>
                                                    <?php echo $data['digital_address']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Postal Address</th>
                                                <td>
                                                    <?php echo $data['postal_address']; ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th width="30%">Phone 1</th>
                                                <td>
                                                    <?php echo $data['phone1']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Phone 2</th>
                                                <td>
                                                    <?php echo $data['phone2']; ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th width="30%">Email 1</th>
                                                <td>
                                                    <?php echo $data['email1']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Email 2</th>
                                                <td>
                                                    <?php echo $data['email2']; ?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th width="30%">Operation</th>
                                                <td><a href="editcontact.php?contact_edit=<?php echo $data['id']; ?>"
                                                        class="btn btn-success">Edit</a>
                                                </td>
                                            </tr>

                                            </tr>
                                        </table>
                                    </div>
                                </div>


                                <?php 
			if(isset($_GET['contact_edit']))
			{
			   $Edit_id = $_GET['contact_edit'];

				$table =HOMEPAGE_FOOTER_CONTACTUS;
			   $result = select_all_id($table, $Edit_id);
				 if($result->num_rows>0){
											$row = mysqli_fetch_assoc($result); 
										
			   ?>
                                <form action="update.php" method="POST">
                                    <div class="card">
                                        <div class="card-body">
                                            <hr>

                                            <h3 class="card-title  btn-indigo"> Edit Contact Section</h3>
                                            <hr>
                                            <div class="form-group">
                                                <input value="<?php echo $row['id']?>" type="hidden" name="id"
                                                    placeholder="" />

                                                <div class="form-group">
                                                    <label> Location</label><br>
                                                    <input type="text" name="location" style="width: 50%;"
                                                        value="<?php echo $row['location']; ?>" />
                                                </div>
                                                <div class="form-group">
                                                    <label> Digital Address</label><br>
                                                    <input type="text" name="digital_address" style="width: 50%;"
                                                        value="<?php echo $row['digital_address']; ?>" />
                                                </div>
                                                <div class="form-group">
                                                    <label> Postal Address</label><br>
                                                    <input type="text" name="postal_address" style="width: 50%;"
                                                        value="<?php echo $row['postal_address']; ?>" />
                                                </div>
                                                <div class="form-group">
                                                    <label> Phone 1</label><br>
                                                    <input type="text" style="width: 50%;" name="phone1"
                                                        value="<?php echo $row['phone1']; ?>" />
                                                </div>
                                                <div class="form-group">
                                                    <label> Phone 2</label><br>
                                                    <input type="text" style="width: 50%;" name="phone2"
                                                        value="<?php echo $row['phone2']; ?>" />
                                                </div>
                                                <div class="form-group">
                                                    <label> Email 1</label><br>
                                                    <input type="text" style="width: 50%;" name="email1"
                                                        value="<?php echo $row['email1']; ?>" />
                                                </div>
                                                <div class="form-group">
                                                    <label> Email 2</label><br>
                                                    <input type="text" style="width: 50%;" name="email2"
                                                        value="<?php echo $row['email2']; ?>" />
                                                </div>


                                                <div class="form-group">
                                                    <button class="btn btn-primary " type="submit"
                                                        name="contact_edit_btn">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                                <?php
                                }else{
                                    echo "<p>Problem fetching field from database</p>";
											console_log("EditHomeOrderSection:Could not retrieve ".$Edit_id."from Database");
										}

			}

			?>
                            </div>
                            <!-- /.row -->

                        </div>
                        <!-- /.container-fluid -->

                    </div>

                    <!-- /#page-wrapper -->
                    <!-- /#wrapper -->
                    <?php require_once ('./includes/footer.php'); ?>