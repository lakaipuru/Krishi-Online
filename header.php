<?php
   include('admin/config/database.php');
   session_start();
   $sidd=session_id();
   
   ?>
<script>
   $(document).ready(function()
   {
    $("#serr").click(function()
    {
     var ser=$("#ser").val();
     if(ser!="")
     {
   	  location.href='search.php?ser='+ser;
     }
    })
   })
</script>
		<nav class="navbar navbar-inverse">
            <div class="container">  
				<div class="top-menu">
					<ul class="d-flex">
					<li><a href="signUp.php">Sign up</a></li>
						
						<?php			//then show login button
						echo'<li><a href="login.php">Login</a></li>';
						?>
						<?php
						if(!$sidd==''){
   						//show logout button
					// echo'<li><a href="logout.php">Logout</a></li>';
						}
						?>
						
					</ul>
				</div>             
               
            </div>
         </nav>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light">
			<a href="index.php"><img src="images/logo.PNG" title="logo" /></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item px-3">
					<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item  px-3 ">
					<a class="nav-link" href="aboutus.php">About</a>
					</li>
					<li class="nav-item  px-3 ">
					<a class="nav-link" href="contact.php">Contact Us</a>
					</li>
				</ul>
				<div class="search-bar-wrap">
					<form class="form-inline my-2 my-lg-0 d-flex align-items-center">
   						<p>
						   <a href="checkout.php">
							<?php
								$sel=mysqli_query($link,"select * from cart where sid='$sidd' and purchase=0");
								$item=mysqli_num_rows($sel);
								?>
							<span>Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i> </span></a> &nbsp;<?= $item;?>
</p>
						<input id="ser" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="padding-right:30px;margin-right:-40px;">
						<button type="button" value="Search" id="serr" class="btn my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
					</form>
				</div>
				
			</div>
		</nav>
	
	</div>
