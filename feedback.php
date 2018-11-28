<html>
	<head>
		<style>

			table {
				font-family: arial, sans-serif;
				border-collapse: collapse;
				width: 100%;
			}

			td, th {
				border: 1px solid black;
				text-align: left;
				padding: 8px;
			}

			tr:nth-child(even) {
				background-color: #dddddd;
			}
			p{
				color:#2196F3;
				font-family:verdana;
				font-size:40px;
			}
			
		</style>

	</head>
	<body>
	
	<?php
		include 'dbconnect.php';
		$conn = OpenCon();
		$sql="SELECT cust_name,cust_email,sub,msg FROM contact_us";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			echo"<p align='center'><i>Hey!Here is a feedback from customers</i></p>";
			echo "<table><tr><th>Customer Name</th><th>Email ID</th><th>Subject</th><th>Message</th></tr>";
			while($row = $result->fetch_array())
			{
				echo "<tr><td>".$row['cust_name']."</td>";
				echo "<td><a href='mailto:".$row['cust_email']."?Subject=Hello' target='_top'>".$row['cust_email']."</td>";
				echo "<td>".$row['sub']."</td>";
				echo "<td>".$row['msg']."</td>";
				echo "</tr>";
			}
			echo"</table>";
		}
		CloseCon($conn)
	?>
	
	</body>
</html>