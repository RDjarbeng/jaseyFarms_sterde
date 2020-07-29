<?php 

require_once ('./includes/header.php');

?>
<script src="https://code.jquery.com/jquery-1.12.4.min.js">
</script>

<body>

    <div id="wrapper">
        <?php require_once ('./includes/nav.php'); ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            Edit Home Page
                        </h3>
                    </div>



                    <div class="panel-group col-lg-12 grid-margin" id="faqAccordion">
                        <div class="panel pane-default">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse"
                                data-parent="#faqAccordion" data-target="#slide" style="background: #6f6f6f73;">
                                <h2 class="panel-title">
                                    <a href="#" class="ing"> Homepage Slide</a>
                                </h2>

                            </div>
                            <div id="slide" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <div class="col-lg-12">
                                        <h3> <span class="label label-primary"> Slide Section</span></h3>

                                        <table class="table table-bordered">
                                            <tr>
                                                <th width="20%">Section Id</th>
                                                <th width="20%">Section Image</th>
                                                <th width="60%">Section text</th>
                                                <th width="30%">Operation</th>
                                            </tr>

                                            <?php 

                                            $table =HOMEPAGE_SLIDE;
                                            $result = select_all($table);
                                            while ($data = mysqli_fetch_assoc($result)) {
                                                ?>


                                            <tr>

                                                <td><?php echo $data['id']; ?></td>
                                                <td><img class="img-responsive" width="50" height="50"
                                                        src="<?php echo display_image($data['image']); ?>" /></td>
                                                <td><?php echo $data['text']; ?></td>
                                                <!-- <td><?php echo $data['subheading']; ?></td> -->

                                                <td><a href="edithome.php?edit=<?php echo $data['id']; ?>"
                                                        class="btn btn-success">Edit</a></td>
                                                <?php
                                                }

                                                ?>
                                            </tr>
                                        </table>

                                    </div>


                                    <?php 
                                    if(isset($_GET['edit']))
                                    {
                                       $Edit_id = $_GET['edit'];

                                       $result = select_all_id($table, $Edit_id);
                                       if($result->num_rows>0){
                                        $row = mysqli_fetch_assoc($result); 
                                    }else{
                                        console_log("EditHomeSlideSection:Could not retrieve ".$Edit_id."from Database");
                                    }

                                    ?>


                                    <form action="update.php" method="POST">
                                        <div class="card">
                                            <div class="card-body">
                                                <hr>

                                                <h3 class="card-title  btn-indigo"> Edit Slide Section</h3>
                                                <p class="text-secondary bg-warning">
                                                    Images must be present in images folder
                                                </p>
                                                <hr>
                                                <div class="form-group">
                                                    <input value="<?php echo $row['id']?>" type="" name="editslide_ID"
                                                        placeholder="" readonly />

                                                    <div class="form-group ">
                                                        <label> Image</label><br>
                                                        <img id="slide_img" style="margin: 5%;" width="200" height="200"
                                                            src="<?php echo display_image( $row['image']); ?>" />

                                                        <input type="file" id="slide_pic" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input style="width: 80%;" value="<?php echo $row['image']?>"
                                                            type="" name="db_image" id="theImage" readonly />
                                                    </div>


                                                    <div class="form-group">
                                                        <label> Section text</label><br>
                                                        <textarea type="text" name="subheading" placeholder="" cols="50"
                                                            rows="8"><?php echo $row['text']; ?></textarea>


                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-primary " type="submit"
                                                            name="slide_edit_btn">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--
                                            <script>
                    //get the image name 
                    jQuery(document).ready(function() { 
								var theInputText= '#theImage';
								var theImagePreview= '#slide_img';
								var theFileInput= '#slide_pic';
								$(theFileInput).change(function(e) { 
									var fileName = e.target.files[0].name;
									
									$(theInputText).val(fileName);                       
									//preview the image
										if (this.files && this.files[0]) {
											var reader = new FileReader();
											reader.onload = function(e) {
											  $(theImagePreview).attr('src', e.target.result);
										  }
									reader.readAsDataURL(this.files[0]); // convert to base64 string
									}
								}); 
                    });
        
</script> 
-->
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


                        <!--  Homepage Products   -->
                        <?php include('edithomeproducts.php'); ?>
                        <!-- End of Homepage Products   -->
                        <!-- /.row -->
                    </div>

                    <!-- /.container-fluid -->

                </div>
                <!-- /#page-wrapper -->

                <!--end products--->

                <!--- benefits    -->
                <?php include('editbenefits.php'); ?>

                <!---end benefits--->

                <!--order-->

                <?php include('edithomeorder.php') ?>



                <!--end order-->

                <!-- about -->

                <div class="panel pane-default">
                    <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse"
                        data-parent="#faqAccordion" data-target="#about" style="background: #6f6f6f73;">
                        <h2 class="panel-title">
                            <a href="#" class="ing"> Homepage About</a>
                        </h2>

                    </div>
                    <div id="about" class="panel-collapse collapse" style="height: 0px;">
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <h3> <span class="label label-primary"> About Section</span></h3>
                                <div class="table-responsive">
                                    <table class="table table-bordered">


                                        <?php 

                        $result = select_all(HOMEPAGE_ABOUTUS);
                        $data = mysqli_fetch_assoc($result);
                        
                            ?>

                                        <tr>
                                            <th width="5%"> Id</th>
                                            <td><?php echo $data['id']; ?></td>
                                        </tr>
                                        <tr>
                                            <th width="10%">Heading</th>
                                            <td><?php echo $data['about_heading']; ?></td>
                                        </tr>
                                        <tr>
                                            <th width="10%">Subheading 1</th>
                                            <td><?php echo $data['about_subheading1']; ?></td>
                                        </tr>
                                        <tr>
                                            <th width="10%">Content 1</th>
                                            <td><?php echo $data['about_content1']; ?></td>
                                        </tr>
                                        <tr>
                                            <th width="10%">Subheading 2</th>
                                            <td><?php echo $data['about_subheading2']; ?></td>
                                        </tr>
                                        <tr>
                                            <th width="10%">Content 2</th>
                                            <td><?php echo $data['about_content2']; ?></td>
                                        </tr>
                                        <tr>
                                            <th width="10%">Subheading 3</th>
                                            <td><?php echo $data['about_subheading3']; ?></td>
                                        </tr>
                                        <tr>
                                            <th width="10%">Content 3</th>
                                            <td><?php echo $data['about_content3']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Operation</th>
                                            <td><a href="edithome.php?edit_about=<?php echo $data['id']; ?>"
                                                    class="btn btn-success">Edit</a></td>
                                        </tr>

                                    </table>
                                </div>

                            </div>


                            <?php 
            if(isset($_GET['edit_about']))
            {
               $Edit_id = $_GET['edit_about'];
               $table = HOMEPAGE_ABOUTUS;
               $result = select_all_id($table, $Edit_id);
               $row = mysqli_fetch_assoc($result); 
               ?>


                            <form action="update.php" method="POST">
                                <div class="card">
                                    <div class="card-body">
                                        <hr>

                                        <h3 class="card-title  btn-indigo"> Edit Section</h3>
                                        <hr>
                                        <div class="form-group">
                                            <input value="<?php echo $row['id']?>" type="hidden" name="id"
                                                placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label> Heading</label><br>

                                            <input type="text" style="width: 50%;" name="about_heading"
                                                value="<?php echo $row['about_heading']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label> Subheading 1</label><br>
                                            <input type="text" name="about_subheading1" placeholder=""
                                                value="<?php echo $row['about_subheading1']; ?>" />

                                        </div>

                                        <div class="form-group">
                                            <label> Content 1</label><br>
                                            <textarea type="text" name="about_content1" placeholder="" cols="80"
                                                rows="8"><?php echo $row['about_content1']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label> Subheading 2</label><br>
                                            <input type="text" name="about_subheading2" placeholder=""
                                                value="<?php echo $row['about_subheading2']; ?>" />

                                        </div>

                                        <div class="form-group">
                                            <label> Content 2</label><br>
                                            <textarea type="text" name="about_content2" placeholder="" cols="80"
                                                rows="8"><?php echo $row['about_content2']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label> Subheading 3</label><br>
                                            <input type="text" name="about_subheading3" placeholder=""
                                                value="<?php echo $row['about_subheading3']; ?>" />

                                        </div>

                                        <div class="form-group">
                                            <label> Content 3</label><br>
                                            <textarea type="text" name="about_content3" placeholder="" cols="80"
                                                rows="8"><?php echo $row['about_content3']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary " type="submit"
                                                name="edit_about_btn">Save</button>
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


                <!---end about-->




            </div>
            <!--	jQuery Script for showing image preview-->
            <script>
            //slide image

            jQuery(document).ready(function() {
                var theImagePreview = '#slide_img';
                var theInputText = '#theImage';
                var theFileInput = '#slide_pic';

                previewImage(theImagePreview, theInputText, theFileInput);

                //order images
                theImagePreview = '#order_image_1';
                theInputText = '#order_image_1_label';
                theFileInput = '#order_image_1_input';
                previewImage(theImagePreview, theInputText, theFileInput);

                theImagePreview = '#order_image_2';
                theInputText = '#order_image_2_label';
                theFileInput = '#order_image_2_input';
                previewImage(theImagePreview, theInputText, theFileInput);

                theImagePreview = '#order_image_3';
                theInputText = '#order_image_3_label';
                theFileInput = '#order_image_3_input';
                previewImage(theImagePreview, theInputText, theFileInput);
            });

            function previewImage(imgElementForPreview, textInput, fileInput) {
                //get the image name
                $(fileInput).change(function(e) {
                    var fileName = e.target.files[0].name;

                    $(textInput).val(fileName);
                    //preview the image
                    if (this.files && this.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $(imgElementForPreview).attr('src', e.target.result);
                        }
                        reader.readAsDataURL(this.files[0]); // convert to base64 string
                    }
                });
            }
            //order section
            </script>
            <!-- /#wrapper -->
            <?php require_once ('./includes/footer.php'); ?>