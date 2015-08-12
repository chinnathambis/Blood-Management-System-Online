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
								<center><h2>Patient Signup</h2>
								<span class="byline">Online Blood Bank Management System</span></center>
							</header>
							



<center>
<form  method="post" action="patientregister.php">
<center>
<table width="450px">

<tr>
 <td valign="top">
  <label>Patient Name</label>
 </td>
 <td valign="top">
  <input  type="text" name="name" maxlength="50" size="30" required>
 </td>
</tr>


<tr>
 <td valign="top">
  <label>Patient Age</label>
 </td>
 <td valign="top">
  <input  type="text" name="age" maxlength="50" size="30" required>
 </td>
</tr>

<tr>
 <td valign="top">
  <label>Patient Gender</label>
 </td>
 <td valign="top">
  <select name="sex">
	<option>Male</option>
	<option>Female</option>
  </select>
 </td>
</tr>

 
 <tr>
 <td valign="top">
  <label>Blood Group</label>
 </td>
 <td valign="top">
  <select name="bgroup">
   <option>a-</option>
   <option>a+</option>
   <option>b-</option>
   <option>b+</option>
   <option>ab-</option>
   <option>ab+</option>
   <option>o-</option>
   <option>o+</option>
  </select>
 </td>
</tr>

<tr>
 <td valign="top">
  <label>Patient Disease</label>
 </td>
 <td valign="top">
  <input  type="text" name="disease" maxlength="30" size="30" required>
 </td>
</tr>


<tr>
 <td valign="top">
  <label>Required Date<br>(yyyy/mm/dd)</label>
 </td>
 <td valign="top">
  <input  type="date" name="datereq" maxlength="30" size="30" required>
 </td>
</tr>


<tr>
 <td valign="top">
  <label for>Comments</label>
 </td>
 <td valign="top">
  <textarea  name="comment" maxlength="1000" cols="25" rows="2" required></textarea>
 </td>


<tr>
 <td valign="top">
  <label>Password</label>
 </td>
 <td valign="top">
  <input  type="password" name="pwd" maxlength="50" size="30" required>
 </td>
</tr>

</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Register">   
  <input type="reset" value="Reset">
 </td>
</tr>
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
