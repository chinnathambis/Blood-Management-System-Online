<!DOCTYPE HTML>

<html>
	
	<head>
		<title>RED CROSS</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>

	</head>
	<body>

		<!-- Header -->
		<div id="header">
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="index.html">RED CROSS</a></h1>
				</div>
				
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="active"><a href="hospital_home.php">Homepage</a></li>
						<li><a href="right-sidebar.html">Logout</a></li>
					</ul>
				</nav>
			</div>
		</div>

<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row"> 

					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>Change Blood Quantity</h2>
								<span class="byline">Online Blood Bank Management System</span>
							</header>
							
							<center>


<?php
	session_start();
	if(!(isset($_SESSION['uname'])))
		header("Location:patient.php");
?>
	<center>
	<form action="edit.php" method="get">
		
	<table>
		<tr>
			<td><label>Blood Group</label></td>
			<td>
  				<select name="bgroup">
   				<option>A-</option>
   				<option>A+</option>
   				<option>B-</option>
   				<option>B+</option>
   				<option>AB-</option>
   				<option>AB+</option>
   				<option>O-</option>
   				<option>O+</option>
  				</select>
 			</td>		
		</tr>
		<tr>	<td><label>Unit Present</label></td>
			<td><input type="text" name="unit"></td>		
		
		</tr>
		<tr>
			<td><input type="submit" value="Submit"></td>
			<td><input type="reset"  value="Reset"></td>
		</tr>
	</table>
		
	</form>
	</center>	



						</section>
					</div>
					
					<!-- Sidebar -->
					<div id="sidebar" class="4u">
						<section>
							<header>
								Team Leader<h2> Ravi Ranjan</h2>
							</header>
							<ul class="style">
								<li>
									<p class="posted">Ravi Ranjan  |  (Analysis and design of project ) </p>
									<img src="images/pic04.jpg" alt="" />
									<p class="text">Here , i have taken help of google to analyse how blood bank works .</p>
								</li>
								<li>
									<p class="posted">Manohar Kumar Singh  |  (php and database connectivity)</p>
									<img src="images/pic05.jpg" alt="" />
									<p class="text">Here , i used php as back-end and mysql for database storage</p>
								</li>
								<li>
									<p class="posted">Chinnathambi Sundaram  |  (Front-end and design of webpages)</p>
									<img src="images/pic06.jpg" alt="" />
									<p class="text">Here , i used html , css ,js for giving good look to webpages.</p>
								</li>
							</ul>
						</section>
					</div>
					
				</div>
			</div>
		</div>

			<!-- Footer -->
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="4u">
						<section>
							<h2>Latest News</h2>
							<ul class="default">
								<li><a href="#">Daily information about blood donation details and lates media news.</a></li>
								<li><a href="#">Information of blood details and resource details.</a></li>
								
							</ul>
						</section>
					</div>
					<div class="4u">
						<section>
							<h2>Awards & Honors</h2>
							<ul class="default">
								<li><a href="#">Porcelain Pelican Awards Ceremony.</a></li>
								<li><a href="#"> Reduce the risk of transfusion related adverse events</a></li>

							</ul>
						</section>
					</div>
					<div class="4u">
						<section>
							<h2>DONATION SECTION</h2>
							<ul class="default">
								<li><a href="#">Blood donation is when a person voluntarily gives blood</a></li>
								<li><a href="#">Gathered as a result of blood donation or collection</a></li>

							</ul>
						</section>
					</div>
				</div>
			</div>
		</div>

		<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				<a href="http://facebook.com/ravi.ranjan">Ravi Ranjan | </a><a href="http://facebook.com/manohar.kumar">Manohar Kumar Singh |</a><a href="http://facebook.com/chinnathambi.sundaram"> Chinnathambi Sundaram</a>
			</div>
		</div>
		
	</body>
</html>
