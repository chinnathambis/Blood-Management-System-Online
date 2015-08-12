
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
	<body class="no-sidebar">

		
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
						<li><a href="right-sidebar.html">Hospitals</a></li>
						<li class="active"><a href="no-sidebar.html">Patients</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row"> 
				<!-- Content -->
					<div id="content" class="12u skel-cell-important">
						<section>
							<header>
								<center><h2>Patient Details</h2>
								<span class="byline">Online Blood Bank Management System</span></center>
							</header>
							



<center>




<?php
$con=mysql_connect("localhost","root","root");
mysql_select_db("blood", $con);
$sql="INSERT INTO patientdetail VALUES('$_POST[name]','$_POST[age]','$_POST[sex]','$_POST[bgroup]','$_POST[disease]','$_POST[datereq]','$_POST[pwd]','$_POST[comment]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
$result = mysql_query("SELECT pname,age,pgender,bgroup,disease,requiredate,comment FROM patientdetail where pname = '$_POST[name]'");
echo "<table border='1'>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  
  echo "<td>Name</td><td>" . $row['pname'] . "</td></tr>";
  echo "<tr><td>Age</td><td>" . $row['age'] . "</td></tr>";
  echo "<tr><td>Gender</td><td>" . $row['pgender'] . "</td></tr>";
  echo "<tr><td>Blood Group</td><td>" . $row['bgroup'] . "</td></tr>";
  echo "<tr><td>Disease</td><td>" . $row['disease'] . "</td></tr>";
  echo "<tr><td>Required</td><td>" . $row['requiredate'] . "</td></tr>";
  echo "<tr><td>Comment</td><td>" . $row['comment'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
mysql_close($con);
?>
<br>
<div style="word-spacing:40px;font-size:20;">
	<a class="topnav" href="no-sidebar.html">Back</a>


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
