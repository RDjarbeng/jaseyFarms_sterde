<?php require_once ('./includes/header.php'); ?>
<?php require_once ('../config.php'); ?>


<body>

    <div id="wrapper">
        <?php require_once ('./includes/nav.php'); ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page contents -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            Edit About Page
                        </h3>
                    </div>
                    <div class="panel-group col-lg-12 grid-margin" id="faqAccordion">
                        <div class="panel pane-default">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse"
                                data-parent="#faqAccordion" data-target="#abt_content" style="background: #6f6f6f73;">
                                <h2 class="panel-title">
                                    <a href="#" class="ing"> Aboutpage Content</a>
                                </h2>

                            </div>
                            <div id="abt_content" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <div class="col-lg-12">
                                        <h3> <span class="label label-primary"> About content</span></h3>

                                        <table class="table table-bordered">
                                            <tr>
                                                <th width="5%">Section Id</th>

                                                <th>Content</th>

                                                <th width="5%">Operation</th>
                                            </tr>

                                            <?php 
                $table =ABOUTPAGE_CONTENT;
                $result = select_all($table);
                while($data = mysqli_fetch_assoc($result))
                {
                          
            ?>
                                            <tr>

                                                <td><?php echo $data['id']; ?></td>
                                                <td><?php echo $data['content']; ?></td>
                                                <td><a href="editabout.php?edit_abt=<?php echo $data['id']; ?>"
                                                        class="btn btn-success">Edit</a></td>
                                                <?php
                            }
                            
                        ?>
                                            </tr>
                                        </table>

                                    </div>


                                    <?php 
                              if(isset($_GET['edit_abt']))
                               {
                                 $Edit_id = $_GET['edit_abt'];
                                 $table =ABOUTPAGE_CONTENT;
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
                                                    <input value="<?php echo $row['id']?>" readonly name="id" />

                                                    <div class="form-group">
                                                        <label> Content </label><br>
                                                        <textarea type="text" name="content" placeholder="" cols="100"
                                                            rows="10"><?php echo $row['content']; ?></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <button class="btn btn-primary " type="submit"
                                                            name="edit_abt_content_btn">Save</button>
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


                        <!--  Homepage Strategic positioning   -->
                        <div class="panel pane-default">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse"
                                data-parent="#faqAccordion" data-target="#position" style="background: #6f6f6f73;">
                                <h2 class="panel-title">
                                    <a href="#" class="ing"> Aboutpage Strategic Positioning</a>
                                </h2>
                            </div>
                            <div id="position" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <div class="col-lg-12">
                                        <h3> <span class="label label-primary"> Strategic Positioning Section</span>
                                        </h3>

                                        <table class="table table-bordered">
                                            <tr>
                                                <th width="5%"> Id</th>
                                                <th width="30%">Heading</th>
                                                <th width="60%">Content</th>
                                                <th width="5%">Operation</th>
                                            </tr>

                                            <?php 
                                  $table= ABOUTPAGE_POSITIONING;
                                  $result = select_all($table);
                                  while($data = mysqli_fetch_assoc($result))
                                    { 
                
                            ?>
                                            <tr>
                                                <td><?php echo $data['id']; ?></td>
                                                <td><?php echo $data['title']; ?></td>
                                                <td><?php echo $data['content']; ?></td>

                                                <td><a href="editabout.php?edit_position=<?php echo $data['id']; ?>"
                                                        class="btn btn-success">Edit</a></td>
                                                <?php
                            }
                            
                        ?>
                                            </tr>
                                        </table>

                                    </div>


                                    <?php 
                                    //about strategic positoning form
                              if(isset($_GET['edit_position']))
                               {
                                 $Edit_id = $_GET['edit_position'];
                                 $table= ABOUTPAGE_POSITIONING;
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


                                                    <div class="form-group">
                                                        <label> Heading</label><br>
                                                        <input type="text" style="width:50%;" name="title"
                                                            placeholder="" value="<?php echo $row['title']; ?>" />
                                                    </div>

                                                    <div class="form-group">
                                                        <label> Content </label><br>
                                                        <textarea type="text" name="content" placeholder="" cols="100"
                                                            rows="10"><?php echo $row['content']; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-primary " type="submit"
                                                            name="abtpage_stratpos_btn">Save</button>
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

                        <!--end clients--->


                        <!--about page cards edit-->

                        <div class="panel pane-default">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse"
                                data-parent="#faqAccordion" data-target="#about_card" style="background: #6f6f6f73;">
                                <h2 class="panel-title">
                                    <a href="#" class="ing"> Aboutpage Vision, Mission & Values(cards)</a>
                                </h2>

                            </div>
                            <div id="about_card" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <div class="col-lg-12">
                                        <h3> <span class="label label-primary"> Aboutpage cards</span></h3>
                                        <table class="table table-bordered">
                                            <tr>
                                                <th width="5%"> Id</th>
                                                <th width="30%">Heading</th>
                                                <th width="60%">Content</th>
                                                <th width="5%">Operation</th>
                                            </tr>

                                            <?php 
                                  $table= ABOUTPAGE_ABOUTUS_CARDS;
                                  $result = select_all($table);
                                  while($data = mysqli_fetch_assoc($result))
                                    { 
                
                            ?>
                                            <tr>
                                                <td><?php echo $data['id']; ?></td>
                                                <td><?php echo $data['title']; ?></td>
                                                <td><?php echo $data['content']; ?></td>

                                                <td><a href="editabout.php?edit_cards=<?php echo $data['id']; ?>"
                                                        class="btn btn-success">Edit</a></td>
                                                <?php
                            }
                            
                        ?>
                                            </tr>
                                        </table>

                                    </div>


                                    <?php 
                              if(isset($_GET['edit_cards']))
                               {
                                 $Edit_id = $_GET['edit_cards'];
                                 $table= ABOUTPAGE_ABOUTUS_CARDS;
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
                                                    <input value="<?php echo $row['id']?>" readonly name="id"
                                                        placeholder="" />


                                                    <div class="form-group">
                                                        <label> Heading</label><br>
                                                        <input type="text" style="width:50%;" name="title"
                                                            placeholder="" value="<?php echo $row['title']; ?>" />
                                                    </div>


                                                    <div class="form-group">
                                                        <label> Content </label><br>
                                                        <textarea type="text" name="content" placeholder="" cols="100"
                                                            rows="5"><?php echo $row['content']; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-primary " type="submit"
                                                            name="abtpage_cards_btn">Save</button>
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


                        <!--end services-->

                        <!--- benefits    -->
                        <div class="panel pane-default">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse"
                                data-parent="#faqAccordion" data-target="#benefits" style="background: #6f6f6f73;">
                                <h2 class="panel-title">
                                    <a href="#" class="ing"> Aboutpage Strategy</a>
                                </h2>

                            </div>
                            <div id="benefits" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <div class="col-lg-12">
                                        <h3> <span class="label label-primary"> Slide Section</span></h3>

                                        <table class="table table-bordered">
                                            <tr>
                                                <th width="20%">Section Id</th>
                                                <th width="30%">Heading</th>
                                                <th width="40%">Subheading</th>
                                                <th width="20%">Sub1</th>
                                                <th width="20%">Sub2 </th>
                                                <th width="20%">Sub2 </th>
                                                <th width="20%">Cont1 </th>
                                                <th width="20%">Cont2 </th>
                                                <th width="20%">Cont3 </th>

                                                <th width="30%">Operation</th>
                                            </tr>

                                            <?php 
                                $query = "SELECT * FROM aboutpage_strategy" ;
                                $result = mysqli_query($con, $query);
                                while($data = mysqli_fetch_assoc($result))
                                    {
                                        $heading = $data['heading']; 
                                        $subheading = $data['subheading']; 
                                        $sub1 = $data['sub1']; 
                                        $sub2 = $data['sub2']; 
                                        $sub3 = $data['sub3']; 
                                        $cont1 = $data['cont1']; 
                                        $cont2 = $data['cont2']; 
                                        $cont3 = $data['cont3']; 
                
                            ?>


                                            <tr>

                                                <td><?php echo $data['id']; ?></td>
                                                <td><?php echo $data['heading']; ?></td>
                                                <td><?php echo $data['subheading']; ?></td>
                                                <td><?php echo $data['sub1']; ?></td>
                                                <td><?php echo $data['sub2']; ?></td>
                                                <td><?php echo $data['sub3']; ?></td>
                                                <td><?php echo $data['cont1']; ?></td>
                                                <td><?php echo $data['cont2']; ?></td>
                                                <td><?php echo $data['cont3']; ?></td>

                                                <td><a href="editabout.php?edit4=<?php echo $data['id']; ?>"
                                                        class="btn btn-success">Edit</a></td>
                                                <?php
                            }
                            
                        ?>
                                            </tr>
                                        </table>

                                    </div>


                                    <?php 
                              if(isset($_GET['edit4']))
                               {
                                 $Edit_id = $_GET['edit4'];
                                 $query = "SELECT * FROM aboutpage_strategy where id ='$Edit_id' " ;
                                 $result = mysqli_query($con, $query);
                                 $row = mysqli_fetch_assoc($result); 
                            ?>


                                    <form action="update.php" method="POST">
                                        <div class="card">
                                            <div class="card-body">
                                                <hr>

                                                <h3 class="card-title  btn-indigo"> Edit Section</h3>
                                                <hr>
                                                <div class="form-group">
                                                    <input value="<?php echo $row['id']?>" type="hidden"
                                                        name="streditslide_ID" placeholder="" />

                                                    <div class="form-group">
                                                        <label> Heading</label><br>
                                                        <input type="text" name="strheading" placeholder=""
                                                            value="<?php echo $row['heading']; ?>" />
                                                    </div>

                                                    <div class="form-group">
                                                        <label> Subheading</label><br>
                                                        <textarea type="text" name="strsubheading" placeholder=""
                                                            cols="50"
                                                            rows="8"><?php echo $row['subheading']; ?></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label> Sub1</label><br>
                                                        <textarea type="text" name="sub1" placeholder="" cols="50"
                                                            rows="8"><?php echo $row['sub1']; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label> Sub2</label><br>
                                                        <textarea type="text" name="sub2" placeholder="" cols="50"
                                                            rows="8"><?php echo $row['sub2']; ?></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label> Sub3</label><br>
                                                        <textarea type="text" name="sub3" placeholder="" cols="50"
                                                            rows="8"><?php echo $row['sub3']; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Cont1</label><br>
                                                        <textarea type="text" name="cont1" placeholder="" cols="50"
                                                            rows="8"><?php echo $row['cont1']; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label> Cont2</label><br>
                                                        <textarea type="text" name="cont2" placeholder="" cols="50"
                                                            rows="8"><?php echo $row['cont2']; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label> Cont3</label><br>
                                                        <textarea type="text" name="cont3" placeholder="" cols="50"
                                                            rows="8"><?php echo $row['cont3']; ?></textarea>
                                                    </div>


                                                    <div class="form-group">
                                                        <button class="btn btn-primary " type="submit"
                                                            name="abtbtn4">Save</button>
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



                        <!---end benefits--->

                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->


            <!--end team-->



        </div>
        <!-- /#wrapper -->
        <?php require_once ('./includes/footer.php'); ?>