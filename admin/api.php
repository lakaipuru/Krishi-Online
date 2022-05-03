<?php
include("config/database.php");
session_start();
$sidd=session_id();
//echo $_POST['cid'];
if(isset($_POST['cid']))
{
    $cid=$_POST['cid'];
    $imm=$_POST['imm'];
    if(mysqli_query($link,"delete from category where id=$cid"))
    {
        unlink('images/'.$imm);
        echo "Do you want to delete Item?";
    }
    else
    {
        echo "Item Not deleted";
    }
}
//for addcart
if(isset($_POST['sumit']))
{
    $pid=$_POST['sumit'];//pid
    $quan=$_POST['rahul'];//quantity
    if(mysqli_query($link,"insert into cart(sid,pid,quan) values('$sidd','$pid',$quan)"))
    {
        echo "Do you want to add item?";
    }
    else
    {
         echo "Item not added";
    }
}
//for delete car
if(isset($_GET['iiid']))
{
    $iid=$_GET['iiid'];
    if(mysqli_query($link,"delete from cart where id=$iid"))
    {
        echo "Do you want to delete Item?";
    }
}


if(isset($_POST['cidd']))
{
    $cid=$_POST['cidd'];
    $imm=$_POST['imm'];
    if(mysqli_query($link,"delete from product where id=$cid"))
    {
        unlink('images/'.$imm);
        echo "Do you want to delete Item?";
    }
    else
    {
        echo "Item Not deleted";
    }
}
?>