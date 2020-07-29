<div class="panel pane-default">
    <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse"
        data-parent="#faqAccordion" data-target="#benefits" style="background: #6f6f6f73;">
        <h2 class="panel-title">
            <a href="#" class="ing"> Homepage Benefits</a>
        </h2>

    </div>
    <div id="benefits" class="panel-collapse collapse" style="height: 0px;">
        <div class="panel-body">
            <div class="col-lg-12">
                <h3> <span class="label label-primary"> Benefits Section</span></h3>

                <div>
                    <h2 class="text-secondary"> Benefits title</h2>
                </div>
                <!-- Benefits title table -->
                <table class="table table-bordered">
                    <tr>
                        <th width="20%">Section Id</th>
                        <th width="30%">Heading</th>
                        <th width="60%">Subheading</th>
                        <th width="30%">Operation</th>
                    </tr>
                    <?php 
                $result = select_all(HOMEPAGE_BENEFITS);

                while($data = mysqli_fetch_assoc($result))
                {               
            ?>
                    <tr>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['title']; ?></td>
                        <td><?php echo $data['subtitle']; ?></td>
                        <td><a href="edithome.php?benefit_title_id=<?php echo $data['id']; ?>"
                                class="btn btn-success">Edit</a></td>
                        <?php
                            }
                            
                        ?>
                    </tr>
                </table>
                <div>
                    <h2 class="text-secondary"> Benefits contents</h2>
                </div>
                <table class="table table-bordered">
                    <tr>
                        <th width="20%">Section Id</th>
                        <th width="60%">Text</th>
                        <th width="30%">Operation</th>
                    </tr>
                    <?php 
                $result = select_all(HOMEPAGE_BENEFITS_CONTENTS);
                while($data = mysqli_fetch_assoc($result))
                {                
                
            ?>

                    <tr>

                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['benefits']; ?></td>
                        <td><a href="edithome.php?benefit_content_id=<?php echo $data['id']; ?>"
                                class="btn btn-success">Edit</a></td>
                        <?php
                            }
                            
                        ?>
                    </tr>
                </table>

            </div>

            <!-- Benefits title edit form -->
            <div>
                <?php 
                              if(isset($_GET['benefit_title_id']))
                               {
                                 $Edit_id = $_GET['benefit_title_id'];
                                 $result =select_all_ID(HOMEPAGE_BENEFITS, $Edit_id);
                                 $row = mysqli_fetch_assoc($result); 
                            ?>
                <form action="update.php" method="POST">
                    <div class="card">
                        <div class="card-body">
                            <hr>

                            <h3 class="card-title  btn-indigo"> Edit Benefits title Section</h3>
                            <hr>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input value="<?php echo $row['id']?>" name="edit_benefits_title_ID" placeholder=""
                                        readonly />
                                </div>
                                <div class="form-group">
                                    <label> Heading</label><br>
                                    <input type="text" name="heading" placeholder=""
                                        value="<?php echo $row['title']; ?>" />
                                </div>

                                <div class="form-group">
                                    <label> Subheading</label><br>
                                    <textarea type="text" name="subheading" placeholder="" cols="50"
                                        rows="4"><?php echo $row['subtitle']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary " type="submit"
                                        name="benefits_title_button">Save</button>
                                </div>
                            </div>
                        </div>
                </form>
                <?php
                       } 

                    ?>
            </div>
            <!-- End Benefits title edit form -->

            <!-- Benefits content edit form -->
            <div>
                <?php 
                              if(isset($_GET['benefit_content_id']))
                               {
                                 $Edit_id = $_GET['benefit_content_id'];
                                 $result =select_all_ID(HOMEPAGE_BENEFITS_CONTENTS, $Edit_id);
                                 $row = mysqli_fetch_assoc($result); 
                            ?>
                <form action="update.php" method="POST">
                    <div class="card">
                        <div class="card-body">
                            <hr>

                            <h3 class="card-title  btn-indigo"> Edit Benefits content Section</h3>
                            <hr>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input value="<?php echo $row['id']?>" name="id" placeholder="" readonly />
                                </div>
                                <div class="form-group">
                                    <label> Text</label><br>
                                    <input type="text" style="width:80%;    " name="heading"
                                        value="<?php echo $row['benefits']; ?>" />
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary " type="submit"
                                        name="benefits_content_button">Save</button>
                                </div>
                            </div>
                        </div>
                </form>
                <?php
                       } 

                    ?>
            </div>
            <!-- End Benefits content edit form -->
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>


<!-- /#page-wrapper -->