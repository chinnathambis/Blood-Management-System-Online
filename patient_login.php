<?php

			mysql_connect("localhost","root","root","blood");
			mysql_select_db("blood");
    			$nam=$_POST['name'];
    			$pw=$_POST['pwd'];
			$nam=stripslashes($nam);
			$pw=stripslashes($pw);
			$nam=mysql_real_escape_string($nam);
			$pw=mysql_real_escape_string($pw);
			$sql="SELECT * FROM patientdetail WHERE pname='$nam' and password='$pw'";
			$result=mysql_query($sql);
			$count=mysql_num_rows($result);
			if($count==1)
			{
				session_start();
				$_SESSION['pname']=$nam;
				header("Location:hospitald.php");
			}
			else
				header("location:patientlog.html")
?>
