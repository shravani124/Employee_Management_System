<?php 
require_once ('process/dbh.php');
$sql = "SELECT id, firstName, lastName,  points FROM employee, rank WHERE rank.eid = employee.id order by rank.points desc";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
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
			<li><a class="homeblack" href="alphaware/admin/transaction.php"  >Transactions</a></li>
			<li><a class="homeblack" href="alphaware/admin/customer.php"  >Customers</a></li>
			<li><a class="homeblack" href="alphaware/admin/message.php"  >Messages</a></li>
			<li><a class="homeblack" href="alphaware/admin/order.php"  >Orders</a></li>
			<li><a class="homeblack" href="alogin.html"  >Logout</a></li>
			

			</ul>
		</nav>
	</header>
	
	<div id="rightcontent" style="position:absolute; top:10%;">
			<div class="alert alert-info"><center><h2>Transactions	</h2></center></div>
			<br />
				<label  style="padding:5px; float:right;"><input type="text" name="filter" placeholder="Search Transactions here..." id="filter"></label>
			<br />
			
			<div class="alert alert-info">
			<table class="table table-hover" style="background-color:;">
				<thead>
				<tr style="font-size:16px;">
					<th>ID</th>
					<th>DATE</th>
					<th>Customer Name</th>
					<th>Total Amount</th>
					<th>Order Status</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody>
				<?php
					
					$query = mysqli_query($conn, "SELECT * FROM transaction LEFT JOIN customer ON customer.customerid = transaction.customerid") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query))
						{
						$id = $fetch['transaction_id'];
						$amnt = $fetch['amount'];
						$o_stat = $fetch['order_stat'];
						$o_date = $fetch['order_date'];
						
						$name = $fetch['firstname'].' '.$fetch['lastname'];
				?>
				<tr>
					<td><?php echo $id; ?></td>
					<td><?php echo $o_date; ?></td>
					<td><?php echo $name; ?></td>
					<td><?php echo $amnt; ?></td>
					<td><?php echo $o_stat; ?></td>
					<td><a href="receipt.php?tid=<?php echo $id; ?>">View</a>
					<?php 
					if($o_stat == 'Confirmed'){
					
					}elseif($o_stat == 'Cancelled'){
					
					}else{
					echo '| <a class="btn btn-mini btn-info" href="confirm.php?id='.$id.'">Confirm</a> ';
					echo '| <a class="btn btn-mini btn-danger" href="cancel.php?id='.$id.'">Cancel</a></td>';
					}					
					?>
				</tr>		
				<?php
					}
				?>
				</tbody>
			</table>
			</div>
			</div>
			
  <?php
  /* stock in */
  if(isset($_POST['stockin'])){
  
  $pid = $_POST['pid'];
  
 $result = mysqli_query($conn, "SELECT * FROM `stock` WHERE product_id='$pid'") or die(mysqli_error());
 $row = mysqli_fetch_array($result);
 
  $old_stck = $row['qty'];
  $new_stck = $_POST['new_stck'];
  $total = $old_stck + $new_stck;
 
  $que = mysqli_query($conn, "UPDATE `stock` SET `qty` = '$total' WHERE `product_id`='$pid'") or die(mysqli_error());
  
  header("Location:admin_product.php");
 }
 
  /* stock out */
 if(isset($_POST['stockout'])){
  
  $pid = $_POST['pid'];
  
 $result = mysqli_query($conn, "SELECT * FROM `stock` WHERE product_id='$pid'") or die(mysqli_error());
 $row = mysqli_fetch_array($result);
 
  $old_stck = $row['qty'];
  $new_stck = $_POST['new_stck'];
  $total = $old_stck - $new_stck;
 
  $que = mysqli_query($conn, "UPDATE `stock` SET `qty` = '$total' WHERE `product_id`='$pid'") or die(mysqli_error());
  
  header("Location:admin_product.php");
 }
  ?>				
			
</body>
</html>
<script type="text/javascript">
	$(document).ready( function() {
		
		$('.remove').click( function() {
		
		var id = $(this).attr("id");

		
		if(confirm("Are you sure you want to delete this product?")){
			
		
			$.ajax({
			type: "POST",
			url: "../function/remove.php",
			data: ({id: id}),
			cache: false,
			success: function(html){
			$(".del"+id).fadeOut(2000, function(){ $(this).remove();}); 
			}
			}); 
			}else{
			return false;}
		});				
	});

</script>