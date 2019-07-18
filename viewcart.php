<?php session_start();
require('includes/config.php');
error_reporting(0);

$id=$_GET['id'];
$sid=$_GET['id'];


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<style>
		#rrer
		{
			margin-left:352px;
		}
		#menu{
			margin-left:332px;
		}
		.tr {
			margin-left:10px;
			
		}
		.real123 {
			border-right:1px solid black;
						border-left:1px solid black;
						border-top:1px solid black;
						border-bottom:1px solid black;
						padding-left:10px;
						padding-right:10px;
						padding-bottom:10px;
						background:white;
						box-shadow:5px 5px 10px #ccc;

		}
		</style>
</head>

<body>
			<!-- start header -->
				<div id="header1">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				<div id="logo-wrap1">
				<div id="logo1">
						<?php
							include("includes/logo.inc.php");
						?>
						<img id="rrer" src="headerlogo1.jpg" width="1000px">
				</div>
				</div>
			<!-- end header -->
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Viewcart</h1>
							<div class="entry">
						
							<pre><?php
							//	print_r($_SESSION);
							?></pre>
						
							<form class="real123" action="process_cart.php" method="POST">
							<table width="100%" border="0">
								<tr >
									<td> <b>No</td>
									<td> <b class="tt">Category</b></td>
									<td> <b class="tr" >Product</b></td>
									<td> <b >Qty</b></td>
									<td> <b class="tt">Rate</td>
									<td> <b class="tt">Price</td>
									<td> <b class="tt">Delete</td>
								</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
								<?php
									$tot = 0;
									$i = 1;

									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										echo '
											<tr>
											<td> '.$i.'</td>
											
											<td class="tr"> '.$x['cat'].'</td>

											<td> '.$x['nm'].'</td>
											<td> <input class="tr" type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
											<td> '.$x['rate'].'
											<td> '.($x['qty']*$x['rate']).'
											<td> <a href="process_cart.php?id='.$id.'">Delete</a>
										</tr>
										';
										
										$tot = $tot + ($x['qty']*$x['rate']);
										$i++;
									}
									}
								
								?>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
								
							<tr>
							<td colspan="6" align="right">
							<h4>Total:</h4>
							
							</td>
							<td> <h4><?php echo $tot; ?> </h4></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
							<Br>
								</table>						

								<br><br>
							<center>
							<?php
							
							 echo' <input type="submit" value=" Re-Calculate " > 
							<a href="checkout.php?id='.$sid.'">CONFIRM & PROCEED<a/>';
							?>
							</center>
							</form>
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
			<!-- end page -->
			
			<!-- start footer -->
			<div id="footer">
						<?php
							include("includes/footer.inc.php");
						?>
			</div>
			<!-- end footer -->
</body>
</html>
