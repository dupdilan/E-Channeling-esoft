<?php 
    require_once("includes/header.php");
    require_once("php_action/function.php");
?>
           <div class="row">
        <div class="col-md-12">
             <ol class="breadcrumb">
                    <li><a href="dashboard.php">Home</a></li>
                    <li class="active">Doctor</li>
            </ol>
            <!-- add Doctor-->
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="glyphicon glyphicon-star-empty"></i> Add Doctor </div>
                        <div class="panel-body">
                           
                            
                            
                            <form class="form-horizontal" method="POST" action="php_action/adddoctor_handle.php" id="frmcatergory" >
                              
                                 <div class="form-group">
                                <label for="txtdoctorid" class="col-sm-3 control-label">Doctor ID</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control" id="txtdoctorid" name="txtdoctorid" placeholder="Input Doctor ID" required>
                                </div>
                              </div>
                                
                                <div class="form-group">
                                <label for="txtdoctorname" class="col-sm-3 control-label">Doctor Name</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="txtdoctorname" name="txtdoctorname" placeholder="Input Doctor name" required>
                                </div>
                              </div>
                                <div class="form-group">
                                <label for="txtdoctorgender" class="col-sm-3 control-label">Doctor Gender</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="txtdoctorgender" name="txtdoctorgender" placeholder="Input Doctor Gender F/M" required>
                                </div>
                              </div>
                                <div class="form-group">
                                <label for="txtdoctornic" class="col-sm-3 control-label">Doctor NIC number</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="txtdoctornic" name="txtdoctornic" placeholder="Input Doctor NIC 123456789v" required>
                                </div>
                              </div>
                                
                                <div class="form-group">
                                <label for="txtdoctordob" class="col-sm-3 control-label">Doctor Date of Brith</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="txtdoctordob" name="txtdoctordob" placeholder="Input Doctor DOB YYYY/MM/DD" required>
                                </div>
                              </div>
                                <div class="form-group">
                                <label for="txtdoctordetails" class="col-sm-3 control-label">Doctor Details</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="txtdoctordetails" name="txtdoctordetails" placeholder="Input dotor details" required>
                                </div>
                              </div>
                                
                                
                                    <div class="form-group">
                                <label for="txtcatergory" class="col-sm-3 control-label">Medical Catergory</label>
                                <div class="col-sm-6">
                                    <select name="txtcatergory" class="form-control">
				                            <option value="">Select a Catergory</option>
				                                        <?php
					                                       selectCourse();
				                                        ?>
			                         </select>
                                </div>
                              </div>
                                
                                
                                <div class="div-action pull pull-right">
                                                            <button type="submit" class="btn btn-default"  id="btnAddcat"><i class="glyphicon glyphicon-plus"></i>  Add Doctor</button>
                                                            <button type="reset" class="btn btn-default"  id="btnAddcat"><i class="glyphicon glyphicon-remove"></i> Cancel</button>
                                                        </div>
                    <!--            <?php
				                    if(isset($_GET["error"]))
				                        {
					                       $error=$_GET["error"];
					                       if($error==1)
					                           {
						                      echo("<font color='red'>Please insert a Another Docorts ID This is alredy active.");
					                           }
				                        }
			                    ?>
                                <?php
				                    if(isset($_GET["success"]))
				                        {
					                       $error=$_GET["success"];
					                       if($success==1)
					                           {
						                      echo("<font color='red'>SUCCESS! Doctor Added ");
					                           }
				                        }
			                    ?>
                                -->
                            </form>
                                                      

                         </div>
                </div>
    <!-- edit doctor-->
                         <div class="panel panel-default">
                    <div class="panel-heading"><i class="glyphicon glyphicon-star-empty"></i> Edit Doctor </div>
                        <div class="panel-body">
                           
                            
                            
                            <form class="form-horizontal" method="POST" action="php_action/editdoctor_handle.php" id="frmdoctor" >
                              
                                 <div class="form-group">
                                <label for="txtdoctorid" class="col-sm-3 control-label">Doctor ID</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control" id="txtdoctorid" name="txtdoctorid" placeholder="Input Doctor ID" required>
                                </div>
                              </div>
                                
                                <div class="form-group">
                                <label for="txtdoctorname" class="col-sm-3 control-label">Doctor Name</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="txtdoctorname" name="txtdoctorname" placeholder="Input Doctor name" required>
                                </div>
                              </div>
                                <div class="form-group">
                                <label for="txtdoctorgender" class="col-sm-3 control-label">Doctor Gender</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="txtdoctorgender" name="txtdoctorgender" placeholder="Input Doctor Gender F/M" required>
                                </div>
                              </div>
                                <div class="form-group">
                                <label for="txtdoctornic" class="col-sm-3 control-label">Doctor NIC number</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="txtdoctornic" name="txtdoctornic" placeholder="Input Doctor NIC 123456789v" required>
                                </div>
                              </div>
                                
                                <div class="form-group">
                                <label for="txtdoctordob" class="col-sm-3 control-label">Doctor Date of Brith</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="txtdoctordob" name="txtdoctordob" placeholder="Input Doctor DOB YYYY/MM/DD" required>
                                </div>
                              </div>
                                <div class="form-group">
                                <label for="txtdoctordetails" class="col-sm-3 control-label">Doctor Details</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="txtdoctordetails" name="txtdoctordetails" placeholder="Input dotor details" required>
                                </div>
                              </div>
                                
                                
                                    <div class="form-group">
                                <label for="txtcatergory" class="col-sm-3 control-label">Medical Catergory</label>
                                <div class="col-sm-6">
                                    <select name="txtcatergory" class="form-control">
				                            <option value="">Select a Catergory</option>
				                                        <?php
					                                       selectCourse();
				                                        ?>
			</select>
                                </div>
                              </div>
                                
                                
                                <div class="div-action pull pull-right">
                                                            <button type="submit" class="btn btn-default"  id="btnAddcat"><i class="glyphicon glyphicon-pencil"></i>  Update Doctor</button>
                                                            <button type="reset" class="btn btn-default"  id="btnAddcat"><i class="glyphicon glyphicon-remove"></i> Cancel</button>
                                                        </div>
                            </form>
                                                      

                         </div>
                </div>
    <!-- delete doctor-->
            <div class="panel panel-default">
                    <div class="panel-heading"><i class="glyphicon glyphicon-star-empty"></i> Delete Doctor</div>
                        <div class="panel-body">
                           
                            
                            
                            <form class="form-horizontal" method="POST" action="php_action/deletedoctor_handle.php" id="frmcatergory" >
                              
                                 <div class="form-group">
                                <label for="Doctor" class="col-sm-3 control-label">Doctor ID</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control" id="txtdoctorid" name="txtdoctorid" placeholder="Input Doctor ID" required>
                                </div>
                              </div>
                                
                                <div class="div-action pull pull-right">
                                                            <button type="submit" class="btn btn-default"  id="btnAddcat"><i class="glyphicon glyphicon-trash"></i>  Delete Doctor</button>
                                                            <button type="reset" class="btn btn-default"  id="btnAddcat"><i class="glyphicon glyphicon-remove"></i> Cancel</button>
                                                        </div>
                            </form>
                                                      

                         
                         </div>
                </div>
            
             <!-- table-->
            
                  <div class="panel panel-default">
                    <div class="panel-heading"><i class="glyphicon glyphicon-star-empty"></i> All Catergories</div>
                        <div class="panel-body">
                           
                            <?php
                                 
                                 require_once("php_action/viwealldoctor.php");
                            
                                 ?>
                            
                           
                         </div>
                </div>
            
    

<?php 
    require("includes/footer.php");
?>