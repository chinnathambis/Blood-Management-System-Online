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
						<li class="active"><a href="hospitald.php">Homepage</a></li>
						<li><a href="no-sidebar.html">Logout</a></li>
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
							<center>
								<span class="byline">Online Blood Bank Management System</span></center>
							</header>

							
 



<?php
	session_start();
	$_SESSION['pname'];
	$nam=$_SESION['pname'];
?>


<center>
<h2> SEARCH BLOOD IN THIS HOSPITAL</h2>
<?php
$con=mysql_connect("localhost","root","root");
mysql_select_db("blood", $con);
$result = mysql_query("SELECT * FROM hospitalregister  ");
echo "<table border='1'>
<tr>
<th><td>Hospital</td></th><th><td>Address</td></th><th><td>State</td></th><th><td>City</td></th><th><td>Mobile No.</td></th><th><td>E-mail</td></th></tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<th><td>" . $row['hname'] . "</td></th>";
  echo "<th><td>" . $row['haddress'] . "</td></th>";
  echo "<th><td>" . $row['state'] . "</td></th>";
  echo "<th><td>" . $row['city'] . "</td></th>";
  echo "<th><td>" . $row['contact'] . "</td></th>";
  echo "<th><td>" . $row['email'] . "</td></th>";
  echo "</tr>";
  }
echo "</table>";
mysql_close($con);
?>

<br>
<form action="blood_check.php" method="post">
	<center>
		<h3>Check Status Of Blood In Hospital</h3>
		<table>
			<tr><td><label>Enter Hospital Name</label></td><td><input type="text" name="hname" ></td></tr>
			
			<tr><td><input type="submit" value="Check"></td><td><input type="reset" value="reset"></td></tr>	
		</table>
	</center>
</form>


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
