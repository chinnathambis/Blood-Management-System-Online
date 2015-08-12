
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
						<li><a href="index.html">Homepage</a></li>
						<li><a href="left-sidebar.html">Blood Donor</a></li>
						<li class="active"><a href="right-sidebar.html">Hospitals</a></li>
						<li><a href="no-sidebar.html">Patients</a></li>
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
								<center><h2>Hospital Registration</h2>
								<span class="byline">Online Blood Bank Management System</span></center>
							</header>
							
							<center>



<?php
$con=mysql_connect("localhost","root","root","blood");
mysql_select_db("blood", $con);
$sql="INSERT INTO hospitalregister VALUES('$_POST[username]','$_POST[hname]','$_POST[haddress]','$_POST[state]','$_POST[city]','$_POST[contact]','$_POST[email]
','$_POST[pwd]','0','0','0','0','0','0','0','0')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
 }
echo "<center>Your Record is added </center>";
$result = mysql_query("SELECT * FROM hospitalregister where username = '$_POST[username]'");
echo "<center><table border='5'>";

if($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<th>Hospital</th><td>" . $row['hname'] . "</td></tr>";
  echo "<tr><th>Address</th><td>" . $row['haddress'] . "</td></tr>";
  echo "<tr><th>State</th><td>" . $row['state'] . "</td></tr>";
  echo "<tr><th>City</th><td>" . $row['city'] . "</td></tr>";
  echo "<tr><th>Contact</th><td>" . $row['contact'] . "</td></tr>";
  echo "<tr><th>E-Mail Id</th><td>" . $row['email'] . "</td>";
  echo "</tr>";
  }
echo "</table></center>";
mysql_close($con);
?>
<br>
<a href="recipient.html">Back</a>
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
		<div id="featured">
			<div class="container">
				<div class="row">
					<div class="4u">
						<h2>Blood Donation Campaign</h2>
						<a href="#" class="image full"><img src="images/pic01.jpg" alt="" /></a>
						<p>take it from net and paste here</p> 
						<p><a href="#" class="button">More Details</a></p>
					</div>
					<div class="4u">
						<h2>Awards and Certificates</h2>
						<a href="#" class="image full"><img src="images/pic02.jpg" alt="" /></a>
						<p>about awards</p>
						<p><a href="#" class="button">More Details</a></p>
					</div>
					<div class="4u">
						<h2>Donations</h2>
						<a href="#" class="image full"><img src="images/pic03.jpg" alt="" /></a>
						<p>details of donation accounts</p>
						<p><a href="#" class="button">More Details</a></p>
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
