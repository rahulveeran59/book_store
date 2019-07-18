<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<style>
		#rrer {
			margin-left:352px;
		}
		.cr7 {
			border-right:1px solid black;
			border-left:1px solid black;
			border-bottom:1px solid black;
			border-top:1px solid black;
			padding-left:10px;
			padding-bottom:10px;
			background:white;
		}
		.tt {
			border:1px solid black;
			margin-left:0px;
		}
		.space {
			margin-left:0px;
		}
		</style>
</head>
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
								<?php
									include("includes/logo.inc.php");
								?>
													<img id="rrer" src="headerlogo1.jpg" width="1000px" >

						</div>
					</div>
			<!-- end header -->
			
			<!-- start page -->

					<div id="page">
						<!-- start content -->
							<div id="content">
								<div class="post">
									<h1 class="title">Contact us</h1>
									
									<div class="entry">
									<br><br>
									<?php
									        if(isset($_GET['ok']))
											{
												echo '<font color="blue">Your Query Has Been Sent We Will Contact You Soon !!!!!!</font>';
												echo '<br><br>';
											}
                                               ?>
										<form  action="process_contact.php" method="POST">
												

											<br>
											 <br> Name :<br>
												<input type='text' name='nm' size=35>
												<br><br><br>
												
												E-mail ID:<br>
												<input type='text' name='email' size=35>
												<br><br><br>
												
												 <div class="space">Query:</div>
												<textarea class="tt" cols="40" rows="10" name='query' ></textarea>
												<br><br>

												<input class="space"  type='submit'  value="   ok   "  >

												
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
