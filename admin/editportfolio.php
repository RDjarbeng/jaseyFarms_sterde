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
                            Edit Portfolio (vegetables) Page
                        </h3>
                    </div>



                    <div class="panel-group col-lg-12 grid-margin" id="faqAccordion">
                        <div class="panel pane-default">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse"
                                data-parent="#faqAccordion" data-target="#slide" style="background: #6f6f6f73;">
                                <h2 class="panel-title">
                                    <a href="#" class="ing"> Portfolio (vegetables) Section</a>
                                </h2>

                            </div>
                            <div id="slide" class="panel-collapse collapse show" style="height: 0px;">
                                <div class="panel-body">
                                    <div class="col-lg-12">
                                        <h3> <span class="label label-primary"> Section</span></h3>

                                        <table class="table table-bordered">
                                            <tr>
                                                <th width="5%">Section Id</th>
                                                <th width="20%"> Image</th>
                                                <th width="20%"> Caption</th>
                                                <th width="20%"> Heading on hover</th>
                                                <th width="20%"> Sub-heading on hover</th>
                                                <th width="5%">Operation</th>
                                            </tr>

                                            <?php 
                $table= PORTFOLIO_TABLE;
                $result = select_all($table);
                while($data = mysqli_fetch_assoc($result))
                {
                                
            ?>

                                            <tr>

                                                <td><?php echo $data['id']; ?></td>
                                                <td><img class="img-responsive" width="50" height="50"
                                                        src="<?php echo display_image($data['image']); ?>" /></td>
                                                <td><?php echo $data['caption']; ?></td>
                                                <td><?php echo $data['heading_hover']; ?></td>
                                                <td><?php echo $data['subheading_hover']; ?></td>

                                                <td><a href="editportfolio.php?portfolio_edit=<?php echo $data['id']; ?>"
                                                        class="btn btn-success">Edit</a></td>
                                                <?php
                            }
                            
                        ?>
                                            </tr>
                                        </table>

                                    </div>


                                    <?php 
                              if(isset($_GET['portfolio_edit']))
                               {
                                 $Edit_id = $_GET['portfolio_edit'];
                                 $table = PORTFOLIO_TABLE;
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

                                                    <?php
                                                     //display_form_image_section(imageSource/name_from_db, "image_id_to_preview","filechooser","text_input_id", "image_label_name=image by default");
                                                     $image_to_display =$row['image'];
                                                     $image_preview="portfolio_image";
                                                     $image_file_input="portfolio_file_input";
                                                     $image_label_id ="img_label_id";
                                                     $image_label_name = "image";//needed to send the image to the database
                                                     display_form_image_section($image_to_display, $image_preview, $image_file_input, $image_label_id, $image_label_name);
                                                     ?>

                                                    <?php 
                                                    display_form_text_section("Caption", $row['caption'], "caption");
                                                    display_form_text_section("Heading on hover", $row['heading_hover'], "heading_hover");
                                                    display_form_text_section("Subheading on hover", $row['subheading_hover'], "subheading_hover");
                                                    display_form_button_section("edit_portfolio_btn");
                                                    ?>

                                                    <!-- <div class="form-group">
                                                        <button class="btn btn-primary " type="submit"
                                                            name="gpbtn1">Save</button>
                                                    </div> -->
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
                    </div>
                    <!-- /#page-wrapper -->
                </div>
                <!--	jQuery Script for showing image preview-->
                <script src="https://code.jquery.com/jquery-1.12.4.min.js">
                </script>
                <script>
                //slide image

                jQuery(document).ready(function() {
                    var theImagePreview = '#' + '<?php echo $image_preview; ?>';
                    var theInputText = '#' + '<?php echo $image_label_id; ?>';
                    var theFileInput = '#' + '<?php echo $image_file_input; ?>';

                    previewImage(theImagePreview, theInputText, theFileInput);
                    console.log(theImagePreview);
                });

                function previewImage(imgElementForPreview, textInput, fileInput) {
                    //get the image name
                    console.log("fileInput " + fileInput);
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