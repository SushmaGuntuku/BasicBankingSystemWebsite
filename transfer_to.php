<?php
session_start();
$con=mysqli_connect('localhost','root','','bank');
$name1=$_SESSION['name'];
$q="select name from users where not name='$name1'";
$result=mysqli_query($con,$q);
?>


<html>
<head>
   <title>Transfer</title>
	<style>
		body{
			background-image:url("images/t.jpg");
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
		.form{
			text-align:center;
			
		}
		.button{
		text-align:center;
		}
		
		table{
			background:transparent;
			padding:50px;
			border:2px ridge black;
		}
		.home_but{
		background-color:#0B4713;
		color:white;
		width: 220px;
        height: 51px;
		border-radius: 10px;
	    border: 1px solid black;
	   }
	.home_but:hover{
		filter: blur(1px);
		background-color:white;
		color:green;
		font-size:20px;
		border-radius:25px;
	}
	.button.c:hover{
		background-color:white;
		border-radius:25px;
	}
	</style>
</head>
<body>
	<center>
		<div class="view">
			<br><br>
			<h2 style=" font-size:45px;color:black;text-shadow: 2px 2px black;">Transfer Amount</h2>
			<form action="checkcredit.php" method="post" >
				<div class="border">
				<table>
					<tr>
						<td style="font-size:12pt;color:#010114;">
							<label for="sender" align="left">Receiver Name:</label>
							&nbsp; 
							<select name="receiver" style="font-size: 12pt; height: 28px; width:290px;">
           <?php while($row = $result->fetch_assoc()) { ?>
			<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
			<?php } ?>
			</td>
		</tr><br>
		<tr>
			<td>
			<br><label for="transfer">Amount:</label> 
			 &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<input type="number" name="transfer" style="font-size: 12pt; height: 28px; width:290px;" required></td>
		</tr>
       <tr>
			<td>
				<div class="button">
				<br> 
				&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
				<button type="submit" class="c" value="Credit" style="color:white;background-color:#0B4713;font-size:18px;height:40px; width:100px;">Transfer</button>
				</div>
		   </td>
        </tr>
       </table>
	   </div>
      </form>
    </div><br>
	<form action="user.php" method="post">
			<div class="buttons">
				<button class="home_but" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button>
			</div>
	</form>
</center>
</body>
</html>