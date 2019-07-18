<?php session_start();
require('includes/config.php');
error_reporting(0);
	
		$id=$_GET['id'];
			$q1="select * from shipping_details  ";
	$res=mysqli_query($conn,$q1) or die("Can't Execute Query..");
	$row=mysqli_fetch_assoc($res);
				$q2="select * from book where b_id=$id  ";
					$res1=mysqli_query($conn,$q2) or die("Can't Execute Query..");
						$row1=mysqli_fetch_assoc($res1);


				



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<style>
		#rrer{
			margin-left:350px
		}
		.entry1 {
			margin-top:50px;
		}
		.photo {
			margin-left:100px;
		}
		#payment {
			margin-top:70px;
			border:1px solid black;
			border-bottom:1px solid black;
			background:white;
		    margin-left:550px;
			margin-right:300px;
		padding-bottom:45px;
			box-shadow:5px 5px 10px #ccc;
			margin-bottom:100px;
			
		}
		.edit {
			margin-left:350px;
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
				<h2 class="edit"><b>Your Order Has Been Confirmed!!!!!!!!!!!!!!!</b></h2>		

			<!-- end header -->
			<div id="payment">
			<div class="photo">
			<h2><u><b>Your Order Details</b></u></h2>
			<?php
			echo '	
											
											<table border="0"   bgcolor="#ffffff">
												<tr> 
													
													<td width="15%" rowspan="3">
														<img src="'.$row1['b_img'].'" width="100">
													
													</td>
												</tr>
											
												<tr> 
													<td width="50%" height="100%">
														<table border="0"  width="100%" height="100%">
															<tr valign="top">
																<td align="right" width="10%">BOOKNAME</td>
																<td width="6%">: </td>
																<td align="left">'.$row1['b_nm'].'</td>
															</tr>

															
															<tr>
																<td align="right">ISBN</td>
																<td>: </td>
																<td align="left">'.$row1['b_isbn'].'</td>
																
															</tr>
															
																					
															<tr>
																<td align="right">Publisher </td>
																<td>: </td>
																<td align="left">'.$row1['b_publisher'].'</td>
																
															</tr>											
															
															<tr>
																<td align="right"> Edition</td>
																<td>: </td>
																<td align="left">'.$row1['b_edition'].'</td>
																
															</tr>
															
															<tr>
																<td align="right">  PAGES</td>
																<td>: </td>
																<td align="left">'.$row1['b_page'].'</td>
															</tr>
															
															<tr>
																<td align="right"> PRICE</td>
																<td>: </td>
																<td align="left">'.$row1['b_price'].'</td>
															</tr>
														</table>
										
														
													</td>
												</tr>
											</table>';
			?>
			</div>
        <div class="entry1">
<?php
echo '	<table border="0" width="100%">
												 
											
												<tr> 
													<td width="50%" height="100%">
														<table border="0"  width="100%" height="100%">
															<tr valign="top">
																<td align="right">NAME</td>
																<td >: </td>
																<td >'.$row['name'].'</td>
															</tr>

															
															<tr>
																<td align="right">Phone</td>
																<td>: </td>
																<td align="left">'.$row['phone'].'</td>
																
															</tr>
															
																					
															<tr>
																<td align="right">Address </td>
																<td>: </td>
																<td align="left">'.$row['address'].'</td>
																
															</tr>											
															
															<tr>
																<td align="right">City</td>
																<td>: </td>
																<td align="left">'.$row['city'].'</td>
																
															</tr>
															
															<tr>
																<td align="right">State</td>
																<td>: </td>
																<td align="left">'.$row['state'].'</td>
															</tr>
															
															<tr>
																<td align="right"> Postal Code</td>
																<td>: </td>
																<td align="left">'.$row['postal_code'].'</td>
															</tr>
														
										
														
												
											</table>';
?>
			
	</div>
</div>
</body>
</html>