<?php 
    require("includes/header.php");
?>
    
            <div class="row">
        <div class="col-md-12">
             <ol class="breadcrumb">
                    <li><a href="dashboard.php">Home</a></li>
                    <li class="active">Medical Checkup</li>
            </ol>
            <!-- add medical checkup-->
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="glyphicon glyphicon-star-empty"></i> Add Medical checkup</div>
                        <div class="panel-body">
                           
                            
                            
                            <form class="form-horizontal" method="POST" action="php_action/addmedcheck_handle.php" id="frmcatergory" >
                              
                                 <div class="form-group">
                                <label for="catergoryid" class="col-sm-3 control-label">Medical Checkup ID</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control" id="txtmedicheckid" name="txtmedicheckid" placeholder="Input Medical Checkup ID" required>
                                </div>
                              </div>
                                
                                <div class="form-group">
                                <label for="catergoryname" class="col-sm-3 control-label">Medical Checkup Name</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="txtmedicheckname" name="txtmedicheckname" placeholder="Input Medical Checkup name" required>
                                </div>
                              </div>
                                    <div class="form-group">
                                <label for="catergorydetails" class="col-sm-3 control-label">Medical Checkup details</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="txtmedicheckdetails" name="txtmedicheckdetails" placeholder="Input Medical Checkup details" required>
                                </div>
                              </div>
                                
                                
                                    <div class="form-group">
                                <label for="catergorydetails" class="col-sm-3 control-label">Medical Checkup fee</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control" id="txtmedicheckfee" name="txtmedicheckfee" placeholder="Input Medical Checkup details" required>
                                </div>
                              </div>
                                
                                <div class="div-action pull pull-right">
                                                            <button type="submit" class="btn btn-default"  id="btnAddcat"><i class="glyphicon glyphicon-plus"></i>  Add Medical Checkup</button>
                                                            <button type="reset" class="btn btn-default"  id="btnAddcat"><i class="glyphicon glyphicon-remove"></i> Cancel</button>
                                                        </div>
                            </form>
                     
                         </div>
                </div>
            
            
            <!-- edit catergory-->
            
            
                 <div class="panel panel-default">
                    <div class="panel-heading"><i class="glyphicon glyphicon-star-empty"></i> Update Medical Checkup</div>
                        <div class="panel-body">
                           
                            
                            
                            <form class="form-horizontal" method="POST" action="php_action/editmedcheck_handle.php" id="frmcatergory" >
                              
                                 <div class="form-group">
                                <label for="catergoryid" class="col-sm-3 control-label">Medical Checkup ID</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control" id="txtmedicheckid" name="txtmedicheckid" placeholder="Input Medical Checkup ID" required>
                                </div>
                              </div>
                                
                                <div class="form-group">
                                <label for="catergoryname" class="col-sm-3 control-label">Medical Checkup Name</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="txtmedicheckname" name="txtmedicheckname" placeholder="Input Medical Checkup name" required>
                                </div>
                              </div>
                                    <div class="form-group">
                                <label for="catergorydetails" class="col-sm-3 control-label">Medical Checkup details</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="txtmedicheckdetails" name="txtmedicheckdetails" placeholder="Input Medical Checkup details" required>
                                </div>
                              </div>
                                    <div class="form-group">
                                <label for="catergorydetails" class="col-sm-3 control-label">Medical Checkup fee</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control" id="txtmedicheckfee" name="txtmedicheckfee" placeholder="Input Medical Checkup details" required>
                                </div>
                              </div>
                                
                                <div class="div-action pull pull-right">
                                                            <button type="submit" class="btn btn-default"  id="btnAddcat"><i class="glyphicon glyphicon-pencil"></i>  Update Medical Checkup</button>
                                                            <button type="reset" class="btn btn-default"  id="btnAddcat"><i class="glyphicon glyphicon-remove"></i> Cancel</button>
                                                        </div>
                            </form>
                                                      

                         
                                   
                         </div>
                </div>
                
            
            <!-- delete catergory-->
            
            
                 <div class="panel panel-default">
                    <div class="panel-heading"><i class="glyphicon glyphicon-star-empty"></i> Delete Medical Checkup</div>
                        <div class="panel-body">
                           
                            
                            
                            <form class="form-horizontal" method="POST" action="php_action/deletemedcheck_handle.php" id="frmcatergory" >
                              
                                 <div class="form-group">
                                <label for="catergoryid" class="col-sm-3 control-label">Medical Checkup ID</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control" id="txtmedicheckid" name="txtmedicheckid" placeholder="Input Medical Checkup ID" required>
                                </div>
                              </div>
                                
                                <div class="div-action pull pull-right">
                                                            <button type="submit" class="btn btn-default"  id="btnAddcat"><i class="glyphicon glyphicon-trash"></i>  Delete Medical Checkup</button>
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
                                 
                                 require_once("php_action/viweallmedicheck.php");
                            
                                 ?>
                            
                           
                         </div>
                </div>
            



<?php 
    require("includes/footer.php");
?>