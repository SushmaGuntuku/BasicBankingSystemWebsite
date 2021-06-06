<?php
session_start();
$con=mysqli_connect('localhost','root','','bank');
$name1=$_SESSION['name'];
$q="select sender,amount from mini_statement where receiver='$name1'";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mi7ni Statement</title>
	<style>
	.ap{
		color:#7E39A6;
	}
		body{
			background-color:black;
			color:white;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-collapse:collapse;
			 background:transparent;
			}
		th{
			color:violet;
			font-size:26px;
			padding:16px;
		}
		
		td{
			font-size:23px;
			color: ;
			padding: 10px 20px 10px 22px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
		}
		h2{
			padding:20px;
			font-size:35px;
			color:#805a46;
			text-shadow: 1px 1px black;
			text-align:center;
		}
		.btn {
			background-color:RoyalBlue;
			border: none;
			color: white;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
		}
		.buttons{
			
			right:42%;
			text-align:center;
		}
		.btn:hover {
			background-color:  DodgerBlue;
		}
		.home_but{
		background-color:#7E39A6;
		color:white;
		width: 220px;
        height: 51px;
		border-radius: 10px;
	    border: 1px solid #00FFFF;
	}
	.home_but:hover{
		filter: blur(1px);
		background-color:white;
		color:#7E39A6;
		font-size:20px;
		border-radius:25px;
	}
	</style>
	</head>
	<body>
		<br><br><br>
		<h2 class="ap"><?php echo "Mini Statement of ".$name1?></h2>
		<table class="f">
			<tr>
				<th>Sender</th>
				<th>Credits</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<div>
		<form action="user.php" method="post">
			<div class="buttons">
			<br><button class="home_but" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button>
			
			</div>
		</form>
		
	</body>
</html>