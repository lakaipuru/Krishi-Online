<?php 
include_once 'admin/config/database.php';
session_start();

  if (isset($_POST['submit'])) {
      include_once'';


      $name=mysqli_real_escape_string($conn,$_POST['name']);

      $email=mysqli_real_escape_string($conn,$_POST['email']);

      $subject=mysqli_real_escape_string($conn,$_POST['subject']);

      $message=mysqli_real_escape_string($conn,$_POST['message']);

      if ($bidprice>$cbid) {

          

          $sql="INSERT into feedback(name,email,subject,message)VALUES('$name','$email','$subject','$message');";
          mysqli_query($conn,$sql);
          header("Location:contact.php?uploading=success");
          exit();
      }
      else{
          header("Location:contact.php?FAILED");
          exit();
      }
  }
  else {
      header("Location:detview.php?Bidding_FAILED");
      exit();
  }

?>

?>