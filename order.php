<?php
session_start();
include_once'admin/config/database.php';


if(isset($_POST['submit'])){

    $pid=my_real_escape_string($conn, $_POST['pid']);


    $sql="Insert Into orders(pid)values('$pid');"; 

    header("Location:index.php?order_success");
    exit();
}
else{
    header("Location:checkout.php?Order_failed");
    exit();
}
?>