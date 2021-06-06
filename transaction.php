<?php
session_start();
$con=mysqli_connect('localhost','root','','bank');
$q="select *from mini_statement";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transaction</title>
	<style>
		body{
			background-color:black;			
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-collapse:collapse;
			 background:transparent;
			 width:80%;
			 color:white;
			 padding:5px 20px 5px 20px;
			}
		th{
			color:orange;
			font-size:26px;
			padding:20px;
		}
		
		td:hover{
			opacity:0.7;
			background-color:orange;
			color:black;
			border-radius:5px;
			
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove white;
		}
		h2{
			padding:20px;
			font-size:35px;
			color:#805a46;
			text-shadow: 1px 1px black;
			text-align:center;
		}
		.home_but{
		background-color:orange;
		color:white;
		width: 220px;
        height: 51px;
		border-radius: 10px;
	    border: 1px solid #00FFFF;
		margin-left:750px;
	}
	.home_but:hover{
		filter: blur(1px);
		background-color:white;
		color:orange;
		font-size:20px;
		border-radius:25px;
	}
	h1{
		color:orange;
	}
	</style>
	</head>
	<body>
	<h1><center>Transactions</center></h1>
	<br><br>
		<table class="f">
			<tr>
				<th>Sender</th>
				<th>Receiver</th>
				<th>Amount</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["receiver"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<form action="index.php" method="post">
			<div class="buttons">
				<button class="home_but" type="submit" name="name">Go to HomePage</button>
			</div>
		</form>
		
	</body>
</html>