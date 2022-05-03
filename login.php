<?php
include "admin/config/database.php"; //connect to mysql
//    $passwordHash = password_hash('test1234', PASSWORD_BCRYPT);
//    $verify = password_verify('test1234', $passwordHash);
// if($verify) {
// die("success");
// } else {
// die("fail");
// }
extract($_POST);
if (isset($login)) {
    //sql injection
    $email = mysqli_real_escape_string($link, htmlentities(trim($email)));
    $pass = mysqli_real_escape_string($link, htmlentities(trim($password)));

    //fetch email or pass
    $sel = mysqli_query($link, "select *  from user where email='$email'");

    $arr = mysqli_fetch_assoc($sel);
    if ($email === $arr['email'] && password_verify($pass, $arr['password'])) {
        session_start(); //session start
        $_SESSION['sid'] = $email; //session create
        header("location:index.php"); //redirect
    } else {
		print_r("Invalid Input");
        $msg = "Email or password is not correct";
	
    }
}
?>
<!doctype html>
<html>
   <head>
      <link rel="stylesheet" href="./css/bootstrap.css"/>
      <link rel="stylesheet" href="./admin/css/style.css"/>
      <script src="js/bootstrap.js"></script>
   </head>
   <body>
      <main>
         <header class="my-5">
            <h3 class="text-center">User login</h3>
         </header>
         <section class="container">
             <div class="row justify-content-center">
             <div class="order-2 order-lg-1 border">

			   <form method="post" >

			   <?php 
			   if (isset($msg)) { ?>
					    <label class="alert alert-danger"><?= $msg ?></label>
                  <?php } ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"  required placeholder="Enter Your Email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" required placeholder="Your Password">
  </div>
  <div class="form-group">
    <label class="form-check-label p-3" for="exampleCheck1">Didn't have account&nbsp;&nbsp;<a href="signup.php">SignUp</a></label>
  </div>
  <button type="submit" name="login" class="btn btn-primary">Submit</button>
  <input type="reset" value="Reset" class="btn btn-danger"/>
</form>
            </div>
             </div>
             
            
         </section>
      </main>
   </body>
</html>