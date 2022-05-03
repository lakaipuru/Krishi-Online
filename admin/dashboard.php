<?php
   include("config/database.php");//connect to mysql
   session_start();
   $sid=$_SESSION['sid'];//read session
   //for blank session
   if($sid=="")
   {
     header("location:index.php");
   }
   ?>
<!doctype html>
<html>
   <head>
      <title>Krishi-Online| Admin</title>
		<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="Krishi-Online, ecommerce platform" />
		<link rel="icon" type="image/x-icon" href="/images/favicon.png">
      <link rel="stylesheet" href="css/style.css"/>
      <link rel="stylesheet" href="css/bootstrap.css"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="js/bootstrap.js"></script>     
   </head>
   <body>
      <main>
         <nav class="navbar navbar-inverse">
            <div class="container">
               <div class="navbar-header">
                  <a class="navbar-brand" href="?con=category">Admin Panel</a>
               </div>
               <ul class="nav navbar-nav">
                  <li><a href="../index.php" target="_blank">Home</a></li>
                  <li><a href="?con=cp">Change Password</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome : <?= $sid;?></a></li>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
               </ul>
            </div>
         </nav>
      </main>
      <section class="container">
         <aside class="col-sm-2" style="margin-top:20px;">
            <div class="list-group">
               <a href="?con=category" class="list-group-item ">Category</a>
               <a href="?con=product" class="list-group-item ">Products</a>
               <a href="?con=order" class="list-group-item ">Orders</a>
               <a href="#" class="list-group-item ">Feedback</a>
            </div>
         </aside>
         <aside class="col-sm-10">
            <?php
               switch(@$_GET['con'])
               {
               case 'category' : include('category.php');
                    break;
               case 'product' : include('product.php');
                    break;
               case 'order' : include('order.php');
                    break;
               case 'cp' : include('cp.php');
                    break;
                    case 'edit' : include('editcat.php');
                    break;
               }
                      ?>
         </aside>
      </section>
   </body>
</html>