<?php
 $pid=$_GET['eid'];
 $sel=mysqli_query($link,"select * from product where id=$pid");
 $arr=mysqli_fetch_assoc($sel);
 extract($_POST);
 if(isset($sub))
 {
     if(mysqli_query($link,"update product set p_name='$p_name' where id=$pid"))
     {
         header('location:dashboard.php?con=product');
     }
 }
?>
<h2>Edit Product</h2>
 <form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Pname :</label>
        <input type="text" value="<?= $arr['p_name'];?>" name="p_name" class="form-control" required/>
    </div>
    <div class="form-group">
        <label>Image :</label>
        <input type="file" name="att" class="form-control"/>
    </div>
    
    <input type="submit" value="Submit" name="sub" class="btn btn-success" />
   
      </form>