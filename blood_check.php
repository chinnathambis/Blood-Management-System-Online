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
						<li><a href="hospitald.php">Homepage</a></li>
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

			mysql_connect("localhost","root","root","blood");
			mysql_select_db("blood");
    			$nam=$_POST['hname'];
			$nam=stripslashes($nam);
			$nam=mysql_real_escape_string($nam);
			$sql="SELECT * FROM hospitalregister WHERE hname='$nam'";
			$result=mysql_query($sql);
			$count=mysql_num_rows($result);
			if($count==1)
			{
				session_start();
				$_SESSION['pname']=$nam;
							$row=mysql_fetch_array($result);
  				if($row!=0)
				{

					echo "<center><h3>Blood Available In ";
					echo $row[1]."</h3></center>";
					echo "<center><table >";
					echo "<tr>";
  					echo "<th>A-</th><th>" . $row[8] . "</th></tr>";
				        echo "<tr><th>A+</th><th>" . $row[9] . "</th></tr>";	
  					echo "<tr><th>B-</th><th>" . $row[10] . "</th></tr>";
  					echo "<tr><th>B+</th><th>" . $row[11] . "</th></tr>";
  					echo "<tr><th>AB-</th><th>" . $row[12] . "</th></tr>";
  					echo "<tr><th>AB+</th><th>" . $row[13] . "</th></tr>";
  					echo "<tr><th>O-</th><th>" . $row[14] . "</th></tr>";
  					echo "<tr><th>O+</th><th>" . $row[15] . "</th>";
  					echo "</tr>";
				}
echo "</table></center>";				




			}
			else
				echo "ghanta";
?>
			
			</center>
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
