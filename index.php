<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<style>
		<link rel="stylesheet" type="text/css" href="default.css">
		#sidebar h2 {
	height: 32px;
	padding: 8px 0 0 15px;
	margin-bottom: 10px;
	background: black;
	font-size: 18px;
	color: #DADADA;
}
form.form1 {
    border-left: 1px solid black;
    border-right: 1px solid black;
    padding-bottom: 10px;
    border-bottom: 1px solid black;
    background: black;
    box-shadow: 5px 5px 10px #ccc;
}
#logo{
	background:url(images/final.gif);
}
#menu {
	width: 1000px;
	background:none;
	margin-left:330px;
}
.luka{
	float:left;
}
#header{
	
	width:860px;
	background:black;
	height: 52px;
	margin: 0 auto;
}
.tabtop {
	margin-top:20px;
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
				
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
							<img  class="luka" src="final.png" width="1000px" height="438px">
					</div>
				
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							
							</h1>
							<h1>Most Popular Books</h1>
							<div class="entry">
								<br>
								
								<br>		
								
								<table>
								<tbody>
								<tr>
								<td valign="top" width="20%" align="center">
														<a href="detail.php?id=1&amp;cat=Architecture">
														<img src="upload_image/ARC9.jpg" width="80" height="100">
														<br>A Dictionary of Architecture </a>
													</td>
													<td valign="top" width="20%" align="center">
														<a href="detail.php?id=2&amp;cat=Architecture">
														<img src="upload_image/ARC8.jpg" width="80" height="100">
														<br>Elephant Kingdom : Sculptures from Indian Architecture </a>
													</td>
													<td valign="top" width="20%" align="center">
														<a href="detail.php?id=4&amp;cat=Architecture">
														<img src="upload_image/ARC10.jpg" width="80" height="100">
														<br>A Social History of Indian Architecture </a>
													</td>
													</tr>
													</tbody>
													</table>
													<table class="tabtop">
													<tbody>
													<tr>
													<td valign="top" width="20%" align="center">
														<a href="detail.php?id=23&amp;cat=Low Books">
														<img src="upload_image/tax1.jpg" width="80" height="100">
														<br>Your Income-Tax 2010</a>
													</td>
													<td valign="top" width="20%" align="center">
														<a href="detail.php?id=37&amp;cat=Business">
														<img src="upload_image/business.jpg" width="80" height="100">
														<br>Investing for Beginners</a>
													</td>
													<td valign="top" width="20%" align="center">
														<a href="detail.php?id=5&amp;cat=Astrology">
														<img src="upload_image/ASTRO1.jpg" width="80" height="100">
														<br>YOGIS, DESTINY &amp; THE WHEEL OF TIME </a>
													</td>
													</tr>
													</tbody>
													</table>
													<table class="tabtop">
													<tbody>
													<tr>
													<td valign="top" width="20%" align="center">
														<a href="detail.php?id=30&amp;cat=Sports">
														<img src="upload_image/c2.jpg" width="80" height="100">
														<br>Dream Team India: The Best World Cup Squad Ever !</a>
													</td>
													<td valign="top" width="20%" align="center">
														<a href="detail.php?id=49&amp;cat=Terrorism">
														<img src="upload_image/terr2.jpg" width="80" height="100">
														<br>PAKISTAN`S DRIFT INTO EXTREMISM</a>
													</td>
													<td valign="top" width="20%" align="center">
														<a href="detail.php?id=6&amp;cat=Forest">
														<img src="upload_image/forest.jpg" width="80" height="100">
														<br>You Deserve, We Conserve A Biotechnological Approach to Wild</a>
													</td>
													</tr>
													</tbody>
													</table>
													<table class="tabtop">
													<tbody>
													<tr>
													<td valign="top" width="20%" align="center">
														<a href="detail.php?id=8&amp;cat=Programming">
														<img src="upload_image/comp9.jpg" width="80" height="100">
														<br>Java &amp; Xml</a>
													</td>
													<td valign="top" width="20%" align="center">
														<a href="detail.php?id=12&amp;cat=Programming">
														<img src="upload_image/0596000278.jpg" width="80" height="100">
														<br>Programming with Perl</a>
													</td>
													<td valign="top" width="20%" align="center">
														<a href="detail.php?id=28&amp;cat=Programming">
														<img src="upload_image/comp2.jpg" width="80" height="100">
														<br>Debugging Microsoft .NET 2.0 Applications</a>
													</td>
													</tr>
													</tbody>
													</table>
								
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
