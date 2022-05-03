<!DOCTYPE HTML>
<html>
   <head>
      <title>Krishi-Online| Home</title>
		<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="Krishi-Online, ecommerce platform" />
		<link rel="icon" type="image/x-icon" href="/images/favicon.png">
      <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
      <link href='//fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/responsiveslides.css">
      <script src="js/jquery.min.js"></script>
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
         $cat=$_GET['cat'];
         ?>
      <?php include("slider.php");?>
      <div class="clear"> </div>
      <div class="wrap">
         <div class="content-grids mt-5">
            <div class="container">
               <div class="row mt-5">
                  <div class="col-9"> 
				  	<h4><?= $cat;?> Product</h4>
					<div class="section group">
					<?php
						$sel=mysqli_query($link,"select * from product where cat='$cat'");
						while($arr=mysqli_fetch_assoc($sel))
						{
							?>
					<div class="grid_1_of_4 images_1_of_4 products-info">
						<a href="productdetails.php?pid=<?= $arr['pid'];?>">
						<img src="admin/images/<?= $arr['iname'];?>">
						</a>
                  
            		<a href="category.php?cat=<?= $arr['cat'];?>"><?= $arr['cat'];?></a>
						<h3 style="text-decoration:line-through">Rs.<?= $arr['price'];?></h3>
						<h3>Rs.<?= $arr['price']-(($arr['price']*$arr['disc'])/100);?></h3>
						<div class="products-info">							
							<ul class="icon-wrap">
								<li><a  class="btn delcart btn-success" href="javascript:void()" piid="<?= $arr['pid'];?>" quann=1><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add to cart </a></li>
								<li><a  class="btn" href="productdetails.php?pid=<?= $arr['pid'];?>"><i class="fa fa-eye" aria-hidden="true"></i> </a></li>
							</ul>
						</div>	
					</div>
					<?php
						}
							?>		
					</div>
                  </div>
                  <div class="col-3"> 
				  <?php include("sidebar.php");?>
                  </div>
               </div>
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