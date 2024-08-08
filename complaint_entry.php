<?php
					$conn = mysqli_connect("localhost","root","");
					mysqli_select_db($conn,"dbms_p1");
					$sql="select cid from complaint";
					$result=$conn->query($sql);
					$row=mysqli_fetch_row($result);
					if(isset($_POST['submit']))
					{

						$x=$row[0]+1;
						$q1=$_POST['aad'];
						$com=$_POST['cdesc'];
						$date = date('Y-m-d');
						//echo $date;
						$sql="INSERT INTO complaint(aadhar,cdate,cdesc,cid) VALUES('$q1','$date','$com','$x')";

						$results2=mysqli_query($conn,$sql);
						
					if(!$results2)
					{
						echo "<script>alert(' unsuccessful')</script>";
					}
						echo "<script>windows.location.href='home.html'</script>";
					}
				?>
