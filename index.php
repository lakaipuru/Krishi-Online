<!DOCTYPE HTML>
<html>
   <head>
      <title>Krishi-Online| Home</title>
		<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="Krishi-Online, ecommerce platform" />
		<link rel="icon" type="image/x-icon" href="/images/favicon.png"><title>Krishi-Online| Home</title>
      <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
      <!-- <link href='//fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'> -->
      <link rel="stylesheet" href="css/responsiveslides.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <script src="js/jquery.min.js"></script>
      <script src="js/responsiveslides.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
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
      <?php include("header.php");?>
      <?php include("slider.php");?>
      <div class="clear"> </div>
      <div class="container">
         <div class="row mt-5">
            <div class="col-9">
               <?php include("content.php");?>
            </div>
            <div class="col-3">
               <?php include("sidebar.php");?>
            </div>
         </div>         
      </div>
      </div>
      </div>
      <div class="clear"> </div>
      </div>
      <?php include("footer.php");?>
   </body>
</html>