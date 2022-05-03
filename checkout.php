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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
         $sel=mysqli_query($link,"select * from cart where sid='$sidd' and purchase=0")
          ?>
      <script>
         $(document).ready(function()
         {
             $(".delc").click(function()
             {
                 var iid=$(this).attr('iid');
                 $.get('admin/api.php',{iiid:iid},function(res)
                 {
                     alert(res);
                     $('body').load('checkout.php')
                 })
             })
         })
           
      </script>
      <div class="wrap my-5">
         <div class="content">
            <h1>Shooping Cart</h1>
            <table border=1 class="table"  width=70%>
               <tr>
                  <th>S.No</th>
                  <th>Pname</th>
                  <th>Price</th>
                  <th>Quan</th>
                  <th>Total</th>
                  <th>Action</th>
               </tr>
               <?php
                  if(mysqli_num_rows($sel)>0)
                  {
                      $sn=1;
                      $tot=0;
                      $gt=0;
                      while($arr=mysqli_fetch_assoc($sel))
                      {
                          $pid=$arr['pid'];
                        $sel1=mysqli_query($link,"select p_name,price from product where pid='$pid'");
                        $arr1=mysqli_fetch_assoc($sel1);
                        $tot=$arr['quan']*$arr1['price'];
                        $gt+=$tot;
                        
                        ?>
               <tr>
                  <th><?= $sn;?></th>
                  <th><?= $arr1['p_name'];?></th>
                  <th><?= $arr1['price'];?></th>
                  <th><?= $arr['quan'];?></th>
                  <th><?= $tot;?></th>
                  <th><a href="javascript:void()" class="delc btn btn-danger" iid="<?= $arr['id'];?>">Delete</a></th>
               </tr>
               <?php
                  $sn++;
                  }
                  echo "<tr><td colspan=5 align='right'>Total</td>
                  <td align='right'>$gt</td></tr>";
                  }
                  else
                  {
                  echo "<tr><td colspan=6 align='center'> <b>Empty Cart</b> </td>
                  </tr>";
                  }
                  ?>
            </table>
         </div>
         <div class="clear float-right mb-4">
            <form action="order.php" method="POST">

            <!-- <input type="" class="pid" name="pid" value="<?php echo $arr1['p_name']?>" > -->
            <button type="submit"class="btn btn-primary">Order Now</button>


            </form>
               
         </div>
      </div>
      </div>
      <?php include("footer.php");?>
   </body>
</html>