

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
					<h1><a href="">RED CROSS</a></h1>
				</div>
				
				<!-- Nav -->
				<nav id="nav">
					<ul>
						
						<li><a href="blood_quantity.php">Change Blood Stock</a></li>
						<li class="active"><a href="hospital_home.php">Hospital Home</a></li>
						<li><a href="right-sidebar.html">Logout</a></li>
					</ul>
				</nav>
			</div>
		</div>

		
<?php
	session_start();
	if(!(isset($_SESSION['uname'])))
		header("Location:patient.php");
		$nam=$_SESSION['uname'];
		
		//echo "<center><h2>".$nam."</h2></center>";

$con=mysql_connect("localhost","root","root","blood");
mysql_select_db("blood", $con);
$result = mysql_query("SELECT * FROM hospitalregister where username = '$nam' ");

echo "<center><table border='10'><h3>Blood Available in Hospital</h3><br>
<tr><th>Blood Group</th>
<th>A-</th><th>A+</th><th>B-</th><th>B+</th><th>AB-</th><th>AB+</th><th>O-</th><th>O+</th>
</tr>";
	$row=mysql_fetch_array($result);
  if($row!=0)
{
  echo "<tr><th>Units Of Blood</th>";
  echo "<th>" . $row[8] . "</th>";
  echo "<th>" . $row[9] . "</th>";	
  echo "<th>" . $row[10] . "</th>";
  echo "<th>" . $row[11] . "</th>";
  echo "<th>" . $row[12] . "</th>";
  echo "<th>" . $row[13] . "</th>";
  echo "<th>" . $row[14] . "</th>";
  echo "<th>" . $row[15] . "</th>";
  echo "</tr>";
}
echo "</table></center>";
mysql_close($con);
?>
			
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
