<?php
 session_start();
 extract($_POST);
 extract($_SESSION);
require('includes/config.php'); 
error_reporting(0);
	
	//echo $uid;
$id=$_GET['id'];
	if(isset($submit))
	{

	$query="insert into shipping_details(name,address,postal_code,city,state,phone,f_id,bid) values('$name','$address','$pc','$city','$state','$phone','$uid','$var')";
	$q1="update book set b_copies=b_copies-1 where b_id=$id";
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
		$res1=mysqli_query($conn,$q1) or die("Can't Execute Query...");

	header("location:payment_details.php?id=$id");
	}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<style>
		#rrer{
			margin-left:352px
		}
		</style>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				<div id="logo-wrap1">
				<div id="logo1">
														<img id="rrer" src="headerlogo1.jpg" width="1000px" >

						<?php
							include("includes/logo.inc.php");
						?>
				</div>
				</div>
				
			<!-- end header -->
			<!------------------------------->
			<font style="font-size:30px;margin-left:420px">Shipping Details</font>	
			<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <div class="clr"></div>
				
            </div><!--/ freshdesignweb top bar -->    
		
      <div  class="form">
    		<form id="contactform" method="post"> 
			    			<p class="contact"><label for="id">Book Id</label></p> 

							  <input id="id" type="text" value="<?php echo $id?>" name="var" /><br><br>

    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="email">Address</label></p> 
    			<textarea id="address" name="address" placeholder="Address" required="" cols="55" row="10"type="email"> </textarea>
                
                <p class="contact"><label for="username">Postal Code</label></p> 
    			<input id="pc" name="pc" placeholder="201001" required="" tabindex="2" type="text"> 
    			 
                <p class="contact"><label for="city">City</label></p> 
    			<input type="text" id="city" name="city" required="" placeholder="delhi"> 
                <p class="contact"><label for="state">State</label></p> 
    			<input type="text" id="state" name="state" required="" placeholder="delhi"> 
            <p class="contact"><label for="phone">Mobile phone</label></p> 
            <input id="phone" name="phone" placeholder="phone number" required="" type="text"> <br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Confirm & Proceed" type="submit"> 	 
   </form> 
</div>      
</div>
</body>