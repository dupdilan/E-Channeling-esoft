<?php

require_once("php_action/function.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>KandyEChaneling</title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="custom/css/slider.css">
    <link  rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link  rel="stylesheet" href="custom/css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      
      <style>
.mySlides {display:none;}
</style>


  </head>
    <body data-spy="scroll" data-target="#navbar">
<!--Navbar-->
        <div>
        <nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
            <div class="container">
                <div class="navbar-header">
                   <a class="navbar-brand" href="#">KandyEChanelling</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="#my-navbar active"><a href="#">Home</a></li>
                    <li><a href="#doc">Find A Doctor</a></li>
                    <li><a href="#medi">Medical Checkup</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#cont">Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </nav>
        </div>
<!--header--->
        <section>
        <div class="jumbotron">
            <div class="container text-center" >
                <h1 >Kandy E Channeling </h1>
                <p>First time in kandy.you can search doctors,medical checkup and get fees within few secounds</p>
            </div>
        </div>
        </section>
<!--slider--->

<div class="w3-content w3-section" style="max-width:1200px">
  <img class="mySlides w3-animate-top" src="assets/images/slider01.jpg" style="width:100%">
  <img class="mySlides w3-animate-bottom" src="assets/images/slider02.jpg" style="width:100%">
  <img class="mySlides w3-animate-top" src="assets/images/slider03.jpg" style="width:100%">
  
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2500);    
}
</script>
        
     
<!--servis-->
        <section id="doc" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Our Services</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <span class="glyphicon glyphicon-search">
                                   
                                </span>
                                <h4>
                                    <strong>Find A doctor</strong>
                                </h4>
                                <p>You can find a doctor,channellig qiuck and easy.</p>
                                <button type="button" class="btn btn-default btn-xs"><a href="#doc" class="btn btn-light">Learn More</a></button>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <span class="glyphicon glyphicon-heart">
                               
                            </span>
                                <h4>
                                    <strong>Medical checkup</strong>
                                </h4>
                                <p>All medical ckeckup are available for low price with high quality.</p>
                                <button type="button" class="btn btn-default btn-xs"><a href="#medi" class="btn btn-light">Learn More</a></button>
                            </div>
                        </div>
                       
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <span class="glyphicon glyphicon-plus">
                               
                            </span>
                                <h4>
                                    <strong>Hospital</strong>
                                </h4>
                                <p>You can admit our new hospital and enjoy your life.</p>
                                <button type="button" class="btn btn-default btn-xs"><a href="#" class="btn btn-light">Learn More</a></button>
                            </div>
                        </div>
                    </div>
                   
                </div>
                
            </div>
          
        </div>
       
    </section>

        
        
        <!--find a doctor-->
      <section id="services" class="services bg-primary doctor">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Find A Doctor</h2>
                    <hr class="small">
                    <div class="row">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">  Select Medical category And Click Search </div>
                                            <div class="panel-body">
                                            
                                               <form class="form-horizontal" method="POST" action="php_action/serachdoctor.php" id="frmcatergory" >
                              
                                 
                                    <div class="form-group">
                                <label for="txtcatergory" class="col-sm-3 control-label" >Medical Catergory</label>
                                <div class="col-sm-6">
                                    <select name="txtcatergory" class="form-control">
				                            <option value="">Select a Catergory</option>
				                                        <?php
					                                       selectCourse();
				                                        ?>
			                         </select>
                                </div>
                              </div>
                                
                                
                                <div class="div-action pull">
                                                            <button type="submit" class="btn btn-default"  id="btnAddcat"><i class="glyphicon glyphicon-search"></i>  Search Doctor</button>
                                                            
                                                        </div>
                                
                                
                            </form>
                     
                                            </div>
                </div>
                           
                       
                    </div>
                   
                </div>
                
            </div>
          
        </div>
       
    </section>
        
        
         <!--find a Medical Checkup-->
      <section id="medi" class="services bg-primary ">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Find Medical Checkup</h2>
                    <hr class="small">
                    <div class="row">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">  Select Medical Checkup And Click Search </div>
                                            <div class="panel-body">
                                            
                                               <form class="form-horizontal" method="POST" action="php_action/serachmedcehck.php" id="frmcatergory" >
                              
                                 
                                    <div class="form-group">
                                <label for="txtmedicheck" class="col-sm-3 control-label" >Medical Checkup Name</label>
                                <div class="col-sm-6">
                                    <select name="txtmedicheck" class="form-control">
				                            <option value="">Select a Medical Checkup</option>
				                                        <?php
					                                       medicheck();
				                                        ?>
			                         </select>
                                </div>
                              </div>
                                
                                
                                <div class="div-action pull">
                                                            <button type="submit" class="btn btn-default"  id="btnAddcat"><i class="glyphicon glyphicon-search"></i>  Search Medical checkup</button>
                                                            
                                                        </div>
                                
                                
                            </form>
                     
                                            </div>
                </div>
                           
                       
                    </div>
                   
                </div>
                
            </div>
          
        </div>
       
    </section>
        
        
        
        
        
        
        
        
        
        
        
  <!-- gallery -->
	<div id="gallery" class="gallery_main">
		<div class="container">
			<h3 class="wthree_head text-center"><i class="fa fa-picture-o" aria-hidden="true" ></i>         <br>
                Photo Gallery</h3>
			<div class="w3l_gallery_grids">
				<ul class="w3l_gallery_grid gallery" id="lightGallery">
					<li data-title="EChanneling" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="assets/images/gallery01.jpg" data-responsive-src="assets/images/gallery01.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="assets/images/gallery01.jpg" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>EChanneling</h3>
									
								</div>
							</a>
						</div>
					</li>
					<li data-title="EChanneling" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="assets/images/gallery02.jpg" data-responsive-src="assets/images/gallery02.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="assets/images/gallery02.jpg" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>EChanneling</h3>
									
								</div>
							</a>
						</div>
					</li>
					<li data-title="EChanneling" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="assets/images/gallery03.jpg" data-responsive-src="assets/images/gallery03.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="assets/images/gallery03.jpg" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>EChanneling</h3>
									
								</div>
							</a>
						</div>
					</li>
					<li data-title="EChanneling" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="assets/images/gallery04.jpg" data-responsive-src="assets/images/gallery04.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="assets/images/gallery04.jpg" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>EChanneling</h3>
									
								</div>
							</a>
						</div>
					</li>
					<li data-title="EChanneling" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="assets/images/gallery05.jpg" data-responsive-src="assets/images/gallery05.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="assets/images/gallery05.jpg" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>EChanneling</h3>
									
								</div>
							</a>
						</div>
					</li>
					<li data-title="EChanneling" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="assets/images/gallery06.jpg" data-responsive-src="assets/images/gallery06.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="assets/images/gallery06.jpg" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>EChanneling</h3>
									
								</div>
							</a>
						</div>
					</li>
					<li data-title="EChanneling" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="assets/images/gallery07.jpg" data-responsive-src="assets/images/gallery07.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="assets/images/gallery07.jpg" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>EChanneling</h3>
									
								</div>
							</a>
						</div>
					</li>
					<li data-title="EChanneling" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="assets/images/gallery08.jpg" data-responsive-src="assets/images/gallery08.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="assets/images/gallery08.jpg" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>EChanneling</h3>
									
								</div>
							</a>
						</div>
					</li>
					<li data-title="EChanneling" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="assets/images/gallery09.jpg" data-responsive-src="assets/images/gallery09.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="assets/images/gallery09.jpg" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>EChanneling</h3>
									
								</div>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<script src="custom/js/custom.js"></script>
	<script>
    	 $(document).ready(function() {
			$("#lightGallery").lightGallery({
				mode:"fade",
				speed:800,
				caption:true,
				desc:true,
				mobileSrc:true
			});
		});
    </script> 
<!-- Contact us-->
        
        <section id="cont" class="services bg-primary ">
        <div class="container ">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Contact Us</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                
                                <h4>
                                    <strong>Get In Touch</strong>
                                </h4>
                                <div class="list-group">
                                <a href="#" class="list-group-item"><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
                                           Office : 081-2456789 </a>
                                <a href="#" class="list-group-item"><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Mobile : 077-6846745</a>
                                <a href="#" class="list-group-item"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                                        info@kandy.com</a>
                                <a href="#" class="list-group-item"><i class="glyphicon glyphicon-print" aria-hidden="true"></i>
                                        Fax : 081245678</a>
                                </div>
                                
                            </div>
                        </div>
                         <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                
                                <h4>
                                    <strong>Address</strong>
                                </h4>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        Head Office : <br>
                                        No.88 /A,
                                        Perardeniya Road,
                                        Kandy.
                                        <br>
                                        <br>
                                        Colombo Brach :<br>
                                        No.88 /A,
                                        Boralla Road,
                                        Colombo 7.
                                        
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        
                        
                        
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                
                                <h4>
                                    <strong>Links</strong>
                                </h4>
                                <div class="list-group">
                                <a href="#" class="list-group-item">
                                           Home </a>
                                <a href="#doc" class="list-group-item"> Find A Doctor</a>
                                <a href="#medi" class="list-group-item">
                                    Find Medical Checkup</a>
                                <a href="#gallery" class="list-group-item">
                                        Gallery</a>
                                <a href="#cont" class="list-group-item">
                                        Contact Us</a>
                                <a href="login.php" class="list-group-item">
                                        Admins Login</a>
                                </div>
                                
                            </div>
                        </div>
                        
                        
                       
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                
                                <h4>
                                    <strong>About Us</strong>
                                </h4>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                           This is Esoft WebEnginering Diploma project.
                                        
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                   
                </div>
                
            </div>
          
        </div>
       
    </section>

<!--contact Us-->
        
        
        
        
        
            <!--footer-->
				<div class="footersec">
					<div class="container">
						<div class="social-icons text-center">
							<a href="#"><i class="fa fa-facebook-official" style="font-size:40px" ></i></a>
							<a href="#"><i class="fa fa-google-plus-official" style="font-size:40px"></i></a>
							<a href="#"><i class="fa fa-linkedin-square" style="font-size:40px"></i></a>
							<a href="#"><i class="fa fa-twitter-square" style="font-size:40px"></i></a>
						</div>
						<div class="footer-top-w3ls-agileits text-center" >
							<p id="footerP">&copy; 2017 KandyEChanel. All rights reserved|Esoft Project| Design by DILAN U.Perera </p>
						</div>						
					</div>
				</div>
  

        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/jquery/jquery-3.2.1.min.js"></script>
    </body>
</html>