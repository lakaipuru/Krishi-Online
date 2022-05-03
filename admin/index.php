<?php
   include("config/database.php");//connect to mysql
   extract($_POST);
   if(isset($login))
   {
       //sql injection 
   $email=mysqli_real_escape_string($link,htmlentities(trim($email)));
   $pass=mysqli_real_escape_string($link,htmlentities(trim($pass)));
   
       $pass= $pass;//convert into md5
       //fetch email or pass
       $sel=mysqli_query($link,"select email,pass from admin where email='$email'");
       $arr=mysqli_fetch_assoc($sel);
       if($email===$arr['email'] && $pass===$arr['pass'])
       {
           session_start();//session start
           $_SESSION['sid']=$email;//session create
           header("location:dashboard.php");//redirect
       }
       else
       {
           $msg="Email or password is not correct";
       }
   }
   ?>
<!doctype html>
<html>
   <head>
      <link rel="stylesheet" href="../css/bootstrap.css"/>
      <link rel="stylesheet" href="css/style.css"/>
      <script src="js/bootstrap.js"></script>
   </head>
   <body>
      <main>
         <header class="my-5">
            <h3 class="text-center">Admin Panel</h3>
         </header>
         <section class="container">
             <div class="row justify-content-center">
             <div class="order-2 order-lg-1 border">
               <form method="post" style="padding:50px;">
                  <?php
                     if(isset($msg))
                     {
                       ?>
                  <label class="alert alert-danger"><?= $msg;?></label>
                  <?php
                     }
                      ?>
                  <div class="d-flex flex-row align-items-center mb-2">
                     <div class="form-group flex-fill mb-0">
                        <label class="form-label" for="email">Email:</label>
                        <input type="text" name="email" class="form-control" required/>
                     </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-2">
                     <div class="form-group flex-fill mb-0">
                        <label class="form-label" for="pass">Password:</label>
                        <input type="password" name="pass" class="form-control" required/>
                     </div>
                  </div>
                  <div class="form-group my-5">
                     <input type="checkbox" name="c1"/>
                     <label>Remember Me</label>
                  </div>
                  <input type="submit" value="Login" name="login" class="btn btn-success btn-lg" />
                  <input type="reset" value="Reset" class="btn btn-danger btn-lg"/>
               </form>
            </div>
             </div>
             
            
         </section>
      </main>
   </body>
</html>






