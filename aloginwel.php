<?php 
require_once ('process/dbh.php');
$sql = "SELECT id, firstName, lastName,  points FROM employee, rank WHERE rank.eid = employee.id order by rank.points desc";
$result = mysqli_query($conn, $sql);
?>


<html>
<head>
	<title>Admin Panel | Cutting Tools</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
</head>
<body>
	
	<header>
		<nav>
			<h1>Trimurti Tools</h1>
			<ul id="navli">
				<li><a class="homered" href="aloginwel.php"  >HOME</a></li>
				<li><a class="homeblack" href="addemp.php"  >Add Employee</a></li>
				<li><a class="homeblack" href="viewemp.php"  >View Employee</a></li>
				<li><a class="homeblack" href="assign.php"  >Assign Project</a></li>
				<li><a class="homeblack" href="assignproject.php"  >Project Status</a></li>
				<li><a class="homeblack" href="salaryemp.php"  >Salary Table</a></li>
				<li><a class="homeblack" href="empleave.php"  >Employee Leave</a></li>
				<li><a class="homeblack" href="attend.php"  >Employee Attendance</a></li>

				<li><a class="homeblack" href="admin_home.php">Products</li>
			<li><a class="homeblack" href="transaction.php"  >Transactions</a></li>
			<li><a class="homeblack" href="customer.php"  >Customers</a></li>
			<li><a class="homeblack" href="message.php"  >Messages</a></li>
			<li><a class="homeblack" href="order.php"  >Orders</a></li>

			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Empolyee Leaderboard </h2>
		
    	<table>

			<tr bgcolor="#000">
				<th align = "center">Seq.</th>
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				<th align = "center">Points</th>
				

			</tr>

			

			<?php
				$seq = 1;
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$seq."</td>";
					echo "<td>".$employee['id']."</td>";
					
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['points']."</td>";
					
					$seq+=1;
				}


			?>

		</table>
		

		<div class="p-t-20">
			<button class="btn btn--radius btn--green" type="submit" style="float: right; margin-right: 60px"><a href="reset.php" style="text-decoration: none; color: white"> Reset Points</button>
		</div>

		
	</div>
</body>
</html>