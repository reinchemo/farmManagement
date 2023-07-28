<?php
session_start();

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Document</title>
	


    <link href="assets/css/bootstrap.css" rel="stylesheet" />
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/css/flexslider.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />    
 
</head>
<body >
   
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                 
                </button>
              
                <h2>Farm Management system</h2>
               
            </div>
            <style>
  /* Custom CSS to make the navigation bar green */
  .navbar-nav {
    background-color: green;
  }

  /* Styling for the links in the navigation bar (optional) */
  .navbar-nav li a {
    color: white;
    font-weight: bold;
  }

  .navbar-nav li a:hover {
    color: yellow; /* Change link color on hover (optional) */
  }
</style>

<div class="navbar-collapse collapse move-me">
  <ul class="nav navbar-nav navbar-right">
    <li><a href="#home">HOME</a></li>
    <li><a href="#testimonials-sec">SERVICES</a></li>
    <li><a href="#brand-sec">FAQS</a></li>
    <li><a href="#course-sec">CONTACT US</a></li>
  </ul>
</div>
  
           
        </div>
    </div>
     
       <div class="#" id="home" >
           <div class="#">
 <div class="container">
           <div class="row text-center " >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
                <div class="flexslider set-flexi" id="main-section" >
                    <ul class="slides move-me">
                        <!-- Slider 01 -->
                        <li>
                              <h3>What are we?</h3>
                           <p>Welcome to our website dashboard! Our farm management system is designed to empower farmers like you with the tools and insights needed to optimize your farming operations. With features like crop and livestock management, inventory tracking, financial management, and real-time weather monitoring, you can make informed decisions, increase productivity, and achieve sustainable and profitable farming practices. Our user-friendly interface and mobile accessibility ensure that you stay connected to your farm, even on-the-go. Let's grow together and unlock the full potential of your farm with our powerful farm management system</p>
                            <a  href="#features-sec" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#ln">
                                SIGN IN
                            </a>
                             <a  href="#features-sec" class="btn btn-success btn-lg" data-toggle="modal" data-target="#su">
                                SIGN UP
                            </a>
							
							<a  href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#an">
                                ADMIN
                            </a>
                        </li>
                        <!-- End Slider 01 -->
                        
                       
                        
                        
                </div>
                   
     
              
              
            </div>
                
               </div>
                </div>
           </div>
           
       </div>
       <!--HOME SECTION END-->   
    <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
       
                   </div>
               </div>
             </div>
        
    </div>
    <!--HOME SECTION TAG LINE END-->   
         <div id="testimonials-sec" class="container set-pad" >
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">SERVICES</h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s" >
                     Have a look at the information that we provide to clients to help them in gorwing their farm products 
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->


           <div class="row" >
           
               
                 <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="about-div">
                  <center>  <img  src="assets/img/crop.jpg" style="width:200px;height:200px;" />
                   <h3 >Crop Management</h3>

                
                   <p >
                   The system allows farmers to plan, monitor, and record data related to crop cultivation and livestock rearing. It helps track planting and harvesting schedules, manage livestock health and breeding records, and monitor crop growth and yield.
                   </p>
				   </center>
               
                </div>
                   </div>
                   

				   
				 
                 
                   <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="about-div">
                  <center>  <img  src="assets/img/livestock.jpg" style="width:200px;height:200px;" />
                   <h3 >livestock Management</h3>

                
                   <p >
                   Livestock management is an essential aspect of modern agriculture that involves the care, breeding, and overall management of domesticated animals raised for various purposes, such as meat, milk, wool, and other products.
				   </center>
               
                </div>
                   </div>
                   <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="about-div">
                  <center>  <img  src="assets/img/finace.jpg" style="width:200px;height:200px;" />
                   <h3 >Financial system</h3>

                
                   <p >
                   These systems provide tools for budgeting, expense tracking, and income management. They may also offer features for generating financial reports and analyzing profitability, enabling farmers to make informed decisions about their operations.
                   </p>
				   </center>
               
                </div>
                   </div>
                   <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="about-div">
                  <center>  <img  src="assets/img/weather.png" style="width:200px;height:200px;" />
                   <h3 >weather monitoring</h3>

                
                   <p >
                   Many farm management systems integrate weather data to assist farmers in making weather-informed decisions. Real-time weather information helps with crop planning, irrigation scheduling, and mitigating weather-related risks.
                   </p>
				   </center>
               
                </div>
                   </div>
                 
               </div>
             </div>
   <!-- FEATURES SECTION END-->
    
		
		<div id="brand-sec" class="container set-pad" >
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">Frequently Asked Questions</h1>
                     
					 
                 </div>

             </div>
             <!--/.HEADER LINE END-->

<div class="container">
           <div class="row" >
           
               
                 
           <div>
  <h3>Frequently Asked Questions (FAQs)</h3>
  <ul>
    <li>
      <strong>Q: How can I add a new crop or livestock to my farm management system?</strong>
      <ul>
        <li>A: To add a new crop or livestock, navigate to the "Manage Inventory" section in your dashboard. Click on "Add New" and provide the necessary details, such as the name, category, and any specific information about the crop or livestock.</li>
      </ul>
    </li>
    <li>
      <strong>Q: Can I access my farm data on my mobile device?</strong>
      <ul>
        <li>A: Yes, our farm management system is mobile-friendly. You can access your farm data, view reports, and perform various tasks on your smartphone or tablet by logging in to the system through your mobile browser.</li>
      </ul>
    </li>
    <li>
      <strong>Q: How do I track the health records of my livestock?</strong>
      <ul>
        <li>A: To track the health records of your livestock, go to the "Livestock Management" section. Click on the specific animal to view its details and record health-related events, such as vaccinations, treatments, and any health issues encountered.</li>
      </ul>
    </li>
    <li>
      <strong>Q: Is the weather data integrated into the farm management system?</strong>
      <ul>
        <li>A: Yes, our farm management system integrates real-time weather data. The weather information helps you make informed decisions related to irrigation, planting, and other weather-dependent farming activities.</li>
      </ul>
    </li>
    <li>
      <strong>Q: How can I generate financial reports for my farm?</strong>
      <ul>
        <li>A: To generate financial reports, navigate to the "Financial Management" section. Select the desired time period and click on "Generate Report." The system will provide you with an overview of your farm's income, expenses, and overall financial performance during that period.</li>
      </ul>
    </li>
  </ul>
</div>

				   
				  
                 
				 <div class="col-lg-12">
				 
                    
                   </div>
                 
                 </div>
               </div>
             </div>
			 <br />
    <!-- FACULTY SECTION END-->
      <div id="course-sec" class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Contact Us</h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                      If you have any questions, please feel free to contact us, our customer service center is working for you 24/7.
					  <br />For more details. See the contact information below.
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->

<br />
           
             <div class="container">
             <div class="row set-row-pad"  >
    <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">

                    <h2 ><strong>Our Location </strong></h2>
        <hr />
                    <div ">
                        <h4>Nairobi, Kenya</h4>
                        <h4>Ruiru.</h4>
				
                        
                    </div>


                </div>
                 <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">

                    <h2 ><strong>Feedbacks </strong></h2>
        <hr />
                    <div >
                        <h4><strong>Call:</strong>  0712345678 </h4>
                        <h4><strong>Email: </strong>abc@gmail.com</h4>
                    </div>
                    </div>


                </div>
                 </div>
                 
                 
               </div>
             </div>
      <!-- COURSES SECTION END-->
     <div class="modal fade" id="su" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Registration Form</h4>
              </div>
              <div class="modal-body">
            
				
				 <form role="form" method="post" action="register.php">
                   <fieldset>
					
							<div class="form-group">
                                <input class="form-control" placeholder="Firstname" name="ruser_firstname" type="text" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Lastname" name="ruser_lastname" type="text" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Address" name="ruser_address" type="text" required>
							</div>
							
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="ruser_email" type="email" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Password" name="ruser_password" type="password" required>
							</div>
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-md btn-warning btn-block" name="register">Sign Up</button>
				
				 <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
				   </form>
              </div>
            </div>
          </div>
        </div>
<!-- Script -->


     <div class="modal fade" id="ln" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 style="color:white" class="modal-title" id="myModalLabel">Customer Login</h4>
              </div>
              <div class="modal-body">
            
				
				 <form role="form" method="post" action="userlogin.php">
                   <fieldset>
					
						
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="user_email" type="email" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Password" name="user_password" type="password" required>
							</div>
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-md btn-warning btn-block" name="user_login">Sign In</button>
				
				 <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
				   </form>
				   
              </div>
            </div>
          </div>
        </div>
		
		<div class="modal fade" id="an" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
           <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 style="color:white" class="modal-title" id="myModalLabel">Administrator Credentials</h4>
              </div>
              <div class="modal-body">
            
				
				 <form role="form" method="post" action="adminlogin.php">
                   <fieldset>
					
						
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="admin_username" type="text" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Password" name="admin_password" type="password" required>
							</div>
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-md btn-warning btn-block" name="admin_login">Login</button>
				
				 <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
				   </form>
              </div>
            </div>
          </div>
        </div>
		 <br />
			 <br />
			 <br />
<!-- Script -->
     <!-- CONTACT SECTION END-->
    <div id="footer">
          &copy 2023 | All Rights Reserved | 
    </div>
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
</body>
</html>
