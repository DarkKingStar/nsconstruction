<!DOCTYPE html>
<html>
<head>
  <title>NS Construction</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
	rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="loader.js"></script> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
  <script src="theme.js"></script>
</head>
<body>
  <div id="loader" class="loader"></div>
<!---top bar---->
<div class="fixed-top" style="font-size: 12px;">
  <div class="container-fluid" id="topbar">
    <div class="row container-fluid" style="padding-bottom: 0.3% ;">
      <div class="col-md-4 col-sm-6" name="phonenumber" id="companynumber">
        <a id="texttopbar" href="tel:+91-12345-67890"><i class="bi bi-telephone-fill"></i>&nbsp+91 12345 67890</a>
      </div>
      <div class="col-md-4 col-sm-6" name ="email" id="companyemail"><a id="texttopbar" href="mailto: username@gmail.com">
        <i class="bi bi-envelope-fill"></i>&nbspusername@gmail.com</a></div>
      <div class="col-md-4 col-sm-6" name="sociallinks" id="sociallinks">
      <a id="texttopbar" href="https://web.telegram.org/"><i class="bi bi-telegram"></i></a>&nbsp
      <a id="texttopbar" href="https://web.telegram.org/" ><i class="bi bi-youtube"></i></a>&nbsp
      <a id="texttopbar" href="https://web.telegram.org/" ><i class="bi bi-whatsapp"></i></a>&nbsp
      <a id="texttopbar" href="https://web.telegram.org/" ><i class="bi bi-instagram"></i></a>&nbsp
      <a id="texttopbar" href="https://web.telegram.org/" ><i class="bi bi-facebook"></i></a>&nbsp
      <a id="texttopbar" href="https://web.telegram.org/" ><i class="bi bi-twitter"></i></a>&nbsp
      </div>
    </div>
  </div>


<!---navigation bar---->

	<nav class="navbar navbar-expand-lg navbar-dark" id="navbar" style="font-size: 12px;">
		<div class="container-fluid">
		  <a class="navbar-brand" href="#"><svg width="30" height="25">
  <circle cx="10" cy="10" r="8" stroke="black" stroke-width="4" fill="grey" />
</svg>NS CONSTRUCTION</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
			  <li class="nav-item" style="padding-right: 50px;">
				<a class="nav-link" href="../">Home</a>
			  </li>
			  <li class="nav-item" style=" padding-right: 50px;">
				<a class="nav-link"href="aboutus.html">About Us</a>
			  </li>
        <li class="nav-item" style=" padding-right: 50px;">
          <a class="nav-link" href="services.html">Services</a>
        </li>
			  <li class="nav-item" style=" padding-right: 50px;">
          <a class="nav-link"href="infa.html">Infrastructure</a>
        </li>
        <li class="nav-item dropdown" style="padding-right: 50px;">
				<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				  More
				</a>
				<ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
				  <li><a class="dropdown-item nav-link"href="more.html">Social Media</a></li>
				  <li><a class="dropdown-item nav-link"href="more.html">Office Location</a></li>
				  <li><a class="dropdown-item nav-link"href="more.html">Contract Details</a></li>
				</ul>
			  </li>
			  <li class="nav-item" style="padding-right: 50px;">
				<a class="nav-link active" aria-current="page">Contact Us</a>
			  </li>
        <li class="nav-item" style="text-align: left;">
                <div class="form-check form-switch" >
                  <input class="form-check-input" type="checkbox" role="switch" id="theme" onclick="Theme()"><label class="form-check-label" for="theme" style="color: white;">
                    <a class="nav-link"><span id="themetype">Light</span></a></label>
                </div>
                
      </li>
			</ul>
		  </div>
		</div>
	  </nav>
  </div>
<div style="height: 80px;"></div>



    <div class="row container-fluid">
      <div class="col-md-4 col-sm-6">
        <section class="mb-4" style="margin-top: 100px;">
          <!--Section heading-->
          <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
          <!--Section description-->
          <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
              a matter of hours to help you.</p>
          <div class="row">
              <!--Grid column-->
              <div class="col">
                <form role="form" id="contact-form" class="contact-form" name="contact-form" method="POST">
                      <!--Grid row-->
                      <div class="row">
                          <!--Grid column-->
                          <div class="col-md-6">
                            <div class="form-group md-form mb-0 form-floating">
                                  <input type="text" id="name" name="name" autocomplete="off" class="form-control" required>
                                  <label for="name" class="conusform">Your name</label>
                            </div>
                          </div>
                          <!--Grid column-->
                          <!--Grid column-->
                          <div class="col-md-6">
                              <div class="form-group md-form mb-0 form-floating">
                                  <input type="text" id="email" name="email" autocomplete="off" class="form-control" required>
                                  <label for="email" class="conusform">Your email</label>
                              </div>
                          </div>
                          <!--Grid column-->
                      </div>
                      <!--Grid row-->
                      <!--Grid row-->
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group md-form mb-0 form-floating">
                            <input type="tel" id="phone" name="phone" class="form-control" autocomplete="off" style="margin-top:5%;margin-bottom: 5%;" required>
                            <label for="phone" class="conusform">Pnone No.</label>
                        </div>
                    </div>
                    </div>
                      <!--Grid row-->
                      <!--Grid row-->
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group md-form mb-0 form-floating">
                                  <input type="text" id="subject" name="subject" class="form-control" autocomplete="off" style="margin-top:5%;margin-bottom: 5%;" required>
                                  <label for="subject" class="conusform">Subject</label>
                              </div>
                          </div>
                      </div>
                      <!--Grid row-->
                      <!--Grid row-->
                      <div class="row">
                          <!--Grid column-->
                          <div class="col-md-12">
                              <div class="form-group md-form form-floating">
                                  <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" style="height: 200px; resize: none;margin-top:5%;margin-bottom: 5%;" required></textarea>
                                  <label for="message" class="conusform">Your message</label>
                              </div>
      
                          </div>
                      </div>
                      <!--Grid row-->
                  
                      <div class="row">
                    <div class="text-center text-md-left">
                  <input type="submit" class="btn main-btn pull-right" name="submit" value="Send a message"></input>
                </div>
                  </div>
                  </form>
                  <?php include 'email.php';?>
              <!--Grid column-->
          </div>
      </section>
      </div>
      <div class="col-md-4 col-sm-6">
        <div id="offadd">
        <h3>Office Address</h3>
        <P>Street number, Street name
          pincode-000000
        </P>  
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
          <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
            style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      </div>
      




<div id="footer">
  <div class="container-fluid">
    <h4 style="color: aqua;">Footer</h4>
    <p style="color: bisque; margin-bottom: 0;padding-top: 20px;">This is a template design; Created by webnetic.co.in<br> 
      (Contact us at : +91 9831739043,+91 6290244684)<br>
      (email : service.webnetic@gmail.com)</p>
  </div>
</div>







<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>