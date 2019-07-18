<?php session_start();?>

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
		#menu
		{
			margin-left:332px;
		}
		 .write {
			 font-size:20px;
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
							<h1 class="title"><u>About Us</u></h1>
							<div class="entry">
		                        <p class="write">This Online BookStore Is Actually Created By Rahul V And Rakesh C As A Mini Project That Given By Our College.<br>
                                 This Project Is Implemented By Using Html CSS JavaScript And The Backend Using PHP And MySQL,PHP Is Server Scripting Language Which Basically Helps In Bascially Connecting The Front End And Backend								</p>						

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
