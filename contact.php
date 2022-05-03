<!DOCTYPE HTML>
<html>
   <head>
      <title>Krishi-Online| Contact</title>
		<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="Krishi-Online, ecommerce platform" />
		<link rel="icon" type="image/x-icon" href="/images/favicon.png">
      <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
      <link href='//fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/responsiveslides.css">
      <script src="js/jquery.min.js"></script>
      <script src="js/jqzoom.pack.1.0.1.js" type="text/javascript"></script>
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
      <script src="js/imagezoom.js"></script>
      <script defer src="js/jquery.flexslider.js"></script>
      <script>
         // Can also be used with $(document).ready()
         $(window).load(function() {
           $('.flexslider').flexslider({
         	animation: "slide",
         	controlNav: "thumbnails"
           });
         });
      </script>
      <script src="js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
          $(function () {
         
            // Slideshow 1
            $("#slider1").responsiveSlides({
              maxwidth: 1600,
              speed: 600
            });
         });
      </script>
   </head>
   <body>
      <?php include("header.php");
         ?>
      <div class="container">
         <div class="row">
            <div class="col-6">
               <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2100.874481719601!2d85.32012789147232!3d27.679110973408687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19c9a5cf34fb%3A0x9184a86a77dac5e5!2sPatan%20Multiple%20Campus!5e0!3m2!1sen!2snp!4v1647677761948!5m2!1sen!2snp" width="100%" height="560" style="border:0; border-radius:10px;" allowfullscreen="" loading="lazy"></iframe>
               </div>
            </div>
            <div class="col-6">
               <!--Section: Contact v.2-->
               <section class="mb-4">
                  <!--Section heading-->
                  <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                  <!--Section description-->
                  <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                     a matter of hours to help you.
                  </p>
                  <div class="row">
                     <!--Grid column-->
                     <div class="">
                        <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                           <!--Grid row-->
                           <div class="row">
                              <!--Grid column-->
                              <div class="col-md-6">
                                 <div class="md-form mb-4">
                                    <label for="name" class="">Your name</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                 </div>
                              </div>
                              <!--Grid column-->
                              <!--Grid column-->
                              <div class="col-md-6">
                                 <div class="md-form mb-4">
                                    <label for="email" class="">Your email</label>
                                    <input type="text" id="email" name="email" class="form-control">
                                 </div>
                              </div>
                              <!--Grid column-->
                           </div>
                           <!--Grid row-->
                           <!--Grid row-->
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="md-form mb-4">
                                    <label for="subject" class="">Subject</label>
                                    <input type="text" id="subject" name="subject" class="form-control">
                                 </div>
                              </div>
                           </div>
                           <!--Grid row-->
                           <!--Grid row-->
                           <div class="row">
                              <!--Grid column-->
                              <div class="col-md-12">
                                 <div class="md-form">
                                    <label for="message">Your message</label>
                                    <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea"></textarea>
                                 </div>
                              </div>
                           </div>
                           <!--Grid row-->
                        </form>
                        <div class="text-center text-md-left my-4">
                           <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                        </div>
                        <div class="status"></div>
                     </div>
                     <!--Grid column-->
                  </div>
               </section>
               <!--Section: Contact v.2-->
            </div>
         </div>
      </div>
      <div class="clear"> </div>
      </div>
      </div>
      <?php include("footer.php");?>
   </body>
</html>