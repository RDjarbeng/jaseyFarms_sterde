<div class="panel pane-default">
    <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse"
        data-parent="#faqAccordion" data-target="#clients" style="background: #6f6f6f73;">
        <h2 class="panel-title">
            <a href="#" class="ing"> Homepage Products</a>
        </h2>
    </div>
    <div id="clients" class="panel-collapse collapse" style="height: 0px;">
        <div class="panel-body">
            <div class="col-lg-12">
                <h3> <span class="label label-primary"> Products Section</span></h3>
                <div>
                    <h2 class="text-secondary"> Products title</h2>
                </div>

                <table class="table table-bordered">
                    <tr>
                        <th width="10%">Section Id</th>
                        <th width="40%">Slide caption</th>
                        <th width="20%">Heading</th>
                        <th width="60%">Subheading</th>
                        <th width="30%">Operation</th>
                    </tr>

                    <?php 
                              
                                 $query = "SELECT * FROM ". HOMEPAGE_PRODUCTS ;
                                 $result = mysqli_query($con, $query);
                               while ($data = mysqli_fetch_assoc($result)) {
                                ?>

                    <tr>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['slide_caption']; ?></td>
                        <td><?php echo $data['title']; ?></td>
                        <td><?php echo $data['subtitle']; ?></td>
                        <td><a href="edithome.php?product_ID=<?php echo $data['id']; ?>" onclick="return true;"
                                class="btn btn-success">Edit</a></td>
                        <?php
                            }
                        ?>
                    </tr>
                </table>
                <!-- Products pictures -->
                <div>
                    <span>
                        <h2 class="text-secondary"> Products pictures</h2>
                    </span>
                    <table class="table table-bordered">
                        <tr>
                            <th width="10%">Section Id</th>
                            <th width="20%">Section Image</th>
                            <!-- <th width="30%">Section text</th> -->
                            <th width="60%">Section text</th>

                            <th width="30%">Operation</th>
                        </tr>

                        <?php 
                                 $result = select_all(HOMEPAGE_PROD_PICTURES);
                               while ($data = mysqli_fetch_assoc($result)) {
                                ?>
                        <tr>

                            <td><?php echo $data['id']; ?></td>
                            <td><img class="img-responsive" width="50" height="50"
                                    src="<?php echo display_image($data['image']); ?>" /></td>
                            <td><?php echo $data['text']; ?></td>
                            <td><a href="edithome.php?edit_prod_pic_id=<?php echo $data['id']; ?>"
                                    class="btn btn-success">Edit</a></td>
                            <?php
                            }                            
                        ?>
                        </tr>
                    </table>
                </div>
            </div>
            <!--End of Products pictures -->
            <!-- product title edit form -->
            <?php 
                              if(isset($_GET['product_ID']))
                               {
                                 $Edit_id = $_GET['product_ID'];
                                 //$query = "SELECT * FROM ".HOMEPAGE_PRODUCTS." where id ='$Edit_id' " ;
                                 $table =HOMEPAGE_PRODUCTS;
                                 $result = select_all_id($table, $Edit_id);
                                 $row = mysqli_fetch_assoc($result); 
                            ?>


            <form action="update.php" method="POST">
                <div class="card">
                    <div class="card-body">
                        <hr>

                        <h3 class="card-title  btn-indigo"> Edit Products title Section</h3>
                        <hr>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input value="<?php echo $row['id']?>" name="edit_prod_title_ID" placeholder=""
                                    readonly />
                            </div>

                            <div class="form-group">
                                <label> Slide Caption</label><br>
                                <textarea type="text" name="slide_caption" placeholder="" cols="50"
                                    rows="4"><?php echo $row['slide_caption']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label> Heading</label><br>
                                <input type="text" name="heading" placeholder="" value="<?php echo $row['title']; ?>" />
                            </div>

                            <div class="form-group">
                                <label> Subheading</label><br>
                                <textarea type="text" name="subheading" placeholder="" cols="50"
                                    rows="4"><?php echo $row['subtitle']; ?></textarea>
                            </div>



                            <div class="form-group">
                                <button class="btn btn-primary " type="submit" name="prod_title_button">Save</button>
                            </div>
                        </div>
                    </div>
            </form>


            <?php
                                } 
                             ?>
            <!-- End of product title edit form -->
            <!-- Edit form for products pictures -->
            <div>
                <?php 
                              if(isset($_GET['edit_prod_pic_id']))
                               {
                                 $Edit_id = $_GET['edit_prod_pic_id'];
                                 console_log($Edit_id);
                                 
                                 $table =HOMEPAGE_PROD_PICTURES;
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

                            <h3 class="card-title  btn-indigo"> Edit Product Pictures Section</h3>
                            <p class="text-secondary bg-warning">
                                Images must be present in images folder
                            </p>
                            <hr>
                            <div class="form-group">
                                <input value="<?php echo $row['id']?>" name="edit_prod_ID" readonly />

                                <div class="form-group ">
                                    <label> Image</label><br>
                                    <img id="current_prod_img" style="margin: 5%;" width="200" height="200"
                                        src="<?php echo display_image( $row['image']); ?>" />

                                    <input type="file" id="prod_pic_input" name="image" />
                                </div>
                                <div class="form-group">
                                    <input style="width: 80%;" value="<?php echo $row['image']?>" name="db_image"
                                        id="prod_image_label" readonly />
                                </div>


                                <div class="form-group">
                                    <label> Section text</label><br>
                                    <textarea type="text" name="img_text" cols="50"
                                        rows="5"><?php echo $row['text']; ?></textarea>
                                </div>
                                <!-- submit button -->
                                <div class="form-group">
                                    <button class="btn btn-primary " type="submit"
                                        name="prod_pic_edit_btn">Save</button>
                                </div>
                            </div>
                        </div>
                        <script>
                        //get the image name 
                        $(document).ready(function() {
                            $('#prod_pic_input').change(function(e) {
                                var fileName = e.target.files[0].name;
                                $('#prod_image_label').val(fileName);
                                readURL(this);
                            });
                        });
                        //preview the image
                        function readURL(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function(e) {
                                    $('#current_prod_img').attr('src', e.target.result);
                                }

                                reader.readAsDataURL(input.files[0]); // convert to base64 string

                            }
                        }
                        </script>
                </form>


                <?php

                       } 

                    ?>
            </div>
            <!-- End of Editing form for product pictures -->
        </div>