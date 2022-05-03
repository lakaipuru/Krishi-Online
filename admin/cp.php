<?php
extract($_POST);
if(isset($sub))
{
    if($np==$cp)
    {
 $sel=mysqli_query($link,"select password from admin where email='$sid'");
 $arr=mysqli_fetch_assoc($sel);
 if($arr['password']===md5($op))
 {
    if($op===$np)
    {
        $msg="op and np is not same";
    }
    else
    {
        $np=md5($np);
        if(mysqli_query($link,"update admin set password='$np' where email='$sid'"))
        {
            $msg="Password Updated";
        }
    }
 }
 else
 {
     $msg="Old Password is not match";
 }
    }
    else
    {
        $msg="New Password or Current Password are not match";
    }
}
?>
<form method="post">
<label><?= @$msg;?></label>
 <div class="form-group">
        <label>Old Password :</label>
        <input type="password" name="op" class="form-control" required/>
    </div>
  <div class="form-group">
        <label>New Password :</label>
        <input type="password" name="np" class="form-control" required/>
    </div>
     <div class="form-group">
        <label>Confirm Password :</label>
        <input type="password" name="cp" class="form-control" required/>
    </div>
    <input type="submit" name="sub" value="Submit" class="btn btn-success"/>
</form>