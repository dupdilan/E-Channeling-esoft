<?php 
    require_once("includes/header.php");

?>
   
    <div class="row">
        <div class="col-md-12">
             <ol class="breadcrumb">
                    <li><a href="dashboard.php">Home</a></li>
                    <li class="active">Catergory</li>
            </ol>
            <!-- add catergory-->
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="glyphicon glyphicon-star-empty"></i> Add Catergory</div>
                        <div class="panel-body">
                           
                            
                            
                            <form class="form-horizontal" method="POST" action="php_action/addcatergory_handle.php" id="frmcatergory" >
                              
                                 <div class="form-group">
                                <label for="catergoryid" class="col-sm-3 control-label">Catergory ID</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control" id="txtcatergoryid" name="txtcatergoryid" placeholder="Input catergory ID" required>
                                </div>
                              </div>
                                
                                <div class="form-group">
                                <label for="catergoryname" class="col-sm-3 control-label">Catergory Name</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="txtcatergoryname" name="txtcatergoryname" placeholder="Input catergory name" required>
                                </div>
                              </div>
                                    <div class="form-group">
                                <label for="catergorydetails" class="col-sm-3 control-label">Catergory details</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="txtcatergorydetails" name="txtcatergorydetails" placeholder="Input catergory details" required>
                                </div>
                              </div>
                                
                                <div class="div-action pull pull-right">
                                                            <button type="submit" class="btn btn-default"  id="btnAddcat"><i class="glyphicon glyphicon-plus"></i>  Add Catergory</button>
                                                            <button type="reset" class="btn btn-default"  id="btnAddcat"><i class="glyphicon glyphicon-remove"></i> Cancel</button>
                                                        </div>
                            </form>
                                                      

                        
                         </div>
                </div>
            
            
            <!-- edit catergory-->
            
            
                 <div class="panel panel-default">
                    <div class="panel-heading"><i class="glyphicon glyphicon-star-empty"></i> Update Catergory</div>
                        <div class="panel-body">
                           
                            
                            
                            <form class="form-horizontal" method="POST" action="php_action/editcatergory_handle.php" id="frmcatergory" >
                              
                                 <div class="form-group">
                                <label for="catergoryid" class="col-sm-3 control-label">Catergory ID</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control" id="txtcatergoryid" name="txtcatergoryid" placeholder="Input catergory ID" required>
                                </div>
                              </div>
                                
                                <div class="form-group">
                                <label for="catergoryname" class="col-sm-3 control-label">Catergory Name</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="txtcatergoryname" name="txtcatergoryname" placeholder="Input catergory name" required>
                                </div>
                              </div>
                                    <div class="form-group">
                                <label for="catergorydetails" class="col-sm-3 control-label">Catergory details</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="txtcatergorydetails" name="txtcatergorydetails" placeholder="Input catergory details" required>
                                </div>
                              </div>
                                
                                <div class="div-action pull pull-right">
                                                            <button type="submit" class="btn btn-default"  id="btnAddcat"><i class="glyphicon glyphicon-pencil"></i>  Update Catergory</button>
                                                            <button type="reset" class="btn btn-default"  id="btnAddcat"><i class="glyphicon glyphicon-remove"></i> Cancel</button>
                                                        </div>
                            </form>
                                                      

                         
                                   
                         </div>
                </div>
                
            
            <!-- delete catergory-->
            
            
                 <div class="panel panel-default">
                    <div class="panel-heading"><i class="glyphicon glyphicon-star-empty"></i> Delete Catergory</div>
                        <div class="panel-body">
                           
                            
                            
                            <form class="form-horizontal" method="POST" action="php_action/deletecatergory_handle.php" id="frmcatergory" >
                              
                                 <div class="form-group">
                                <label for="catergoryid" class="col-sm-3 control-label">Catergory ID</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control" id="txtcatergoryid" name="txtcatergoryid" placeholder="Input catergory ID" required>
                                </div>
                              </div>
                                
                                <div class="div-action pull pull-right">
                                                            <button type="submit" class="btn btn-default"  id="btnAddcat"><i class="glyphicon glyphicon-trash"></i>  Delete Catergory</button>
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
                                 
                                 require_once("php_action/viweallcatergory.php");
                            
                                 ?>
                            
                           
                         </div>
                </div>
            
            
            
            
            
            
        </div>
    </div>
        


      



<?php 
    require_once("includes/footer.php");
?>