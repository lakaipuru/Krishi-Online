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
      <script src="js/jqzoom.pack.1.0.1.js" type="text/javascript"></script>
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
      <script src="js/imagezoom.js"></script>
      <script defer src="js/jquery.flexslider.js"></script>
      <script src="js/bootstrap.min.js"></script>
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
         $pid=$_GET['pid'];
         $sel=mysqli_query($link,"select * from product where pid='$pid'");
         $arr=mysqli_fetch_assoc($sel);
         ?>
      <div class="section group">
         <div class="clear"> </div>
         <div class="wrap">
            <div class="row">
               	<div class="col-9">
                  <div class="content-grids">
                     <div class="content">
                        <div class="details-page">
                           <div class="back-links">
                              <ul>
                                 <li><a href="#">Home</a><img src="images/arrow.png" alt=""></li>
                                 <li><a href="#">Product-Details</a><img src="images/arrow.png" alt=""></li>
                              </ul>
                           </div>
                        </div>
                        <div class="detalis-image">
                           <div class="flexslider">
                              <ul class="slides">
                                 <li data-thumb="admin/images/<?= $arr['iname'];?>">
                                    <div class="thumb-image"> <img src="admin/images/<?= $arr['iname'];?>" data-imagezoom="true" class="img-responsive" alt="" /> </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="detalis-image-details">
                           <div class="details-categories">
                              <ul>
                                 <li>
                                    <h3>Category:</h3>
                                 </li>
                                 <li class="active1"><a href="category.php?cat=<?= $arr['cat'];?>"><span><?= $arr['cat'];?></span></a></li>
                              </ul>
                           </div>
                           <br />
                           <div class="row">
                              <div class="brand-value">
                                 <h3>Product-Complete Details </h3>
                                 <div class="left-value-details">
                                    <ul>
                                       <li>Price:</li>
                                       <li><span>Rs.<?= $arr['price'];?></span></li>
                                       <li>
                                          <h5>Rs.<?= $arr['price']-(($arr['price']*$arr['disc'])/100);?></h5>
                                       </li>
                                       <br />			    				
                                    </ul>
                                 </div>
                                 <div class="right-value-details">
                                    <?php
                                       if($arr['quan']>0)
                                       {
                                       ?>
                                    <a href="#">Instock</a>
                                    <?php
                                       }
                                       else
                                       {
                                       echo '<a href="#">OutOfstock</a>';
                                       }
                                       ?>
                                 </div>
                                 <div class="clear"> </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12">
                                 <div class="brand-history">
                                    <h3>Description :</h3>
                                    <p>
                                       Name : <b><?= $arr['p_name'];?></b><br/>
                                       Warrenty : <b><?= $arr['warrenty'];?> Years</b><br/>
                                       Description : <b><?= $arr['descript'];?></b><br/>
                                    </p>
                                    							
							               <a  class="btn delcart btn-success" href="javascript:void()" piid="<?= $arr['pid'];?>" quann=1><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add to cart </a></li>
								         
						                  </div>	
                                 </div>
                              </div>
                           </div>
                           <div class="clear"> </div>
                        </div>
                     </div>                     
                  </div>
               	</div>
				<div class="col-3">
					<?php include("sidebar.php");?>
				</div>
            </div>
         </div>
      </div>
      <div class="clear"> </div>
      </div>
      <?php include("footer.php");?>
   </body>
</html>