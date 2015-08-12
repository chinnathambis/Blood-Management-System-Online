
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
						
						<li class="active"><a href="blood_quantity.php">Change Blood Stock</a></li>
						<li><a href="hospital_home.php">Hospital Home</a></li>
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
	
?>


	<a class="topnav" href="hospital_home.php" ;>home</a>
</div>
	<a class="topnav" href="right-sidebar.html" ;>Logout</a>
</div>
<?php
$con=mysql_connect("localhost","root","root","blood");
mysql_select_db("blood", $con);
$bg=$_GET['bgroup'];
$unit=$_GET['unit'];

$sql="UPDATE hospitalregister SET `$bg` = '$unit' where username = '$nam'";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
 }
echo "<br><br><center><h3>Record Changed Completed </h3></center>";
?>

<div style="float:left;width:1200px;word-spacing:40px;font-size:20;padding-left:25px;text-align:center;">
	<a class="topnav" href="blood_quantity.php" ;>Back</a>
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
